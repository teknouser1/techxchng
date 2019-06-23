<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
	<!-- Sidebar mobile toggler -->
	<div class="sidebar-mobile-toggler text-center">
		<a href="#" class="sidebar-mobile-main-toggle"><i class="icon-arrow-left8"></i></a>Navigation
		<a href="#" class="sidebar-mobile-expand"><i class="icon-screen-full"></i><i class="icon-screen-normal"></i></a>
	</div>
	<!-- /sidebar mobile toggler -->
	
	<div class="sidebar-content">
		<!-- User menu -->
		<div class="sidebar-user">
			<div class="card-body">
				<div class="media">
					<div class="mr-3">
						<a href="#"><img src="{{asset('global/images/placeholders/placeholder.jpg')}}" width="38" height="38" class="rounded-circle" alt=""></a>
					</div>

					<div class="media-body">
						<div class="media-title font-weight-semibold">{{auth()->user()->name}}</div>
					</div>

					<div class="ml-3 align-self-center">
						<a href="#" class="text-white"><i class="icon-cog3"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- /user menu -->
		<!-- Main navigation -->
		<div class="card card-sidebar-mobile">
			<ul class="nav nav-sidebar" data-nav-type="accordion">
				<!-- Main -->
				<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
				<li class="nav-item">
					<a href="{{route('admin.dashboard')}}" class="nav-link {{ classActivePath(['dashboard']) }}">
						<i class="icon-home4"></i>
						<span>
							Dashboard
						</span>
					</a>
				</li>
				@can('browse-admin')
				<li class="nav-item nav-item-submenu {{classMenuOpenPath(['admins'])}}">
					<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Admin Management</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Admin Management">
						@can('browse-admin')
						<li class="nav-item"><a href="{{route('admin.admins.index')}}" class="nav-link {{classActivePath(['administrator/admins'])}}">All admin</a></li>
						@endcan

						@can('add-admin')
						<li class="nav-item"><a href="{{route('admin.admins.create')}}" class="nav-link {{classActivePath(['administrator/admins/create'])}}">Add admin</a></li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('browse-category')
				<li class="nav-item nav-item-submenu {{classMenuOpenPath(['category'])}}">
					<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Category Management</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Category Management">
						@can('browse-category')
						<li class="nav-item"><a href="{{route('admin.category.index')}}" class="nav-link {{classActivePath(['administrator/category'])}}">All Category</a></li>
						@endcan
						@can('add-category')
						<li class="nav-item"><a href="{{route('admin.category.create')}}" class="nav-link {{classActivePath(['administrator/category/create'])}}">Add Category</a></li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('browse-keyword')
				<li class="nav-item nav-item-submenu {{classMenuOpenPath(['keywords'])}}">
					<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Keyword Management</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Keyword Management">
						@can('browse-keyword')
						<li class="nav-item"><a href="{{route('admin.keywords.index')}}" class="nav-link {{classActivePath(['administrator/keywords'])}}">All keywords</a></li>
						@endcan
						@can('add-keyword')
						<li class="nav-item"><a href="{{route('admin.keywords.create')}}" class="nav-link {{classActivePath(['administrator/keywords/create'])}}">Add keyword</a></li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('browse-service')
				<li class="nav-item nav-item-submenu {{classMenuOpenPath(['services'])}}">
					<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Service Management</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Service Management">
						@can('browse-service')
						<li class="nav-item"><a href="{{route('admin.services.index')}}" class="nav-link {{classActivePath(['administrator/services'])}}">All services</a></li>
						@endcan
						@can('add-service')
						<li class="nav-item"><a href="{{route('admin.services.create')}}" class="nav-link {{classActivePath(['administrator/services/create'])}}">Add service</a></li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('browse-role')
				<li class="nav-item nav-item-submenu {{classMenuOpenPath(['roles'])}}">
					<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Role Management</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Role Management">
						@can('browse-role')
						<li class="nav-item"><a href="{{route('admin.role.index')}}" class="nav-link {{classActivePath(['administrator/roles'])}}">All roles</a></li>
						@endcan
						@can('add-role')
						<li class="nav-item"><a href="{{route('admin.role.create')}}" class="nav-link {{classActivePath(['administrator/roles/create'])}}">Add role</a></li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('browse-industry')
				<li class="nav-item nav-item-submenu {{classMenuOpenPath(['industries'])}}">
					<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Industry Management</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Corporate sellers">
						@can('browse-industry')
						<li class="nav-item"><a href="{{route('admin.industries.index')}}" class="nav-link {{classActivePath(['administrator/industries'])}}">All Industry</a></li>
						@endcan
						@can('add-industry')
						<li class="nav-item"><a href="{{route('admin.industries.create')}}" class="nav-link {{classActivePath(['administrator/industries/create'])}}">Add Industry</a></li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('browse-corporate-seller')
				<li class="nav-item nav-item-submenu {{classMenuOpenPath(['corporate-sellers'])}}">
					<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Corporate sellers</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Corporate sellers">
						@can('browse-corporate-seller')
						<li class="nav-item"><a href="{{route('admin.corporate-sellers.index')}}" class="nav-link {{classActivePath(['administrator/corporate-sellers'])}}">All Corporate sellers</a></li>
						@endcan
						@can('add-corporate-seller')
						<li class="nav-item"><a href="{{route('admin.corporate-sellers.create')}}" class="nav-link {{classActivePath(['administrator/corporate-sellers/create'])}}">Add Corporate seller</a></li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('browse-corporate-buyer')
				<li class="nav-item nav-item-submenu {{classMenuOpenPath(['corporate-buyers'])}}">
					<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Corporate buyers</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Corporate buyers">
						@can('browse-corporate-buyer')
						<li class="nav-item"><a href="{{route('admin.corporate-buyers.index')}}" class="nav-link {{classActivePath(['administrator/corporate-buyers'])}}">All Corporate buyers</a></li>
						@endcan
						@can('add-corporate-buyer')
						<li class="nav-item"><a href="{{route('admin.corporate-buyers.create')}}" class="nav-link {{classActivePath(['administrator/corporate-buyers/create'])}}">Add Corporate buyer</a></li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('browse-seller')
				<li class="nav-item nav-item-submenu {{classMenuOpenPath(['sellers'])}}">
					<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Seller Management</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Seller Management">
						<li class="nav-item"><a href="{{route('admin.sellers.index')}}" class="nav-link {{classActivePath(['administrator/sellers'])}}">All sellers</a></li>
					</ul>
				</li>
				@endcan
				@can('browse-buyer')
				<li class="nav-item nav-item-submenu {{classMenuOpenPath(['buyers'])}}">
					<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Buyer Management</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Buyer Management">
						<li class="nav-item"><a href="{{route('admin.buyers.index')}}" class="nav-link {{classActivePath(['administrator/buyers'])}}">All buyers</a></li>
					</ul>
				</li>
				@endcan
				@if(auth()->user()->hasRole('super_admin'))
				<li class="nav-item nav-item-submenu {{classMenuOpenPath(['settings'])}}">
					<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Settings</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Settings">
						<li class="nav-item"><a href="{{route('admin.settings.index')}}" class="nav-link {{classActivePath(['administrator/settings'])}}">Landing Page</a></li>
					</ul>
				</li>
				@endif
			</ul>
		</div>
	</div>
</div>
<!-- /Main sidebar -->