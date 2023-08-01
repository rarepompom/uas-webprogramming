@extends('template.layoutMaster')


<div id="container">
    <div class="landing">
        <div class="header-rent"></div>
        <div class="header-contentrent">
            <h1 class="fw-bold tulisan">Are you looking for a</h1>
            <h1><span class="animation-rent fw-bold tulisan"></span></h1>
        </div>
    </div>
</div>

@section('content')
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible d-flex justify-content-center col-lg" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('failed'))
            <div class="alert alert-danger alert-dismissible d-flex justify-content-center col-lg" role="alert">
                {{ session('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="p-5">

        </div>

        <div class="row mb-4  d-flex justify-content-between align-items-center">
            <div class="col-10">
                <h3 class="fw-bold">@lang('wedding.home.subtitle') </h3>
            </div>
            <div class="col-1">
                <button class="bg-light rounded-4 border border-1 hover-shadow me-3 dropdown" style="width: 3.5rem; height: 3.5rem">
                    <!-- filter -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="grey" class="bi bi-funnel-fill dropdown-toggle"
                        viewBox="0 -7 16 32" data-bs-toggle="dropdown" aria-expanded="false">
                        <path
                            d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z" />
                    </svg>
                    <ul class="dropdown-menu ">
                        <li><a href="" class="dropdown-item">All</a></li>
                        <li><a href="" class="dropdown-item p-2">Jakarta</a></li>
                        <li><a href="" class="dropdown-item p-2">Singapore</a></li>
                        <li><a href="" class="dropdown-item p-2">Tangerang</a></li>
                    </ul>
                </button>
            </div>
        </div>

        <div id="filter">
            <div class="row d-flex justify-content-space-between">
                    @foreach ($venues as $venue)
                    <div class="col-lg-4">
                        <div class="card mb-5 rounded rounded-4">
                            <img src="https://source.unsplash.com/450x250/?{{ $venue->regency->name }}" class="card-img-top" alt="..." style="radius:15px; border-radius: 15px">
                            <div class="card-body">
                            <h5 class="card-title">{{ $venue->name }}</h5>
                            <p class="card-text">{{ $venue->description }}</p>

                            <div class="venue-loc d-flex ">
                                <i class="bi bi-geo-alt-fill mt-1" style="color: black"></i>
                                <p class="ms-2">Jl. {{ $venue->location }}, {{ $venue->regency->name }}</p>
                            </div>

                            <div class="venue-loc d-flex ">
                                <p class="fw-bold ms-1" style="color: black">$</p>
                                <p class="ms-2">{{ $venue->price }}</p>
                            </div>

                            <a href="{{route('booking', $venue->id)}}" class="btn text-white p-2">Book Now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

        </div>



        <div class="div" style="min-height: 100px"></div>

    </div>

    <style>
    #container{
    width: 100%;
    height: 100vh;
    margin: 0;
    padding: 0;
    }

    .landing{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .header-rent{
        z-index: -1;
        width: 100%;
        height: 100vh;
        /* background-image: url('https://images.unsplash.com/photo-1516208183566-04a314b87aa2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80'); */
        /* background-image: url('https://images.unsplash.com/photo-1640654438876-9e4d80a44e84?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80'); */
        /* background-image: url('https://images.unsplash.com/photo-1483042673779-b26883c2100f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80'); */
        background-image: url('https://images.unsplash.com/photo-1460978812857-470ed1c77af0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1895&q=80');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top;
        display: flex;
        align-items: center;
    }

    .header-contentrent{
        position: absolute;
        font-family: 'Forum';
        margin-right: 40rem;
        /* margin-left: 40rem; */
        color: white;

    }

    .header-contentrent .tulisan {
        font-size: 3.5rem;
    }

    .rent-body{
        overflow-x: hidden;
        overflow-y: scroll;
    }

    .animation-rent:before{
        content: '';
        animation: animate infinite 8s;
    }

    @keyframes animate{
        0%{
            content: 'wedding venue?';
        }
        20%{
            content: 'wedding dress?';
        }
        40%{
            content: 'wedding planner?';
        }
        60%{
            content: 'wedding venue?';
        }
        80%{
            content: 'wedding dress?';
        }
        100%{
            content: 'wedding planner?';
        }
    }


       .venue{
            border: solid 2px black;
            border-radius: 10px
        }

        .btn{
            background: black;
        }

        .btn:hover{
            background-color: #aaaaaa;
            color: white;
        }

    </style>
    <script src="/js/filter.js"></script>
@endsection
