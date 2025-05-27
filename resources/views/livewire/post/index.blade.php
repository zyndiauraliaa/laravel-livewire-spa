<div>
    {{-- Flash Message --}}
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    {{-- Tombol Tambah --}}
    <a href="{{ route('post.create') }}" class="btn btn-success mb-3">TAMBAH POST</a>

    {{-- Tabel Data --}}
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">TITLE</th>
                <th scope="col">CONTENT</th>
                <th scope="col" class="text-center">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td class="text-center">
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                        <button wire:click="destroy({{ $post->id }})"
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                            DELETE
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center text-muted">Belum ada data post.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="mt-3">
        {{ $posts->links() }}
    </div>
</div>