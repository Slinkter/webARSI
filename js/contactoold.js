var captcha_a = Math.ceil(Math.random() * 10);
var captcha_b = Math.ceil(Math.random() * 10);
var captcha_c = captcha_a + captcha_b;

// Funcion 1
function generate_captcha(id) {
  var id = id ? id : "lcaptcha";
  $("#" + id).html(captcha_a + " + " + captcha_b + " = ");
}

// Funcion 2
function sendContact() {
  // check for message
  var msg = $("#message").val();
  if (msg.length == 0) {
    $("#message-error").slideDown(500);
    $("#message").focus();
    return false;
  } else $("#message-error").slideUp(500);

  // check for captcha
  var captcha = $("#captcha").val();
  if (captcha != captcha_c) {
    $("#captcha-error").slideDown(500);
    $("#captcha").focus();
    return false;
  } else {
    $("#captcha-error").slideUp(500);
  }

  var data = $("#contact_form > form").serialize();

  $.ajax({
    type: "POST",
    url: "contacto.php",
    data: data,
    cache: false,
    success: function (msg) {},
  });

  $("#contact_form").fadeOut(1000, function () {
    $("#message_sent").slideDown(500);
    location.href = "https://consultingarsi.com/";
    alert('Gracias por escribirnos!! le responderemos pronto');
  });

  return false;
}
