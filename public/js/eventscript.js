
$(document).ready(function(){

// DETAIL MODAL
  $('.detail_popup').click(function() {
    var id_event = $(this).val();
    var url = 'event';
    $.get(url + '/' + id_event, function (data) {
        //success data
        console.log(data);
        $.each(data,function(i,o){
          $('.nama_event_detail').val(o.nama);
          $('.lokasi_detail').val(o.lokasi);
          $('.tanggal_mulai_detail').val(o.tanggal_mulai);
          $('.tanggal_selesai_detail').val(o.tanggal_selesai);
          $('.deskripsi_detail').val(o.deskripsi);
          $('.kontak_detail').val(o.kontak);
        });
    })
  });

// EDIT MODAL - NOT FIX
  $('.edit_modal').click(function(){
    var id_event = $(this).val();
    var url = 'event';
    $.get(url + '/' + id_event, function (data) {
        //success data
        console.log(data);
        $.each(data,function(i,o){
          $('#id_event').val(o.id_event);
          $('#nama_event_edit').val(o.nama);
          $('#lokasi_edit').val(o.lokasi);
          // $('#tanggal_mulai_edit').val(o.tanggal_mulai);
          // $('#tanggal_selesai_edit').val(o.tanggal_selesai);
          $('#deskripsi_edit').val(o.deskripsi);
          $('#kontak_edit').val(o.kontak);
        });
    })
  });

  $("#btn_submit").click(function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    e.preventDefault();
    var formData = {
        nama: $('#nama_event_edit').val(),
        lokasi: $('#lokasi_edit').val(),
        tanggal_mulai: "2018-05-29",
        tanggal_selesai: "2018-05-30",
        deskripsi: $('#deskripsi_edit').val(),
        kontak: $('#kontak_edit').val(),
        status: "belumverif",
        id_user_member: $('#id_user_member').val(),
    }

    var id_event = $('#id_event').val();
    var url = 'event';
    var event_data;
    console.log(formData);
    $.ajax({
        type: "PUT",
        url: url + "/" + id_event,
        data: formData,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            // $.each(data,function(i,o){
            //   event_data = '<tr id="event'+ o.id_event +'">';
            //   event_data = '<td>'+ o.nama +'</td><td>'+ o.tanggal_mulai +'</td><td>'+ o.lokasi +'</td><td class="text-center">'+ o.status +'<span class="glyphicon glyphicon-ok" style="color:#00FF00;"></span></td>';
            //   event_data += '<button type="button" class="btn btn-sm btn-primary detail_popup" data-toggle="modal" data-target=".bs-detail-modal-lg" value="' + o.id_event + '"><i class="glyphicon glyphicon-eye-open"></i></button>';
            //   event_data += '<button type="button" class="btn btn-sm btn-warning edit_modal" data-toggle="modal" data-target=".bs-edit-modal-lg" value="' + o.id_event + '"><i class="glyphicon glyphicon-pencil"></i></button>';
            // });
            // $("#event" + id_event).replaceWith( event_data );
            alert('Record updated successfully');
            $('#frmEdit').trigger("reset");
            $('#editModal').modal('hide');
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
  });

// CREATE Event
  $("#btn_buat_event").click(function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    e.preventDefault();
    var formData = {
        nama: $('#nama_event_create').val(),
        lokasi: $('#lokasi_create').val(),
        tanggal_mulai: "2018-05-29",
        tanggal_selesai: "2018-05-30",
        deskripsi: $('#deskripsi_create').val(),
        kontak: $('#kontak_create').val(),
        status: "belumverif",
        id_user_member: $('#id_user_member').val(),
    }

    var event_data;
    $.ajax({
        type: "POST",
        url: 'event',
        data: formData,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            event_data = '<tr id="event'+ data.id_event +'">';
            event_data = '<td>'+ data.nama +'</td><td>'+ data.tanggal_mulai +'</td><td>'+ data.lokasi +'</td><td class="text-center">'+ data.status +'<span class="glyphicon glyphicon-ok" style="color:#00FF00;"></span></td>';
            event_data += '<button type="button" class="btn btn-sm btn-primary detail_popup" data-toggle="modal" data-target=".bs-detail-modal-lg" value="' + data.id_event + '"><i class="glyphicon glyphicon-eye-open"></i></button>';
            event_data += '<button type="button" class="btn btn-sm btn-warning edit_modal" data-toggle="modal" data-target=".bs-edit-modal-lg" value="' + data.id_event + '"><i class="glyphicon glyphicon-pencil"></i></button>';

            $('#eventList').append(event_data);
            $('#createEventModal').modal('hide');
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
  });

});
