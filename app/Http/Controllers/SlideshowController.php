<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slideshow;
use Illuminate\View\View;

class SlideshowController extends Controller
{
    public function show(): View
    {
        return view('home', [
            'slideshow' => Slideshow::where('active', 1)->get()
        ]);
    }
    public function slideshow(): View
    {
        return view('admin.slideshow', [
            'slideshow' => Slideshow::where('active', 1)->get()
        ]);
    }
}
