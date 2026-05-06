@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-20">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=600" 
                 alt="Kantor" class="rounded-3xl shadow-2xl">
        </div>
        <div>
            <h2 class="text-4xl font-bold mb-6 text-slate-900">Mengenal Lebih Dekat <span class="text-blue-600">VIBE.CORP</span></h2>
            <p class="text-gray-600 text-lg leading-relaxed mb-6">
                Didirikan pada tahun 2024, kami bermula dari sebuah garasi kecil dengan mimpi besar untuk mendemokrasikan teknologi bagi UMKM di seluruh dunia.
            </p>
            <div class="grid grid-cols-2 gap-6">
                <div class="border-l-4 border-blue-600 pl-4">
                    <h4 class="text-2xl font-bold">150+</h4>
                    <p class="text-gray-500">Proyek Selesai</p>
                </div>
                <div class="border-l-4 border-blue-600 pl-4">
                    <h4 class="text-2xl font-bold">50+</h4>
                    <p class="text-gray-500">Klien Puas</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection