<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
    <!-- META SECTION -->
    <title>Atlant - Responsive Bootstrap Admin Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('assets/css/theme-default.css') }}"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>

<div class="registration-container">
    <div class="registration-box animated fadeInDown">
        <div class="registration-logo"></div>
        <div class="registration-body">
            <div class="registration-title"><strong>Registration</strong>, use form below</div>
            <div class="registration-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In odio mauris, maximus ac sapien sit amet. </div>
            <form action="/auth/register" class="form-horizontal" method="post">
                {!! csrf_field() !!}
                <h4>Personal info</h4>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="name" placeholder="Full Name" value="{{ old('name') }}" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="password" name="password" class="form-control" placeholder="Password" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Re-Password" required/>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('gender_id', 'Gender: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::select('gender_id', [null => 'Please select a gender'] + [ 1 => 'MALE', 2 => 'FEMALE'] , null, array('class' => 'form-control', 'required')) !!}
                    </div>
                </div>


                <div class="form-group push-up-30">
                    <div class="col-md-6">
                        <a href="{{ url('/') }}" class="btn btn-link btn-block">Already have account?</a>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-danger btn-block">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="registration-footer">
            <div class="pull-left">
                &copy; 2015 AppName
            </div>
            <div class="pull-right">
                <a href="#">About</a> |
                <a href="#">Privacy</a> |
                <a href="#">Contact Us</a>
            </div>
        </div>
    </div>

</div>

</body>
</html>






