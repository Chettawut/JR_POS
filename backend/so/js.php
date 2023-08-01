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
            //Do something
        }
    });

    $(document).mousemove(function(event) {
        $("#stinput").focus();
    });

})
</script>