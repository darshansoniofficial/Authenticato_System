@extends('base')

@section('Content')
    <h1 class="container text-align-center mt-4" style="color: rgb(65, 184, 65)">Congratulations!! You Are Logged In</h1>
    <h2 class="container mt-4">List Of Users</h2>

    <div class="list_users container">

        <table>
            <tr>
                <th>id </th>
                <th>User </th>
                <th>email</th>

            </tr>
            @foreach ($user as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>

                </tr>
            @endforeach
        </table>





    </div>
@endsection
