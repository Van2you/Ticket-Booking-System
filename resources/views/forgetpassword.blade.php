<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password | HubTrans System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 overflow-x-hidden">

    <div class="max-w-md w-full bg-white rounded-3xl shadow-2xl overflow-hidden">
        <div class="bg-white p-8 pb-4 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 text-blue-700 rounded-2xl mb-4">
                <i class="fas fa-key text-3xl"></i>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Lupa Password?</h1>
            <p class="text-gray-500 text-sm">Jangan khawatir! Masukkan email Anda untuk mendapatkan instruksi reset password.</p>
        </div>

        <div class="p-8 pt-4">
            <form action="proses_lupa_password.php" method="POST" class="space-y-6">
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
                    <div class="relative">
                        <i class="fas fa-envelope absolute left-4 top-3.5 text-gray-400"></i>
                        <input type="email" name="email" required
                            class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none transition-all"
                            placeholder="nama@email.com">
                    </div>
                </div>

                <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-blue-200 transform active:scale-[0.98] transition-all">
                    KIRIM INSTRUKSI RESET
                </button>
            </form>

            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-4 bg-white text-gray-400 italic">Atau kembali ke</span>
                </div>
            </div>

            <div class="text-center">
                <a href="/signin" class="inline-block w-full border-2 border-gray-100 text-blue-600 font-bold py-3 rounded-xl hover:bg-gray-50 transition-all">
                    MASUK KE AKUN
                </a>
            </div>
        </div>

        <div class="p-6 bg-gray-50 text-center border-t border-gray-100">
            <a href="/homepage" class="text-sm text-blue-600 font-semibold hover:text-blue-800">
                <i class="fas fa-arrow-left mr-1"></i> Kembali ke Beranda
            </a>
        </div>
    </div>

</body>
</html>