
$(document).ready(function(){

  $('#detail_popup').click(function() {
      var event_id = $(this).val();

      // Menampilkan data ke detail modal
      $.ajax({
          type: "GET",
          url: "event" + '/' + event_id,
          success: function (data) {
              console.log(data);
              $('#nama_event_detail').val(event.id_event);
              $('#lokasi_detail').val(event.lokasi);
              $('#tanggal_detail').val(event.tanggal_mulai);
              $('#deskripsi_detail').val(event.deskripsi);
              $('#kontak_detail').val(event.kontak);
              $('#detail_modal').modal('show');
          },
          error: function (data) {
              console.log('Error:', data);
          }
      });
  });


});
