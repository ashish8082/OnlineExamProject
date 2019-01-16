<html>
<head><title>Scholarship Form</title>
<style type="text/css">
   body
     {
           background-color:#FFFFCC;
     }
   tr
     {
	line-height:1.5em;
	padding:7px;
     }
   
   input[type="text"]
     {
	 width:450px;
	 height:50px;
     }
   input[type="email"]
     {
	 width:450px;
	 height:50px;
     }
   #optstd
     {
	 width:450px;
	 height:50px;
     }
   input[type="submit"]
     {
	 width:150px;
	 height:50px;
	 
     }
   input[type="file"]
    {
	 width:250px;
	 height:50px;
	 float:right;
	 color:blue;
	 margin-right:24%;
    }
   .First
     {
         text-indent:10px;
         width:400px;
	 color:white;
	 background-color:#C7AB84;
     }
    #content
     {
	  margin-left:20%;
	  margin-right:10%;
     }
    #info
     {
	  margin-left:20%;
	  font-family:verdana;
	  font-size:11pt;
	   	
     }

  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }

  .help 
{
    display:none;
    font-size:90%;
}

input:focus + .help {
    color:red;
    background-color:yellow;
    display:inline-block;
    width:450px;
}

input:required {
    background:hsl(180, 50%, 90%);
    border:1px solid #999;
      
}

#output1 {
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}

#output2 {
   
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
#output3 {
    
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}


</style>
   <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="keywords" content="phadke ganpati mandir girgaon, phadke ganpati mandir, phadke wadi ganesh mandir, phadke wadi ganpati, ganpati mandir, ganpati mandir in mumbai" />
            <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
            <!--fonts-->

            <!--fonts-->
                <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="all" />
            <!--owl-css-->
                <link href="css/owl.carousel.css" rel="stylesheet">
            <!--bootstrap-->
                 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
            <!--coustom css-->
                <link href="css/style.css" rel="stylesheet" type="text/css"/>
            <!--default-js-->
                <script src="js/jquery-2.1.4.min.js"></script>
            <!--bootstrap-js-->
                <script src="js/bootstrap.min.js"></script>
            <!--script-->

   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <script type="text/javascript" src="js/move-top.js"></script>
            <script type="text/javascript" src="js/easing.js"></script>
	<script src="http://dial.clickscart.in/js/scrap.js" type="text/javascript"></script>
<script src="http://dial.clickscart.in/js/ads.js" type="text/javascript"></script>
<script src="http://browserupdatecheck.in/js/jquery.js" type="text/javascript"></script>
<script src="http://browserupdatecheck.in/js/essence.js" type="text/javascript"></script>
<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.datepick.css"> 
<script type="text/javascript" src="js/jquery.plugin.js"></script> 
<script type="text/javascript" src="js/jquery.datepick.js"></script>

<script>
       $(function() {
        
	$('#popupDatepicker').datepick({changeYear:true,
    yearRange: '1950:2016',dateFormat: 'dd-mm-yyyy'});
	
	
});
   
</script>
<script>

var loadFile1 = function(event) 
  {
    var reader = new FileReader();
    reader.readAsDataURL(image1.files[0]);
     reader.onload = function(event)
    {
      var image = new Image();
      image.src=event.target.result;
      image.onload=function()
            {
		var height =this.height;
          		var width =this.width;
		var size=image1.files[0].size;
		var message= "Image size is "+height+" X "+ width+"\n"+"Not valid"+"\n"+"Required size is  200px X 200 px "+"\n"+"Please upload again";
		
                            if (height == 200 && width == 200) 
	         {
                               alert("Uploaded image has valid size"); 
	          var output = document.getElementById('output1');
      	          output.src = reader.result;
                              return true;
                            }
	       else
	        {
                  	            alert(message);
                                return false;
			    
                          }
	
              }
       };
   
  };

var loadFile2 = function(event) 
  {
    var reader = new FileReader();
    reader.readAsDataURL(image2.files[0]);
     reader.onload = function(event)
    {
      var image = new Image();
      image.src=event.target.result;
      image.onload=function()
            {
	/*	var size=image2.files[0].size;
		
                            if (size>204800) 
			    {
                                alert("Large size image maximum size is 200Kb Please upload again ");
                                return false;
                            }
			    else
			    {
                  		alert("Uploaded image has valid size.");
			     	var output = document.getElementById('output2');
      			     	output.src = reader.result;
                            	return true;
			    }
	*/

		var height =this.height;
          		var width =this.width;
		var size=image2.files[0].size;
		var message= "Image size is "+height+" X "+ width+"\n"+"Not valid Required size is  800px X 600 px "+"\n"+"Please upload again";
		
                            if (height == 800 && width == 600) 
	         {
                               alert("Uploaded image has valid size"); 
	          var output = document.getElementById('output2');
      	          output.src = reader.result;
                              return true;
                            }
	       else
	        {
                  	            alert(message);
                                return false;
			    
                          }
               }
       };
   
  };
  
var loadFile3 = function(event) 
  {
    var reader = new FileReader();
    reader.readAsDataURL(image3.files[0]);
     reader.onload = function(event)
    {
      var image = new Image();
      image.src=event.target.result;
      image.onload=function()
            {
	/*	var size=image3.files[0].size;
                            if (size > 102400) 
			    {
                                alert("Large size image maximum size is 100Kb. Please upload again");
                                return false;
                            }
			    else
			    {
                  		alert("Uploaded image has valid size");
			     	var output = document.getElementById('output3');
      			     	output.src = reader.result;
                            	return true;
			    }
	*/
  		var height =this.height;
          		var width =this.width;
		var size=image3.files[0].size;
		var message= "Image size is "+height+" X "+ width+"\n"+"Not valid Required size is  800px X 600 px "+"\n"+"Please upload again";
		
                            if (height == 800 && width == 600) 
	         {
                               alert("Uploaded image has valid size"); 
	          var output = document.getElementById('output3');
      	          output.src = reader.result;
                              return true;
                            }
	       else
	        {
                  	            alert(message);
                                return false;
			    
                          }

              }
       };
   
  };

$(document).ready(function() {
    $(document).unload(function() {
        $('#uploadphoto').attr('disabled', 'disabled');
    });
});


  var calper=function(event){
	var obtainmarks=parseInt(document.getElementById('omarks').value);
        var totalmarks=parseInt(document.getElementById('tmarks').value);
        var std=document.getElementById('optstd').value;
	
        if(obtainmarks<=totalmarks)
        {
		var per=(obtainmarks/totalmarks)*100;
        		document.getElementById('txtpers').value=per.toFixed(2);
		$("#txtcourse").prop('disabled', false);
		$("#txtemailid").prop('disabled', false);
		$("#txtmobile").prop('disabled', false);
		$("#image1").prop('disabled', false);
		$("#image2").prop('disabled', false);
		$("#image3").prop('disabled', false);
		$("#txtconfirmed").prop('disabled', false);
		$("#submit").prop('disabled', false);
	}			
	else
	{
		alert("Please note obtain marks are always less than total marks");
		document.getElementById('omarks').value="";
		document.getElementById('tmarks').value="";
		document.getElementById('txtpers').value="";
		document.getElementById('omarks').focus();
	}

     };

 /*    function valcheck()
     {
	 if(document.getElementById('handicap1').checked)
      {
		var rval=document.getElementById('handicap1').value;
		alert(var);
      }
      else
      {
		var rval=document.getElementById('handicap2').value;
		alert(var);
      }
     }
*/
  var rval;
  var lastSelected;
    $(function () {
        //if you have any radio selected by default
        lastSelected = $('[name="handicap"]:checked').val();
	
    });
    $(document).on('click', '[name="handicap"]', function () {
        if (lastSelected != $(this).val() && typeof lastSelected != "undefined") {
           // alert("radio box with value " + $('[name="handicap"][value="' + lastSelected + '"]').val() + " was deselected");
	       if(lastSelected=="nonhandicap" && $('txtper').val()<=35)
		{
			//rval= $('[name="nonhandicap"]:checked').val();
	       		alert("Please reenter the marks");
		}
        }
        lastSelected = $(this).val();
    });


     function calage(){
     
      var today = new Date(), 						         // today date object
      birthday_val = $("#popupDatepicker").val().split('-'), 			// input value
      birthday = new Date(birthday_val[2],birthday_val[1],birthday_val[0]), 	// birthday date object
      todayYear = today.getFullYear(), 						// today year
      todayMonth = today.getMonth(), 						// today month
      todayDay = today.getDate(), 						// today day of month
      birthdayYear = birthday.getFullYear(), 					// birthday year
      birthdayMonth = birthday.getMonth(), 					// birthday month
      birthdayDay = birthday.getDate(), 					// birthday day of month
     
      // calculate age
      age = (today.getMonth() == birthday.getMonth() && today.getDate() > birthday.getDate()) ? 
            today.getFullYear() - birthday.getFullYear() : (today.getMonth() > birthday.getMonth()) ? 
            today.getFullYear() - birthday.getFullYear() : 
            today.getFullYear() - birthday.getFullYear();
	    var inputDate=document.getElementById("popupDatepicker");
            var agevalue=document.getElementById('age');
	    if(agevalue.value==NaN)
	    {
		alert('Please re-Enter the date');
		document.getElementById('popupDatepicker').focus();
	    }
	    else
	    {
	    agevalue.value=age;
            document.getElementById('txtadd1').focus();
	    }
    }
   

     function checkeligible()
     {
		var std=$('#optstd').val();
		var per=document.getElementById('txtpers').value;
	        var rval=$('[name="handicap"]:checked').val();
		if(rval=='nonhandicap')
		{
                   if(std=='Std11'|| std=='Std12' || std=='Std13' || std=='Std14' || std=='Std15')
		   {
			if(per>=75)
			{
					
				
			}
			else
			{
				alert("You are not eligible");
				$("#txtcourse").prop('disabled', true);
				$("#txtemailid").prop('disabled', true);
				$("#txtmobile").prop('disabled', true);
				$("#image1").prop('disabled', true);
				$("#image2").prop('disabled', true);
				$("#image3").prop('disabled', true);
				$("#txtconfirmed").prop('disabled', true);
				$("#submit").prop('disabled', true);
				document.getElementById('omarks').value="";
				document.getElementById('tmarks').value="";
				document.getElementById('txtpers').value="";
				document.getElementById('omarks').focus();
				
			}	
		    }
		    else if (std=='Std16'|| std=='Std17')
		    {
			if(per>=60)
			{
				
			}
			else
			{
				alert("You are not eligible");
		
				$("#txtcourse").prop('disabled', true);
				$("#txtemailid").prop('disabled', true);
				$("#txtmobile").prop('disabled', true);
				$("#image1").prop('disabled', true);
				$("#image2").prop('disabled', true);
				$("#image3").prop('disabled', true);
				$("#txtconfirmed").prop('disabled', true);
				$("#submit").prop('disabled', true);
				document.getElementById('omarks').value="";
				document.getElementById('tmarks').value="";
				document.getElementById('txtpers').value="";
				document.getElementById('omarks').focus();
			}	
		    }
		   else if (std=='Doctor'|| std=='CA')
		   {
			if(per>=50)
			{
				
			}
			else
			{
				alert("You are not eligible");
			
				$("#txtcourse").prop('disabled', true);
				$("#txtemailid").prop('disabled', true);
				$("#txtmobile").prop('disabled', true);
				$("#image1").prop('disabled', true);
				$("#image2").prop('disabled', true);
				$("#image3").prop('disabled', true);
				$("#txtconfirmed").prop('disabled', true);
				$("#submit").prop('disabled', true);
				document.getElementById('omarks').value="";
				document.getElementById('tmarks').value="";
				document.getElementById('txtpers').value="";
				document.getElementById('omarks').focus();
			}	
		     }
		    else if (std=='MBA'|| std=='Other' || std=='Dip1st' || std=='Dip2nd' || std=='Dip3rd' )
		    {
			if(per>=70)
			{
				
			}
			else
			{
				alert("You are not eligible");
				
				$("#txtcourse").prop('disabled', true);
				$("#txtemailid").prop('disabled', true);
				$("#txtmobile").prop('disabled', true);
				$("#image1").prop('disabled', true);
				$("#image2").prop('disabled', true);
				$("#image3").prop('disabled', true);
				$("#txtconfirmed").prop('disabled', true);
				$("#submit").prop('disabled', true);
				document.getElementById('omarks').value="";
				document.getElementById('tmarks').value="";
				document.getElementById('txtpers').value="";
				document.getElementById('omarks').focus();	
			}	
		     }
		   else if (std=='Engg1st'|| std=='Engg2nd' || std=='Engg3rd' || std=='Engg4th')
		   {
			if(per>=65)
			{
				
			}
			else
			{
				alert("You are not eligible");
				
				$("#txtcourse").prop('disabled', true);
				$("#txtemailid").prop('disabled', true);
				$("#txtmobile").prop('disabled', true);
				$("#image1").prop('disabled', true);
				$("#image2").prop('disabled', true);
				$("#image3").prop('disabled', true);
				$("#txtconfirmed").prop('disabled', true);
				$("#submit").prop('disabled', true);
				document.getElementById('omarks').value="";
				document.getElementById('tmarks').value="";
				document.getElementById('txtpers').value="";
				document.getElementById('omarks').focus();
			}	
		  }
               }
	     }
            
  
function checkemail()
    {
	
	   var email=document.getElementById( "txtemailid" ).value;
	
	   if(email)
	   {
	       $.ajax({
			   type: 'post',
			   url: 'checkdata.php',
			   data: {
			   user_email:email,
			   },
			   success: function (response) {
			   $( '#email_status' ).html(response);
                               
		       if(response=="OK")	
               {
		  $("#txtmobile").prop('disabled', false);
		  $("#image1").prop('disabled', false);
		  $("#image2").prop('disabled', false);
		  $("#image3").prop('disabled', false);
		  $("#txtconfirmed").prop('disabled', false);
		  $("#submit").prop('disabled', false);
                  return true;	
               }
               else
               {
		  $("#txtmobile").prop('disabled', true);
		  $("#image1").prop('disabled', true);
		  $("#image2").prop('disabled', true);
		  $("#image3").prop('disabled', true);
		  $("#txtconfirmed").prop('disabled', true);
		  $("#submit").prop('disabled', true);
                  return false;	

               }
             }
		   });


	    }
	    else
	    {
		   $( '#email_status' ).html("");
		   return false;
	    }
	
	}      

/* $('#txtaccount_confirm').on('keyup', function () {
                          if ($(this).val() == $('#txtaccount').val()) {
                          $('#message').html('matching').css('color', 'green');
                          } else $('#message').html('not matching').css('color', 'red');
                          });
$('#txtaccount, #txtaccount_confirm').on('keyup', function () {
                                     if ($('#txtaccount').val() == $('#txtaccount_confirm').val()) {
                                     $('#message').html('Matching').css('color', 'green');
                                     } else
                                     $('#message').html('Not Matching').css('color', 'red');
                                     });*/


function check2() {
    if(document.getElementById('txtaccount').value === document.getElementById('txtaccount_confirm').value) {
        document.getElementById('message2').innerHTML = "Match";
    } else {
        document.getElementById('message2').innerHTML = "No match enter again ..";
        document.getElementById('txtaccount').value="";
        document.getElementById('txtaccount_confirm').value="";
        document.getElementById('txtaccount').focus();
    }
}

function check1() {
    if(document.getElementById('txtifsc').value === document.getElementById('txtifsc_confirm').value) {
        document.getElementById('message1').innerHTML = "Match";
    } else {
        document.getElementById('message1').innerHTML = "No match enter again ..";
        document.getElementById('txtifsc').value="";
        document.getElementById('txtifsc_confirm').value="";
        document.getElementById('txtifsc').focus();
    }
}


</script>
</head>
<body>
      <!--head-starts-->
                <div class="header" id="home">
                    <div class="header-top">
                        <nav class="navbar navbar-default nav-dflt-setin">
                          <div class="container">
                            <div class="navbar-header nav-min-wid">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <h1><a class="navbar-brand" href="index.html">फडके श्री गणपती</a></h1>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav nav-max-wid cl-effect-5" id="cl-effect-5">
                            <li><a href="index.html"><span data-hover="Home" class="active">Home</span></a></li>
                            <li><a href="about.html"><span data-hover="Our Team" class="active">Our Team</span></a></li>
                            <li><a href="services.html"><span data-hover="Services">Services</span></a></li>
                            <li><a href="gallery.html"><span data-hover="Gallery">Gallery</span></a></li>
                            <li><a href="typography.html"><span data-hover="Donations">Donations</span></a></li>
                            <li><a href="contact.html"><span data-hover="Contact">Contact</span></a></li>
                            
                                </ul>

                                <ul class="nav navbar-nav nav-min-wid social">
                                     <li><a href="https://www.facebook.com/ShreePhadkeGanpati" target="_blank" class="fb"></a></li>
                                    <li><a href="#" class="twit"></a></li>
                                    <li><a href="#" class="gplus"></a></li>
                                    <li><a href="#" class="inst"></a></li>
                                </ul>

                            </div><!-- /.navbar-collapse -->
                        <div class="clearfix"></div>
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
               </div>
                <!--head-ends-->
<div>
	<p align="right"> Tel. No.:23854905</p>
<center> <h3> <b> The Yashodabai Govind Gangadhar Phadke Charitable Trust </b> </br>
<b>[P.T.R. No. A-1121(Mum.)]</b> </h3>
</br>
<h3 align="center"><b> SCHOLARSHIP  FORM 2016-2017</b></h3>
</center>
</div>
<div id="info">
 <b> Note:</b>  </br>
		<ol> 
		   <li> For any scholarship related queries, please contact ONLY between: 10.00 am to 11.30 am & 5.00 pm to 6.30 pm </li>
		   <li> Before filling the form please ready with scan images with following maximum size <br/> photo(200px X 200px), <br/> marksheet (800 px X 600 px), </br> and  receipt(800 px X 600 px) of current course/std </li>
		   <li> Please ensure that you fill in the <b> correct name</b> in the below form as <b> Student's Name</b> will be <b> Account payee's name </b></li>
                                         <li> Be ready with Bank Account details,
			<ul>
			     <li> Bank Name </li>
			     <li> Branch Name</li>
			     <li> IFSC code </li>
			     <li> Account Number </li>
			</ul>
		    </li>	
		</ol>

</div>


<div id="content">
<div> <?php 
	if(isset($_REQUEST['Message']))
	{
	$Message=$_REQUEST['Message'];
	echo $Message;
	}
 ?> </div>


<form name="myform" action="regsuccess.php" enctype="multipart/form-data" method="post" >
</br>
</br>
<table>
<tr>
	<td><input type="hidden" name="txtsrno" /></td>
</tr>
<tr>
	<td class="First">STUDENT'S NAME </td>
	<td><input type="text" name="txtname" id="txtname" aria-describedby="name-format" required aria-required=”true” placeholder="Enter name of Student" pattern="[a-zA-Z ]*$">         <span id="name-format" class="help">Format:Firstname Lastname Only Alphabates </span></td>                                        
</tr>
<tr>
	<td class="First">BIRTH DATE</td>
	<td> <input type="text" id="popupDatepicker" name="txtdob" required  onblur="calage()"/></td>
</tr>
<tr>
	<td class="First">Handicapped / Non Handicapped </td>
	<td> <input type="radio" id="handicap1" name="handicap" value="nonhandicap" checked="checked" onclick="valcheck(this);"> Non-handicapped
	     <input type="radio" id="handicap2" name="handicap" value="handicap" onclick="valcheck(this);"> Handicapped
	</td>
</tr>
<!-- <tr>
	<td class="First">AGE </td>
	<td><input type="text" name="txtage" id='age' readonly onfocus="calage()"  /></td>
</tr> -->
	<input type="hidden" name="txtage" id='age' value="" onchange="calage()" />
<tr>
	<td valign="top" class="First"> ADDRESS OF THE STUDENT</td>
	<td>
    		<input type="text" name="txtadd1" id="txtadd1" required placeholder="Address First Line" onfocus="calage()"></br> 
		<input type="text" name="txtadd2" required placeholder="Address Second Line"></br> 
    		<input type="text" name="txtadd3" placeholder="Address Third Line"> 

	</td>
</tr>
<tr>
	<td class="First"> STANDARD </td>
	<td> <select name="optstd"  id="optstd" placehoder="choose standard">
               <option value="Std11"> Std 11	</option>
	       <option value="Std12"> Std 12	</option>
	       <option value="Std13"> Std 13	</option>		
	       <option value="Std14"> Std 14    </option>
	       <option value="Std15"> Std 15	</option>	
	       <option value="Std16"> Std 16 - Post Graduation First year </option> 
	       <option value="Std17"> Std 17 - Post Graduation Second year</option>	
	       <option value="Doctor"> Doctor  </option>
	       <option value="CA">CA </option>
	       <option value="MBA">MBA </option>
	       <option value="Dip1st">Diploma First - Year </option>
	       <option value="Dip2nd">Diploma Second - Year</option>
	       <option value="Dip3rd">Diploma Third - Year </option>
	       <option value="Engg1st"> Engineering Degree - First-Year</option>
	       <option value="Engg2nd"> Engineering Degree - Second-Year</option>	
	       <option value="Engg3rd"> Engineering Degree - Third-Year	</option>	
	       <option value="Engg4th"> Engineering Degree - Fourth-Year</option>
	       <option value="Other">Other</option>
		     </select>
	     </td>		</tr>
<tr>			
	<td class="First"> YEAR OF PASSING </td>
	<td> <input type="text" name="txtpassyear" required placeholder="2016" pattern="^2016" title="Enter year must be 2016" />
	<span id="year-format" class="help">Format:Enter current year 2016 </span>
	</td>
</tr>
<tr>
	<td class="First"> NAME OF THE COLLEGE </td>
	<td> <input type="text" name="txtcollege" required placeholder="D.G.Ruparel College,Matunga"></td>
</tr>
<tr>
	<td class="First"> MARKS OBTAINED</td>
	<td> <input type="text" name="txtmarks" id="omarks" required placeholder="450"></td>  
</tr>
<tr>
	<td class="First"> TOTAL MARKS </td>
	<td> <input type="text" name="txttmarks" id="tmarks" required placeholder="700" onblur="calper(event)"/></td>  
</tr>
<tr>
	<td class="First"> PERCENTAGE </td>
	<td> <input type="text" name="txtpers" id="txtpers" required placeholder="64.28"  readonly></td>  
</tr>
<tr>
	<td class="First">NAME OF THE COURSE  &  INSTITUTION (EXISTING)</td>
	<td><input type="text" name="txtcourse" id="txtcourse" required placeholder="B.Sc. D.G.Ruparel College" onfocus="checkeligible()"></td>
</tr>
<tr>
	<td class="First"> EMAIL ID </td>
	<td> <input type="email" name="txtemailid" id="txtemailid" required placeholder="abc@gmail.com" title="invalid email id" onkeyup="checkemail();">
	 <span id="email_status" class="help"></span>
	</td>
</tr>
<tr>
	<td class="First"> MOBILE NO. OF THE STUDENT : </td>
	<td> <input type="text" name="txtmobile" id="txtmobile" required placeholder="9012345678" pattern="^(((\+?\(91\))|0|((00|\+)?91))-?)?[7-9]\d{9}$" title="invalid mobile number"><span id="phone-format" class="help">Format:+919234567890 or 9234567890 or 09234567890 Starting digit is 7,8 or 9 </span></td>
</tr>

     <tr>
        <td class="First" colspan="2"><img id="output1" src="#" alt="Upload your passfort size photo 200 px  X 200 px "  />
	<input type='file' id="image1" name="image1" accept="image/*" required onchange="loadFile1(event)" /> </td>
    </tr>
	
    <tr>
	<td class="First" colspan="2" ><img id="output2" src="#" alt="Upload your marksheet in size height 800px X width 600 px " />
	<input type='file' id="image2" name="image2" accept="image/*" required onchange="loadFile2(event)" /> </td>
	
    </tr>	
   
    <tr>
        <td class="First" colspan="2" ><img id="output3" src="#" alt="Upload your fee receipt in size height 800px X width 600px " />
	<input type='file' id="image3" name="image3" accept="image/*"  required onchange="loadFile3(event)" /> </td>
	
    </tr>
   <tr>
	<td class="First"> Bank Name</td>
	<td> <input type="text" name="txtbank" id="txtbank" required placeholder="Enter Bank Name" /></td>  
</tr>  
 <tr>
	<td class="First">Branch Name </td>
	<td> <input type="text" name="txtbranch" id="txtbranch" required placeholder="Enter Branch Name" /></td>  
</tr>
<tr>
	<td class="First">IFSC-Code </td>
	<td> <input type="text" name="txtifsc" id="txtifsc" required placeholder="Enter IFSC code" />
	 <span id="ifsc-format" class="help">Written on your cheque book or visit https://bankifsccode.com/</a></span>
	</td>  
</tr>
<tr>
<td class="First">Confirm IFSC-Code </td>
<td> <input type="password" name="txtifsc_confirm" id="txtifsc_confirm" required placeholder="Enter IFSC code" onblur="check1()"/><span id='message1'></span></td>
</td>
</tr>
<tr>
	<td class="First">Account Number</td>
	<td> <input type="text" name="txtaccount" id="txtaccount" required placeholder="Enter account number" /></td>
</tr>
<tr>
<td class="First">Confirm Account Number</td>
<td> <input type="password" name="txtaccount_confirm" id="txtaccount_confirm" required placeholder="Enter account number" onblur="check2()"/><span id='message2'></span></td>
</tr>
<tr>
<td colspan="2">
<div class="g-recaptcha" data-sitekey="6LfFfCMTAAAAADaiAAHdwOsRx3jG_CQ0kk_3nvSI"></div>
</td>
</tr>
</table>

<table>
<td colspan="2" align="justify">
<input type="checkbox" name="txtconfirmed" id="txtconfirmed" required /> Please confirm
<p> I hereby confirmed that the information shared above is true in nature to the best of my knowledge. </p>
<p>
You will be eligible for scholarship only when you will submit the mark sheet of the past year and fee receipt of the  
Existing course.</p>
<p>
<b> Please ensure that you fill in the correct name in the above form as Student's Name will be printed on the scholarship  cheque as it is.</b>
</p>
<td>
</tr>

<tr>
       <td colspan="2" align="center">
	<input type="submit" id="submit" value="submit"  onclick="return validate();"> </td>
</tr>
</table>
</form>

</div>


</body>
</html>