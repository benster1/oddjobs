@extends('layouts.app')

@section('content')
<div class="left links"> 

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div align="center">
                        <h3> The Best Way to Post Jobs and Hire Fast </h3>
                    </div>
            <div class="panel panel-default">
                
<div class="row">
                <div class="col-lg-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            New Oppening
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form form role="form" method="POST" action="/dbAddOpp">
                                                {{ csrf_field() }}
                                        
                                        <div class="form-group">
                                            <input class="form-control" type='text' name='title' placeholder="Title">
                                        </div>
                                        
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3"  type='text' name='description' placeholder="Description"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" type='text' name='location' placeholder="Location"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Contract</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="contract" id="optionsRadios1" value="Full time" checked>Full time
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="contract" id="optionsRadios2" value="Part time">Part time
                                                </label>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
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
