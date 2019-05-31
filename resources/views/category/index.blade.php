@extends('includes.adminlte.template', ['content_title' => 'Categories'])

@section('title') Halaman Kategori Postingan @endsection

@section('content')
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Kategori Postingan</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            {{-- add button --}}
            <a href="{{ url('admin/posts/create') }}" class="btn btn-sm btn-success add-data mb-3" data-toggle="modal" data-target="#modal-form">
                <i class="fa fa-plus"></i> Tambah
            </a>

            {{-- tabel data --}}
            <table class="table table-striped table-bordered" id="datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th style="min-width: 90px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr data-id="{{ $category->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a href="{{ url('admin/categories/' . $category->id . '/edit') }}" class="btn btn-sm btn-primary edit-data">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{ url('admin/categories/' . $category->id) }}" class="btn btn-sm btn-danger delete-data">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- form delete data --}}
    <form action="" method="post" id="form-delete">
        @csrf
        @method('DELETE')
    </form>

    {{-- modal form --}}
    @include('category._modal')

@endsection

@push('css')
    {{-- datatable css --}}
    <link rel="stylesheet" href="{{ asset('plugins/datatables/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap4.css') }}">
@endpush

@push('js')
    {{-- sweetalert js --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    {{-- datatable js --}}
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>

    {{-- custom js --}}
    @include('category._script')
@endpush