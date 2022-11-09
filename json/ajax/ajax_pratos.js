$ ('nome do form') .on ('submit', function(){
    Event.preventDefault();
    var dados = $ (this) .serilize();
    $.ajax({
        url: '../json/controller_pratos.php',
        type: 'POST',
        dataType: 'json',
        data: dados,
        success: function(response){
            $('.nome do form table tbody').empty();
            $.each(response,function(key,value){
                //escrever o tabela
            });
        }
    })
})