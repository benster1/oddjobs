@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Odd Jobs</div>
                
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <b>{{Auth::User()->type}}</b> !
                    @if(Auth::User()->type=='Applicant')
                    <div align="center">
                     <h2>All Candidates In One Place</h2>
                        <h4>
                        As an Applicant, you can search and apply for the oppenings in our website, and you can also contact us if you need any help. 
                        </h4>
                    </div>
                    @endif
                    @if(Auth::User()->type=='Recruiter')
                    <div align="center">
                     <h2>All Candidates In One Place</h2>
                        <h4>
                        As your qualified candidates roll in, we make it easy to screen & rate them, allowing you to make the best hiring decisions for your business. 
                        </h4>
                    </div>
                    @endif
                    @if(Auth::User()->type=='Administrator')
                    <div align="center">
                     <h2>Administrator's space</h2>
                        <h4>
                        As an Administrator, you'll be the one that approve the new registred, and geting in touch with them if they ask for help. 
                        </h4>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
