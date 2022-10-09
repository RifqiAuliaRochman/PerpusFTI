@extends('dashboard/layouts/main')


@section('container')
<div class="col-md-5">
    <table class="table table-striped table-lg mt-3">
        <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)    
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="{{ url('dashboard/user') }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')

                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></button>
                    </form>

                    <button class="badge bg-warning border-0" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-pen-to-square"></i></button>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection