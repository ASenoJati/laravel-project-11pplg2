 <form action="{{ url('dashboard/teacher', $teacher->id) }}" method="POST" id="formEditStudent">
     @csrf
     @method('PUT')
     <input type="hidden" name="id" id="edit_id">
     <div class="grid gap-4 mb-4 sm:grid-cols-2">
         <div>
             <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama</label>
             <input name="name" id="edit_name" type="text" placeholder="Masukkan nama siswa"
                 class="w-full p-2 mt-1 border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white">
         </div>

         <div>
             <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
             <input name="email" id="edit_email" type="email" placeholder="contoh@email.com"
                 class="w-full p-2 mt-1 border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white">
         </div>

         <div>
             <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kelas</label>
             <select id="edit_subject_id"
                 name="subject"
                 class="w-full p-2 mt-1 border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                 <option value="">Pilih subject...</option>
                 @foreach ($subjects as $subjects)
                 <option value="{{ $subjects->id }}">{{ $subjects->name }}</option>
                 @endforeach
             </select>

         </div>

         <div>
             <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone</label>
             <input name="phone" id="edit_phone" type="text" placeholder="Masukkan no hp"
                 class="w-full p-2 mt-1 border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white">
         </div>

         <div class="md:col-span-2">
             <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Alamat</label>
             <textarea name="address" id="edit_address" rows="2" placeholder="Masukkan alamat siswa"
                 class="w-full p-2 mt-1 border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white"></textarea>
         </div>
     </div>
     <div class="flex items-center space-x-4">
         <button type="submit" class="text-white inline-flex items-center bg-green-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
             <svg class="mr-1 -ml-1 w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
             </svg>
             Update
         </button>
     </div>
 </form>