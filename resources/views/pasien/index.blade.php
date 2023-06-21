@extends('main')
@section('content')
    <div class="container">
        <h1>Daftar Pasien</h1>
        <br>
        @if(Auth::user()->role == 'admin')
            <a href="/pasien/create" class="btn btn-primary">+ Tambah Pasien</a>
        @endif
        <hr>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Dokter</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $iteration = 1 @endphp
                @foreach ($pasiens as $item)
               
                <tr>
                    <td>{{ $iteration++ }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>
                        @if($item['jk'] == 'l')
                            Laki-laki 
                        @else
                            Perempuan
                        @endif
                    </td>
                    <td>{{ $item['tgl_lahir'] }}</td>
                    <td>{{ $item['alamat'] }}</td>
                    <td>{{ $item['telp'] }}</td>
                    <td>{{ $item->dokter->nama ?? 'Tidak tersedia' }}</td>
                    <td>
                        @if(Auth::user()->role == 'admin')
                        <a href="/pasien/edit/{{  $item['id']  }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/pasien" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <input type="hidden" value="{{ $item['id'] }}" name="id">
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                        @else
                            -
                        @endif
                    </td>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection