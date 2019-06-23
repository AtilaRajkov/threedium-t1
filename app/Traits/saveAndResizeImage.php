<?php
namespace App\Traits;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

trait saveAndResizeImage{
    protected function saveAndResizeImage($folderName=null) {
        if (request()->has('image')){
            $file = request()->image;
        } elseif (request()->has('banner')) {
            $file = request()->banner;
        }
        
        $timeStamp = Str::slug(now(), '-');
        $fileExtension = $file->getClientOriginalExtension();
        $fileName = config('app.seo-image-prefiks') . Str::slug(request('title'), '-') . '-' . $timeStamp . '.' . $fileExtension;
        $folderName = '/upload/' . $folderName . '/';
        $file->move(public_path($folderName), $fileName);
        
        // intervetion
            // l size
            $intervetionImage = Image::make(public_path($folderName).$fileName);
            $intervetionImage->resize(1140, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $fileNameXL = $folderName . config('app.seo-image-prefiks') . Str::slug(request('title'), '-') . '-' . $timeStamp . '-l.' . $fileExtension;
            $intervetionImage->save(public_path($fileNameXL));
            
            // m size
            $intervetionImage = Image::make(public_path($folderName).$fileName);
            $intervetionImage->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $fileNameM = $folderName . config('app.seo-image-prefiks') . Str::slug(request('title'), '-') . '-' . $timeStamp . '-m.' . $fileExtension;
            $intervetionImage->save(public_path($fileNameM));
            
            // s size
            $intervetionImage = Image::make(public_path($folderName).$fileName);
            $intervetionImage->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $fileNameS = $folderName . config('app.seo-image-prefiks') . Str::slug(request('title'), '-') . '-' . $timeStamp . '-s.' . $fileExtension;
            $intervetionImage->save(public_path($fileNameS));
        
        
        return $folderName . $fileName;
        
        
    }
}

    
