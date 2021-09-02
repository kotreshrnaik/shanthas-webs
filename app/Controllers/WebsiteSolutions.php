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
        return view('website-solutions/websitedesign_view');
    }
    public function WebsiteDevelopement()
    {
        return view('website-solutions/websitedeve_view');
    }
    public function LandingPageDevelopment()
    {
        return view('website-solutions/landingpagedeve_view');
    }
    public function ECommerceWebsiteDevelopment()
    {
        return view('website-solutions/ecommercedeve_view');
    }
    public function Shopify()
    {
        return view('website-solutions/shopify_view');
    }
}
