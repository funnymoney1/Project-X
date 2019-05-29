$( document ).ready(function() {
  console.log($(window).width());
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
    });
function openNav() {
  document.getElementById('mysidenav').style.width = '100%';
  document.getElementById('main0').style.opacity = '0.2';
}
function closenav() {
  document.getElementById('mysidenav').style.width = '0px';
  document.getElementById('main0').style.opacity = '1';
}
