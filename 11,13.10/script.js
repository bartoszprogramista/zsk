/*jQuery(document).ready(function(){
    $('#tekst').click(function(){
//        $('#lorem').toggle();
 //      $('#lorem').toggle('slow');
   //    $('#lorem').toggle('normal');
       $('#lorem').toggle('fast');


    })
});*/


$(document).ready(function(){
    $('div').css('background','yellow');
    $('.tekst').css('background','teal');
    $('#id1').css('background','red');
    $('#id2').css('color','white');
    $('#id1').css({'background':'brown','color':'lightgreen'})
    $('*').css('font-family','Arial','verdana');
    $('*').css('color','pink');
    $('*').css({'color':'pink','font-size':'25px'});
    $('#przycisk').click(function(){
        $('div').css('color','black');
    })
    $('#przycisk').dblclick(function(){
        $('div').css('color','white');
    })
    $('#ukryjAkapit').click(function(){
        $('#akapit').hide(2000);
    })
    $('#pokazAkapit').click(function(){
        $('#akapit').show('fast');
    })

    $('#zmien').click(function(){
        $('#html').html('<h1>Zmieniony tekst</h1>');

    })
    $('a').css('color','green');
    $('#link a').css('color','black');

    $('#kolorInny').click(function(){
        $('input[type="text"]').css({'background':'brown','color':'black'});
    })


});
























