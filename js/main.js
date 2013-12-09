
function onLoad() {
  updateClock();
  setInterval('updateClock()', 1000);
  updateColors();
  document.styleSheets[1].insertRule('#stats {display:none;}', 0);
}
function updateClock() {
  Date.Minutes = function() {
    var val = now.getMinutes();
    if (val < 10) return ("0" + val.toString());
    else return val.toString();
  }
  Date.Hours = function() {
    var val = now.getHours()%12;
    if (val == 0) val = 12;
    return val;
  }
  var now = new Date(),
  time = Date.Hours() + ':' + Date.Minutes();
  document.getElementById('time').innerHTML = ["", time].join('');
  setTimeout(updateClock, 1000);
}
possible_colors = ['49bc78', 'c44d63', '3998c4', '568555', '019fde', '4E4E4E', 'd74946',
                    '665348', '4d7c89', 'a8466c', 'a8a3a7', '9b4637', '3d63a7', '69505e'];
var color = '#' + possible_colors[Math.floor(Math.random() * possible_colors.length)];

function updateColors() {
  document.styleSheets[1].insertRule('input#q {border: 1px solid ' + color + ';}', 0);
  document.styleSheets[1].insertRule('input#q:focus {box-shadow: 0px 0px 10px ' + color + ';}', 0);
  document.styleSheets[1].insertRule('.circle {background: ' + color + ';}', 0);
  document.styleSheets[1].insertRule('.circle:hover {box-shadow: 0px 0px 30px ' + color + ';}', 0);
}

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

function hideStats() {
  document.styleSheets[1].insertRule('#stats {display:none;}', 0);
  document.styleSheets[1].removeRule('#stats {background: ' + color + ';}', 0);
  document.styleSheets[1].removeRule('#stats {box-shadow: 0px 0px 30px ' + color + ', 0px 0px 1000px 1000px rgba(216,216,216, 0.75);}',0);
  document.styleSheets[1].removeRule('#stats {width:500px;}', 0);
  document.styleSheets[1].removeRule('#stats {height: 500px;}', 0);
}
