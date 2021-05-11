var interval = null;
var a = 'Пиздатая защита';
var b = 'Охуеть';
var landing = '';
$(window)
    .load(function () {
        $('#loader-container')
            .delay(500)
            .fadeOut('slow');
    });
$(document)
    .ready(function () {
        $('-')
            .load('');
    });

function pageinfo() {
    $('')
        .load('');
}
$(document)
    .ready(function () {
        $('#pageinfo')
            .load('');
        interval = setInterval("pageinfo()", 4000);
    });

function law() {
    $('#law')
        .load('');
}
$(document)
    .ready(function () {
        $('#law')
            .load('');
        interval = setInterval("law()", 4000);
    });
console.log("\n");
console.log("%c" + a, "font-family:Comic-Sans,Helvetica,Arial,sans-serif;font-size:50px;font-weight:bold;text-transform:uppercase;color:#ffa834;-webkit-text-stroke:2px #26b;");
console.log("\n");
console.log("%c" + b, "font-family:Comic-Sans,Helvetica,Arial,sans-serif;font-size:25px;");

function gocap() {
    $('-')
        .val('');
    $('-')
        .val('');
    $('')
        .html('');
    $('')
        .html('">');
    return false;
}
const phrases = [
  'Neo,',
  'sooner or later',
  'you\'re going to realize',
  'just as I did',
  'that there\'s a difference',
  'between knowing the path',
  'and walking the path'
]

const el = document.querySelector('.center1')
const fx = new TextScramble(el)

let counter = 0
const next = () => {
  fx.setText(phrases[counter]).then(() => {
    setTimeout(next, 800)
  })
  counter = (counter + 1) % phrases.length
}