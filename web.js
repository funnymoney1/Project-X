$( document ).ready(function() {
  console.log($(".ths").width());
  console.log($(".thf ").width());
  console.log($(window).width());

       $('.headbox').height($(window).height());

       console.log("width of roww -");
       console.log($(".roww").width());

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
        $(window).bind("resize", function () {
          if ($(".roww").width() < 727) {
              $('div').removeClass('col-xs-4');
          } else {
              $('.gen').addClass('col-xs-4');
          }
        }).trigger('resize');
        //$('.sub1').click(function () {return false;})
    });
function openNav() {
  document.getElementById('mysidenav').style.width = '100%';
  document.getElementById('main0').style.opacity = '0.2';
}
function openbNav() {
  document.getElementById('mysidebnav').style.height = '100%';
  document.getElementById('main0').style.opacity = '0.1';
}
function closenav() {
  document.getElementById('mysidenav').style.width = '0px';
  document.getElementById('main0').style.opacity = '1';
}
function closebnav() {
  document.getElementById('mysidebnav').style.height = '0px';
  document.getElementById('main0').style.opacity = '1';
}
function SubmitFormData() {
    var username = $(".emailbox").val();
    var password = $(".pswdbox").val();
    //var phone = $("#phone").val();
    $.post("loginsystem/mlogin.php", { username: username, password: password},
    function(data, textStatus , xhr) {
      var var0 = data.length;
      var var1 = typeof data;
      var var2 = xhr.getResponseHeader("content-type");
      var var3 = xhr.getResponseHeader('Header');
      var var4 = data.status;
      var var5 = data.redirect;
      console.log('var2- '+ var2 + 'var1- '+ var1 + 'var5= ' + var5);
      console.log('var0 = ' + var0);
      if (var0 < 200) {
        $('#prompt').html("<h2>We tried to log you in, but...</h2>" + data);
      }

   //$('#prompt').html(data);
    });
}
