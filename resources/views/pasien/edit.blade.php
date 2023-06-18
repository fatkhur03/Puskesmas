@extends('main')
@section('content')
    <div class="container">
        <h1 class="text-center">Edit Pasien</h1>
        <br>
        <a href="/pasien" class="btn btn-primary">
            < Back</a>
                <hr>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Ada kesalahan input data! <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/pasien/{{ $pasien->id }}" method="post" class="mx-2">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Pasien" value="{{ $pasien->nama }}">
                    </div>

                    <div class="form-group mt-3">
                        <label for="jk">Jenis Kelamin</label>
                        <select class="form-control" name="jk">
                            <option value="L" {{ $pasien->jk == 'l' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ $pasien->jk == 'p' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" value="{{ $pasien->tgl_lahir }}">
                    </div>

                    <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" >{{ $pasien->alamat }}</textarea>
                    </div>

                    <div class="form-group mt-3">
                        <label for="telp">No. Telp</label>
                        <input type="text" class="form-control" name="telp" placeholder="Masukkan No. Telp" value="{{ $pasien->telp }}">
                    </div>

                    <div class="form-group mt-3">
                        <label for="dokter_id">Dokter</label>
                        <select name="dokter_id" id="dokter_id" class="form-control">
                            @foreach ($dokters as $dokter)
                                <option value="{{ $dokter->id }}" {{ $dokter->id ==$pasien->dokter->id ? 'selected' : '' }}>{{ $dokter->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

    </div>
@endsection