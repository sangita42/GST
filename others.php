  <?php
function load_hsn(){
$connect = mysqli_connect("localhost","root","","other");
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
	background-color: chocolate;             
           
	
    color: white;
}
#table tr{
	border-bottom: 1px solid #ddd;
	}
	#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: chocolate;
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
	color:darkorange;
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
<li><a href ="indexno.php">Home</a></li>
<li><a href ="table.html">Manage Hsn code</a></li>
<li><a href ="help.html">Help</a></li>
<li><a href ="business.html">Pay Gst</a></li>


</ul>
</div>
<h1 style="font-size:29px;margin-left:400px;margin-top:16px;">OTHERS BUSINESS GST FORM</h1></br>
<p style="font-size:24px;">To know your gst bill please fill the form properly.First of all first select the Hsn code for your product and their</br></br> respective IGST will be added automatically.Then enter your sales value, purchase value.All the values will be</br></br> added in the table.Then you'll get the gst amount which you have to pay to the goverment.You can take a pdf</br></br> of your gst details and can print it out.</br></br>
</p>
<P style="font-size:26px;">Get your HSNCODE <a href="table.html">here</a></P></br>




<h2 style="font-size:25px;">GST FORM</h2>
<form>
 <div style="margin-left:20px;font-size:25px;"> 	
<p>select product name
<select name="hsn" id="hsn">
<option value="">select product name</option>
<?php echo load_hsn(); ?>
</select></p>
<p>hsn code
<select name="product" id="product">
<option value="">hsn code</option>
</select></p>
<td><p>purchase value
<input type="text" id="total" name="purchase" size="10" maxlength="10"></p></td>
<p>IGST
<select name="igst" id="igst">
<option value=""> igst</option>
</select></p>


<td><p>sales value

<input type="text" id="sale" name="sale" size="10" maxlength="10"></p></td>
</div>
<input type="button" id="enter" value="enter" name="enter" onclick="addRow();"/></br></br>
<input type="reset" id="reset" value="Reset"></br></br>
</form>

	<form class="form" style="max-width: none; width: 1005px; margin-left:20px; font-size:25px;">
	<h2 style="font-size:20px; text-align:center; font-color:blqck;">Others Business GST Form</h2>
<p>your name

<input type="text"  name="name"></p>
<p>company name

<input type="text" id="sale" name="address"></p>
<p>company address

<input type="text"  name="company" ></p>

<p>Company contact number

<input type="text" id="sale" name="number"></p>
<h2 style="font-size:20px; text-align:center;">List Of All Products Details</h2>
	<div>
<table id="table" border="1">
            
            <tr>
                <th>product name</th>
                <th>purchase value</th>
                <th>IGST</th>
				<th>sales value</th>
				
            </tr>
	</table>
	</div>
	



 
	
	
	<p>total purchase cost
        <input type="text" id="fpc" onclick="showdata();"/></p>
		<p>total sales cost 
        <input type="text" id="fsale" onclick="showdata();"/></p>
		<p>IGST
        <input type="text" id="fgst" onclick="showdata2();"/></p>
		
		</form></br></br>
		<input type="button" id="create_pdf" value="Generate PDF">




</body>

</html>
<script>
$(document).ready(function(){
	$("#hsn").change(function(){
		var id=$(this).val();
		$.ajax({
		url:"hsn.php",
		method:"POST",
		data:{countryId:id},
		dataType:"text",
		success:function(data)
		{
		$('#igst').html(data);
		}
		});
		});
		});
		$(document).ready(function(){
	$("#hsn").change(function(){
		var id=$(this).val();
		$.ajax({
		url:"otherproduct.php",
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
                  var igst = document.getElementById('igst').value;
                  
				  var sale = document.getElementById('sale').value;
           
                  var table = document.getElementsByTagName('table')[0];

                  var newRow = table.insertRow(1);

                  var cel1 = newRow.insertCell(0);
                  var cel2 = newRow.insertCell(1);
                  var cel3 = newRow.insertCell(2);
				  var cel4 = newRow.insertCell(3);
				
				 
				  
				  
                  
                  // add values to the cells
                  cel1.innerHTML = product;
                  cel2.innerHTML = total;
                  cel3.innerHTML = igst;
				  cel4.innerHTML = sale;
				 
				  
				  
            }
			

function showdata(){
var fsale=0;
var fpc=0;

for(var i = 1; i < table.rows.length; i++)
            {
		
fsale = fsale + parseFloat(table.rows[i].cells[3].innerHTML) + parseFloat(table.rows[i].cells[3].innerHTML)*parseFloat(table.rows[i].cells[2].innerHTML)/100;

fpc = fpc + parseFloat(table.rows[i].cells[1].innerHTML)+ parseFloat(table.rows[i].cells[1].innerHTML)*parseFloat(table.rows[i].cells[2].innerHTML)/100;
}

$("#fpc").val(fpc)
$("#fsale").val(fsale)
}
function showdata2(){
	var psale=0;
	var pc=0;
	var fgst=0;
	for(var i = 1; i < table.rows.length; i++){
		psale = psale+ parseFloat(table.rows[i].cells[3].innerHTML)*parseFloat(table.rows[i].cells[2].innerHTML)/100;
		pc = pc+parseFloat(table.rows[i].cells[1].innerHTML)*parseFloat(table.rows[i].cells[2].innerHTML)/100; 
	}
	fgst=psale-pc;
	$("#fgst").val(fgst)
	
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
                doc.save('others-gst.pdf');  
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
                    width: 'auto',  
                    height: 'auto',  
                    textAlign: 'center',  
                    textDecoration: 'none'  
                }).hide().fadeIn().appendTo('body');  
				 }  
        };  
    })(jQuery);
	</script>

	