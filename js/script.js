$(document).ready(function(){
    /*************** cookies **************/
    function cookieLawNotification(){
       days=30;
       myDate = new Date();
       myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
       document.cookie = 'cookieLawNotification=Accepted; expires=' + myDate.toGMTString();
    }
    var cookie = document.cookie.split(';')
        .map(function(x){ return x.trim().split('='); })
        .filter(function(x){ return x[0]==='cookieLawNotification'; })
        .pop();
    if(cookie && cookie[1]==='Accepted') {
        $(".cooke-notification").remove();
    }
    else{
        $(".cooke-notification").show();
    }
    $("#cooke-btn").on("click", function(){
        cookieLawNotification();                   
        $(".cooke-notification").remove();      
        return false;
    }); 
    
    $('article#slide0-desc.project-description').toggleClass('open');
    $('.sub-menu-item').click(function(){
        //console.log("click");
        $('.sub-sub-menu-item').toggleClass('open');
    
    });
    /*********** skills ************/
     $('.skill-image').click(function(){
        var id = $(this).attr('id');
//        $('article#'+id+'-desc'+'.skill-description').toggleClass('open');
//        $('img#'+id+'.skill-image').toggleClass('active');
        $('.skill-description.open').removeClass("open");
        $('.skill-image.active').removeClass("active");
        $('article#'+id+'-desc'+'.skill-description').toggleClass('open');
        $('img#'+id+'.skill-image').toggleClass('active');
    });
    /*************** Menu *****************/
    $(".menu_item").on("click", function(e) {
        e.preventDefault();
        var scrollTarget = $(this).attr('href');
        $(scrollTarget).velocity("scroll", {
            duration: 900
        });
         $(document).unbind( 'touchmove', touchScroll );
        $(".navbar-toggle").attr("aria-expanded", "false");
        $("#navbar-main").attr("aria-expanded", "false")
    });
    /*************** slider ************n**/
     var expSlider = $('#experience .bxslider').bxSlider({
        infiniteLoop: false,
        hideControlOnEnd: true,
        adaptiveHeight: false,
        preloadImages: 'visible',
        onSliderLoad: function(){
            $("#experience .bxslider").css("visibility", "visible");
            $("#experience .bxslider").css("max-height", "auto");
        }
    });
    var projSlider = $('#projects .bxslider').bxSlider({
        infiniteLoop: false,
        hideControlOnEnd: true,
        adaptiveHeight: false,
        touchEnabled: true,
        preloadImages: 'visible',
        onSliderLoad: function(){
            $("#projects .bxslider").css("visibility", "visible");
            $("#projects .bxslider").css("max-height", "auto");
        }
    });

    /************** window control *****************/
//    $('.control').click(function(url, title, w, h){
//          //  console.log(this.id.length);
//        var smth = this.id.slice(-this.id.length, -7);
//       // console.log(smth);
//          var url = 'php/actions/change.php?sectionname='+smth+'',
//              title = 'Change',
//          left = (screen.width/2)-(w/2),
//          top = (screen.height/2)-(h/2);
//      return window.open(url, title, 'width=400,height=350');
//    });
    $('#select').on("change", function(e){
    });
    /******** image upload buton ***********/
    $('.img-upload-btn').click( function(event){
        $('.image-upload').toggleClass('open');
    });
    /************** settings window *****************/
    $('.settings-img').click( function(url, title, w, h){
          var url = 'php/settings.php',
              title = 'Settings',
              side = (screen.width/2)-(w/2),
              tops = (screen.height/2)-(h/2);
  return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+tops+', left='+side);
    });
    /********* translation btn ***************/
    $('.translations-btn').click(function(){
        $('.editor').toggleClass('open');
    });
    /*********** scroll ***************/
    var mediaQuery = window.matchMedia("(max-width: 768px)");
    if (mediaQuery.matches){
        $(document).click(function(e){
            if( $(e.target).closest("navbar-main").length > 0 ) {
                return false;
            }
            $("#navbar-main").removeClass("in");
        });
    }
    /********************** validation ******************/
    $.validate({
        form : '#contact-form',
        modules : 'security'/*,
        validateOnBlur : false*/
    });
    $("#contact-form").submit(function() {
       // console.log($("#contact-form").serialize());
        var url = "php/contact.php"; // the script where you handle the form input.
        $.ajax({
               type: "POST",
               url: url,
               data: $("#contact-form").serialize(), // serializes the form's elements.
               success: function(data)
               {
                    $( ".form-submit-mesage" ).remove();
                    $( ".confirmation" ).append(data);
               }
             });
        return false; // avoid to execute the actual submit of the form.
    });
    // Cache selectors
    $("[href=#about]").parent().addClass("menu-active");
    var topMenu = $(".navbar"),
        topMenuHeight = topMenu.outerHeight()+50,
        // All list items
        menuItems = topMenu.find(".menu_item"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function(){
          var item = $($(this).attr("href"));
          if (item.length) { return item; }
        });

    // Bind to scroll
    $(window).scroll(function(){
       // Get container scroll position
       var fromTop = $(this).scrollTop()+topMenuHeight;

       // Get id of current scroll item
       var cur = scrollItems.map(function(){
         if ($(this).offset().top < fromTop)
           return this;
       });
       // Get the id of the current element
        cur = cur[cur.length-1];
       var id = cur && cur.length ? cur[0].id : "";
       // Set/remove active class
       menuItems
         .parent().removeClass("menu-active")
         .end().filter("[href=#"+id+"]").parent().addClass("menu-active");
    });
     /************ scroll controll ***************/
     var touchScroll = function( event ) {
        event.preventDefault();
    };
    $('.navbar-toggle').on("click", function(e){
        $(document).bind( 'touchmove', touchScroll );
        if($('.navbar-toggle').attr('aria-expanded') == "true"){
            $(document).unbind( 'touchmove', touchScroll );
        }
        else if($('.navbar-toggle').attr('aria-expanded') == "false"){
            $(document).bind( 'touchmove', touchScroll );
        }
        //console.log('bind');
    });
    /************* outside menu click controll **********/
    var mediaQuery = window.matchMedia("(max-width: 768px)");
    if (mediaQuery.matches){
        $(document).click(function(e){
            if( $(e.target).closest(".navbar-default").length > 0 ) {
                //  return false;
                //  $(document).unbind( 'touchmove', touchScroll );
                // console.log('punkt 1');
            }
            else{
                $("#navbar-main").removeClass("in");
                $(document).unbind( 'touchmove', touchScroll );
            } 
        });
        $('.image-box a').removeAttr('rel');
        $('.image-box a').removeAttr('href');
        $('img').removeClass('center-image');
    }
    /****************** contacts menu **************/
    var contactMenuContent = '<a href="files/cv.pdf" target="_blank" download="cv.pdf"><div id="cv-link" class="social-link"><img id="cv-icon" class="social-icon" alt="github-icon" src="images/CV-Icon.png"><a class="hide-me" id="cv-a" href="files/cv.pdf" target="_blank" download="cv.pdf">CV.pdf</a></div></a><a href="https://github.com/GulbickijPavel" target="_blank"><div id="git-link" class="social-link"><img id="git-icon" class="social-icon" alt="github-icon" src="images/github-social.png"><a class="hide-me" id="git-a" href="https://github.com/GulbickijPavel" target="_blank">Gihub</a></div></a><a href="https://lt.linkedin.com/in/pgulbickij" target="_blank"><div id="lin-link" class="social-link"><img id="lin-icon" class="social-icon" alt="linkedid-icon" src="images/linkedin-social.png"><a class="hide-me" id="lin-a" class="link" href="https://lt.linkedin.com/in/pgulbickij" target="_blank">LinkedIn</a></div></a><a><div id="eml-link" class="social-link"><img id="eml-icon" class="social-icon" alt="email-icon" src="images/email.png"><a class="hide-me" id="eml-a">Mail</a></div></a>';
    var mediaQuery2 = window.matchMedia("(min-width: 768px)");
    var device = '';
    function getWindowSize(){
        if(mediaQuery2.matches){
            $( ".fixed-contacts" ).empty();
            $( ".floating-contacts" ).append(contactMenuContent);
            $('.social-icon').on("mouseover", function(e){
                var id = this.id,
                linkid = '#'+id.slice(0, -4)+'link',
                aid = '#'+id.slice(0, -4)+'a';
                $('.social-icon').removeAttr('style');
                $('.social-link').removeAttr('style');
                $('.social-link a').removeAttr('style');
                $(linkid).css('width', '100%');
                $(linkid).css('margin-left', '0');
                $(linkid).css('padding-bottom', '20%');
                $('#'+id+'').css('left', 0);
                $('#'+id+'').css('width', '32px');
                $(aid).css('display', 'inline');
            });
            $('.floating-contacts').on("mouseleave", function(e){
                $('.social-icon').removeAttr('style');
                $('.social-link').removeAttr('style');
                $('.social-link a').removeAttr('style');
            });
            return device = "desktop";
        }
        else{
            $( ".floating-contacts" ).empty();
            $( ".fixed-contacts" ).append(contactMenuContent);
            return device = "smartOne";
        }
    }
    getWindowSize();
    mediaQuery2.addListener(function(mediaQuery2){
        getWindowSize(mediaQuery2);
    });
    /************* contact form plugin **************/
    var popupOpen = false;
    function contact() {
       
		if ($("#contactForm-container").is(":hidden")){
			$("#contactForm-container").fadeIn("slow");
			$("#backgroundPopup").css({"opacity": "0.7"});
			$("#backgroundPopup").css({"height": "100%"});
            $("#contactForm-container").css("overflow-y", "scroll");
			$("#backgroundPopup").fadeIn("slow");
            $("body").css("overflow", "hidden");
            $("#contactForm-container").velocity("scroll", {
              duration: 800,
              delay: 0
            });
            $("#contactForm-container").css({"padding-top": "25px"});
            popupOpen = true;
            return popupOpen;
		}
		else{
			$("#contactForm-container").fadeOut("slow");
			$("#backgroundPopup").fadeOut("slow");  
            popupOpen = false;
            return popupOpen;
		}
	}
    $('#eml-icon').click(function(){
         contact();
    });
	$("#eml-a").click(function(){
        contact();
    });
    $('#cform-cancel').on("click", function(e){
        $("#contactForm-container").fadeOut("slow");
        $("#backgroundPopup").fadeOut("slow");
        $("body").css("overflow-y", "scroll");
    });
    $(document).click(function(e){
        if(device == "desktop"){
            if( $(e.target).closest("#floating").length > 0 ) {
            }
            else{
                if(!popupOpen){
                    if( $(e.target).closest("#contactForm").length > 0 ) {

                    }
                    else{

                    } 
                }
                else{
                    if( $(e.target).closest("#contactForm").length > 0 ) {

                    }
                    else{
                        $("#contactForm-container").fadeOut("slow");
                        $("#backgroundPopup").fadeOut("slow");
                        $("body").css("overflow-y", "scroll");
                    } 
                }
            }
        }
    });
    /*************** floating menu ***************/
    if($('#floating').length)
    {
         $(function() {
            function moveFloatMenu() {
                var menuOffset = menuYloc.top + $(this).scrollTop() + "px";
                $('#floating').animate({
                    top: menuOffset
                }, {
                    duration: 500,
                    queue: false
                });
            }
            menuYloc = $('#floating').offset();
            $(window).scroll(moveFloatMenu);
            moveFloatMenu();
        });
    }
   
 
});
