<div class="sidebar" data-color="blue">

    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        <li class="{{Request::is('dashboard')?'active':''}}">
          <a href="{{url('dashboard')}}">
            <p>Dashboard</p>
          </a>
        </li>
        <li class="{{Request::is('users')?'active':''}}">
          <a href="{{url('users')}}">
            <p>User</p>
          </a>
        </li>

        <li class="{{Request::is('create-users')?'active':''}}">
            <a href="{{url('create-users')}}">
              <p>Create User</p>
            </a>
        </li>

        <li class="{{Request::is('view-menu')?'active':''}}">
          <a href="{{url('view-menu')}}">
            <p>View Menu</p>
          </a>
      </li>

      <li class="{{Request::is('create-menu')?'active':''}}">
        <a href="{{url('create-menu')}}">
          <p>Create Menu</p>
        </a>
      </li>

      <li class="{{Request::is('view-report')?'active':''}}">
        <a href="{{url('view-report')}}">
          <p>View Reports</p>
        </a>
      </li>

      <li class="{{Request::is('create-report')?'active':''}}">
        <a href="{{url('create-report')}}">
          <p>Create reports</p>
        </a>
      </li>
      
      </ul>
    </div>
  </div>