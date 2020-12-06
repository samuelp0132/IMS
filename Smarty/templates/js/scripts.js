
    //hang on event of form with id=myform
    $("#agregarusuario").click(function(e) {

        //prevent Default functionality
        e.preventDefault();

        //get the action-url of the form
        var actionurl = e.currentTarget.action;

        //do your own request an handle the results
        $.ajax({
            url:  'agregar-usuario.php',
            type: 'POST',
            success: function(data) {
                console.log(data);
            }
        });



});