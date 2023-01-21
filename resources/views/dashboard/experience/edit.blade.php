@extends('dashboard.layout');

@section('content')
    <div class="pb-3">
        <a href="{{ route('experience.index') }}" class="btn btn-warning">
            <i class="mdi mdi-reply"></i>
        </a>
    </div>
    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Edit Experience</h4>
                    <form action="{{ route('experience.update', $data->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="posisi" class="col-sm-2 col-form-label">Posisi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="posisi" placeholder="Posisi" name="judul" value="{{ $data->judul }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="info1" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="info1" placeholder="Nama Perusahaan" name="info1" value="{{ $data->info1 }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="{{ $data->tgl_mulai }}">
                            </div>
                            <label for="tgl_akhir" class="col-sm-2 col-form-label">Tanggal Akhir</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" value="{{ $data->tgl_akhir }}"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isi" class="col-sm-2 col-form-label">Isian</label>
                            <div class="col-sm-10">
                                <textarea name="isi" id="isi" cols="30" rows="10" class="form-control summernote" placeholder="Isian">{{ $data->isi }}</textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-icon-text">
                            <i class="mdi mdi-file-check btn-icon-prepend"></i> Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
@endsection