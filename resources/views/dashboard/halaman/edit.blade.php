@extends('dashboard.layout');

@section('content')
    <div class="pb-3">
        <a href="{{ route('halaman.index') }}" class="btn btn-warning">
            <i class="mdi mdi-reply"></i>
        </a>
    </div>
    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Update Page</h4>
                    <form action="{{ route('halaman.update', $data->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" value="{{ $data->judul }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                            <div class="col-sm-10">
                                <textarea name="isi" id="isi" cols="30" rows="10" class="form-control summernote" placeholder="Isian">{{ $data->isi }}</textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">
                            <i class="mdi mdi-file-check btn-icon-prepend"></i> Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
@endsection