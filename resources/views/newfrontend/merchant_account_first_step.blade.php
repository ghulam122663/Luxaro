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
                    <form action="{{route('merchant_account_second_step')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label mb-0">Business Name</label>
                            <input type="text" name="business_name" class="form-control" required>
                            <div class="pincel"></div>
                        </div>
                        <div class="mb-3">
                            <label class="uploadFile border rounded">
                                <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                <span class="filename">Upload Business Logo</span>
                                <input type="file" name="business_logo" class="inputfile form-control" name="file" required>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="uploadFile border rounded">
                                <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                <span class="filename">Upload Your Store Header</span>
                                <input type="file" class="inputfile form-control" name="store_header">
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label mb-0">Business Adress</label>
                            <input type="text" name="business_address" class="form-control" required>
                            <div class="pincel"></div>
                        </div>
                        <div class="row gx-2 mb-0 mb-md-3">
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <label for="" class="form-label mb-0">City</label>
                                <input type="text" name="city" class="form-control" required>
                                <div class="pincel"></div>
                            </div>
                            <div class="col-12 col-md-3 mb-3 mb-md-0">
                                <label for="">State</label>
                                <select class="form-select" name="state">
                                    <option></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3 mb-3 mb-md-0">
                                <label for="" class="form-label mb-0">Zip Code</label>
                                <input type="text" name="zip_code" class="form-control" required>
                                <div class="pincel"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="">Country</label>
                            <select class="form-select" name="country">
                                <option></option>
                                <option value="1">Country 1</option>
                                <option value="2">Country 2</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label mb-0">Business Email</label>
                            <input type="email" name="business_email" class="form-control" required>
                            <div class="pincel"></div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label mb-0">Business Website</label>
                            <input type="text" name="business_website" class="form-control" required>
                            <div class="pincel"></div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label mb-0">Business Phone</label>
                            <input type="text" name="business_phone" class="form-control" placeholder="xxx-xxx-xxxx" required>
                            <div class="pincel"></div>
                        </div>
                        <div class="row gx-3 mb-0 mb-md-3">
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <label for="" class="form-label mb-0">EIN</label>
                                <input type="text" class="form-control" name="ein" placeholder="xx-xxxxxxx" required>
                                <div class="pincel"></div>
                            </div>
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <label for="" class="form-label mb-0">Bank Account Number</label>
                                <input type="text" name="bank_account_number" class="form-control" required>
                                <div class="pincel"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label mb-0">Credit Card Number</label>
                            <input type="text" name="credit_card_number" class="form-control" required>
                            <div class="pincel"></div>
                        </div>
                        <button class="btn btn-primary text-uppercase">Cancel</button>
                        <button class="btn btn-primary text-uppercase" type="submit">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection