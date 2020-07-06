<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Section;

class PostContent extends Model
{
    protected $fillable = [
        'title', 'image', 'video', 'description', 'section_id'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
