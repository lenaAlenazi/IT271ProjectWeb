function likeFunction(x,y){
  var  count= 0;
var image = document.getElementById(x);
if(image.src.match("likeOff.png")){
image.src="likOn2.png";
}else{
image.src= "likeOff.png";
}
}
