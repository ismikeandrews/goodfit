$(document).ready(function(){

  $image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport:{
      width: 200,
      height: 200,
      type: 'square' //Da pra fazer circle
    },
    boundary:{
      width: 300,
      height: 300,
    }
  });

  $('#selecao-arquivo').on('change', function(){
    var reader = new FileReader();
    reader.onload = function(event){
      $image_crop.croppie('bind', {
        url:event.target.result
      }).then(function(){
        console.log("Jquery bind feito");
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#modal-cortar').modal('show')
  });

});

$('.crop_image').click(function(event){
   $image_crop.croppie('result', {
     type: 'canvas',
     size: 'viewport'
   }).then(function(response){
     $.ajax({
       url:"upload.php",
       type: "POST",
       data:{"image": response},
       success:function(data)
       {
         $('#modal-cortar').modal('hide');
         $('#foto-perfil').html(data);
       }
     });
   })
 });
});
