/*
 @name			 View.js — A simple, lightweight, jQuery photo viewer for the web
 @category   Lightbox, Image Viewer
 @author     Rogie King <rogie@finegoodsmarket.com>
 @copyright  2011-2011 Rogie King
 @version		 1.02 
 @license    By purchasing View.js, you agree to the following: View.js remain property of Rogie King. View.js may be used by the licensee in any personal or commercial projects. View.js may not be resold or  redistributed. For example: packaged in an application where it could be downloaded for free, such as an open-source project or other application where View.js is bundled along with other files.View.js — A simple, lightweight, jQuery photo viewer for the web by Rogie King is licensed under a Creative Commons Attribution-NoDerivs 3.0 Unported License.
*/

function View(a,b){function v(){t();q();d=c.find("img");g("body").append(c);if(!View._cssified){n()}View._cssified=true;u();i.sync();i.close();if(b.preload){i.show(d.eq(0))}i._ie7=navigator.userAgent.indexOf("MSIE 7")>-1;g(window).resize(function(){i.sync()})}function u(){c.unbind("click.view").bind("click.view",m)}function t(){if(typeof a=="object"&&a.jquery){a.filter("a[href]").each(function(){if(s(this.href)||!b.validateUrls){h.push({src:this.href,caption:this.title})}g(this).unbind("click.view").bind("click.view",r)})}else if(g.isArray(a)){h=a}}function s(a){return/\.(jpeg|jpg|gif|png)(\?|#)?(.*)?$/ig.test(a)}function r(a){a.preventDefault();i.show(this.href);i.open()}function q(){if(g.isArray(h)){for(var a=0,b;b=h[a];++a){var c=null;var d=g('<li class="loading"/>');if(typeof b=="object"&&b.src){c=b.src}else if(typeof b=="string"){c=b}var f=new Image;f.onload=function(){i.sync();g(this).css({visibility:"visible"}).parents("li").removeClass("loading")};g(f).css({visibility:"hidden"});g(f).attr("data-src",c);if(b.caption){d.addClass("has-caption").append(g('<span class="caption" />').text(b.caption))}if(a==0){d.addClass("first")}if(a==h.length-1){d.addClass("last")}e.append(d.append(g("<div/>").append(g("<span/>").append(f))))}}}function p(a){if(!a.src){g(a).attr("src",g(a).attr("data-src"))}}function o(a,b){p(a.find("img"));a.nextAll().slice(0,b).add(a.prevAll().slice(0,b)).find("img").each(function(a,b){p(b)})}function n(){var a=g("<style />");g("head").prepend(a);var c=document.styleSheets[0];for(h in b.css){var d="";for(name in b.css[h]){d+=name+":"+b.css[h][name]+";"}var e=h.split(",");for(var f=0,h;h=e[f];++f){if(c.insertRule){c.insertRule(h+"{"+d+"}",c.cssRules.length)}else{c.addRule(h,d)}}}}function m(a){a.preventDefault();$t=g(a.target);if(e.find("li").length<=1){i.close()}if($t.is("img")){if($t.parents("li").is(".current")){i.next()}else{i.show($t)}}else if($t.is("li>div,li")){if($t.parents("li").is(".next")||$t.is(".next")){i.next()}else if($t.parents("li").is(".previous")||$t.is(".previous")){i.prev()}else{i.close()}}else{i.close()}}function l(a){g.each(b.keys,function(b,c){for(var d=0;d<c.length;++d){if(a.keyCode==c[d]){i[b]()}}})}function k(a){var b='[src="'+a+'"],[data-src="'+a+'"]';return $i=d.find(b).add(d.filter(b)).eq(0)}var c,d,e,f,g=jQuery,h=[],i=this,j=g("body");c=g('<div class="viewer"><ul></ul><a href="#" class="close" title="Close this viewer"></a></div>').hide();e=c.find("ul");var b=g.extend({css:{"body.viewing":{overflow:"hidden"},".viewer *, .viewer":{margin:0,padding:0,border:0},".viewer":{"background-color":"#222",filter:"progid:DXImageTransform.Microsoft.gradient(startColorstr=#D8000000,endColorstr=#D8000000)","background-color":"rgba(0,0,0,0.85)",position:"fixed",right:0,top:0,left:0,bottom:0,display:"block",overflow:"hidden","z-index":Math.ceil((new Date).getTime()/1e7),height:"100%",width:"100%"},".viewer li.current + .loading":{"background-position":"0 center"},".viewer ul":{display:"block",height:"100%",width:"100%","white-space":"nowrap"},".viewer li":{height:"100%",width:"0%",overflow:"hidden",display:"none","float":"left","text-align":"center",position:"relative"},".viewer li.previous, .viewer li.next":{cursor:"pointer",display:"block"},".viewer li>div":{left:"10px",right:"10px",bottom:"10px",top:"10px",display:"block","text-align":"center",position:"absolute"},".viewer li.has-caption>div":{bottom:"5em"},".viewer li.loading>div":{background:"url(data:image/gif;base64,R0lGODlhDAAMAPIGAFxcXE5OTlZWVkpKSkZGRkJCQgAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh+QQFHgAGACwAAAAADAAMAAADLmhaIRJFSQHEGFRMQKQhlVFwngIyWqk8lqpgrYs1rvGMXXnapASmPAsm5EHdJAkAIfkEBR4AAQAsBgABAAMABQAAAgaEbwISHAUAIfkEBR4AAQAsBgADAAUAAwAAAgOEj1kAIfkEBR4AAgAsBgAGAAUAAwAAAgYMDmInegUAIfkEBR4AAQAsBgAGAAMABQAAAgOEj1kAIfkEBR4AAgAsAwAGAAMABQAAAgaUchDAzQUAIfkEBR4AAQAsAQAGAAUAAwAAAgOEj1kAIfkEBR4AAgAsAQADAAUAAwAAAgYEImKnGwUAIfkEBR4AAQAsAwABAAMABQAAAgOEj1kAOw%3D%3D) center center no-repeat"},".viewer li.loading.next>div":{"background-position":"0 center"},".viewer li.loading.previous>div":{"background-position":"right center"},".viewer .close":{color:"#fff","text-decoration":"none","font-weight":"bold","font-size":"20px",position:"absolute",right:"15px",top:"15px",cursor:"pointer",display:"block",opacity:.6},".viewer .close:hover":{opacity:1},".viewer img":{"max-width":"100%","max-height":"100%",cursor:"pointer",position:"relative",height:"auto",width:"auto","vertical-align":"middle","-ms-interpolation-mode":"bicubic"},".viewer .caption":{color:"#aaa","text-shadow":"0 1px 2px rgba(0,0,0,0.8)","line-height":"5em",position:"absolute",bottom:"0",left:"0",right:"0",visibility:"hidden"},".viewer li.current .caption":{visibility:"visible"},".viewer li.previous":{width:"10%"},".viewer li.current":{width:"80%",display:"block"},".viewer li.first.current":{"margin-left":"10%"},".viewer li.last.current":{"margin-right":"10%"},".viewer li.next":{width:"10%"},".viewer li.previous>div":{left:"-50%",right:"50%"},".viewer li.next>div":{right:"-50%",left:"50%"},".viewer .next img, .viewer .previous img, .viewer .current img":{"-webkit-transform":"translateZ(0)"}},keys:{close:[27],prev:[37,188],next:[39,190]},loadAhead:1,preload:false,validateUrls:true},b);this.next=function(){this.show(f.next().find("img"))};this.prev=function(){this.show(f.prev().find("img"))};this.close=function(){c.hide();g(document).unbind("keyup.view");j.removeClass("viewing")};this.open=function(){c.show();g(document).bind("keyup.view",l);j.addClass("viewing");this.sync()};this.show=function(a){if(typeof a=="string"){a=k(a)}if(a.constructor==g&&a.length>0){c.find("li").removeClass("current next previous").removeAttr("title");f=$parent=a.parents("li").addClass("current");f.next().addClass("next").attr("title","Next");f.prev().addClass("previous").attr("title","Previous");this.sync();o(f,b.loadAhead)}};this.sync=function(){var a=e.find("li.current>div").height();var b=a+"px";e.find("li>div>span").each(function(){g(this).css({"line-height":b})});if(i._ie7){d.css({"max-height":b});d.each(function(){var b=g(this);b.css({top:(a-b.height())/2+"px"})})}};this.next=function(){i.show(f.next().find("img"))};this.prev=function(){i.show(f.prev().find("img"))};v()}View._version="1.02";(function(){var a=jQuery,b=document.getElementsByTagName("script");if(b[b.length-1].src.indexOf("?auto")>-1){a().ready(function(){var b=a("a.view[href]");var c={};b.each(function(){var b=this.rel;if(b){if(!c[b]){c[b]=[]}c[b].push(this)}else{new View(a(this))}});for(var d in c){new View(a(c[d]))}})}})()