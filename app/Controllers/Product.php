<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function detail(): string
    {
        $data = [
            'base_url'         => base_url(),
            'page_title'       => "UX. Galaxy 27 - Detail",
            'product_name'     => "UX. Galaxy 27",
            'product_category' => "Men's Shoe",
            'product_price'    => "Rp3.000.000",
            'sub_price'        => "(Boco Value 2.800.000)",
        ];

        $data['product_images'] = [
            ['image_url' => 'detail_shoes.png'],
            ['image_url' => 'men_shoes.png'],
            ['image_url' => 'women_shoes.png'],
        ];

        $data['colors'] = [
            ['hex' => '#000000'],
            ['hex' => '#E65052'],
            ['hex' => '#CDBDA4'],
            ['hex' => '#4156B0'],
            ['hex' => '#FFFFFF'],
        ];

        $data['sizes'] = [
            ['size' => '36'],
            ['size' => '37'],
            ['size' => '38'],
            ['size' => '39'],
        ];

        $data['content_section'] = $this->parser->setData($data)->render('front/pages/product/detail_content');

        $data['header_section']     = '';
        $data['footer_section']     = $this->parser->setData($data)->render('front/layouts/partials/footer_detail');
        $data['bottom_nav_section'] = '';

        return $this->parser->setData($data)->render('front/layouts/main_layout');
    }
}
