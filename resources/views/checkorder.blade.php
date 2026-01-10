<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Status Pesanan | HubTrans</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #f8fafc; /* Gray 50 */
        }
    </style>
</head>
<body class="font-sans text-gray-900">

    <nav class="bg-blue-700 p-4 shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="index.php" class="text-white font-bold text-xl flex items-center gap-2">
                <i class="fas fa-route"></i> HubTrans
            </a>
            <div class="hidden md:flex space-x-6 text-white items-center text-sm font-semibold">
                <a href="/homepage" class="hover:text-blue-200">Beranda</a>
                <a href="/checkorder" class="text-orange-400 border-b-2 border-orange-400">Cek Pesanan</a>
                <a href="/history" class="hover:text-blue-200">Histori</a>
                <a href="/signin" class="bg-orange-500 px-5 py-2 rounded-lg hover:bg-orange-600 transition shadow-lg">Sign in</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-12 max-w-5xl">
        
        <div class="mb-10">
            <h1 class="text-3xl font-bold text-gray-800">Cek Status Pesanan</h1>
            <p class="text-gray-500 mt-2">Masukkan detail pesanan Anda untuk melihat status pembayaran atau cetak e-tiket.</p>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 mb-12">
            <form action="" method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">No. Pesanan / Kode Booking</label>
                    <div class="relative">
                        <i class="fas fa-ticket-alt absolute left-4 top-4 text-gray-400"></i>
                        <input type="text" placeholder="Contoh: HT-99281" 
                            class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Email / No. HP</label>
                    <div class="relative">
                        <i class="fas fa-envelope absolute left-4 top-4 text-gray-400"></i>
                        <input type="text" placeholder="Email saat memesan..." 
                            class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                    </div>
                </div>

                <div class="flex items-end">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-blue-100 transition transform active:scale-95">
                        CARI PESANAN
                    </button>
                </div>
            </form>
        </div>

        <div class="space-y-6">
            <h2 class="text-xl font-bold text-gray-800 flex items-center gap-2">
                <i class="fas fa-history text-blue-600"></i> Pesanan Terakhir
            </h2>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex flex-col md:flex-row justify-between items-center gap-4 border-l-8 border-l-yellow-400">
                <div class="flex items-center gap-6 w-full md:w-auto">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center">
                        <i class="fas fa-bus text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-[10px] font-black text-blue-600 uppercase tracking-widest">Bus • HT-88120</p>
                        <h3 class="font-bold text-gray-800 text-lg">Jakarta <i class="fas fa-arrow-right text-xs mx-1 text-gray-400"></i> Bandung</h3>
                        <p class="text-sm text-gray-500 italic">25 Jan 2024, 08:00 WIB</p>
                    </div>
                </div>
                <div class="flex flex-col items-center md:items-end w-full md:w-auto">
                    <span class="px-4 py-1.5 bg-yellow-100 text-yellow-700 text-[10px] font-black rounded-full mb-3 uppercase tracking-tighter">
                        Menunggu Pembayaran
                    </span>
                    <a href="#" class="text-blue-600 font-bold text-sm hover:underline">Detail & Bayar <i class="fas fa-chevron-right ml-1 text-xs"></i></a>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex flex-col md:flex-row justify-between items-center gap-4 border-l-8 border-l-green-500">
                <div class="flex items-center gap-6 w-full md:w-auto">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center">
                        <i class="fas fa-plane text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-[10px] font-black text-blue-600 uppercase tracking-widest">Pesawat • HT-77122</p>
                        <h3 class="font-bold text-gray-800 text-lg">Jakarta <i class="fas fa-arrow-right text-xs mx-1 text-gray-400"></i> Denpasar (Bali)</h3>
                        <p class="text-sm text-gray-500 italic">12 Feb 2024, 14:20 WIB</p>
                    </div>
                </div>
                <div class="flex flex-row md:flex-col gap-3 w-full md:w-auto">
                    <a href="/eticket?id=HT-77122" class="flex-1 bg-green-500 hover:bg-green-600 text-white px-6 py-2.5 rounded-xl text-xs font-bold flex items-center justify-center gap-2 transition shadow-md shadow-green-100">
                    <i class="fas fa-download"></i> E-TIKET</a>

                    <button class="flex-1 border-2 border-gray-100 hover:bg-gray-50 text-gray-500 px-6 py-2.5 rounded-xl text-xs font-bold transition">
                        STRUK
                    </button>
                </div>
            </div>

        </div>
    </main>

    <div class="md:hidden fixed bottom-0 left-0 right-0 bg-white border-t flex justify-around py-3 z-50">
        <a href="/homepage" class="flex flex-col items-center text-gray-400">
            <i class="fas fa-search text-xl"></i>
            <span class="text-[10px] mt-1 font-bold">Cari</span>
        </a>
        <a href="/checkorder" class="flex flex-col items-center text-blue-600">
            <i class="fas fa-receipt text-xl"></i>
            <span class="text-[10px] mt-1">Pesanan</span>
        </a>
        <a href="/history" class="flex flex-col items-center text-gray-400">
            <i class="fas fa-history text-xl"></i>
            <span class="text-[10px] mt-1">Histori</span>
        </a>
        <a href="/signin" class="flex flex-col items-center text-gray-400">
            <i class="fas fa-user text-xl"></i>
            <span class="text-[10px] mt-1">Akun</span>
        </a>
    </div>

</body>
</html>