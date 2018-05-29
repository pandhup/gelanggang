$(document).ready(function(){

    //display modal form for task editing
    $('.bebas').click(function(){
        var modal_id = $(this).val();
        $.get('antrian' + '/' + modal_id, function (data) {
            //success data
            console.log(data);
            $('#nama_member').val(data.nama);
            $('#modal_id').modal('show');
        })
    });
});
