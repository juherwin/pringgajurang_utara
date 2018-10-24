<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spipu\Html2Pdf\Html2Pdf;
use App\berita;
use App\pengumumandesa;
use App\apbd;
use App\rkp;
use App\rpjm;
use App\jmlpend;
use App\statagamapend;
use App\statetnispend;
use App\statpendidikanpend;
use App\statpekerjaanpend;

class web_controller extends Controller
{

	public function indexhome()
    {
       $beritas= berita::orderBy("created_at","desc")->take(3)->skip(0)->get();
       $pengumumandesas= pengumumandesa::orderBy("created_at","desc")->get();

       return view('indexhome', ['beritas' => $beritas], ['pengumumandesas' => $pengumumandesas]);
    }

    public function profildesa()
    {
    	# code...
        $jmlpends=jmlpend::paginate(10);
        $agamas= statagamapend::paginate(10);
        $pendidikans= statpendidikanpend::paginate(10);
        $pekerjaans= statpekerjaanpend::paginate(10);
        $etniss= statetnispend::paginate(10);
    	return view("profildesa",['agamas' => $agamas, 'jmlpends' => $jmlpends, 'pendidikans' => $pendidikans, 'etniss' => $etniss, 'pekerjaans' => $pekerjaans]);
    }

	public function organisasi()
    {
    	# code...
    	return view("organisasi");
    }

    public function transparansi($id)
    {
    	# code...
        switch ($id) {
        case 'apbd':

            $apbds =apbd::all();
            return view('transparansi', ['apbds' => $apbds], ['id' => $id]);

            break;

        case 'rkp':

            $apbds =rkp::all();
            return view('transparansi', ['apbds' => $apbds], ['id' => $id]);

            
            break;

        case 'rpjm':

             $apbds =rpjm::all();
             return view('transparansi', ['apbds' => $apbds], ['id' => $id]);

            
        break;
    }
        
    }


    public function lembaga()
    {
        # code...
        return view("lembaga");
    }  

    public function beritadesa()
    {
        # code...
        $beritas= berita::paginate(5);

        return view('beritadesa', ['beritas' => $beritas]);
    }  



    public function addberita(Request $request)
    {

        if($request->hasfile('url_gambar')){
                       
            $data = new berita();
            $data->judulberita = $request->judul_berita;
            $data->deskripsi = $request->isi_berita;
            $request->url_gambar->storeAs('public',$request->url_gambar->getClientOriginalName());
            $data->urlgambar = Storage::url($request->url_gambar->getClientOriginalName());
            $data->save();

            $var="data berhasil di simpan";
            return redirect('admin')->with('key', $var);

        }else{
            $var="Tolong upload gambar";
            return redirect('admin')->with('key', $var);;

        }

        
    } 


     public function editberita(Request $request,$id)
    {

       if($request->hasfile('url_gambar')){
           
            $request->url_gambar->storeAs('public',$request->url_gambar->getClientOriginalName());
            berita::find($id)->update([
            'judulberita' => $request->judul_berita,
            'deskripsi' => $request->isi_berita,
            'url_gambar' => Storage::url($request->url_gambar->getClientOriginalName())
         ]);    

            $var="Data berhasil di ubah";
            return redirect('admin')->with('key', $var);

        }else{
            $var="Tolong upload gambar";
            return redirect('admin')->with('key', $var);;
        }

        
    } 


    public function deleteberita($id)
    {
        # code...
        berita::where('id',$id)->delete();
        $var="Data berhasil di hapus";
        return redirect('admin')->with('key', $var);
    }


    public function pengumumandesa()
    {
        # code...
        $pengumumans= pengumumandesa::paginate(5);

        return view('pengumumandesa', ['pengumumans' => $pengumumans]);
    }  

    public function addpengumuman(Request $request)
    {

        if($request->hasfile('url_gambar')){
                       
            $data = new pengumumandesa();
            $data->judulpengumuman = $request->judul_pengumuman;
            $data->deskripsi = $request->isi_pengumuman;
            $request->url_gambar->storeAs('public',$request->url_gambar->getClientOriginalName());
            $data->urlgambar = Storage::url($request->url_gambar->getClientOriginalName());
            $data->save();

            $var="data berhasil di simpan";
            return redirect('admin')->with('key2', $var);

        }else{
            $var="Tolong upload gambar";
            return redirect('admin')->with('key2', $var);;

        }

        
    }


    public function editpengumuman(Request $request,$id)
    {

        if($request->hasfile('url_gambar')){
           
            $request->url_gambar->storeAs('public',$request->url_gambar->getClientOriginalName());
            pengumumandesa::find($id)->update([
            'judulpengumuman' => $request->judul_pengumuman,
            'deskripsi' => $request->isi_pengumuman,
            'url_gambar' => Storage::url($request->url_gambar->getClientOriginalName())
         ]);    

            $var="berhasil di ubah";
            return redirect('admin')->with('key2', $var);

        }else{
            $var="Tolong upload gambar";
            return redirect('admin')->with('key2', $var);;
        }

        
    }


     public function deletepengumuman($id)
    {
        # code...
        pengumumandesa::where('id',$id)->delete();
        $var="Data berhasil di hapus";
        return redirect('admin')->with('key2', $var);;
    }


    public function formaddberita()
    {
        return view("adminCRUD/addberita");
    }



    public function formeditberita($id)
    {
        $beritas=berita::find($id);

        return view("adminCRUD/editberita",['beritas' => $beritas]);
    }

 

    public function formaddpengumuman()
    {
        return view("adminCRUD/addpengumuman");
    }


    public function formeditpengumuman($id)
    {

        $pengumumans=pengumumandesa::find($id);
        return view("adminCRUD/editpengumuman",['pengumumans' => $pengumumans]);
    }





    public function detailberita($id)
    {
        # code...
        $beritas=berita::where('judulberita', '=', $id)->first();
        return view("detailberita",['beritas' => $beritas]);

    } 

    public function detailpengumuman($id)
    {
    	# code...
        $pengumumans=pengumumandesa::where('judulpengumuman', '=', $id)->first();
        return view("detailpengumuman",['pengumumans' => $pengumumans]);

    } 





     public function formuploadapbd($id)
    {
        return view("adminCRUD/uploadAPBD",['id'=>$id]);
    }

    public function uploadapbd(Request $request,$id)
    {


        
        switch ($id) {
        case 'apbd':
        apbd::truncate();
        if($request->hasfile('url_gambar')){
            
            foreach($request->file('url_gambar') as $image)
            {

                    $data = new apbd();
                    $data->tahun = $request->tahunapbd;
                    $image->storeAs('public',$image->getClientOriginalName());
                    $data->urlgambar = Storage::url($image->getClientOriginalName());
                    $data->save();
            }


            

              $var="data berhasil di simpan";
                     return redirect('admin')->with('key', $var);
        }
        
            break;
        case 'rkp':
        rkp::truncate();
        if($request->hasfile('url_gambar')){
            
            foreach($request->file('url_gambar') as $image)
            {

                    $data = new rkp();
                    $data->tahun = $request->tahunapbd;
                    $image->storeAs('public',$image->getClientOriginalName());
                    $data->urlgambar = Storage::url($image->getClientOriginalName());
                    $data->save();
            }


            return "berhasil";

              // $var="data berhasil di simpan";
              //        return redirect('admin')->with('key', $var);
        }
        
            break; 
        case 'rpjm':
        rpjm::truncate();
        if($request->hasfile('url_gambar')){
            
            foreach($request->file('url_gambar') as $image)
            {

                    $data = new rpjm();
                    $data->tahun = $request->tahunapbd;
                    $image->storeAs('public',$image->getClientOriginalName());
                    $data->urlgambar = Storage::url($image->getClientOriginalName());
                    $data->save();
            }


            return "berhasil";

              // $var="data berhasil di simpan";
              //        return redirect('admin')->with('key', $var);
        }
         
            break;

    }
        
    } 

    
    public function sharefb()
    {
        # code...
        // $beritas=berita::find($id);
        // return Share::load('http://www.example.com', 'My example')->twitter();
    }
}
