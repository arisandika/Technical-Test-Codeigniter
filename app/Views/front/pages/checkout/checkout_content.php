<div class="relative w-full min-h-screen px-5 mx-auto overflow-hidden">
    <div class="overflow-y-auto">

        <!-- Top Bar -->
        <div class="relative flex items-center justify-between h-10 mb-5">
            <div class="absolute left-0 flex items-center space-x-3">
                <a href="{base_url}" class="w-10 h-10 flex items-center justify-center bg-[#ded1c3] rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </div>
            <h1 class="relative flex-1 text-[1rem] font-extrabold text-center">Checkout</h1>
        </div>

        <!-- Address Info -->
        <div class="px-3 py-2 mb-4 bg-white rounded-full shadow">
            <div class="flex items-center justify-between text-sm">
                <span class="text-xs">Alamat pengiriman kamu</span>
                <div class="flex items-center space-x-2 font-extrabold text-[#BB8F60]">
                    <img src="{base_url}themes/ui/location.png" alt="loc" class="w-4 h-4">
                    <span>Rumah · John Doe</span>
                </div>
            </div>
        </div>

        <!-- Product Info -->
        <div class="mb-4 space-y-4">
            {cart_items}
            <div class="relative px-[1.125rem] pt-8 pb-2 space-y-4 bg-white rounded-xl">
                <div class="flex items-center space-x-4">
                    <div class="relative flex items-center justify-center bg-[#E9E9E9] rounded-lg w-22 h-22">
                    </div>
                    <img src="{base_url}themes/images/shoes/{image}" alt="{name}"
                        class="absolute left-0 object-cover -mt-4 h-31">
                    <div class="flex-1">
                        <h3 class="font-bold">{name}</h3>
                        <div
                            class="inline-flex items-center gap-2 px-2 py-1 mt-1 text-xs font-medium text-white bg-[#F3A714] rounded-md">
                            <span>{variant}</span>
                            <span class="inline-block">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 1L5 5L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            </span>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-0 right-0 bg-[#F5F5F5] pt-2 pl-2 rounded-tl-xl">
                    <button
                        class="bottom-0 right-0 w-full py-1 px-2 text-xs font-medium text-center border border-[#08182F] bg-[#F5F5F5] rounded-lg">
                        Ganti Produk
                    </button>
                </div>
            </div>
            {/cart_items}
        </div>

        <!-- Payment Methods -->
        <div class="px-4 py-2 mb-4 space-y-4 bg-white shadow-sm rounded-2xl">
            <h3 class="mb-3 text-sm font-semibold">Metode Pembayaran</h3>
            {payment_methods}
            <label for="{id}" class="flex items-center justify-between py-2 cursor-pointer">
                <div class="flex items-center h-6 space-x-3">
                    <img src="{base_url}themes/images/logos/{logo}" alt="{name}" class="object-contain w-12 h-12">
                    <span class="text-xs font-semibold">{name}</span>
                </div>
                <input type="radio" name="payment_method" id="{id}" class="text-yellow-500 form-radio">
            </label>
            {/payment_methods}
        </div>

        <!-- Coupon & Wallet -->
        <div class="px-4 py-2.5 mb-4 bg-white divide-y shadow-sm rounded-full">
            <a href="#" class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <img src="{base_url}themes/ui/coupon.png" alt="coupon" class="w-4 h-4">
                    <span class="text-sm font-semibold">Have a coupon code?</span>
                </div>
                <span class="text-xs text-gray-400">Apply/Redeem</span>
            </a>
        </div>

        <div class="px-4 py-2.5 mb-4 bg-white divide-y shadow-sm rounded-full">
            <a href="#" class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <img src="{base_url}themes/ui/wallet.png" alt="wallet" class="w-4 h-4">
                    <span class="text-sm font-semibold">My Wallet</span>
                </div>
                <span class="text-xs text-gray-400">Apply/Redeem</span>
            </a>
        </div>

        <!-- Detail Payment -->
        <div class="px-4 py-2 mb-10 space-y-3 bg-white shadow-sm rounded-2xl">
            <h3 class="mb-3 text-sm font-semibold">Detail Pembayaran</h3>
            <div class="flex items-center justify-between text-xs">
                <span class="font-semibold">Subtotal Produk</span>
                <span class="text-[#F3A714]">Rp3.990.000</span>
            </div>
            <div class="flex items-center justify-between text-xs">
                <span class="font-semibold">Subtotal Pengiriman</span>
                <span class="text-[#F3A714]">Rp1.000</span>
            </div>
            <div class="flex items-center justify-between text-xs">
                <span class="font-semibold">Biaya Layanan</span>
                <span class="text-[#F3A714]">Rp1.000</span>
            </div>
        </div>

    </div>
</div>