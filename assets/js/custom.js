<!--for mobile menu start-->
	jQuery(document).ready(function () {
    jQuery('nav').meanmenu();
});


jQuery(function ($) {
    var $active = $('#accordion .panel-collapse.in').prev().addClass('active');
    $active.find('a').prepend('<i class="icon icon-minus-sign-alt"></i>');
    $('#accordion .panel-heading').not($active).find('a').prepend('<i class="icon icon-plus-sign-alt"></i>');
    $('#accordion').on('show.bs.collapse', function (e) {
        $('#accordion .panel-heading.active').removeClass('active').find('.icon').toggleClass('icon-plus-sign-alt icon-minus-sign-alt');
        $(e.target).prev().addClass('active').find('.icon').toggleClass('icon-plus-sign-alt icon-minus-sign-alt');
    })
});

 <!------for home page testimonials start ---------->
			 $(document).ready(function() {
    $('.firstSlide').fadeIn();
    $('.testimonials .slide');
    setInterval(function(){
        $('.testimonials .slide').filter(':visible').fadeOut(3000,function(){
            if($(this).next('li.slide').size()){
                $(this).next().fadeIn(3000);
            }
            else{
                $('.testimonials .slide').eq(0).fadeIn(3000);
            }
        });
    },10000);  
}); 
 <!------for home page testimonials end ---------->		
<!--Top Script-->
jQuery(document).ready(function(b){function c(){d.fadeOut(a).filter(function(a){return a==e%d.length}).delay(a).fadeIn(a);e++}b=jQuery(".fader");var e=0,d=jQuery(".fader").hide(),a=1E3;b.children().filter(".fader").each(function(a){});c();return setInterval(function(){c()},12E3)});jQuery("#back-top").hide();
$(function(){jQuery(window).scroll(function(){100<jQuery(this).scrollTop()?jQuery("#back-top").fadeIn():jQuery("#back-top").fadeOut()});jQuery("#back-top a").click(function(){jQuery("body,html").animate({scrollTop:0},800);return!1})});

