@extends('includes.adminlte.template', ['content_title' => 'Posts'])

@section('title') Halaman Post @endsection

@section('content')
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ubah Postingan</h3>

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
            <form action="{{ url('admin/posts/' . $post->id) }}" method="post">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="title">Judul</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Judul Postingan" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="content">Konten</label>
                    <textarea class="form-control" name="content" id="content" placeholder="Isi Postingan">{{ $post->content }}</textarea>                    
                </div>
                <div class="form-group">
                    <label for="status_draft">Status</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="is_draft" id="status_draft" value="1" {{ $post->is_draft == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_draft">Draft</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="is_draft" id="status_publish" value="0"  {{ $post->is_draft == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_publish">Publish</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-refresh"></i> Simpan Perubahan
                </button>
            </form>
        </div>
    </div>

@endsection