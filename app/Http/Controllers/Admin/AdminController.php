<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use App\Models\Berita;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function kategori(){
        $kategori = KategoriBerita::all();
        return view('admin.kategori', compact(['kategori']));
    }

    public function saveKategori(Request $req){
        $kategori = new KategoriBerita;
        $kategori->nama = $req->namakategori;

        $kategori->save();

        return redirect()->route('admin.kategori');
    }

    public function editKategori($id){
        $kategori = KategoriBerita::where('id', $id)->first();
        //return $kategori;
        return view('admin.editkategori', compact(['kategori']));
    }

    public function updateKategori(Request $req){
        $kategori = KategoriBerita::where('id', $req->id)->first();

        $kategori->nama = $req->namakategori;

        $kategori->save();

        return redirect()->route('admin.kategori');
    }

    public function deleteKategori($id){
        KategoriBerita::destroy($id);

        return redirect()->route('admin.kategori');
    }

    public function berita(){
        $berita = Berita::all();
        $kategori = KategoriBerita::all();
        return view('admin.berita', compact(['berita', 'kategori']));
    }

    public function saveBerita(Request $req){
        $berita = new Berita;
        $berita->judul = $req->judulberita;
        $berita->isi = $req->isiberita;
        $berita->id_kategori = $req->kategori;
        $foto = '';
        if($req->file('photo')){
            $validatedData = $req->validate([
                'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            $foto = $req->file('photo')->getClientOriginalName();
            $path = $req->file('photo')->move('images/berita/' , $foto);
        }
        $berita->photo = $foto;

        $berita->save();

        return redirect()->route('admin.berita');
    }

    public function viewBerita(Request $req){
        $berita = Berita::where('id', $req->id)->first();

        return view('admin.viewberita', compact(['berita']));
    }

    public function editBerita($id){
        $berita = Berita::where('id', $id)->first();
        $kategori = KategoriBerita::all();

        //return $berita;
        return view('admin.editberita', compact(['berita', 'kategori']));
    }

    public function updateBerita(Request $req){
        $berita = Berita::where('id', $req->id)->first();

        $berita->judul = $req->judulberita;
        $berita->isi = $req->isiberita;
        $berita->id_kategori = $req->kategori;
        
        if($req->file('photo')){
            $validatedData = $req->validate([
                'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            $foto = $req->file('photo')->getClientOriginalName();
            $path = $req->file('photo')->move('images/berita/' , $foto);
            $berita->photo = $foto;
        }

        $berita->save();

        return redirect()->route('admin.berita');
    }

    public function deleteBerita($id){
        Berita::destroy($id);

        return redirect()->route('admin.berita');
    }
}
