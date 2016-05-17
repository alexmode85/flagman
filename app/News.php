<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    
    public function getActive()
    {
        return $this->published()->latest()->paginate(5);
    }
    public function getActive2()
    {
        return $this->published()->latest()->paginate(2);
    }
    
    public function getBySlug($slug)
    {
        return $this->where(['slug'=>$slug])->firstOrFail();
    }
    
    public function scopePublished($query)
    {
        $query->where(['active'=>1]);
    }
}
