<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'base_url'   => base_url(),
            'page_title' => "Home",
        ];

        $data['categories_list'] = [
            ['category_name' => 'All'],
            ['category_name' => "Women's Shoes"],
            ['category_name' => "Men's Shoes"],
            ['category_name' => 'Accessories'],
        ];

        $whatsNewProducts = [
            ['product_url' => 'product/detail', 'product_name' => 'D. Galaxy 03 Nero Nero Rosso', 'product_image' => 'men_shoes.png', 'product_price' => 'Rp3.000.000'],
            ['product_url' => 'product/detail', 'product_name' => 'A. Athena White Pink', 'product_image' => 'women_shoes.png', 'product_price' => 'Rp2.500.000'],
            ['product_url' => 'product/detail', 'product_name' => 'D. Galaxy 04 Black', 'product_image' => 'men_shoes.png', 'product_price' => 'Rp3.000.000'],
        ];
        $data['whats_new_section'] = $this->_buildProductCarousel("What's New", $whatsNewProducts);

        $bestSellingProducts = [
            ['product_url' => 'product/detail', 'product_name' => 'D. Galaxy 03 Nero Nero Rosso', 'product_image' => 'men_shoes.png', 'product_price' => 'Rp3.000.000'],
            ['product_url' => 'product/detail', 'product_name' => 'A. Athena White Pink', 'product_image' => 'women_shoes.png', 'product_price' => 'Rp2.500.000'],
            ['product_url' => 'product/detail', 'product_name' => 'D. Galaxy 04 Black', 'product_image' => 'men_shoes.png', 'product_price' => 'Rp3.000.000'],
        ];
        $data['best_selling_section'] = $this->_buildProductCarousel("Best-Selling Collection", $bestSellingProducts);

        $moreMensProducts = [
            ['product_url' => 'product/detail', 'product_name' => 'D. Galaxy 03 Nero Nero Rosso', 'product_image' => 'men_shoes.png', 'product_price' => 'Rp3.000.000'],
            ['product_url' => 'product/detail', 'product_name' => 'A. Athena White Pink', 'product_image' => 'women_shoes.png', 'product_price' => 'Rp2.500.000'],
            ['product_url' => 'product/detail', 'product_name' => 'D. Galaxy 04 Black', 'product_image' => 'men_shoes.png', 'product_price' => 'Rp3.000.000'],
        ];
        $data['more_mens_section'] = $this->_buildProductCarousel("More Men's", $moreMensProducts);

        $jsonProductsRaw = $this->_getProductsFromJson();

        $formattedJsonProducts = [];
        foreach ($jsonProductsRaw as $product) {
            if (isset($product)) {
                $formattedJsonProducts[] = [
                    'product_url'   => 'product/detail/' . $product['id'],
                    'product_name'  => $product['name'],
                    'product_image' => $product['image'],
                    'product_price' => 'Rp' . number_format($product['price'], 0, ',', '.'),
                ];
            }
        }
        $data['json_products_section'] = $this->_buildProductCarousel("Products from JSON", $formattedJsonProducts);

        $data['content_section']    = $this->parser->setData($data)->render('front/pages/home/home_content');
        $data['header_section']     = '';
        $data['footer_section']     = '';
        $data['bottom_nav_section'] = '';

        return $this->parser->setData($data)->render('front/layouts/main_layout');
    }

    public function search(): string
    {
        $data = [
            'base_url'   => base_url(),
            'page_title' => "Search Products",
        ];

        $data['recent_searches'] = [
            ['term' => 'Cara daftar mitra'], ['term' => 'Sepatu Pria'],
            ['term' => 'komisi'], ['term' => 'cara retur sepatu'],
            ['term' => 'artikel'], ['term' => 'sepatu kerja'],
        ];

        $data['popular_searches'] = [
            ['term' => 'Cara daftar mitra'],
            ['term' => 'Sepatu kerja'],
            ['term' => 'komisi rekrut'],
        ];

        $trendingProducts = [
            ['product_url' => '#', 'product_name' => 'D. Galaxy 03 Nero Rosso', 'product_image' => 'men_shoes.png', 'product_price' => 'Rp3.000.000'],
            ['product_url' => '#', 'product_name' => 'D. Galaxy 03 Nero Rosso', 'product_image' => 'women_shoes.png', 'product_price' => 'Rp3.000.000'],
            ['product_url' => '#', 'product_name' => 'D. Galaxy 03 Nero Rosso', 'product_image' => 'men_shoes.png', 'product_price' => 'Rp3.000.000'],
        ];
        $data['trending_products_section'] = $this->_buildProductCarousel("Trending Products", $trendingProducts);

        $activeNav = 'search';
        $navData   = [
            'base_url'       => base_url(),
            'home_active'    => $activeNav === '/' ? 'text-yellow-400' : 'text-gray-400',
            'store_active'   => $activeNav === 'store' ? 'text-yellow-400' : 'text-gray-400',
            'komisi_active'  => $activeNav === 'komisi' ? 'text-yellow-400' : 'text-gray-400',
            'profile_active' => $activeNav === 'profile' ? 'text-yellow-400' : 'text-gray-400',
        ];
        $data['bottom_nav_section'] = $this->parser->setData($navData)->render('front/layouts/partials/bottom_nav');

        $data['content_section'] = $this->parser->setData($data)->render('front/pages/search/search_content');
        $data['header_section']  = '';
        $data['footer_section']  = '';

        return $this->parser->setData($data)->render('front/layouts/main_layout');
    }
}
