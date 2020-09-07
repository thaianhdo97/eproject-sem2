@extends('layout.admin-layout')




@section('title')

    <h2>TourGuides manager</h2>
    <p>Welcome <span class="bread-ntd">Admin</span></p>

@endsection
@section('content')
    <div class="single-product-tab-area mg-t-0 mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-product-pr">
                           <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div id="myTabContent1" class="tab-content">
                                    <div class="product-tab-list tab-pane fade active in" id="single-tab1">
                                        <img src="{{$item->large_photo}}" alt=""/>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="single-tab2">
                                        <img src="img/product/bg-2.jpg" alt=""/>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="single-tab3">
                                        <img src="img/product/bg-3.jpg" alt=""/>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="single-tab4">
                                        <img src="img/product/bg-1.jpg" alt=""/>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="single-tab5">
                                        <img src="img/product/bg-2.jpg" alt=""/>
                                    </div>
                                </div>
                                <ul id="single-product-tab">
                                    <li class="active">
                                        <a href="#single-tab1"><img src="img/product/1.jpg" alt=""/></a>
                                    </li>
                                    <li>
                                        <a href="#single-tab2"><img src="img/product/2.jpg" alt=""/></a>
                                    </li>
                                    <li>
                                        <a href="#single-tab3"><img src="img/product/3.jpg" alt=""/></a>
                                    </li>
                                    <li>
                                        <a href="#single-tab4"><img src="img/product/1.jpg" alt=""/></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <div class="single-product-details res-pro-tb">
                                    <h1>{{$item->full_name}}</h1>
                                    <span class="single-pro-star">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
                                    <div class="single-pro-price">
                                        <span class="single-regular">{{$item->price}} VND/ngay</span><span
                                            class="single-old"><del>$20.00</del></span>
                                    </div>
                                    <div class="single-pro-size">
                                        <h6>Giới tính</h6>
                                        <span>Nam</span> <span>Nữ</span> <span>Khác</span>
                                    </div>
                                    <div class="color-quality-pro">
                                        <div class="color-quality-details">
                                            <h5>Color</h5>
                                            <span class="red"></span> <span class="green"></span> <span
                                                class="yellow"></span> <span class="black"></span> <span
                                                class="white"></span>
                                        </div>
                                        <div class="color-quality">
                                            <h4>Quality</h4>
                                            <div class="quantity">
                                                <div class="pro-quantity-changer">
                                                    <input type="text" value="1"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="single-pro-button">




                                            <div class="pro-button">
                                                <a href="#">Lịch trình  </a>
                                            </div>
                                            <div class="pro-viwer">
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                <a href="#"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="single-social-area">
                                            <h3>Contact</h3>
                                            <a href="#"><i class="fa fa-phone"></i></a>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-feed"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="single-pro-cn">
                                        <h3>OVERVIEW</h3>
                                        <p>{{$item->description}}</p>
                                    </div>
                                </div>
                            </div>
                               <button data-toggle="modal"
                                       data-target="#comfirmModal"
                                       class="pd-setting-ed">
                                   Khóa HDV
                               </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single pro tab End-->

    <!-- Comfirm deactive-->
    <div class="breadcome-area">
        <div class="modal fade" id="comfirmModal" role="dialog">
            <div class="container">
                <div class="modal-dialog modal-dialog-scrollable">

                    <!-- Modal content-->
                    <div class="product-status-wrap" class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;
                            </button>
                            <h4 class="modal-title">TourGuide DeActive comfirm</h4>
                        </div>
                        <div class="product-status-wrap">

                            <div class="modal-body">
                                <h2 class="text-warning">DeActive this tourGuide?</h2>
                            </div>
                            <div class="modal-footer">
                                <form action="/admin/deActive-tourGuides/{{$item->id}}" method="post">
                                    @csrf
                                    <button class="btn btn-close btn-primary  " type="submit">
                                        Yes
                                    </button>
                                    <button type="button" class="btn btn-close btn-primary"
                                            data-dismiss="modal">
                                        Close
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-tb-pr">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul id="myTab" class="tab-review-design">
                                    <li class="active"><a href="#description">description</a></li>
                                    <li><a href="#reviews"><span><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></span> reviews (1) <span><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i></span></a></li>
                                    <li><a href="#INFORMATION">INFORMATION</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="product-tab-list product-details-ect tab-pane fade active in"
                                         id="description">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip
                                                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                        qui officia deserunt
                                                        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
                                                        natus error sit voluptatem accusantium doloremque laudantium,
                                                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                                        et quasi architecto
                                                        beatae vitae dicta sunt explicabo.</p>
                                                    <p class="pro-b-0">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation ullamco labo nisi ut aliquip ex
                                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. ut
                                                        labore et dolore magna aliqua. Ut enim ad , quis nostrud
                                                        exercitation ullamco
                                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                        dolor in reprehenderit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="review-content-section">
                                                        <div class="card-block">
                                                            <div class="text-muted f-w-400">
                                                                <p>No reviews yet.</p>
                                                            </div>
                                                            <div class="m-t-10">
                                                                <div class="txt-primary f-18 f-w-600">
                                                                    <p>Your Rating</p>
                                                                </div>
                                                                <div class="stars stars-example-css detail-stars">
                                                                    <div class="review-rating">
                                                                        <fieldset class="rating">
                                                                            <input type="radio" id="star5" name="rating"
                                                                                   value="5">
                                                                            <label class="full" for="star5"></label>
                                                                            <input type="radio" id="star4half"
                                                                                   name="rating" value="4 and a half">
                                                                            <label class="half" for="star4half"></label>
                                                                            <input type="radio" id="star4" name="rating"
                                                                                   value="4">
                                                                            <label class="full" for="star4"></label>
                                                                            <input type="radio" id="star3half"
                                                                                   name="rating" value="3 and a half">
                                                                            <label class="half" for="star3half"></label>
                                                                            <input type="radio" id="star3" name="rating"
                                                                                   value="3">
                                                                            <label class="full" for="star3"></label>
                                                                            <input type="radio" id="star2half"
                                                                                   name="rating" value="2 and a half">
                                                                            <label class="half" for="star2half"></label>
                                                                            <input type="radio" id="star2" name="rating"
                                                                                   value="2">
                                                                            <label class="full" for="star2"></label>
                                                                            <input type="radio" id="star1half"
                                                                                   name="rating" value="1 and a half">
                                                                            <label class="half" for="star1half"></label>
                                                                            <input type="radio" id="star1" name="rating"
                                                                                   value="1">
                                                                            <label class="full" for="star1"></label>
                                                                            <input type="radio" id="starhalf"
                                                                                   name="rating" value="half">
                                                                            <label class="half" for="starhalf"></label>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                            <div class="input-group mg-b-15 mg-t-15">
                                                                <span class="input-group-addon"><i class="fa fa-user"
                                                                                                   aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                       placeholder="User Name">
                                                            </div>
                                                            <div class="input-group mg-b-15">
                                                                <span class="input-group-addon"><i class="fa fa-user"
                                                                                                   aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                       placeholder="Last Name">
                                                            </div>
                                                            <div class="input-group mg-b-15">
                                                                <span class="input-group-addon"><i
                                                                        class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                       placeholder="Email">
                                                            </div>
                                                            <div class="form-group review-pro-edt mg-b-0-pr">
                                                                <button type="submit"
                                                                        class="btn btn-primary waves-effect waves-light">
                                                                    Submit
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip
                                                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                        qui officia deserunt
                                                        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
                                                        natus error sit voluptatem accusantium doloremque laudantium,
                                                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                                        et quasi architecto
                                                        beatae vitae dicta sunt explicabo.</p>
                                                    <p class="pro-b-0">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation ullamco labo nisi ut aliquip ex
                                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. ut
                                                        labore et dolore magna aliqua. Ut enim ad , quis nostrud
                                                        exercitation ullamco
                                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                        dolor in reprehenderit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>



        $('#comfirmModal').on('shown.bs.modal', function () {

        })

    </script>
@endsection
