<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="shortcut icon" href="f.ico" type="image/x-icon" />
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Your description goes here" />
  <meta name="keywords" content="your,keywords,goes,here" />
  <meta name="author" content="Your Name" />
 <style class="cp-pen-styles">
        html
        {
            font-family: 'Noto Sans' , serif;
        }
        
        .blocks
        {
            margin: auto;
            max-width: 1070px;
            padding: 0;
        }
        
        .blocks li
        {
            color: #fff;
            background-color: #2196F3;
            cursor: default;
            float: left;
            list-style: none;
            margin: 1%;
            padding: 60px 0;
            position: relative;
            text-align: center;
            -webkit-transition: .3s cubic-bezier(.3,0,0,1.3);
            transition: .3s cubic-bezier(.3,0,0,1.3);
            width: 31%;
            border-radius: 4px;
            font-weight: bold;
        }
        
        .blocks li:hover
        {
            -webkit-transform: scale(.7);
            -ms-transform: scale(.7);
            transform: scale(.7);
            z-index: 3000;
        }
        
        .popup
        {
            background-color: inherit;
            color: #fff;
            height: 100%;
            width: 100%;
            left: 0;
            opacity: 0;
            position: absolute;
            top: 0;
            padding: 15px;
            border-radius: 4px;
            -webkit-transition: .3s cubic-bezier(.3,0,0,1.37);
            transition: .3s cubic-bezier(.3,0,0,1.37);
        }
        
        .popup span
        {
            font-size: 12px;
            font-weight: normal;
            left: 0;
            padding: 15px 25px;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        
        .popup h3
        {
            font-size: 13px;
            margin: 0 0 5px;
            padding: 0;
        }
        
        .blocks li:hover .popup
        {
            opacity: 1;
            -webkit-transform: scale(2);
            -ms-transform: scale(2);
            transform: scale(2);
            box-shadow: 0 0 10px 2px rgba(0,0,0,.4);
        }
    </style>

  <link rel="stylesheet" type="text/css" href="andreas00.css" media="screen,projection" />


  <title>iHMS</title>
  <script language=javascript>  

function am(i)
{  

   
   
   ///////////////////////////////////////////////
   if(a[i].checked==true){
  
      if (a[i].type == "checkbox") a[i].checked = true;
   }
   else
   {
   
      if (a[i].type == "checkbox") a[i].checked = true;
   }
}
function bm(i)
{
   var a = document.getElementsByName('a[]');
   if(a[i].checked==true){
  
      if (a[i].type == "checkbox") a[i].checked = false;
   }

}
function bm1(i)
{
   var c = document.getElementsByTagName("input");
   if(c[i].checked==true){
  
      if (c[i].type == "checkbox") c[i].checked = false;
   }

}
function men()
{
var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
for(var a=0;a<18;a++)
{
am(b[a]);
}
}

function tro ()
{
var b=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22,];
for(var a=0;a<22;a++)
{
am(b[a]);
}
}
function cell()
{
var b=[4,0,2,5,3,6,1,27,8,9,26,11,10,12,13,14,15,16,17,18,19,7,23,24,20,22];
for(var a=0;a<27;a++)
{
am(b[a]);
}
}
function stem()
{
var b=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
for(var a=0;a<20;a++)
{
am(b[a]);
}
}
function cul()
{
var b=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22,28,25];
for(var a=0;a<22;a++)
{
am(b[a]);
}
}
function c_all()
{
for(var i=0;i<29;i++)
{bm(i);}
for(var i=0;i<5;i++)
{bm1(i);}
}
//////////////表单验证
      function check(){
////location
var t=document.getElementsByName('location1')[0].value;
var t1=document.getElementsByName('location2')[0].value;
var g=t1-t;
if(g>500000)
{
alert('region is too large!');
return false;}
/////location


		var textbox=document.getElementsByName('a[]');

  
        for(i=0;i<textbox.length;i++){
            if(!textbox[i].checked){
                if(i==textbox.length-1){
                alert('Please choose modification type');
				return false;
                 }
            }else{//2
			//////////////////////////1
			var textbox=document.getElementsByName('celltype[]');

  
        for(i=0;i<textbox.length;i++){//for
            if(!textbox[i].checked){
                if(i==textbox.length-1){
    
				
                 }
                                    }
							else{return true;}
									}//for
		var textbox=document.getElementsByName('o[]');
		for(i=0;i<textbox.length;i++){//for
            if(!textbox[i].checked){
                if(i==textbox.length-1){
                alert('please choose celltypes and Organs samples');
				return false;
                 }
                                    }
							else{return true;}
									}//for
		
		////////////////////////1
              return true;
                  }	//2
		}      
     }
	 /////////////////
	 function ExistsData()
	{
		 if(document.getElementById("yu").value == "")
		 {
		    document.getElementById("rb").disabled = "disabled";
		    return;
		 }
		  
		 document.getElementById("rb").disabled = "";
	}
	////////////////////
	 function ExistsData1()
	{
		 if(document.getElementById("yu2").value == "")
		 {
		    document.getElementById("rb2").disabled = "disabled";
		    return;
		 }
		  
		 document.getElementById("rb2").disabled = "";
	}
	////////////////////////////////////quick
	function che()
  {
     var a = document.getElementsByName('a[]');
	 var g=0;
	 for(i=0;i<a.length;i++)
     {if(a[i].checked==true) g=g+1;}
	return g;
  
  }
  
  ///////////////////////////
function am(i)
{  //f
   var g=0;

   var a = document.getElementsByName('a[]');

   ////////////////////
   if(a[i].checked==true){
  
      a[i].checked = false;
	  
   }
   else
   {
   
 a[i].checked = true;
 a[i].disabled='';
   }
}//f
////////////////////////////////////////////
function contains(arr, str) {//zaibuzai
    var i = arr.length;
    while (i--) {
           if (arr[i] === str) {
           return true;
           }   
    }   
    return false;
}
/////////////////////////////////////////
function sec(a,b)
{//f
var i=a.length;
var c=new Array();
for(var r=0;r<i;r++)
{
if(contains(b,a[r]))
c.push(a[r]);
}
return c;


}//f
/////////////////////////
function newmen()
{//main

 var aaa = document.getElementsByName('celltype[]');
  var aa = document.getElementsByName('o[]');
 var a = document.getElementsByName('a[]');
 if(aaa[0].checked==true)//chosed
 {//1


 
 var l=0;//length


 
 for(var r=0;r<29;r++)
 {  
   if(a[r].checked==true)
    {l=l+1;}
 }
 
var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];


if(l==0)//first arrive
{//f
for(var a=0;a<18;a++)
{
var s=b[a];
am(b[a]);
}
}//f
if(l>=1)//nor first arrive
{//ff
    var a = document.getElementsByName('a[]');
    for(var r=0;r<29;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
	for(var r=0;r<18;r++)
	{
	s=b[r];
	a[s].disabled='';
	}


}//ff

 }//1
 ///////////////////////////////
 if(aaa[0].checked==false)//cancle
 {//th
 var l=0;
 var l1=0;
 var g=new Array();
 var g1=new Array();

 for(var r=0;r<5;r++)
 {//gh
 if(aaa[r].checked==true)
 {g[l]=r;l=l+1;}
 
 }//gh
 for(var r=0;r<18;r++)
 { if(aa[r].checked==true)
 {g1[l1]=r;l1=l1+1;}
 }
 if((l+l1)==0)//最后走
 {
 for(var r=0;r<29;r++)
 { a[r].checked=false;
 a[r].disabled="disabled";}
 }
 
 if((l+l1)>0)//不是最后走，取消交
 {//h
  
  var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];
var t=new Array();
 var h=0;
 if(contains(g,0))
 {t[h]=b;h=h+1;alert(t[(h-1)]);}
 if(contains(g,1))
 {t[h]=b1;h=h+1;}
  if(contains(g,2))
{t[h]=b2;h=h+1;}
  if(contains(g,3))
 {t[h]=b3;h=h+1;}
  if(contains(g,4))
{t[h]=b4;h=h+1;}
 if(l1>0)
{t[h]=b5;h=h+1;}
 }//h
var i=t.length;

var c=t[0];
for(var r=1;r<i;r++)
{  c=sec(c,t[r]);
}

 for(var i=0;i<29;i++)
 {//op
 if(contains(c,i))
 {
 a[i].checked=true;
 a[i].disabled='';
 
 }
 else
  {
  a[i].checked=false;
 a[i].disabled='disabled';

   }
 
 
 }//op
 }//th
}//main
///////////
function newtro()
{//main

 var aaa = document.getElementsByName('celltype[]');
  var aa = document.getElementsByName('o[]');
 var a = document.getElementsByName('a[]');
 if(aaa[1].checked==true)//chosed
 {//1


 
 var l=0;//length


 
 for(var r=0;r<29;r++)
 {  
   if(a[r].checked==true)
    {l=l+1;}
 }
 
var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];


if(l==0)//first arrive
{//f
for(var a=0;a<22;a++)
{
var s=b[a];
am(b1[a]);
}
}//f
if(l>=1)//nor first arrive
{//ff
    var a = document.getElementsByName('a[]');
    for(var r=0;r<29;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
	for(var r=0;r<22;r++)
	{
	s=b1[r];
	a[s].disabled='';
	}


}//ff

 }//1
 ///////////////////////////////
 if(aaa[1].checked==false)//cancle
 {//th
 var l=0;
 var l1=0;
 var g=new Array();
 var g1=new Array();

 for(var r=0;r<5;r++)
 {//gh
 if(aaa[r].checked==true)
 {g[l]=r;l=l+1;}
 
 }//gh
 for(var r=0;r<18;r++)
 { if(aa[r].checked==true)
 {g1[l1]=r;l1=l1+1;}
 }
 if((l+l1)==0)//最后走
 {
 for(var r=0;r<29;r++)
 { a[r].checked=false;
 a[r].disabled="disabled";}
 }
 
 if((l+l1)>0)//不是最后走，取消交
 {//h
  
  var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];
var t=new Array();
 var h=0;
 if(contains(g,0))
 {t[h]=b;h=h+1;}
 if(contains(g,1))
 {t[h]=b1;h=h+1;}
  if(contains(g,2))
{t[h]=b2;h=h+1;}
  if(contains(g,3))
 {t[h]=b3;h=h+1;}
  if(contains(g,4))
{t[h]=b4;h=h+1;}
 if(l1>0)
{t[h]=b5;h=h+1;}
 }//h
var i=t.length;
var c=t[0];
for(var r=1;r<i;r++)
{  c=sec(c,t[r]);
}

 for(var i=0;i<29;i++)
 {//op
 if(contains(c,i))
 {
 a[i].checked=true;
 a[i].disabled='';
 
 }
 else
  {
  a[i].checked=false;
 a[i].disabled='disabled';

   }
 
 
 }//op
 }//th
}//main
////////////////
function newcell()
{//main

 var aaa = document.getElementsByName('celltype[]');
  var aa = document.getElementsByName('o[]');
 var a = document.getElementsByName('a[]');
 if(aaa[2].checked==true)//chosed
 {//1


 
 var l=0;//length


 
 for(var r=0;r<29;r++)
 {  
   if(a[r].checked==true)
    {l=l+1;}
 }
 
var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];


if(l==0)//first arrive
{//f
for(var a=0;a<20;a++)
{
var s=b2[a];
am(b2[a]);
}
}//f
if(l>=1)//nor first arrive
{//ff
    var a = document.getElementsByName('a[]');
    for(var r=0;r<29;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
	for(var r=0;r<20;r++)
	{
	s=b2[r];
	a[s].disabled='';
	}


}//ff

 }//1
 ///////////////////////////////
 if(aaa[2].checked==false)//cancle
 {//th
 var l=0;
 var l1=0;
 var g=new Array();
 var g1=new Array();

 for(var r=0;r<5;r++)
 {//gh
 if(aaa[r].checked==true)
 {g[l]=r;l=l+1;}
 
 }//gh
 for(var r=0;r<18;r++)
 { if(aa[r].checked==true)
 {g1[l1]=r;l1=l1+1;}
 }
 if((l+l1)==0)//最后走
 {
 for(var r=0;r<29;r++)
 { a[r].checked=false;
 a[r].disabled="disabled";}
 }
 
 if((l+l1)>0)//不是最后走，取消交
 {//h
  
  var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];
var t=new Array();
 var h=0;
 if(contains(g,0))
 {t[h]=b;h=h+1;}
 if(contains(g,1))
 {t[h]=b1;h=h+1;}
  if(contains(g,2))
{t[h]=b2;h=h+1;}
  if(contains(g,3))
 {t[h]=b3;h=h+1;}
  if(contains(g,4))
{t[h]=b4;h=h+1;}
 if(l1>0)
{t[h]=b5;h=h+1;}
 }//h
var i=t.length;
var c=t[0];
for(var r=1;r<i;r++)
{  c=sec(c,t[r]);
}

 for(var i=0;i<29;i++)
 {//op
 if(contains(c,i))
 {
 a[i].checked=true;
 a[i].disabled='';
 
 }
 else
  {
  a[i].checked=false;
 a[i].disabled='disabled';

   }
 
 
 }//op
 }//th
}//main
///////////////////
function newstem()
{//main

 var aaa = document.getElementsByName('celltype[]');
  var aa = document.getElementsByName('o[]');
 var a = document.getElementsByName('a[]');
 if(aaa[3].checked==true)//chosed
 {//1


 
 var l=0;//length


 
 for(var r=0;r<29;r++)
 {  
   if(a[r].checked==true)
    {l=l+1;}
 }
 
var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];


if(l==0)//first arrive
{//f
for(var a=0;a<20;a++)
{
var s=b3[a];
am(b3[a]);
}
}//f
if(l>=1)//nor first arrive
{//ff
    var a = document.getElementsByName('a[]');
    for(var r=0;r<29;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
	for(var r=0;r<20;r++)
	{
	s=b3[r];
	a[s].disabled='';
	}


}//ff

 }//1
 ///////////////////////////////
 if(aaa[3].checked==false)//cancle
 {//th
 var l=0;
 var l1=0;
 var g=new Array();
 var g1=new Array();

 for(var r=0;r<5;r++)
 {//gh
 if(aaa[r].checked==true)
 {g[l]=r;l=l+1;}
 
 }//gh
 for(var r=0;r<18;r++)
 { if(aa[r].checked==true)
 {g1[l1]=r;l1=l1+1;}
 }
 if((l+l1)==0)//最后走
 {
 for(var r=0;r<29;r++)
 { a[r].checked=false;
 a[r].disabled="disabled";}
 }
 
 if((l+l1)>0)//不是最后走，取消交
 {//h
  
  var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];
var t=new Array();
 var h=0;
 if(contains(g,0))
 {t[h]=b;h=h+1;}
 if(contains(g,1))
 {t[h]=b1;h=h+1;}
  if(contains(g,2))
{t[h]=b2;h=h+1;}
  if(contains(g,3))
 {t[h]=b3;h=h+1;}
  if(contains(g,4))
{t[h]=b4;h=h+1;}
 if(l1>0)
{t[h]=b5;h=h+1;}
 }//h
var i=t.length;
var c=t[0];
for(var r=1;r<i;r++)
{  c=sec(c,t[r]);
}

 for(var i=0;i<29;i++)
 {//op
 if(contains(c,i))
 {
 a[i].checked=true;
 a[i].disabled='';
 
 }
 else
  {
  a[i].checked=false;
 a[i].disabled='disabled';

   }
 
 
 }//op
 }//th
}//main
function newcul()
{//main
////////////////
 var aaa = document.getElementsByName('celltype[]');
  var aa = document.getElementsByName('o[]');
 var a = document.getElementsByName('a[]');
 if(aaa[4].checked==true)//chosed
 {//1


 
 var l=0;//length


 
 for(var r=0;r<29;r++)
 {  
   if(a[r].checked==true)
    {l=l+1;}
 }
 
var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];


if(l==0)//first arrive
{//f
for(var a=0;a<20;a++)
{
var s=b4[a];
am(b4[a]);
}
}//f
if(l>=1)//nor first arrive
{//ff
    var a = document.getElementsByName('a[]');
    for(var r=0;r<29;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
	for(var r=0;r<20;r++)
	{
	s=b4[r];
	a[s].disabled='';
	}


}//ff

 }//1
 ///////////////////////////////
 if(aaa[4].checked==false)//cancle
 {//th
 var l=0;
 var l1=0;
 var g=new Array();
 var g1=new Array();

 for(var r=0;r<5;r++)
 {//gh
 if(aaa[r].checked==true)
 {g[l]=r;l=l+1;}
 
 }//gh
 for(var r=0;r<18;r++)
 { if(aa[r].checked==true)
 {g1[l1]=r;l1=l1+1;}
 }
 if((l+l1)==0)//最后走
 {
 for(var r=0;r<29;r++)
 { a[r].checked=false;
 a[r].disabled="disabled";}
 }
 
 if((l+l1)>0)//不是最后走，取消交
 {//h
  
  var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];
var t=new Array();
 var h=0;
 if(contains(g,0))
 {t[h]=b;h=h+1;}
 if(contains(g,1))
 {t[h]=b1;h=h+1;}
  if(contains(g,2))
{t[h]=b2;h=h+1;}
  if(contains(g,3))
 {t[h]=b3;h=h+1;}
  if(contains(g,4))
{t[h]=b4;h=h+1;}
 if(l1>0)
{t[h]=b5;h=h+1;}
 }//h
var i=t.length;
var c=t[0];
for(var r=1;r<i;r++)
{  c=sec(c,t[r]);
}

 for(var i=0;i<29;i++)
 {//op
 if(contains(c,i))
 {
 a[i].checked=true;
 a[i].disabled='';
 
 }
 else
  {
  a[i].checked=false;
 a[i].disabled='disabled';

   }
 
 
 }//op
 }//th
}//main
function newor(p)
{//main
 var aaa = document.getElementsByName('celltype[]');
  var aa = document.getElementsByName('o[]');
 var a = document.getElementsByName('a[]');
 if(aa[p].checked==true)//chosed
 {//1


 
 var l=0;//length


 
 for(var r=0;r<29;r++)
 {  
   if(a[r].checked==true)
    {l=l+1;}
 }
 
var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];


if(l==0)//first arrive
{//f
for(var a=0;a<6;a++)
{
var s=b5[a];
am(b5[a]);
}
}//f
if(l>=1)//nor first arrive
{//ff
    var a = document.getElementsByName('a[]');
    for(var r=0;r<29;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
	for(var r=0;r<6;r++)
	{
	s=b5[r];
	a[s].disabled='';
	}


}//ff

 }//1
 ///////////////////////////////
 if(aa[p].checked==false)//cancle
 {//th
 var l=0;
 var l1=0;
 var g=new Array();
 var g1=new Array();

 for(var r=0;r<5;r++)
 {//gh
 if(aaa[r].checked==true)
 {g[l]=r;l=l+1;}
 
 }//gh
 for(var r=0;r<18;r++)
 { if(aa[r].checked==true)
 {g1[l1]=r;l1=l1+1;}
 }
 if((l+l1)==0)//最后走
 {
 for(var r=0;r<29;r++)
 { a[r].checked=false;
 a[r].disabled="disabled";}
 }
 
 if((l+l1)>0)//不是最后走，取消交
 {//h
  
  var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];
var t=new Array();
 var h=0;
 if(contains(g,0))
 {t[h]=b;h=h+1;}
 if(contains(g,1))
 {t[h]=b1;h=h+1;}
  if(contains(g,2))
{t[h]=b2;h=h+1;}
  if(contains(g,3))
 {t[h]=b3;h=h+1;}
  if(contains(g,4))
{t[h]=b4;h=h+1;}
 if(l1>0)
{t[h]=b5;h=h+1;}
 }//h
var i=t.length;
var c=t[0];
for(var r=1;r<i;r++)
{  c=sec(c,t[r]);
}

 for(var i=0;i<29;i++)
 {//op
 if(contains(c,i))
 {
 a[i].checked=true;
 a[i].disabled='';
 
 }
 else
  {
  a[i].checked=false;
 a[i].disabled='disabled';

   }
 
 
 }//op
 }//th
}//main

function men()
{
 var a1 = document.getElementsByName('celltype[]');
 if(a1[0].checked==true)
 alert('ok');
 else alert('undo');
var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var u=0;
u=che();
if(u==0)
{//if

alert('Qucik Choose all modification type in H1_BMP4_Derived_Mesendoderm_Cultured_Cells');
for(var a=0;a<18;a++)
{
am(b[a]);
}
}//if
if(u!=0)
//for(var r=0;r<28;r++)
{//if
alert('Intersection with H1_BMP4_Derived_Mesendoderm_Cultured_Cells');
    var a = document.getElementsByName('a[]');
    for(var r=0;r<30;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
}//if
}
/////////////////////////////////////////////
function tro ()
{
var b=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var u=0;
u=che();
if(u==0)
{//if

alert('Qucik Choose all modification type in H1_BMP4_Derived_Trophoblast_Cultured_Cells');
for(var a=0;a<18;a++)
{
am(b[a]);
}
}//if
if(u!=0)
//for(var r=0;r<28;r++)
{//if
alert('Intersection with H1_BMP4_Derived_Trophoblast_Cultured_Cells');
    var a = document.getElementsByName('a[]');
    for(var r=0;r<30;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
}//if
}
///////////////////////////////////////////////
function cell()
{
var b=[4,0,2,5,3,6,1,27,8,9,26,11,10,12,13,14,15,16,17,18,19,7,23,24,20,22];
var u=0;
u=che();
if(u==0)
{//if

alert('Qucik Choose all modification type in H1_H1_cell_line_Line');
for(var a=0;a<18;a++)
{
am(b[a]);
}
}//if
if(u!=0)
//for(var r=0;r<28;r++)
{//if
alert('Intersection with H1_H1_cell_line_Line');
    var a = document.getElementsByName('a[]');
    for(var r=0;r<30;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
}//if
}
//////////////////////////////////////////////
function stem()
{
var b=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var u=0;
u=che();
if(u==0)
{//if

alert('Qucik Choose all modification type in H1_Derived_Mesenchymal_Stem_Cells');
for(var a=0;a<18;a++)
{
am(b[a]);
}
}//if
if(u!=0)
//for(var r=0;r<28;r++)
{//if
alert('Intersection with H1_Derived_Mesenchymal_Stem_Cells');
    var a = document.getElementsByName('a[]');
    for(var r=0;r<30;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
}//if
}
///////////////////////////////
function cul()
{
var b=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var u=0;
u=che();
if(u==0)
{//if

alert('Qucik Choose all modification type in H1_Derived_Neuronal_Progenitor_Cultured_Cells');
for(var a=0;a<18;a++)
{
am(b[a]);
}
}//if
if(u!=0)
//for(var r=0;r<28;r++)
{//if
alert('Intersection with H1_Derived_Neuronal_Progenitor_Cultured_Cells');
    var a = document.getElementsByName('a[]');
    for(var r=0;r<30;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
}//if
}
//////////////////////////////////////
function or()
{
var b=[15,17,7,11,10,12];
var u=0;
u=che();
if(u==0)
{//if

alert('Qucik Choose all modification type in Organs');
for(var a=0;a<18;a++)
{
am(b[a]);
}
}//if
if(u!=0)
//for(var r=0;r<28;r++)
{//if
alert('Intersection with Organs');
    var a = document.getElementsByName('a[]');
    for(var r=0;r<30;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
}//if
}
	////////////////////////////////////////
	function one()
{//one

var xmlhttp;
var textbox=document.getElementsByName('a[]');

var textbox1=document.getElementsByName('celltype[]');
var textbox2=document.getElementsByName('o[]');
var textbox3=document.getElementById("number").value;
var textboxa=document.getElementById("location1").value;
var textboxb=document.getElementById("location2").value;

if (window.XMLHttpRequest){
	// code for IE7+, Firefox, Chrome, Opera, Safari
  	xmlhttp=new XMLHttpRequest();
}
else{// code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function(){
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
	//alert(xmlhttp.responseText);
    document.getElementById("texthint").innerHTML=xmlhttp.responseText;
	}
}	
  var url="s_1.php";
  url=url+"?a="+aa(textbox);
 url=url+"&c="+aa(textbox1);
 url=url+"&o="+aa(textbox2);
 url=url+"&lo1="+textboxa;
 url=url+"&lo2="+textboxb;


 url=url+"&number="+textbox3;
  //alert(textbox.toString())
  
xmlhttp.open("GET",url,true);
xmlhttp.send();



}//one
///////////////////two
function two()
{

var xmlhttp;
var textbox=document.getElementsByName('a[]');

var textbox1=document.getElementsByName('celltype[]');
var textbox2=document.getElementsByName('o[]');
var textbox3=document.getElementById("gene").value;

if (window.XMLHttpRequest){
	// code for IE7+, Firefox, Chrome, Opera, Safari
  	xmlhttp=new XMLHttpRequest();
}
else{// code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function(){
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
	//alert(xmlhttp.responseText);
    document.getElementById("texthint1").innerHTML=xmlhttp.responseText;
	}
}	
  var url="s_2.php";
  url=url+"?a="+aa(textbox);
 url=url+"&c="+aa(textbox1);
 url=url+"&o="+aa(textbox2);
 url=url+"&gene="+textbox3;
  //alert(textbox.toString())
  
xmlhttp.open("GET",url,true);
xmlhttp.send();



}

//////two
function aa(r){
    var s="";
    for(var i=0;i<r.length;i++){
         if(r[i].checked){
         s += r[i].value+",";
       }
    }      
	return s.substring(0,s.length-1);
}
	//ajax
	//
</script>

  <style type="text/css">
<!--
.STYLE1 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
  </style>
</head>

<body>

<div id="wrap">
	<div id="header">
		<h1><a href="#" class="announce STYLE2"><img src="img/000.png" alt="" width="640" height="59" align="absbottom" /></a></h1>
		
	</div>

	<div id="leftside">
		<h2 class="hide">Sample menu:</h2>
		<ul class="avmenu">
			<li><a  href="index.html">Home</a></li>
			
			
			<li><a href="single.php" class="current">Single Query</a></li>
			<li><a href="batch.php">Batch Query</a></li>
			<li><a href="../visu/index.html">Visualize</a></li>
			<li><a href="download.php">Download</a></li>
			
			<li><a href="tutorial.php">Tutorial</a></li>
			<li><a href="help.html">Contact</a></li>
		</ul>
  </div>
  <h2>&nbsp;Single Region Query</h2>
  <div id="contentwide">
	  <div id="dfdf" style="margin-left:50px"></div>
	  
	  <p> Specify your interested cell types and histone modification marks, you can query one region by genomic location or geneID. 

	 </p>	The result be visualized through the browser or downloaded as .txt file.
	  <blockquote>
			Please select cell types first and the related histone modification types are selected automatically. 
		</blockquote>
  </p>
	  	
	  
	  </p>
			
  </div>
  <div id="th">

		<form method="post" action="result.php"  onsubmit="return check()" >
          <div>
		  									  <p><a href="#">Cell Type：</a>                                      </p>
									          <p><input type="checkbox" name="celltype[]" value="H1_cell_line" onclick="newcell()"/>
									     H1 cell line
									   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
									    <input type="checkbox" name="celltype[]"value="mesen" onclick="newmen()" />
									    H1_Derived_Mesendoderm_Cultured_Cells 
									    &nbsp;
									    &nbsp;&nbsp; 
									    &nbsp;&nbsp; 
									    <input type="checkbox" name="celltype[]" value="tro" onclick="newtro()" />
									    H1_Derived_Trophoblast_Cultured_Cells </br>   
									 <p>
									    <input type="checkbox" name="celltype[]" value="stem" onclick="newstem()"/>
									    H1_Derived_Mesenchymal_Stem_Cells

									    &nbsp;&nbsp; 
									    <input type="checkbox" name="celltype[]" value="cul" onclick="newcul()"/>
									    H1_Derived_Neuronal_Progenitor_Cultured_Cells</br><p>

									  
									    <input type="checkbox" name="o[]"value="adi" onclick="newor(0)"/>
									    Adipose Tissque 

										&nbsp;&nbsp; 
										<input type="checkbox" name="o[]" value="adr" onclick="newor(1)"/>
									    Adrenal Gland
									    
									    &nbsp;&nbsp; 
									    <input type="checkbox" name="o[]" value="adult" onclick="newor(1)"/>
									    Adult liver   

									    &nbsp;&nbsp; 
									    <input type="checkbox" name="o[]" value="aorta" onclick="newor(2)"/>
									    Aorta
									    &nbsp;&nbsp; 
									    <input type="checkbox" name="o[]" value="eso" onclick="newor(3)"/>
									    Esophagus							     
									    &nbsp;&nbsp; 
									    <input type="checkbox" name="o[]" value="gas" onclick="newor(4)"/>
									    Gastric                                          

									    &nbsp;&nbsp; 
									    <input type="checkbox" name="o[]" value="leftven" onclick="newor(5)"/>
									    Left Ventricle

									    &nbsp;&nbsp; 
									    <input type="checkbox" name="o[]" value="lung" onclick="newor(6)" />
									    Lung
										</br><p>
									    <input type="checkbox" name="o[]" value="ovary" onclick="newor(7)"/>
									    Ovary
									    &nbsp;&nbsp; 
									    <input type="checkbox" name="o[]" value="pan" onclick="newor(8)"/>
									    Pancreas
									    &nbsp;&nbsp; 
									    <input type="checkbox" name="o[]" value="psoas" onclick="newor(9)"/>
									    Psoas Muscle                                                         
									    &nbsp;&nbsp; 
									    <input type="checkbox" name="o[]" value="rightven" onclick="newor(10)"/>
									    Right Ventricle										                                 
									    &nbsp;&nbsp; 
									    <input type="checkbox" name="o[]" value="rightatri" onclick="newor(11)" />
									    Right Atrium
  &nbsp;&nbsp;&nbsp;&nbsp;									    
									    &nbsp; 
									    <input type="checkbox" name="o[]" value="sigmo" onclick="newor(12)" />
									    Sigmoid Colon
									    &nbsp;&nbsp; 
									    <input type="checkbox" name="o[]" value="spleen" onclick="newor(13)"/>
									    Spleen
									    &nbsp;&nbsp; 
									    <input type="checkbox" name="o[]" value="thymus" onclick="newor(14)"/>
									    Thymus   
									    &nbsp;&nbsp; 
									    <input type="checkbox" name="o[]" value="smallintestine" onclick="newor(15)" />
									    Small Intestine                                               
									    &nbsp;&nbsp; 
									    <input type="checkbox" name="o[]" value="bladder" onclick="newor(16)" />
									    Bladder </p>
									  </p>

    </p>					  
            <p><a href="#">Histone Modification: </a>            </br>
            <p>
                <input type="checkbox" name="a[]"  value="h2ak5ac" disabled="disabled"/>
                h2ak5ac
                &nbsp;&nbsp; 
                &nbsp;&nbsp; 
                <input type="checkbox" name="a[]" value="h2bk5ac" disabled="disabled" />
                h2bk5ac
                &nbsp;&nbsp; 
                &nbsp;&nbsp; 
                <input type="checkbox" name="a[]" value="h2bk120ac" disabled="disabled"/>
                h2bk120ac
                &nbsp;&nbsp; 
                <input type="checkbox" name="a[]" value="h2bk15ac" disabled="disabled" />
                h2bk15ac    
                &nbsp;&nbsp; 
                &nbsp; 
                <input type="checkbox" name="a[]" value="h2a.z" disabled="disabled"/>
                h2a.z
                  &nbsp;&nbsp;        
                  &nbsp;&nbsp;&nbsp; 
                  <input type="checkbox" name="a[]" value="h2bk12ac" disabled="disabled"/>
                h2bk12ac
                                &nbsp;&nbsp; 
                <input type="checkbox" name="a[]" value="h2bk20ac" disabled="disabled"/>
                h2bk20ac
                &nbsp;&nbsp; 

                 <input type="checkbox" name="a[]" value="h3k9me3" disabled="disabled"/>
                h3k9me3
                               &nbsp;&nbsp; 
                <input type="checkbox" name="a[]" value="h3k18ac" disabled="disabled"/>
                h3k18ac
            <p>
                  <input type="checkbox" name="a[]" value="h3k23ac" disabled="disabled"/>
                  h3k23ac    
                &nbsp;&nbsp; 
                    &nbsp;&nbsp; 
                    <input type="checkbox" name="a[]" value="h3k27me3" disabled="disabled"/>
                  h3k27me3
                &nbsp;&nbsp; 

                  <input type="checkbox" name="a[]" value="h3k27ac" disabled="disabled"/>
                  h3k27ac
                &nbsp;&nbsp; 
                                        
                  &nbsp;&nbsp;&nbsp; 
                  <input type="checkbox" name="a[]" value="h3k36me3" disabled="disabled"/>
                  h3k36me3
                                &nbsp;&nbsp; 

                  <input type="checkbox" name="a[]" value="h2bk5ac" disabled="disabled"/>
                  h2bk5ac                                               
                                &nbsp;&nbsp; 

                  <input type="checkbox" name="a[]" value="h3k4ac" disabled="disabled"/>
                  h3k4ac                                                                                                                                         
                                 &nbsp;&nbsp; 
        
                  &nbsp;&nbsp;               
                   <input type="checkbox" name="a[]" value="h3k4me1" disabled="disabled"/>
                  h3k4me1    
                                 &nbsp;&nbsp; 

                  &nbsp;               
                  <input type="checkbox" name="a[]" value="h3k4me2" disabled="disabled"/>
                  h3k4me2
                  &nbsp;&nbsp; 
 
                  <input type="checkbox" name="a[]" value="h3k4me3" disabled="disabled"/>
                  h3k4me3
            <p>
                  <input type="checkbox" name="a[]" value="h3k79me1" disabled="disabled"/>
                  h3k79me1                                     
                                  &nbsp;&nbsp; 

                  <input type="checkbox" name="a[]" value="h3k79me2" disabled="disabled"/>
                  h3k79me2                
               
                                 &nbsp;&nbsp; 
    
                   <input type="checkbox" name="a[]" value="h3k9ac" disabled="disabled"/>
                  h3k9ac                 
                &nbsp;&nbsp; 
      
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                   <input type="checkbox" name="a[]" value="h4k8ac" disabled="disabled"/>
                  h4k8ac
                         &nbsp;&nbsp; 
             
                  &nbsp;&nbsp;&nbsp;&nbsp;       
                  <input type="checkbox" name="a[]" value="h4k12ac" disabled="disabled"/>
                  h4k12ac
                       &nbsp;&nbsp; 
       
                  <input type="checkbox" name="a[]" value="h4k91ac" disabled="disabled"/>
                  h4k91ac         
                       &nbsp;&nbsp;&nbsp; 
                       <input type="checkbox" name="a[]" value="h4k20me1" disabled="disabled"/>
                  h4k20me1
                                  &nbsp;&nbsp; 
              
                  <input type="checkbox" name="a[]" value="h4k5ac" disabled="disabled"/>
                  h4k5ac
                                &nbsp;&nbsp; 
              
                  &nbsp;&nbsp;              
                  <input type="checkbox" name="a[]" value="h3k56ac" disabled="disabled"/>
                  h3k56ac
            <p>
              <input type="checkbox" name="a[]" value="h3k23me2" disabled="disabled"/>
              h3k23me2
                              &nbsp;&nbsp; 
              
              <input type="checkbox" name="a[]" value="h3k14ac" disabled="disabled"/>
              h3k14ac 
          </div>
			  <div>
			    
	      </div>
			   <div>
					
		                <p><a href="#">Region: </a>
                 
		                <p><a href="#">Location—> >&nbsp;  &nbsp;&nbsp;&nbsp; Chromosome</a>
										  <select name="number" id="number">
										  <option value="chr1">chr1</option><option value="chr2">chr2</option><option value="chr3">chr3</option><option value="chr4">chr4</option><option value="chr5">chr5</option><option value="chr6">chr6</option><option value="chr7">chr7</option><option value="chr8">chr8</option><option value="chr9">chr9</option><option value="chr10">chr10</option><option value="chr11">chr11</option><option value="chr12">chr12</option><option value="chr13">chr13</option><option value="chr14">chr14</option><option value="chr15">chr15</option><option value="chr16">chr16</option><option value="chr17">chr17</option><option value="chr18">chr18</option><option value="chr19">chr19</option><option value="chr20">chr20</option><option value="chr21">chr21</option><option value="chr22">chr22</option><option value="chrx">chrx</option><option value="chry">chry</option>
										  </select>
										 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Start</a>
									      <input type="text" id="location1" name="location1" value="500001"> 
									     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">End</a>
							
									      <input type="text" id="location2" name="location2" value="800001">
										<input type="button"  value="Search " onclick="one()" style="background-color:#cccccc" />
                 </p>
		                <p>
						<a href="#">GeneID—> >     &nbsp;&nbsp;  &nbsp;&nbsp; </a>
		                  <input type="text" name="id" id="gene">
		                  <input type="button"  value="Search "  onclick="two()" style="background-color:#cccccc"/> 
		                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		                 <input type="button" a href="#"  onclick="window.open('gene.php','go1','scrollbars=yes,top=100,left=0,resizable=yes,alwaysRaised=yes,z-look=yes,width=1238,height=350')" value="Gene List" name="B1" style="background-color: #CCCCCC; height:24px;font-family: $Five Double Zero; color: #000000; border: 1 solid #5FB020">
                 </p>
			   </div>

		</form>
			<form method="post" action="single.php" enctype="multipart/form-data">						
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </form>
  </div>	
<div id="texthint"></div>
<div id="texthint1"></div>
<div id="footer">
		<p><img src="img/2.png" alt="" width="100" height="60" /><br />
		Recommended Browser:Firefox or Chrome</p> 
		<p>Maintained by DMB Lab, Tongji University, China </p>
</div>
</div>
</body>
</html>
