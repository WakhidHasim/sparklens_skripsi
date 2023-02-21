const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	toastr["success"]("Data Berhasil " + flashData);

	toastr.options = {
		"closeButton": false,
		"debug": false,
		"newestOnTop": false,
		"progressBar": false,
		"positionClass": "toast-top-right",
		"preventDuplicates": false,
		"onclick": null,
		"showDuration": "200",
		"hideDuration": "200",
		"timeOut": "200",
		"extendedTimeOut": "200",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	};
};

$('.btn-delete').on('click', function (e) {
	e.preventDefault();

	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda Yakin ?',
		text: "Ingin Menghapus Data Produk",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus',
		cancelButtonText: 'Batal'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
})
