<x-user.front-layout>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ asset('img.jpg') }}" alt="image" width="300" class="mb-4">
                    <h3>Welcome, <span>{{ auth()->user()->name }}</span></h3>
                </div>
            </div>
        </div>
    </div>
</x-user.front-layout>
