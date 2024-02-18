<nav class="navbar navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand">Role Management CRUD</a>
    @auth
        <div class="d-inline">
            <a href="#" class="text-white link-secondary">{{ Auth::user()->name }}</a>
            <a href="{{ route('logout') }}" class="text-white link-secondary">Log out</a>
        </div>
    @else
        <div class="d-inline">
            <div class="d-inline">
                <a href="{{ route('login') }}" class="text-white link-secondary">Login</a>
                <a href="{{ route('users.create') }}" class="text-white link-secondary">Register</a>
            </div>
        </div>
    @endauth
</nav>
