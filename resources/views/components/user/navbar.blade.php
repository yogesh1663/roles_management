<nav class="navbar navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand">Role Management CRUD</a>
    @auth
        <div class="d-inline">
            <a href="#" class="text-white link-secondary mr-3">{{ Auth::user()->name }}</a>
            <a href="{{ route('logout') }}" class="text-white link-secondary ml-2">Log out</a>
        </div>
    @else
        <div class="d-inline">
            <a href="{{ route('login') }}" class="text-white link-secondary mr-3">Login </a>
            <a href="{{ route('users.create') }}" class="text-white link-secondary ml-2"> Register</a>
        </div>
    @endauth
</nav>
