<?php

namespace App\Http\Controllers;

use\App\Mutasi;
use App\Stuff1;
use \App\Stuff2;
use DB;
use PDF;
use Illuminate\Http\Request;

class MutasiController extends Controller
{
    
  public function mutasi($id)
    {
        $barang['barang'] = Stuff1::find($id);
        return view('v2.mutasi')->with($barang);

    }
     public function mutasikeluar(Request $r)
    {
        $barang = Stuff1::find($r->input('id_barang'));
        $barang->count -= $r->jml_request;
        $barang->save();

        $mutasi = new Mutasi;
        $mutasi->id_barang = $r->id_barang;
        $mutasi->count = $r->jml_request;
        $mutasi->penerima = $r->nama_penerima;
        $mutasi->keterangan = $r->keterangan;
        $mutasi->save();
        return redirect('/reportmutasi');

    }

    public function reportmutasi()
    {
    	$mutasi['mutasi'] = \App\Mutasi::select(DB::raw("mutasis.count as diambil,stuff1s.count as sisa,stuff1s.item,mutasis.penerima,mutasis.keterangan"))->join('stuff1s','mutasis.id_barang','=','stuff1s.id')->get();
      // dd($stuff2['stuff2']);
    	return view('v2.reportmutasi')->with($mutasi);
    }

    public function readpdfmutasi()
      {
         $mutasi['mutasi'] = \App\Mutasi::select(DB::raw("mutasis.count,stuff1s.item,mutasis.penerima,mutasis.keterangan,stuff1s.count as sisa,mutasis.penerima,mutasis.keterangan"))->join('stuff1s','mutasis.id_barang','=','stuff1s.id')->get();
         $pdf = PDF::loadview('v2.pdfmutasi',$mutasi);
         return $pdf->stream();
      }

}
