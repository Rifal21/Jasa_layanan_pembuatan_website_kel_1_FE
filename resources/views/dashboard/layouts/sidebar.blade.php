<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
          <span data-feather="home" class="align-text-bottom"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/roleuser*') ? 'active' : '' }}" href="/dashboard/roleuser">
          <span data-feather="sliders" class="align-text-bottom"></span>
          Role Users
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/template*') ? 'active' : '' }}" href="/dashboard/template">
              <span data-feather="monitor" class="align-text-bottom"></span>
              Template
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
              <span data-feather="grid" class="align-text-bottom"></span>
              Portfolio
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="/dashboard/users">
              <span data-feather="users" class="align-text-bottom"></span>
              Users
        </a>
      </li>
    </ul> 
  </div>
</nav>