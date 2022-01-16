@php
function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
}
@endphp
<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">FAEYZA</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    
    <ul class="sidebar-menu">
    <li class="{{checkRouteActive('admin/dashboard')}}"><a class="nav-link" href={{ url("dashboard/{status}") }}"><i class="far fa-square"></i> <span>Dashboard</span></a></li>
    <li class="{{checkRouteActive('admin/produk')}}"><a class="nav-link" href="{{url('admin/produk')}}"><i class="far fa-square"></i> <span>Produk</span></a></li>
   
    <li class="{{checkRouteActive('admin/user')}}"><a class="nav-link" href="{{url('admin/user')}}"><i class="far fa-square"></i> <span>User</span></a></li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                <span>Profile</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{url('login')}}">Log In</a></li>
                <li><a class="nav-link" href="{{url('register')}}">Register</a></li>
            </ul>
        </li>
        <li class="{{checkRouteActive('shop')}}"><a class="nav-link" href="{{url('shop')}}"><i class="fas fa-store"></i> <span>FAEYZA-SHOP</span></a></li>
    </ul>
</aside>
