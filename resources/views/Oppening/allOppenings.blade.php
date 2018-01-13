@extends('layouts.app')

@section('content')
<div class="left links"> 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div align="center">
          <h2>Always Know Where You Stand</h2>
<h4>Get updates on your job application every step of the way</h4>
</div>
            <div class="panel panel-default">
                <div class="panel-heading">All Oppenings</div>

                <div class="panel-body">
                  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for an oppening.." title="Type in an oppening">
                <table id="myTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Location</th>
                      <th>Posted on</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($user as $res)
                    <tr>
                      <th scope="row">{{$res->id}}</th>
                      <td><a href="/detailOpp/{{$res->id}}"> {{$res->title}}</a></td>
                      <td>{{$res->location}}</td>
                      <td>{{$res->created_at}}</td>
                    </tr>
                    @endforeach
                      
                  </tbody>
                </table>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}

                            
                        </div>
                    @endif

                    You are logged @if(isset(Auth::User()->type))in! @else out @endif
                </div>
            </div>
             <div align="center">
          <i>
<h4>Apply with One Click Say goodbye to long applications. Upload your resume and apply to jobs in a click or a tap.</h4></i>
</div>
        </div>
    </div>
</div>
@endsection
