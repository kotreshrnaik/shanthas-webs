<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use CodeIgniter\Controller;

/**
 * Description of Blog
 *
 * @author Admin
 */
class Blog extends Controller {
    public function __construct() {
        helper("date");
    }
    public function index()
    {
        return view("blog/blog_view");
    }
}
