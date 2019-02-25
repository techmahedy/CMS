    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/{{Auth::user()->image}}" alt="User Image" class="image-circle" style="width: 50px; height: 50px;">
        <div>
          <p class="app-sidebar__user-name" style="font-weight: bold; font-style: italic;">{{Auth::user()->name}}</p>
          <p class="app-sidebar__user-designation" style="font-weight: bold; font-style: italic;">Fullstack Developer</p>
        </div>
      </div>

      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{URL::to('/backend')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Category</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('category.create') }}"><i class="icon fa fa-circle-o"></i>Add Category</a></li>
            <li><a class="treeview-item" href="{{ route('category.index') }}" rel="noopener"><i class="icon fa fa-circle-o"></i>Category List</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Tag</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('tag.create') }}"><i class="icon fa fa-circle-o"></i>Add Tag</a></li>
            <li><a class="treeview-item" href="{{ route('tag.index') }}"><i class="icon fa fa-circle-o"></i>Tag List</a></li>
          </ul>
        </li>

          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Post</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('post.create') }}"><i class="icon fa fa-circle-o"></i>Add Post</a></li>
            <li><a class="treeview-item" href="{{ route('post.index') }}"><i class="icon fa fa-circle-o"></i>Post List</a></li>
          </ul>
        </li>

         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">User</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('admin.create') }}"><i class="icon fa fa-circle-o"></i>Add User</a></li>
            <li><a class="treeview-item" href="{{ route('admin.index') }}"><i class="icon fa fa-circle-o"></i>User List</a></li>
          </ul>
        </li>
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-youtube"></i><span class="app-menu__label">Youtube</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('youtube.create') }}"><i class="icon fa fa-circle-o"></i>Add Video</a></li>
             <li><a class="treeview-item" href="{{ route('youtube.index') }}"><i class="icon fa fa-circle-o"></i>Video List</a></li>
          </ul>
        </li>

         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Email</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
             <li><a class="treeview-item" href="{{ route('email.index') }}"><i class="icon fa fa-circle-o"></i>Email List</a></li>
          </ul>
        </li>

      </ul>
    </aside>