// Circle color themes
possible_colors = ['313131'];
// Randomly choose a color
var color = '#' + possible_colors[Math.floor(Math.random() * possible_colors.length)];

// Update color theme in CSS
function updateColors() {
  document.styleSheets[1].insertRule('input#q {border: 1px solid ' + color + ';}', 0);
  document.styleSheets[1].insertRule('input#q:focus {box-shadow: 0px 0px 10px ' + color + ';}', 0);
  document.styleSheets[1].insertRule('.circle {background: ' + color + ';box-shadow: 0px 0px 10px ' + color + ';}', 0);
  document.styleSheets[1].insertRule('.circle:hover {box-shadow: 0px 0px 15px ' + color + ';}', 0);
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
        $(this).children('img').toggle();
        $(this).children('.txt').css('top', '0px');
    }, function(){
        $(this).children('img').toggle();
        $(this).children('.txt').css('top', '-27px');
    });
});


$(function(){
  $('#a_mods').click(function(){
        $('div#mods').toggle();
  });
});
$(function(){
  $('div.close').click(function(){
        $(this).parent().toggle();
  });
});

// jQuery : On page load
$(window).load(function(){
  // Circle colors
  updateColors();
  // On hover for circle links
  $(function() {
    $(".lnk").hover(function() {
      $(this).before('<span class="cyan">&rsaquo; </span>');
      $(this).after('<span class="cyan"> &lsaquo;</span>');
    }, function() {
      $(this).parent().find("span.cyan").remove();
    });
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
