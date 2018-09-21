 @extends('layouts.master')

 <div class="row text-center">
      @foreach($stuff1 as $key)
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('images/'.$key->image)}}" alt="" >
            <div class="card-body">
              <h4 font color ="black" class="card-title">{{$key->item}}</h4>
              <p class="card-text">Jumlah Barang : {{$key->count}}</p>
            </div>
            <div class="card-footer">
              <a href="{{url('request/create/'.$key->id)}}" class="btn btn-primary">Pinjam</a>
            </div>
             <div class="card-footer">
             @if(Auth::user()->role == "1")
              <a href="{{url('mutasi/'.$key->id)}}" class="btn btn-primary">Mutasi</a>
            @endif
            </div>

          </div>

        </div>
      @endforeach
      </div>