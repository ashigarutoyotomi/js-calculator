let button	= document.querySelector(".ok");
let text = document.querySelector(".text");
let plus = document.querySelector(".plus");
plus.addEventListener("click",()=>{
	text.value+="+";
});
let minus = document.querySelector(".minus");
minus.addEventListener("click",()=>{
	text.value+="-";
});
let mult = document.querySelector(".mult");
mult.addEventListener("click",()=>{
	text.value+="*";
});
let sep = document.querySelector(".sep");
sep.addEventListener("click",()=>{
	text.value+="/";
});
let one = document.querySelector("[value=one]");
one.addEventListener("click",()=>{
	text.value+="1";
});
let two = document.querySelector("[value=two]");
two.addEventListener("click",()=>{
	text.value+="2";
});
let three = document.querySelector("[value=three]");
three.addEventListener("click",()=>{
	text.value+="3";
});
let four = document.querySelector("[value=four]");
four.addEventListener("click",()=>{
	text.value+="4";
});
let five = document.querySelector("[value=five]");
five.addEventListener("click",()=>{
	text.value+="5";
});
let six = document.querySelector("[value=six]");
six.addEventListener("click",()=>{
	text.value+="6";
});
let seven = document.querySelector("[value=seven]");
seven.addEventListener("click",()=>{
	text.value+="2";
});
let eight = document.querySelector("[value=eight]");
eight.addEventListener("click",()=>{
	text.value+="8";
});
let nine = document.querySelector("[value=nine]");
nine.addEventListener("click",()=>{
	text.value+="9";
});
button.addEventListener("click",(event)=>{
	console.log(eval(text.value));
	text.value = eval(text.value);
});