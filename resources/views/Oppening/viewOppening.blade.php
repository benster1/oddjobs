@extends('layouts.app')

@section('content')
<div class="left links"> 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Oppening Title: <b>{{ $user->title }}</b>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="/dbStoreOppl">
                                        <div class="form-group">
                                                                                            {{ csrf_field() }}

                                           <div> <label>Company:&nbsp;</label>...</div>
                                        </div>
                                        
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                        <div class="form-group">
                                            <label>Description:&nbsp; </label>
                                            <p> {{$user->description}}</p>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Location: &nbsp;</label>{{$user->location}}
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Contract:&nbsp; </label>{{$user->contract}}
                                            
            
                                            </div>
                                            <div><label>Posted on:&nbsp; </label>1{{$user->created_at}}</div>
                                            @if(isset(Auth::User()->type))
                                                @if(Auth::User()->type=='Applicant')
                                            <button type="submit" class="btn btn-default">Apply</button>
                                            @else <font color='red'><b><i> Kindly log in as an Applicant to apply</i></b></font>

                                                @endif
                                            @else <font color='red'><b><i> Kindly register to apply</i></b></font>
                                            @endif
                                    </form>
                                            
                                        </div>
                                        
                                        
                                        
                                </div>
                                <!-- /.col-lg-6 (nested) -->






                                    
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


                
                
            </div>
        </div>
    </div>
</div>
@endsection
