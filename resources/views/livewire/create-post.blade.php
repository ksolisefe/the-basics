<div class="flex flex-col">
    <h2>New Post:</h2>

    <form wire:submit="save">
        <div class="flex flex-col">
            <label>
                <span>Title</span>
                <input type="text" wire:model="title">
                @error('title') <em>{{ $message }}</em> @enderror
            </label>
            
            <label>
                <span>Content</span>
                <textarea wire:model="content"></textarea>
                @error('content') <em>{{ $message }}</em> @enderror
            </label>
    
            <flux:button type="submit">Save</flux:button>
        </div>
    </form>
</div>
