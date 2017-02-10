<div class="navbar-custom-menu">
     <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">4</span>
               </a>
               <ul class="dropdown-menu">
                    <li class="header">You have 4 messages</li>
                    <li>
                         <!-- inner menu: contains the actual data -->
                         <ul class="menu">
                              <li><!-- start message -->
                                   <a href="#">
                                        <div class="pull-left">
                                             <img src="{{asset('src/backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                             Support Team
                                             <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                   </a>
                              </li>
                              <!-- end message -->
                              <li>
                                   <a href="#">
                                        <div class="pull-left">
                                             <img src="{{asset('src/backend/dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                             AdminLTE Design Team
                                             <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                             </`h4>
                                             <p>Why not buy a new awesome theme?</p>
                                        </a>
                                   </li>
                                   <li>
                                        <a href="#">
                                             <div class="pull-left">
                                                  <img src="{{asset('src/backend/dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">
                                             </div>
                                             <h4>
                                                  Developers
                                                  <small><i class="fa fa-clock-o"></i> Today</small>
                                             </h4>
                                             <p>Why not buy a new awesome theme?</p>
                                        </a>
                                   </li>
                                   <li>
                                        <a href="#">
                                             <div class="pull-left">
                                                  <img src="{{asset('src/backend/dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
                                             </div>
                                             <h4>
                                                  Sales Department
                                                  <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                             </h4>
                                             <p>Why not buy a new awesome theme?</p>
                                        </a>
                                   </li>
                                   <li>
                                        <a href="#">
                                             <div class="pull-left">
                                                  <img src="{{asset('src/backend/dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">
                                             </div>
                                             <h4>
                                                  Reviewers
                                                  <small><i class="fa fa-clock-o"></i> 2 days</small>
                                             </h4>
                                             <p>Why not buy a new awesome theme?</p>
                                        </a>
                                   </li>
                              </ul>
                         </li>
                         <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
               </li>
               <!-- Notifications: style can be found in dropdown.less -->
          </li>
          <li class="dropdown notifications-menu">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">{{ countAllBulldingAppendToStatus(0) }}</span>
               </a>
               <ul class="dropdown-menu">
                    <li class="header">You have {{ countAllBulldingAppendToStatus(0) }} Waiting Bullding</li>
                    <li>
                         <!-- inner menu: contains the actual data -->
                         <ul class="menu">
                              @foreach (\App\Bullding::where('status', 0)->get() as $waiting)
                                   <li>
                                        <a href="{{ route("admin.bulldings.edit", ['id' => $waiting->id]) }}" class="pull-left">
                                             {{ $waiting->name }}
                                        </a>
                                        <a href="{{ route('admin.bulldings.changeStatus', ['id' => $waiting->id, 'status' => 1]) }}" class="pull-right label label-warning" style="padding: 7px; margin: 10px;">
                                             Approve
                                        </a>
                                        <div class="clearfix"></div>
                                   </li>
                              @endforeach
                         </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
               </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag-o"></i>
                    <span class="label label-danger">{{ countUnReadMessage() }}</span>
               </a>
               <ul class="dropdown-menu">
                    <li class="header">You have {{ countUnReadMessage() }} tasks</li>
                    <li>
                         <!-- inner menu: contains the actual data -->
                         <ul class="menu">
                              <!-- Task item -->
                              @foreach (unReadMessage() as $valueMessage)
                                   <li>
                                        <a href="{{ route('admin.contacts.edit', ['id' => $valueMessage->id]) }}">
                                             <h3>
                                                  {{ $valueMessage->contactName }}
                                                  <small class="pull-right">{{ $valueMessage->created_at }}</small>
                                             </h3>
                                        </a>
                                   </li>
                              @endforeach
                              <!-- end task item -->
                         </ul>
                    </li>
                    <li class="footer">
                         <a href="{{ route('admin.contacts.index') }}">View all tasks</a>
                    </li>
               </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('src/backend/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
               </a>
               <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                         <img src="{{asset('src/backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                         <p>
                              {{ Auth::user()->name }} - Web Developer
                              <small>Member since Nov. 2012</small>
                         </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                         <div class="row">
                              <div class="col-xs-4 text-center">
                                   <a href="#">Followers</a>
                              </div>
                              <div class="col-xs-4 text-center">
                                   <a href="#">Sales</a>
                              </div>
                              <div class="col-xs-4 text-center">
                                   <a href="#">Friends</a>
                              </div>
                         </div>
                         <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                         <div class="pull-left">
                              <a href="#" class="btn btn-default btn-flat">Profile</a>
                         </div>
                         <div class="pull-right">
                              <a href="#" class="btn btn-default btn-flat">Sign out</a>
                         </div>
                    </li>
               </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
               <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
     </ul>
</div>