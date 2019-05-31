@extends('includes.adminlte.template', ['content_title' => 'Posts'])

@section('title') Halaman Post @endsection

@section('content')
    {{-- check validation errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <h3>Terjadi Kesalahan!</h3>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Postingan</h3>

            <div class="card-tools">
                <a href="{{ url('admin/posts') }}" class="btn btn-sm btn-secondary">
                    <i class="fa fa-arrow-left"></i> Kembali
                </a>
                <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/posts') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                {{-- image upload area --}}
                <div class="form-group">
                    <label for="cover">Foto Sampul</label>
                    <div>
                        <img src="https://via.placeholder.com/200x200" alt="preview image" class="img-thumbnail" id="preview-image">
                    </div>
                    <input type="file" class="form-control" name="cover" id="cover">
                </div>
                {{-- end area --}}

                <div class="form-group">
                    <label for="title">Judul</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Judul Postingan" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="content">Konten</label>
                    <textarea name="content" id="content">{{ old('content') }}</textarea>     
                </div>
                <div class="form-group">
                    <label for="categories">Kategori</label>
                    <select class="form-control" name="categories[]" id="categories" multiple required>
                        @foreach ($categories as $category)
                            @if (old("categories")) 
                                @if ( in_array($category->id, old("categories")) )
                                    @php $selected = 'selected' @endphp
                                @endif
                            @endif

                            <option value="{{ $category->id }}" {{ $selected ?? '' }}>{{ $category->name }}</option>                            
                        @endforeach    
                    </select>                    
                </div>
                <div class="form-group">
                    <label for="users">Penulis</label>
                    <select class="form-control" name="author_id" id="users" required>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ old('author_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach    
                    </select>                    
                </div>
                <div class="form-group">
                    <label for="status_draft">Status</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="is_draft" id="status_draft" value="1" {{ old('is_draft') == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_draft">Draft</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="is_draft" id="status_publish" value="0" {{ old('is_draft') == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_publish">Publish</label>
                        </div>
                    </div>
                </div>
                <button type="reset" class="btn btn-danger">
                    <i class="fa fa-times"></i> Reset
                </button>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-send"></i> Simpan 
                </button>
            </form>
        </div>
    </div>

@endsection

@push('css')
    {{-- select2 css --}}
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">

    {{-- summernote css --}}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">

    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #0062cc;
            border-color: #005cbf;
            color: #fff;
        }

        .select2-container .select2-selection--single {
            height: 34px;
        }
    </style>
@endpush

@push('js')
    {{-- select2 js --}}
    <script src="{{ asset('plugins/select2/select2.min.js') }}"></script>

    {{-- summernote js --}}
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

    <script>
        $(function() {
            // initialize summernote
            $('#content').summernote({
                placeholder: 'Tuliskan isi konten disini...',
                height: 200
            });

            // initialize select2
            $('#categories, #users').select2({
                placeholder: 'Pilih:'
            });

            $('#cover').on('change', function() {
                readURL(this);
            });
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview-image').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush