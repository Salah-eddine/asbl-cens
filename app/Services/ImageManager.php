<?php

namespace App\Services;

use Image;
use Storage;

class ImageManager {
    
    public function imageStore($arg)
    {
        
        $imageName = $arg['request']->store('', 'imageCens');

        $arg['request']->store('',$arg['disk2']);      

        $thumb = Image::make(Storage::disk($arg['disk2'])->path($imageName))->resize($arg['x'], $arg['y'], function ($constraint) {
            
        });
        $thumb->save();
       
        
        return $imageName;
    }
    
    public function imageDelete($del)
    {
        Storage::disk('imageCens')->delete($del['imageName']);
        Storage::disk($del['disk2'])->delete($del['imageName']);
    }
    
}