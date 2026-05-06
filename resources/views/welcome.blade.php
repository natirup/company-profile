@extends('layouts.app')

@section('content')
<div class="relative py-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 flex flex-col items-center text-center relative z-10">
        <span class="bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-sm font-bold mb-4">WE ARE CREATIVE AGENCY</span>
        <h1 class="text-6xl md:text-8xl font-black text-slate-900 leading-none mb-8">
            Solusi Digital <br><span class="text-blue-600">Masa Depan.</span>
        </h1>
        <p class="text-gray-500 text-xl max-w-2xl mb-10 leading-relaxed">
            Kami membantu bisnis Anda bertransformasi ke dunia digital dengan teknologi terbaru dan desain yang memukau.
        </p>
        <div class="flex gap-4">
            <button class="bg-blue-600 text-white px-8 py-4 rounded-xl font-bold shadow-lg shadow-blue-200 hover:scale-105 transition">Mulai Proyek</button>
            <button class="bg-white text-slate-900 border border-slate-200 px-8 py-4 rounded-xl font-bold hover:bg-slate-50 transition">Lihat Portofolio</button>
        </div>
    </div>
</div>
@endsection