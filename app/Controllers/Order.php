<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Order extends BaseController
{
    public function checkout()
    {
        $data = [
            'base_url'   => base_url(),
            'page_title' => "Checkout",
        ];

        $data['cart_items'] = [
            [
                'image'   => 'tshirt.png',
                'name'    => 'T-Shirt Oro',
                'variant' => 'S, Nero',
            ],
            [
                'image'   => 'starter_pack.png',
                'name'    => 'Starter Pack 2',
                'variant' => '34, X, Galaxy',
            ],
        ];

        $data['payment_methods'] = [
            [
                'id'          => 'bca_va',
                'logo'        => 'bca_logo.png',
                'name'        => 'BCA Virtual Account',
                'is_selected' => true,
            ],
            [
                'id'          => 'bri_va',
                'logo'        => 'bri_logo.png',
                'name'        => 'BRI Virtual Account',
                'is_selected' => false,
            ],
            [
                'id'          => 'mandiri_va',
                'logo'        => 'mandiri_logo.png',
                'name'        => 'Mandiri Virtual Account',
                'is_selected' => false,
            ],
        ];

        $data['content_section'] = $this->parser->setData($data)->render('front/pages/checkout/checkout_content');

        $data['footer_section'] = $this->parser->setData($data)->render('front/layouts/partials/footer_checkout');

        $data['header_section']     = '';
        $data['bottom_nav_section'] = '';

        return $this->parser->setData($data)->render('front/layouts/main_layout');
    }
}
