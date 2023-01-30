@extends('newfrontend.main')
@section('content')
<div class="inner-content">
    <div class="signin-section">
        <div class="row align-items-center gx-5">
            <div class="col-12 col-md-6 mb-4">
                <div class="sign-in-section">
                    <div class="col-md-7 px-3 px-md-0">
                        <h2>Sign in to your account</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda eaque obcaecati,
                            itaque excepturi voluptas ducimus,
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4 px-md-5">
                <div class="sign-in col-md-7 px-3 px-md-0">
                    <h2>Sign In</h2>
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="input-group flex-nowrap mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Email" aria-label="Username" aria-describedby="addon-wrapping">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                        </div>
                        <div class="input-group flex-nowrap mb-3">
                            <input type="text" class="form-control" name="password" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <button class="btn btn-primary px-4">SIGN IN</button>
                            <a href="#" class="mb-0 border-bottom d-inline-block">Forget your password?</a>
                        </div>
                    </form>
                    <div class="account">
                        <p>Don't have an account? <a href="#" class="mb-0 border-bottom d-inline-block mx-1">Create an account</a></p>
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