@extends('newfrontend.main')
@section('content')
<div class="inner-content">
    <div class="section-product-charter">
        <div class="container">
            <div class="row col-lg-9 mx-auto gx-5">
            <div class="col-12 col-md-5 gx-0 gx-md-1 gx-lg-5 px-lg-3">
                @include('newfrontend.sidepanel')
            </div>
                <div class="col-12 col-md-7 gx-0 gx-md-1 gx-lg-5 px-lg-3">
                    <div class="my-account-section">
                        <h2>Profile Mangement</h2>
                        <div class="row gx-lg-5">
                            <div class="col-12 col-md-5 col-lg-4">
                                <div class="my-account-image">
                                    <div class="account-image">
                                        <img src="images/user.png" class="img-fluid w-100">
                                    </div>
                                    <div class="upload-logo"><i class="fa fa-cloud-upload" aria-hidden="true"></i></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 col-lg-8">
                                <form>
                                    <div class="mb-3">
                                        <label for="nameInputEmail1" class="form-label mb-0">Name</label>
                                        <input type="name" class="form-control" value="{{$user->name}}" id="nameInputEmail1" aria-describedby="nameHelp">
                                        <div class="pincel"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputtagline" class="form-label mb-0">Birthday</label>
                                        <input type="date" class="form-control about-me" id="exampleInputtagline" value="MM/DD/YYYY">
                                        <div class="pincel"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputtagline" class="form-label mb-0">About Me</label>
                                        <div class="about-me border rounded form-control pincel">
                                            <p class=" mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, laudantium dicta? Velit facilis hic perferendis.</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nameInputEmail1" class="form-label mb-0">Email</label>
                                        <input type="email" class="form-control" value="{{$user->email}}" id="nameInputEmail1" aria-describedby="nameHelp">
                                        <div class="pincel"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputtagline" class="form-label mb-0">Phone</label>
                                        <input type="text" class="form-control about-me" value="{{$user->phone}}" name="phone" id="exampleInputtagline">
                                        <div class="pincel"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label mb-0">Adress</label>
                                        <input type="text" name="address" value="{{$user->address}}" class="form-control">
                                        <div class="pincel"></div>
                                    </div>
                                    <div class="row gx-2 mb-0 mb-md-3">
                                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                                            <label for="" class="form-label mb-0">City</label>
                                            <!-- <select name="city_id"  class="form-control">
                                            @foreach ($cities as $city)
                                              <option value="{{$city->id}}">{{$city->name}}</option>
                                            @endforeach
                                            </select> -->
                                            <select id="city-id" class="form-control">
                                              </select>
                                            <!-- <input type="text" class="form-control"> -->
                                            <div class="pincel"></div>
                                        </div>
                                        <div class="col-12 col-md-3 mb-3 mb-md-0">
                                            <label for="">State</label>
                                       
                                            <!-- @foreach ($states as $state)
                                                 <select name="city_id" class="form-control">
                                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    -->
                                                    <select id="state-id" class="form-control">
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
                                        <select class="form-select"  class="form-control" name="country_id" id="country_id">
                                            @foreach ($countries as $country)
                                              <option value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                            </select>
                                    </div>
                                    <div class="row gx-4 mb-0 mb-md-5 align-items-end">
                                        <div class="col-12 col-md-8 mb-3 mb-md-0">
                                            <label for="">Language Spoken</label>
                                            <select class="form-select">
                                                <option></option>
                                                <option>English</option>
                                                <option>Spanish</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-4 mb-3 mb-md-0">
                                            <button class="btn btn-primary add-more-width" type="button"><span><i class="fa fa-plus me-2" aria-hidden="true"></i></span>Add More</button>
                                        </div>
                                    </div>
                                    <h4 class="mb-1">Professional Experience</h4>
                                    <div class="mb-3">
                                        <label for="" class="form-label mb-0">Business Name</label>
                                        <input type="text" class="form-control">
                                        <div class="pincel"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="book_from">From</label>
                                            <div class="input-icon"><input type="date" name="book_from" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="book_to">To</label>
                                            <div class="input-icon"><input type="date" name="book_to" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label mb-0">Description</label>
                                        <input type="text" class="form-control">
                                        <div class="pincel"></div>
                                    </div>
                                    <div class=" d-md-flex justify-content-md-start mb-3 mb-md-5">
                                        <button class="btn btn-primary" type="button"><span>
                                                <i class="fa fa-plus me-2" aria-hidden="true"></i></span>Add More</button>
                                    </div>
                                    <h4 class="mb-2">Education Details </h4>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="text">Name Of Collage</label>
                                            <div class="input-icon"><input type="text" name="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="text">Degree</label>
                                            <div class="input-icon"><input type="text" name="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" d-md-flex justify-content-md-start mb-3 mb-md-5">
                                        <button class="btn btn-primary" type="button"><span>
                                                <i class="fa fa-plus me-2" aria-hidden="true"></i></span>Add More</button>
                                    </div>
                                    <h4 class="mb-2">Certificates </h4>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="text">Course Name</label>
                                            <div class="input-icon"><input type="text" name="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="text">Upload Certificates</label>
                                            <label class="uploadFile border rounded">
                                                <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                                <span class="filename">Upload </span>
                                                <input type="file" class="inputfile form-control" name="file">
                                            </label>
                                        </div>
                                    </div>
                            </div>
                            <div class=" d-md-flex justify-content-md-end mb-3 mb-md-4">
                                <button class="btn btn-primary" type="button"><span>
                                        <i class="fa fa-plus me-2" aria-hidden="true"></i></span>Add More</button>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label mb-0">Portfolio</label>
                                <input type="text" class="form-control">

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label mb-0">Links</label>
                                <input type="text" class="form-control">

                            </div>
                            <div class="d-md-flex justify-content-md-end mb-3 mb-md-4">
                                <button class="btn btn-primary" type="button"><span>
                                        <i class="fa fa-plus me-2" aria-hidden="true"></i></span>Add More</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="nameInputEmail1" class="form-label mb-0">Social Media Link</label>
                                            <input type="name" class="form-control " id="nameInputEmail1" aria-describedby="nameHelp">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="nameInputEmail1" class="form-label mb-0">Social Media Link</label>
                                            <input type="name" class="form-control " id="nameInputEmail1" aria-describedby="nameHelp">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="nameInputEmail1" class="form-label mb-0">Social Media Link</label>
                                            <input type="name" class="form-control " id="nameInputEmail1" aria-describedby="nameHelp">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="nameInputEmail1" class="form-label mb-0">Social Media Link</label>
                                            <input type="name" class="form-control " id="nameInputEmail1" aria-describedby="nameHelp">
                                        </div>
                                    </div>
                                </div> -->
                    <button class="btn  btn-primary">Cancel</button>
                    <button class="btn  btn-primary">Save Changes</button>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
        $(document).ready(function () {
            $('#country-id').on('change', function () {
                var idCountry = this.value;
                $("#state-id").html('');
                $.ajax({
                    url: "{{url('api/fetch-states')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#state-id').html('<option value="">Select State</option>');
                        $.each(result.states, function (key, value) {
                            $("#state-id").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#city-id').html('<option value="">Select City</option>');
                    }
                });
            });
            $('#state-id').on('change', function () {
                var idState = this.value;
                $("#city-id").html('');
                $.ajax({
                    url: "{{url('api/fetch-cities')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#city-id').html('<option value="">Select City</option>');
                        $.each(res.cities, function (key, value) {
                            $("#city-id").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection