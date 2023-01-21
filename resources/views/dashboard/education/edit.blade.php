@extends('dashboard.layout');

@section('content')
    <div class="pb-3">
        <a href="{{ route('education.index') }}" class="btn btn-warning">
            <i class="mdi mdi-reply"></i>
        </a>
    </div>
    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Edit Education</h4>
                    <form action="{{ route('education.update', $data->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Universitas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" placeholder="Nama Universitas" name="judul" value="{{ $data->judul }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="info1" class="col-sm-2 col-form-label">Fakultas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="info1" placeholder="Nama Fakultas" name="info1" value="{{ $data->info1 }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="info2" class="col-sm-2 col-form-label">Prodi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="info2" placeholder="Nama Prodi" name="info2" value="{{ $data->info2 }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="info3" class="col-sm-2 col-form-label">IPK</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="info3" placeholder="IPK" name="info3" value="{{ $data->info3 }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tgl_mulai" placeholder="dd/mm/yy" name="tgl_mulai" value="{{ $data->tgl_mulai }}">
                            </div>
                            <label for="tgl_akhir" class="col-sm-2 col-form-label">Tanggal Akhir</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tgl_akhir" placeholder="dd/mm/yy" name="tgl_akhir" value="{{ $data->tgl_akhir }}">
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