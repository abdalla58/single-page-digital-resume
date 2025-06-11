<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use League\CommonMark\CommonMarkConverter;

class ResumeController extends Controller
{
    public function show()
    {
        $resume = File::json(resource_path('data/resume.json'));
        return view('resume', compact('resume'));
    }

    public function view()
    {
        $convert =new CommonMarkConverter();
        $markdown = $convert->convertToHtml(File::get(resource_path('data/resume.json')));
        return view('md', compact('markdown'));
    }
}
