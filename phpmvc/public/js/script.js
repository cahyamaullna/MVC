$(function(){

	$('.tombolTambahData').on('click', function(){
		$('#formModalLabel').html('Tambah Data Anggota');
		$('.modal-footer button[type=submit]').html('Tambah Data');
		$('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

	});


	$('.tampilModalUbah').on('click', function(){
		$('#formModalLabel').html('Ubah Data Anggota');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				$('#nama').val(data.nama);
				$('#nis').val(data.nis);
				$('#email').val(data.email);
				$('#jurusan').val(data.jurusan);
				$('#id').val(data.id);
			}
		});

	});

});