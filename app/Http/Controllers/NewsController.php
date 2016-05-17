<?php

namespace App\Http\Controllers;

use App\News;

class NewsController extends Controller {
    
    public function index(News $news)
    {
        $this->data['records'] = $news->getActive2();
        return view('index', $this->data);        
    }
    public function news(News $news)
    {
        $this->data['records'] = $news->getActive();
        return view('news.news', $this->data);        
    }
    
    public function cart($slug, News $news)
    {
        $this->data['record'] = $news->getBySlug($slug);
        return view('news.cart', $this->data);  
    }
}