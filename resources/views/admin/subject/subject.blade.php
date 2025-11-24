<x-admin.layout>
    <x-slot name="title">Subject Management</x-slot>

    <!-- Heder -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
            Subject List
        </h1>

        <div class="flex items-center gap-3">

            <!-- Add Subject -->
            <button id="openModalBtn"
                class="inline-flex gap-1 px-4 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 dark:bg-blue-500 dark:hover:bg-blue-600 rounded-lg shadow transition">
                <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z" />
                </svg>
                Add Subject
            </button>

            <a
                href="/export/subject"
                class="inline-flex gap-1 px-4 py-2 text-sm font-medium text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-2 focus:ring-[#FF9119]/50 dark:bg-[#FF9119] dark:hover:bg-[#FF9119]/80 rounded-lg shadow transition">
                <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v9.293l-2-2a1 1 0 0 0-1.414 1.414l.293.293h-6.586a1 1 0 1 0 0 2h6.586l-.293.293A1 1 0 0 0 18 16.707l2-2V20a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd" />
                </svg>

                Export Excel
            </a>
        </div>
    </div>

    <!-- Table -->
    <div class="w-full overflow-x-auto">
        <div class="inline-block min-w-full overflow-hidden rounded-xl shadow border border-gray-300 dark:border-gray-700">
            <table id="studentTable"
                class="min-w-full divide-y divide-gray-300 dark:divide-gray-700 text-sm">
                <thead class="bg-gradient-to-r from-gray-100 to-gray-200 dark:from-gray-800 dark:to-gray-700">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-800 dark:text-gray-200 uppercase">No</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-800 dark:text-gray-200 uppercase">Nama</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-800 dark:text-gray-200 uppercase">Deskripsi</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-800 dark:text-gray-200 uppercase">Action</th>
                    </tr>
                </thead>

                <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($subjects as $subject)
                    <tr class="student-row hover:bg-blue-100 dark:hover:bg-blue-900/30 hover:shadow-inner transition-all cursor-pointer"
                        data-id="{{ $subject->id }}">
                        <td class="px-4 py-3 font-medium text-gray-900 dark:text-gray-100">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3 text-gray-800 dark:text-gray-300">{{ $subject->name }}</td>
                        <td class="px-4 py-3 text-gray-700 dark:text-gray-400">{{ $subject->description }}</td>
                        <td>
                            <div class="flex justify-center m-5 gap-2">

                                <!-- Edit -->
                                <button
                                    class="btnEdit text-white bg-green-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                    type="button"
                                    data-id="{{ $subject->id }}"
                                    data-modal-target="updateProductModal"
                                    data-modal-toggle="updateProductModal">

                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                                    </svg>

                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $subjects->links('pagination::tailwind') }}
        </div>

        <div class="mt-2 text-xs text-gray-500 dark:text-gray-400 text-center lg:hidden">
            ← Geser ke kanan untuk melihat kolom lainnya →
        </div>
    </div>

    <!-- Modal Add Student -->
    <div id="addStudentModal"
        class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">
        <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-2xl w-full max-w-2xl p-6 relative transform transition-all duration-300 scale-100 opacity-100 animate-fade-in">
            <button id="closeModalBtn"
                class="absolute top-3 right-4 text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 text-2xl font-bold transition">
                &times;
            </button>

            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-4 border-b border-gray-200 dark:border-gray-700 pb-2">
                Tambah Subject
            </h2>

            @include('admin.subject.subject-add')
        </div>
    </div>

    <!-- Modal edit Subject -->
    <div id="updateProductModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto backdrop-blur-sm bg-black/60 overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">

            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-900 sm:p-5">

                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Update Data
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="updateProductModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                @include('admin.subject.subject-edit')
            </div>
        </div>
    </div>

    @if(session('success-update'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: "{{ session('success') }}",
            confirmButtonText: 'Lanjutkan',
            background: '#1f2937',
            color: '#fff',
            confirmButtonColor: '#2563eb'
        });
    </script>
    @endif

    @if(session('success-create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: "{{ session('success-create') }}",
            confirmButtonText: 'Lanjutkan',
            background: '#1f2937',
            color: '#fff',
            confirmButtonColor: '#2563eb'
        });
    </script>
    @endif

    <script>
        const rows = document.querySelectorAll('.student-row');
        const openModalBtn = document.getElementById('openModalBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const modal = document.getElementById('addStudentModal');

        rows.forEach(row => {
            row.addEventListener('click', () => {
                rows.forEach(r => r.classList.remove('bg-blue-200/50', 'dark:bg-blue-900/50'));
                row.classList.add('bg-blue-200/50', 'dark:bg-blue-900/50');
            });
        });

        // Buka modal
        openModalBtn.addEventListener('click', () => modal.classList.remove('hidden'));

        // Tutup modal
        closeModalBtn.addEventListener('click', () => modal.classList.add('hidden'));
        window.addEventListener('click', (e) => {
            if (e.target === modal) modal.classList.add('hidden');
        });

        document.addEventListener("DOMContentLoaded", () => {
            // UPDATE 
            const editButtons = document.querySelectorAll('.btnEdit');

            editButtons.forEach(btn => {
                btn.addEventListener('click', async () => {

                    let id = btn.dataset.id;
                    let res = await fetch(`subject/${id}`);
                    let data = await res.json();

                    document.getElementById('formEditStudent').action =
                        "/dashboard/subject/" + id;

                    console.log(data)

                    document.getElementById('edit_id').value = data.id;
                    document.getElementById('edit_name').value = data.name;
                    document.getElementById('edit_description').value = data.description;

                    document.getElementById('modalEdit').classList.remove('hidden');
                });
            });
        });
    </script>
</x-admin.layout>