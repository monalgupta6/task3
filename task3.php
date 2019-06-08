<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <style>
      	.container{
      		padding:100px;
      	}
      </style>
</head>
<body>
	<div class="container">
	<button type="button" value="add" id="add"  onclick="myFunction()">Add</button>
	<button type="button" value="save" id="save" >Save</button>
	<div id="data_0121324375435"></div>
		
	<hr>
	<div id="data_456481324375435"></div>

<script>

//random row create, random id generated and append data
function myFunction() {
	var data='';
	var rand= Math.random(5);
  data = '<div class="row" id="data_'+rand+'"><button type="button" onclick="addFunction('+rand+')">+</button><select  onchange="changeFunction('+rand+')" id="data1_'+rand+'" ></select><button type="button" onclick="rmFunction('+rand+')">-</button></div>';

  document.getElementById("data_0121324375435").innerHTML += data;


}
</script>
<script>

function changeFunction(value){


	//for loop for disable rest of the select option.
	var elems = document.getElementsByTagName("select");
	for(var i = 0; i < elems.length; i++) {
		var old=document.getElementsByTagName("select")[i].getAttribute("id");
		var news="data1_"+value;
if(old==news){
elems[i].disabled = false;
	//alert(value);
}
else{
	//alert(old);
	//alert(news);
elems[i].disabled = true;	
}
		}
 			//by tag name on [0] indexing it will show 0 indexing id. 
	 	/*var x = document.getElementsByTagName("select")[0].getAttribute("id"); 
	 	alert(x);*/
		  	
	 
}

</script>



<script>
	function addFunction(value){
	$.getJSON('data.json', function(abc) {
                   var a=abc.myList;
                   var data='';
                   for(var i=0; i<a.length; i++)
                   {
                     data += '<option value="'+a[i].value+'" >'+a[i].label+'</option>';
                      console.log(a);
                   }
                   document.getElementById("data1_"+value).innerHTML=data;

               });
			

}
</script>

<!--remove function-->
	<script>
		function rmFunction(value){

		document.getElementById("data_"+value).remove();
			var elems = document.getElementsByTagName("select");
		for(var i = 0; i < elems.length; i++) {
    		elems[i].disabled = false;
			}
		}
	</script>

<!--Append data from one div to another div in html(it's called cloning)-->
	<script>
		$(document).ready(function(){
  		$("#save").click(function(){
    	$("#data_0121324375435").clone().appendTo("#data_456481324375435");
  		});
	});
</script>

</div>
</body>
</html>