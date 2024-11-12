<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}">

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ url('assets/css/app.css')}}">
    <title></title>
</head>
<body>
<div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                
                        <h3>Sign In</h3>
                        <h4>MarSU Sustainable Development Goals</h4>
                         <a class="btn btn-primary float-right" href="{{ url('/sdg_marsu/view-insert') }}" >View Insert</a>
                    </div>
                    <form action="/sdg_marsu/register" method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left">
                            <label for="fullname">Fullname</label>
                            <div class="position-relative">
                                <input type="text" name="fullname" class="form-control" id="fullname">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Username</label>
                            <div class="position-relative">
                                <input type="text" name="username" class="form-control" id="username">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                               
                            </div>
                            <div class="position-relative">
                                <input type="text" name="password" class="form-control" id="password">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>
                         <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="designation">Designation</label>
                               
                            </div>
                            <div class="position-relative">
                                <input type="text" name="designation" class="form-control" id="designation">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>


                        <div class="clearfix">
                            <button class="btn btn-primary float-right" >Submit</button>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

     <script src="{{ url('assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>
    <script src="{{ url('assets/js/main.js') }}"></script>
<!-- AJAX Script/Link-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>