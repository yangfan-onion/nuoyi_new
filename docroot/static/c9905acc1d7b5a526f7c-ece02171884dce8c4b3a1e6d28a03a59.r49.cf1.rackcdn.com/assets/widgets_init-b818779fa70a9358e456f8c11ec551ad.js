// var _local=$("html").attr("lang"),loadFacebookScript=function(){var e=0;"undefined"==typeof FB&&0==e?(e=1,function(e,t,n){var i,r=e.getElementsByTagName(t)[0];e.getElementById(n)||(i=e.createElement(t),i.id=n,i.src="//connect.facebook.net/"+_local+"/sdk.js#xfbml=1&appId=466079946792352&version=v2.0",r.parentNode.insertBefore(i,r))}(document,"script","facebook-jssdk")):FB.XFBML.parse()},loadTwitterScript=function(){var e=0;"undefined"==typeof twttr&&0==e?(e=1,function(){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="//platform.twitter.com/widgets.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)}()):$.ajax({url:"//platform.twitter.com/widgets.js",dataType:"script",cache:!0})};$(".twitter-timeline").length&&loadTwitterScript(),$(".fb-like-box").length&&loadFacebookScript(),$(".countdownContainer").each(function(){var e=$(this).children(),t=new Date(e.data("date")).getTime()/1e3-(new Date).getTime()/1e3;0>t&&(t=0),$("#"+e.attr("id")).FlipClock(t,{clockFace:"DailyCounter",countdown:!0,language:_local})}),$(".gmapContainer").each(function(){var e=$(this).children(),t=e.data("widget"),n=Math.floor(1e4*Math.random()+1);if(t&&"object"==typeof t){var i={};i[n]=t,$("#"+e.attr("id")).gmap("init",i[n])}}),$(".carouselContainer").each(function(){var e=$(this).children();"single"==e.data("type")?$("#"+e.attr("id")).carousel():$("#"+e.attr("id")).elastislide({minItems:4})});var navbarCarousel=$(".navbarCarousel");navbarCarousel.each(function(){var e=$(this).children();$("#"+e.attr("id")).elastislide({minItems:4})}),$(".menuContainer").find("a").each(function(){var e=$(this);e.hasClass("projectButton")||e.click(function(){e.hasClass("dropdown-toggle")||(navbarCarousel.length>0?navbarCarousel.each(function(t,n){$(n).hasClass("projectShow")?$(n).animate({height:"0px"},1e3,function(){$(n).removeClass("projectShow").addClass("projectHide"),document.location.href=e.attr("href")}):document.location.href=e.attr("href")}):document.location.href=e.attr("href"))})}),$(".projectButton").click(function(e){if(e.preventDefault(),!t){var t=!1,n=function(e){var n,i=e,r=i.data("index"),o=i.closest(".menuContainer").find(".navbarCarousel");o.each(function(){$(this).data("index")==r&&(n=$(this))}),t=!0,n.animate({height:n.find(".elastislide-list").height()+20},1e3,function(){n.removeClass("projectHide").addClass("projectShow"),i.parent().addClass("active"),t=!1})},i=$(this),r=(i.data("index"),i.closest(".menuContainer").find(".navbarCarousel"));r.hasClass("projectShow")?(r.css("overflow","hidden"),r.each(function(){$(this).hasClass("projectShow")&&(t=!0,$(this).animate({height:"0px"},1e3,function(){t=!1,r.removeClass("projectShow").addClass("projectHide"),i.closest(".menuContainer").find(".projectButton").parent().removeClass("active"),$(this).data("index")!=i.data("index")&&n(i)}))})):n(i)}});
var _local = $("html").attr("lang"),
loadFacebookScript = function() {
    var e = 0;
    "undefined" == typeof FB && 0 == e ? (e = 1,
    function(e, t, n) {
        var i, r = e.getElementsByTagName(t)[0];
        e.getElementById(n) || (i = e.createElement(t), i.id = n, i.src = "//connect.facebook.net/" + _local + "/sdk.js#xfbml=1&appId=466079946792352&version=v2.0", r.parentNode.insertBefore(i, r))
    } (document, "script", "facebook-jssdk")) : FB.XFBML.parse()
},
loadTwitterScript = function() {
    var e = 0;
    "undefined" == typeof twttr && 0 == e ? (e = 1,
    function() {
        var e = document.createElement("script");
        e.type = "text/javascript",
        e.async = !0,
        e.src = "//platform.twitter.com/widgets.js";
        var t = document.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(e, t)
    } ()) : $.ajax({
        url: "//platform.twitter.com/widgets.js",
        dataType: "script",
        cache: !0
    })
};
$(".twitter-timeline").length && loadTwitterScript(),
$(".fb-like-box").length && loadFacebookScript(),
$(".countdownContainer").each(function() {
    var e = $(this).children(),
    t = new Date(e.data("date")).getTime() / 1e3 - (new Date).getTime() / 1e3;
    0 > t && (t = 0),
    $("#" + e.attr("id")).FlipClock(t, {
        clockFace: "DailyCounter",
        countdown: !0,
        language: _local
    })
}),
// $(".gmapContainer").each(function() {
//     var e = $(this).children(),
//     t = e.data("widget"),
//     n = Math.floor(1e4 * Math.random() + 1);
//     if (t && "object" == typeof t) {
//         var i = {};
//         i[n] = t,
//         $("#" + e.attr("id")).gmap("init", i[n])
//     }
// }),
$(".carouselContainer").each(function() {
    var e = $(this).children();
    "single" == e.data("type") ? $("#" + e.attr("id")).carousel() : $("#" + e.attr("id")).elastislide({
        minItems: 4
    })
});
var navbarCarousel = $(".navbarCarousel");
navbarCarousel.each(function() {
    var e = $(this).children();
    $("#" + e.attr("id")).elastislide({
        minItems: 4
    })
}),
$(".menuContainer").find("a").each(function() {
    var e = $(this);
    e.hasClass("projectButton") || e.click(function() {
        e.hasClass("dropdown-toggle") || (navbarCarousel.length > 0 ? navbarCarousel.each(function(t, n) {
            $(n).hasClass("projectShow") ? $(n).animate({
                height: "0px"
            },
            1e3,
            function() {
                $(n).removeClass("projectShow").addClass("projectHide"),
                document.location.href = e.attr("href")
            }) : document.location.href = e.attr("href")
        }) : document.location.href = e.attr("href"))
    })
}),
$(".projectButton").click(function(e) {
    if (e.preventDefault(), !t) {
        var t = !1,
        n = function(e) {
            var n, i = e,
            r = i.data("index"),
            o = i.closest(".menuContainer").find(".navbarCarousel");
            o.each(function() {
                $(this).data("index") == r && (n = $(this))
            }),
            t = !0,
            n.animate({
                height: n.find(".elastislide-list").height() + 20
            },
            1e3,
            function() {
                n.removeClass("projectHide").addClass("projectShow"),
                i.parent().addClass("active"),
                t = !1
            })
        },
        i = $(this),
        r = (i.data("index"), i.closest(".menuContainer").find(".navbarCarousel"));
        r.hasClass("projectShow") ? (r.css("overflow", "hidden"), r.each(function() {
            $(this).hasClass("projectShow") && (t = !0, $(this).animate({
                height: "0px"
            },
            1e3,
            function() {
                t = !1,
                r.removeClass("projectShow").addClass("projectHide"),
                i.closest(".menuContainer").find(".projectButton").parent().removeClass("active"),
                $(this).data("index") != i.data("index") && n(i)
            }))
        })) : n(i)
    }
});