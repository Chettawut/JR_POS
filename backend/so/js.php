<script type="text/javascript">
$(function() {

    let stcode = [];
    let amount = [];
    let stname1 = [];
    let unit = [];
    let price = [];

    $("#stinput").keydown(function(e) {

        let keyCode = e.keyCode;

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
                        // alert(stcode.indexOf(""+result.stcode))

                        let slot = stcode.indexOf(String(result.stcode));
                        if (stcode.indexOf(String(result.stcode)) < 0) {
                            
                            stcode.push(String(result.stcode));
                            amount.push(1);
                            stname1.push(String(result.stname1));
                            unit.push(String(result.unit));
                            price.push(String(result.price));

                            $('#tableSales').append(

                                '<tr><td scope="row">' + (stcode.length) +

                                '</td><td>' + result.stcode +

                                '</td><td class="text-left">' + result.stname1 +
                                
                                '</td><td>1</td><td>' + result.price +
                                '</td><td>' + result.unit +
                                '</td><td class="text-right">' +
                                formatMoney(
                                    result.price, 2) + '</td></tr>'
                            );


                            $("div").scrollTop(2000);
                        } else {
                            $('#tableSales tbody tr').empty()
                            amount[slot]++;
                            for (let count = 0; count < stcode.length; count++) {
                                $('#tableSales').append(

                                    '<tr><td scope="row">' + [count+1] +

                                    '</td><td>' + stcode[count] +

                                    '</td><td class="text-left">' + stname1[count] +
                                    '</td><td>' + amount[count] +
                                    '</td><td>' + price[count] +
                                    '</td><td>' + unit[count] +
                                   
                                    '</td><td class="text-right">' +
                                    formatMoney(
                                        (amount[count] * price[count]), 2) + '</td></tr>'
                                );
                            }
                        }
                        $("#spantotal").text(formatMoney(parseFloat($("#spantotal")
                            .text().replace(",", "")) + parseFloat(result
                            .price), 2))
                    } else {
                        $("#stinput").val('')
                        Swal.fire('เกิดข้อผิดพลาด', "ไม่มีรหัสสินค้านี้", 'error');
                    }
                    $("#stinput").val('')


                }
            });
        }
    });

    // $(document).mousemove(function(event) {
    //     $("#stinput").focus();
    // });

})
</script>