<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori Pesanan | HubTrans</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background-color: #f8fafc; }
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
                <a href="/checkorder" class="hover:text-blue-200">Cek Pesanan</a>
                <a href="/history" class="text-orange-400 border-b-2 border-orange-400">Histori</a>
                <div class="flex items-center gap-2 bg-blue-800 px-4 py-2 rounded-xl">
                    <i class="fas fa-user-circle text-lg"></i>
                    <span>Budi Santoso</span>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-10 max-w-4xl">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-black text-gray-800 uppercase tracking-tight">Histori Pesanan</h1>
                <p class="text-sm text-gray-500">Pantau semua aktivitas perjalanan dan transaksi Anda.</p>
            </div>
            
            <div class="flex gap-2 overflow-x-auto pb-2 md:pb-0 no-scrollbar">
                <button class="bg-blue-600 text-white px-5 py-2 rounded-full text-xs font-bold shadow-md shadow-blue-100">Semua</button>
                <button class="bg-white text-gray-500 border border-gray-100 px-5 py-2 rounded-full text-xs font-bold hover:bg-gray-50">Selesai</button>
                <button class="bg-white text-gray-500 border border-gray-100 px-5 py-2 rounded-full text-xs font-bold hover:bg-gray-50">Dibatalkan</button>
            </div>
        </div>

        <div class="space-y-4">

            <?php
            // Data Dummy Histori
            $history = [
                [
                    'id' => 'HT-99281',
                    'type' => 'bus',
                    'route' => 'Jakarta → Bandung',
                    'date' => '25 Jan 2024',
                    'price' => '150.000',
                    'status' => 'Selesai',
                    'status_color' => 'bg-green-100 text-green-700',
                    'border' => 'border-l-green-500'
                ],
                [
                    'id' => 'HT-88120',
                    'type' => 'plane',
                    'route' => 'Jakarta → Denpasar',
                    'date' => '12 Feb 2024',
                    'price' => '1.250.000',
                    'status' => 'Mendatang',
                    'status_color' => 'bg-blue-100 text-blue-700',
                    'border' => 'border-l-blue-500'
                ],
                [
                    'id' => 'HT-77501',
                    'type' => 'train',
                    'route' => 'Surabaya → Yogyakarta',
                    'date' => '05 Jan 2024',
                    'price' => '250.000',
                    'status' => 'Dibatalkan',
                    'status_color' => 'bg-red-100 text-red-700',
                    'border' => 'border-l-red-500'
                ]
            ];

            foreach ($history as $h):
                $icon = ($h['type'] == 'plane') ? 'fa-plane' : (($h['type'] == 'bus') ? 'fa-bus' : 'fa-train');
            ?>
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden <?= $h['border'] ?> border-l-4 hover:shadow-md transition group">
                <div class="p-5 flex flex-col md:flex-row items-center justify-between gap-4">
                    
                    <div class="flex items-center gap-5 w-full md:w-auto">
                        <div class="w-12 h-12 rounded-xl bg-gray-50 text-gray-400 flex items-center justify-center group-hover:bg-blue-50 group-hover:text-blue-600 transition">
                            <i class="fas <?= $icon ?> text-xl"></i>
                        </div>
                        
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-[10px] font-black text-gray-400 uppercase tracking-tighter"><?= $h['id'] ?></span>
                                <span class="<?= $h['status_color'] ?> text-[9px] font-black px-2 py-0.5 rounded-full uppercase"><?= $h['status'] ?></span>
                            </div>
                            <h3 class="font-bold text-gray-800"><?= $h['route'] ?></h3>
                            <p class="text-[11px] text-gray-500 font-medium"><?= $h['date'] ?></p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between w-full md:w-auto md:gap-8 border-t md:border-t-0 pt-3 md:pt-0">
                        <div class="md:text-right">
                            <p class="text-[10px] font-bold text-gray-400 uppercase">Total Bayar</p>
                            <p class="font-black text-blue-700">IDR <?= $h['price'] ?></p>
                        </div>
                        <a href="detail_tiket.php?id=<?= $h['id'] ?>" class="bg-gray-50 hover:bg-blue-600 hover:text-white text-gray-600 px-4 py-2 rounded-xl text-xs font-bold transition flex items-center gap-2">
                            Detail <i class="fas fa-chevron-right text-[10px]"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

        </main>

    <div class="md:hidden fixed bottom-0 left-0 right-0 bg-white border-t flex justify-around py-3 z-50">
        <a href="/homepage" class="flex flex-col items-center text-gray-400">
            <i class="fas fa-search text-xl"></i>
            <span class="text-[10px] mt-1 font-bold">Cari</span>
        </a>
        <a href="/checkorder" class="flex flex-col items-center text-gray-400">
            <i class="fas fa-receipt text-xl"></i>
            <span class="text-[10px] mt-1">Pesanan</span>
        </a>
        <a href="/history" class="flex flex-col items-center text-blue-600">
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