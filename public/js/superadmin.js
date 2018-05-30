// Menampilkan pesan error apabila ada error pada saat validasi email
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

/* Kelompok javascript untuk admin */
// menampilkan detail user di modal detail
$(document).ready(function() {
    $('.detail_admin').click(function(){
        var users_id = $(this).val();
        var url = 'detailadmin';
        $.get(url + '/' + users_id, function (data) {
            //success data
            console.log(data);
            $('#id').val(data.id);
            $('#nama').val(data.name);
            $('#email_admin').val(data.email);

        })
    });
});

// menampilkan detail user di modal Edit
$(document).ready(function() {

    $('.edit_admin').click(function(){
        var users_id = $(this).val();
        var url = 'editadmin';
        $.get(url + '/' + users_id, function (data) {
            //success data
            console.log(data);
            $('#nama_edit').val(data.name);
            $('#email_edit').val(data.email);

        })
    });
});
/* batasan Kelompok */

/* Kelompok javascript untuk admin */
// menampilkan detail user di modal detail
$(document).ready(function() {
    $('.detail_member').click(function(){
        var users_id = $(this).val();
        var url = 'detailadmin';
        $.get(url + '/' + users_id, function (data) {
            //success data
            console.log(data);
            $('#id').val(data.id);
            $('#nama_ukm').val(data.nama_ukm);
            $('#id_ukm').val(data.id_ukm);
            $('#email_member').val(data.email);

        })
    });
});

// menampilkan detail user di modal Edit
$(document).ready(function() {

    $('.edit_user').click(function(){
        var users_id = $(this).val();
        var url = 'editadmin';
        $.get(url + '/' + users_id, function (data) {
            //success data
            console.log(data);
            $('#nama_edit').val(data.name);
            $('#email_edit').val(data.email);

        })
    });
});
/* batasan Kelompok */
