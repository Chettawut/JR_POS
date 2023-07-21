<script type="text/javascript">
$(function() {


    $.ajax({
        type: "POST",
        url: "ajax/get_product.php",
        //    data: $("#frmMain").serialize(),
        success: function(result) {

            for (count = 0; count < result.stcode.length; count++) {

                $('#tableStock').append(
                    '<tr data-toggle="modal" data-target="#modal_edit" id="' + result
                    .stcode[
                        count] + '" data-whatever="' + result.stcode[
                        count] + '">.<td>' + result.stcode[count] + '</td><td>' +
                    result.stname1[count] + '</td><td style="text-align:right">' +
                    result.amount1[count] + '</td><td  style="text-align:center">' + result
                    .unit[count] + '</td></tr>');
            }

            var table = $('#tableStock').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": false,
                "autoWidth": false,
                "responsive": false,
                "scrollX": true
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
        url: "ajax/getsup_product.php",
        data: "idcode=" + recipient,
        success: function(result) {

            modal.find('.modal-body #stcode').val(result.stcode);
            modal.find('.modal-body #stname1').val(result.stname1);
            modal.find('.modal-body #unit').val(result.unit);
            modal.find('.modal-body #typecode').val(result.typecode);
            modal.find('.modal-body #price').val(result.price);            



        }
    });
});


$("#btnRefresh").click(function() {
    window.location.reload();
});

//เพิ่มวัสดุ
$("#frmAddStock").submit(function(e) {
    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "ajax/add_product.php",
        data: $("#frmAddStock").serialize() +
            "&id=" + '<?php echo $_SESSION['id'];?>',
        success: async function(result) {

            if (result.status == 1) // Success
            {
                await Swal.fire('สำเร็จ', result.message, 'success');
                window.location.reload();
                // console.log(result.message);
            } else {
                Swal.fire('เกิดข้อผิดพลาด', "รหัสซ้ำ", 'error');               
            }
        }
    });


});

$("#frmEditStock").submit(function(e) {
    e.preventDefault();
    
    $.ajax({
        type: "POST",
        url: "ajax/edit_product.php",
        data: $("#frmEditStock").serialize() +
            "&id=" + '<?php echo $_SESSION['id'];?>',
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