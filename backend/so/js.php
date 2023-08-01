<script type="text/javascript">
$(function() {

    $("#stinput").keydown(function(e) {

        var keyCode = e.keyCode;

        //Enter F8
        if (keyCode == 119) {
            $('#modal_add').modal('show');
        }
        //  alert(keyCode);     

        //Enter keycode
        if (keyCode == 13) {

            $.ajax({
                type: "POST",
                url: "ajax/check_items.php",
                data: "stcode=" + $("#stinput").val(),
                success: async function(result) {

                    if (result.stcode.length > 0) {
                        $('#tableSales').append(
                            '<tr><th scope="row">1</th><td>' + result.stcode +
                            '</td><td class="text-left">' + result.stname1 +
                            '</td><td>' + result.unit +
                            '</td><td>1</td><td class="text-right">' + formatMoney(
                                result.price, 2) + '</td></tr>'
                        );
                        $("#stinput").val('')
                        $("#spantotal").text(formatMoney(parseFloat($("#spantotal").text().replace(",", ""))+parseFloat(result.price), 2))
                        $("div").scrollTop(2000);
                    } 
                    else
                    {
                        $("#stinput").val('')
                        Swal.fire('เกิดข้อผิดพลาด', "ไม่มีรหัสสินค้านี้", 'error'); 
                    }
                    


                }
            });
        }
    });

    $(document).mousemove(function(event) {
        $("#stinput").focus();
    });

})
</script>