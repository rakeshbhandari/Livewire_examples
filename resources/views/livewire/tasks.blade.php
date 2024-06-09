<div>
    <h1>
        Tasks
    </h1>


    <input type="text"
           wire:model="task">

    <button wire:click='add'
            class="p-2 bg-red-500">Add Task</button>


    <ul>
        @foreach ($tasks as $task)
        <li>
            {{ $task }}
        </li>
        @endforeach
    </ul>
</div>
