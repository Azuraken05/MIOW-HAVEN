<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function createImage(Request $request)
    {
        $user = Auth::user();
        $imageData = $request->all();
        $imageData["user_id"] = $user->id;
        $imageData["path"] = "artworks/" . Storage::disk("artworks")
        ->putFileAs(
            "1", 
            $request->file("artwork"), $imageData["title"] . "." . $request->file("artwork")->getClientOriginalExtension()
        );
        unset($imageData["artwork"]);
        $image = Image::create($imageData);
        return $image;
        //redirect to image gallery or user's gallery
    }

    public function getImage(Request $request, $imageId)
    {
        return Image::find($imageId);
        //return image view or something like that
    }

    public function getImages()
    {
        return Image::all();
        //return view
    }

    public function getUserImages(Request $request, $userId)
    {
        return Image::where("user_id", $userId)
            ->get();
        //return view
    }

    public function updateImage(Request $request, $imageId)
    {
        $data = $request->all();
        $image = Image::find($imageId);
        $image->update($data);
        return $image;
        //return image view
    }

    public function deleteImage($imageId)
    {
        $image = Image::find($imageId);
        $file = preg_replace("/artworks\/$image->user_id\//", "", $image->path);
        Storage::disk("artworks")->delete("{$image->user_id}/$file");
        return $image->delete();
        //return view
    }

    //download image function
    public function downloadImage($imageId)
    {
        $image = Image::find($imageId);
        $file = preg_replace("/artworks\/$image->user_id\//", "", $image->path);
        return Storage::disk("artworks")->download("{$image->user_id}/$file");
    }
}
