
 <?php
function load_hsn(){
$connect = mysqli_connect("localhost","root","","data");
$output='';
$sql = "SELECT * FROM product ORDER BY name";
$result = mysqli_query($connect,$sql);
while($row = mysqli_fetch_array($result))
{
$output .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
}
return $output;
}
?>

<html>
<head> 
<title>gst</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
   <style>
    body{

background-image:url('data:image/jpeg;base64,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');
background-size:cover;
font-family:Verdana;
font-size:20px;
margin:0;
line-height:20px;

	}
#reset{
font-size:30px;
	color:royalblue;
	margin-left:10px;
}
   #table{
	    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
	margin-left:20px;
}
#table th
{
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
	background-color: plum;
    color: white;
}
#table tr{
	border-bottom: 1px solid #ddd;
	}
	#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: plum;
}
#myTable tr{
	text-align:left;
	padding:12px;
}
#enter{
	font-size:30px;
	color:royalblue;
	margin-left:10px;
}
#create_pdf{
	font-size:35px;
	color:darkblue;
}
.navbar{
text-align:center;
width:100%;
background:royalblue;
opacity:0.5;
}
.navbar ul {
margin:0;
padding:0;
list-style:none;
position:relative;
}
.navbar ul li a{
display:block;
padding:25px;
color:white;
text-decoration:none;
width:270px;
}
.navbar ul:after{
  content: ""; clear:both;
  display:block;
  }
  .navbar ul li {
  float:left;
  listy-style:none;
  }
  .navbar ul ul {
  display:none;
  }
  .navbar ul li:hover > ul{
  display:block;
  }
  .navbar ul li:hover a {
  background:black;
  transition:0.9s;
  
  }
  .navbar ul li:hover a{color:white;
  }
  .navbar ul ul {
  background:black;
  padding:0;
  margin:0;
  position:absolute; top:200%;
  }
  .navbar ul ul li {
  float:none;
  position:relative;
  }
  .navbar ul ul li a{
  padding:45px;
  color:white;
  width:300px;
  text-align:left;
  }
  .navbar ul ul li a:hover{
  background:lightblue;
  color:black;
  transition:0.10s;
  }
   .header{
	  text-align:left;
width:100%;
background:darkcyan;
padding:18px;
  }

   
   </style>

</head>
<body>
<div class="header">
<span style="color:lightcyan; font-size:48px; font-family:fantasy">PAY</span><span style="color:beige; font-size:35px; font-family:monospace;">gst.COM</span>
</div>
<div class="navbar">

<ul>
<li><a href ="index.html">Home</a></li>
<li><a href ="table.html">Manage Hsn code</a></li>
<li><a href ="help.html">Help</a></li>
<li><a href ="business.html">Pay Gst</a></li>


</ul>

</div></br>
<h1 style="font-size:30px;margin-left:450px;margin-top:18px;">REGULAR BUSINESS GST FORM</h1></br>
<p style="font-size:20px;">To know your gst bill please fill the form properly.First of all  select the Hsn code for your product.Then enter</br></br> your purchase value and sales value.All the values will be added in the table.Then you'll get the gst amount</br></br> which you have to pay the goverment.You can take a pdf of your gst details.</p></br>

<P style="font-size:26px;">Get your HSNCODE <a href="table.html">here</a></P></br>
<h2 style="font-size:25px;">GST FORM</h2></br>
<form>
 <div style="margin-left:17px;font-size:25px;color:black;"> 	
<p>select product name
<select name="hsn" id="hsn">
<option value="">select product name</option>
<?php echo load_hsn(); ?>
</select></p>
<p>hsn code
<select name="product" id="product">
<option value="">select product</option>
</select></p>
<td><p>purchase value
<input type="text" id="total" name="purchase"  maxlength="100"></p></td>
<p>cgst
<select name="cgst" id="cgst">
<option value=""> cgst</option>
</select></p>
<p>sgst
<select name="sgst" id="sgst">
<option value=""> sgst</option>
</select></p>

<td><p>sales value

<input type="text" id="sale" name="sale"></p></td>
</div>
<input type="button" id="enter" value="enter" name="enter" onclick="addRow();"/></br></br>
<input type="reset" id="reset" value="Reset"></br></br>
</form>
<form class="form" style="max-width: none; width: 1005px; margin-left:20px;  font-size:25px;">
<h2 style="font-size:20px; text-align:center; font-color:blqck;">Regular Business GST Form</h2>
<p>your name

<input type="text"  name="name"></p>
<p>company name

<input type="text" id="sale" name="address"></p>
<p>company address

<input type="text"  name="company" ></p>

<p>Company contact number

<input type="text" id="sale" name="number"></p>
<h2 style="font-size:20px; text-align:center;">List Of All Products Details</h2>

<table id="table"border="1">
            
            <tr>
                <th>product name</th>
                <th>purchase value</th>
                <th>CGST</th>
				<th>SGST</th>
				<th>sales value</th>
				
            </tr>
	</table>
	



 
	
	
	
	<p>total purchase cost
        <input type="text" id="fpc" onclick="showdata();"/></p>
		<p>total sales cost
        <input type="text" id="fsale" onclick="showdata();"/></p>
		<p>gst
        <input type="text" id="fgst" onclick="showdata2();"/></p>
		<p>cgst
        <input type="text" id="cgst1" onclick="showdata2();"/></p>
		<p>sgst
        <input type="text" id="sgst1" onclick="showdata2();"/></p>
		<h2 style="text-align:right; font-size:22px;">Thank you</h2>
		
		</form></br></br>
		<input type="button" id="create_pdf" value="Generate PDF">




</body>

</html>
<script>
$(document).ready(function(){
	$("#hsn").change(function(){
		var id=$(this).val();
		$.ajax({
		url:"country.php",
		method:"POST",
		data:{countryId:id},
		dataType:"text",
		success:function(data)
		{
		$('#cgst').html(data);
		}
		});
		});
		});
		$(document).ready(function(){
	$("#hsn").change(function(){
		var id=$(this).val();
		$.ajax({
		url:"country.php",
		method:"POST",
		data:{countryId:id},
		dataType:"text",
		success:function(data)
		{
		$('#sgst').html(data);
		}
		});
		});
		});
		$(document).ready(function(){
	$("#hsn").change(function(){
		var id=$(this).val();
		$.ajax({
		url:"product.php",
		method:"POST",
		data:{countryId:id},
		dataType:"text",
		success:function(data)
		{
		$('#product').html(data);
		}
		});
		});
		});
		 $(function(){
  //can also use .change instead of keyup, but that will work until the input losses focus
        $("#total").keyup(function (){
            var input_text = $('#total').val();
            
            $('#P').text(input_text);

        });
    });
	 $(function(){
  //can also use .change instead of keyup, but that will work until the input losses focus
        $("#sale").keyup(function (){
            var input_text1 = $('#sale').val();
            
            $('#P').text(input_text1);

        });
    });
	$(function(){
  //can also use .change instead of keyup, but that will work until the input losses focus
        $("#product").keyup(function (){
            var input_text2 = $('#product').val();
            
            $('#P').text(input_text2);

        });
    });
	function addRow()
            {
                // get input values
                var product = document.getElementById('product').value;
                 var total = document.getElementById('total').value;
                  var cgst = document.getElementById('cgst').value;
				  var sgst= document.getElementById('sgst').value;
                  
				  var sale = document.getElementById('sale').value;
           
                  var table = document.getElementsByTagName('table')[0];

                  var newRow = table.insertRow(1);

                  var cel1 = newRow.insertCell(0);
                  var cel2 = newRow.insertCell(1);
                  var cel3 = newRow.insertCell(2);
				  var cel4 = newRow.insertCell(3);
				  var cel5 = newRow.insertCell(4);
				 
				  
				  
                  
                  // add values to the cells
                  cel1.innerHTML = product;
                  cel2.innerHTML = total;
                  cel3.innerHTML = cgst;
				  cel4.innerHTML = sgst;
				  cel5.innerHTML = sale;
				  
				  
            }
			

function showdata(){
var fsale=0;
var fpc=0;

for(var i = 1; i < table.rows.length; i++)
            {
fsale = fsale + parseFloat(table.rows[i].cells[4].innerHTML)+ parseFloat(table.rows[i].cells[4].innerHTML)*(parseFloat(table.rows[i].cells[2].innerHTML)+parseFloat(table.rows[i].cells[3].innerHTML))/100;

fpc =fpc + parseFloat(table.rows[i].cells[1].innerHTML) + parseFloat(table.rows[i].cells[1].innerHTML)*(parseFloat(table.rows[i].cells[2].innerHTML)+parseFloat(table.rows[i].cells[3].innerHTML))/100;
}

$("#fpc").val(fpc)
$("#fsale").val(fsale)

}
function showdata2(){
	var psale=0;
	var pc=0;
	var fgst=0;
	var cgst1=0;
    var sgst1=0;
	for(var i = 1; i < table.rows.length; i++){
		psale = psale+ (parseFloat(table.rows[i].cells[4].innerHTML)*(parseFloat(table.rows[i].cells[2].innerHTML)+parseFloat(table.rows[i].cells[3].innerHTML)))/100;
		pc = pc + (parseFloat(table.rows[i].cells[1].innerHTML)*(parseFloat(table.rows[i].cells[2].innerHTML)+parseFloat(table.rows[i].cells[3].innerHTML)))/100;
	}
	fgst=psale-pc;
	cgst1=fgst/2;
	sgst1=fgst/2;
	
	$("#fgst").val(fgst)
	$("#cgst1").val(cgst1)
	$("#sgst1").val(sgst1)
	
	
}
</script>
<script>
(function () {  
        var  
         form = $('.form'),  
         cache_width = form.width(),  
         a4 = [595.28, 841.89]; // for a4 size paper width and height  
  
        $('#create_pdf').on('click', function () {  
            $('body').scrollTop(0);  
            createPDF();  
        });  
        //create pdf  
        function createPDF() {  
            getCanvas().then(function (canvas) {  
                var  
                 img = canvas.toDataURL("image/png"),  
                 doc = new jsPDF({  
                     unit: 'px',  
                     format: 'a4'  
                 });  
                doc.addImage(img, 'JPEG', 20, 20);  
                doc.save('regular-gst.pdf');  
                form.width(cache_width);  
            });  
        }  
  function getCanvas() {  
            form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');  
            return html2canvas(form, {  
                imageTimeout: 2000,  
                removeContainer: true  
            });  
        }  
  
    }()); 
	

</script>
<script>
  
    (function ($) {  
        $.fn.html2canvas = function (options) {  
            var date = new Date(),  
            $message = null,  
            timeoutTimer = false,  
            timer = date.getTime();  
            html2canvas.logging = options && options.logging;  
            html2canvas.Preload(this[0], $.extend({  
                complete: function (images) {  
                    var queue = html2canvas.Parse(this[0], images, options),  
                    $canvas = $(html2canvas.Renderer(queue, options)),  
                    finishTime = new Date();  
  
                    $canvas.css({ position: 'absolute', left: 0, top: 0 }).appendTo(document.body);  
                    $canvas.siblings().toggle();  
  
                    $(window).click(function () {  
                        if (!$canvas.is(':visible')) {  
                            $canvas.toggle().siblings().toggle();  
                            throwMessage("Canvas Render visible");  
                        } else {  
                            $canvas.siblings().toggle();  
                            $canvas.toggle();  
                            throwMessage("Canvas Render hidden");  
                        }  
                    });  
					 throwMessage('Screenshot created in ' + ((finishTime.getTime() - timer) / 1000) + " seconds<br />", 4000);  
                }  
            }, options));
			function throwMessage(msg, duration) {  
                window.clearTimeout(timeoutTimer);  
                timeoutTimer = window.setTimeout(function () {  
                    $message.fadeOut(function () {  
                        $message.remove();  
                    });  
                }, duration || 2000);  
                if ($message)  
                    $message.remove();  
                $message = $('<div ></div>').html(msg).css({  
                    margin: 0,  
                    padding: 10,  
                    background: "#000",  
                    opacity: 0.7,  
                    position: "fixed",  
                    top: 10,  
                    right: 10,  
                    fontFamily: 'Tahoma',  
                    color: '#fff',  
                    fontSize: 12,  
                    borderRadius: 12,  
                    width: 'auto',  m 
                    height: 'auto',  
                    textAlign: 'center',  
                    textDecoration: 'none'  
                }).hide().fadeIn().appendTo('body');  
				 }  
        };  
    })(jQuery);
	</script>
	