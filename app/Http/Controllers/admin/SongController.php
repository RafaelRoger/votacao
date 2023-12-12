<?php

namespace App\Http\Controllers\admin;

use App\Models\Song;
use \Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function invoke() {
        return view('admin.songs');
    }

    public function gerarCodigoVotacao($tamanho) {
        $caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $codigo = '';
    
        $max = strlen($caracteres) - 1;
    
        for ($i = 0; $i < $tamanho; $i++) {
            $codigo .= $caracteres[mt_rand(0, $max)];
        }
    
        return $codigo;
    }

    public function store( Request $request ) {

        $request->validate([
            'singer' => 'required',
            'title' => 'required',
            'image' => ['required', 'mimes:jpg,jpeg,png,svg', 'max:10240'],
        ], [
            'contrato.max' => 'O ficheiro deve ter tamanho limite de 10MB',
        ]);

        $dir = $request->file('image')->store('images');

        if (!empty($dir)) {
            $obSong = new Song;
            $obSong->code = $this->gerarCodigoVotacao(6);
            $obSong->singer = $request->singer;
            $obSong->title = $request->title;
            $obSong->image = $dir;
            $obSong->user_id = Auth::user()->id;

            if ($obSong->save()) {
                return back()->with("message", "Musica registrada com sucesso.");
            }
        } 

        return back()->withErrors("Falha ao registar a musica.");
    }

    public function songs() {
        $songs = Song::get();

        return view('admin.song-list', [
            'songs' => $songs
        ]);
    }
}
