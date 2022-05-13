<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

 //    public function showImage()
 //   {
        //$files = File::files(public_path('images_path/'.$post_id));
        // If you would like to retrieve a list of 
        // all files within a given directory including all sub-directories
        $filename = public_path('images/');
       
        if (is_dir($filename))
        {
            $files = File::allFiles(public_path('images/'));
            foreach ($files as $file)
            {
                return ('file');
                
            }
        }else{
            $files = null;
        }
        //return ('files');
//    }
}
