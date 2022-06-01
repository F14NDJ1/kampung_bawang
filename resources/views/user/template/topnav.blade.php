<style>
    .container-clock {
        width: 195px;
        height: 50px;
        margin: 0 auto;
        overflow: hidden;
    }

    .clock {
        width: 198px;
        height: 70px;
        margin: 0 auto;
        /* padding: 30px; */
        /* border: 1px solid #333; */
        color: #fff;
    }

    #Date {
        font-family: 'BebasNeueRegular', Arial, Helvetica, sans-serif;
        font-size: 1em;
        text-align: left;
        text-shadow: 0 0 5px #00c6ff;
    }

    ul.clock-ul {
        width: 201px;
        margin: 0 auto;
        padding: 0px;
        list-style: none;
        text-align: left;
    }

    ul.clock-ul li {
        display: inline;
        font-size: 1em;
        text-align: center;
        font-family: 'BebasNeueRegular', Arial, Helvetica, sans-serif;
        text-shadow: 0 0 5px #00c6ff;
    }

    #point {
        position: relative;
        -moz-animation: mymove 1s ease infinite;
        -webkit-animation: mymove 1s ease infinite;
        padding-left: 10px;
        padding-right: 10px;
    }

    @-webkit-keyframes mymove {
        0% {
            opacity: 1.0;
            text-shadow: 0 0 20px #00c6ff;
        }

        50% {
            opacity: 0;
            text-shadow: none;
        }

        100% {
            opacity: 1.0;
            text-shadow: 0 0 20px #00c6ff;
        }
    }

    @-moz-keyframes mymove {
        0% {
            opacity: 1.0;
            text-shadow: 0 0 20px #00c6ff;
        }

        50% {
            opacity: 0;
            text-shadow: none;
        }

        100% {
            opacity: 1.0;
            text-shadow: 0 0 20px #00c6ff;
        }
    }

</style>

<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Search form -->
            <form class="navbar-search form-inline mr-sm-3" id="navbar-search-main">
                <div class="form-group mb-0">
                    <div class=" input-group-merge">
                        {{-- <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input class="form-control" placeholder="Search" type="text"> --}}
                        <section class="container-clock">
                            <div class="clock">
                                <div id="Date">Thursday 6 August 2020</div>
                                <ul class="clock-ul">
                                    <li id="hours">00</li>
                                    <li id="point">:</li>
                                    <li id="min">00</li>
                                    <li id="point">:</li>
                                    <li id="sec">00</li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
                    aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </form>
            @auth
                <ul class="navbar-nav align-items-center ml-md-auto">
                    <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                            data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <i class="ni ni-single-02"></i>
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="/user/edit_profile" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            {{-- <a href="#!" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a> --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                                                                                                                                                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }} <i class="ni ni-user-run"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</nav>
