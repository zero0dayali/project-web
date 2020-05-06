        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark-gray" style="padding-top:40px;" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="logo" src="/img/ASC1.png" alt="" srcset="">
                    </a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Keg.Pembelajaran</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#dataGuru">Data Guru</a></li>
                         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        @guest                                                            
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user" style="font-size:20px"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                         @if (Route::has('register'))
                        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                          @endif
                          @else
                              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                    </li>
                    </ul>
                </div>
            </div>
        </nav>