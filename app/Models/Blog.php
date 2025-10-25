<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $casts = [
        'blogcategories' => 'array',
        'metakeywords' => 'array',
        'tags' => 'array',
    ];

    protected $fillable = [
        'blogname',
        'blogcategories',
        'blogthumbnail',
        'blogdescription',
        'metakeywords',
        'metadescription',
    ];
}
