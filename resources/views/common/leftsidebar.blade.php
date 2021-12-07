<div class="left-side-bar">
		<div class="brand-logo">
			<a href="{{route('home')}}">
			<img src="{{asset('Admin/vendors/images/LOADER white-8.png')}}" alt="" class="dark-logo" style="height:60px;">
				<img src="{{asset('Admin/vendors/images/LOADER white-8.png')}}" alt="" class="light-logo" style="height:60px;">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="{{route('admin.dashboard')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-beach-house"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					
					<li class="dropdown">
						<a href="{{route('register')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-box-1"></span><span class="mtext">Registration Form</span>
						</a>
					
					</li>
					<li>
						<a href="{{route('show')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-list"></span><span class="mtext">Family List</span>
						</a>
					</li>
					
				</ul>
			</div>
		</div>
	</div>