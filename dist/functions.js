!function i(r,o,s){function u(n,t){if(!o[n]){if(!r[n]){var e="function"==typeof require&&require;if(!t&&e)return e(n,!0);if(a)return a(n,!0);throw new Error("Cannot find module '"+n+"'")}e=o[n]={exports:{}};r[n][0].call(e.exports,function(t){var e=r[n][1][t];return u(e||t)},e,e.exports,i,r,o,s)}return o[n].exports}for(var a="function"==typeof require&&require,t=0;t<s.length;t++)u(s[t]);return u}({1:[function(t,e,n){"use strict";var i,r=(i=t("@glidejs/glide"))&&i.__esModule?i:{default:i};var o=function(){document.querySelector(".glide")&&new r.default(".glide",{type:"carousel",gap:"0"}).mount({})},s=function(){document.querySelectorAll('a[href^="#"]').forEach(function(t){t.onclick=function(t){t.preventDefault();t=this.getAttribute("href"),t=document.querySelector(t).offsetTop+0;window.scrollTo({top:t,behavior:"smooth"})}})};document.addEventListener("DOMContentLoaded",function(){o(),s()})},{"@glidejs/glide":2}],2:[function(t,e,n){var i,r;i=this,r=function(){"use strict";var n={type:"slider",startAt:0,perView:1,focusAt:0,gap:10,autoplay:!1,hoverpause:!0,keyboard:!0,bound:!1,swipeThreshold:80,dragThreshold:120,perTouch:!1,touchRatio:.5,touchAngle:45,animationDuration:400,rewind:!0,rewindDuration:800,animationTimingFunc:"cubic-bezier(.165, .840, .440, 1)",throttle:10,direction:"ltr",peek:0,breakpoints:{},classes:{direction:{ltr:"glide--ltr",rtl:"glide--rtl"},slider:"glide--slider",carousel:"glide--carousel",swipeable:"glide--swipeable",dragging:"glide--dragging",cloneSlide:"glide__slide--clone",activeNav:"glide__bullet--active",activeSlide:"glide__slide--active",disabledArrow:"glide__arrow--disabled"}};function u(t){console.error("[Glide warn]: "+t)}var i="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},r=function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")},t=function(t,e,n){return e&&o(t.prototype,e),n&&o(t,n),t};function o(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function s(t,e,n){null===t&&(t=Function.prototype);var i=Object.getOwnPropertyDescriptor(t,e);if(void 0!==i){if("value"in i)return i.value;i=i.get;return void 0!==i?i.call(n):void 0}if(t=Object.getPrototypeOf(t),null!==t)return s(t,e,n)}var a=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n,i=arguments[e];for(n in i)Object.prototype.hasOwnProperty.call(i,n)&&(t[n]=i[n])}return t},e=function(t,e){if(!t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!e||"object"!=typeof e&&"function"!=typeof e?t:e};function h(t){return parseInt(t)}function c(t){return"string"==typeof t}function l(t){var e=void 0===t?"undefined":i(t);return"function"===e||"object"===e&&t}function f(t){return"function"==typeof t}function d(t){return void 0===t}function v(t){return t.constructor===Array}function p(t,e,n){Object.defineProperty(t,e,n)}function m(t,e){var n=a({},t,e);return e.hasOwnProperty("classes")&&(n.classes=a({},t.classes,e.classes),e.classes.hasOwnProperty("direction")&&(n.classes.direction=a({},t.classes.direction,e.classes.direction))),e.hasOwnProperty("breakpoints")&&(n.breakpoints=a({},t.breakpoints,e.breakpoints)),n}var g=(t(y,[{key:"on",value:function(t,e){if(v(t))for(var n=0;n<t.length;n++)this.on(t[n],e);this.hop.call(this.events,t)||(this.events[t]=[]);var i=this.events[t].push(e)-1;return{remove:function(){delete this.events[t][i]}}}},{key:"emit",value:function(t,e){if(v(t))for(var n=0;n<t.length;n++)this.emit(t[n],e);this.hop.call(this.events,t)&&this.events[t].forEach(function(t){t(e||{})})}}]),y);function y(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};r(this,y),this.events=t,this.hop=t.hasOwnProperty}var b=(t(w,[{key:"mount",value:function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};return this._e.emit("mount.before"),l(t)?this._c=function(t,e,n){var i,r,o={};for(i in e)f(e[i])?o[i]=e[i](t,o,n):u("Extension must be a function");for(r in o)f(o[r].mount)&&o[r].mount();return o}(this,t,this._e):u("You need to provide a object on `mount()`"),this._e.emit("mount.after"),this}},{key:"mutate",value:function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:[];return v(t)?this._t=t:u("You need to provide a array on `mutate()`"),this}},{key:"update",value:function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};return this.settings=m(this.settings,t),t.hasOwnProperty("startAt")&&(this.index=t.startAt),this._e.emit("update"),this}},{key:"go",value:function(t){return this._c.Run.make(t),this}},{key:"move",value:function(t){return this._c.Transition.disable(),this._c.Move.make(t),this}},{key:"destroy",value:function(){return this._e.emit("destroy"),this}},{key:"play",value:function(){var t=0<arguments.length&&void 0!==arguments[0]&&arguments[0];return t&&(this.settings.autoplay=t),this._e.emit("play"),this}},{key:"pause",value:function(){return this._e.emit("pause"),this}},{key:"disable",value:function(){return this.disabled=!0,this}},{key:"enable",value:function(){return this.disabled=!1,this}},{key:"on",value:function(t,e){return this._e.on(t,e),this}},{key:"isType",value:function(t){return this.settings.type===t}},{key:"settings",get:function(){return this._o},set:function(t){l(t)?this._o=t:u("Options must be an `object` instance.")}},{key:"index",get:function(){return this._i},set:function(t){this._i=h(t)}},{key:"type",get:function(){return this.settings.type}},{key:"disabled",get:function(){return this._d},set:function(t){this._d=!!t}}]),w);function w(t){var e=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{};r(this,w),this._c={},this._t=[],this._e=new g,this.disabled=!1,this.selector=t,this.settings=m(n,e),this.index=this.settings.startAt}function _(){return(new Date).getTime()}function k(n,i,r){var o=void 0,s=void 0,u=void 0,a=void 0,c=0;r=r||{};function l(){c=!1===r.leading?0:_(),o=null,a=n.apply(s,u),o||(s=u=null)}function t(){var t=_();c||!1!==r.leading||(c=t);var e=i-(t-c);return s=this,u=arguments,e<=0||i<e?(o&&(clearTimeout(o),o=null),c=t,a=n.apply(s,u),o||(s=u=null)):o||!1===r.trailing||(o=setTimeout(l,e)),a}return t.cancel=function(){clearTimeout(o),c=0,o=s=u=null},t}var S={ltr:["marginLeft","marginRight"],rtl:["marginRight","marginLeft"]};function H(t){if(t&&t.parentNode){for(var e=t.parentNode.firstChild,n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n}return[]}function T(t){return!!(t&&t instanceof window.HTMLElement)}var x='[data-glide-el="track"]';var O=(t(A,[{key:"on",value:function(t,e,n){var i=3<arguments.length&&void 0!==arguments[3]&&arguments[3];c(t)&&(t=[t]);for(var r=0;r<t.length;r++)this.listeners[t[r]]=n,e.addEventListener(t[r],this.listeners[t[r]],i)}},{key:"off",value:function(t,e){var n=2<arguments.length&&void 0!==arguments[2]&&arguments[2];c(t)&&(t=[t]);for(var i=0;i<t.length;i++)e.removeEventListener(t[i],this.listeners[t[i]],n)}},{key:"destroy",value:function(){delete this.listeners}}]),A);function A(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};r(this,A),this.listeners=t}var M=["ltr","rtl"],C={">":"<","<":">","=":"="};function j(t,e){return{modify:function(t){return e.Direction.is("rtl")?-t:t}}}function L(i,r,o){var s=[function(e,n){return{modify:function(t){return t+n.Gaps.value*e.index}}},function(t,e){return{modify:function(t){return t+e.Clones.grow/2}}},function(n,i){return{modify:function(t){if(0<=n.settings.focusAt){var e=i.Peek.value;return l(e)?t-e.before:t-e}return t}}},function(o,s){return{modify:function(t){var e=s.Gaps.value,n=s.Sizes.width,i=o.settings.focusAt,r=s.Sizes.slideWidth;return"center"===i?t-(n/2-r/2):t-r*i-e*i}}}].concat(i._t,[j]);return{mutate:function(t){for(var e=0;e<s.length;e++){var n=s[e];f(n)&&f(n().modify)?t=n(i,r,o).modify(t):u("Transformer should be a function that returns an object with `modify()` method")}return t}}}var P=!1;try{var E=Object.defineProperty({},"passive",{get:function(){P=!0}});window.addEventListener("testPassive",null,E),window.removeEventListener("testPassive",null,E)}catch(t){}var z=P,D=["touchstart","mousedown"],R=["touchmove","mousemove"],q=["touchend","touchcancel","mouseup","mouseleave"],W=["mousedown","mousemove","mouseup","mouseleave"];function G(t){return l(t)?(n=t,Object.keys(n).sort().reduce(function(t,e){return t[e]=n[e],t[e],t},{})):(u("Breakpoints option must be an object"),{});var n}var B={Html:function(e,t){var n={mount:function(){this.root=e.selector,this.track=this.root.querySelector(x),this.slides=Array.prototype.slice.call(this.wrapper.children).filter(function(t){return!t.classList.contains(e.settings.classes.cloneSlide)})}};return p(n,"root",{get:function(){return n._r},set:function(t){T(t=c(t)?document.querySelector(t):t)?n._r=t:u("Root element must be a existing Html node")}}),p(n,"track",{get:function(){return n._t},set:function(t){T(t)?n._t=t:u("Could not find track element. Please use "+x+" attribute.")}}),p(n,"wrapper",{get:function(){return n.track.children[0]}}),n},Translate:function(r,o,s){var u={set:function(t){t=L(r,o).mutate(t);o.Html.wrapper.style.transform="translate3d("+-1*t+"px, 0px, 0px)"},remove:function(){o.Html.wrapper.style.transform=""}};return s.on("move",function(t){var e=o.Gaps.value,n=o.Sizes.length,i=o.Sizes.slideWidth;return r.isType("carousel")&&o.Run.isOffset("<")?(o.Transition.after(function(){s.emit("translate.jump"),u.set(i*(n-1))}),u.set(-i-e*n)):r.isType("carousel")&&o.Run.isOffset(">")?(o.Transition.after(function(){s.emit("translate.jump"),u.set(0)}),u.set(i*n+e*n)):u.set(t.movement)}),s.on("destroy",function(){u.remove()}),u},Transition:function(n,e,t){var i=!1,r={compose:function(t){var e=n.settings;return i?t+" 0ms "+e.animationTimingFunc:t+" "+this.duration+"ms "+e.animationTimingFunc},set:function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:"transform";e.Html.wrapper.style.transition=this.compose(t)},remove:function(){e.Html.wrapper.style.transition=""},after:function(t){setTimeout(function(){t()},this.duration)},enable:function(){i=!1,this.set()},disable:function(){i=!0,this.set()}};return p(r,"duration",{get:function(){var t=n.settings;return n.isType("slider")&&e.Run.offset?t.rewindDuration:t.animationDuration}}),t.on("move",function(){r.set()}),t.on(["build.before","resize","translate.jump"],function(){r.disable()}),t.on("run",function(){r.enable()}),t.on("destroy",function(){r.remove()}),r},Direction:function(t,e,n){var i={mount:function(){this.value=t.settings.direction},resolve:function(t){var e=t.slice(0,1);return this.is("rtl")?t.split(e).join(C[e]):t},is:function(t){return this.value===t},addClass:function(){e.Html.root.classList.add(t.settings.classes.direction[this.value])},removeClass:function(){e.Html.root.classList.remove(t.settings.classes.direction[this.value])}};return p(i,"value",{get:function(){return i._v},set:function(t){-1<M.indexOf(t)?i._v=t:u("Direction value must be `ltr` or `rtl`")}}),n.on(["destroy","update"],function(){i.removeClass()}),n.on("update",function(){i.mount()}),n.on(["build.before","update"],function(){i.addClass()}),i},Peek:function(n,t,e){var i={mount:function(){this.value=n.settings.peek}};return p(i,"value",{get:function(){return i._v},set:function(t){l(t)?(t.before=h(t.before),t.after=h(t.after)):t=h(t),i._v=t}}),p(i,"reductor",{get:function(){var t=i.value,e=n.settings.perView;return l(t)?t.before/e+t.after/e:2*t/e}}),e.on(["resize","update"],function(){i.mount()}),i},Sizes:function(t,i,e){var n={setupSlides:function(){for(var t=this.slideWidth+"px",e=i.Html.slides,n=0;n<e.length;n++)e[n].style.width=t},setupWrapper:function(t){i.Html.wrapper.style.width=this.wrapperSize+"px"},remove:function(){for(var t=i.Html.slides,e=0;e<t.length;e++)t[e].style.width="";i.Html.wrapper.style.width=""}};return p(n,"length",{get:function(){return i.Html.slides.length}}),p(n,"width",{get:function(){return i.Html.root.offsetWidth}}),p(n,"wrapperSize",{get:function(){return n.slideWidth*n.length+i.Gaps.grow+i.Clones.grow}}),p(n,"slideWidth",{get:function(){return n.width/t.settings.perView-i.Peek.reductor-i.Gaps.reductor}}),e.on(["build.before","resize","update"],function(){n.setupSlides(),n.setupWrapper()}),e.on("destroy",function(){n.remove()}),n},Gaps:function(e,o,t){var n={apply:function(t){for(var e=0,n=t.length;e<n;e++){var i=t[e].style,r=o.Direction.value;i[S[r][0]]=0!==e?this.value/2+"px":"",e!==t.length-1?i[S[r][1]]=this.value/2+"px":i[S[r][1]]=""}},remove:function(t){for(var e=0,n=t.length;e<n;e++){var i=t[e].style;i.marginLeft="",i.marginRight=""}}};return p(n,"value",{get:function(){return h(e.settings.gap)}}),p(n,"grow",{get:function(){return n.value*(o.Sizes.length-1)}}),p(n,"reductor",{get:function(){var t=e.settings.perView;return n.value*(t-1)/t}}),t.on(["build.after","update"],k(function(){n.apply(o.Html.wrapper.children)},30)),t.on("destroy",function(){n.remove(o.Html.wrapper.children)}),n},Move:function(t,n,i){var e={mount:function(){this._o=0},make:function(){var t=this,e=0<arguments.length&&void 0!==arguments[0]?arguments[0]:0;this.offset=e,i.emit("move",{movement:this.value}),n.Transition.after(function(){i.emit("move.after",{movement:t.value})})}};return p(e,"offset",{get:function(){return e._o},set:function(t){e._o=d(t)?0:h(t)}}),p(e,"translate",{get:function(){return n.Sizes.slideWidth*t.index}}),p(e,"value",{get:function(){var t=this.offset,e=this.translate;return n.Direction.is("rtl")?e+t:e-t}}),i.on(["build.before","run"],function(){e.make()}),e},Clones:function(d,h,t){var e={mount:function(){this.items=[],d.isType("carousel")&&(this.items=this.collect())},collect:function(){for(var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:[],e=h.Html.slides,n=d.settings,i=n.perView,r=n.classes,n=i+ +!!d.settings.peek,o=e.slice(0,n),s=e.slice(-n),u=0;u<Math.max(1,Math.floor(i/e.length));u++){for(var a=0;a<o.length;a++){var c=o[a].cloneNode(!0);c.classList.add(r.cloneSlide),t.push(c)}for(var l=0;l<s.length;l++){var f=s[l].cloneNode(!0);f.classList.add(r.cloneSlide),t.unshift(f)}}return t},append:function(){for(var t=this.items,e=h.Html,n=e.wrapper,i=e.slides,e=Math.floor(t.length/2),r=t.slice(0,e).reverse(),o=t.slice(e,t.length),s=h.Sizes.slideWidth+"px",u=0;u<o.length;u++)n.appendChild(o[u]);for(var a=0;a<r.length;a++)n.insertBefore(r[a],i[0]);for(var c=0;c<t.length;c++)t[c].style.width=s},remove:function(){for(var t=this.items,e=0;e<t.length;e++)h.Html.wrapper.removeChild(t[e])}};return p(e,"grow",{get:function(){return(h.Sizes.slideWidth+h.Gaps.value)*e.items.length}}),t.on("update",function(){e.remove(),e.mount(),e.append()}),t.on("build.before",function(){d.isType("carousel")&&e.append()}),t.on("destroy",function(){e.remove()}),e},Resize:function(t,e,n){var i=new O,r={mount:function(){this.bind()},bind:function(){i.on("resize",window,k(function(){n.emit("resize")},t.settings.throttle))},unbind:function(){i.off("resize",window)}};return n.on("destroy",function(){r.unbind(),i.destroy()}),r},Build:function(n,i,t){var e={mount:function(){t.emit("build.before"),this.typeClass(),this.activeClass(),t.emit("build.after")},typeClass:function(){i.Html.root.classList.add(n.settings.classes[n.settings.type])},activeClass:function(){var e=n.settings.classes,t=i.Html.slides[n.index];t&&(t.classList.add(e.activeSlide),H(t).forEach(function(t){t.classList.remove(e.activeSlide)}))},removeClasses:function(){var e=n.settings.classes;i.Html.root.classList.remove(e[n.settings.type]),i.Html.slides.forEach(function(t){t.classList.remove(e.activeSlide)})}};return t.on(["destroy","update"],function(){e.removeClasses()}),t.on(["resize","update"],function(){e.mount()}),t.on("move.after",function(){e.activeClass()}),e},Run:function(o,n,i){var t={mount:function(){this._o=!1},make:function(t){var e=this;o.disabled||(o.disable(),this.move=t,i.emit("run.before",this.move),this.calculate(),i.emit("run",this.move),n.Transition.after(function(){e.isStart()&&i.emit("run.start",e.move),e.isEnd()&&i.emit("run.end",e.move),(e.isOffset("<")||e.isOffset(">"))&&(e._o=!1,i.emit("run.offset",e.move)),i.emit("run.after",e.move),o.enable()}))},calculate:function(){var t=this.move,e=this.length,n=t.steps,i=t.direction,r="number"==typeof h(n)&&0!==h(n);switch(i){case">":">"===n?o.index=e:this.isEnd()?o.isType("slider")&&!o.settings.rewind||(this._o=!0,o.index=0):r?o.index+=Math.min(e-o.index,-h(n)):o.index++;break;case"<":"<"===n?o.index=0:this.isStart()?o.isType("slider")&&!o.settings.rewind||(this._o=!0,o.index=e):r?o.index-=Math.min(o.index,h(n)):o.index--;break;case"=":o.index=n;break;default:u("Invalid direction pattern ["+i+n+"] has been used")}},isStart:function(){return 0===o.index},isEnd:function(){return o.index===this.length},isOffset:function(t){return this._o&&this.move.direction===t}};return p(t,"move",{get:function(){return this._m},set:function(t){var e=t.substr(1);this._m={direction:t.substr(0,1),steps:e?h(e)?h(e):e:0}}}),p(t,"length",{get:function(){var t=o.settings,e=n.Html.slides.length;return o.isType("slider")&&"center"!==t.focusAt&&t.bound?e-1-(h(t.perView)-1)+h(t.focusAt):e-1}}),p(t,"offset",{get:function(){return this._o}}),t},Swipe:function(u,a,c){var n=new O,l=0,f=0,d=0,e=!1,i=!!z&&{passive:!0},t={mount:function(){this.bindSwipeStart()},start:function(t){e||u.disabled||(this.disable(),t=this.touches(t),l=null,f=h(t.pageX),d=h(t.pageY),this.bindSwipeMove(),this.bindSwipeEnd(),c.emit("swipe.start"))},move:function(t){if(!u.disabled){var e=u.settings,n=e.touchAngle,i=e.touchRatio,r=e.classes,o=this.touches(t),s=h(o.pageX)-f,e=h(o.pageY)-d,o=Math.abs(s<<2),e=Math.abs(e<<2),o=Math.sqrt(o+e),e=Math.sqrt(e);if(!(180*(l=Math.asin(e/o))/Math.PI<n))return!1;t.stopPropagation(),a.Move.make(s*parseFloat(i)),a.Html.root.classList.add(r.dragging),c.emit("swipe.move")}},end:function(t){var e,n,i,r;u.disabled||(e=u.settings,r=this.touches(t),n=this.threshold(t),i=r.pageX-f,t=180*l/Math.PI,r=Math.round(i/a.Sizes.slideWidth),this.enable(),n<i&&t<e.touchAngle?(e.perTouch&&(r=Math.min(r,h(e.perTouch))),a.Direction.is("rtl")&&(r=-r),a.Run.make(a.Direction.resolve("<"+r))):i<-n&&t<e.touchAngle?(e.perTouch&&(r=Math.max(r,-h(e.perTouch))),a.Direction.is("rtl")&&(r=-r),a.Run.make(a.Direction.resolve(">"+r))):a.Move.make(),a.Html.root.classList.remove(e.classes.dragging),this.unbindSwipeMove(),this.unbindSwipeEnd(),c.emit("swipe.end"))},bindSwipeStart:function(){var e=this,t=u.settings;t.swipeThreshold&&n.on(D[0],a.Html.wrapper,function(t){e.start(t)},i),t.dragThreshold&&n.on(D[1],a.Html.wrapper,function(t){e.start(t)},i)},unbindSwipeStart:function(){n.off(D[0],a.Html.wrapper,i),n.off(D[1],a.Html.wrapper,i)},bindSwipeMove:function(){var e=this;n.on(R,a.Html.wrapper,k(function(t){e.move(t)},u.settings.throttle),i)},unbindSwipeMove:function(){n.off(R,a.Html.wrapper,i)},bindSwipeEnd:function(){var e=this;n.on(q,a.Html.wrapper,function(t){e.end(t)})},unbindSwipeEnd:function(){n.off(q,a.Html.wrapper)},touches:function(t){return-1<W.indexOf(t.type)?t:t.touches[0]||t.changedTouches[0]},threshold:function(t){var e=u.settings;return-1<W.indexOf(t.type)?e.dragThreshold:e.swipeThreshold},enable:function(){return e=!1,a.Transition.enable(),this},disable:function(){return e=!0,a.Transition.disable(),this}};return c.on("build.after",function(){a.Html.root.classList.add(u.settings.classes.swipeable)}),c.on("destroy",function(){t.unbindSwipeStart(),t.unbindSwipeMove(),t.unbindSwipeEnd(),n.destroy()}),t},Images:function(t,e,n){var i=new O,r={mount:function(){this.bind()},bind:function(){i.on("dragstart",e.Html.wrapper,this.dragstart)},unbind:function(){i.off("dragstart",e.Html.wrapper)},dragstart:function(t){t.preventDefault()}};return n.on("destroy",function(){r.unbind(),i.destroy()}),r},Anchors:function(t,e,n){var i=new O,r=!1,o=!1,s={mount:function(){this._a=e.Html.wrapper.querySelectorAll("a"),this.bind()},bind:function(){i.on("click",e.Html.wrapper,this.click)},unbind:function(){i.off("click",e.Html.wrapper)},click:function(t){o&&(t.stopPropagation(),t.preventDefault())},detach:function(){if(o=!0,!r){for(var t=0;t<this.items.length;t++)this.items[t].draggable=!1,this.items[t].setAttribute("data-href",this.items[t].getAttribute("href")),this.items[t].removeAttribute("href");r=!0}return this},attach:function(){if(o=!1,r){for(var t=0;t<this.items.length;t++)this.items[t].draggable=!0,this.items[t].setAttribute("href",this.items[t].getAttribute("data-href"));r=!1}return this}};return p(s,"items",{get:function(){return s._a}}),n.on("swipe.move",function(){s.detach()}),n.on("swipe.end",function(){e.Transition.after(function(){s.attach()})}),n.on("destroy",function(){s.attach(),s.unbind(),i.destroy()}),s},Controls:function(n,e,t){var i=new O,r=!!z&&{passive:!0},o={mount:function(){this._n=e.Html.root.querySelectorAll('[data-glide-el="controls[nav]"]'),this._c=e.Html.root.querySelectorAll('[data-glide-el^="controls"]'),this.addBindings()},setActive:function(){for(var t=0;t<this._n.length;t++)this.addClass(this._n[t].children)},removeActive:function(){for(var t=0;t<this._n.length;t++)this.removeClass(this._n[t].children)},addClass:function(t){var e=n.settings,t=t[n.index];t&&(t.classList.add(e.classes.activeNav),H(t).forEach(function(t){t.classList.remove(e.classes.activeNav)}))},removeClass:function(t){t=t[n.index];t&&t.classList.remove(n.settings.classes.activeNav)},addBindings:function(){for(var t=0;t<this._c.length;t++)this.bind(this._c[t].children)},removeBindings:function(){for(var t=0;t<this._c.length;t++)this.unbind(this._c[t].children)},bind:function(t){for(var e=0;e<t.length;e++)i.on("click",t[e],this.click),i.on("touchstart",t[e],this.click,r)},unbind:function(t){for(var e=0;e<t.length;e++)i.off(["click","touchstart"],t[e])},click:function(t){t.preventDefault(),e.Run.make(e.Direction.resolve(t.currentTarget.getAttribute("data-glide-dir")))}};return p(o,"items",{get:function(){return o._c}}),t.on(["mount.after","move.after"],function(){o.setActive()}),t.on("destroy",function(){o.removeBindings(),o.removeActive(),i.destroy()}),o},Keyboard:function(t,e,n){var i=new O,r={mount:function(){t.settings.keyboard&&this.bind()},bind:function(){i.on("keyup",document,this.press)},unbind:function(){i.off("keyup",document)},press:function(t){39===t.keyCode&&e.Run.make(e.Direction.resolve(">")),37===t.keyCode&&e.Run.make(e.Direction.resolve("<"))}};return n.on(["destroy","update"],function(){r.unbind()}),n.on("update",function(){r.mount()}),n.on("destroy",function(){i.destroy()}),r},Autoplay:function(e,n,t){var i=new O,r={mount:function(){this.start(),e.settings.hoverpause&&this.bind()},start:function(){var t=this;e.settings.autoplay&&d(this._i)&&(this._i=setInterval(function(){t.stop(),n.Run.make(">"),t.start()},this.time))},stop:function(){this._i=clearInterval(this._i)},bind:function(){var t=this;i.on("mouseover",n.Html.root,function(){t.stop()}),i.on("mouseout",n.Html.root,function(){t.start()})},unbind:function(){i.off(["mouseover","mouseout"],n.Html.root)}};return p(r,"time",{get:function(){var t=n.Html.slides[e.index].getAttribute("data-glide-autoplay");return h(t||e.settings.autoplay)}}),t.on(["destroy","update"],function(){r.unbind()}),t.on(["run.before","pause","destroy","swipe.start","update"],function(){r.stop()}),t.on(["run.after","play","swipe.end"],function(){r.start()}),t.on("update",function(){r.mount()}),t.on("destroy",function(){i.destroy()}),r},Breakpoints:function(t,e,n){var i=new O,r=t.settings,o=G(r.breakpoints),s=a({},r),u={match:function(t){if(void 0!==window.matchMedia)for(var e in t)if(t.hasOwnProperty(e)&&window.matchMedia("(max-width: "+e+"px)").matches)return t[e];return s}};return a(r,u.match(o)),i.on("resize",window,k(function(){t.settings=m(r,u.match(o))},t.settings.throttle)),n.on("update",function(){o=G(o),s=a({},r)}),n.on("destroy",function(){i.off("resize",window)}),u}};function N(){return r(this,N),e(this,(N.__proto__||Object.getPrototypeOf(N)).apply(this,arguments))}return function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function, not "+typeof e);t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}),e&&(Object.setPrototypeOf?Object.setPrototypeOf(t,e):t.__proto__=e)}(N,b),t(N,[{key:"mount",value:function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};return s(N.prototype.__proto__||Object.getPrototypeOf(N.prototype),"mount",this).call(this,a({},B,t))}}]),N},"object"==typeof n&&void 0!==e?e.exports=r():"function"==typeof define&&define.amd?define(r):i.Glide=r()},{}]},{},[1]);