<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
}
*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function services()
    {
        // Data ini nantinya bisa diambil dari Database
        $daftarLayanan = [
            [
                'judul' => 'Web Development',
                'deskripsi' => 'Membangun website yang cepat, responsif, dan SEO-friendly.',
                'warna' => 'blue',
                'icon' => 'M9.75 17L9 21l-1 1h8l-1-1-.75-4M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'
            ],
            [
                'judul' => 'Mobile Apps',
                'deskripsi' => 'Solusi aplikasi Android dan iOS kustom untuk bisnis Anda.',
                'warna' => 'purple',
                'icon' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z'
            ],
            [
                'judul' => 'Digital Branding',
                'deskripsi' => 'Menciptakan identitas visual yang kuat dan menonjol.',
                'warna' => 'orange',
                'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343'
            ],
                        [
                'judul' => 'Consulting',
                'deskripsi' => 'Diskusi dan konsultasi pengembangan Bisnis',
                'warna' => 'silver',
                'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343'
            ],
        ];

        return view('services', compact('daftarLayanan'));
    }
}