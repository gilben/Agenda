
$(function(){
  var l = new Login();
    
   $('input').focusin(function(){
        $('#msg').empty();
   })
})


class Login {
  constructor() {
    this.submitEvent()
  }

  submitEvent(){
    $('form').submit((event)=>{
      event.preventDefault()
      this.sendForm()
    })
  }

  sendForm(){
    let form_data = new FormData();
    form_data.append('username', $('#user').val())
    form_data.append('password', $('#password').val())
    $.ajax({
      url: '../server/check_login.php',
      //dataType: "json",
      cache: false,
      processData: false,
      contentType: false,
      data: form_data,
      type: 'POST',
      success: function(php_response){
    
     
        if (php_response=='OK') {
       
        window.location.href = 'main.html';
        }else {
            
        $('#msg').empty();
            $('#msg').append('<p style="color:red">'+php_response+'</p>');
        }
      },
      error: function(){
        alert("error en la comunicación con el servidor");
      }
    })
  }
}



