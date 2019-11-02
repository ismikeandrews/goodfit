$(document).ready(function (){
  $("#cep").focusout(function(){

    var cep = $("#cep").val();
    cep = cep.replace("-", "");
    var StringUrl = "https://viacep.com.br/ws/"+cep+"/json/";

    $.ajax(
      {
          url: StringUrl,
          type: "get",
          dataType: "json",
          success: function(data){
            console.log(data);
            $("#cidade").val(data.localidade);
            $("#logradouro").val(data.logradouro);
            $("#bairro").val(data.bairro);
            $("#estado").val(data.uf);
            $("#complemento").val(data.complemento);
          },
          erro: function(erro) {
            console.log(erro);
          }
      });
  });
});
