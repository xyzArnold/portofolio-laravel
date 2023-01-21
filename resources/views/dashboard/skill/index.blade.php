@extends('dashboard.layout');

@section('content')
    <div class="grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Skill</h4>
                <form action="{{ route('skill.update') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="_language" class="col-sm-2 col-form-label">Programming Languages & Tool</label>
                        <div class="col-sm-10">
                            <input type="text" class="skill form-control" id="_language" placeholder="Programming Languages & Tool" 
                                name="_language" value="{{ get_meta_value('_language') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="_workfLow" class="col-sm-2 col-form-label">Work FLow</label>
                        <div class="col-sm-10">
                            <textarea class="form-control summernote" rows="10" name="workFlow">{{ get_meta_value('_workflow') }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-icon-text">
                        <i class="mdi mdi-file-check btn-icon-prepend"></i> Save
                    </button>
                </form>
            </div>
        </div>
    </div>

    @push('child-script')
    <script>
        $(document).ready(function() {
            $('.skill').tokenfield({
                autocomplete: {
                    source: [{!! $skill !!}],
                    delay: 100
                },
                showAutocompleteOnFocus: true
            });
        });
    </script>
    @endpush
@endsection