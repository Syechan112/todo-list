<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="style.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<div class="mt-4">
    <h1 class="text-2xl font-bold text-center">APLIKASI</h1>
<p class="text-xl font-semibold text-center">TO DO LIST</p>
</div>

<form action="{{ route('todos.store') }}" method="POST" class="flex max-w-md p-4 mx-auto mt-10 mb-4 space-x-4 bg-white shadow-md rounded-xl">
    @csrf
    <input type="text" name="title" placeholder="Todo baru" class="flex-1 px-4 py-2 bg-gray-100 border-0 hover:bg-white rounded-xl focus:outline-none focus:ring-0" required>
    <button type="submit" class="px-4 py-2 text-white transition duration-300 border-0 bg-custom-cream rounded-xl hover:bg-custom-cream-2">
        <img src="/svg/add.svg" alt="">
    </button>
</form>


    <ul>
        @foreach($todos as $todo)
        <li x-data="{ completed: {{ $todo->completed ? 'true' : 'false' }} }"
            class="flex items-center justify-between max-w-md p-4 mx-auto mb-4 bg-white border shadow-md rounded-xl">
            <span x-bind:class="{ 'line-through text-gray-500': completed }" x-on:click="completed = !completed" class="text-base cursor-pointer md:text-lg">
                {{ $todo->title }}
            </span>
            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" class="flex items-center space-x-4">
                @csrf @method('DELETE')
                <button type="submit" class="px-4 py-2 text-red-500 transition duration-300 bg-white border-0 hover:text-red-700">
                    <img src="/svg/delete.svg" alt="">
                </button>
            </form>
        </li>
        @endforeach
        </ul>
    </div>
</body>
</html>
