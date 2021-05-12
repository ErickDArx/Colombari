<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class mascarillas extends Model
{
    protected $table = 'mascarillas';
    protected $filliable = ['img'];

    public static function setImagen($imagen , $actual = false){
        if($imagen){
            if($actual){
            }
            $nombre = Str::random(20) . ".jpg";
            $imagen = Image::make($imagen)->encode('jpg',75);
            $imagen->resize(530,470,function ($constraint){
                $constraint->upsize();
            });
            Storage::disk('dropbox')->put("imagenes/$nombre", $imagen->stream()->__toString());
            $dropbox = Storage::disk('dropbox')->getDriver()->
            getAdapter()->getClient();
            $response = $dropbox->createSharedLinkWithSettings('imagenes/',["requested_visibility"=>'public']);
            return str_replace('dl=0','raw=1',$response['url']);
        }
    }
}
