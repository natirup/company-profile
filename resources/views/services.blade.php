@extends('layouts.app')

@section('content')
<div class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-blue-600 font-bold tracking-widest uppercase text-sm mb-3">Layanan Kami</h2>
            <h1 class="text-4xl md:text-5xl font-black text-slate-900">Solusi Terbaik Untuk <br>Pertumbuhan Bisnis Anda</h1>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-8 rounded-3xl border border-gray-100 bg-white hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                    <svg class="w-8 h-8 text-blue-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="id-9.75 17L9 21l-1 1h8l-1-1-.75-4M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Web Development</h3>
                <p class="text-gray-500 leading-relaxed">Membangun website yang cepat, responsif, dan SEO-friendly untuk meningkatkan kehadiran digital Anda.</p>
            </div>

            <div class="p-8 rounded-3xl border border-gray-100 bg-white hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-14 h-14 bg-purple-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-600 transition-colors">
                    <svg class="w-8 h-8 text-purple-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Mobile Apps</h3>
                <p class="text-gray-500 leading-relaxed">Solusi aplikasi Android dan iOS kustom yang dirancang untuk memberikan pengalaman pengguna terbaik.</p>
            </div>

            <div class="p-8 rounded-3xl border border-gray-100 bg-white hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group">
                <div class="w-14 h-14 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-orange-600 transition-colors">
                    <svg class="w-8 h-8 text-orange-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4">Digital Branding</h3>
                <p class="text-gray-500 leading-relaxed">Menciptakan identitas visual yang kuat dan konsisten untuk membuat bisnis Anda menonjol di pasar.</p>
            </div>
        </div>
    </div>
</div>
@endsection