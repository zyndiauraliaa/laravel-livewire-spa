<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')] // ✅ pastikan file ada di resources/views/layouts/app.blade.php
class Create extends Component
{
    public $title;
    public $content;

    /**
     * Validasi dan simpan data
     */
    public function store()
    {
        $this->validate([
            'title'   => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title'   => $this->title,
            'content' => $this->content,
        ]);

        session()->flash('message', 'Data Berhasil Disimpan.');

        return redirect()->route('post.index');
    }

    /**
     * Tampilkan view Livewire
     */
    public function render()
    {
        return view('livewire.post.create');
    }
}