@extends('newfrontend.main')
{{-- @section('meta_title'){{ $shop->meta_title }}@stop

@section('meta_description'){{ $shop->meta_description }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $shop->meta_title }}">
    <meta itemprop="description" content="{{ $shop->meta_description }}">
    <meta itemprop="image" content="{{ uploaded_asset($shop->logo) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="website">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ $shop->meta_title }}">
    <meta name="twitter:description" content="{{ $shop->meta_description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ uploaded_asset($shop->meta_img) }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $shop->meta_title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('shop.visit', $shop->slug) }}" />
    <meta property="og:image" content="{{ uploaded_asset($shop->logo) }}" />
    <meta property="og:description" content="{{ $shop->meta_description }}" />
    <meta property="og:site_name" content="{{ $shop->name }}" />
@endsection --}}
@section('content')
	<div id="wrapper">
        <div class="inner-content"> 
            <div class="merchant-section">
                <div class="container-fluid p-0">
                    <div class="banner-images">
                        <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" class="img-fluid h-100 w-100" style="object-fit: cover;">
                    </div>
                </div>
                </div>
                <div class="merchant-section-inner mb-3">
                    <div class="container">
                        <div class="section-details py-5 px-3">
                            <div class="d-md-flex justify-content-between align-items-center flex-wrap">
                                <div class="logo-details d-flex align-items-center mb-2">
                                    <div class="logo-section">
                                        <img
                                        height="100"
                                        class="lazyload img-fluid"
                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                        data-src="@if ($shop->logo !== null) {{ uploaded_asset($shop->logo) }} @else {{ static_asset('assets/img/placeholder.jpg') }} @endif"
                                        alt="{{ $shop->name }}">
                                    </div>
                                    <div class="logo-hold mx-3 ">
                                        <strong class="title d-inline-block text-white pb-2">[{{ $shop->name }}] 
                                            @if ($shop->verification_status == 1)
                                            <span class="ml-2"><i class="fa fa-check-circle" style="color:green"></i></span>
                                        @else
                                            <span class="ml-2"><i class="fa fa-times-circle" style="color:red"></i></span>
                                        @endif
                                        <i class="fa fa-globe px-2" aria-hidden="true"></i></strong> 
                                        <div class="details-review d-flex align-items-center text-white mb-2">
                                          {{-- @if ($shop->rating == 1) --}}
                                          <ul class="list-unstyled m-0 p-0 d-flex stars">
                                          <li class="me-1"><i class="fa fa-star"></i>{{ renderStarRating($shop->rating) }}</li>
                                        </ul>
                                          {{-- @else
                                          <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul> --}}
                                          {{-- @endif   --}}
                                        </div>
                                            
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <strong class="title d-inline-block mb-3 border-bottom text-white">Social Icons</strong>
                                    <ul class="list-unstyled m-0 p-0 d-flex align-items-center social-icons">
                                        @if ($shop->facebook != null)
                                            <li class="list-inline-item">
                                                <a href="{{ $shop->facebook }}" class="facebook" target="_blank">
                                                    <i class="fa fa-facebook-f"></i>
                                                </a>
                                            </li>
                                        @endif
                                        @if ($shop->instagram != null)
                                            <li class="list-inline-item">
                                                <a href="{{ $shop->instagram }}" class="instagram" target="_blank">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        @endif
                                        @if ($shop->twitter != null)
                                            <li class="list-inline-item">
                                                <a href="{{ $shop->twitter }}" class="twitter" target="_blank">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                        @endif
                                        @if ($shop->google != null)
                                            <li class="list-inline-item">
                                                <a href="{{ $shop->google }}" class="google-plus" target="_blank">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        @endif
                                        @if ($shop->youtube != null)
                                            <li class="list-inline-item">
                                                <a href="{{ $shop->youtube }}" class="youtube" target="_blank">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="merchant-section mb-4">
                       <div class="merchant-suite-section">
                            <div class="container">
                                <div class="about-section mb-4">
                                    <h2 class="mb-1">About Us</h2>
                                    <strong>Lorem, ipsum dolor sit amet placeat nostrum</strong>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque assumenda magni odio expedita, 
                                        tempore officiis culpa quia placeat nostrum illum quod delectus. 
                                        Expedita placeat labore quis reiciendis ad laudantium eos corrupti 
                                        numquam recusandae incidunt ipsum quod alias ullam nihil odio vel minima b
                                        eatae dignissimos, cupiditate repellendus reprehenderit saepe!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="banner mb-4">
                            @if ($shop->user->products != null)
                            <div class="banner-slider">
                                @foreach ($shop->user->products->where('published', 1)->where('approved', 1)->where('seller_featured', 1) as $key => $product)
                                <div>
                                
                                    <img
                class="img-fluid mb-5"
                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                data-src="{{ uploaded_asset($product->thumbnail_img) }}"
                alt="{{  $product->getTranslation('name')  }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
            >
                                    {{-- <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($slide) }}" alt="{{ $key }} offer" class="img-fluid mb-5"> --}}
                                        <div class="merchant-suite-section">
                                        <div class="container">
                                            <div class="owner-section mb-2 pb-lg-3">
                                                <h3 class="mb-1">{{  $product->getTranslation('name')  }}</h3>
                                                <div class="mw-100 overflow-hidden text-left aiz-editor-data">
                                                    <?php echo $product->getTranslation('description'); ?>
                                                </div>
                                                <button class="btn btn-primary ">View your other story</button>
                                                <a href="#" class="d-inline-block mx-2 ">Lorem Ipsum</a>  <a href="#" class="d-inline-block mx-1">Lorem Ipsum</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            @endif
                            <!--<h1>no product</h1>-->
                        </div>
                        <!-- <div class="merchant-suite-section">
                            <div class="container">
                                <div class="owner-section mb-5 pb-lg-3">
                                
                                    <h3 class="mb-1">[Featured Product Name]</h3>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque assumenda magni odio expedita, 
                                        tempore officiis culpa quia placeat nostrum illum
                                        numquam recusandae incidunt ipsum quod alias ullam nihil odio vel minima b
                                        eatae dignissimos, cupiditate repellendus reprehenderit saepe quod delectus. 
                                        Expedita placeat labore quis reiciendis ad laudantium eos corrupti 
                                        numquam recusandae incidunt ipsum quod alias ullam nihil odio vel minima b
                                        eatae dignissimos, cupiditate repellendus reprehenderit saepe!
                                    </p>
                                    <button class="btn btn-primary ">View your other story</button>
                                    <a href="#" class="d-inline-block mx-2 ">Lorem Ipsum</a>  <a href="#" class="d-inline-block mx-1">Lorem Ipsum</a>
                                </div>
                            </div>
                        </div> -->
                        <div class="product-section pb-lg-1">
                            <div class="container">
                                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                                    <h2 class="m-0">Recommended for you</h2>
                                    <div class="d-flex form-holder">
                                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                                        <form class="page-form flex-fill" action="#">
                                            <div class="page-form-holder d-flex">
                                                <label class="form-control rounded-0">Search Filter</label>
                                                <div class="form-field d-flex flex-fill">
                                                    <select class="flex-fill border-0 bg-transparent">
                                                        <option></option>
                                                        <option>All</option>
                                                        <option>All</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="slider Luxauro-fresh-slider product-detail-merchant">
                                    <div>
                                        <div class="product-item">
                                            <div class="img-holder">
                                                <img src="images/product-img.png" class="img-fluid">
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
                                                <img src="images/product-img.png" class="img-fluid">
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
                                                <img src="images/product-img.png" class="img-fluid">
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
                                                <img src="images/product-img.png" class="img-fluid">
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
                                                <img src="images/product-img.png" class="img-fluid">
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
                                                <img src="images/product-img.png" class="img-fluid">
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
                                                <img src="images/product-img.png" class="img-fluid">
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
                        <div class="merchant-suite-section">
                            <div class="container">
                                <div class="pagination justify-content-center">
                                    <nav aria-label="Page navigation example">
                                      <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">. . .</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><b>14</b></a></li>
                                         <li class="page-item"><a class="page-link" href="#">26</a></li>
                                         <li class="page-item"><a class="page-link" href="#">27</a></li>
                                      </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="merchant-suite-section">
                            <div class="container">
                                 <div class="banner-slider-3 product-section">
                                    <div><img src="images/charter-img.png" class="img-fluid w-100"></div>
                                    <div><img src="images/charter-img.png" class="img-fluid w-100"></div>
                                    <div><img src="images/charter-img.png" class="img-fluid w-100"></div>
                                    <div><img src="images/charter-img.png" class="img-fluid w-100"></div>
                                    <div><img src="images/charter-img.png" class="img-fluid w-100"></div>
                                    <div><img src="images/charter-img.png" class="img-fluid w-100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="owner-section mb-5 pb-lg-3">
                            <div class="container">
                                <h3 class="mb-1">[About Products]</h3>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque assumenda magni odio expedita, 
                                    tempore officiis culpa quia placeat nostrum illum
                                    numquam recusandae incidunt ipsum quod alias ullam nihil odio vel minima b
                                    eatae dignissimos, cupiditate repellendus reprehenderit saepe quod delectus. 
                                    Expedita placeat labore quis reiciendis ad laudantium eos corrupti 
                                    numquam recusandae incidunt ipsum quod alias ullam nihil odio vel minima b
                                    eatae dignissimos, cupiditate repellendus reprehenderit saepe!
                                </p>
                            </div>
                        </div>
                        <div class="product-section pb-lg-1">
                            <div class="container">
                                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                                    <h2 class="m-0">Highest rated from [Suite Name]</h2>
                                    <div class="d-flex form-holder">
                                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                                        <form class="page-form flex-fill" action="#">
                                            <div class="page-form-holder d-flex">
                                                <label class="form-control rounded-0">Search Filter</label>
                                                <div class="form-field d-flex flex-fill">
                                                    <select class="flex-fill border-0 bg-transparent">
                                                        <option></option>
                                                        <option>All</option>
                                                        <option>All</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="slider Luxauro-fresh-slider product-detail-merchant">
                                    <div>
                                        <div class="product-item">
                                            <div class="img-holder">
                                                <img src="images/product-img.png" class="img-fluid">
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
                                                <img src="images/product-img.png" class="img-fluid">
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
                                                <img src="images/product-img.png" class="img-fluid">
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
                                                <img src="images/product-img.png" class="img-fluid">
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
                                                <img src="images/product-img.png" class="img-fluid">
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
                                                <img src="images/product-img.png" class="img-fluid">
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
                                                <img src="images/product-img.png" class="img-fluid">
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
                        <div class="merchant-suite-section">
                            <div class="container">
                                <div class="pagination justify-content-center">
                                    <nav aria-label="Page navigation example">
                                      <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">. . .</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><b>14</b></a></li>
                                         <li class="page-item"><a class="page-link" href="#">26</a></li>
                                         <li class="page-item"><a class="page-link" href="#">27</a></li>
                                      </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>
               
       
            <div class="street-img">
			    <img src="images/img1.png" class="img-fluid">
			</div>
        </div>
    </div>
    @endsection