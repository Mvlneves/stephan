$(function () {
  new WOW().init();
  
  var $carousel = $('.carousel').flickity({
    cellSelector: '.carousel-cell',
    pageDots: true,
    imagesLoaded: true,
    initialIndex: 0,
    draggable: true,
    contain: true,
    prevNextButtons: false,
    wrapAround: true, 
    pauseAutoPlayOnHover: false,
    cellAlign: 'left'
  });
})

$('button.close').click(function () {
  $('#form-dados').hide();
})

function EnviarForm(local){
    var errors=0;
    
    var email = $('#email-'+local).val();
    if(checkEmail(email) != true || email == ''){
      $('#email-'+local).addClass('error-form');
      $('#email-'+local).removeClass('valide-form');
      errors++;
    }else{
      $('#email-'+local).removeClass('error-form');
      $('#email-'+local).addClass('valide-form');
    }

    var txtemail = email;

    if (errors == 0) {
      $.ajax({
        type: 'POST',
        data: {email:txtemail},
        url:'form.php',
        success: function(retorno){
          $('#form-dados').show();
          $('#email-'+local).removeClass('error-form');
          $('#email-'+local).val('');
        }
      })
    }
}

function checkEmail(email){
  if (email == "teste@teste.com" ||
  email == "teste@teste.com.br" ||
  email == "teste@teste.ag") 
  return false;

  if (email.indexOf("teste") != -1){
    return false;
  }

  var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);
  if(typeof(email) == "string"){
    if(er.test(email)){ return true; }
  }else if(typeof(email) == "object"){
    if(er.test(email.value)){ 
      return true; 
    }
  }else{
    return false;
  }
}