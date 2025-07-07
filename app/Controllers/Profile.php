<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Profile extends BaseController
{
    public function edit()
    {
        $data = [
            'base_url'        => base_url(),
            'page_title'      => "Edit Profile",
            'fullname'        => 'John Doe',
            'email'           => 'johndoe@gmail.com',
            'profile_picture' => 'profile_pic.jpg',
        ];

        $data['content_section'] = $this->parser->setData($data)->render('front/pages/profile/edit_content');

        $data['header_section']     = '';
        $data['footer_section']     = '';
        $data['sticky_footer']      = '';
        $data['bottom_nav_section'] = '';

        return $this->parser->setData($data)->render('front/layouts/main_layout');
    }

    public function changePassword()
    {
        $data = [
            'base_url'   => base_url(),
            'page_title' => "Change Password",
        ];

        $data['content_section'] = $this->parser->setData($data)->render('front/pages/profile/edit_password_content');

        $data['footer_section'] = $this->parser->setData($data)->render('front/layouts/partials/footer_save');

        $data['header_section']     = '';
        $data['sticky_footer']      = '';
        $data['bottom_nav_section'] = '';

        return $this->parser->setData($data)->render('front/layouts/main_layout');
    }

    public function ahliWaris()
    {
        $data = [
            'base_url'   => base_url(),
            'page_title' => "Ahli Waris",
        ];

        $data['content_section'] = $this->parser->setData($data)->render('front/pages/profile/edit_ahliwaris');

        $data['footer_section'] = $this->parser->setData($data)->render('front/layouts/partials/footer_save');

        $data['header_section']     = '';
        $data['sticky_footer']      = '';
        $data['bottom_nav_section'] = '';

        return $this->parser->setData($data)->render('front/layouts/main_layout');
    }
}
