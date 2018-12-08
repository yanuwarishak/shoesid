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

                @guest
                <li class="nav-item">
                     <a class="nav-link" href="/cart">Cart</a>
                </li>

                    @elseif(Auth::user()-> type == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="/order">Orders</a>
                    </li>

                    @elseif(Auth::user()-> type == 'default')
                    <li class="nav-item">
                        <a class="nav-link" href="/cart">Cart</a>
                    </li>
                
                @endguest

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>  
                </li>

                    @elseif(Auth::user()-> type == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>
                    @elseif(Auth::user()-> type == 'default')
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    
                @endguest


                
              </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
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
                            @if(Auth::user()-> type == 'default')
                            <a class="dropdown-item" href="/cart">Your Cart</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endif

                            @if(Auth::user()-> type == 'admin')
                            <a class="dropdown-item" href="/order">Your Orders</a>
                            <a class="dropdown-item" href="/dashboard">Your Product</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endif
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>