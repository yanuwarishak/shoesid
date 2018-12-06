<nav class="navbar navbar-expand-md navbar-inverse navbar-laravel mb-4 fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            SHOES.ID
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cart">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>  
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Become Seller</a>  
                </li>
              </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item text-center" style="padding: 0px 10px"><a href="shop-checkout.html" class="nav-link"><i class="fa fa-shopping-cart fa-2x""></i></a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            {{-- @if(!Auth::guest())
                                @if(Auth::user()-> id == $post -> user_id)
                                <a href="/posts/{{$post -> id}}/edit" class="btn btn-warning">Edit</a>
                                {!!Form::open (['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right' ])!!} 
                                    {{Form::hidden ('_method','DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                                @endif
                            @endif --}}
                            <a class="dropdown-item" href="/cart">Your Cart</a>
                            <a class="dropdown-item" href="/dashboard">Dashboard</a>
                            <a class="dropdown-item" href="/dashboard">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>