$(function(){function e(e){var t=e,a={};t?(history.replaceState("","","?q="+t),$.each(n,function(e,n){$.each(n,function(n,o){if(o.old_name&&o.new_name){var i=o.old_name.toLowerCase().indexOf(t.toLowerCase())>=0,s=o.new_name.toLowerCase().indexOf(t.toLowerCase())>=0;(i||s)&&($.isEmptyObject(a[e])&&(a[e]=[]),a[e].push(o))}})}),a&&(html="",$.each(a,function(e,a){html+='<div class="table-row"><div class="left-hand" data-letter="'+e+'">'+e+'</div><div class="rigth-hand">',a&&$.each(a,function(e,a){var n=a.new_name,o=a.old_name,i=n.toLowerCase().indexOf(t.toLowerCase()),s=o.toLowerCase().indexOf(t.toLowerCase());i>=0&&(n=n.replace(new RegExp(n.substr(i,t.length),"i"),"<b>"+n.substr(i,t.length)+"</b>")),s>=0&&(o=o.replace(new RegExp(o.substr(s,t.length),"i"),"<b>"+o.substr(s,t.length)+"</b>")),html+='<div class="row"><div class="row-data"><a href="/street/view/id/'+a.id+'">'+o+'</a></div><div class="row-data">'+n+'</div><div class="row-data">'+(a.project?"<span style='color: #eb2a3c;'>Розглядається</span>":a.resolve_date)+"</div>";var l="";a.eponim&&$.each(["","Особа","Об’єкт","Історична назва","Суб’єкт"],function(e,t){a.eponim_type==e&&(l=a.eponim&&"історична назва"!=a.eponim?'<a href="'+a.eponim+'" target="__blank">'+t+"</a>":t)}),html+='<div class="row-data">'+l+"</div>",html+="</div>"}),html+="</div></div>"}),html&&($(".current_table").removeClass("now").hide(),$(".search_table").addClass("now").show().html(html)))):(history.replaceState("","","/"),$(".current_table").addClass("now").show(),$(".search_table").removeClass("now").hide())}function t(){var e=$(window).scrollTop(),t=$(".streets-table").offset().top;e+180>t?($("header").addClass("fixed animated fadeInDown"),$(".invisible-height").addClass("active")):($(".invisible-height").removeClass("active"),$("header").removeClass("fixed animated fadeInDown"));var a={};$(".left-hand").each(function(e,t){$(this).offset().top<$(window).scrollTop()+185&&(a[e]=$(this))});var n=a[Object.keys(a)[Object.keys(a).length-1]];n&&$(".current-letter").text()!=n.text()&&$(".current-letter").text(n.text())}function a(e){var t,a,n=decodeURIComponent(window.location.search.substring(1)),o=n.split("&");for(a=0;a<o.length;a++)if(t=o[a].split("="),t[0]===e)return void 0===t[1]?!0:t[1]}$(".main-menu li").hover(function(){$(".main-menu li").removeClass("active"),$(this).addClass("active")},function(){$(".main-menu li").removeClass("active"),$(".main-menu li[data-active=1]").addClass("active")}),$(document).on("click",".alphabet li a",function(e){e.preventDefault();var t=$(document).find('.now .left-hand[data-letter="'+$(this).text()+'"]'),a=t.offset().top-183;$(window).width()<670&&(a-=37),t&&$("html, body").animate({scrollTop:a},2e3)});var n=!1;$("#responce").length&&(n=JSON.parse($("#responce").html()));var o=a("q"),i=$('input[name="search"]');o&&i.length&&(i.val(o),e(o)),n&&(t(),$(window).scroll(function(e){t()}),$(document).on("keyup",'input[name="search"]',function(t){t.preventDefault(),e($(this).val())})),$(document).on("click",".menu-toogle",function(e){e.preventDefault(),$(".main-menu").slideToggle()}),$(document).on("click",".open-alphabet",function(e){e.preventDefault(),$(".alphabet").slideToggle()})});