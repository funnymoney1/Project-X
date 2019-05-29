<html>
<title>Submit Form without Page Refresh - PHP/jQuery - TecAdmin.net</title>
<head>
<script src="jquery-2.1.3.min.js" charset="utf-8"></script>
<script src="submit.js"></script>
</head>
<body>
  <form id="myForm" method="post">
     Name:    <input name="name" id="name" type="text" /><br />
     Email:   <input name="email" id="email" type="text" /><br />
     Phone No:<input name="phone" id="phone" type="text" /><br />
     Gender:  <input name="gender" type="radio" value="male">Male
	      <input name="gender" type="radio" value="female">Female<br />
        <input type="submit" name="" class="nex" value="NEXT">
    <input type="button" id="submitFormData" onclick="SubmitFormData();" value="Submit" />
   </form>
   <br/>
   Your data will display below..... <br />
   ==============================<br />
   <div id="results">
    All data will display here
   </div>

</body>
</html>


<!--<html>
<head>
<script>
function ajax_post(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "submit.php";
    var fn = document.getElementById("first_name").value;
    var ln = document.getElementById("last_name").value;
    var vars = "firstname="+fn+"&lastname="+ln;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("status").innerHTML = return_data;
	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "processing...";
}
</script>
</head>
<body>
<h2>Ajax Post to PHP and Get Return Data</h2>
First Name: <input id="first_name" name="first_name" type="text">  <br><br>
Last Name: <input id="last_name" name="last_name" type="text"> <br><br>
<input name="myBtn" type="submit" value="Submit Data" onclick="ajax_post();"> <br><br>
<div id="status"></div>
</body>
</html>-->
