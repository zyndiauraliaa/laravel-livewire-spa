<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')] // ✅ mengarah ke resources/views/layouts/app.blade.php
class Index extends Component
{
    use WithPagination;

    /**
     * Hapus data post
     */
    public function destroy($postId)
    {
        $post = Post::find($postId);

        if ($post) {
            $post->delete();
            session()->flash('message', 'Data Berhasil Dihapus.');
        }
    }

    /**
     * Render tampilan dan kirim data ke view
     */
    public function render()
    {
        return view('livewire.post.index', [
            'posts' => Post::latest()->paginate(5),
        ]);
    }
}