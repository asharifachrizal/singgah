@extends('layouts.client-base')



@section('breadcumb')
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{ asset('canvas/images/parallax/7.jpg') }}'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
    <div class="container clearfix">
        <h1>Profile</h1>
        <span>Profile. </span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </div>
</section>
@endsection

@section('content')
<div class="content-wrap">

    <div class="container clearfix">

        <div class="row clearfix">

            <div class="col-md-9">

                <!-- Avatar
                <img src="{{ asset('canvas/images/avatar.jpg')}}" class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;"> -->

                <div class="heading-block noborder">
                    <h3>{{ Sentinel::getUser()->full_name }}</h3>
                    <span>My Profile Bio</span>
                </div>

                <div class="clear"></div>

                <div class="row clearfix">

                    <div class="postcontent">

						<!-- <h3>Simple Form</h3> -->

						<form style="max-width: 50rem;" action="{{ route('registerUpdate', Sentinel::getUser()->id)}}" method="POST">
							<div class="form-group">
								<label for="exampleInputEmail1">Email </label>
								<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" value="{{ Sentinel::getUser()->email }}" required>
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
								<label for="exampleInputEmail1">Full Name </label>
								<input type="text" class="form-control" id="full_name" name="full_name" aria-describedby="emailHelp" placeholder="Full Name" value="{{ Sentinel::getUser()->full_name }}" required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Address </label>
								<input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp" placeholder="Address" value="{{ Sentinel::getUser()->address }}">
                            </div>
                            <div class="form-group">
								<label for="exampleInputEmail1">City </label>
								<input type="text" class="form-control" id="city" name="city" aria-describedby="emailHelp" placeholder="City" value="{{ Sentinel::getUser()->city }}" required>
                            </div>
                            <div class="form-group">
								<label for="exampleInputEmail1">Phone Number </label>
								<input type="number" class="form-control" id="phone_number" name="phone_number" aria-describedby="emailHelp" placeholder="62" value="{{ Sentinel::getUser()->phone_number }}" required>
							</div>
							<button type="submit" class="btn btn-primary mt-3">Save</button>
                        </form>
                </div>

                </div>

            </div>

            <div class="w-100 line d-block d-md-none"></div>

            <div class="col-md-3 clearfix">

                <div class="list-group">
                    <!-- <a href="#" class="list-group-item list-group-item-action clearfix">Profile <i class="icon-user float-right"></i></a> -->
                    <a href="{{ route('myorder', Sentinel::getUser()->id)}}" class="list-group-item list-group-item-action clearfix">My Orders <i class="icon-laptop2 float-right"></i></a>
                    <a href="#" class="list-group-item list-group-item-action clearfix">Logout <i class="icon-line2-logout float-right"></i></a>
                </div>

                <!-- <div class="fancy-title topmargin title-border">
                    <h4>About Me</h4>
                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum laboriosam, dignissimos veniam obcaecati. Quasi eaque, odio assumenda porro explicabo laborum!</p>                 -->

            </div>

        </div>

    </div>

</div>
@endsection
