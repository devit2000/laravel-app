<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    use HasFactory;
    protected $table = "slideshow";
    protected $primaryKey = "slide_id";
    protected $fillable = [
        "title",
        "subtitle",
        "description",
        "active",
        "ordernum",
        "img"
    ];
}
