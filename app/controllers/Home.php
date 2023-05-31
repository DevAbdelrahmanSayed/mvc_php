<?php
namespace BLOG\Controllers; 
use BLOG\core\Controller;
//<!--====================== Home page ====================-->
class Home extends Controller
{
    public function index()
    {
        $this->view('home');
    }

}
