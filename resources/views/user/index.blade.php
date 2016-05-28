@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="row">
        <div class="col-sm-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="photos/user/user.jpeg" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        Sokoni User
                    </div>
                    <div class="profile-usertitle-job">
                        Developer
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">Follow</button>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                            <i class="glyphicon glyphicon-home"></i>
                            Shopping cart </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="glyphicon glyphicon-user"></i>
                            Wishlist </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                            <i class="glyphicon glyphicon-ok"></i>
                            Orders </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="glyphicon glyphicon-flag"></i>
                            My buddies </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-9">
          <!-- some user content here -->
          @include('user.shopping-cart')
        </div>
    </div>
</div>
@endsection
