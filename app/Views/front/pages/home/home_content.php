<!-- Top Navigation -->
<div class="flex items-center px-5 mb-5 space-x-3">
    <div class="relative w-full">
        <input type="text" placeholder="Search product..."
            class="w-full h-10 px-4 py-2 pl-10 text-sm bg-white rounded-2xl focus:outline-1">
        <img src="{base_url}themes/ui/search.png" alt="Search" class="absolute w-6 h-6 -translate-y-1/2 left-3 top-1/2">
    </div>
    <button>
        <img src="{base_url}themes/ui/filter.png" alt="filter" class="w-11">
    </button>
</div>

<!-- Category Slider -->
<div class="pl-5 mb-5">
    <h2 class="font-extrabold text-[1rem] mb-2">Categories</h2>
    <div class="swiper categories-swiper">
        <div class="swiper-wrapper text-[0.875rem] text-white font-semibold">
            {categories_list}
            <div class="swiper-slide !w-auto"><a href="#"
                    class="px-4 py-2 inline-block text-sm bg-[#08182F] rounded-2xl text-nowrap cursor-pointer">{category_name}</a>
            </div>
            {/categories_list}
        </div>
    </div>
</div>

<!-- Product Slider -->
{!whats_new_section!}
{!best_selling_section!}
{!more_mens_section!}

<!-- Product From Json -->
{!json_products_section!}