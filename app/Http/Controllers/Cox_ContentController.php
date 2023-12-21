<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cox_Content;

class Cox_ContentController extends Controller
{
    public function cox_content()
    {
        // Ambil data dari tabel cox_content
        $coxcontent = Cox_Content::all();

        // Kirim data ke view
        return view('admin.cox_content', ['Cox_Content' => $coxcontent]);
    }
}