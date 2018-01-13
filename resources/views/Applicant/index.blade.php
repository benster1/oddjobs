@extends('layouts.app')

@section('content')
<div class="left links"> 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div align="center">
            <h2>Deliver More Hires, Faster</h2>
              <h4>Programmatic targeting across multiple channels delivers the right candidates faster</h4>
          </div>
            <div class="panel panel-default">
                <div class="panel-heading">All Applicants</div>

                <div class="panel-body">
                  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                <table id="myTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Created at</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($user as $res)
                    <tr>
                      <th scope="row">{{$res->id}}</th>
                      <td><a href="{{$res->link}}" >{{$res->name}}</a></td>
                      <td>{{$res->email}}</td>
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

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
