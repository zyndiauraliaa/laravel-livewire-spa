<div>
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="update">

                {{-- Hidden field untuk ID --}}
                <input type="hidden" wire:model="postId">

                {{-- Input Title --}}
                <div class="form-group">
                    <label for="title">TITLE</label>
                    <input type="text"
                           id="title"
                           wire:model="title"
                           class="form-control @error('title') is-invalid @enderror"
                           placeholder="Masukkan Title">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                {{-- Input Content --}}
                <div class="form-group">
                    <label for="content">KONTEN</label>
                    <textarea id="content"
                              wire:model="content"
                              class="form-control @error('content') is-invalid @enderror"
                              rows="4"
                              placeholder="Masukkan Konten"></textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                {{-- Tombol Submit --}}
                <button type="submit" class="btn btn-primary">UPDATE</button>

            </form>
        </div>
    </div>
</div>