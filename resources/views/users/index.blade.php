<x-user.front-layout>
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-3">
            <h4 class="text-bold">All users</h4>
            <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">Add user</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">SN.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Roles</th>
                    <th scope="col"> Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                {{ $role->name }}{{ !$loop->last ? ',' : '' }}
                            @endforeach
                        </td>
                        <td class="text-center">
                            <a href="" class="btn btn-sm btn-secondary">View</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-user.front-layout>
