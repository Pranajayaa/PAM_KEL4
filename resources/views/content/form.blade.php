<div class="form-group">
    {{ Form::label('page') }}
    {{ Form::select('page', $contentPage, $content->page, ['class' => 'form-control' . ($errors->has('page') ? ' is-invalid' : ''), 'placeholder' => 'Page', 'required']) }}
    {!! $errors->first('page', '<div class="invalid-feedback">:message</p>') !!}
</div>
<div class="form-group">
    {{ Form::label('content_type') }}
    {{ Form::select('content_type', $contentType, $content->content_type, ['class' => 'form-control' . ($errors->has('content_type') ? ' is-invalid' : ''), 'placeholder' => 'Content Type', 'required']) }}
    {!! $errors->first('content_type', '<div class="invalid-feedback">:message</p>') !!}
</div>
<div class="form-group">
    {{ Form::label('title') }}
    {{ Form::text('title', $content->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title', 'required']) }}
    {!! $errors->first('title', '<div class="invalid-feedback">:message</p>') !!}
</div>
<div class="form-group">
    {{ Form::label('body') }}
    {{ Form::textarea('body', $content->body, ['class' => 'form-control' . ($errors->has('body') ? ' is-invalid' : ''), 'placeholder' => 'Body']) }}
    {!! $errors->first('body', '<div class="invalid-feedback">:message</p>') !!}
</div>
<div class="form-group">
    {{ Form::label('file') }}
    {{ Form::file('file', ['class' => 'form-control' . ($errors->has('file') ? ' is-invalid' : '')]) }}
    {!! $errors->first('file', '<div class="invalid-feedback">:message</p>') !!}
</div>
{{-- <div class="form-group">
    {{ Form::label('extra') }}
    {{ Form::text('extra', $content->extra, ['class' => 'form-control' . ($errors->has('extra') ? ' is-invalid' : ''), 'placeholder' => 'Extra', 'required']) }}
    {!! $errors->first('extra', '<div class="invalid-feedback">:message</p>') !!}
</div> --}}
<div class="form-group" id="gallery-files" style="display: none;">
    {{ Form::label('Files') }}
    {{ Form::file('gallery[]', ['class' => 'form-control mb-3' . ($errors->has('gallery') ? ' is-invalid' : ''), 'multiple']) }}
    {!! $errors->first('gallery', '<div class="invalid-feedback">:message</p>') !!}
    @foreach ($content->contentFiles as $v)
        <div class="btn-group mb-3 mr-3">
            <a href="{{ '/'.$v->file_dir.'/'.$v->file }}" class="btn btn-primary" target="_blank">{{ $v->file }}</a>
            <button class="btn btn-danger btn-delete-content-file" data-id="{{ $v->id }}"><i class="fa fa-times pr-0"></i></button>
        </div>
    @endforeach
</div>
<button type="submit" class="btn btn-primary">Submit</button>
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#content_type').change(function() {
                var contentType = $(this).val();
                if (contentType == 'files') {
                    $('#gallery-files').show();
                } else {
                    $('#gallery-files').hide();
                }
            });
            $('.btn-delete-content-file').click(function (e) { 
                e.preventDefault();

                var id = $(this).data('id');
                var this2 = $(this);

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "get",
                            url: "{{ route('content.destroy-content-file', '') }}/" + id,
                            dataType: "json",
                            success: function (r) {
                                Swal.fire({
                                    icon: 'success',
                                    title: r.message
                                });

                                this2.closest('.btn-group').remove();
                            },
                            error: function (e) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'An error occurred.'
                                });
                            },
                        });
                    }
                })
            });
            {!! $content->content_type == 'files' ? "$('#gallery-files').show();" : "$('#gallery-files').hide();" !!}
        });
    </script>
@endsection
