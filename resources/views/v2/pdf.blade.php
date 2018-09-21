<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Cetak Riwayat</title>
        <body>
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
            </style>

            <div style="font-family:Arial; font-size:12px;">
                <center><h2>Laporan Riwayat Pengambilan Barang</h2></center>
            </div>
            <br>
            <table class="tg">
              <tr>
              <th class="tg-3wr7">Tanggal Pinjam<br></th>
                <th class="tg-3wr7">Tanggal Balik<br></th>
                <th class="tg-3wr7">Nama Barang<br></th>
                <th class="tg-3wr7">Jumlah Barang<br></th>
                 <th class="tg-3wr7">Nama Peminjam<br></th>
                 <th class="tg-3wr7">Status<br></th>
                
              </tr>
              @foreach ($stuff2 as $key)
              <tr>
              <td class="tg-rv4w" width="20%">{{$key->Stuff1->created_at}}</td>
              <td class="tg-rv4w" width="20%">{{$key->tglkembali}}</td>
                <td class="tg-rv4w" width="20%">{{$key->Stuff1->item}}</td>
                <td class="tg-rv4w" width="10%">{{ $key->count}}</td>
                <td class="tg-rv4w" width="20%">{{ $key->requestor}}</td>
                <td class="tg-rv4w" width="10%">{{ $key->status}}</td>
   
              </tr>
              @endforeach
            </table>
        </body>
    </head>
</html>
