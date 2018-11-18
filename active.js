
   alert("Welcome To LiGuo Internet !"); 

   function myFunction(x,y){
    var oLi=document.getElementById(x);
    var oUl=document.getElementById(y);
    oLi.onmouseover=function(){
        oUl.style.display='block'; 
    }
    oLi.onmouseout=function(){
        oUl.style.display='none';
        
    }
}
myFunction('li1','ul1');
myFunction('li2','ul2');
myFunction('li3','ul3');
/*

function  footerpoem(){
	var poem=document.getElementById("poem");
	poem.onmouseover=function(){
        	 poem.style.display='none';

	}
	poem.onmouseout=function(){
		poem.style.display='block';
	}
}
footerpoem();
footerpoem();
*/
function footerdate(){
var today=new Date();
var nodes=document.getElementById("h3");
nodes.innerHTML=today.getFullYear();
}
footerdate();


