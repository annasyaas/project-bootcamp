@extends('includes.adminlte.template', ['content_title' => 'Belajar Javascript dan Jquery'])

@section('title') Belajar Javascript dan Jquery @endsection

@section('content')
    
    <p class="informasi">View nya belum kepake dulu!.</p>

    <a href="#" class="btn btn-success" id="tombol-tambah">
        Tambah Data
    </a>

    <a href="#" class="btn btn-primary" id="tombol-sembunyi">
        Sembunyikan Info
    </a>

    {{-- <div><span>coba target saya 1!</span></div>
    <div><span>coba target saya 2!</span></div>
    <div><span>coba target saya 3!</span></div> --}}

    {{-- bootstrap card --}}
    {{-- <div class="card mt-3" style="width: 18rem;">
        <img class="card-img-top" src="https://via.placeholder.com/300x200" alt="User image">
        <div class="card-body">
          <h5 class="card-title">Nama Pengguna</h5>
          <p class="card-text">
              Email: <span>x</span>
          </p>
        </div>
    </div> --}}

    <div class="card-area row">
        {{-- generate card nya di dalam sini --}}
    </div>
    
@endsection

@push('css')
    <style>
        #tombol-tambah {
            /* display: none; */
        }

        .red {
            color: red;
            font-size: 20px;
            font-weight: bold;
        }
        .blue {
            color: blue;
            font-style: italic;
            text-decoration: underline;
        }
    </style>
@endpush

@push('js')
    <script src="{{ url('js/belajar.js') }}"></script>
@endpush