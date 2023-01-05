@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<!-- <html> -->

<head>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

<body>
    <div class="container">
        <div class="container mt-3">

            @if (session('Sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('Sukses') }}
            </div>
            @endif

            <div class="row">
                <h1>Data Pemesanan</h1>
                <table class="table">

                    <div class="col-11 my-4" align="right">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                            Tambah Data
                        </button>
                    </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>ID Nota</th>
                            <th>Jumlah Pesanan</th>
                            <th>Harga Menu</th>
                            <th>Alamat Pelanggan</th>
                            <th>Tanggal Pesanan</th>
                            <th>ID Pelanggan</th>
                            <th>ID Menu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($pemesanan as $pemesanan)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pemesanan->id_nota }}</td>
                            <td>{{ $pemesanan->Jml_Pesanan }}</td>
                            <td>{{ $pemesanan->Harga_Menu }}</td>
                            <td>{{ $pemesanan->Alamat_Pelanggan }}</td>
                            <td>{{ $pemesanan->Tgl_Pesanan }}</td>
                            <td>{{ $pemesanan->id }}</td>
                            <td>{{ $pemesanan->id_menu }}</td>
                            <td>
                                <a href="/pemesanan/{{$pemesanan->id_nota}}/edit" class="btn btn-warning bgn-sm">Edit</a>
                                <a href="/pemesanan/delete/{{$pemesanan->id_nota}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau dihapus?')">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            
            <div class="modal fade" id="exampleModal" tabindex="-1" arialabelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelanggan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('add.pms') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID Nota</label>
                                    <input name="id_nota" type="number" class="form-control" id="exampleFormControlTextarea1" rows="1"></input>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jumlah Pesanan</label>
                                    <input name="Jml_Pesanan" type="number" class="form-control" id="exampleFormControlTextarea1" rows="2"></input>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Harga Menu</label>
                                    <input name="Harga_Menu" type="number" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Alamat Pelanggan</label>
                                    <input name="Alamat_Pelanggan" type="text" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Pesanan</label>
                                    <input name="Tgl_Pesanan" type="date" class="form-control" id="exampleFormControlTextarea1" rows="5"></input>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID Pelanggan</label>
                                    <input name="id" class="form-control" id="exampleFormControlTextarea1" rows="6"></input>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID Menu</label>
                                    <input name="id_menu" class="form-control" id="exampleFormControlTextarea1" rows="7"></input>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>

</body>

</html>
@endsection