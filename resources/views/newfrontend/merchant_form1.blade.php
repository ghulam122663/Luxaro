@extends('newfrontend.main')
@section('content')
            <div class="section-product-charter merchant-account-1">
                <div class="container">
                    <div class="row col-lg-10 mx-auto gx-5">
                        <div class="col-12 col-md-5 gx-0 gx-md-5 px-md-5">
                           @include('newfrontend.sidepanel')
                        </div>
                        <div class="col-12 col-md-7 gx-0 gx-md-1 gx-lg-5 px-lg-5">
                           <div class="my-account-section">
                                <h2>Setup Your Merchant Account (1/2)</h2>
                                <div class="mb-2"><strong>Business Information</strong></div>
                                <form action="#">
                                    <div class="mb-3">
                                        <label for="" class="form-label mb-0">Business Name</label>
                                        <input type="text" class="form-control">
                                        <div class="pincel"></div>
                                      </div>
                                      <div class="mb-3">
                                        <label class="uploadFile border rounded">
                                            <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                            <span class="filename">Upload Business Logo</span>
                                            <input type="file" class="inputfile form-control" name="file" >
                                        </label>
                                      </div>
                                      <div class="mb-3">
                                        <label class="uploadFile border rounded">
                                            <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                            <span class="filename">Upload Your Store Header</span>
                                            <input type="file" class="inputfile form-control" name="file" >
                                          </label>
                                      </div>
                                      <div class="mb-3">
                                            <label for="" class="form-label mb-0">Business Adress</label>
                                            <input type="text" class="form-control">
                                            <div class="pincel"></div>
                                      </div>
                                      <div class="row gx-2 mb-0 mb-md-3">
                                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                                            <label for="" class="form-label mb-0">City</label>
                                            <input type="text" class="form-control">
                                            <div class="pincel"></div>
                                        </div>
                                        <div class="col-12 col-md-3 mb-3 mb-md-0">
                                            <label for="">State</label>
											<select class="form-select">
												<option></option>
												<option>1</option>
												<option>2</option>
											</select>
                                        </div>
                                        <div class="col-12 col-md-3 mb-3 mb-md-0">
                                            <label for="" class="form-label mb-0">Zip Code</label>
                                            <input type="text" class="form-control">
                                            <div class="pincel"></div>
                                        </div>
                                      </div>
                                      <div class="mb-3">
                                            <label for="">Country</label>
                                            <select class="form-select">
                                                <option></option>
                                                <option>Country 1</option>
                                                <option>Country 2</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label mb-0">Business Email</label>
                                            <input type="email" class="form-control">
                                            <div class="pincel"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label mb-0">Business Website</label>
                                            <input type="text" class="form-control">
                                            <div class="pincel"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label mb-0">Business Phone</label>
                                            <input type="text" class="form-control" placeholder="xxx-xxx-xxxx">
                                            <div class="pincel"></div>
                                        </div>
                                        <div class="row gx-3 mb-0 mb-md-3">
                                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                                <label for="" class="form-label mb-0">EIN</label>
                                                <input type="text" class="form-control" placeholder="xx-xxxxxxx">
                                                <div class="pincel"></div>
                                            </div>
                                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                                <label for="" class="form-label mb-0">Bank Account Number</label>
                                                <input type="text" class="form-control">
                                                <div class="pincel"></div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label mb-0">Credit Card Number</label>
                                            <input type="text" class="form-control" >
                                            <div class="pincel"></div>
                                        </div>
                                        <button class="btn btn-primary text-uppercase">Cancel</button>
                                        <button class="btn btn-primary text-uppercase"><a href="{{route('merchant-form2')}}">Next</a></button>
                                </form>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection