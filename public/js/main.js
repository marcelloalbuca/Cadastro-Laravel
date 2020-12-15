
function consultaCep(){
    $(".barra-progresso").show();
    var cep = document.getElementById("cep").value;
    var url = "https://viacep.com.br/ws/" + cep + "/json/";
    //console.log(cep);

    $.ajax({
        url: url,
        type: "GET",
        success: function(response){
            console.table(response);

            //jQuery
            $("#logradouro").html(response.logradouro);
            $("#bairro").html(response.bairro);
            $("#localidade").html(response.localidade);
            $("#uf").html(response.uf);
            $("#uf").html(response.uf);
            $("#titulo_cep").html("CEP " + response.cep);
            $(".cep").show();
            $(".barra-progresso").hide();
           // console.log(response.bairro);

           //$("#logradouro").html(response.logradouro);
           //document.getElementById("bairro").innerHTML = response.bairro;
           //document.getElementById("localidade").innerHTML = response.localidade;
           //document.getElementById("uf").innerHTML = response.uf;

        }
    })
}

$(function(){
    $(".cep").hide();
    $(".barra-progresso").hide();
});



