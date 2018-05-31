$(document).ready(function () {
//====================news carousel================================================
$('.news-carousel').slick({
      dots: true,
	  slidesToShow: 4,
	  slidesToScroll: 4,
	  speed: 1000,
	  arrows: false,
	  autoplay: true,
	  infinite: true,
});
$('.carr-carousel').slick({
      dots: true,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  speed: 1000,
	  arrows: false,
	  autoplay: true,
	  infinite: true,
});
$('.news-carousel .arrow-btn-slidrr, .news-carousel .slick-dots').wrapAll('<div class="slider-navigation"></div>');
/*$(".news-icon").each(function(i) {
     $(this).addClass("nba-"+(i+0));
});*/
$('.news-icon').each(function(i){
    var num = (i%4)+ 1;
    $(this).addClass('nbasd-' + num );
});
//====================news carousel================================================
//====================LIGHT BOX ================================================
$(".light-box ").colorbox({rel:'light-box ',  maxWidth: '80%'});


$(".gallery-col").each(function(a) {
     $(this).attr('id',"gallsli-"+(a+0));
	 $('#gallsli-'+ a +' .light-box-main').colorbox({rel:'#gallsli-'+ a +' light-box-main',  maxWidth: '80%'});
});
//====================LIGHT BOX END================================================
$(".gallery-tab-nav a").each(function(i) {
     $(this).attr("href","#gal-tab-link-"+(i+0));
});
$(".gallery-content-panel").each(function(i) {
     $(this).attr("id","gal-tab-link-"+(i+0));
});
//====================GAllery TAB================================================
$('.tab-content-box').hide('2000');
    $('.tabnav a').bind('click', function(e){
       $('.tabnav a.currentTabNav').removeClass('currentTabNav');
		$('.tab-content-box').removeClass('showTabBox');
        $('.tab-content-box:visible').hide();
        $(this.hash).fadeIn('1000').addClass('showTabBox');
        $(this).addClass('currentTabNav');
        e.preventDefault();
 }).filter(':first').click();
 //====================GAllery TAB END================================================
/*++++++++++++++END ready++++++++++++++++++++++++*/
});