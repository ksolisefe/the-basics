<div>
    <h2>Posts:</h2>

    <flux:table class="bg-gray-800 p-3">
        <flux:table.columns>
            <flux:table.column>Title</flux:table.column>
            <flux:table.column>Content</flux:table.column>
            <flux:table.column></flux:table.column>
        </flux:table.columns>
        @foreach ($posts as $post)
            <flux:table.rows wire:key="{{ $post->id }}">
                <flux:table.row>
                    <flux:table.cell>{{ $post->title }}</flux:table.cell>
                    <flux:table.cell>{{ str($post->content)->words(15) }}</flux:table.cell>
                    <flux:table.cell>
                        <flux:button
                            type="button"
                            wire:click="delete({{ $post->id }})"
                            wire:confirm="Are you sure you want to delete this post"
                        >
                            Delete
                        </flux:button>
                    </flux:table.cell>
                </flux:table.row>
            </flux:table.rows>
        @endforeach
    </flux:table>
</div>
