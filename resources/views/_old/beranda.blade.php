<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    <h1 class="text-4xl font-bold text-gray-700 mb-8 fade-in">Selamat Datang</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 fade-in">
        <a href={{ url('profil') }} class="bg-pink-200 shadow-md rounded-2xl p-6 hover:scale-105 hover:shadow-pink-400/60 transform transition duration-300 cursor-pointer">
            <h2 class="text-xl font-semibold text-gray-700">Profil</h2>
            <p class="text-gray-600 mt-2">Lihat informasi profil lengkap</p>
        </a>
        <a href={{ url('kontak') }} class="bg-blue-200 shadow-md rounded-2xl p-6 hover:scale-105 hover:shadow-blue-400/60 transform transition duration-300 cursor-pointer">
            <h2 class="text-xl font-semibold text-gray-700">Kontak</h2>
            <p class="text-gray-600 mt-2">Hubungi saya melalui informasi kontak</p>
        </a>
    </div>
</x-layout>