@extends('includes.adminlte.template', ['content_title' => 'Posts'])

@section('title') Halaman Post @endsection

@section('content')
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Postingan</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            {{-- add button --}}
            <a href="{{ url('admin/posts/create') }}" class="btn btn-sm btn-success">
                <i class="fa fa-plus"></i> Tambah
            </a>

            {{-- tabel data --}}
            <table class="table table-striped table-bordered mt-2">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    {{-- <th>Konten</th> --}}
                    <th>Status</th>
                    <th style="min-width: 90px;">Aksi</th>
                </tr>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author->name }}</td>
                        <td>
                            @foreach ($post->categories as $category)
                                <span class="badge badge-secondary">{{ $category->name }}</span>
                            @endforeach
                        </td>
                        {{-- <td>{{ str_limit( strip_tags($post->content), 50) }}</td> --}}
                        <td>
                            {!! $post->is_draft == '1' ? '<span class="badge badge-warning">Draft</span>' : '<span class="badge badge-success">Publish</span>' !!}
                        </td>
                        <td>
                            <a href="{{ url('admin/posts/' . $post->id . '/edit') }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{ url('admin/posts/' . $post->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

            {{-- paginasi halaman --}}
            <div class="mt-3 mb-3 pull-right">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

@endsection
