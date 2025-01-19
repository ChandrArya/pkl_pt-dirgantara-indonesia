@extends('layouts.app')

@section('title', 'Kanban Board')

@section('header')
    @include('layouts.navbar')
@endsection

@section('content')

    <div class="p-6 bg-blue-900">
        <h2 class="text-4xl text-white font-semibold text-center ">Kanban Spirit Dirgantara</h2>
        <!-- Button to trigger modal -->
        <button onclick="openAddListModal()"
            class="mt-4 bg-green-500 text-white rounded-lg py-2 px-4 text-sm font-medium hover:bg-green-600 transition">
            Add New List
        </button>
    </div>

    <div class="kanban-board flex overflow-x-auto space-x-6 p-6 bg-blue-900 " style="height: 70vh">
        @foreach ($board->boardLists as $boardList)
            <div class="kanban-list bg-white rounded shadow-lg p-4 w-80 flex-shrink-0"
                style="min-height: {{ max(count($boardList->tasks), 3) * 100 + 150 }}px;">
                <!-- List Header -->
                <div class="flex justify-between items-center mb-4">
                    <!-- Edit Board List Name -->
                    <div class="flex items-center">
                        <span id="listName-{{ $boardList->id }}"
                            class="font-semibold text-lg text-gray-800">{{ $boardList->name }}</span>

                    </div>

                    <div class="flex space-x-2">
                        <button class="ml-2 text-yellow-500 hover:text-yellow-700 text-md -mt-1"
                            onclick="openEditListModal({{ $boardList->id }}, '{{ $boardList->name }}')"
                            title="Edit List Name">
                            <i class="fas fa-edit"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700"
                                viewBox="0 0 348.882 348.882">
                                <path
                                    d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                    data-original="#000000" />
                                <path
                                    d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                    data-original="#000000" />
                            </svg>
                        </button>

                        <!-- Delete Board List -->
                        <form action="{{ route('kanban.deleteBoardList', $boardList->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this list?');">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:text-red-800 text-md" title="Delete Board List">
                                <i class="fas fa-trash-alt"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                        data-original="#000000" />
                                    <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                        data-original="#000000" />
                                </svg>
                            </button>
                        </form>

                    </div>


                </div>

                <!-- Task List -->
                <ul class="space-y-4">
                    @foreach ($boardList->tasks as $task)
                        <li
                            class="bg-blue-50 border border-blue-200 text-blue-800 rounded-lg p-3 shadow-sm flex justify-between items-center">
                            <div class="flex items-center space-x-2">
                                <!-- Checkbox to mark task as completed -->
                                <input type="checkbox" class="task-checkbox" data-task-id="{{ $task->id }}"
                                    {{ $task->completed ? 'checked' : '' }}
                                    onchange="moveTaskToCompletedList({{ $task->id }}, this)">
                                <span>{{ $task->title }}</span>
                            </div>

                            <div class="flex space-x-2">
                                <!-- Edit Task -->
                                <button class="text-yellow-500 hover:text-yellow-700 text-sm"
                                    onclick="openEditModal({{ $task->id }}, '{{ $task->title }}')" title="Edit Task">
                                    <i class="fas fa-edit"></i> Edit
                                </button>

                                <!-- Delete Task -->
                                <form action="{{ route('kanban.deleteTask', $task->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this task?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:text-red-800 text-sm" title="Delete Task">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <!-- Add Task Form -->
                <form action="{{ route('kanban.storeTask') }}" method="POST" class="mt-4 h-auto">
                    @csrf
                    <input type="hidden" name="board_list_id" value="{{ $boardList->id }}">
                    <input type="text" name="title" placeholder="New Task"
                        class="w-full border border-gray-300 rounded-lg p-2 text-sm">
                    <button type="submit"
                        class="mt-2 w-full bg-blue-500 text-white rounded-lg py-2 text-sm font-medium hover:bg-blue-600 transition">
                        Add Task
                    </button>
                </form>
            </div>
        @endforeach

        <!-- Add List Form -->

    </div>

    <!-- Modal for Add List -->
    <div id="addListModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <h3 class="text-lg font-semibold mb-4">Add New Board List</h3>
            <form action="{{ route('kanban.storeBoardList') }}" method="POST">
                @csrf
                <input type="hidden" name="board_id" value="{{ $board->id }}">
                <input type="text" name="name" placeholder="Add new list..."
                    class="w-full border border-gray-300 rounded-lg p-2 text-sm mb-4">
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeAddListModal()"
                        class="bg-gray-500 text-white rounded-lg py-2 px-4 text-sm hover:bg-gray-600 transition">
                        Cancel
                    </button>
                    <button type="submit"
                        class="bg-green-500 text-white rounded-lg py-2 px-4 text-sm hover:bg-green-600 transition">
                        Add List
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- Edit Modal for Task -->
    <div id="editModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <h3 class="text-lg font-semibold mb-4">Edit Task</h3>
            <form id="editForm" method="POST">
                @csrf
                <input type="hidden" name="_method" value="POST">
                <input type="text" id="editTaskTitle" name="title"
                    class="w-full border border-gray-300 rounded-lg p-2 text-sm mb-4">
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeEditModal()"
                        class="bg-gray-500 text-white rounded-lg py-2 px-4 text-sm hover:bg-gray-600 transition">
                        Cancel
                    </button>
                    <button type="submit"
                        class="bg-blue-500 text-white rounded-lg py-2 px-4 text-sm hover:bg-blue-600 transition">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Modal for Board List Name -->
    <div id="editListModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <h3 class="text-lg font-semibold mb-4">Edit Board List Name</h3>
            <form id="editListForm" method="POST">
                @csrf
                @method('PATCH') <!-- Gunakan PATCH untuk update -->
                <input type="text" id="editListName" name="name"
                    class="w-full border border-gray-300 rounded-lg p-2 text-sm mb-4">
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeEditListModal()"
                        class="bg-gray-500 text-white rounded-lg py-2 px-4 text-sm hover:bg-gray-600 transition">
                        Cancel
                    </button>
                    <button type="submit"
                        class="bg-blue-500 text-white rounded-lg py-2 px-4 text-sm hover:bg-blue-600 transition">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openEditModal(taskId, taskTitle) {
            const modal = document.getElementById('editModal');
            const form = document.getElementById('editForm');
            const titleInput = document.getElementById('editTaskTitle');

            modal.classList.remove('hidden');
            form.action = `/tasks/${taskId}/update`; // Update URL dynamically
            titleInput.value = taskTitle; // Set current task title
        }

        function closeEditModal() {
            const modal = document.getElementById('editModal');
            modal.classList.add('hidden');
        }

        function openEditListModal(boardListId, listName) {
            const modal = document.getElementById('editListModal');
            const form = document.getElementById('editListForm');
            const nameInput = document.getElementById('editListName');

            modal.classList.remove('hidden');
            form.action = `/board-lists/${boardListId}`; // Update URL dynamically
            nameInput.value = listName; // Set current list name
        }

        function closeEditListModal() {
            const modal = document.getElementById('editListModal');
            modal.classList.add('hidden');
        }

        function moveTaskToCompletedList(taskId, checkbox) {
            if (checkbox.checked) {
                // Move the task to a "Completed" list (you could implement a feature to do this)
                // You can make an AJAX request here to update the task's status or move it.
                alert(`Task ${taskId} marked as completed`);
            }
        }
    </script>

    <script>
        function openAddListModal() {
            const modal = document.getElementById('addListModal');
            modal.classList.remove('hidden');
        }

        function closeAddListModal() {
            const modal = document.getElementById('addListModal');
            modal.classList.add('hidden');
        }
    </script>

@endsection
