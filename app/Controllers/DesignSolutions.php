<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;
use CodeIgniter\Controller;
/**
 * Description of DesignSolutions
 *
 * @author Admin
 */
class DesignSolutions extends Controller{
    public function index()
    {
        
    }
    public function creatives()
    {
        return view('creatives_view');
    }
    public function LogoDesigns()
    {
        return view('logodesigns_view');
    }
    public function WebPageDesign()
    {
        return view('webpagedesign_view');
    }
    public function LandingPageDesign()
    {
        return view('landingpage_view');
    }
    public function BrochureDesign()
    {
        return view('brochure_view');
    }
    
    
}
