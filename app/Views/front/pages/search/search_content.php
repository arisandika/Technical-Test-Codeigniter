<div class="relative w-full min-h-screen mx-auto overflow-hidden">
    <div class="overflow-y-auto">

        <!-- Top Bar -->
        <div class="relative flex items-center justify-between h-10 px-5 mb-7">
            <h1 class="relative flex-1 text-[1rem] font-extrabold text-center">Search</h1>
            <div class="absolute right-0 flex items-center px-5 space-x-3">
                <button class="flex items-center justify-center bg-[#ECECEC] rounded-full">
                    <img src="{base_url}themes/ui/heart.png" alt="Wishlist" class="w-10 h-10">
                </button>
                <button class="flex items-center justify-center bg-[#ECECEC] rounded-full">
                    <img src="{base_url}themes/ui/bell.png" alt="Notification" class="w-10 h-10">
                </button>
            </div>
        </div>

        <!-- Search Input -->
        <div class="flex items-center px-5 mb-6 space-x-3">
            <div class="relative w-full">
                <input type="text" placeholder="Search product..."
                    class="w-full h-10 px-4 py-2 pl-10 text-sm bg-white rounded-2xl focus:outline-1">
                <img src="{base_url}themes/ui/search.png" alt="Search"
                    class="absolute w-6 h-6 -translate-y-1/2 left-3 top-1/2">
            </div>
            <button>
                <img src="{base_url}themes/ui/filter.png" alt="filter" class="w-11">
            </button>
        </div>

        <div class="space-y-6">
            <!-- Recent Search -->
            <div class="px-5">
                <h2 class="mb-3 text-[1rem] font-extrabold">Recent Search</h2>
                <div class="flex flex-wrap gap-2">
                    {recent_searches}
                    <a href="#" class="flex items-center px-2 py-1.5 space-x-2 text-sm bg-[#F3A71433] rounded-xl">
                        <img src="{base_url}themes/ui/clock.png" alt="clock" class="w-4 h-4">
                        <span class="text-xs">{term}</span>
                    </a>
                    {/recent_searches}
                </div>
                <button class="flex items-center gap-2 mt-2 text-xs font-bold cursor-pointer">Load more<span
                        class="inline-block">
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 1L5 5L1 1" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                    </span></button>
            </div>

            <!-- Popular Search -->
            <div class="px-5">
                <h2 class="mb-3 text-[1rem] font-extrabold">Popular Search</h2>
                <div class="flex flex-wrap gap-2">
                    {popular_searches}
                    <a href="#"
                        class="flex items-center px-2 py-1.5 space-x-2 text-sm bg-white border border-[#BB8F60] rounded-xl">
                        <img src="{base_url}themes/ui/trending.png" alt="trending" class="w-4 h-4">
                        <span class="text-xs">{term}</span>
                    </a>
                    {/popular_searches}
                </div>
                <button class="flex items-center gap-2 mt-2 text-xs font-bold cursor-pointer">Load more<span
                        class="inline-block">
                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 1L5 5L1 1" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                    </span></button>
            </div>

            <!-- Trending Products -->
            {!trending_products_section!}
        </div>
    </div>
</div>