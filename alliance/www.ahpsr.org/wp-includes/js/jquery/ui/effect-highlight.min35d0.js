/*!
 * jQuery UI Effects Highlight 1.12.1
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(e){"function"==typeof define&&define.amd?define(["jquery","./effect"],e):e(jQuery)}(function(i){return i.effects.define("highlight","show",function(e,n){var o=i(this),f={backgroundColor:o.css("backgroundColor")};"hide"===e.mode&&(f.opacity=0),i.effects.saveStyle(o),o.css({backgroundImage:"none",backgroundColor:e.color||"#ffff99"}).animate(f,{queue:!1,duration:e.duration,easing:e.easing,complete:n})})});