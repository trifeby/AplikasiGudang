<nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{url('home')}}">LARASTUFF</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
             @if(Auth::user()->role == "1")
              <a class="nav-link" href="{{url('stuff/create')}}">Add
                <span class="sr-only">(current)</span>
              </a>
              @endif
            </li>
            <li class="nav-item">
              @if(Auth::user()->role == "1")
              <a class="nav-link" href="{{url('stuff')}}">Edit</a>
              @endif
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('request/datapeminjam')}}">Data Peminjam</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{('/reportmutasi')}}">Mutasi</a>
            </li>
               
              <ul class="nav navbar-nav navbar-right">
                    @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                    @else        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    {{ Auth::user()->name }} <span class="caret"></span>

                              </a>
                              <ul class="dropdown-menu">

                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Log out</a>
                                <form id="logout-form" action="{{route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>    

                                </li>
                              </ul>
                        </li>
                        @endguest
            <li class="separator hidden-lg"></li>
                    </ul>
 
          </ul>
        </div>
      </div>
    </nav>