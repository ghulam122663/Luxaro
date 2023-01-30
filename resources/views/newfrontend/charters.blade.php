@extends('newfrontend.main')
@section('content')
<div class="section-product-charter">
                <div class="container">
                    <div class=" panel-container d-md-flex">
                         @include('newfrontend.sidepanel')
                        <div class="splitter d-md-block"></div>
                        <div class="panel-right">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link active me-3" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="true">Charter Management</button>
                                    <span class="mb-0 text-secondary text-font">You are offering something for rent</span>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="false">Upload Product</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade " id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="row gx-2">
                                        <div class="col-12 col-md-6">
                                            <label for="exampleInputEmail1">Product Name</label>
                                            <input type="text" class="form-control mb-3 p-2" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="exampleInputPassword1">Product Price</label>
                                            <input type="price" class="form-control mb-3 p-2"
                                                id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="text-area">
                                        <label for="exampleInputPassword1">Product Description</label>
                                        <textarea class="form-control mb-4" placeholder="Message..."
                                            id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="uploadFile border rounded">
                                            <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                            <span class="filename">Upload product image</span>
                                            <input type="file" class="inputfile form-control" name="file" >
                                        </label>
                                    </div>
                                    <label for="select-products">products Type</label>
                                    <select class="form-select mb-3" aria-label="Default select example"
                                        id="select-products">
                                        <option selected></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="form-group mb-3">
                                        <label for="city_tag">Product Tags</label>
                                            <ul class="tags list-unstyled border d-flex flex-wrap rounded">
                                                <li>lorem<a href="" class="close-btn"><i class="fa fa-times" aria-hidden="true"></i> </a></li>
                                                <li>lorem<a href="" class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                                                <li>lorem<a href="" class="close-btn"><i class="fa fa-times" aria-hidden="true"></i> </a></li>
                                                <li>lorem<a href="" class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                                                <li>lorem<a href="" class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                                            </ul>
                                    </div>
                                     <div class="input-groups mb-3">
                                        <label>Product Category</label>
                                     <div class="input-type-check d-flex flex-wrap">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Luxaurolicious
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Luxauro Fresh
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Antiques
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Vintage
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Street Market
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Other
                                        </label>
                                      </div>
                                    </div>
                                    </div>
                                    <div class="input-groups mb-3">
                                        <label>Delivory Option</label>
                                     <div class="input-type-check d-flex flex-wrap">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Global
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Limited International
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            National
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Limited National
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Locak Delivery
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Picup
                                        </label>
                                      </div>
                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 col-md-6">
                                            <label>Shipping Type</label>
                                            <div class="input-type-check d-flex flex-wrap pt-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Within USA
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Out side USA
                                                </label>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label>Shipping Charge</label>
                                            <div class="input-group flex-nowrap w-50">
                                                <span class="input-group-text" id="addon-wrapping">$</span>
                                                <input type="text" class="form-control custom-input"
                                                    aria-label="Username" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid d-lg-block">
                                        <button class="btn btn-primary my-2" type="button"><span><i
                                                    class="fa fa-plus me-2" aria-hidden="true"></i></span>Add
                                            More</button>
                                        <button class="btn btn-primary mx-1 my-2" type="button">Submit
                                            Product</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <div class="charter-management-table table-responsive">
                                        <table class="table table-bordered text-center" style="width: 100%;">
                                          <thead>
                                            <tr>
                                              <th scope="col"></th>
                                              <th scope="col">Name</th>
                                              <th scope="col">Type</th>
                                              <th scope="col">Rate</th>
                                              <th scope="col">Day/Hr</th>
                                              <th scope="col">Description</th>
                                              <th scope="col">Image</th>
                                              <th scope="col">Date of Availabilty</th>
                                              <th scope="col" colspan="2">Time of Availabilty</th>
                                              <th scope="col">Tags</th>
                                              <th scope="col">Max Guests/ Travelers</th>
                                              <th scope="col">Service Offered As</th>
                                              <th scope="col">Upload Charter Agreement</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <th scope="row">1</th>
                                              <td>Horse back ride</td>
                                              <td>Misc.</td>
                                              <td>$50</td>
                                              <td>Hr.</td>
                                              <td>Take a ride on a h....</td>
                                              <td><label class="uploadFile-table border rounded">
                                                <i class="fa fa-cloud-upload upload-icon-account-1-table" aria-hidden="true"></i> </label>
                                              </td>
                                              <td><i class="fa fa-calendar" aria-hidden="true"></i></td>
                                              <td>AM</td>
                                              <td>PM</td>
                                              <td>
                                                <div class="table-tag">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>lorem<a href="" class="close-btn-tab"><i class="fa fa-times" aria-hidden="true"></i> </a></li>
                                                        <li>lorem<a href="" class="close-btn-tab"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                                                        <li>lorem<a href="" class="close-btn-tab"><i class="fa fa-times" aria-hidden="true"></i> </a></li>
                                                    </ul>
                                                  </div>
                                              </td>
                                              <td>1</td>
                                              <td>Local</td>
                                              <td><label class="uploadFile border rounded">
                                                <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                                <span class="filename">Upload </span>
                                                <input type="file" class="inputfile form-control" name="file" ></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">2</th>
                                              <td>4 Wheeler</td>
                                              <td>Vehicle</td>
                                              <td>$150</td>
                                              <td>Day</td>
                                              <td>Ride off-road on a....</td>
                                              <td><label class="uploadFile-table border rounded">
                                                <i class="fa fa-cloud-upload upload-icon-account-1-table" aria-hidden="true"></i> </label>
                                              </td>
                                              <td><i class="fa fa-calendar" aria-hidden="true"></i></td>
                                              <td>AM</td>
                                              <td>PM</td>
                                              <td>
                                                <div class="table-tag">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>lorem<a href="" class="close-btn-tab"><i class="fa fa-times" aria-hidden="true"></i> </a></li>
                                                        <li>lorem<a href="" class="close-btn-tab"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                                                        <li>lorem<a href="" class="close-btn-tab"><i class="fa fa-times" aria-hidden="true"></i> </a></li>
                                                    </ul>
                                                  </div>
                                              </td>
                                              <td>2</td>
                                              <td>Local</td>
                                              <td><label class="uploadFile border rounded">
                                                <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                                <span class="filename">Upload </span>
                                                <input type="file" class="inputfile form-control" name="file" ></td>
                                            </tr>
                                             <tr>
                                              <th scope="row">3</th>
                                              <td>Small Moter Boat</td>
                                              <td>Boat</td>
                                              <td>$50</td>
                                              <td>Hr.</td>
                                              <td>Go fishing or float....</td>
                                              <td><label class="uploadFile-table border rounded">
                                                <i class="fa fa-cloud-upload upload-icon-account-1-table" aria-hidden="true"></i> </label>
                                              </td>
                                              <td><i class="fa fa-calendar" aria-hidden="true"></i></td>
                                              <td>AM</td>
                                              <td>PM</td>
                                              <td>
                                                  <div class="table-tag">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>lorem<a href="" class="close-btn-tab"><i class="fa fa-times" aria-hidden="true"></i> </a></li>
                                                        <li>lorem<a href="" class="close-btn-tab"><i class="fa fa-times" aria-hidden="true"></i></a></li>
                                                        <li>lorem<a href="" class="close-btn-tab"><i class="fa fa-times" aria-hidden="true"></i> </a></li>
                                                    </ul>
                                                  </div>
                                              </td>
                                              <td>4</td>
                                              <td>Local</td>
                                              <td><label class="uploadFile border rounded">
                                                <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                                <span class="filename">Upload </span>
                                                <input type="file" class="inputfile form-control" name="file" ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><i class="fa fa-plus" aria-hidden="true"></i></th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                          </tbody>
                                        </table>
                                    </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection