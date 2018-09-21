<?php 

namespace App\Http\Controllers;
use\App\Stuff1;
use\App\Stuff2;
use DB;
use PDF;
use Illuminate\Http\Request;

class Stuff2Controller extends Controller
{
    public function request($id)
    {
    	$barang['barang'] = Stuff1::find($id);

    	//dd($barang);
    	return view('v2.create2')->with($barang);

    }

    public function createRequest(Request $r)
    {
    	//$barang = Stuff1::find($r->item);
    	$barang = Stuff1::find($r->input('id_barang'));
    	$barang->count = $r->input('stock') - $r->input('jml_request');
    	$barang->save();
//dd($request);
    	$request = new Stuff2;
    	$request->id_barang = $r->input('id_barang');
    	$request->status = 'unreturned';
    	$request->count = $r->input('jml_request');
    	$request->requestor = $r->input('nama_requestor');
        $request->tglkembali = "";
    	$request->save();
//dd($request);
    	return redirect(url('request/datapeminjam'));

    } 
  
    public function report()
    {

    	$stuff2['stuff2'] = \App\Stuff2::all();
      // dd($stuff2['stuff2']);
    	return view('v2.report')->with($stuff2);
    }


    public function readpdf()
      {     
             $stuff2['stuff2'] = \App\Stuff2::all();
             $pdf = PDF::loadview('v2.pdf',$stuff2);
             return $pdf->stream();
      }



//     public function readpdf()
// {
//     $stuff2 = Stuff2::all();
//
//     $pdf = PDF::loadView('v2.pdf',compact('stuff2'));
//
//
//     return $pdf->stream();
// }





}
