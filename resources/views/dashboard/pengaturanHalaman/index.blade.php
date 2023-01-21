@extends('dashboard.layout');

@section('content')
    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pengaturan Halaman</h4>
                <form action="{{ route('pengaturanHalaman.update') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="_halamanAbout" class="col-sm-2 col-form-label">About</label>
                        <div class="col-sm-10">
                            <select name="_halamanAbout" id="_halamanAbout" class="form-control">
                                <option value="">- Pilih -</option>
                                @foreach ($dataHalaman as $item)
                                    <option value="{{ $item->id }}" {{ get_meta_value('_halamanAbout') == $item->id ? 'selected' : null }}>{{ $item->judul }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="_halamanInterest" class="col-sm-2 col-form-label">Interest</label>
                        <div class="col-sm-10">
                            <select name="_halamanInterest" id="_halamanInteret" class="form-control">
                                <option value="">- Pilih -</option>
                                @foreach ($dataHalaman as $item)
                                    <option value="{{ $item->id }}" {{ get_meta_value('_halamanInterest') == $item->id ? 'selected' : null }}>{{ $item->judul }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="_halamanAbout" class="col-sm-2 col-form-label">Awards</label>
                        <div class="col-sm-10">
                            <select name="_halamanAwards" id="_halamanAwards" class="form-control">
                                <option value="">- Pilih -</option>
                                @foreach ($dataHalaman as $item)
                                    <option value="{{ $item->id }}" {{ get_meta_value('_halamanAwards') == $item->id ? 'selected' : null }}>{{ $item->judul }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-icon-text">
                        <i class="mdi mdi-file-check btn-icon-prepend"></i> Save
                    </button>
                </form>
            </div>
        </div>
    </div
@endsection