
  <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Admin Dashboard
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ Request::is('dashboard')? 'active':'' }} ">
          <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('categories')? 'active':'' }} ">
          <a class="nav-link" href="{{ url('categories') }}">
            <i class="material-icons">library_books</i>
            <p>Categories</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('add-Category')? 'active':'' }} ">
          <a class="nav-link" href="{{ url('add-Category') }}">
            <i class="material-icons">library_books</i>
            <p>Add Categories</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('products')? 'active':'' }} ">
          <a class="nav-link" href="{{ url('products') }}">
            <i class="material-icons">library_books</i>
            <p>Products</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('add-products')? 'active':'' }} ">
          <a class="nav-link" href="{{ url('add-products') }}">
            <i class="material-icons">library_books</i>
            <p>Add Products</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('variants')? 'active':'' }} ">
          <a class="nav-link" href="{{ url('variants') }}">
            <i class="material-icons">library_books</i>
            <p>Products variants</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('add-variants')? 'active':'' }} ">
          <a class="nav-link" href="{{ url('add-variants') }}">
            <i class="material-icons">library_books</i>
            <p>Add Products variants</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="material-icons">logout</i>
            <p>Log out</p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </ul>
    </div>
  </div>