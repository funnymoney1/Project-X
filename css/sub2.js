console.log('hi');

$(document).ready(function() {
  //$('.floa').css({'display':'none'});
  $('.slgen').click(function() {

    $( ".floa" ).removeClass("isshow");
    var w1 = $('.oslff').width(); var w2 = $('.oslfd').width(); var w3 = $('.oslft').width();
    if(w1||w2||w3 == 240){$('.slgen').width(200).height(150);}
    //$('.floa').css({'display':'inline'});
    $(this).width(240).height(200);
    var cname23 = $(this). attr('class'). split(' ');

    $('.'+ cname23[0] + ' .floa ').each(function(i) {
      setTimeout(function(){
        $('.'+ cname23[0] + ' .floa').eq(i).addClass('isshow');
      }, 150 * (i+1));
    });

  });


  $('.floa').click(function() {
    var vq = $(this).attr('value');
  })
  $('.slgen, .floa').css({'transition':'All 0.5s ease-in-out'});
})
