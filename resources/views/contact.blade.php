@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-20">
    <div class="text-center mb-16">
        <h1 class="text-4xl font-black text-slate-900 mb-4">Hubungi Kami</h1>
        <p class="text-gray-500 max-w-xl mx-auto">Punya pertanyaan atau ingin memulai proyek? Tim kami siap membantu Anda mewujudkan ide digital Anda.</p>
    </div>

    <div class="grid md:grid-cols-2 gap-16">
        <div class="space-y-8">
            <div class="flex items-start gap-6">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-1">Kantor Pusat</h4>
                    <p class="text-gray-500">Jl. Teknologi Masa Depan No. 10, Jakarta Selatan, Indonesia</p>
                </div>
            </div>

            <div class="flex items-start gap-6">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-1">Telepon</h4>
                    <p class="text-gray-500">+62 21 1234 5678</p>
                </div>
            </div>

            <div class="w-full h-64 bg-gray-200 rounded-3xl overflow-hidden grayscale hover:grayscale-0 transition-all duration-500">
                <div class="w-full h-full flex items-center justify-center text-gray-400 italic">
                    [ Map Placeholder - Google Maps API ]
                </div>
            </div>
        </div>

        <div class="bg-white p-10 rounded-3xl border border-gray-100 shadow-xl">
            <form action="#" class="space-y-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap</label>
                    <input type="text" class="w-full px-5 py-4 rounded-xl bg-gray-50 border-transparent focus:bg-white focus:border-blue-500 focus:ring-0 transition" placeholder="Masukkan nama Anda">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Alamat Email</label>
                    <input type="email" class="w-full px-5 py-4 rounded-xl bg-gray-50 border-transparent focus:bg-white focus:border-blue-500 focus:ring-0 transition" placeholder="email@perusahaan.com">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Pesan</label>
                    <textarea rows="4" class="w-full px-5 py-4 rounded-xl bg-gray-50 border-transparent focus:bg-white focus:border-blue-500 focus:ring-0 transition" placeholder="Ceritakan kebutuhan Anda..."></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-xl font-bold shadow-lg shadow-blue-200 hover:bg-blue-700 transition">Kirim Pesan Sekarang</button>
            </form>
        </div>
    </div>
</div>
@endsection