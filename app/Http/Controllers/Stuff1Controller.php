<?php
 
namespace App\Http\Controllers;

use App\Stuff1;
use PDF;
use Illuminate\Http\Request;


class Stuff1Controller extends Controller
{
     public function home()
    {
        $stuff1['stuff1'] = \App\Stuff1::all();
        return view('home')->with($stuff1);
    }

    public function index()
    {
    	$stuff1['stuff1'] = \App\Stuff1::all();
    	return view('v1.index')->with($stuff1);
    }

    public function create()
    {
    	return view('v1.create');
    }

    public function create2()
    {
        return view('v1.create2');
    }
    public function save(Request $r)
    {
        // dd($r->file('image')->getClientOriginalExtension());
        $ext   = $r->image->getClientOriginalExtension();
        $fileName = str_random(10).'.'.$ext;
        // dd($fileName);
        $stuff1 = new Stuff1;

        $stuff1->id_barang = time();
        $stuff1->item = $r->input('item');
        $stuff1->count = $r->input('count');
        $stuff1->image = $fileName;

        $r->image->move(public_path('images'), $fileName);


    	  $stuff1->save();

    	return redirect(url('home'));
    }

    public function edit($id)
    	{
    		$stuff1['stuff1'] = Stuff1::find($id);
            // dd($stuff1);
    		return view('v1.edit')->with($stuff1);
    	}

    public function update(Request $r)
    	{
    		$stuff1 = Stuff1::find($r->input('id'));

    		$stuff1->id_barang = $r->input('id_barang');
    		$stuff1->item = $r->input('item');
    		$stuff1->count = $r->input('count');

    		$stuff1->save();

    		return redirect(url('/stuff'));

    	}
        public function tambahJumlahBarang(Request $r)
        {
            // dd($r->input());
            $stuff1 = Stuff1::find($r->input('id'));

            $stuff1->count += $r->input('jumlah_barang');

            $stuff1->save();

            return redirect(url('/stuff'));
        }

    public function delete($id)
    	{
    		$stuff1 = Stuff1::find($id);
    		$stuff1->delete();
    		return redirect(url('stuff'));
    	}

          public function readpdfbarang()
      {

         $stuff1['stuff1'] = \App\Stuff1::All();
         $pdf = PDF::loadview('v1.pdf',$stuff1);
         return $pdf->stream();
      }
}
