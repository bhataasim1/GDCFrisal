<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\GalleryImages;

class GalleryPage extends Controller
{
    public function index()
    {
        // $galleryImages = GalleryImages::orderBy('created_at', 'desc')->take(30)->paginate(12);
        $galleryImages = GalleryImages::latest()->paginate(12);
        return view('pages.gallery', compact('galleryImages'));
    }
}
