!function(t){t("a.btn-menu-open, a.btn-menu-close, .overlay").on("click",function(e){e.preventDefault(),t("nav, .overlay").toggleClass("on")}),t("a").on("click",function(e){if(""!==this.hash){e.preventDefault();var a=this.hash;t("html, body").animate({scrollTop:t(a).offset().top},800,function(){})}}),t(window).on("scroll",()=>{t(this).scrollTop()}),t(".category a").on("click",function(e){e.preventDefault();let a=t(this).hasClass("active");t(".category a").removeClass("active"),a?t(this).removeClass("active"):t(this).addClass("active")});let e=0;t(".category li").each(function(a){e+=t(this).width()}),t(".category ul").css("width",e)}(jQuery);