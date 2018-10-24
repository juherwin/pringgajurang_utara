<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jmlpend;
use App\statagamapend;
use App\statetnispend;
use App\statpendidikanpend;
use App\statpekerjaanpend;

class profildesacontroller extends Controller
{
    //
    public function formaddjmlpend()
    {
    	# code...
        return view("adminCRUD/addjmlpend");

    }


    public function formaddstatpendidikanpend()
    {
    	# code...
        return view("adminCRUD/addstatpendidikanpend");
    }

    public function formaddstatpekerjaanpend()
    {
    	# code...
        return view("adminCRUD/addstatpekerjaanpend");
    }

    public function formaddstatetnispend()
    {
    	# code...
        return view("adminCRUD/addstatetnispend");
    }

    public function formaddstatagamapend()
    {
    	# code...
        return view("adminCRUD/addstatagamapend");
    }

    public function formeditjmlpend($id)
    {
    	# code...
        $jmlpends=jmlpend::find($id);

        return view("adminCRUD/editjmlpend",['jmlpends' => $jmlpends]);
    }

    public function formeditstatpendidikanpend($id)
    {
    	# code...
        $pendidikans=statpendidikanpend::find($id);

        return view("adminCRUD/editstatpendidikanpend",['pendidikans' => $pendidikans]);
    }

    public function formeditstatpekerjaanpend($id)
    {
    	# code...
        $pekerjaans=statpekerjaanpend::find($id);

        return view("adminCRUD/editstatpekerjaanpend",['pekerjaans' => $pekerjaans]);
    }

    public function formeditstatetnispend($id)
    {
    	# code...
        $etniss=statetnispend::find($id);

        return view("adminCRUD/editstatetnispend",['etniss' => $etniss]);
    }

    public function formeditstatagamapend($id)
    {
    	# code...
        $agamas=statagamapend::find($id);

        return view("adminCRUD/editstatagamapend",['agamas' => $agamas]);
    }

    public function deletejmlpend($id)
    {
    	# code...
        jmlpend::where('id',$id)->delete();
        $var="Data berhasil di hapus";
        return redirect('admin#tabelberita')->with('key', $var);
    }

    public function deletestatpendidikanpend($id)
    {
    	# code...
        statpendidikanpend::where('id',$id)->delete();
        $var="Data berhasil di hapus";
        return redirect('admin#tabelstatpendidikanpend')->with('key', $var);
    }

    public function deletestatagamapend($id)
    {
    	# code...
        statagamapend::where('id',$id)->delete();
        $var="Data berhasil di hapus";
        return redirect('admin#tabelstatagamapend')->with('key', $var);
    }

    public function deletestatpekerjaanpend($id)
    {
    	# code...
        statpekerjaanpend::where('id',$id)->delete();
        $var="Data berhasil di hapus";
        return redirect('admin#tabelstatpekerjaanpend')->with('key', $var);
    }

    public function deletestatetnispend($id)
    {
    	# code...
        statetnispend::where('id',$id)->delete();
        $var="Data berhasil di hapus";
        return redirect('admin#tabelstatetnispend')->with('key', $var);
    }

    public function addjmlpend(Request $request)
    {
    	# code...
            $data = new jmlpend();
            $data->wilayah = $request->wilayah;
            $data->jumlah = $request->jumlah;
            $data->save();

            $var="data berhasil di simpan";
            return redirect('admin#tabelberita')->with('key', $var);
    }

    public function addstatpendidikanpend(Request $request)
    {
    	# code...
            $data = new statpendidikanpend();
            $data->pendidikan = $request->pendidikan;
            $data->pria = $request->pria;
            $data->wanita = $request->wanita;
            $data->jumlah = $request->pria + $request->wanita ;
            $data->save();

            $var="data berhasil di simpan";
            return redirect('admin#tabelstatpendidikanpend')->with('key', $var);
    }

    public function addstatagamapend(Request $request)
    {
    	# code...
            $data = new statagamapend();
            $data->agama = $request->agama;
            $data->pria = $request->pria;
            $data->wanita = $request->wanita;
            $data->jumlah = $request->pria + $request->wanita ;
            $data->save();

            $var="data berhasil di simpan";
            return redirect('admin#tabelstatagamapend')->with('key', $var);

    }

    public function addstatpekerjaanpend(Request $request)
    {
    	# code...
            $data = new statpekerjaanpend();
            $data->pekerjaan = $request->pekerjaan;
            $data->pria = $request->pria;
            $data->wanita = $request->wanita;
            $data->jumlah = $request->pria + $request->wanita ;
            $data->save();

            $var="data berhasil di simpan";
            return redirect('admin#tabelstatpekerjaanpend')->with('key', $var);

    }

    public function addstatetnispend(Request $request)
    {
    	# code...
            $data = new statetnispend();
            $data->etnis = $request->etnis;
            $data->pria = $request->pria;
            $data->wanita = $request->wanita;
            $data->jumlah = $request->pria + $request->wanita ;
            $data->save();

            $var="data berhasil di simpan";
            return redirect('admin#tabelstatetnispend')->with('key', $var);

    }

    public function editjmlpend(Request $request,$id)
    {
    	# code...
            jmlpend::find($id)->update([
            'wilayah' => $request->wilayah,
            'jumlah' => $request->jumlah
         ]);    

            $var="Data berhasil di ubah";
            return redirect('admin#tabelberita')->with('key', $var);
    }

    public function editstatpendidikanpend(Request $request,$id)
    {
    	# code...
        statpendidikanpend::find($id)->update([
            'pendidikan' => $request->pendidikan,
            'pria' => $request->pria,
            'wanita' => $request->wanita,
            'jumlah' => $request->pria + $request->wanita 
         ]);    

            $var="Data berhasil di ubah";
            return redirect('admin#tabelstatpendidikanpend')->with('key', $var);
    }

    public function editstatagamapend(Request $request,$id)
    {
    	# code...
        statagamapend::find($id)->update([
            'agama' => $request->agama,
            'pria' => $request->pria,
            'wanita' => $request->wanita,
            'jumlah' => $request->pria + $request->wanita 
         ]);    

            $var="Data berhasil di ubah";
            return redirect('admin#tabelstatagamapend')->with('key', $var);
    }

    public function editstatpekerjaanpend(Request $request,$id)
    {
    	# code...
        statpekerjaanpend::find($id)->update([
            'pekerjaan' => $request->pekerjaan,
            'pria' => $request->pria,
            'wanita' => $request->wanita,
            'jumlah' => $request->pria + $request->wanita 
         ]);    

            $var="Data berhasil di ubah";
            return redirect('admin#tabelstatpekerjaanpend')->with('key', $var);
    }

    public function editstatetnispend(Request $request,$id)
    {
    	# code...
        statetnispend::find($id)->update([
            'etnis' => $request->etnis,
            'pria' => $request->pria,
            'wanita' => $request->wanita,
            'jumlah' => $request->pria + $request->wanita 
         ]);    

            $var="Data berhasil di ubah";
            return redirect('admin#tabelstatetnispend')->with('key', $var);
    }

    

}
