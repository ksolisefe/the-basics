<div class="flex flex-col">
    <h2>New Post:</h2>

    <form wire:submit="save">
        <div class="flex flex-col gap-2">
            <label class="flex flex-col">
                <span>Title</span>
                <input type="text" wire:model="title" class="bg-white/5">
                @error('title') <em>{{ $message }}</em> @enderror
            </label>
            
            <label class="flex flex-col">
                <span>Content</span>
                <textarea wire:model="content" class="bg-white/5"></textarea>
                <small>Words:
                    <span x-text="$wire.content.split(' ').length - 1"></span>
                </small>
                @error('content') <em>{{ $message }}</em> @enderror
            </label>
    
            <flux:button type="submit">Save</flux:button>
        </div>
    </form>
</div>
