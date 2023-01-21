@extends('dashboard.layout');

@section('content')
    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-5">
                        <h3 class="card-title">Profile</h3>
                    </div>
                    <div class="col-5">
                        <h3 class="card-title">Social Media</h3>
                    </div>
                </div>
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-between">
                        <div class="col-5">
                            @if (get_meta_value('_foto'))
                                <img style="max-width:100px;max-height:100px" class="img-circle" src="{{ asset('foto') . "/" . get_meta_value('_foto') }}" alt="">
                            @endif
                            <div class="mb-3">
                                <label for="_foto" class="form-label">Foto</label>
                                <input type="file" class="form-control form-control-sm" name="_foto" id="_foto">
                            </div>
                            <div class="mb-3">
                                <label for="_kota" class="form-label">Kota</label>
                                <input type="text" class="form-control" name="_kota" id="_kota" value="{{ get_meta_value('_kota') }}">
                            </div>
                            <div class="mb-3">
                                <label for="_provinsi" class="form-label">Provinsi</label>
                                <input type="text" class="form-control" name="_provinsi" id="_provinsi"  value="{{ get_meta_value('_provinsi') }}">
                            </div>
                            <div class="mb-3">
                                <label for="_nohp" class="form-label">No. Hp</label>
                                <input type="text" class="form-control" name="_nohp" id="_nohp"  value="{{ get_meta_value('_nohp') }}">
                            </div>
                            <div class="mb-3">
                                <label for="_facebook" class="form-label">Email</label>
                                <input type="text" class="form-control" name="_email" id="_email" value="{{ get_meta_value('_email') }}">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <label for="_facebook" class="form-label">Facebook</label>
                                <input type="text" class="form-control" name="_facebook" id="_facebook"  value="{{ get_meta_value('_facebook') }}">
                            </div>
                            <div class="mb-3">
                                <label for="_instagram" class="form-label">Instagram</label>
                                <input type="text" class="form-control" name="_instagram" id="_instagram" value="{{ get_meta_value('_instagram') }}">
                            </div>
                            <div class="mb-3">
                                <label for="_tiktok" class="form-label">Tiktok</label>
                                <input type="text" class="form-control" name="_tiktok" id="_tiktok" value="{{ get_meta_value('_tiktok') }}">
                            </div>
                            <div class="mb-3">
                                <label for="_github" class="form-label">GitHub</label>
                                <input type="text" class="form-control" name="_github" id="_github"  value="{{ get_meta_value('_github') }}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-icon-text" style="width: 100%">
                        <i class="mdi mdi-file-check btn-icon-prepend"></i> Save
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection