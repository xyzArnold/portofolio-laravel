@extends('dashboard.layout');

@section('content')
    <p class="card-title">Halaman</p>
    <div class="pb-3">
        <a href="{{ route('halaman.create') }}" class="btn btn-primary">
            <i class="mdi mdi-plus"></i> 
        </a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-blue">
            <thead>
                <tr>
                    <th class="col-1 text-center">#</th>
                    <th>Judul</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($data as $item)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>
                        <a href="{{ route('halaman.edit', $item->id) }}" class="btn btn-warning btn-sm">
                            <i class="mdi mdi-rename-box"></i>
                        </a>
                        <form action="{{ route('halaman.destroy', $item->id) }}" class="d-inline" method="POST">
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
