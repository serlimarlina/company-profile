<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Eloquent;
use App\Models\blog;
class DataController extends Controller
{
        //blog
        public function blogGet()
        {
            $blog = blog::all();
            return view('data.blog.index',  ['blog' => $blog]);
        }
        public function blogCreate()
        {
          return view('/data/blog/create');
        }
        public function blogEdit($id)
        {
          $blog = blog::find($id);
          return view('data.blog.edit', compact('blog'));
        }
    
        public function blogPost(Request $req)
        {
            $id = $req->get('id');
            if($id)
            {
                $blog = blog::find($id);
            }else
            {
                $blog = new blog;
            }
            if($req->gambar){
              if($req->hasFile('gambar')){
                $foto = $req->file('gambar');
                $filename = time() . '.' . $foto->getClientOriginalExtension();
                $destinationPath = 'image/';              
                 $foto->move($destinationPath, $filename);
                }
                $blog->gambar = $filename;
            }
            $blog->nama_lomba = $req->nama_lomba;
            $blog->bidang_lomba = $req->bidang_lomba;
            $blog->juara = $req->juara;
            $blog->ket = $req->ket;
            $blog->save();
            return redirect()->route('data.blog.index')->with(['success' => 'Data Berhasil Di Simpan']);
        }
        public function blogDel($id)
      {
        $blog = blog::findOrFail($id);
        $blog->delete();
    
        return redirect('/data/blog');
          if($blog){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
      }
}
