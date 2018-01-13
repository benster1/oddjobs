@extends('layouts.app')

@section('content')
<div class="left links"> 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Applicants</div>

                <div class="panel-body"><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                <table id="myTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th> Name</th>
                      <th>E-mail</th>
                      <th>Oppening</th>
                      <th>Created at</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($user as $res)
                    <tr>
                      <th scope="row">{{$res->id}}</th>
                      <td><php Oppening::find({{$res->oppening_id}}</td>
                      <td>{{$res->user_id}}</td>
                      <td></td>
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
