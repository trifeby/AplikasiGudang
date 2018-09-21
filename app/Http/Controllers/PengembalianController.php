<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Stuff2; 
use \App\Stuff1;
use \App\Pengembalian; 

class PengembalianController extends Controller
{
	public function create($id)
	{
        $peminjaman = Stuff2::find($id);
        $peminjaman->status = 'returned';
        $peminjaman->tglkembali = date('Y-m-d H:i:s');
        $barang = Stuff1::find($peminjaman->id_barang);
        $barang->count += $peminjaman->count;
        $barang->save();
        $peminjaman->save();
		return redirect(url('request/datapeminjam'));
	}

    // public function save($id)
    // {
    //     $data['pengembalian'] = Pengembalian::find($id);
    //     return view('pengembalian.edit')->with($data);
    // }
}
