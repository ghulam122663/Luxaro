@extends('newfrontend.main')
@section('content')
<div class="charter-detail-page mt-4 pt-md-5 mt-md-5 mb-3 mb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-slider">
                    <div>
                        <img src="{{ uploaded_asset($product_detail->thumbnail_img)}}" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ uploaded_asset($product_detail->thumbnail_img)}}" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ uploaded_asset($product_detail->thumbnail_img)}}" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ uploaded_asset($product_detail->thumbnail_img)}}" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ uploaded_asset($product_detail->thumbnail_img)}}" class="img-fluid">
                    </div>
                    <div>
                        <img src="images/banner.png" class="img-fluid">
                    </div>
                </div>
                <div class="detail-nav-slider">
                    <div>
                        <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
                    </div>
                    <div>
                        <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="charter-detail-desc">
                    <h2>{{ $product_detail->name }}</h2>
                    <div class="details-review d-flex align-items-center">
                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                            <li class="me-1"><i class="fa fa-star"></i></li>
                            <li class="me-1"><i class="fa fa-star"></i></li>
                            <li class="me-1"><i class="fa fa-star"></i></li>
                            <li class="me-1"><i class="fa fa-star"></i></li>
                            <li class="me-1"><i class="fa fa-star"></i></li>
                        </ul>
                        <span class="small">4.2 (Based on 16 Reviews)</span>
                    </div>
                    <p class="price my-2">{{ $product_detail->unit_price }}$</p>
                    <p>{{ strip_tags($product_detail->description) }}</p>        
                </div>
            </div>
        </div>
    </div>
</div>

@endsection