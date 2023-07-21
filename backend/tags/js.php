<script type="text/javascript">
$(function() {

    $.ajax({
        type: "POST",
        url: "ajax/get_tags.php",
        //    data: $("#frmMain").serialize(),
        success: function(result) {

            for (count = 0; count < result.tagscode.length; count++) {

                var status = '';
                if (result.status[count] == 'Y')
                    status = 'เปิดใช้งาน'
                else
                    status = 'ปิดใช้งาน'

                $('#tableTags').append(
                    '<tr data-toggle="modal" data-target="#modal_edit" id="' + result
                    .tagscode[
                        count] + '" data-whatever="' + result.tagscode[
                        count] + '"><td>' + result.tagsname[count] + '</td><td>' +
                    status + '</td></tr>');
            }

            var table = $('#tableTags').DataTable({
                "dom": '<"pull-right"f>rt<"bottom"p><"clear">',
                "ordering": false
            });

            $(".dataTables_filter input[type='search']").css({
                'width': '80%'
            });



        }
    });


})
$('#modal_edit').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    var recipient = button.data('whatever');
    var modal = $(this);

    $.ajax({
        type: "POST",
        url: "ajax/getsup_tags.php",
        data: "idcode=" + recipient,
        success: function(result) {
            modal.find('.modal-body #tagscode').val(result.tagscode);
            modal.find('.modal-body #tagsname').val(result.tagsname);
            modal.find('.modal-body #status').val(result.status);

        }
    });
});

$("#btnRefresh").click(function() {
    window.location.reload();
});

//ส่งใบแจ้ง
$("#frmAddTags").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "ajax/add_tags.php",
        data: $("#frmAddTags").serialize(),
        success: async function(result) {

            if (result.status == 1) // Success
            {
                await Swal.fire('สำเร็จ', result.message, 'success');
                window.location.reload();
                // console.log(result.message);
            }
        }
    });


});

$("#frmEditTags").submit(function() {

    $.ajax({
        type: "POST",
        url: "ajax/edit_tags.php",
        data: $("#frmEditTags").serialize(),
        success: async function(result) {

            if (result.status == 1) // Success
            {
                await Swal.fire('สำเร็จ', result.message, 'success');
                window.location.reload();
                // console.log(result.message);
            }
        }
    });

});
</script>