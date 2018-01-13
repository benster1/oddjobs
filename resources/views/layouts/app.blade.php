<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    <title>Odd Jobs</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
             <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
      <input type="text" class="form-control" placeholder="Search for...">
    </div><!-- /input-group -->
  </div>
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="/img/oddjobs.gif" width="40%" />
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest

                            <li><a href="/allOpp">All Oppenings</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>

                        @else

                            @if(Auth::User()->type=='Administrator')
                            <li class="dropdown">
                                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                   Administrator <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/addAdmin">
                                            New Administrator
                                        </a>
                                        <a href="/allAdmin">
                                            All Administrators
                                        </a>
                                        <a href="/allRec">
                                            All Recruiters
                                        </a>
                                        <a href="/allAppl">
                                            All Applicants
                                        </a>
                                        <a href="/msg">
                                            Inbox
                                        </a>

                                        
                                    </li>
                                </ul>
                            </li>
                            @endif
                            @if(Auth::User()->type=='Recruiter')
                            <li class="dropdown">
                                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                   Recruiter <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/myOpp">
                                            All my Oppenings
                                        </a>
                                        <a href="/newOpp">
                                            New Oppening
                                        </a>
                                        <a href="/allAppl">
                                            All Applicants
                                        </a>
                                        <a href="/newWriteMessage">
                                            Send a message
                                        </a>

                                        
                                    </li>
                                </ul>
                            </li>
                            @endif
                            @if(Auth::User()->type=='Applicant')
                            <li class="dropdown">
                                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                   Applicant <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/myApplications">
                                            All my Apllication
                                        </a>
                                        <a href="/newWriteMessage">
                                            Send a message
                                        </a>

                                        
                                    </li>
                                </ul>
                            </li>
                            @endif
                            <li class="dropdown">
                                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                   Oppenings <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/allOpp">
                                            All Oppenings
                                        </a>

                                        
                                    </li>
                                </ul>
                            </li>




                            <li class="dropdown">
                                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/profil">
                                            Profil
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
                
            </div>

            <!-- Search -->
            

            <!-- Search body -->
            <div id="search" class="panel-collapse collapse">
                <div class="panel-body">
                    <form class="navbar-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">

           
            <!-- Dropdown-->
            <li class="panel panel-default" id="dropdown">
                


               <!-- Dropdown level 2 -->
                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#dropdown-lvl1">
                                    <span class="glyphicon glyphicon-off"></span> Menu<span class="caret"></span>
                                </a>
                                <div id="dropdown-lvl1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="/games">Games</a></li>
                                            <li><a href="/store">Store</a></li>
                                            <li><a href="/groups">Groups</a></li>
                                            <li><a href="/forum">Forum</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                          

                            

                        </ul>
                    </div>
                </div>
        </nav>

        @yield('content')
        <div align="center"> 
        @if(isset(Auth::User()->type))
                                                @if(Auth::User()->type=='Applicant')
                                                 <img src="/img/applicant.jpg" width="40%" />

                                                @endif
                                                @if(Auth::User()->type=='Recruiter')
                                                 <img src="/img/recruiter.png" width="40%" />

                                                @endif
                                                @if(Auth::User()->type=='Administrator')
                                                 <img src="/img/admin.png" width="40%" />

                                                @endif
                @endif

                 <div></br>OddJobs helps people get jobs. Join us and test it, you'll not be disapointed :D
                 </div>
            </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>






</body>

</html>


</body>
</html>
