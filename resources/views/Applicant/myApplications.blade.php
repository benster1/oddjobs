@extends('layouts.app')

@section('content')
<div class="left links"> 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All my Applications</div>

                <div class="panel-body">

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for oppening.." title="Type in an oppening">
                <table id="myTable" class="table table-striped">

                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Contract</th>
                      <th>Applied in</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=0; ?>
                   @foreach($opp as $res)
                    <tr>
                      <th scope="row">{{$i=$i+1}}</th>
                      <td><a href="/detailOpp/{{$res->id}}" >{{$res->title}}</a></td>
                      <td>{{$res->contract}}</td>
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

                    
            </div>
        </div>
    </div>
</div>
@endsection
