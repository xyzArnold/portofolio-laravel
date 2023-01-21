@extends('dashboard.layout');

@section('content')
    <p class="card-title">Education</p>
    <div class="pb-3">
        <a href="{{ route('education.create') }}" class="btn btn-primary">
            <i class="mdi mdi-plus"></i> 
        </a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-blue">
            <thead>
                <tr>
                    <th class="col-1 text-center">#</th>
                    <th>Universitas</th>
                    <th>Fakultas</th>
                    <th>Prodi</th>
                    <th>IPK</th>
                    <th>Tangal Mulai</th>
                    <th>Tangal Akhir</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($data as $item)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->info1 }}</td>
                    <td>{{ $item->info2 }}</td>
                    <td>{{ $item->info3 }}</td>
                    <td>{{ $item->tgl_mulai_indo }}</td>
                    <td>{{ $item->tgl_akhir_indo }}</td>
                    <td>
                        <a href="{{ route('education.edit', $item->id) }}" class="btn btn-warning btn-sm">
                            <i class="mdi mdi-rename-box"></i>
                        </a>
                        <form action="{{ route('education.destroy', $item->id) }}" class="d-inline" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" name="submit" onclick="return confirm('Apakah anda ingin menghapus?')" class="btn btn-danger btn-sm">
                                <i class="mdi mdi-delete-forever"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
@endsection
