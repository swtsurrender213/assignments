<!DOCTYPE html>
<html>
<head>

<title>This is my cal</title>
<style>
.display
{ 
    width:280px;
    position:relative;
    left:5px;
	top:1px;
    height:40px;
}
.display input
{
	position:relative;
    left:2px;
    top:2px;
    height:20px;
    font-size:21px;
    text-align:right;
}

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>

<div class="display">Number 1<input id="Num1" type="text" /></div>
<br>
<select id="operation">
  <option value="plus">Plus</option>
  <option value="subt">Subtract</option>
  <option value="div">Divide</option>
  <option value="times">Multiple</option>
</select><br>
<div class="display">Number 2<input id="Num2" type="text" /></div>
<br>
<div id="answer"></div>
<button type="button" id="sbmit">EQUAL</button>
<!-- jquery -->
<script>
$(document).ready(function(){
// create function
function calculate(inputNum1,inputNum2,inputOperation){

var result;

//if inputOperation==times
if(inputOperation=="times"){
result=inputNum1 * inputNum2;
}

//if inputOperation==divide
if(inputOperation=="div"){
result=inputNum1 / inputNum2;
}

//if inputOperation==subtract
if(inputOperation=="subt"){
result=inputNum1 - inputNum2;
}

//if inputOperation==Add
if(inputOperation=="plus"){
result=+inputNum1 + +inputNum2;
}

//return the answer
return result;
}


//main program

$("#sbmit").on('click',function(){

var userNum1=$("#Num1").val();
var userNum2=$("#Num2").val();
var userOperation=$("#operation").val();

//call the function
//alert(calculate(userNum1,userNum2,userOperation));
var answer=calculate(userNum1,userNum2,userOperation);


$("#answer").html(answer);
});




});//end ready
</script>
</body>
</html>
