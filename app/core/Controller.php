<?php
namespace Blog\Core;

class Controller
{
    public function view($path)//ifr you want add the params you should add $parm
    {
        //extract($parm); extract : $title = 'title'
        require_once VIEW . $path . '.view.php';
    }
    
    
}
