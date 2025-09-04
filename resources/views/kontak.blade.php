<x-layout>
  <x-slot:judul>{{ $title }}</x-slot:judul>
  <div class="bg-white rounded-2xl shadow-xl p-10 w-full text-center border border-purple-200 fade-in hover:shadow-purple-300/70 transition">
    <h1 class="text-3xl font-bold text-gray-700 mb-6">Kontak Saya</h1>
    <div class="space-y-4 text-gray-700">
      <p><strong>📍 Alamat:</strong> Jl. Merdeka No. 123, Jakarta</p>
      <p><strong>✉️ Email:</strong> agengseno@example.com</p>
      <p><strong>📱 WhatsApp:</strong> +62 812-3456-7890</p>
      <p><strong>📞 Telepon:</strong> (021) 987654</p>
    </div>
    <a href={{ url('/') }} class="mt-6 inline-block px-6 py-2 bg-purple-300 text-gray-700 rounded-xl shadow hover:bg-purple-400 transition">Kembali</a>
  </div>
</x-layout>