/**
 * Created by boyko on 13.06.15.
 */
$( document ).ready(function() {

    /*
    Show password
     */

    $('body').on('click','#show_password', function(e){
        $(this).parents('.input').find('input[type="password"]').attr('type','text');
    });

});