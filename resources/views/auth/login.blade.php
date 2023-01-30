@extends('newfrontend.main')

@section('content')
<!-- <div class="h-100 bg-cover bg-center py-5 d-flex align-items-center" style="background-image: url({{ uploaded_asset(get_setting('admin_login_background')) }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-4 mx-auto">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="mb-5 text-center">
                            @if(get_setting('system_logo_black') != null)
                                <img src="{{ uploaded_asset(get_setting('system_logo_black')) }}" class="mw-100 mb-4" height="40">
                            @else
                                <img src="{{ static_asset('assets/img/logo.png') }}" class="mw-100 mb-4" height="40">
                            @endif
                            <h1 class="h3 text-primary mb-0">{{ translate('Welcome to') }} {{ env('APP_NAME') }}</h1>
                            <p>{{ translate('Login to your account.') }}</p>
                        </div>
                        <form class="pad-hor" method="POST" role="form" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="{{ translate('Email') }}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{ translate('Password') }}">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <div class="text-left">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span>{{ translate('Remember Me') }}</span>
                                            <span class="aiz-square-check"></span>
                                        </label>
                                    </div>
                                </div>
                                @if(env('MAIL_USERNAME') != null && env('MAIL_PASSWORD') != null)
                                    <div class="col-sm-6">
                                        <div class="text-right">
                                            <a href="{{ route('password.request') }}" class="text-reset fs-14">{{translate('Forgot password ?')}}</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                {{ translate('Login') }}
                            </button>
                        </form>
                        @if (env("DEMO_MODE") == "On")
                            <div class="mt-4">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>admin@example.com</td>
                                            <td>123456</td>
                                            <td><button class="btn btn-info btn-xs" onclick="autoFill()">{{ translate('Copy') }}</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
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
                    <form action="{{route('login')}}" role="form" method="POST">
                        @csrf
                        <div class="input-group flex-nowrap mb-3">
                            <input type="email" class="form-control" name="email" {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}"  placeholder="Email" aria-label="Username" aria-describedby="addon-wrapping">
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                        </div>
                        <div class="input-group flex-nowrap mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping">
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <button type="submit" class="btn btn-primary px-4">SIGN IN</button>
                            <a href="#" class="mb-0 border-bottom d-inline-block">Forget your password?</a>
                        </div>
                    </form>
                    <div class="account">
                        <p>Don't have an account? <a href="{{route('register')}}" class="mb-0 border-bottom d-inline-block mx-1">Create an account</a></p>
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

@section('script')
    <script type="text/javascript">
        var isPhoneShown = true,
            countryData = window.intlTelInputGlobals.getCountryData(),
            input = document.querySelector("#phone-code");

        for (var i = 0; i < countryData.length; i++) {
            var country = countryData[i];
            if(country.iso2 == 'bd'){
                country.dialCode = '88';
            }
        }

        var iti = intlTelInput(input, {
            separateDialCode: true,
            utilsScript: "{{ static_asset('assets/js/intlTelutils.js') }}?1590403638580",
            onlyCountries: @php echo json_encode(\App\Models\Country::where('status', 1)->pluck('code')->toArray()) @endphp,
            customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                if(selectedCountryData.iso2 == 'bd'){
                    return "01xxxxxxxxx";
                }
                return selectedCountryPlaceholder;
            }
        });

        var country = iti.getSelectedCountryData();
        $('input[name=country_code]').val(country.dialCode);

        input.addEventListener("countrychange", function(e) {
            // var currentMask = e.currentTarget.placeholder;

            var country = iti.getSelectedCountryData();
            $('input[name=country_code]').val(country.dialCode);

        });

        function toggleEmailPhone(el){
            if(isPhoneShown){
                $('.phone-form-group').addClass('d-none');
                $('.email-form-group').removeClass('d-none');
                $('input[name=phone]').val(null);
                isPhoneShown = false;
                $(el).html('{{ translate('Use Phone Instead') }}');
            }
            else{
                $('.phone-form-group').removeClass('d-none');
                $('.email-form-group').addClass('d-none');
                $('input[name=email]').val(null);
                isPhoneShown = true;
                $(el).html('{{ translate('Use Email Instead') }}');
            }
        }



        function autoFillSeller(){
            $('#email').val('seller@example.com');
            $('#password').val('123456');
        }
        function autoFillCustomer(){
            $('#email').val('customer@example.com');
            $('#password').val('123456');
        }
        function autoFillDeliveryBoy(){
            $('#email').val('deliveryboy@example.com');
            $('#password').val('123456');
        }
    </script>
@endsection
