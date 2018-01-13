@extends('layouts.app')

@section('content')
<div class="left links"> 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div align="center">
                <h4> Send us your out come, Contact us and tell us how can we help you.</h4>
            </div>

            <div class="panel panel-default">
                
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <u><a href="/newWriteMessage" >New Message</a></u>
                        @if(Auth::User()->type=='Administrator')
                        <u><a href="/msg" >Inbox</a></u>
                        @endif
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form form role="form" method="POST" action="/newMessage">
                                                {{ csrf_field() }}
                                        
                                        <div class="form-group">
                                            <input class="form-control" type='text' name='title' placeholder="Title">
                                        </div>
                                        
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3"  type='text' name='object' placeholder="Object"></textarea>
                                        </div>

                                        
                                        
                                        
                                        
                                        <button type="submit" class="btn btn-default">Send </button>
                                        <button type="reset" class="btn btn-default">Reset </button>
                                    </form>
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
