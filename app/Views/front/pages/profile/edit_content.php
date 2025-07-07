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
            <h1 class="relative flex-1 text-[1rem] font-extrabold text-center">Edit Profile</h1>
        </div>

        <!-- Profile Picture -->
        <div class="flex flex-col items-center mb-8">
            <img src="{base_url}themes/images/users/{profile_picture}" alt="{fullname}"
                class="w-24 h-24 rounded-full object-cover mb-2">
            <h2 class="font-bold text-lg">{fullname}</h2>
        </div>

        <!-- Profile Form -->
        <form action="#" method="post" class="space-y-4">

            <!-- Nama -->
            <div>
                <label for="name" class="block text-sm mb-2">Nama</label>
                <input type="text" id="name" name="name" value="{fullname}"
                    class="w-full p-3 bg-white text-sm border border-[#0D0F0F] rounded-2xl focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm mb-2">Email</label>
                <div class="relative">
                    <input type="email" id="email" name="email" value="{email}"
                        class="w-full p-3 bg-white text-sm border border-[#0D0F0F] rounded-2xl focus:outline-none focus:ring-2 focus:ring-yellow-500 pr-10">
                    <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500">
                        ×
                    </button>
                </div>
            </div>

            <!-- NPWP -->
            <div>
                <label for="npwp" class="block text-sm mb-2">NPWP</label>
                <input type="text" id="npwp" name="npwp" placeholder="Masukkan NPWP Anda"
                    class="w-full p-3 bg-white text-sm border border-[#0D0F0F] rounded-2xl focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Jenis Kelamin -->
            <div>
                <label for="gender" class="block text-sm mb-2">Jenis Kelamin</label>
                <input type="text" id="gender" name="gender" placeholder="Pilih jenis kelamin"
                    class="w-full p-3 bg-white text-sm border border-[#0D0F0F] rounded-2xl focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Provinsi -->
            <div>
                <label for="province" class="block text-sm mb-2">Provinsi</label>
                <input type="text" id="province" name="province" placeholder="Pilih provinsi"
                    class="w-full p-3 bg-white text-sm border border-[#0D0F0F] rounded-2xl focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Kecamatan -->
            <div>
                <label for="district" class="block text-sm mb-2">Kecamatan</label>
                <input type="text" id="district" name="district" placeholder="Pilih kecamatan"
                    class="w-full p-3 bg-white text-sm border border-[#0D0F0F] rounded-2xl focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- Kabupaten -->
            <div>
                <label for="city" class="block text-sm mb-2">Kabupaten</label>
                <input type="text" id="city" name="city" placeholder="Pilih kabupaten"
                    class="w-full p-3 bg-white text-sm border border-[#0D0F0F] rounded-2xl focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

        </form>

    </div>
</div>