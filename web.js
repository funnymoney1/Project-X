$( document ).ready(function() {
  console.log($(".ths").width());
  console.log($(".thf").width());
  console.log($(window).width());
       $('.headbox').height($(window).height());
       $('.container').height($(window).height());
        console.log( "document loaded ..\n Hello...." );
      //  $( "h1:first" ).hide();

        $("#sp").click(function(){
          $("#sp").fadeOut(1000);
        })
        $(".closebtn").click(function(){$("#sp").fadeIn(1500);})
        $(".cir").click(function() {
          $(window).scroll(function(e) {
            var sc = $(this).scrollTop();
            $(".cir").css({'transform' : 'rotate('+sc+'deg)'});
          })
        })
        $(".fourthdivi").scroll(function(e){
          var va = $(this).scrollTop();
          $(".fout").css({"position": "relative","bottom": -va + "px"});
        })
        $(".fdlink").click(function(){
          //alert("Choose Your Subject first.."+"\n");
          $("div:nth-child(6)").removeClass("alertd");
          //$("div").attr("alertd", "alertdf" );
        });
    });
function openNav() {
  document.getElementById('mysidenav').style.width = '100%';
  document.getElementById('main0').style.opacity = '0.2';
}
function closenav() {
  document.getElementById('mysidenav').style.width = '0px';
  document.getElementById('main0').style.opacity = '1';
}
