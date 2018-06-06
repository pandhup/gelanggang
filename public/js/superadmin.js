// Menampilkan pesan error apabila ada error pada saat validasi email di modal create
$( document ).ready(function() {
  $('.createModal').on('hidden.bs.modal', function(){
    $(this).find(".modal-content").reset();
  });
  $('.errorEmail').hide();

  $('#email').change(function(){

    var emailText = $(this).val();

    $.ajax({
      url : '/api/checkuser/',
      type:'get',
      data: { email: emailText },
      dataType: 'json',
      success: function(response) {
        if(response == "Error") {
          $('.errorEmail').show();
          $('#btnSubmitModalMadmin').prop('disabled',true);
          console.log('error');
        } else {
          $('.errorEmail').hide();
          $('#btnSubmitModalMadmin').prop('disabled',false);
          console.log('success');
        }
      }
    });
  });
});

// Menampilkan pesan error apabila ada error pada saat validasi email di modal edit
$( document ).ready(function() {
  $('.editModal').on('hidden.bs.modal', function(){
    $(this).find(".modal-content").reset();
  });
  $('.errorEmail').hide();

  $('#email_edit').change(function(){

    var emailText = $(this).val();

    $.ajax({
      url : '/api/checkuser/',
      type:'get',
      data: { email: emailText },
      dataType: 'json',
      success: function(response) {
        if(response == "Error") {
          $('.errorEmail').show();
          $('.btnSubmitModalMadmin').prop('disabled',true);
          console.log('error');
        } else {
          $('.errorEmail').hide();
          $('.btnSubmitModalMadmin').prop('disabled',false);
          console.log('success');
        }
      }
    });
  });
});

/* Kelompok javascript untuk admin */
// menampilkan detail user di modal detail
$(document).ready(function() {
    $('.detail_user').click(function(){
        var users_id = $(this).val();
        var url = 'detailadmin';
        $.get(url + '/' + users_id, function (data) {
            //success data
            console.log(data);
            $('.foto').attr("src", "http://127.0.0.1:8000/storage/images/" + data.foto);
            $('#id').val(data.id);
            $('#nama').val(data.name);
            $('#email_user').val(data.email);
        })
    });
});

// menampilkan detail user di modal Edit
$(document).ready(function() {

    $('.edit').click(function(){
        var users_id = $(this).val();
        var url = 'editadmin';
        $.get(url + '/' + users_id, function (data) {
            //success data
            console.log(data);;
            $('#id_edit').val(data.id)
            $('#nama_edit').val(data.name);
            $('#email_edit').val(data.email);

        })
    });
});

// menampilkan detail user di modal Edit
$(document).ready(function() {

    $('.edit_member').click(function(){
        var users_id = $(this).val();
        var url = 'editmember';
        $.get(url + '/' + users_id, function (data) {
            //success data
            console.log(data);
            $('#nama_edit').val(data.name);
            $('#email_edit').val(data.email);

        })
    });
});
/* batasan Kelompok */
