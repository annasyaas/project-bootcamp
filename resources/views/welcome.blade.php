@extends('includes.adminlte.template', ['content_title' => 'Home'])

@section('title') Home @endsection

@section('content')
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Welcome Page</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            Selamat datang di Aplikasi
        </div>
    </div>

@endsection