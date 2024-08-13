<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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

   
    
    public function StoreVideo(Request $request)
    {
        // Valider le fichier vidéo
        $request->validate([
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:20000', // Max 20MB
        ]);
    
        // Obtenir le fichier vidéo
        $vid = $request->file('video');
    
        // Générer un nom unique pour la vidéo
        $name_gen = hexdec(uniqid()).'.'.$vid->getClientOriginalExtension();
    
        // Chemin où la vidéo sera sauvegardée
        $save_path = public_path('upload/video');
    
        // Vérifier si le dossier existe, sinon le créer
        if (!file_exists($save_path)) {
            mkdir($save_path, 0777, true);
        }
    
        // Tenter de déplacer la vidéo
        try {
            $vid->move($save_path, $name_gen);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to save the video: '.$e->getMessage()]);
        }
    
        // Enregistrer le chemin de la vidéo dans la base de données
        Video::insert([
            'video' => 'upload/video/'.$name_gen,
            'created_at' => Carbon::now(),
        ]);
    
        return redirect()->back()->with('success', 'Vidéo sauvegardée avec succès.');
    }
    

    
}
