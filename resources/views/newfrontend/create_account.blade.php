@extends('newfrontend.main')
@section('content')
<div class="container row align-items-center gx-5 mt-5">
    <div class="col-12 col-md-5 mb-4">
        <div class="sign-in-section">
            <div class="col-md-8 px-3 px-md-0">
                <h2>Create An Acoount</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda eaque obcaecati,
                    itaque excepturi voluptas ducimus,
                </p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-7 mb-4 px-md-5">
        <div class="sign-in col-md-9 px-3 px-md-0">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" aria-label="email" aria-describedby="addon-wrapping">
                </div>
                <div class="row gx-2">
                    <div class="col-12 col-md-6 mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <input type="password" class="form-control" placeholder="Retype Password" aria-label="Retypepassword" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="zip_code" placeholder="Zip Code" aria-label="code" aria-describedby="addon-wrapping">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">By register you agree to the <strong>Term & Conditions.</strong></label>
                </div>

                <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                    <button class="btn btn-primary px-4">SUBMIT</button>
                    <a href="#" class="mb-0 d-inline-block">Already have an account? Login</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection