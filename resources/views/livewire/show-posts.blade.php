<div>
    <h2>Posts:</h2>

    <flux:table class="bg-gray-800 p-3">
        <flux:table.columns>
            <flux:table.column>Title</flux:table.column>
            <flux:table.column>Content</flux:table.column>
            <flux:table.column></flux:table.column>
        </flux:table.columns>
        @foreach ($posts as $post)
            <livewire:post-row :$post :key="$post->id">
        @endforeach
    </flux:table>
</div>
