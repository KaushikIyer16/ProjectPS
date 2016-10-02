'use strict';

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

var blue_shade = '#263E8E';
var blue_with_opacity = 'rgba(35,63,142,0.67)';
var violet_shade = '#6E2E88';
var violet_with_opacity = 'rgba(111,46,136,0.67)';

var shape3 = new mojs.Shape({
  shape: 'circle',
  radius: 65,
  duration: 2000,
  delay: 900,
  easing: 'cubic.out',
  fill: 'transparent',
  stroke: { blue_shade: blue_with_opacity },
  scale: { 0: 4 },
  strokeWidth: { 3: 1 },
  opacity: { 1: 0 },
  repeat: 999
});

var shape4 = new mojs.Shape({
  shape: 'circle',
  radius: 80,
  duration: 2200,
  delay: 700,
  easing: 'cubic.out',
  fill: 'transparent',
  stroke: { violet_shade: violet_with_opacity },
  scale: { 0: 4 },
  strokeWidth: { 3: 1 },
  opacity: { 1: 0 },
  repeat: 999
});

var shape5 = new mojs.Shape({
  shape: 'circle',
  radius: 95,
  duration: 2100,
  delay: 800,
  easing: 'cubic.out',
  fill: 'transparent',
  stroke: { blue_shade: blue_with_opacity },
  scale: { 0: 4 },
  strokeWidth: { 3: 1 },
  opacity: { 1: 0 },
  repeat: 999
});

var cir = new mojs.Shape({
  shape: 'circle',
  radius: 105,
  duration: 2050,
  delay: 850,
  easing: 'cubic.out',
  fill: 'transparent',
  stroke: { violet_shade: violet_with_opacity },
  scale: { 0: 4.5 },
  strokeWidth: { 3: 1 },
  opacity: { 1: 0 },
  repeat: 999
});

var tri = new mojs.Shape({
  shape: 'polygon',
  fill: { 'orange': 'deeppink', easing: 'cubic.out' },
  points: 5,
  radius: 45,
  angle: { 0: 360 },
  duration: 2000,
  delay: 1800
}).then({
  scale: { 1: 0 },
  opacity: { '100%': '0' }
});

var COLORS = {
  white: '#ffffff',
  black: '#000000',
  green: '#49F2CC',
  lightGrey: 'rgba(212,212,212,0.8)',
  grey: '#29363B',
  cyan: 'cyan',
  yellow: '#FFE202',
  hotpink: 'deeppink'
};

var _getWindowSize = function _getWindowSize() {
  var w = window;
  return Math.max(w.innerHeight || e.clientHeight || g.clientHeight, w.innerWidth || e.clientWidth || g.clientWidth);
};

var _calcScale = function _calcScale(radius) {
  return 1.4 * (_getWindowSize() / radius / 2);
};

var circleSize = 700,
    scale = _calcScale(circleSize);
var opts = {
  radius: circleSize,
  fill: blue_shade,
  scale: { 0.05: 0.2 },
  duration: 465,
  easing: 'cubic.out',
  isShowEnd: false,
  isForce3d: true
};

var circle1 = new mojs.Shape(opts).then({
  easing: 'cubic.inout',
  scale: .125,
  duration: 350
}).then({
  easing: 'cubic.inout',
  scale: scale,
  duration: 465
});

var circle2 = new mojs.Shape({
  radius: circleSize,
  fill: COLORS.lightGrey,
  easing: 'cubic.out',
  isShowEnd: false,
  isForce3d: true,
  scale: { 0: .1125 },
  duration: 407,
  delay: 580
}).then({
  easing: 'cubic.inout',
  scale: scale,
  duration: 350
});

var circle3 = new mojs.Shape(_defineProperty({
  radius: circleSize,
  fill: COLORS.lightGrey,
  easing: 'cubic.out',
  isShowEnd: false,
  isForce3d: true,
  scale: { 0: 3 },
  duration: 580,
  delay: 1160,
  isShowStart: true
}, 'isShowEnd', false));

var smallCircle = new mojs.Shape({
  radius: { 5: 25 },
  fill: 'none',
  stroke: violet_shade,
  strokeWidth: { 20: 0 },
  isShowEnd: false,
  delay: 700,
  duration: 290
});

var lineOpts = {
  shape: 'line',
  x: -180,
  radius: 50,
  radiusY: 0,
  stroke: COLORS.grey,
  strokeWidth: { 15: 0 },
  duration: 580,
  isShowEnd: false,
  strokeDasharray: '100% 100%',
  strokeDashoffset: { '-100%': '100%' },
  easing: 'cubic.out'
};
var line1 = new mojs.Shape(lineOpts);

var line2 = new mojs.Shape(_defineProperty({
  shape: 'line',
  x: -180,
  radius: 50,
  radiusY: 0,
  stroke: COLORS.grey,
  strokeWidth: { 15: 0 },
  duration: 580,
  isShowEnd: false,
  strokeDasharray: '100% 100%',
  strokeDashoffset: { '-100%': '100%' },
  easing: 'cubic.out',
  angle: 180
}, 'x', -lineOpts.x));

var timeline = new mojs.Timeline();
timeline.add(circle1, circle2, circle3, smallCircle, line1, line2, shape3, shape4, shape5, cir);

$(document).ready(
  function(){
    timeline.play();
  }
);
$('.nav-container>ul>li>a').hover(function(){
  var itag = $(this).children().first().first().css("color","white");
  console.log(itag);
});
