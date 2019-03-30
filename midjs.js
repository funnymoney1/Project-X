$( document ).ready(function() {
  console.log($(".ths").width());
  console.log($(".thf").width());
  console.log($(window).width());
        console.log( "document loaded ..\n Hello...." );
        $("#sp").click(function(){
          $("#sp").fadeOut(1000);
        })
        $(".closebtn").click(function(){$("#sp").fadeIn(1500);})
        $(".cir").click(function() {
          $(window).scroll(function(e) {
            var sc = $(this).scrollTop();
            $(".cir").css({'transform' : 'rotate('+sc+'deg)'});
          });
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
