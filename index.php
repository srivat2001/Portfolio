<html><head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<style>

@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

</style><script>
	
	

	
</script></head>


<body><div class="wrapper">
<div class="content">
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">&lt;<div class="navitem">&nbsp;Home&nbsp;</div> &gt;</a>
  <a href="#skillset1">&lt;<div class="navitem">&nbsp;Skills&nbsp;</div> &gt;</a>
 <a href="#home">&lt;<div class="navitem">&nbsp;Project&nbsp;</div> &gt;</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="fullconainter">
<div id="container" class="container">
<div class="test" id="hello">&lt; Hello World &gt;</div>
<div class="introduction" id="intro">Welcome to my World of Dev</div>
</div>
	</div><br>
	<div class="">
	<div class="mypicholder">
		<img src="mypicon.png" class="myvector upperlayer" width="500px">
		<img src="mypic.png" class="myvector" width="500px">
		
	</div>

	<div class="flexclass">
	<div class="table">
		<div class="circlebg">
			<i onclick="turnonpc(this)" class="fa fa-power-off" style="font-size:48px;"></i>
		</div>
	</div>
		<div class="tablefill"></div>
	</div>
	</div>
	<style>
		.content{
			
			overflow-x: hidden;
		}
		body{
			
			overflow-x: hidden;
		}
		.mypicholder{
			
		position: relative;
margin-bottom: 319;
z-index: 1;
top: -300;
		}
		.myvector{
			
			position: absolute;
			
		}
		.upperlayer{
			z-index: 1;
			display: none;
		}
		
		.tablefill{
			
			height: inherit;
			width: inherit;
			position: relative;
			left: -25px;
			border-top-right-radius: 40px;
border-bottom-right-radius: 40px;
			background-color: white;
			z-index: -1;
			  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
		}
		.flexclass{
		width: 50%;
			display: flex;
			
		}
		.screencontainer {
  height: inherit;
  position: relative;
background-color: transparent;
			display: block;
}

.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
		.vertical-center{
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}		.vertical-center p{
font-size: 28px;
font-weight: 700;
	opacity: 0;

}
		.screenloading{
font-size: 28px;
font-weight: 700;
			animation: onscreen 4s forwards;
			

}
		@keyframes onscreen{
			
			0%{
				
				opacity: 0%;	
			}
			50%{
				
					opacity: 100%;
			}
						100%{
				
					opacity: 0%;
			}
		}
		.grid-item:last-child{
			
			margin-bottom: 0px;
		}
	</style>
	<div class="monitorouter">
	<div class="screen">
			<div class="screencontainer">
  <div class="vertical-center">
    <p class="setuppcani">Setting up PC</p>
  </div>
</div>
	<div id="skillset1" class="skillset1" >
<center><div class="skillsettopic increaseheight" scroll-tag="#skill1">What am Good at?</div></center>
<div class="skillsetitems">
	
<div class="skillsetcontainer">

	  <div class="grid-item"><div class="skillset" id="skill1" style="display: block;"><img class="imgskill" src="HTML.png" width="100px" height="100px"><div class="star">Beginner</div><div style="margin-top:7px" class="star">HTML</div></div></div>  <div class="grid-item"><div class="skillset" id="skill1" style="display: block;"><img class="imgskill" src="JavaScript.png" width="100px" height="100px"><div class="star">Beginner</div><div style="margin-top:7px" class="star">JavaScript</div></div></div>  <div class="grid-item"><div class="skillset" id="skill1" style="display: block;"><img class="imgskill" src="CSS.png" width="100px" height="100px"><div class="star">Beginner</div><div style="margin-top:7px" class="star">CSS</div></div></div></div></div>
<div class="skillsetcontainer js">
	  <div class="grid-item"><div class="skillset" id="skill1" style="display: block;"><img class="imgskill" src="HTML.png" width="100px" height="100px"><div class="star">Beginner</div><div style="margin-top:7px" class="star">HTML</div></div></div>  <div class="grid-item"><div class="skillset" id="skill1" style="display: block;"><img class="imgskill" src="JavaScript.png" width="100px" height="100px"><div class="star">Beginner</div><div style="margin-top:7px" class="star">JavaScript</div></div></div>  <div class="grid-item"><div class="skillset" id="skill1" style="display: block;"><img class="imgskill" src="CSS.png" width="100px" height="100px"><div class="star">Beginner</div><div style="margin-top:7px" class="star">CSS</div></div></div></div>
		</div>
	
	
	</div>
	
	
	<style>
		.skillset1{
			
			display: none;
		}
	[contenteditable] {
  outline: 0px solid transparent;
}
		.consolebody {
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
  box-sizing: border-box;
  padding: 20px;
  height: calc(100% - 40px);
  overflow: scroll;
  background-color: #000;
  color: #63de00;
}

.consolebody p {
  line-height: 1.5rem;
	margin: 0px;
}
		.circlebg{
					
		padding: 1rem;	
			border-radius: 25px;
			background-color: transparent;
			width: auto;
		}
		.fa-power-off{
		cursor: pointer;
color: white
		
		
			
		}
		.myvector{
			
			margin-left: 35px;
		}
		::-webkit-scrollbar {
    width: 12px;
}

/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: rgba(255,0,0,0.8); 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
		.screen{background-color: #000;
margin: 08px;
		overflow: auto;
			overflow-x: auto;
margin-bottom: 2px;
height: inherit;
color: white;
			padding-bottom: 0px;font-family: 'Plus Jakarta Sans', sans-serif;
		}
		.monitorouter{
margin-top: 20px;
width: 80%;
height: 420px;
border-radius: 0px;

border: 25px solid #151515;
  border-bottom-color: rgb(21, 21, 21);
  border-bottom-style: solid;
  border-bottom-width: 25px;

background-color: black;

margin-left: auto;
margin-right: auto;
background-color: #000;

border-bottom: 60px solid #151515;

		padding-bottom: 17px;}
		.table{
		
			
			height: 80px;
			margin-left: 100px;
			border-radius: 40px;
			background-color: black;
			z-index: 1;
			box-shadow: rgba(255, 255, 255, 0.4) 0px 0px 0px 2px, rgba(255, 255, 255, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
		}
	
	</style>

	<style>
	.skillsetcontainer {
		margin-left: auto;
		margin-right: auto;
display: grid;
grid-template-columns: auto auto auto;
padding: 10px;
width: 90%;
margin: 1rem;
		margin-left: auto;
margin-right: auto;
		margin-bottom: 0px;
}
		.js{
			width: 70%;
			border-radius: 20px;
			background-color: white;
		}
.grid-item {
 width: fit-content;
	display: flex;
	margin-left: auto;
margin-right: auto;
	margin-bottom: 30px;
		}	.screenglow{
			
						
box-shadow: rgba(255, 255, 255, 0) 0px 0px 1px, rgba(215, 215, 215, 0.33) 0px 0px 20px;
		}
		.pconoffbtn{
			
			box-shadow: rgba(255, 255, 255, 0.03) 0px 0px 1px, rgba(245, 245, 245, 0.46) 0px 0px 20px;
color: #ff7a7a;
		}
				.onoffbtn{
			
			box-shadow: rgba(255, 255, 255, 0) 0px 0px 1px, rgba(245, 245, 245, 0.28) 0px 0px 20px;
color: #ff7a7a;
		}
		</style>
	<script>
		async function turnonpc(obj){
			let img = document.getElementsByClassName("myvector upperlayer")[0].style.display;
	         obj.classList.toggle("onoffbtn");

			//img = img.substring(img.lastIndexOf("/")+1);
			if(img=="inline" || img=="block"){
				$(".myvector.upperlayer").fadeOut(500);
					document.getElementsByClassName("Screen")[0].classList.remove("pconoffbtn");	
			document.getElementsByClassName("skillset1")[0].style.display="none";
          document.getElementsByClassName("laptopname")[0].style.color="#989696";
		 document.getElementsByClassName("laptopname")[0].style.textShadow="0 0 1px #93939300, 0 0 20px #ff3e3e00";		
			}
			else{
				    //  document.getElementsByClassName("laptopname")[0].style.color="rgb(239, 100, 100)";
	 document.getElementsByClassName("laptopname")[0].style.textShadow="rgba(255, 116, 33, 0.83) 0px 0px 1px, rgba(255, 171, 171, 0.58) 0px 0px 20px";	
					
				
				if(document.getElementsByClassName("screencontainer")[0]){
					$(".myvector.upperlayer").fadeIn(1000);
										await new Promise(r => setTimeout(r, 100));
			
				document.getElementsByClassName("setuppcani")[0].classList.add("screenloading");
					await new Promise(r => setTimeout(r, 4000));
				document.getElementsByClassName("screencontainer")[0].remove();
				}
				
    
			$(".myvector.upperlayer").fadeIn(1000);
				document.getElementsByClassName("skillset1")[0].style.display="block";
						document.getElementsByClassName("Screen")[0].classList.add("pconoffbtn");	
				
	
			}
			
		}
		$(document).ready(function(){
			let imgarray=["HTML","JavaScript","CSS"];
			let skilllevel=["Beginner","Beginner","Beginner"];
			for(let i=0;i<imgarray.length;i++){
		
				document.getElementsByClassName("skillsetcontainer")[0].innerHTML = document.getElementsByClassName("skillsetcontainer")[0].innerHTML+'  <div class="grid-item"><div class="skillset" id="skill1"><img width="100px"  class="imgskill" height="100px"src="'+imgarray[i]+'.png"/><div class="star">'+skilllevel[i]+'</div><div style="margin-top:7px" class="star">'+imgarray[i]+'</div></div></div>';
				
			}
            imgarray=["HTML","JavaScript","CSS"];
			skilllevel=["Beginner","Beginner","Beginner"];
						for(let i=0;i<imgarray.length;i++){
		
				document.getElementsByClassName("skillsetcontainer js")[0].innerHTML = document.getElementsByClassName("skillsetcontainer js")[0].innerHTML+'  <div class="grid-item"><div class="skillset" id="skill1"><img width="100px"  class="imgskill" height="100px"src="'+imgarray[i]+'.png"/><div class="star">'+skilllevel[i]+'</div><div style="margin-top:7px" class="star">'+imgarray[i]+'</div></div></div>';
				
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			$(".skillset").mouseover(
	function () {
		let  objfck = $(this);
			setTimeout(
				
  function() 
  {
    //	objfck.find(".star").css("opacity","100");
	  
  }, 250);
	//objfck.css("height","160px");
	

	/*	let childlenlen = childelemetnt.length;
		let j = 0;
		function myLoop() { //  create a loop function
			setTimeout(function () { //  call a 3s setTimeout when the loop is called                //  increment the counter
				if (j < childlenlen) {
					childelemetnt[j].style.fontSize = "20px";
					j++;
					myLoop(); //  ..  again which will trigger another 
				} //  ..  setTimeout()
			}, 200)
		}
		myLoop();*/
	}).mouseout(function () {
						let  objfck = $(this);
			setTimeout(
				
  function() 
  {     
    //	objfck.find(".star").css("opacity","0");
	//   objfck.css("height","100px");
  }, 0);
	/*let childelemetnt = $(this).find(".star").find(".fa.fa-star.checked");
	let j = childelemetnt.length - 1;
	function myLoop() { //  create a loop function
		setTimeout(function () { //  call a 3s setTimeout when the loop is called                //  increment the counter
			if (j >= 0) {
				childelemetnt[j].style.fontSize = "14px";
				j--;
				myLoop(); //  ..  again which will trigger another 
			} //  ..  setTimeout()
		}, 0)
	}
	myLoop();
	
	*/
});

      
			
		});
		

		
		

  
		
		
		</script>
	
	
	
	

	</div>
		<div class="laptopname" style="text-shadow: rgba(255, 116, 33, 0.83) 0px 0px 1px, rgba(255, 171, 171, 0.58) 0px 0px 20px;"><span>OMEN</span></div>
</div>
<style>
	.laptopname{
		font-size: 22px;
line-height: 0.4;
letter-spacing: 0.226em;
		color: #a4a4a4;
		position: relative;
		top: -32px;
		text-align: center;
	}
	.skilllevel{
		
		color: #626262;
font-size: 15px;
line-height: 1.2;
font-weight: 100;
	}
	.checked{
		color: #494949;
font-size: 5px;
font-weight: 300;
line-height: 1.5;
letter-spacing: 0.093em;
		color: #8b0000;
		padding-top:0.3rem;
		transition: all 0.2s ease;
	}
	.unchecked{
		
		color: white;
	}
	.star{
		
position: relative;
top: 100;
transition: all ease 0.5s;
color: white;
font-weight: 100;
font-size: 13px;
text-align: center;
margin-top: 15px;
		background: #f224249c;
		padding: 5px;
border-radius: 10px;
		
	}
	.imgskill{
		position: absolute;
		z-index: 10;
		pointer-events:auto;
	}
	.imgskill:hover + .star{
		
		top:100;
	}
	.skillset:hover{
	
		
	}
	html{
		scroll-behavior: smooth;
	}
	a{
		top:-50px;
	}
	a:first-child{
		
		
		animation: fromup 1s forwards;
		position: relative;
		
		top:-50px;
		
	}
		a:nth-child(2){
		
		
		animation: fromup 1s forwards;
		position: relative;
		animation-delay: 0.5s;	
		top:-50px;
		
	}
			a:nth-child(3){
		
		
		animation: fromup 1s forwards;
		position: relative;
				animation-delay: 1s;
				top:-50px;
		
	}
	@keyframes fromup {
		
		
		0%{
			top:-50px;
			
		}
			100%{
			top:0px;
			
		}	
	}

	.skillsettopic{

		margin-bottom: 30px;
		
		padding: 0.5rem;
		border-radius: 20px;
		background-color: white;
		color: black;
line-height: 0.7;
font-size: 44px;
letter-spacing: 0em;
font-weight: 900;
		transition: all 275ms ease;

		padding-top: 40;
	
		width: 77%;
		color: black;
	}
	.skillsettopic::first-letter {

  color: #8A2BE2;
}
	.increaseheight{
		transition: all 275ms ease;	
		width: 77%;
		color: black;
	}
	.skillsetitems{
		margin-top: 20px;
		display: flex;
		
	}
	.skillset{
position: relative;
background-color: white;
padding: 1rem;
border-radius: 20px;
margin-left: auto;
margin-right: auto;
display: none;
pointer-events: none;

transition: all ease 1s;
height: 168px;
width: 100px;
		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
	
	}
	body{
		padding: 0rem;
		padding-top: 0px;
		position: absolute;
		width: 100%;
		background-attachment: fixed;
		background: url(bg.jpg);
	 overflow: scroll;
	
	}
		/*animation: nooverflow 1s forwards;
		animation-delay: 3s;
		overflow-y: hidden;
		overflow-x: hidden;
	}
	@keyframes nooverflow{
			  0%   { overflow-y: none;
		}

	 100%  {
		overflow-y: scroll;
		}
		
		
	}*/
	h1{
		  font-size: 35px;
  line-height: 1.1;
  letter-spacing: -0.014em;
  font-weight: 900;
}
	
.topnav {
  background-color: transparent;
  overflow: hidden;

	display: flex;
}
	.topnav .navitem:hover {
		
		margin-left: 5px;
		margin-right: 5px;
	}
	.topnav .navitem{
		
		transition: all 275ms ease;	
	}
/* Style the links inside the navigation bar */
.topnav a {
	
	margin-left: auto;
	margin-right: auto;
  float: left;
  display: flex;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
	font-weight: 100;
	margin-left: auto;
}

/* Change the color of links on hover */


/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: darkred;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}
	.skillset1{
		width: 100%;
	
	
		font-weight: 800;
		color: white;
		display: none;
	
		animation-duration: 2s;
		animation-delay: 2s;
		opacity: 100;
		padding-left: 0;
		position: relative;
		margin-left: auto;
		margin-right: auto;
	
		background: url(bgskill.jpg)
		
	}

		
		@keyframes upward{
		
		  0%   {
		top:100;
		
		}

	 100%  {
		top:0;
		}
	
	
	}
	.fullconainter{
		padding-top: 150px;
		display: flex;
		width: 100%;
		
		
	}
.container
	{  

		padding: 1rem;
		text-align: center;
		margin-left: auto;
		margin-right: auto;
	
	animation: increaseintrobg forwards;

animation-duration: 2s;
		position: relative;
	}
	
		@keyframes increaseintrobg{
		
		
		  0%   { width: 500px;
			top:100;
			
			}

	 100%  {width: 460px;
		 top:0;
			
			
			}	
	}
	
	
	
body {
  font-family: "Barlow", sans-serif;
overflow-x: hidden;
  align-items: center;
  justify-content: center;
  margin: 0;
	  
  min-height: 100vh;
	
}
	#intro{
	width: 100%;	
		font-weight: 100;
font-size: 13px;
line-height: 0.9;
letter-spacing: 0.6em;
position: relative;
left: 3;
	transition: all 275ms ease;	
		animation: increasetextsize forwards;
		animation-duration: 2s;
		color: white;
		text-align: center;
	}
	#hello{
position: relative;
display: inline-block;
font-size: 2.8em;
font-weight: 800;
color: #fafafa;
overflow: show;
background: linear-gradient(to left, white, #ff8f00 50%, white 50%);
  background-size: auto;
  background-clip: border-box;
background-clip: text;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-size: 80% 3%;
transition: all 275ms ease;
text-decoration: none;
animation: example infinite,increasetextsize2 forwards;

animation-duration: 2s;

	}
	
	#hello:hover + #intro {
    left: -0;
		font-size: 10px;
}
	#hello:hover + #intro {
    left: -0;
		font-size: 10px;
}
#hello:hover {
  background-position: 0 70%;
  transform: scale(1.3,1.3)
}
	@keyframes increasetextsize{
		
		
		  0%   { transform: scale(1,1) }

	 100%  {transform: scale(0.8,0.8) }	
	}
		@keyframes increasetextsize2{
		
		
		  0%   { 
		
			  transform: scale(1,1) }

	 100%  {
	
		 transform: scale(1.3,1.3)
			
			
			
			}	
	}
	@keyframes example {

		  0%   { background-position: 0%; }
  50%  {background-position: 100%; }
  100% { background-position: 0%; }
}
	@media only screen and (max-width: 800px) {
		body {


	
}
		
		#intro{
		line-height: 1.4;
font-size: 10px;
			text-align: center;
			
		}
		.container{
			
			width: 90%;
		}
		.introduction{
			
			line-height: 2;
font-size: 11px;
		}
}
		@media only screen and (max-width:408px) {

}
	
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }	.skillsetcontainer{
		
		grid-template-columns: auto ;
	}
	.table{
		
		top: -10;
position: relative;
	}
	.mypicholder {
position: relative;
margin-bottom: 269;
z-index: -1;
top: -260;
		left:-50
}
	.tablefill{
		
		z-index: -2;
	}
				#hello{
				
				font-size: 35px;
			}
			.navbar a{
				
				font-size: 10px;
			}
	.skillsettopic{

		font-size: 34px;
	}
	.fullconainter{
		
		padding-top: 20px;
	}
	#intro{
			font-size: 12px;
		text-align: center;	
		
	}
		.laptopname span{
		
		display: none;
	}
	.laptopname:after{
		text-align: center;
		content:"Mobile";
	}

.flexclass {

    width: 90%;
    display: flex;

}
	.myvector{
		
		width: 420px;
	}
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 800px) {
	.skillsetcontainer{
		
		grid-template-columns: auto ;
	}
	.topnav {


	display: block;
}
	.skillsettopic {
  font-size: 20px;
}
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: flex;
    text-align: left;
  }
}
	
	</style>
<script>
/*	$(".skillsettopic").on('click', function(event) {
      window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' })
		var hash = document.getElementsByClassName("skillsettopic")[0].getAttribute("scroll-tag");
    if (hash !== "") {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
} */
</script></div></body></html>