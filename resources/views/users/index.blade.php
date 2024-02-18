<x-user.front-layout>
    <div class="container">
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
                            <a href="" class="btn btn-sm btn-secondary inline-block">View</a>
                            <a href="" class="btn btn-sm btn-success inline-block">Edit</a>
                            <a href="" class="btn btn-sm btn-danger inline-block">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-user.front-layout>
