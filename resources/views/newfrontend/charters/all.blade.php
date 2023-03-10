@extends('newfrontend.main')
 @section('content')
 <div class="inner-content">
     <div class="product-page-section">
         <div class="col-12 col-md-10 mx-auto">
             <div class="product-section mb-5 pb-lg-3">
                 <div class="container">
                     <div class="d-md-flex justify-content-between align-items-center flex-wrap mb-3">
                         <div class="mb-3 mb-md-0">
                             <ol class="breadcrumb mb-1">
                                 <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">All Charters</li>
                             </ol>
                             <h2>
                         </div>
                         <div class="mb-3 mb-md-0">
                             <h2 style="font-size: 20px;">Charters</h2>
                             <div class="d-flex align-items-center justify-content-end">
                                 <label>Result per page</label>
                                 <select class="form-select ms-3" aria-label="Default select example" style="width: 75px;">
                                     <option selected></option>
                                     <option value="1">10</option>
                                     <option value="2">20</option>
                                     <option value="3">30</option>
                                 </select>
                             </div>
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
                     <div class="Luxaurolicious-slider ">
                  
                         <div class="row mb-3">
                         @foreach ($charters as $charter)
                        <div class="col-md-auto flex-fill col-12 my-2">
                                <a href="{{route('charter_detail',['id'=>$charter->id])}}">
                                 <div class="charter-item">
                                     <div class="img-holder">
                                         <img src="{{ uploaded_asset($charter->thumbnail_img)}}"  class="img-fluid" style="width:294px;height:294px">
                                     </div>
                                     <div class="txt-holder">
                                         <div class="d-flex justify-content-between mb-3">
                                             <div>
                                                 <strong class="title">{{ $charter->name }}</strong>
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
                                             <strong class="title">12</strong>
                                             <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                                         </div>
                                     </div>
                                 </div>
                                </a>
                        </div>
                        @endforeach
                             
                         </div>
                         <!-- <div class="row mb-3">
                             <div class="col-md-auto flex-fill col-12 my-2">
                                 <div class="product-item">
                                     <div class="img-holder">
                                         <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                             <div class="col-md-auto flex-fill col-12 my-2">
                                 <div class="product-item">
                                     <div class="img-holder">
                                         <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                             <div class="col-md-auto flex-fill col-12 my-2">
                                 <div class="product-item">
                                     <div class="img-holder">
                                         <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                             <div class="col-md-auto flex-fill col-12 my-2">
                                 <div class="product-item">
                                     <div class="img-holder">
                                         <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                             <div class="col-md-auto flex-fill col-12 my-2">
                                 <div class="product-item">
                                     <div class="img-holder">
                                         <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                         <div class="row mb-3">
                             <div class="col-md-auto flex-fill col-12 my-2">
                                 <div class="product-item">
                                     <div class="img-holder">
                                         <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                             <div class="col-md-auto flex-fill col-12 my-2">
                                 <div class="product-item">
                                     <div class="img-holder">
                                         <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                             <div class="col-md-auto flex-fill col-12 my-2">
                                 <div class="product-item">
                                     <div class="img-holder">
                                         <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                             <div class="col-md-auto flex-fill col-12 my-2">
                                 <div class="product-item">
                                     <div class="img-holder">
                                         <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                             <div class="col-md-auto flex-fill col-12 my-2">
                                 <div class="product-item">
                                     <div class="img-holder">
                                         <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                         <div class="row mb-3">
                             <div class="col-md-auto flex-fill col-12 my-2">
                                 <div class="product-item">
                                     <div class="img-holder">
                                         <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                             <div class="col-md-auto flex-fill col-12 my-2">
                                 <div class="product-item">
                                     <div class="img-holder">
                                         <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                             <div class="col-md-auto flex-fill col-12 my-2">
                                 <div class="product-item">
                                     <div class="img-holder">
                                         <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                             <div class="col-md-auto flex-fill col-12 my-2">
                                 <div class="product-item">
                                     <div class="img-holder">
                                         <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                             <div class="col-md-auto flex-fill col-12 my-2">
                                 <div class="product-item">
                                     <div class="img-holder">
                                         <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                         </div> -->
                     </div>
                     <nav aria-label="Page navigation example">
                         <ul class="pagination justify-content-center">
                             <li class="page-item">
                                 <a class="page-link" href="#" aria-label="Previous">
                                     <span aria-hidden="true">&laquo;</span>
                                 </a>
                             </li>
                             <li class="page-item"><a class="page-link" href="#">1</a></li>
                             <li class="page-item"><a class="page-link" href="#">2</a></li>
                             <li class="page-item"><a class="page-link" href="#">3</a></li>
                             <li class="page-item"><a class="page-link" href="#">4</a></li>
                             <li class="page-item"><a class="page-link" href="#">5</a></li>
                             <li class="page-item">
                                 <a class="page-link" href="#" aria-label="Next">
                                     <span aria-hidden="true">&raquo;</span>
                                 </a>
                             </li>
                         </ul>
                     </nav>
                     <div class="merchant-banners mb-4">
                         <div class="container-fluid p-5">
                             <div class="col-md-10 mx-auto">
                                 <div class="merchant-banner-text">
                                     <h3>(Banner ad for Luxauro, Goledvine, or BNMG)</h3>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="product-section mb-5 pb-lg-3">
                         <div class="container">
                             <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                                 <h2 class="m-0">Related items</h2>
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
                             <div class="slider Luxauro-fresh-slider product-detail-merchant">
                                 <div>
                                     <div class="product-item">
                                         <div class="img-holder">
                                             <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                                             <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                                             <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                                             <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                                             <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                                             <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                                             <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                                 <h2 class="m-0">You may also like</h2>
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
                             <div class="slider Luxauro-fresh-slider product-detail-merchant">
                                 <div>
                                     <div class="product-item">
                                         <div class="img-holder">
                                             <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                                             <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                                             <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                                             <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                                             <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                                             <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                                             <img src="{{ asset('frontend/images/product-img.png') }}" class="img-fluid">
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
                     <div class="merchant-banners mb-4">
                         <div class="container-fluid p-5">
                             <div class="col-md-10 mx-auto">
                                 <div class="merchant-banner-text">
                                     <h3>(Banner ad for Luxauro, Goledvine, or BNMG)</h3>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="street-img">
         <img src="{{asset('frontend/images/img1.png')}}" class="img-fluid">
     </div>
 </div>
 @endsection