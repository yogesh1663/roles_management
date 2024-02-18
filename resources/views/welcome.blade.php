<x-user.front-layout>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <img src="{{ asset() }}" alt="image">
                <h3>Welcome, <span>{{ auth()->user()->name }}</span></h3>
            </div>
        </div>
    </div>
</x-user.front-layout>
