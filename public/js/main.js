
$(document).ready(function(){
    setTimeout('$(".alert").hide(500)',1500);

    $('.productRow').click(function(){
        //alert($(this).attr('value'));
        window.location = "/show/"+$(this).attr('value');
    });

    $('#cost').mask('00,000,000.00', {reverse: true});
});