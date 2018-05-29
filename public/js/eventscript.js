
$(document).ready(function(){

  $('.detail_popup').click(function() {
    var id_event = $(this).val();

    #.get('event' + '/' + id)

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
