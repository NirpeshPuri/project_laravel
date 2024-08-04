
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Backend- Login Page</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>
    <div class="container" style="">
        <section class="registration-area my-5" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">{{__('Register Account')}}</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{url('/register')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control {{$errors->has('name')? 'is-invalid': ''}}">

                                        @if($errors->has('name'))
                                            <span class="invalid-feedback">
                                            <strong>{{$errors->first('name')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" value="{{old('email')}}" class="form-control {{$errors->has('email')? 'is-invalid': ''}}">

                                        @if($errors->has('email'))
                                            <span class="invalid-feedback">
                                            <strong>{{$errors->first('email')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control {{$errors->has('password')? 'is-invalid': ''}}">
                                        @if($errors->has('password'))
                                            <span class="invalid-feedback">
                                            <strong>{{$errors->first('password')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                       <label for="user_type">User Type: </label>
                                        <!-- <input type="radio" name="user_type" value="admin"> Admin -->
                                       <input type="radio" name="user_type" value="user" checked> User
                                        </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block btn-md">Register</button>
                                    </div>
                                </form>
                                <small>Already have an account? <a href="{{url('login')}}">Login here</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
