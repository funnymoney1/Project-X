$( document ).ready(function() {

  $('.nex').click(function() {
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    $.ajax({
      type: "POST",
      url: 'submit.php',
      data: { name: name, email: email, phone: phone },
    /*  complete: function(httpObj, textStatus) {
        switch( 1*httpObj.status ) {
          case 302: //here you do whatever you need to do //when your php does a redirectionalert("Redirection");
          //window.location.href = httpObj.redirect;
          console.log('status = ' + httpObj.status);
          console.log("302 Found..");
          break;
          case 401:
          //here you handle the calls to dead pagesalert("Page Not Found");
          break;
        }
      },*/
      success: function(httpObj, textStatus, xhr) {
        console.log('status from httpObj - ' + httpObj.status);
        if (httpObj.status == 302) {
          window.location.href = httpObj.redirect;
        } else {
          alert('Nothing');
          console.log('error - ' +httpObj.status);
          //$('#results').html(data);
        }
        /*switch( 1*httpObj.status ) {
          case 302:  window.location.href = httpObj.redirect;
                     console.log("302 Found..");
                     break;
          case 401:  //here you handle the calls to dead pagesalert("Page Not Found");
                     break;
        }*/
      },

      error: function(httpObj, textStatus, xhr) {
        var var1 = httpObj.status;
        var var2 = httpObj.url;
        //var xhr = new XMLHttpRequest();
        //var ur = xhr.responseURL;
        console.log('error' +httpObj);
        console.log('status_var1 = ' + var1 + ',  url = ' + xhr.responseURL);
        if (var1 == 302) {
          //window.location.href = httpObj.redirect;
          console.log('error 302 working');
        }
      }
    });

    return false;
  })

});
function SubmitFormData() {
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    //var gender = $("input[type=radio]:checked").val();
    $.post("submit.php", { name: name, email: email, phone: phone},
    function(data) {
	 $('#results').html(data);
   console.log('hi' + data);
	 //$('#myForm')[0].reset();
    });
    //return false; , gender: gender

}
//if (data.redirect) {
      // data.redirect contains the string URL to redirect to
      //window.location = jqxhr.getResponseHeader('Location');
      //console.log('Done');
      //window.location.href = data.redirect;}
  //if (jQuery.trim(data) === '13') {
    //alert('hey301')
    //xmlHttp.code != 200
    //console.log(' ; hey301');
    //$('#prompt').html("<h2>We tried to log you in, but...</h2>" + var1); complete: function(response, textStatus) {
      //var var2 = response.status;
      //console.log('va2 - '+ var2);  XMLHttpRequest,
  //},}
/*
success: function(data, textStatus, xhr) {
  var var0 = data.length;
  var var1 = xhr.status;
  var var3 = xhr.getResponseHeader("content-type");
  var var4 = xhr.getResponseHeader('Header');
  var type = XMLHttpRequest.responseType;
  if (var0 < 50) {
    //$('#results').html(data);
  }
  $('#results').html(data);
  console.log('this is 4- '+ var4);
  console.log('this is 3- '+ var3);
  console.log('this is 1- '+ var1);
  console.log('this is 0- '+ var0);
  console.log('this is type- '+ type );
},
*/
