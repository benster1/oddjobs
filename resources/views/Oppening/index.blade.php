@extends('layouts.app')

@section('content')
<div class="left links"> 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Oppenings</div>

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
                      <td><a href="/detailOpp/{{$res->id }}"> {{$res->title}}</a></td>
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
        </div>
    </div>
</div>
@endsection
