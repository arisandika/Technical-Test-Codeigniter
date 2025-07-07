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
            <h1 class="relative flex-1 text-[1rem] font-extrabold text-center">Change Password</h1>
        </div>

        <!-- Profile Form -->
        <form action="#" method="post" class="space-y-4">

            <!-- Old Password -->
            <div>
                <label for="old_password" class="block text-sm mb-2">Old Password</label>
                <input type="password" id="old_password" name="old_password" value="******"
                    class="w-full p-3 bg-white text-sm border border-[#0D0F0F] rounded-2xl focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

            <!-- New Password -->
            <div>
                <label for="new_password" class="block text-sm mb-2">New Password</label>
                <input type="password" id="new_password" name="new_password" value="******"
                    class="w-full p-3 bg-white text-sm border border-[#0D0F0F] rounded-2xl focus:outline-none focus:ring-2 focus:ring-yellow-500">
                <small class="font-bold text-[#6A6C6C]">Must be at least 8 characters</small>
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="confirm_password" class="block text-sm mb-2">Confirm Password</label>
                <input type="password" id="confirm_password" name="old_password" value="******"
                    class="w-full p-3 bg-white text-sm border border-[#0D0F0F] rounded-2xl focus:outline-none focus:ring-2 focus:ring-yellow-500">
            </div>

        </form>

    </div>
</div>