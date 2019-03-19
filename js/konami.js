// a key map of allowed keys
var allowedKeys = {
  37: 'left',
  38: 'up',
  39: 'right',
  40: 'down',
  65: 'a',
  66: 'b'
};

// the 'official' Konami Code sequence
var konamiCode = ['up', 'up', 'down', 'down', 'left', 'right', 'left', 'right', 'b', 'a'];

// a variable to remember the 'position' the user has reached so far.
var konamiCodePosition = 0;

// add keydown event listener
document.addEventListener('keydown', function(e) {
  // get the value of the key code from the key map
  var key = allowedKeys[e.keyCode];
  // get the value of the required key from the konami code
  var requiredKey = konamiCode[konamiCodePosition];

  // compare the key with the required key
  if (key == requiredKey) {

    // move to the next key in the konami code sequence
    konamiCodePosition++;

    // if the last key is reached, activate cheats
    if (konamiCodePosition == konamiCode.length) {
      activateCheats();
      konamiCodePosition = 0;
    }
  } else {
    konamiCodePosition = 0;
  }
});

function activateCheats() {
  var i = 0;
  var Licorne;

  var pas;
  var textlicorne = "J'AIME LES LICORNES ! ";
  for(pas = 0; pas < 1000; pas++)
  {
    var randombr = Math.floor(Math.random()*10);
    var espace = "";

    for (pas2 = 0; pas2 < randombr; pas2++)
    {
      espace = espace + "\n";
    }
    textlicorne = textlicorne+ espace + "J'AIME LES LICORNES ! ";
  }

  //document.getElementsById('masthead').style.backgroundImage = "url('img/konami.jpg')";
  $('#masthead').css("background-image", "url(img/konami.jpg)");
  $('#pres').css("color", "white");
  $('body').css("background", "#FF00FF");
  $('#pres').text(textlicorne);

  alert("LICORNE");
}
