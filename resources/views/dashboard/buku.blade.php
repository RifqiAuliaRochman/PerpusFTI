@extends('dashboard/layouts/main')


@section('container')
<div class="col-md-10">
    <table class="table table-striped table-lg mt-3">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Publisher</th>
            <th scope="col">Category</th>
            <th scope="col">Year</th>
            <th scope="col">Status</th>
            <th scope="col">Tipe</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($bukus as $buku)    
            <tr>
                <td>{{ $buku->ID }}</td>
                <td>{{ $buku->Title }}</td>
                <td>{{ $buku->Author }}</td>
                <td>{{ $buku->Publisher }}</td>
                <td>{{ $buku->Category }}</td>
                <td>{{ $buku->Year }}</td>
                <td>{{ $buku->Status }}</td>
                <td>{{ $buku->Type }}</td>
                <td>
                    <form action="" method="POST" class="d-inline">
                    @csrf
                    @method('delete')

                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></button>

                    <button class="badge bg-warning border-0" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-pen-to-square"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection