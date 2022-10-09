@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Home</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="../img/cover1.jpg" width="500" alt="">
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{ $buku->Title }}</h2>
                            <table class="table table-borderless">
                                <tr>
                                    <td>Author</td>
                                    <td>:</td>
                                    <td>{{ $buku->Author }}</td>
                                </tr>
                                <tr>
                                    <td>Publisher</td>
                                    <td>:</td>
                                    <td>{{ $buku->Publisher }}</td>
                                </tr>
                                <tr>
                                    <td>Year</td>
                                    <td>:</td>
                                    <td>{{ $buku->Year }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td><span class="badge text-bg-success">{{ $buku->Status }}</span></td>
                                </tr>
                                <tr>
                                    <td>Sinopsis Buku</td>
                                </tr>
                                <tr>
                                    <td colspan="3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae eveniet quae sint ad odio earum veniam tempora, quia dolores voluptate corrupti cum, quibusdam ut qui vero amet animi, non accusantium sapiente eum laudantium omnis quod dignissimos. Quo ab facere libero atque quae non consequatur delectus ipsam eum sapiente maxime, consequuntur quasi recusandae excepturi ipsum eveniet facilis aperiam voluptatem cum temporibus ea, illo ad tempora? Praesentium, quidem doloremque quisquam quis possimus, commodi quam recusandae totam in autem cumque pariatur quaerat ad molestiae soluta accusantium. Error quas, consequatur molestiae voluptates dolorum labore? Velit ipsum dolores iure inventore modi repellendus quasi laborum voluptates.</td>
                                </tr>
                                <form action="" method="post"></form>
                                <tr>
                                    <td>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
