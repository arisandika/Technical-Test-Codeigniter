<div class="relative w-full min-h-screen px-5 mx-auto overflow-hidden">
    <div class="overflow-y-auto">

        <!-- Top Bar -->
        <div class="relative flex items-center justify-between h-10 mb-7">
            <div class="absolute left-0 flex items-center space-x-3">
                <a href="{base_url}" class="w-10 h-10 flex items-center justify-center bg-[#ded1c3] rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </div>
            <h1 class="relative flex-1 text-[1rem] font-extrabold text-center">Ahli Waris</h1>
        </div>

        <!-- Profile Form -->
        <form action="#" method="post" class="space-y-4">

            <!-- NIK (KTP) Ahli Waris -->
            <div>
                <label for="nik_ahliwaris" class="block text-sm mb-2">Nik (KTP) Ahli Waris</label>
                <input type="text" id="nik_ahliwaris" name="nik_ahliwaris" placeholder="Masukkan NIK sesuai KTP"
                    class="w-full p-3 bg-white text-sm border border-[#0D0F0F] rounded-2xl focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Nama Ahli Waris -->
            <div>
                <label for="nama_ahliwaris" class="block text-sm mb-2">Nama Ahli Waris</label>
                <input type="text" id="nama_ahliwaris" name="nama_ahliwaris"
                    placeholder="Masukkan nama lengkap ahli waris"
                    class="w-full p-3 bg-white text-sm border border-[#0D0F0F] rounded-2xl focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Tanggal Lahir Ahli Waris -->
            <div>
                <label for="tgl_lahir_ahliwaris" class="block text-sm mb-2">Tanggal Lahir Ahli Waris</label>
                <input type="date" id="tgl_lahir_ahliwaris" name="tgl_lahir_ahliwaris" placeholder="Pilih tanggal lahir"
                    class="w-full p-3 bg-white text-sm border border-[#0D0F0F] rounded-2xl focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Hubungan Ahli Waris -->
            <div>
                <label for="hubungan_ahliwaris" class="block text-sm mb-2">Hubungan Ahli Waris</label>
                <input type="text" id="hubungan_ahliwaris" name="hubungan_ahliwaris"
                    placeholder="Cth: Anak, Suami/Istri, Orang Tua"
                    class="w-full p-3 bg-white text-sm border border-[#0D0F0F] rounded-2xl focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

        </form>

    </div>
</div>