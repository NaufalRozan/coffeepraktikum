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
                <h1>Data Pembayaran</h1>
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
                            <th>ID Pembayaran</th>
                            <th>Jumlah Pembayaran</th>
                            <th>Tanggal Pesanan</th>
                            <th>Jenis Pembayaran</th>
                            <th>Total Harga</th>
                            <th>ID Pelanggan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($pembayaran as $pembayaran)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pembayaran->id_pembayaran }}</td>
                            <td>{{ $pembayaran->Jml_Pembayaran }}</td>
                            <td>{{ $pembayaran->Tgl_Pesananan }}</td>
                            <td>{{ $pembayaran->Jenis_Pembayaran }}</td>
                            <td>{{ $pembayaran->Total_Harga }}</td>
                            <td>{{ $pembayaran->id }}</td>
                            <td>
                                <a href="/pembayaran/{{$pembayaran->id_pembayaran}}/edit" class="btn btn-warning bgn-sm">Edit</a>
                                <a href="/pembayaran/delete/{{$pembayaran->id_pembayaran}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau dihapus?')">Delete</a>
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
                            <form action="{{ route('add.pby') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID Pembayaran</label>
                                    <input name="id_pembayaran" class="form-control" id="exampleFormControlTextarea1" rows="1"></input>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jumlah Pembayaran</label>
                                    <input name="Jml_Pembayaran" type="number" class="form-control" id="exampleFormControlTextarea1" rows="2"></input>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Tanggal Pesanan</label>
                                    <input name="Tgl_Pesananan" type="date" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Jenis Pembayaran</label>
                                    <input name="Jenis_Pembayaran" type="text" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Total Harga</label>
                                    <input name="Total_Harga" type="number" class="form-control" id="exampleFormControlTextarea1" rows="5"></input>
                                </div>
                                <div class="form-group">
                                    <label for="position-option">ID Pelanggan</label>
                                    <input name="id" type="number" class="form-control" id="exampleFormControlTextarea1" rows="6"></input>
                                    </select>
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