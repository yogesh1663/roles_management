<x-user.front-layout>
    <div class="container mt-5 w-50">
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <h1>Add user</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="fullname" name="name"
                                    {{ old('name') }} />
                                <x-user.error-message name="name" />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    {{ old('email') }} />
                                <x-user.error-message name="email" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" />
                                <x-user.error-message name="password" />
                            </div>
                            <div class="mb-3">
                                <label for="roles" class="form-label">Roles:</label>
                                <select class="form-select form-control" size="3" id="roles" multiple
                                    name="roles[]">
                                    <option value="" selected>Select roles</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user.front-layout>
