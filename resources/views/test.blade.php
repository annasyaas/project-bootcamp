@extends('includes.adminlte.template', ['content_title' => 'Test Page'])

@section('title') Halaman Test @endsection

@section('content')
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Test</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            {{ $data }}
        </div>
    </div>
@endsection

@push('css')
    <style>
        .judul {
            color: red;
        }
    </style>
@endpush

@push('js')
    <script>
        alert('Welcome!');
    </script>
@endpush