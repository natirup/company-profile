<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Company Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans">
    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-black text-blue-600 tracking-tighter">VIBE.CORP</div>
            <div class="hidden md:flex space-x-8 font-medium text-gray-600">
                <a href="/" class="hover:text-blue-600 transition">Beranda</a>
                <a href="/tentang" class="hover:text-blue-600 transition">Tentang</a>
                <a href="/layanan" class="hover:text-blue-600 transition">Layanan</a>
                <a href="/kontak" class="bg-blue-600 text-white px-5 py-2 rounded-full hover:bg-blue-700 transition">Kontak</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-slate-400 py-12 mt-20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p>&copy; 2026 Vibe Corp. Dibuat dengan Laravel & ✨</p>
        </div>
    </footer>
</body>
</html>