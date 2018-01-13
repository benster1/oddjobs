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
									My Profil
								</div>
								<div class="panel-body">
									<div class="col-lg-6">
											
												<div class="col-md-12">

													<div class="form-group">
														<label>Name</label>
														<input readonly class="form-control" placeholder="Name" id="name" type="text" name="name" value="{{ Auth::User()->name }}" required autofocus>
														
													</div>
													
													<div class="form-group">
														<label>E-mail</label>
														<input  readonly class="form-control" placeholder="E-mail" id="email" type="text"  name="email" value="{{Auth::User()->email}}" required autofocus>
													</div>


													<div class="form-group">
														<label>Type</label>
														<input readonly type="text" class="form-control" name="type" value="{{Auth::User()->type}}">
					 								</div>
					 								@if(Auth::User()->type=='Applicant')
					 								<div class="form-group">
					 									<label>Resume</label>
														<a href="{{ Auth::User()->link }}" >
															<?php echo substr( Auth::User()->link , 8) ?>
																
															</a>
													</div>
											</div>
											
											

											<form enctype="multipart/form-data" method="post" action="/uploadresume">
											 <div>
                        						{{ csrf_field() }}
					                            <input type="file" name="resume" id='resume' class="form-control">
					                            <input type="submit" name="upload" value="Upload New Resume" class="form-control">
					                        </div>
													@endif

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
