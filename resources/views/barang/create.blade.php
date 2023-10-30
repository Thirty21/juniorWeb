{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Tambah Data</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form action="{{url('barang')}}" method="POST" class="form-control">
                                @csrf
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">id </label>
                                        <input class="form-control" type="text" value="" name="supdier_id">
                                        @foreach ($errors->get('supdier_id') as $msg)
                                            <p class="text-denger">{{$msg}}</p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">nama mapel</label>
                                        <input class="form-control" type="text" value="" name="kategori">
                                        @foreach ($errors->get('kategori') as $msg)
                                        <p class="text-denger">{{$msg}}</p>
                                    @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">kode juran</label>
                                        <input class="form-control" type="text" name="nama_barang">
                                        @foreach ($errors->get('nama_barang') as $msg)
                                        <p class="text-denger">{{$msg}}</p>
                                    @endforeach
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">harga</label>
                                        <input class="form-control" type="text" name="harga">
                                        @foreach ($errors->get('harga') as $msg)
                                        <p class="text-denger">{{$msg}}</p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">stok</label>
                                        <input class="form-control" type="text" name="stok">
                                        @foreach ($errors->get('stok') as $msg)
                                        <p class="text-denger">{{$msg}}</p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">supplier</label>
                                        <input class="form-control" type="text" name="supplier">
                                        @foreach ($errors->get('supplier') as $msg)
                                        <p class="text-denger">{{$msg}}</p>
                                        @endforeach
                                    </div>
                                </div>

                                <button class="btn btn-info">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html> --}}

@