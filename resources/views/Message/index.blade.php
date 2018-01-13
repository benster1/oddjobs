@extends('layouts.app')

@section('content')
<div class="left links"> 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <u><a href="/newWriteMessage" >New Message</a></u>
@if(Auth::User()->type=='Administrator')
                        <u><a href="/msg" >Inbox</a></u>
                         <div class="panel-heading">InBox (<font color="red"><b>{{$count}}</b> <i>new message</i></font>)</div>
                        @endif


                <div class="panel-body">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                <table id="myTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>From</th>
                      <th>Title</th>
                      <th>Subject</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($msg as $res)
                    <tr>
                      <th scope="row">{{$res->id}}</th>
                      <td>{{$res->user->email}}</td>
                      <td>{{$res->title}}</td>
                      <td>{{$res->object}}</td>
                      <td>{{$res->created_at }}</td>
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
