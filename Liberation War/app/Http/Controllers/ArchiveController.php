<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function Documents(){

        return view('Archive.Documents');
    }

    public function Image(){

        return view('Archive.Image');
    }
    public function VideoFootage(){

        return view('Archive.Video_Footage');
    }

}
