<div class="mb-4">
    <div class="flex items-center justify-between px-5 mb-3">
        <h2 class="font-extrabold text-[1rem]">{section_title}</h2>
        <a href="{view_all_url}" class="text-xs font-extrabold text-[#F3A714]">View All</a>
    </div>
    <div class="swiper whatsnew-swiper">
        <div class="pl-5 space-x-3 swiper-wrapper">
            {product_list}
            <div class="swiper-slide !w-auto">
                <a href="{base_url}{product_url}"
                   class="inline-block relative w-[180px] h-[240px] bg-[#F6F7FB] rounded-2xl border-[0.3px] border-black/10 overflow-hidden">
                    <div class="absolute inset-0 flex flex-col justify-between px-4 py-4">
                        <h4 class="text-sm font-bold leading-snug text-black">
                            {product_name}
                        </h4>
                        <div class="flex items-center justify-center">
                            <img src="{base_url}/themes/images/shoes/{product_image}" alt="{product_name}"
                                 class="object-contain w-[120px] h-[120px]">
                        </div>
                        <p class="text-sm font-extrabold text-black">{product_price}</p>
                    </div>
                    <button
                        class="absolute -bottom-0 right-0 p-2 rounded-tl-[1rem] border-t-[0.3px] border-l-[0.3px] border-black/10 cursor-pointer">
                        <img src="{base_url}/themes/ui/cart.png" alt="Cart" width="40">
                    </button>
                </a>
            </div>
            {/product_list}
        </div>
    </div>
</div>
