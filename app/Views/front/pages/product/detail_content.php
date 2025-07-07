<div class="relative w-full min-h-screen px-5 mx-auto overflow-hidden">
    <div class="overflow-y-auto">

        <!-- Top Navigation -->
        <div class="flex items-center justify-between">
            <a href="{base_url}" class="w-10 h-10 flex items-center justify-center bg-[#ded1c3] rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <button class="w-10 h-10 flex items-center justify-center bg-[#ECECEC] rounded-full">
                <img src="{base_url}themes/ui/details_filter.png" alt="filter" class="w-10 h-10">
            </button>
        </div>

        <!-- Product Info Header -->
        <div class="mt-2 mb-4 text-center">
            <h1 class="text-[1.125rem] font-extrabold text-[#08182F]">{product_name}</h1>
            <p class="text-sm text-gray-500">{product_category}</p>
        </div>

        <!-- Main Area: Size and Image -->
        <div class="flex items-start justify-between">
            <!-- Color Options -->
            <div class="relative flex items-center justify-center flex-1 gap-2" id="color-options">
                {colors}
                <button
                    class="color-btn w-7 h-7 rounded-xl flex items-center justify-center ring-[0.3px] p-2 cursor-pointer"
                    data-hex="{hex}">
                    <span class="w-3 h-3 rounded-full" style="background-color: {hex};"></span>
                </button>
                {/colors}
            </div>

            <!-- Size Selection -->
            <div class="absolute z-10 flex flex-col items-center" id="size-options">
                <span class="mb-2 text-xs font-semibold">Size</span>
                {sizes}
                <button
                    class="size-btn flex mb-3 items-center justify-center text-sm font-semibold text-[#08182F] border-[0.3px] border-[#08182F] rounded-2xl w-11 h-11 cursor-pointer"
                    data-size="{size}">
                    {size}
                </button>
                {/sizes}
            </div>
        </div>

        <!-- Product Image Slider -->
        <div class="relative flex-1 my-12">
            <div class="mx-auto swiper product-swiper">
                <div class="swiper-wrapper">
                    {product_images}
                    <div class="flex items-center justify-center w-full p-5 swiper-slide">
                        <img src="{base_url}themes/images/shoes/{image_url}" alt="{product_name}"
                            class="object-contain w-full" width="360">
                    </div>
                    {/product_images}
                </div>
            </div>
            <div class="absolute left-0 -translate-y-1/2 top-1/2">
                <img src="{base_url}themes/ui/arrow.png" class="rotate-180" width="36" alt="arrow">
            </div>
            <div class="absolute right-0 -translate-y-1/2 top-1/2">
                <img src="{base_url}themes/ui/arrow.png" width="36" alt="arrow">
            </div>
        </div>

        <!-- Product Information -->
        <div class="flex flex-col">
            <h3 class="text-sm font-semibold">Deskripsi Produk</h3>
            <div class="flex items-center gap-1 mt-2">
                <p class="text-[1.125rem] font-extrabold">{product_price}</p>
                <p class="text-[0.625rem] text-[#6A6C6C]">{sub_price}</p>
            </div>
        </div>

    </div>
</div>