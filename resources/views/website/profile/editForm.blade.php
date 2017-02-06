<section class="content">
     <div class="row">
          <div class="col-xs-12">
               <div class="box">
                    <div class="box-header">
                         <h3 class="box-title">Edit user {{ $user->name }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                         {!! Form::model($user, [ 'route' => 'user.updateProfile', 'method' => 'PATCH', 'class' => 'form-horizontal' ]) !!}

                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="name" class="col-md-4 control-label">Name</label>
                              <div class="col-md-6">
                                   {!! Form::text('name', isset($user) ? $user->name  : old('name'), ['id'=>'name', 'class'=>'form-control']) !!}

                                   @if ($errors->has('name'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                   @endif
                              </div>
                         </div>

                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                              <div class="col-md-6">
                                   {!! Form::email('email', isset($user) ? $user->email  : old('email'), ['id' => 'email', 'class' => 'form-control']) !!}

                                   @if ($errors->has('email'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                   @endif
                              </div>
                         </div>

                         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <label for="password" class="col-md-4 control-label">Password</label>

                              <div class="col-md-6">
                                   <input id="password" type="password" class="form-control" name="password" placeholder="Write Your New Password">

                                   @if ($errors->has('password'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                   @endif
                              </div>
                         </div>

                         <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                              <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                              <div class="col-md-6">
                                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                   @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                   @endif
                              </div>
                         </div>

                         <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                   <button type="submit" class="btn btn-info btn-block">
                                        <i class="fa fa-btn fa-edit"></i> Edit
                                   </button>
                              </div>
                         </div>

                         {!! Form::close() !!}

                    </div>
               </div>
          </div>
     </div>
</section>
