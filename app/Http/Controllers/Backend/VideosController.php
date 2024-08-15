<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\projet;
use App\Models\video;
use Carbon\Carbon;
use FFMpeg\FFMpeg;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;



class VideosController extends Controller
{
    //

    public function AddVideo(){
        return view('backend.video.add_video');
    }

   
    
   
     public function StoreVideo(Request $request){
            // $vid = $request->file('video');
            
            // $name_gen = hexdec(uniqid()).'.'.$vid->getClientOriginalExtension();
            // $vid->storeAs('upload/video', $name_gen, 'public');
            // $path = 'upload/video';
            // $vid->move($path, $name_gen);
            // $save_url = 'upload/video/'.$name_gen;
    
            Video::insert([
                
                'video'=>$request->lien,
                'created_at'=>Carbon::now(),
    
            ]);
          
            return redirect()->back();
    }

    public function AddProjet(){
        return view('backend.projet.add_video');
    }

    public function StoreProjet(Request $request){
        projet::insert([
                
            'url_video'=>$request->lien,
            'evenement'=>$request->evenement,
            'auteur'=>$request->auteur,

            'created_at'=>Carbon::now(),

        ]);
      
        return redirect()->back();
    }





    

    
}
