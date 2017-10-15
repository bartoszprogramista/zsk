$(document).ready(function(){
/*    $('tr:even').css('background','#b2aaaa')
    $('tr:odd').css('background','#db1234')*/


    $('#tabela1 tr:even').css('background','#b20000');
    $('#tabela1 tr:odd').css('background','#b2b2b2');
    $('#tabela1 tr:first').css('background','#5ad45f');
    $('#tabela1 tr:last').css('background','#5ad45f');
    $('#tabela1 tr:eq(3)').css('color','white');
    $('#tabela1 td:eq(1)').css('color','white');
    $('#tabela1 td:contains("Sól")').css('color','#b20000');
    $('#widoczny').click(function(){
        $('#obraz').show();
    })
    $('#niewidoczny').click(function(){
        $('#obraz').hide(1500);
    })


});
