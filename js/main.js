// Circle color themes
possible_colors = ['a40000', '313131', '1569c7', '43c6db', '347c17'];
// Randomly choose a color
var color = '#' + possible_colors[Math.floor(Math.random() * possible_colors.length)];

// Execute on page load
function onLoad() {
  updateColors();
  document.styleSheets[1].insertRule('#stats {display:none;}', 0);
  document.getElementById('logo').innerHTML = '<img src="/img/logo_60dpi.png">';
}

// Update color theme in CSS
function updateColors() {
  document.styleSheets[1].insertRule('input#q {border: 1px solid ' + color + ';}', 0);
  document.styleSheets[1].insertRule('input#q:focus {box-shadow: 0px 0px 10px ' + color + ';}', 0);
  document.styleSheets[1].insertRule('.circle {background: ' + color + ';box-shadow: 0px 0px 10px ' + color + ';}', 0);
  document.styleSheets[1].insertRule('.circle:hover {box-shadow: 0px 0px 15px ' + color + ';}', 0);
}

// Show server stats
function showStats() {
  document.styleSheets[1].removeRule('#stats {display:none;}', 0);
  document.styleSheets[1].insertRule('#stats {font-size: 32px;}', 0);
  document.styleSheets[1].insertRule('#stats {overflow:hidden;}', 0);
  document.styleSheets[1].insertRule('#stats {position:absolute;}', 0);
  document.styleSheets[1].insertRule('#stats {padding: 30px;}', 0);
  document.styleSheets[1].insertRule('#stats {width:500px;}', 0);
  document.styleSheets[1].insertRule('#stats {height: 500px;}', 0);
  document.styleSheets[1].insertRule('#stats {right: 200px;}', 0);
  document.styleSheets[1].insertRule('#stats {top: -50px;}', 0);
  document.styleSheets[1].insertRule('#stats {margin: 20px;}', 0);
  document.styleSheets[1].insertRule('#stats {font-size: 20px;}', 0);
  document.styleSheets[1].insertRule('#stats {border-radius: 999px;}', 0);
  document.styleSheets[1].insertRule('#stats {background: ' + color + ';}', 0);
  document.styleSheets[1].insertRule('#stats {z-index: 1000;}', 0);
  document.styleSheets[1].insertRule('#stats {box-shadow: 0px 0px 30px ' + color + ', 0px 0px 1000px 1000px rgba(216,216,216, 0.85);}',0);
  document.styleSheets[1].insertRule('#stats {transition: background 100ms ease, box-shadow 100ms ease;}', 0);
}

// Hide server stats
function hideStats() {
  document.styleSheets[1].insertRule('#stats {display:none;}', 0);
  document.styleSheets[1].removeRule('#stats {background: ' + color + ';}', 0);
  document.styleSheets[1].removeRule('#stats {box-shadow: 0px 0px 30px ' + color + ', 0px 0px 1000px 1000px rgba(216,216,216, 0.75);}',0);
  document.styleSheets[1].removeRule('#stats {width:500px;}', 0);
  document.styleSheets[1].removeRule('#stats {height: 500px;}', 0);
}

// Convert a decimal to double digit representation string
function pad(number, length) {
    var str = '' + number
    while (str.length < length) {
        str = '0'+str
    }
    return str
}

// jQuery : Toggle main icons when hovering over circles
$(function() {
    $('.circle').hover(function(){
        $(this).children('.img').toggle();
        $(this).children('.txt').css('top', '0px');
    }, function(){
        $(this).children('.img').toggle();
        $(this).children('.txt').css('top', '-27px');
    });
});

// jQuery : Live clock with date and time
setInterval(function() {
    var date = new Date();
    var offset = new Date().getTimezoneOffset()
        offset = ((offset<0? '+':'-')+ // Note the reversed sign!
        pad(parseInt(Math.abs(offset/60)), 2)+
        pad(Math.abs(offset%60), 2))
    $('#info').html(
        date.toDateString() + ' ' + date.toLocaleTimeString('en-GB') + ' GMT' + offset
    );
}, 1000);

// vim: ts=2 sw=2 et
