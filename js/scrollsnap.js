!function(n,e,t){"use strict";function o(n){n.each(function(n){var t=e.querySelectorAll(n.getSelectors()),o=n.getDeclaration();[].forEach.call(t,function(n){a(n,o)})})}function l(n){n.each(function(n){var t=e.querySelectorAll(n.getSelectors());[].forEach.call(t,function(n){r(n)})})}function a(n,t){if("undefined"!=typeof t["scroll-snap-coordinate"])return n.snapLengthUnit=x(t),i(n);var o=n.tagName;("body"==o.toLowerCase()||"html"==o.toLowerCase())&&(n=e),n.addEventListener("scroll",F,!1),"undefined"!=typeof t["scroll-snap-destination"]?n.snapLengthUnit=x(t):n.snapLengthUnit=p(t),n.snapElements=[]}function r(n){var t=n.tagName;("body"==t.toLowerCase()||"html"==t.toLowerCase())&&(n=e),n.removeEventListener("scroll",F,!1),n.snapLengthUnit=null,n.snapElements=[]}function i(n){for(var e=n;n&&n!==document;n=n.parentNode)"undefined"!=typeof n.snapElements&&n.snapElements.push(e)}function s(n,e,t){var o={y:d(e,e.snapLengthUnit.y),x:m(e,e.snapLengthUnit.x)},l=n.scrollTop,a=n.scrollLeft,r={y:l/o.y,x:a/o.x},i={y:H.y/o.y,x:H.x/o.x},s={y:0,x:0};s.y=c(t.y,r.y),s.x=c(t.x,r.x),s.y=f(i.y,r.y,s.y,H.y,l),s.x=f(i.x,r.x,s.x,H.x,a);var u={y:s.y*o.y,x:s.x*o.x};return u.y=y(0,h(n),u.y),u.x=y(0,v(n),u.x),u}function u(n,e,t){for(var o=e.snapElements.length,l=n.scrollTop,a=n.scrollLeft,r=Math.min(t.y,t.x),i={y:d(e,e.snapLengthUnit.y),x:m(e,e.snapLengthUnit.x)},s={y:0,x:0},u=k+r;o>u&&u>=0;u+=r)if(D=e.snapElements[u],s={y:D.offsetTop-n.offsetTop+d(D,D.snapLengthUnit.y),x:D.offsetLeft-n.offsetLeft+m(D,D.snapLengthUnit.x)},D.snapCoords=s,a<=s.x&&a+g(n)>=s.x&&l<=s.y&&l+L(n)>=s.y)return k=u,{y:y(0,h(n),s.y-i.y),x:y(0,v(n),s.x-i.x)};return 1==r&&u===o-1?(k=o-1,{y:y(0,h(n),s.y-i.y),x:y(0,v(n),s.x-i.x)}):-1==r&&0===u?(k=0,{y:y(0,h(n),s.y-i.y),x:y(0,v(n),s.x-i.x)}):{y:y(0,h(n),e.snapElements[k].snapCoords.y-i.y),x:y(0,v(n),e.snapElements[k].snapCoords.x-i.x)}}function c(n,e){return-1===n?Math.floor(e):Math.ceil(e)}function f(n,e,t,o,l){return Math.abs(n-e)>=b&&Math.abs(t-e)>T?Math.round(e):Math.abs(o-l)<N&&Math.abs(n-e)<b&&Math.abs(t-e)>w?Math.round(e):t}function y(n,e,t){return Math.max(Math.min(t,e),n)}function p(n){var e,t=/repeat\((\d+)(px|vh|vw|%)\)/g,o={y:{value:"px",unit:0},x:{value:"px",unit:0}};return"undefined"!==n["scroll-snap-points-y"]&&(e=t.exec(n["scroll-snap-points-y"]),null!==e&&(o.y={value:e[1],unit:e[2]})),"undefined"!==n["scroll-snap-points-x"]&&(e=t.exec(n["scroll-snap-points-x"]),null!==e&&(o.x={value:e[1],unit:e[2]})),o}function x(n){var e,t,o=/(\d+)(px|%) (\d+)(px|%)/g,l={y:{value:"px",unit:0},x:{value:"px",unit:0}};return"undefined"!=typeof n["scroll-snap-coordinate"]?e="scroll-snap-coordinate":"undefined"!=typeof n["scroll-snap-destination"]&&(e="scroll-snap-destination"),null!==e&&(t=o.exec(n[e]),null!==t&&(l.y={value:t[1],unit:t[2]},l.x={value:t[3],unit:t[4]})),l}function d(t,o){return"vh"==o.unit?Math.max(e.documentElement.clientHeight,n.innerHeight||1)/100*o.value:"%"==o.unit?L(t)/100*o.value:L(t)/o.value}function m(t,o){return"vw"==o.unit?Math.max(e.documentElement.clientWidth,n.innerWidth||1)/100*o.value:"%"==o.unit?g(t)/100*o.value:g(t)/o.value}function h(n){return n.scrollHeight}function v(n){return n.scrollWidth}function L(n){return n.offsetHeight}function g(n){return n.offsetWidth}function E(t){return t==e||t==n?e.documentElement.scrollTop>0||e.documentElement.scrollLeft>0?e.documentElement:e.querySelector("body"):t}function M(t,o){var l=Math.abs(t-o),a=100/Math.max(e.documentElement.clientHeight,n.innerHeight||1)*l,r=100/S*a;return isNaN(r)?0:Math.max(S/1.5,Math.min(r,S))}var T=1-.18,w=.95,N=5,b=2,U=45,S=768;if(!("scrollSnapType"in e.documentElement.style||"webkitScrollSnapType"in e.documentElement.style||"msScrollSnapType"in e.documentElement.style)){var C,q,A=null,H=null,F=function(n){C=n.target,q=E(C),P&&(cancelAnimationFrame(P)||clearTimeout(P)),A?clearTimeout(A):H={y:q.scrollTop,x:q.scrollLeft},A=setTimeout(W,U)},W=function(){if(H.y!=q.scrollTop||H.x!=q.scrollLeft){var n,e={y:H.y-q.scrollTop>0?-1:1,x:H.x-q.scrollLeft>0?-1:1};n="undefined"!=typeof q.snapElements&&q.snapElements.length>0?u(q,C,e):s(q,C,e),C.removeEventListener("scroll",F,!1),j(q,n,function(){C.addEventListener("scroll",F,!1)}),isNaN(n.x||!isNaN(n.y))||(H=n)}},D=null,k=0,R=function(n){return n*n*n},z=function(n,e,t,o){return t>o?e:n+(e-n)*R(t/o)},P=null,j=function(e,t,o){var l={y:e.scrollTop,x:e.scrollLeft},a=Date.now(),r=n.requestAnimationFrame||n.mozRequestAnimationFrame||n.webkitRequestAnimationFrame||function(e){n.setTimeout(e,15)},i=Math.max(M(l.y,t.y),M(l.x,t.x)),s=function(){var n=Date.now()-a;if(isNaN(t.y)||(e.scrollTop=z(l.y,t.y,n,i)),isNaN(t.x)||(e.scrollLeft=z(l.x,t.x,n,i)),n>i){if("function"==typeof o)return o(t)}else P=r(s)};s()};new Polyfill({declarations:["scroll-snap-type:*","scroll-snap-point-y:*","scroll-snap-coordinate:*","scroll-snap-destination:*"]}).doMatched(o).undoUnmatched(l)}}(window,document);
