<flux:table.rows @class(['archived' => $post->isArchived ])>
    <flux:table.row>
        <flux:table.cell class="mx-2">{{ $post->title }}</flux:table.cell>
        <flux:table.cell class="mx-2">{{ str($post->content)->words(15) }}</flux:table.cell>
        <flux:table.cell class="mx-2">
            <flux:button
                type="button"
                wire:click="$parent.delete({{ $post->id }})"
                wire:confirm="Are you sure you want to delete this post"
            >
                Delete
            </flux:button>
            @unless ($post->isArchived)
                <flux:button
                    type="button"
                    wire:click="archive"
                    wire:confirm="Are you sure you want to archive this post"
                >
                    Archive
                </flux:button>
            @endunless
        </flux:table.cell>
    </flux:table.row>
</flux:table.rows>