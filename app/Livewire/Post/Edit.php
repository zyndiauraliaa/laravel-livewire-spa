<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')] // ✅ Mengarah ke resources/views/layouts/app.blade.php
class Edit extends Component
{
    public $postId;
    public $title;
    public $content;

    /**
     * Load data saat komponen dimount
     */
    public function mount($id)
    {
        $post = Post::findOrFail($id); // ✅ Gunakan findOrFail untuk error otomatis jika data tidak ditemukan

        $this->postId  = $post->id;
        $this->title   = $post->title;
        $this->content = $post->content;
    }

    /**
     * Simpan perubahan data
     */
    public function update()
    {
        $this->validate([
            'title'   => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($this->postId);

        if ($post) {
            $post->update([
                'title'   => $this->title,
                'content' => $this->content,
            ]);

            session()->flash('message', 'Data Berhasil Diupdate.');
        }

        return redirect()->route('post.index');
    }

    public function render()
    {
        return view('livewire.post.edit');
    }
}