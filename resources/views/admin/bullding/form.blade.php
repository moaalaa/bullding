<div class="box-body">
	  <div class="panel panel-primary">
		  <div class="panel-heading">Register</div>
		  <div class="panel-body">
			<form class="form-horizontal" role="form" method="POST" action="{{ route('admin.bulldings.store') }}">
	         {{ csrf_field() }}
		    {{-- bullding_name --}}
	         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	             <label for="name" class="col-md-4 control-label">bullding name</label>

	             <div class="col-md-6">
	                 <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

	                 @if ($errors->has('name'))
	                     <span class="help-block">
	                         <strong>{{ $errors->first('name') }}</strong>
	                     </span>
	                 @endif
	             </div>
	         </div>
		    {{-- bullding_rooms --}}
		    <div class="form-group{{ $errors->has('rooms') ? ' has-error' : '' }}">
			    <label for="rooms" class="col-md-4 control-label">bullding rooms</label>

			    <div class="col-md-6">
				    <input id="rooms" type="text" class="form-control" name="rooms" value="{{ old('rooms') }}">

				    @if ($errors->has('rooms'))
					    <span class="help-block">
						    <strong>{{ $errors->first('rooms') }}</strong>
					    </span>
				    @endif
			    </div>
		    </div>
		    {{-- bullding_price --}}
		    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
	             <label for="price" class="col-md-4 control-label">bullding price</label>

	             <div class="col-md-6">
	                 <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}">

	                 @if ($errors->has('price'))
	                     <span class="help-block">
	                         <strong>{{ $errors->first('price') }}</strong>
	                     </span>
	                 @endif
	             </div>
	         </div>
		    {{-- bullding_rent --}}
		    <div class="form-group{{ $errors->has('rent') ? ' has-error' : '' }}">
	             <label for="rent" class="col-md-4 control-label">bullding rent</label>

	             <div class="col-md-6">
				   {!! Form::select('rent', rent(), null, ['class' => 'form-control', 'id' => 'rent']); !!}
	                 @if ($errors->has('rent'))
	                     <span class="help-block">
	                         <strong>{{ $errors->first('rent') }}</strong>
	                     </span>
	                 @endif
	             </div>
	         </div>
		    {{-- bullding_square --}}
		    <div class="form-group{{ $errors->has('square') ? ' has-error' : '' }}">
	             <label for="square" class="col-md-4 control-label">bullding square</label>

	             <div class="col-md-6">
	                 <input id="square" type="text" class="form-control" name="square" value="{{ old('square') }}">

	                 @if ($errors->has('square'))
	                     <span class="help-block">
	                         <strong>{{ $errors->first('square') }}</strong>
	                     </span>
	                 @endif
	             </div>
	         </div>
		    {{-- bullding_type --}}
		    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
	             <label for="type" class="col-md-4 control-label">bullding type</label>

	             <div class="col-md-6">
				  {!! Form::select('type', type(), null, ['class' => 'form-control', 'id' => 'type']); !!}
	                 @if ($errors->has('type'))
	                     <span class="help-block">
	                         <strong>{{ $errors->first('type') }}</strong>
	                     </span>
	                 @endif
	             </div>
	         </div>
		    {{-- bullding_status --}}
		    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
			   <label for="status" class="col-md-4 control-label">bullding status</label>

			   <div class="col-md-6">
				  {!! Form::select('status', status(), null, ['class' => 'form-control', 'id' => 'status']); !!}
				  @if ($errors->has('status'))
					 <span class="help-block">
						<strong>{{ $errors->first('status') }}</strong>
					 </span>
				  @endif
			   </div>
		    </div>
		    {{-- bullding_meta --}}
		    <div class="form-group{{ $errors->has('meta') ? ' has-error' : '' }}">
	             <label for="meta" class="col-md-4 control-label">bullding meta</label>

	             <div class="col-md-6">
	                 <input id="meta" type="text" class="form-control" name="meta" value="{{ old('meta') }}">

	                 @if ($errors->has('meta'))
	                     <span class="help-block">
	                         <strong>{{ $errors->first('meta') }}</strong>
	                     </span>
	                 @endif
	             </div>
	         </div>
		    {{-- bullding_small_disc --}}
		    <div class="form-group{{ $errors->has('small_dis') ? ' has-error' : '' }}">
	             <label for="small_dis" class="col-md-4 control-label">bullding  search engins discription</label>

	             <div class="col-md-6">
	                 <textarea rows="4" id="small_dis" class="form-control" name="small_dis">{{ old('small_dis') }}</textarea>

	                 @if ($errors->has('small_dis'))
	                     <span class="help-block">
	                         <strong>{{ $errors->first('small_dis') }}</strong>
	                     </span>
	                 @endif
				  <br>
				  <div class="alert alert-warning">Cannot enter more Than 160 Characters by google calibration</div>
	             </div>
	         </div>
		    {{-- bullding_langtuide --}}
		    <div class="form-group{{ $errors->has('langtuide') ? ' has-error' : '' }}">
	             <label for="langtuide" class="col-md-4 control-label">bullding langtuide</label>

	             <div class="col-md-6">
	                 <input id="langtuide" type="text" class="form-control" name="langtuide" value="{{ old('langtuide') }}">

	                 @if ($errors->has('langtuide'))
	                     <span class="help-block">
	                         <strong>{{ $errors->first('langtuide') }}</strong>
	                     </span>
	                 @endif
	             </div>
	         </div>
		    {{-- bullding_latitiute --}}
		    <div class="form-group{{ $errors->has('latitiute') ? ' has-error' : '' }}">
	             <label for="latitiute" class="col-md-4 control-label">bullding latitiute</label>

	             <div class="col-md-6">
	                 <input id="latitiute" type="text" class="form-control" name="latitiute" value="{{ old('latitiute') }}">

	                 @if ($errors->has('latitiute'))
	                     <span class="help-block">
	                         <strong>{{ $errors->first('latitiute') }}</strong>
	                     </span>
	                 @endif
	             </div>
	         </div>
		    {{-- bullding_large_disc --}}
		    <div class="form-group{{ $errors->has('decription') ? ' has-error' : '' }}">
	             <label for="decription" class="col-md-4 control-label">bullding  decription</label>

	             <div class="col-md-6">
	                 <textarea rows="5" id="decription" class="form-control" name="decription">{{ old('decription') }}</textarea>

	                 @if ($errors->has('decription'))
	                     <span class="help-block">
	                         <strong>{{ $errors->first('decription') }}</strong>
	                     </span>
	                 @endif
	             </div>
	         </div>

	         <div class="form-group">
	             <div class="col-md-6 col-md-offset-4">
	                 <button type="submit" class="btn btn-primary">
	                     <i class="fa fa-btn fa-building"></i> Add New Bullding
	                 </button>
	             </div>
	         </div>
	    </form>
    </div>
</div>
