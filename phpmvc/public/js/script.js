$(function(){
    $('.tombolTambahData').on('click', function(){
        $('#judulModal').html('Tambah Data Mahsiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });
    // console.log('ok');
    $('.tampilModalUbah').on('click', function(){
        $('#judulModal').html('Ubah Data Mahsiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action','http://localhost:8080/phpmvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost:8080/phpmvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                // console.log(data);
                $('#nama').val(data.nama);
                $('#npm').val(data.npm);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });

    });

    
    
});