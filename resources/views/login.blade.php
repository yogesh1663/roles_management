<x-user.front-layout>
    <div class="container mt-5 w-50">
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <h1>Login</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    {{ old('email') }} />
                                <x-user.error-message name="email" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" />
                            </div>

                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user.front-layout>
