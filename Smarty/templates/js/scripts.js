    $(document).ready(function () {

        // passing the data from button value to modal
        $('body').on('click', '#agregar-usuario-btn',function(){
            document.getElementById("userID").value = $(this).attr('data-id');
        });
    });