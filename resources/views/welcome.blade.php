<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Odd Jobs</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}
        </style>
    </head>
    <body background="img/welcome.jpg"  >

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        
                        <a href="/allOpp">All Oppenings</a>
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="alert alert-info" role="alert">
                  <h3>Welcome to OddJobs "Testing GITHUB"</h3>
                  <h3>Welcome to OddJobs "Testing GITHUB"</h3>
                  <p>
                      Join us, you can post your offers as a <u><b><i>Recruiter</i></b></u> and apply for any oopening in our website as an <u><b><i>Applicant</i></b></p></u></br>

                  </p>
                   <div>OddJobs helps people get jobs. Join us and test it, you'll not be disapointed :D
                 </div></br></br></br>
                </div>
                <div class="panel-body">
                                      <strong><h2>Get Started for free</h2></strong>

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}


                        <label  class="col-md-4 control-label"><u>Register as:</u> </label>

                            <div class="col-md-8">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="type" id="optionsRadios1" value="Applicant" checked>Applicant
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="type" id="optionsRadios2" value="Recruiter">Recruiter
                                                </label>
                                            </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-md-8">
                            </br>

                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder='Name' required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
</br>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-8">
                                <input id="email" type="email" placeholder='E-mail Address' class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
</br>
                       
                                         
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-8">
                                <input id="password" type="password" placeholder='Password' class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
</br>
                        <div class="form-group">

                            <div class="col-md-8">
                                <input id="password-confirm" type="password"  placeholder='Confirm Password' class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            </div>
                        </div>
                       </br>
                       
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="title m-b-md">
                                        <img src="/img/oddjobs.gif"/>

                </div>


                <div class="links">
                    <a href="https://www.linkedin.com/in/othmane-benhammou-50952b89/"><img src="/img/linkedin.png" width="5%"/></a>
                    <a href="https://www.facebook.com/othmane.benhammou"><img src="/img/fb.jpg" width="5%"/></a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
