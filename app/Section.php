<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'section_name'
    ];
    public function contents()
    {
        return $this->hasMany('App\PostContent');
    }
}
