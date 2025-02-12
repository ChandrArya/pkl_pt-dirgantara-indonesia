@extends('layouts.app')

@section('title', 'Kanban Board')

@section('header')
    @include('layouts.navbar')
@endsection

@section('content')

    @if (session('gagal'))
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            {{ session('gagal') }}
        </div>
    @endif

    <div class="p-6 bg-blue-500" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-4xl text-white font-semibold text-center">Kanban Spirit Dirgantara</h2>
        <button onclick="openAddListModal()"
            class="mt-4 bg-green-500 text-white rounded-lg py-2 px-4 text-sm font-medium hover:bg-green-600 transition"
            data-aos="zoom-in" data-aos-duration="1200">
            Tambah List Baru
        </button>
    </div>

    @if ($board)
        <div class="kanban-board flex overflow-x-auto space-x-6 p-6 bg-blue-500"
            style="height: 70vh" data-aos="fade-left" data-aos-duration="1000">
            @foreach ($board->boardLists ?? [] as $boardList)
                @if ($boardList)
                    <div class="kanban-list bg-white rounded shadow-lg p-4 w-80 flex-shrink-0"
                        style="min-height: {{ max(count($boardList->tasks ?? []), 3) * 100 + 150 }}px;" data-aos="fade-up"
                        data-aos-duration="1000">
                        <!-- List Header -->
                        <div class="flex justify-between items-center mb-4">
                            <!-- Nama Board List -->
                            <div class="flex items-center">
                                <span id="listName-{{ $boardList->id }}"
                                    class="font-semibold text-lg text-gray-800">{{ $boardList->name }}</span>
                            </div>

                            <!-- Dropdown untuk Edit dan Delete -->
                            <div class="relative">
                                <button class="text-yellow-500 hover:text-yellow-700 text-md -mt-1 focus:outline-none z-0"
                                    onclick="toggleDropdown('dropdown-{{ $boardList->id }}')">
                                    <i class="fas fa-ellipsis-v z-0"></i> <!-- Ikon titik tiga vertikal -->
                                </button>
                                <!-- Dropdown Menu -->
                                <div id="dropdown-{{ $boardList->id }}"
                                    class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-10">
                                    <ul class="py-2">
                                        <!-- Edit Board List -->
                                        <li>
                                            <button
                                                onclick="openEditListModal({{ $boardList->id }}, '{{ $boardList->name }}')"
                                                class="w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center">
                                                <i class="fas fa-edit mr-2"></i> Edit
                                            </button>
                                        </li>
                                        <!-- Delete Board List -->
                                        <li>
                                            <form action="{{ route('kanban.deleteBoardList', $boardList->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this list?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="w-full px-4 py-2 text-sm text-red-600 hover:bg-gray-100 flex items-center">
                                                    <i class="fas fa-trash-alt mr-2"></i> Delete
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Task List -->
                        <ul class="space-y-4" id="task-list-{{ $boardList->id }}" data-board-id="{{ $boardList->id }}">
                            @foreach ($boardList->tasks ?? [] as $task)
                                <li class="task-item bg-blue-50 border border-blue-200 text-blue-800 rounded-lg p-3 shadow-sm flex justify-between items-center"
                                    data-task-id="{{ $task->id }}" draggable="true">
                                    <!-- Bagian Teks Task -->
                                    <div class="flex items-center space-x-2 flex-1 min-w-0">
                                        <!-- Judul Task dengan Modal -->
                                        <span class="text-sm font-medium truncate flex-1 min-w-0 cursor-pointer"
                                            onclick="openTaskDetailModal('{{ $task->title }}')">
                                            {{ $task->title }}
                                        </span>
                                        <!-- Status Task -->
                                        <span class="text-sm text-gray-500 whitespace-nowrap">
                                            ({{ ucfirst($task->status) }})
                                        </span>
                                    </div>
                                    <!-- Tombol Edit dan Delete -->
                                    <div class="flex space-x-2 ml-4">
                                        <!-- Tombol Edit -->
                                        <button class="text-yellow-500 hover:text-yellow-700 text-sm whitespace-nowrap"
                                            onclick="openEditModal({{ $task->id }}, '{{ $task->title }}', '{{ $task->status }}')"
                                            title="Edit Task">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <!-- Tombol Delete -->
                                        <form action="{{ route('kanban.deleteTask', $task->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this task?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-600 hover:text-red-800 text-sm whitespace-nowrap"
                                                title="Delete Task">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <!-- Modal untuk Menampilkan Teks Lengkap -->
                        <div id="taskDetailModal"
                            class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
                            <div class="bg-white rounded-lg shadow-lg p-6 w-96 max-w-full">
                                <h3 class="text-lg font-semibold mb-4">Task Details</h3>
                                <div id="taskDetailContent"
                                    class="text-sm text-gray-700 break-words max-h-60 overflow-y-auto">
                                </div>
                                <div class="flex justify-end mt-4">
                                    <button type="button" onclick="closeTaskDetailModal()"
                                        class="bg-gray-500 text-white rounded-lg py-2 px-4 text-sm hover:bg-gray-600 transition">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>


                        <!-- Add Task Form -->
                        <form action="{{ route('kanban.storeTask') }}" method="POST" class="mt-4 h-auto">
                            @csrf
                            <input type="hidden" name="board_list_id" value="{{ $boardList->id }}">
                            <input type="text" name="title" placeholder="New Task"
                                class="w-full border border-gray-300 rounded-lg p-2 text-sm mb-4 ">
                            <select name="status" class="w-full border border-gray-300 rounded-lg p-2 text-sm mb-4">
                                <option value="in_process">In Process</option>
                                <option value="success">Success</option>
                                <option value="failed">Failed</option>
                            </select>
                            <button type="submit"
                                class="mt-2 w-full bg-blue-500 text-white rounded-lg py-2 text-sm font-medium hover:bg-blue-600 transition">
                                Add Task
                            </button>
                        </form>
                    </div>
                @endif
            @endforeach
        </div>
    @else
        <div class="p-6 bg-gradient-to-r from-blue-400 to-purple-400">
            <h2 class="text-4xl text-white font-semibold text-center">No Board Found</h2>
        </div>
    @endif

    <!-- Modal for Add List -->
    <div id="addListModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center"
        data-aos="zoom-in" data-aos-duration="500">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <h3 class="text-lg font-semibold mb-4">Add New Board List</h3>
            <form action="{{ route('kanban.storeBoardList') }}" method="POST">
                @csrf
                <input type="hidden" name="board_id" value="{{ $board->id ?? '' }}">
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
                @method('POST')
                <input type="hidden" name="_method" value="POST">
                <input type="text" id="editTaskTitle" name="title"
                    class="w-full border border-gray-300 rounded-lg p-2 text-sm mb-4">
                <select id="editTaskStatus" name="status"
                    class="w-full border border-gray-300 rounded-lg p-2 text-sm mb-4">
                    <option value="in_process">In Process</option>
                    <option value="success">Success</option>
                    <option value="failed">Failed</option>
                </select>
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
            <h3 class="text-lg font-semibold mb-4">Edit List Name</h3>
            <form id="editListForm" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
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
        // Fungsi untuk membuka modal
        function openTaskDetailModal(taskTitle) {
            const modal = document.getElementById('taskDetailModal');
            const content = document.getElementById('taskDetailContent');

            // Isi modal dengan teks lengkap
            content.textContent = taskTitle;

            // Tampilkan modal
            modal.classList.remove('hidden');
        }

        // Fungsi untuk menutup modal
        function closeTaskDetailModal() {
            const modal = document.getElementById('taskDetailModal');
            modal.classList.add('hidden');
        }
    </script>
    <script>
        AOS.init();
    </script>
    <script>
        // Fungsi untuk menampilkan/sembunyikan dropdown
        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle('hidden');
        }

        // Fungsi untuk membuka modal edit board list
        function openEditListModal(boardListId, listName) {
            const modal = document.getElementById('editListModal');
            const form = document.getElementById('editListForm');
            const nameInput = document.getElementById('editListName');

            // Isi data board list ke dalam form
            nameInput.value = listName;

            // Set action form untuk update board list
            form.action = `/board-lists/${boardListId}`;

            // Tampilkan modal
            modal.classList.remove('hidden');
        }

        // Fungsi untuk menutup modal edit board list
        function closeEditListModal() {
            const modal = document.getElementById('editListModal');
            modal.classList.add('hidden');
        }

        // Fungsi untuk membuka modal edit task
        function openEditModal(taskId, taskTitle, taskStatus) {
            const modal = document.getElementById('editModal');
            const form = document.getElementById('editForm');
            const titleInput = document.getElementById('editTaskTitle');
            const statusInput = document.getElementById('editTaskStatus');

            modal.classList.remove('hidden');
            form.action = `/tasks/${taskId}/update`; // Update URL dynamically
            titleInput.value = taskTitle; // Set current task title
            statusInput.value = taskStatus; // Set current task status
        }

        // Fungsi untuk menutup modal edit task
        function closeEditModal() {
            const modal = document.getElementById('editModal');
            modal.classList.add('hidden');
        }

        // Fungsi untuk membuka modal add list
        function openAddListModal() {
            const modal = document.getElementById('addListModal');
            modal.classList.remove('hidden');
        }

        // Fungsi untuk menutup modal add list
        function closeAddListModal() {
            const modal = document.getElementById('addListModal');
            modal.classList.add('hidden');
        }

        // Fungsi untuk memindahkan task ke completed list
        function moveTaskToCompletedList(taskId, checkbox) {
            if (checkbox.checked) {
                // Move the task to a "Completed" list (you could implement a feature to do this)
                // You can make an AJAX request here to update the task's status or move it.
                alert(`Task ${taskId} marked as completed`);
            }
        }
    </script>

@endsection
