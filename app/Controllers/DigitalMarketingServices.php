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
        return view('digital-marketing-services/seo_view');
    }
    public function SearchEngineMarketing()
    {
        return view('digital-marketing-services/sem_view');
    }
    public function SocialMediaMarketing()
    {
        return view('digital-marketing-services/smm_view');
    }
    public function PayPerClick()
    {
        return view('digital-marketing-services/ppc_view');
    }
    public function ContentMarketing()
    {
        return view('digital-marketing-services/content_view');
    }
    public function EmailMarketing()
    {
        return view('digital-marketing-services/email_view');
    }
    public function WhatsappSMSMarketing()
    {
        return view('digital-marketing-services/whatsapp_view');
    }
    public function AppPromotions()
    {
        return view('digital-marketing-services/app_view');
    }
    
    
}
