$( document ).ready(function() { 

var replace;

$( “input:text” ).focus(function() {
    replace = $(this).val();
     $(this).val(“”);
     console.log(replace);

});

$( “input:text” ).blur(function() {
    console.log($(this).val());

    if ($(this).val() == “”) {
        $(this).val(replace);
    }
});




});