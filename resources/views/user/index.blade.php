<h1>Users</h1>

<a href="{{route('users.create')}}">Create User</a>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>#{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>akce</td>
        </tr>
    @endforeach
    </tbody>
</table>
