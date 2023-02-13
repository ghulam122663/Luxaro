@extends('newfrontend.main')
@section('content')
<div id="wrapper">
    <div class="inner-content">
        <div class="banner mb-4">
            <div class="banner-slider">
                @if (get_setting('home_slider_images') != null)
                        <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true" data-dots="true" data-autoplay="true">
                            @php $slider_images = json_decode(get_setting('home_slider_images'), true);  @endphp
                            @foreach ($slider_images as $key => $value)
                                <div class="carousel-box">
                                    <a href="{{ json_decode(get_setting('home_slider_links'), true)[$key] }}">
                                        <img
                                            class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden"
                                            src="{{ uploaded_asset($slider_images[$key]) }}"
                                            alt="{{ env('APP_NAME')}} promo"
                                            {{-- @if(count($featured_categories) == 0)
                                            height="457"
                                            @else
                                            height="457"
                                            @endif --}}
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';"
                                        >
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endif
            </div>
        </div>
        <form class="page-form mx-auto mb-5" action="#">
            <div class="page-form-holder d-flex">
                <select class="form-control select-control border-0 rounded-0 flex-fill">
                    <option>All</option>
                    <option>All</option>
                    <option>All</option>
                </select>
                <div class="form-field d-flex flex-fill">
                    <input type="search" placeholder="Search..." class="border-0 bg-transparent flex-fill">
                    <button type="submit" class="bg-transparent border-0 flex-fill"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        <div class="product-section mb-4">
            <div class="container">
                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                    <h2 class="m-0">Luxauro Global + National</h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <form class="page-form flex-fill" action="#">
                            <div class="page-form-holder d-flex">
                                <label class="form-control rounded-0">Search Filter</label>
                                <div class="form-field d-flex flex-fill">
                                    <select class="flex-fill border-0 bg-transparent">
                                        <option></option>
                                        <option>Shop my nation luxauro</option>
                                        <option>Shipping only</option>
                                        <option>Sort by price</option>
                                        <option>Hide GMG professional</option>
                                        <option>Hide GoldEvine projects</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <u class="row text-center">
                    @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'desc')->get()->take(11) as $key => $category)
                    <div class="col-6 col-md-4 col-lg-2 mb-4">
                        @if (count($featured_categories) > 0)
                        @foreach ($featured_categories as $key => $category)
                        <div class="product-item">
                            <div class="img-holder">
                                <a href="{{ route('products.category', $category->slug) }}" class="d-block rounded bg-white p-2 text-reset shadow-sm">
                                    <img
                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                        data-src="{{ uploaded_asset($category->banner) }}"
                                        alt="{{ $category->getTranslation('name') }}"
                                        class="lazyload img-fluid"
                                        {{-- height="78" --}}
                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';"
                                    >
                                </a>
                            </div>
                            <div class="txt-holder">
                                <a href="{{ route('products.category', $category->slug) }}">
                                    <strong class="title">{{ $category->getTranslation('name') }}</strong></a>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="product-section mb-5 pb-lg-3">
            <div class="container">
                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                    <h2 class="m-0">My National Shops </h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <form class="page-form flex-fill" action="#">
                            <div class="page-form-holder d-flex">
                                <label class="form-control rounded-0">Search Filter</label>
                                <div class="form-field d-flex flex-fill">
                                    <select class="flex-fill border-0 bg-transparent">
                                        <option>All</option>
                                        <option>All</option>
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                    @php
    $best_selers = Cache::remember('best_selers', 86400, function () {
        return \App\Models\Shop::where('verification_status', 1)->orderBy('num_of_sale', 'desc')->take(20)->get();
    });   
@endphp
<!--@if (get_setting('vendor_system_activation') == 1)-->
                    <div class="slider national-shop-slider text-center">
                    <div>
                        @foreach ($best_selers as $key => $seller)
                        @if ($seller->user != null)
                        <div class="product-item">
                            
                            <div class="img-holder">
                                {{-- <a href="{{ route('shop.seller', $seller->slug) }}"> --}}
                                    <img
                                                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                data-src="@if ($seller->logo !== null) {{ uploaded_asset($seller->logo) }} @else {{ static_asset('assets/img/placeholder.jpg') }} @endif"
                                                alt="{{ $seller->name }}"
                                                class="img-fluid lazyload"
                                            >
                                </a>
                                {{-- <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            > --}}
                            </div>
                            <div class="txt-holder">
                                <strong class="title">
                                    <a href="{{ route('shop.visit', $seller->slug) }}" class="text-reset">{{ $seller->name }}</a>
                                </strong>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                <!--@endif-->
            </div>
            
        </div>
        <div class="product-section mb-5 pb-lg-3">
            <div class="container">
                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                    <h2 class="m-0">Gold Evine</h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <form class="page-form flex-fill" action="#">
                            <div class="page-form-holder d-flex">
                                <label class="form-control rounded-0">Search Filter</label>
                                <div class="form-field d-flex flex-fill">
                                    <select class="flex-fill border-0 bg-transparent">
                                        <option>All</option>
                                        <option>All</option>
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="slider gold-evine-slider">
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <strong class="title text-center d-block mb-2">Project Title</strong>
                                <div class="progress rounded-0 mb-1">
                                  <div class="progress-bar rounded-0" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>sX.XXX raised</span>
                                    <span>XX%</span>
                                </div>
                                <p class="mb-2"># donations</p>
                                <p class="m-0">Brief project description will go here... (10 words)</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <strong class="title text-center d-block mb-2">Project Title</strong>
                                <div class="progress rounded-0 mb-1">
                                  <div class="progress-bar rounded-0" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>sX.XXX raised</span>
                                    <span>XX%</span>
                                </div>
                                <p class="mb-2"># donations</p>
                                <p class="m-0">Brief project description will go here... (10 words)</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <strong class="title text-center d-block mb-2">Project Title</strong>
                                <div class="progress rounded-0 mb-1">
                                  <div class="progress-bar rounded-0" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>sX.XXX raised</span>
                                    <span>XX%</span>
                                </div>
                                <p class="mb-2"># donations</p>
                                <p class="m-0">Brief project description will go here... (10 words)</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <strong class="title text-center d-block mb-2">Project Title</strong>
                                <div class="progress rounded-0 mb-1">
                                  <div class="progress-bar rounded-0" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>sX.XXX raised</span>
                                    <span>XX%</span>
                                </div>
                                <p class="mb-2"># donations</p>
                                <p class="m-0">Brief project description will go here... (10 words)</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <strong class="title text-center d-block mb-2">Project Title</strong>
                                <div class="progress rounded-0 mb-1">
                                  <div class="progress-bar rounded-0" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>sX.XXX raised</span>
                                    <span>XX%</span>
                                </div>
                                <p class="mb-2"># donations</p>
                                <p class="m-0">Brief project description will go here... (10 words)</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <strong class="title text-center d-block mb-2">Project Title</strong>
                                <div class="progress rounded-0 mb-1">
                                  <div class="progress-bar rounded-0" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>sX.XXX raised</span>
                                    <span>XX%</span>
                                </div>
                                <p class="mb-2"># donations</p>
                                <p class="m-0">Brief project description will go here... (10 words)</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <strong class="title text-center d-block mb-2">Project Title</strong>
                                <div class="progress rounded-0 mb-1">
                                  <div class="progress-bar rounded-0" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>sX.XXX raised</span>
                                    <span>XX%</span>
                                </div>
                                <p class="mb-2"># donations</p>
                                <p class="m-0">Brief project description will go here... (10 words)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-section mb-5 pb-lg-3">
            <div class="container">
                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                    <h2 class="m-0">Gold Metal Guild</h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <form class="page-form flex-fill" action="#">
                            <div class="page-form-holder d-flex">
                                <label class="form-control rounded-0">Search Filter</label>
                                <div class="form-field d-flex flex-fill">
                                    <select class="flex-fill border-0 bg-transparent">
                                        <option>All</option>
                                        <option>All</option>
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="slider gold-metal-slider text-center">
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <strong class="title">Jake Rage</strong>
                                <span class="d-block">IT Expert</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <strong class="title">Jake Rage</strong>
                                <span class="d-block">IT Expert</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <strong class="title">Jake Rage</strong>
                                <span class="d-block">IT Expert</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <strong class="title">Jake Rage</strong>
                                <span class="d-block">IT Expert</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <strong class="title">Jake Rage</strong>
                                <span class="d-block">IT Expert</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <strong class="title">Jake Rage</strong>
                                <span class="d-block">IT Expert</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <strong class="title">Jake Rage</strong>
                                <span class="d-block">IT Expert</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-section mb-5 pb-lg-3">
            <div class="container">
                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                    <h2 class="m-0">My Local Luxauro</h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <form class="page-form flex-fill" action="#">
                            <div class="page-form-holder d-flex">
                                <label class="form-control rounded-0">Search Filter</label>
                                <div class="form-field d-flex flex-fill">
                                    <select class="flex-fill border-0 bg-transparent">
                                        <option>All</option>
                                        <option>All</option>
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="slider my-local-slider">
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-section mb-5 pb-lg-3">
            <div class="container">
                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                    <h2 class="m-0">Luxauro Charters</h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <form class="page-form flex-fill" action="#">
                            <div class="page-form-holder d-flex">
                                <label class="form-control rounded-0">Search Filter</label>
                                <div class="form-field d-flex flex-fill">
                                    <select class="flex-fill border-0 bg-transparent">
                                        <option>All</option>
                                        <option>All</option>
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="slider Charters-slider">
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-section mb-5 pb-lg-3">
            <div class="container">
                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                    <h2 class="m-0">Luxaurolicious</h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <form class="page-form flex-fill" action="#">
                            <div class="page-form-holder d-flex">
                                <label class="form-control rounded-0">Search Filter</label>
                                <div class="form-field d-flex flex-fill">
                                    <select class="flex-fill border-0 bg-transparent">
                                        <option>All</option>
                                        <option>All</option>
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="slider Luxaurolicious-slider">
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-section mb-5 pb-lg-3">
            <div class="container">
                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                    <h2 class="m-0">Luxauro Fresh</h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <form class="page-form flex-fill" action="#">
                            <div class="page-form-holder d-flex">
                                <label class="form-control rounded-0">Search Filter</label>
                                <div class="form-field d-flex flex-fill">
                                    <select class="flex-fill border-0 bg-transparent">
                                        <option>All</option>
                                        <option>All</option>
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="slider Luxauro-fresh-slider">
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-section mb-5 pb-lg-3">
            <div class="container">
                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                    <h2 class="m-0">Luxauro Library, Forum, & Publishing</h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <form class="page-form flex-fill" action="#">
                            <div class="page-form-holder d-flex">
                                <label class="form-control rounded-0">Search Filter</label>
                                <div class="form-field d-flex flex-fill">
                                    <select class="flex-fill border-0 bg-transparent">
                                        <option>All</option>
                                        <option>All</option>
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="slider Luxauro-library-slider">
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-section mb-5 pb-lg-3">
            <div class="container">
                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                    <h2 class="m-0">Luxauro Street, Vintage & Antique Market</h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <form class="page-form flex-fill" action="#">
                            <div class="page-form-holder d-flex">
                                <label class="form-control rounded-0">Search Filter</label>
                                <div class="form-field d-flex flex-fill">
                                    <select class="flex-fill border-0 bg-transparent">
                                        <option>All</option>
                                        <option>All</option>
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="slider Luxauro-street-slider">
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product-item">
                            <div class="img-holder">
                                <img
                class="img-fluid"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                            </div>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <strong class="title">Lorem Ipsum</strong>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <i class="fa fa-globe fa-1x mt-2"></i>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">$24.23</strong>
                                    <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $.post('{{ route('home.section.featured') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_featured').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_selling') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.home_categories') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_home_categories').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_sellers') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_sellers').html(data);
                AIZ.plugins.slickCarousel();
            });
        });
    </script>
@endsection