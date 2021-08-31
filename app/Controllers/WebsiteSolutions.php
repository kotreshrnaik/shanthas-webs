<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use CodeIgniter\Controller;
/**
 * Description of WebsiteSolutions
 *
 * @author Admin
 */
class WebsiteSolutions extends Controller {
    public function WebsiteDesign()
    {
        return view('websitedesign_view');
    }
    public function WebsiteDevelopement()
    {
        return view('websitedeve_view');
    }
    public function LandingPageDevelopment()
    {
        return view('landingpagedeve_view');
    }
    public function ECommerceWebsiteDevelopment()
    {
        return view('ecommercedeve_view');
    }
    public function shopify()
    {
        return view('shopify_view');
    }
}
