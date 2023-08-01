<script type="text/javascript">
$(function() {

    $("#stinput").keydown(function(e){
         e.preventDefault();

         var keyCode = e.keyCode ;

         if(keyCode=='119')
         {
            $('#modal_add').modal('show');
         }
        //  alert(keyCode);      
          
    });
})
</script>