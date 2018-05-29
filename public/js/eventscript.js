
$(document).ready(function(){

  $('#detail_popup').click(function() {
    var event_id = $(this).val();

    // Menampilkan data ke detail modal
    $.ajax({
        type: "GET",
        url: "event" + '/' + event_id,
        success: function (data) {
            console.log(data);
            $('#detail_modal').modal('show');
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
  });


});
