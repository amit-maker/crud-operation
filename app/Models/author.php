<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;

        protected $fillable = [

        'blogname', 'title','description', 'image','date','summary','authorname','status'

    ];

}
