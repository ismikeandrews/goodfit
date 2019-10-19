$(document).ready(function(){

  $image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport:{
      width: 200,
      height: 200,
      type: 'circle' //Da pra fazer circle
    },
    boundary:{
      width: 250,
      height: 250,
    }
  });

  $('#selecao-arquivo').on('change', function(){
    var reader = new FileReader();
    reader.onload = function(event){
      $image_crop.croppie('bind', {
        url:event.target.result
      }).then(function(data){
        console.log("Jquery bind feito");
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#modal-cortar').toggle('show');
  });

  $('.crop_image').click(function(event){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

     $image_crop.croppie('result', {
       type: 'canvas',
       size: 'viewport'
     }).then(function(response){
       $.ajax({
         url:"/candidato/configuracoes",
         type: "POST",
         data:{
           "_token": $('#csrf-token')[0],
           "foto":  response,
         },
         success:function(data)
         {
           console.log("to aqui")
           $('#modal-cortar').toggle('hide');
         },
         error:function(jqXHR,  textStatus,  errorThrown )
         {
           console.log(jqXHR);
           console.log(textStatus);
           console.log(errorThrown);
         }
       });
     });
   });

   function load_images()
   {
     $.ajax({
       url: "nome da rota",
       success:function(data)
       {
          $('#fazerodisplaydaimg').html(data);
       }
     });
   }
});
