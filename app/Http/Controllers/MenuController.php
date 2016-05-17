<?php

namespace App\Http\Controllers;

use App\Menu;

class MenuController extends Controller {
    
    public function index(News $news)
    {
        $this->data['records'] = $news->getActive2();
        return view('index', $this->data);        
    }
    public function menu(Menu $menu)
    {
        $this->data['records'] = $menu->getActive();
        return view('pages.menu', $this->data);        
    }
    
    public function cart($slug, News $news)
    {
        $this->data['record'] = $news->getBySlug($slug);
        return view('news.cart', $this->data);  
    }
}