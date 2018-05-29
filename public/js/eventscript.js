
$(document).ready(function(){

  $('.detail_popup').click(function() {
    var id_event = $(this).val();
    var url = 'event';
    $.get(url + '/' + id_event, function (data) {
        //success data
        console.log(data);
        $('#nama_event_detail').val(data.nama);
        $('#lokasi_detail').val(data.lokasi);
        $('#tanggal_detail').val(data.tanggal_mulai);
        $('#deskripsi_detail').val(data.deskripsi);
        $('#kontak_detail').val(data.kontak);
        $('#detail_modal').modal('show');

    })

    // Menampilkan data ke detail modal
    // $.ajax({
    //     type: "GET",
    //     url: "event" + '/' + id_event,
    //     success: function ($data) {
    //         console.log($data);
    //         $('#nama_event_detail').val($data.nama);
    //         $('#detail_modal').modal('show');
    //     },
    //     error: function ($data) {
    //         console.log('Error:', $data);
    //     }
    // });
  });


});
