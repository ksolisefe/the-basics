<div>
    <form wire:submit="add">
        <input class="border" type="text" wire:model="todo">
        <button type="submit">Add</button>
    </form>
    <br>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
