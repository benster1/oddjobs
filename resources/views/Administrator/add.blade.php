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
									New Administrator
								</div>
								<div class="panel-body">
									<div class="col-lg-6">
											<form class="form-horizontal" method="POST" action="/dbAddAdmin">
												{{ csrf_field() }}
												<div class="form-group">

													<div class="form-group">
														<input class="form-control" placeholder="Name" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
														@if ($errors->has('name'))
														<span class="help-block">
															<strong>{{ $errors->first('naem') }}</strong>
														</span>
														@endif
													</div>
													
													<div class="form-group">
														<input class="form-control" placeholder="E-mail" id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
													</div>


													<div class="form-group">
														<input type="hidden" name="type" value="Administrator">
					 								</div>

<!--
													<div class="form-group">
														<textarea class="form-control" rows="3" placeholder="Address" id="name" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>
															@if ($errors->has('address'))
															<span class="help-block">
																<strong>{{ $errors->first('address') }}</strong>
															</span>
															@endif

														</textarea>
													</div>
-->
													<button type="submit" class="btn btn-default">Submit </button>
													<button type="reset" class="btn btn-default">Reset </button>
												</form>
											</div>
											<!-- /.col-lg-6 (nested) -->
										</form>




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
