$(document).ready(function(){

    //get base URL *********************
    var url = $('#url').val();
    });

$(#btn-submit).click(function(e){
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
  })

  e.preventDefault();
        var formData = {
            nama: $('#namaevent').val(),
            tanggal_mulai: $('#reservation').val(),
            tanggal_selesai: $('#reservation').val(),
            deskripsi: $('#deskripsi').val(),
            lokasi: $('#Lokasi').val(),
            kontak: $('#kontak').val(),
        }

      //used to determine the http verb to use [add=POST], [update=PUT]
      var state = $('#btn-submit').val();
      var type = "POST"; //for creating new resource
      var event_id = $('#event_id').val();;
      var my_url = url;
      if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/' + product_id;
        }
        console.log(formData);
          $.ajax({
              type: type,
              url: my_url,
              data: formData,
              dataType: 'json',
              success:function(data){
                console.log(data);
                var dataevent = '<td>' + data.namaevent + '</td><td>' + data.reservation + '</td><td>' + data.lokasi + '</td>';
                if (state == "add"){ //if user added a new record
                    $('#event-list').append(product);
                }else{ //if user updated an existing record
                    $("#event" + event_id).replaceWith( dataevent );
                }
              },
              error: function (data) {
                  console.log('Error:', data);
              }
            });
});
