@extends('layouts.app')

@section('content')
<div class="left links"> 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">InBox</div>

                <div class="panel-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>From</th>
                      <th>Subject</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($msg as $res)
                    <tr>
                      <th scope="row">{{$res->id}}</th>
                      <td>{{$res->from}}</td>
                      <td>{{$res->subject}}</td>
                      <td>@{{$res->added_at}}</td>
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
