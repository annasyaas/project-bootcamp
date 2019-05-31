$(function () {

    $('#tombol-tambah').on('click', function (e) {
        // alert('wow!');
        
        // mengambil data dummy user lewat ajax
        $.ajax({
            type: 'GET',
            url: 'https://reqres.in/api/users',
            dataType: 'json',
            success: function(res) {
                // alert('Berhasil mengambil data api!');
                // console.log(res);            

                // const data = res.data[1];
                // $('.card-img-top').attr('src', data.avatar);
                // $('.card-title').text(data.first_name +' '+ data.last_name);
                // $('.card-text span').text(data.email);

                for (let x = 0; x < (res.data).length; x++) {
                    let data = res.data[x];
                    let card = generateCard(data.avatar, data.first_name +' '+ data.last_name, data.email);
                    
                    $('.card-area').append('<div class="col-md-4">'+ card + '</div>');
                }
            },
            error: function() {
                alert('Gagal mengambil data api!');
            }
        });    
        
        e.preventDefault();
    });
    // saat tombol sembunyi di klik
    $('#tombol-sembunyi').on('click', function (e) {
        // sembunyikan class informasi
        $('.informasi').hide('slow');
        e.preventDefault();
    });
    
    
});

function generateCard(img, name, email) {
    let card = '';

    card += '<div class="card mt-3" style="width: 18rem;">';
    card += '<img class="card-img-top" src="'+ img +'" alt="User image">';
    card += '<div class="card-body">';
    card += '<h5 class="card-title">'+ name +'</h5>';
    card += '<p class="card-text">Email: <span>'+ email +'</span></p>';
    card += '</div></div>';

    return card;
}