define(function(require){require("common"),require("../../../lib/jquery/plugin/jquery.progress"),require("/static/lib/layer/1.6.0/layer.min.js"),require("/static/lib/layer/1.6.0/skin/layer.css"),require("/static/page/course/course.layout.js"),$("progress").length&&$.fn.progessBar&&$("progress").progessBar({width:1200});var a=function(){var a=$(".progress").find("ins"),c=a.attr("data-progress");a.animate({width:c+"%"},100)};a(),setTimeout(function(){$(".js-score-tip").hide()},3e3);var c=function(a,c){$(a).on("mouseover",function(){$(".js-share-statue").css("right",c).show()})},h=function(a){$(a).on("mouseleave",function(){$(".js-share-statue").hide()})};c(".icon-share-weichat","22px"),c(".icon-share-qq","-47px"),c(".icon-share-weibo","-117px"),h(".icon-share-weichat"),h(".icon-share-qq"),h(".icon-share-weibo"),shareFrame=$(".js-share-statue"),setTimeout(function(){shareFrame.hide()},5e3);var v,g='<div id="noticLayer" class="pop-notice"><div class="pop-header clearfix"> <h2 class="l">课程公告</h2><a id="noticLayerClose" href="javascript:void(0)" class="r icon-close pop-close"></a></div><div class="content-box"><dl id="noticeContent" class="pop-content"></dl></div></div>',j='<dt data-id="{id}" class="">{title}</dt><span class="">{time}</span><dd class="autowrap">{text}</dd>';$("#notice").on("click",function(){var a=$('<div id="overlay" class="pop-overlay"></div>').height($(document).height()).appendTo($("body")),c=$(g),h=c.find(".pop-content");c.hide().appendTo($("body")).on("click",".pop-close",function(){a.remove(),c.remove()}),$.getJSON("/course/ajaxgetnotice",{cid:GC.course.id},function(a){if(0==a.result&&a.data.length>0){v=a.data.id;var g="";$.each(a.data,function(a,c){g+=C(j,{id:c.id,title:c.title,text:c.content,time:c.create_time})}),h.append(g)}else h.html(" 貌似还没有人发点什么");c.show().animate({opacity:1},300,function(){h.find("dt:first").click()})})}),$(".js-verify-box").on("click",".js-verify-refresh",function(){$(this).parents(".js-verify-box").trigger("reset")}).on("reset",function(e,a){var c=$(this),h=c.find(".verify-code-ipt"),v=(c.find(".js-verify-refresh:first"),c.find(".verify-media")),g=v.data("src").split("?")[0],j=(new Date).getTime(),a=0==a?a:1;v.attr("src",g+"?"+j),h.val(""),a&&h.focus().select()}).on("error",function(){$(this).addClass("vf-error")}).on("validate",function(){var a=$(this).find(".verify-code-ipt"),c=a.val().trim();(!c||c.length<4)&&$(this).trigger("error")}).find(".verify-code-ipt").on("keyup",function(){$(this).parents(".js-verify-box").removeClass("vf-error")}).on("blur",function(){$(this).parents(".js-verify-box")}),isLogin||$(".J-learn-course").on("click",function(){return seajs.use("login_sns",function(a){a.init()}),!1}),$(".js-comp-tabs").each(function(){var a=$(this),c=a.find(".js-comp-tab-item"),h=a.find(".js-comp-tab-pannel");c.on("click",function(){if(!$(this).hasClass("on")){var a=$(this).data("pannel");return c.removeClass("on"),$(this).addClass("on"),h.hide().filter(function(){return $(this).data("pannel")==a}).show(),!1}})}),$(".js-comp-tab-pannel li").on("mouseover",function(){$(this).addClass("curr").siblings().removeClass("curr")});var y=function(){var a=new Image,c=document.createElement("canvas"),h=c.getContext("2d"),v=$("#js-info-bg"),g=v.width(),j=v.height(),y=g/j;a.onload=function(){var o,$,b,w=a.width,C=a.height,k=w/C;c.width=g,c.height=j,c.className="cover-canvas",c.id="js-cover-canvas",y>k?(o=w/y,b=(C-o)/2,h.drawImage(a,0,b,w,o,0,0,g,j)):k>y&&(o=C*y,$=(w-o)/2,h.drawImage(a,$,0,o,C,0,0,g,j));var T=h.createLinearGradient(0,0,g,0);T.addColorStop(0,"rgba(0, 0, 0, .8)"),T.addColorStop(1,"rgba(0, 0, 0, .2)"),h.fillStyle=T,h.beginPath(),h.fillRect(0,0,g,j),h.fill(),v.append(c)},a.src=$("#js-cover-img").data("src")},b=function(){$("#js-info-bg").addClass("no-canvas");var a=new Image,c=$("#js-info-bg"),h=c.width(),v=c.height(),g=$("#js-cover-img"),j=g.data("src");a.onload=function(){var c,$,y,b,w=a.width,C=a.height;c=h/w,$=v/C,y=c*C,b=$*w,b>v?y=h:b=v,g.attr("src",j).css({width:"100%"}).show(),a.onload=null},a.src=j,g[0].ondragstart=function(){return!1}},w=function(){var a=document.createElement("canvas");a.getContext?y():b()};w();var C=function(a,c){return a.replace(/\{([^\}]*)\}/gi,function(p,o){return null==c[o]?"":c[o]})};return{tpl:C}});