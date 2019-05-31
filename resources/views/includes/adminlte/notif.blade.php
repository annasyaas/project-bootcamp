@if (Session::has('success'))
    <div class="alert alert-info alert-dismissible fade show mr-2 ml-2" role="alert">
        <strong>SUKSES!</strong> {{ Session::get('success') }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show mr-2 ml-2" role="alert">
        <strong>GAGAL!</strong> {{ Session::get('error') }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
