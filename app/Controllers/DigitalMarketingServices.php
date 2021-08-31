<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use CodeIgniter\Controller;
/**
 * Description of DigitalMarketingServices
 *
 * @author Admin
 */
class DigitalMarketingServices extends Controller {
    public function SearchEngineOptimization()
    {
        return view('seo_view');
    }
    public function SearchEngineMarketing()
    {
        return view('sem_view');
    }
    public function SocialMediaMarketing()
    {
        return view('smm_view');
    }
    public function PayPerClick()
    {
        return view('ppc_view');
    }
    public function ContentMarketing()
    {
        return view('content_view');
    }
    public function EmailMarketing()
    {
        return view('email_view');
    }
    public function WhatsappSMSMarketing()
    {
        return view('whatsapp_view');
    }
    public function AppPromotions()
    {
        return view('app_view');
    }
    
    
}
