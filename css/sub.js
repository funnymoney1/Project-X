console.log('Hello');
function animat(){
  var iname = $('this').attr('id');
  var cname = $('.slgen').attr('class');
  var cname2 = $('.slgen'). attr('class'). split(' ');
  console.log('cname : '+cname + " , iname : " + iname + " , c2 : " + cname2[0]);
  console.log('.'+ cname2[0] + '' + '.floatingdiv ');
  $('#'+iname).width(240).height(200);
  $('.'+ cname2[0] + ' .floatingdiv ').each(function(i) {
    setTimeout(function(){
      $('.floatingdiv').eq(i).addClass('isshow');
    }, 150 * (i+1));
  });
}

$( document ).ready(function() {
  $('.slgen').width();

  $('.slgen').click(function() {
    //$( ".slgen" ).has('.oslff').addClass('test');
    //$( "div:has('.floatingdiv')" ).addClass( "test" );
    //$(document.activeElement).addClass( "test" );
    //console.log(cname23); $('.oslff , .oslfd , .oslft').width()
    var w1 =$('.oslff').width(); var w2 = $('.oslfd').width(); var w3 = $('.oslft').width();
    //console.log($('.oslff , .oslfd , .oslft').width() + ', 1 = '+w1+',2 = '+w2+',3 = '+w3);
    if (w1 || w2 || w3 == 240) {
      //console.log('cname setd');
      $('.oslff , .oslfd , .oslft').width(200).height(150);
    }

    $( ".floatingdiv" ).removeClass("isshow");

    //console.log('hi clicked : ');
    var h1 = $(this).attr('class');
    var cname23 = $(this). attr('class'). split(' ');
    //var da2 = jQuery.hasData();
    //console.log('width : ');
    //console.log(h1+' , '+cname23[0]); //console.log('.'+ cname23[0] + ' .floatingdiv ');


    $(this).width(240).height(200);
    $('.'+ cname23[0] + ' .floatingdiv ').each(function(i) {
      setTimeout(function(){
        $('.'+ cname23[0] + ' .floatingdiv').eq(i).addClass('isshow');
      }, 150 * (i+1));
    });

  });

  $('.slgen, .floatingdiv').css({"transition" : "all 0.5s ease-in-out"});

  $( ".floatingdiv" ).hover(function() {
    //$( this ).append( $( "<span> ***</span>" ) );
    //console.log('b100');
    $(this).css({'filter':'brightness(90%)'});
  }, function() {
    //$( this ).find( "span:last" ).remove();
    $(this).css({'filter':'brightness(100%)'});
  }
  );

  function animat(){
    $('.slgen').width(240).height(200);
    $('.floatingdiv').each(function(i) {
      setTimeout(function(){
        $('.floatingdiv').eq(i).addClass('isshow');
      }, 150 * (i+1));
    });
  }

/*$( ".floatngdiv" ).hover(function() {
  $( this ).append( $( "<span> ***</span>" ) );
  $(this).css({'filter':'brightness(95%)'});
}, function() {
  $( this ).find( "span:last" ).remove();
  $(this).css({'filter':'brightness(80%)'});
}
);*/
  /*$('.slgen').click(function() {

    $('.slgen').width(240).height(200);
    //$('.slgen').slideUp(5000);
    //$(".slgen").slideDown(2000);
    //$('.floatingdiv').css({"display":"block"});
    $('.floatingdiv').each(function(i) {
      setTimeout(function(){
        $('.floatingdiv').eq(i).addClass('isshow');
      }, 150 * (i+1));

    });

  });*/

    //$(".slgen").css({'transform' : 'rotate('+90+'deg)'});
});
