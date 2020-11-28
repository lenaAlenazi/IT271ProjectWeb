function likeFunction(x,y){
  var  count= 0;
var image = document.getElementById(x);
if(image.src.match("likeOff.png")){
image.src="likOn2.png";
count+=1;
document.getElementById(y).innerHTML = count;
}else{
image.src= "likeOff.png";
 if(count!==0){
   count-=1;
  document.getElementById(y).innerHTML = count;
}else{document.getElementById(y).innerHTML = count;}
}
}
