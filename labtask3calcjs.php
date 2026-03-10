<!DOCTYPE html>
<html>
<head>
<title>Basic Calculator</title>
 
<style>
body{
font-family: Arial;
text-align: center;
}
 
.box{
width:220px;
margin:auto;
border:1px solid black;
padding:10px;
}
 
button{
width:45px;
height:35px;
margin:2px;
}
</style>
 
</head>
 
<body>
 
<h2>My Calculator</h2>
 
<div class="box">
 
<input type="text" id="screen" style="width:190px;height:30px;"><br><br>
 
<button onclick="press(7)">7</button>
<button onclick="press(8)">8</button>
<button onclick="press(9)">9</button>
<button onclick="press('/')">/</button><br>
 
<button onclick="press(4)">4</button>
<button onclick="press(5)">5</button>
<button onclick="press(6)">6</button>
<button onclick="press('*')">*</button><br>
 
<button onclick="press(1)">1</button>
<button onclick="press(2)">2</button>
<button onclick="press(3)">3</button>
<button onclick="press('-')">-</button><br>
 
<button onclick="press(0)">0</button>
<button onclick="clearBox()">C</button>
<button onclick="showResult()">=</button>
<button onclick="press('+')">+</button>
 
</div>
 
<script>
 
function press(x){
document.getElementById("screen").value =
document.getElementById("screen").value + x;
}
 
function clearBox(){
document.getElementById("screen").value = "";
}
 
function showResult(){
var exp = document.getElementById("screen").value;
var ans = eval(exp);
document.getElementById("screen").value = ans;
}
 
</script>
 
</body>
</html>