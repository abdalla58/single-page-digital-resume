<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Exception\CommonMarkException;

class ResumeController extends Controller
{
    private const JSON_PATH = 'app/public/resume.json';
    private const MD_PATH = 'app/public/resume.md';
    public function show()
    {
        $resume = $this->getData();
        return view('resume', compact('resume'));
    }

    public function view()
    {
        $converter =new CommonMarkConverter();
        if (app()->isLocal()){
            //$markdown = $convert->convertToHtml(File::get(resource_path('data/resume.md')));
            try {
                $markdown = $converter->convert(File::get(storage_path(self::MD_PATH)));
            } catch (FileNotFoundException $e) {
                abort(404, $e->getMessage());
            } catch (CommonMarkException $e) {
                abort(500, $e->getMessage());
            }
        }else{
            $modified=filemtime(storage_path(self::MD_PATH));
            $cacheKey = 'resume_data'.$modified;
            $markdown=Cache::remember($cacheKey,now()->addDay(),function () use ($converter){
               return $converter->convert(File::get(storage_path(self::MD_PATH)));
            });
        }
        return view('md', compact('markdown'));
    }

    public function download()
    {
        $resume = $this->getData();
        $pdf= Pdf::loadView('pdf', compact('resume'));
        return $pdf->download('Abdalla.pdf');
    }

    public function getData()
    {
        if(app()->isLocal()){
            try {
                //$resume = File::json(resource_path('data/resume.json'));
                $resume = File::json(storage_path(self::JSON_PATH));
            } catch (FileNotFoundException $e) {
                abort(404, $e->getMessage());
            }
        }else{
            $modified=filemtime(storage_path(self::JSON_PATH));
            $cacheKey = 'resume_data'.$modified;
            $resume=Cache::remember($cacheKey,now()->addDay(),function (){
                return File::json(storage_path(self::JSON_PATH));
            });
        }
        return $resume;
    }
}
