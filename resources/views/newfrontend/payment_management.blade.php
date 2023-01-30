@extends('newfrontend.main')
@section('content')
<div class="inner-content">
    <div class="section-product-charter">
        <div class="container">
            <div class="row col-lg-9 mx-auto gx-5">
                <div class="col-12 col-md-4 gx-0 gx-md-5">
                    @include('newfrontend.sidepanel')
                </div>
                <div class="col-12 col-md-8 gx-0 gx-md-5 px-md-5">
                    <div class="payment-management-section">
                        <h2 class="mb-4" style="font-size: 22px; font-weight: 600;">Payment Management </h2>
                        <div class="payment-card">
                            <div class="payment-title">Cards</div>
                            <div class="payment-card-inside d-flex justify-content-between align-items-baseline border rounded p-1 mb-1">
                                <div>
                                    <p class="mb-0">Visa (Ending in 1234)</p>
                                </div>
                                <div>
                                    <p class="mb-0">Expires: 01/23</p>
                                </div>
                                <div class="me-3 px-1">
                                    <p class="mb-0">Update <i class="fa fa-angle-right ms-1" aria-hidden="true"></i></p>
                                    <p class="mb-0">Delete <i class="fa fa-angle-right ms-2" aria-hidden="true"></i></p>
                                </div>
                            </div>
                            <div class="mb-3 mb-md-5">
                                <button class="btn btn-primary" type="button"><span><i class="fa fa-plus me-2" aria-hidden="true"></i></span>Add New Card</button>
                            </div>

                            <div class="payment-title">Bank Accounts</div>
                            <div class="payment-card-inside d-flex justify-content-between align-items-baseline border rounded p-1 mb-1">
                                <div>
                                    <p class="mb-0">Bank Of America (Ending in 1234)</p>
                                </div>
                                <div class="me-3">
                                    <p class="mb-0">Update <i class="fa fa-angle-right ms-1" aria-hidden="true"></i></p>
                                    <p class="mb-0">Delete <i class="fa fa-angle-right ms-2" aria-hidden="true"></i></p>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="button"><span><i class="fa fa-plus me-2" aria-hidden="true"></i></span>Add New Card</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="street-img">
        <img src="images/img1.png" class="img-fluid">
    </div>
</div>
@endsection