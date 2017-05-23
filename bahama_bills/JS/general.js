document.getElementById( 'colors' ).style.display = 'none';

document.getElementById('square').onmouseover = function(){
    document.getElementById('colors', 'colors-2').style.display = 'block';
}
document.getElementById('square').onmouseout = function(){
    document.getElementById('colors').style.display = 'none';
}

document.getElementById( 'colors-2' ).style.display = 'none';

document.getElementById('square-2').onmouseover = function(){
    document.getElementById('colors-2').style.display = 'block';
}
document.getElementById('square-2').onmouseout = function(){
    document.getElementById('colors-2').style.display = 'none';
}

document.getElementById( 'colors-3' ).style.display = 'none';

document.getElementById('square-3').onmouseover = function(){
    document.getElementById('colors-3').style.display = 'block';
}
document.getElementById('square-3').onmouseout = function(){
    document.getElementById('colors-3').style.display = 'none';
}

document.getElementById( 'colors-4' ).style.display = 'none';

document.getElementById('square-4').onmouseover = function(){
    document.getElementById('colors-4').style.display = 'block';
}
document.getElementById('square-4').onmouseout = function(){
    document.getElementById('colors-4').style.display = 'none';
}

document.getElementById( 'sizes' ).style.display = 'none';

document.getElementById('up').onmouseover = function(){
    document.getElementById('sizes').style.display = 'block';
}
document.getElementById('up').onmouseout = function(){
    document.getElementById('sizes').style.display = 'none';
}

document.getElementById( 'sizes-2' ).style.display = 'none';

document.getElementById('up-2').onmouseover = function(){
    document.getElementById('sizes-2').style.display = 'block';
}
document.getElementById('up-2').onmouseout = function(){
    document.getElementById('sizes-2').style.display = 'none';
}

document.getElementById( 'sizes-3' ).style.display = 'none';

document.getElementById('up-3').onmouseover = function(){
    document.getElementById('sizes-3').style.display = 'block';
}
document.getElementById('up-3').onmouseout = function(){
    document.getElementById('sizes-3').style.display = 'none';
}

document.getElementById( 'sizes-4' ).style.display = 'none';

document.getElementById('up-4').onmouseover = function(){
    document.getElementById('sizes-4').style.display = 'block';
}
document.getElementById('up-4').onmouseout = function(){
    document.getElementById('sizes-4').style.display = 'none';
}

/*
document.getElementById('up').onclick = function() {myFunction()};

function myFunction() {
    document.getElementById('sizes').style.display = "block";
}*/
var clicks = 0;
    function onClick() {
        clicks += 1;
        document.getElementById("clicks").innerHTML = clicks;
    };


$(function(){
  $("#flip").click(function() {
    $(".shirt-bg").toggleClass("back")
  });
});



/*document.getElementById('flip').onclick = function(){
    document.getElementById('shirt1').style.backgroundImage = "url('./img/shirt_blue_back.jpg')";
}
*/


//Write a function that takes a list of strings an prints them, one per line, in a rectangular frame. For example the list ["Hello", "World", "in", "a", "frame"] gets printed as:

/*var myArr=['hello','world','in','a','frame'];

function printThisArray(myArr){
		 for(var i = 0; i < i.length; i++){
}

console.log(myArr);*/
