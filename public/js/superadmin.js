
$( document ).ready(function() {
  $('#createModal').on('hidden.bs.modal', function(){
    $(this).find(".modal-content").reset();
  });
  $('#errorEmail').hide();

  $('#email').change(function(){

    var emailText = $(this).val();

    $.ajax({
      url : '/api/checkuser/',
      type:'get',
      data: { email: emailText },
      dataType: 'json',
      success: function(response) {
        if(response == "Error") {
          $('#errorEmail').show();
          $('#btnSubmitModalMadmin').prop('disabled',true);
          console.log('error');
        } else {
          $('#errorEmail').hide();
          $('#btnSubmitModalMadmin').prop('disabled',false);
          console.log('success');
        }
      }
    });
  });
});

$(document).ready(function() {

    //display modal form for task editing
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

$(document).ready(function() {

    //display modal form for task editing
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
