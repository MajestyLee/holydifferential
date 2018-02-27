<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="shortcut icon" href="f.ico" type="image/x-icon" />
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Your description goes here" />
  <meta name="keywords" content="your,keywords,goes,here" />
  <meta name="author" content="Your Name" />


  <link rel="stylesheet" type="text/css" href="andreas00.css" media="screen,projection" />
   <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
  <title>iHMS</title>
  <script language=javascript>
 function check(){



    var textbox=document.getElementsByName('a[]');

  
        for(i=0;i<textbox.length;i++){
            if(!textbox[i].checked){
                if(i==textbox.length-1){
                alert('modification must be checked');
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
                alert('please choose celltype and organs');
        return false;
                 }
                                    }
              else{return true;}
                  }//for
    
    ////////////////////////1
              return true;
                  } //2
    }      
     }
   /////////////////
   function ExistsData()
  {
     if(document.getElementById("yu").value == "")
     {
        document.getElementById("rrb").disabled = "disabled";
        return;
     }
      
     document.getElementById("rrb").disabled = "";
  }
  ////////////////////
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
 if(aaa[1].checked==true)//chosed
 {//1


 
 var l=0;//length


 
 for(var r=0;r<28;r++)
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
    for(var r=0;r<28;r++)
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
 if((l+l1)==0)//×îºó×ß
 {
 for(var r=0;r<28;r++)
 { a[r].checked=false;
 a[r].disabled="disabled";}
 }
 
 if((l+l1)>0)//²»ÊÇ×îºó×ß£¬È¡Ïû½»
 {//h
  
  var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];
var t=new Array();
 var h=0;
 if(contains(g,1))
 {t[h]=b;h=h+1;}
 if(contains(g,2))
 {t[h]=b1;h=h+1;}
  if(contains(g,0))
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

 for(var i=0;i<28;i++)
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
 if(aaa[2].checked==true)//chosed
 {//1


 
 var l=0;//length


 
 for(var r=0;r<28;r++)
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
    for(var r=0;r<28;r++)
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
 if((l+l1)==0)//×îºó×ß
 {
 for(var r=0;r<28;r++)
 { a[r].checked=false;
 a[r].disabled="disabled";}
 }
 
 if((l+l1)>0)//²»ÊÇ×îºó×ß£¬È¡Ïû½»
 {//h
  
  var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];
var t=new Array();
 var h=0;
 if(contains(g,1))
 {t[h]=b;h=h+1;}
 if(contains(g,2))
 {t[h]=b1;h=h+1;}
  if(contains(g,0))
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

 for(var i=0;i<28;i++)
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
 if(aaa[0].checked==true)//chosed
 {//1


 
 var l=0;//length


 
 for(var r=0;r<28;r++)
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
    for(var r=0;r<28;r++)
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
 if((l+l1)==0)//×îºó×ß
 {
 for(var r=0;r<28;r++)
 { a[r].checked=false;
 a[r].disabled="disabled";}
 }
 
 if((l+l1)>0)//²»ÊÇ×îºó×ß£¬È¡Ïû½»
 {//h
  
  var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];
var t=new Array();
 var h=0;
 if(contains(g,1))
 {t[h]=b;h=h+1;}
 if(contains(g,2))
 {t[h]=b1;h=h+1;}
  if(contains(g,0))
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

 for(var i=0;i<28;i++)
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


 
 for(var r=0;r<28;r++)
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
    for(var r=0;r<28;r++)
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
 if((l+l1)==0)//×îºó×ß
 {
 for(var r=0;r<28;r++)
 { a[r].checked=false;
 a[r].disabled="disabled";}
 }
 
 if((l+l1)>0)//²»ÊÇ×îºó×ß£¬È¡Ïû½»
 {//h
  
  var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];
var t=new Array();
 var h=0;
 if(contains(g,1))
 {t[h]=b;h=h+1;}
 if(contains(g,2))
 {t[h]=b1;h=h+1;}
  if(contains(g,0))
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

 for(var i=0;i<28;i++)
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


 
 for(var r=0;r<28;r++)
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
    for(var r=0;r<28;r++)
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
 if((l+l1)==0)//×îºó×ß
 {
 for(var r=0;r<28;r++)
 { a[r].checked=false;
 a[r].disabled="disabled";}
 }
 
 if((l+l1)>0)//²»ÊÇ×îºó×ß£¬È¡Ïû½»
 {//h
  
  var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var b1=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var b2=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b3=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b4=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var b5=[15,17,7,11,10,12];
var t=new Array();
 var h=0;
 if(contains(g,1))
 {t[h]=b;h=h+1;}
 if(contains(g,2))
 {t[h]=b1;h=h+1;}
  if(contains(g,0))
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

 for(var i=0;i<28;i++)
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


 
 for(var r=0;r<28;r++)
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
    for(var r=0;r<28;r++)
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
 if((l+l1)==0)//×îºó×ß
 {
 for(var r=0;r<28;r++)
 { a[r].checked=false;
 a[r].disabled="disabled";}
 }
 
 if((l+l1)>0)//²»ÊÇ×îºó×ß£¬È¡Ïû½»
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

 for(var i=0;i<28;i++)
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
</script>
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
      
      
      <li><a href="single.php" >Single Query</a></li>
      <li><a href="batch.php">Batch Query</a></li>
      <li><a href="../visu/index.html">Visualize</a></li>
      <li><a href="download.php">Download</a></li>
        <li><a href="df_hanming.php">single differential Analysis</a></li>
        <li><a  href="batch_da.php" class="current">batch differential Analysis</a></li>
        <li><a  href="index.html">Home</a></li>
      <li><a href="tutorial.php">Tutorial</a></li>
      <li><a href="help.html">Contact</a></li>
      
    </ul>
  </div>
  <h2> &nbsp; Batch Query Differential Analysis</h2>
    <div id="contentwide">
    
    <div id="dfdf" style="margin-left:50px"></div>
    
    <p>Specified your interested cell types and histon modificaitons, you can query a number of regions.The locations of multiple regions can be uploaded from files or submitted in the input box

        
    Please select cell types first and the related histone modification types are selected automatically.
 
      </p>
  </div>
  <div id="th">
    <form method="post" action="out.php" onsubmit="return check()" enctype="multipart/form-data">
        <div>
            <p><a href="#">Cell Type</a><img src="img/click.jpg" alt=" " style=" width: 23px;vertical-align: bottom; margin-left: 20px;" id="hah"><t style="visibility:hidden" id="t">Click to select all</t></p>
            <p><input type="checkbox" name="celltype[]" value="H1_cell_line" onclick="newcell()"/>
                H1 cell line
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                <input type="checkbox" name="celltype[]" value="mesen"  onclick="newmen()" />
                H1_Derived_Mesendoderm_Cultured_Cells
                &nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;
                <input type="checkbox" name="celltype[]"  value="tro" onclick="newtro()" />
                H1_Derived_Trophoblast_Cultured_Cells </br>
            <p>
                <input type="checkbox" name="celltype[]"  value="stem"  onclick="newstem()"/>
                H1_Derived_Mesenchymal_Stem_Cells

                &nbsp;&nbsp;
                <input type="checkbox" name="celltype[]"  value="cul"  onclick="newcul()"/>
                H1_Derived_Neuronal_Progenitor_Cultured_Cells</br><p>


                <input type="checkbox" name="o[]"  value="adr" onclick="newor(1)"/>
                Adrenal Gland

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
            </p>

            </p>
            <p><a href="#">Histone Modification: </a>            </br>
            <p>
                <input type="checkbox" name="a[]" value="h3k4me1"  />
                h3k4me1
                &nbsp;&nbsp;
                <input type="checkbox" name="a[]" value="h3k4me3"  />
                h3k4me3
                &nbsp;&nbsp;

                <input type="checkbox" name="a[]" value="h3k9me3"  />
                h3k9me3
                &nbsp;&nbsp;
                <input type="checkbox" name="a[]" value="h3k27ac"  />
                h3k27ac
                &nbsp;&nbsp;

                <input type="checkbox" name="a[]" value="h3k27me3"  />
                h3k27me3
                &nbsp;&nbsp;

                <input type="checkbox" name="a[]" value="h3k36me3"  />
                h3k36me3
                &nbsp;&nbsp;


        </div>
        <div>
          
        </div>
         <div>
             <p><a href="#">Method: </a>
                 <select name="dfmethod" id="dfmethod">
                     <option value="hm_dis">hm_distance</option><option value="shannon">shannon</option><option value="shannon2">highdif</option>
                 </select></br></br>
                <a>threshold:</a>  <input name="yu1" type="text" id="yu1" value="100" style="width:30px; height:20px"/>%
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit3" type="submit"  value="export" /></br>
                    <p>
                    <a>Input Box->></a>&nbsp; 
                    <input name="yu" type="text" id="yu" value="chr1,100001,190001;chr3,100001,190001" onblur="ExistsData()" style="width:600px; height:50px"/>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <script type="text/javascript">
            function showHint(str)
              {
              var xmlhttp;
              if (str.length==0)
                {
                document.getElementById("genehint").innerHTML="";
                return;
                }
              if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
                }
              else
                {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
              xmlhttp.onreadystatechange=function()
                {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                  {
                  document.getElementById("genehint").innerHTML=xmlhttp.responseText;
                  }
                }
              xmlhttp.open("GET","geneSearch1.php?q="+str,true);
              xmlhttp.send();
              }



  </script>
  <input name="submit2" type="submit"  value="search and export" id="rrb" /></br>
  <p></p>
    </form>
  </form>

    </p>
  
    

  
    <p>
      <?php

$t=array();
$t[0]='mesen_h2ak5ac';
$t[1]='mesen_h2bk120ac';
$t[2]='mesen_h2bk15ac';
$t[3]='mesen_h2bk5ac';
$t[4]='mesen_h3k18ac';
$t[5]='mesen_h3k23ac';
$t[6]='mesen_h3k27ac';
$t[7]='mesen_h3k27me3';
$t[8]='mesen_h3k36me3';
$t[9]='mesen_h3k4ac';
$t[10]='mesen_h3k4me1';
$t[11]='mesen_h3k4me2';
$t[12]='mesen_h3k4me3';
$t[13]='mesen_h3k79me1';
$t[14]='mesen_h3k79me2';
$t[15]='mesen_h3k9ac';
$t[16]='mesen_h3k9me3';
$t[17]='mesen_h4k8ac';
$t[18]='tro_h2a.z';
$t[19]='tro_h2ak5ac';
$t[20]='tro_h2bk120ac';
$t[21]='tro_h2bk12ac';
$t[22]='tro_h2bk5ac';
$t[23]='tro_h3k14ac';
$t[24]='tro_h3k18ac';
$t[25]='tro_h3k23ac';
$t[26]='tro_h3k27ac';
$t[27]='tro_h3k27me3';
$t[28]='tro_h3k36me3';
$t[29]='tro_h3k4ac';
$t[30]='tro_h3k4me1';
$t[31]='tro_h3k4me2';
$t[32]='tro_h3k4me3';
$t[33]='tro_h3k79me1';
$t[34]='tro_h3k79me2';
$t[35]='tro_h3k9ac';
$t[36]='tro_h3k9me3';
$t[37]='tro_h4k12ac';
$t[38]='tro_h4k8ac';
$t[39]='tro_h4k91ac';
$t[40]='H1_cell_line_h2a.z';
$t[41]='H1_cell_line_h2ak5ac';
$t[42]='H1_cell_line_h2bk120ac';
$t[43]='H1_cell_line_h2bk12ac';
$t[44]='H1_cell_line_h2bk15ac';
$t[45]='H1_cell_line_h2bk20ac';
$t[46]='H1_cell_line_h2bk5ac';
$t[47]='H1_cell_line_h3k14ac';
$t[48]='H1_cell_line_h3k18ac';
$t[49]='H1_cell_line_h3k23ac';
$t[50]='H1_cell_line_h3k23me2';
$t[51]='H1_cell_line_h3k27ac';
$t[52]='H1_cell_line_h3k27me3';
$t[53]='H1_cell_line_h3k36me3';
$t[54]='H1_cell_line_h3k4ac';
$t[55]='H1_cell_line_h3k4me1';
$t[56]='H1_cell_line_h3k4me2';
$t[57]='H1_cell_line_h3k4me3';
$t[58]='H1_cell_line_h3k56ac';
$t[59]='H1_cell_line_h3k79me1';
$t[60]='H1_cell_line_h3k79me2';
$t[61]='H1_cell_line_h3k9ac';
$t[62]='H1_cell_line_h3k9me3';
$t[63]='H1_cell_line_h4k20me1';
$t[64]='H1_cell_line_h4k5ac';
$t[65]='H1_cell_line_h4k8ac';
$t[66]='H1_cell_line_h4k91ac';
$t[67]='stem_h2a.z';
$t[68]='stem_h2ak5ac';
$t[69]='stem_h2bk120ac';
$t[70]='stem_h2bk12ac';
$t[71]='stem_h2bk5ac';
$t[72]='stem_h3k14ac';
$t[73]='stem_h3k18ac';
$t[74]='stem_h3k23ac';
$t[75]='stem_h3k27ac';
$t[76]='stem_h3k27me3';
$t[77]='stem_h3k36me3';
$t[78]='stem_h3k4ac';
$t[79]='stem_h3k4me1';
$t[80]='stem_h3k4me2';
$t[81]='stem_h3k4me3';
$t[82]='stem_h3k79me1';
$t[83]='stem_h3k9ac';
$t[84]='stem_h3k9me3';
$t[85]='stem_h4k8ac';
$t[86]='stem_h4k91ac';
$t[87]='cul_h2ak5ac';
$t[88]='cul_h2bk120ac';
$t[89]='cul_h2bk12ac';
$t[90]='cul_h2bk15ac';
$t[91]='cul_h2bk5ac';
$t[92]='cul_h3k14ac';
$t[93]='cul_h3k18ac';
$t[94]='cul_h3k23ac';
$t[95]='cul_h3k27ac';
$t[96]='cul_h3k27me3';
$t[97]='cul_h3k36me3';
$t[98]='cul_h3k4ac';
$t[99]='cul_h3k4me1';
$t[100]='cul_h3k4me2';
$t[101]='cul_h3k4me3';
$t[102]='cul_h3k79me1';
$t[103]='cul_h3k9ac';
$t[104]='cul_h3k9me3';
$t[105]='cul_h4k8ac';
$t[106]='cul_h4k91ac';

$ot=array();
$ot[0]='adi_h3k27ac';
$ot[1]='adr_h3k4me1';
$ot[2]='adr_h3k4me3';
$ot[3]='adr_h3k9me3';
$ot[4]='adr_h3k27ac';
$ot[5]='adr_h3k27me3';
$ot[6]='adr_h3k36me3';
$ot[7]='adult_h3k4me1';
$ot[8]='adult_h3k4me3';
$ot[9]='adult_h3k9me3';
$ot[10]='adult_h3k27me3';
$ot[11]='adult_h3k36me3';
$ot[12]='aorta_h3k4me1';
$ot[13]='aorta_h3k4me3';
$ot[14]='aorta_h3k9me3';
$ot[15]='aorta_h3k27ac';
$ot[16]='aorta_h3k27me3';
$ot[17]='aorta_h3k36me3';
$ot[18]='eso_h3k36me3';
$ot[19]='eso_h3k27me3';
$ot[20]='eso_h3k27ac';
$ot[21]='eso_h3k9me3';
$ot[22]='eso_h3k4me3';
$ot[23]='eso_h3k4me1';
$ot[24]='gas_h3k4me1';
$ot[25]='gas_h3k4me3';
$ot[26]='gas_h3k9me3';
$ot[27]='gas_h3k27ac';
$ot[28]='gas_h3k27me3';
$ot[29]='gas_h3k36me3';
$ot[30]='leftven_h3k4me1';
$ot[31]='leftven_h3k4me3';
$ot[32]='leftven_h3k9me3';
$ot[33]='leftven_h3k27ac';
$ot[34]='leftven_h3k27me3';
$ot[35]='leftven_h3k36me3';
$ot[36]='lung_h3k4me1';
$ot[37]='lung_h3k4me3';
$ot[38]='lung_h3k9me3';
$ot[39]='lung_h3k27ac';
$ot[40]='lung_h3k27me3';
$ot[41]='lung_h3k36me3';
$ot[42]='ovary_h3k4me1';
$ot[43]='ovary_h3k4me3';
$ot[44]='ovary_h3k9me3';
$ot[45]='ovary_h3k27ac';
$ot[46]='ovary_h3k27me3';
$ot[47]='ovary_h3k36me3';
$ot[48]='pan_h3k4me1';
$ot[49]='pan_h3k4me3';
$ot[50]='pan_h3k9me3';
$ot[51]='pan_h3k27ac';
$ot[52]='pan_h3k27me3';
$ot[53]='pan_h3k36me3';
$ot[54]='psoas_h3k4me1';
$ot[55]='psoas_h3k4me3';
$ot[56]='psoas_h3k9me3';
$ot[57]='psoas_h3k27ac';
$ot[58]='psoas_h3k27me3';
$ot[59]='psoas_h3k36me3';
$ot[60]='rightatri_h3k4me1';
$ot[61]='rightatri_h3k4me3';
$ot[62]='rightatri_h3k9me3';
$ot[63]='rightatri_h3k27ac';
$ot[64]='rightatri_h3k27me3';
$ot[65]='rightatri_h3k36me3';
$ot[66]='rightven_h3k4me1';
$ot[67]='rightven_h3k4me3';
$ot[68]='rightven_h3k9me3';
$ot[69]='rightven_h3k27ac';
$ot[70]='rightven_h3k27me3';
$ot[71]='rightven_h3k36me3';
$ot[72]='sigmo_h3k4me1';
$ot[73]='sigmo_h3k4me3';
$ot[74]='sigmo_h3k9me3';
$ot[75]='sigmo_h3k27ac';
$ot[76]='sigmo_h3k27me3';
$ot[77]='sigmo_h3k36me3';
$ot[78]='spleen_h3k4me1';
$ot[79]='spleen_h3k4me3';
$ot[80]='spleen_h3k9me3';
$ot[81]='spleen_h3k27ac';
$ot[82]='spleen_h3k27me3';
$ot[83]='spleen_h3k36me3';
$ot[84]='thymus_h3k4me1';
$ot[85]='thymus_h3k4me3';
$ot[86]='thymus_h3k9me3';
$ot[87]='thymus_h3k27ac';
$ot[88]='thymus_h3k27me3';
$ot[89]='thymus_h3k36me3';
$ot[90]='smallintestine_h3k4me1';
$ot[91]='smallintestine_h3k4me3';
$ot[92]='smallintestine_h3k9me3';
$ot[93]='smallintestine_h3k27ac';
$ot[94]='smallintestine_h3k27me3';
$ot[95]='smallintestine_h3k36me3';
$ot[96]='bladder_h3k4me1';
$ot[97]='bladder_h3k27ac';
$ot[98]='bladder_h3k36me3';


function find($a,$b,&$c,&$c1,$t)
{
$d=$a.'_'.$b;
$y=array_search($d,$t);
if(array_search($d,$t))
{ 
  $y1='hm'.''.$y;
  array_push($c,$y1);
  array_push($c1,$d);
  echo"<input type=\"button\" a href=\"#\"  value=\"$d\" name=\"B18\" style=\"background-color: #0099FF; font-family: Five Double Zero; color: #000033; border: 1 solid #5FB020\">";
echo '   ';

}
if($d=='mesen_h2ak5ac')
{
array_push($c,'hm0');
array_push($c1,'mesen_h2ak5ac');
echo"<input type=\"button\" a href=\"#\"  value=\"mesen_h2ak5ac\" name=\"B18\" style=\"background-color: #0099FF; font-family: Five Double Zero; color: #000033; border: 1 solid #5FB020\">";
echo '   ';
}
}
////////////////////////////////////////////////
function o_find($a,$b,&$c,&$c1,$t)
{

$d=$a.'_'.$b;

$y=array_search($d,$t);
if(array_search($d,$t))
{ 
  $y1='hm'.''.$y;
  array_push($c,$y1);
  array_push($c1,$d);
  echo"<input type=\"button\" a href=\"#\"  value=\"$d\" name=\"B18\" style=\"background-color: #0099FF; font-family: Five Double Zero; color: #000033; border: 1 solid #5FB020\">";
echo '   ';

}
if($d=='adi_h3k27ac')
{
array_push($c,'hm0');
array_push($c1,'adi_h3k27ac');
echo"<input type=\"button\" a href=\"#\"  value=\"adi_h3k27ac\" name=\"B18\" style=\"background-color: #0099FF; font-family: Five Double Zero; color: #000033; border: 1 solid #5FB020\">";
echo '   ';
}

}
////////////////////////////////////////////



function getc($b)
{

$n=count($b);
if($n==1)
{$a=$b[0];
 return $a;
}
if($n==2)
{
$a=$b[0].','.$b[1];
return $a;

}

else 
{
$a=$b[0].','.$b[1];
for($i=2;$i<$n;$i++)
{$a=$a.','.$b[$i];}
return $a;
}
}




  
  
  if(isset($_POST['submit2']))//Ï¸°ûÏµµÄ²éÑ¯
  {//7
  $file = $_POST['yu'];
 //$content = file_get_contents($file);//¶ÁÈ¡ÎÄ¼þ
 $lo = explode(";", $file);
 $nl=count($lo);//×Ü¹²µÄÐÐÊý
print_r($lo);

for($i=0;$i<$nl;$i++)
      {
 $lo[$i]=explode(",", $lo[$i]);
       }//$lo[i][j]
//$s=$nl-1;
//if(count($lo[$s]==1))
//$nl=$nl-1;

echo "
<blockquote>The query has successfully completed! <a>Please check the imformation below :</a></blockquote>";
echo "<p><a>The information of the location received is:</a></p>";
echo"
<table width=\"99%\" summary=\"Demo of the included table styles\">
    <thead>
      <tr>
        <th scope=\"col\"><a>Chr</a></th><th scope=\"col\"><a>Start</a></th><th scope=\"col\"><a>End</a></th></tr></thead><tbody>";
$nn=count($lo);
//if(count($lo[$s]==1))
//$nn=$nn-1;
for($i=0;$i<$nn;$i++)
{
echo "<tr>";
echo"<th width=\"10%\" >";echo $lo[$i][0]; echo "</th>";
echo"<th width=\"29%\" >";echo $lo[$i][1]; echo "</th>";
echo"<th width=\"29%\" >";echo $lo[$i][2]; echo "</th>";
echo "</tr>";
}
echo "
    </tbody>
    </table>";
    echo"<a>The cell type and modification type you have chosed:</a><p>";
function search($chr,$loca1,$loca2,$s,&$hg)// Ò»ÐÐlocationµÄ²éÑ¯µ÷ÓÃº¯Êý,h1ÓÃÓÚ´æ´¢²éÑ¯µÄ½á¹û£¬h1[locationÇøÓò][locationµ¥µã+µ¥µã¶ÔÓ¦µÄ106¸öÖµ]
{ //2
$s1='location'.','.$s;
$sql="select $s1 from $chr where location between $loca1 and $loca2";
$conn=mysql_connect("localhost","root","000000");
mysql_select_db("test");
$res1=mysql_query($sql);
$m=0;
while($row=mysql_fetch_row($res1))
{ //1
 
  
  $n=count($row);//Ò»¸öÇøÓò½á¹ûÐÐÓÐ¶àÉÙ¸öÁÐ
  for($i=0;$i<$n;$i++)
  {

  $hg[$m][$i]=$row[$i];

  }

  $m=$m+1;
  }//1
   
}//2


    


if(isset($_POST['celltype']))
{//kl
$array1=$_POST['celltype'];
  $array2=$_POST['a'];
    $n=count($array1);
  $n1=count($array2);
  $c=array();//hm array
  $c1=array();//hm char array
  for($i=0;$i<$n;$i++)
    {
      for($j=0;$j<$n1;$j++)
    { find($array1[$i],$array2[$j],$c,$c1,$t);}
    
    }
    if(count($c)!=0)
    {//if
    $s=getc($c);

$hg=array();

for($j=0;$j<$nl;$j++)
{
$hg[$j]=array();
search($lo[$j][0],$lo[$j][1],$lo[$j][2],$s,$hg[$j]);

}


      //  
    echo "st 1";
    $rr = unserialize($_SESSION['t']);
    echo $rr;
    $_SESSION['hm2'] = serialize($c1);
    $_SESSION['lo'] = serialize($lo);
    $_SESSION['hm2'] = serialize($c1);
    $_SESSION['lo'] = serialize($lo);
    print_r($hg);
    $_SESSION['xdata2'] = serialize($hg); 
    $_SESSION['xdata2'] = serialize($hg); 
    }//if
    
    }//kl
    else{
          session_start();
        $gh=2;
    $_SESSION['t'] = serialize(gh);
    echo "set t 2";
    }
  //////xiguan



if(isset($_POST['o']))
{//hj
    $array1=$_POST['o'];
  $array2=$_POST['a'];
    $n=count($array1);
  $n1=count($array2);
  $o_c=array();//hm array
  $o_c1=array();//hm char array
  for($i=0;$i<$n;$i++)
    {
      for($j=0;$j<$n1;$j++)
    { o_find($array1[$i],$array2[$j],$o_c,$o_c1,$ot);
    }
    
    }
    if(count($o_c)!=0)
    {//if
    $s=getc($o_c);

$o_hg=array();

for($j=0;$j<$nl;$j++)
{
$o_hg[$j]=array();
search($lo[$j][0],$lo[$j][1],$lo[$j][2],$s,$o_hg[$j]);

}


      $_SESSION['t1'] = serialize(1); 
    $_SESSION['o_xdata2'] = serialize($o_hg); 
    $_SESSION['o_hm2'] = serialize($o_c1);
    }//if
    
}//hj
else    $_SESSION['t1'] = serialize(2);
        
  }//7
  
  
  
/////////////ÉÏ´« 
  if(isset($_POST['submit6']))//Ï¸°ûÏµµÄ²éÑ¯
  {//7
  session_start();
    $name = unserialize($_SESSION['name']);
  $file = 'upload/'.$name;

 $content = file_get_contents($file);//¶ÁÈ¡ÎÄ¼þ
 $lo = explode("\r\n", $content);
 $nl=count($lo);//×Ü¹²µÄÐÐÊý

for($i=0;$i<$nl;$i++)
      {
 $lo[$i]=explode(",", $lo[$i]);
       }//$lo[i][j]
//$s=$nl-1;
//if(count($lo[$s]==1))
//$nl=$nl-1;

echo "
<blockquote>The query has successfully completed! <a>Please check the imformation below :</a></blockquote>";
echo "<p><a>The information of the location received is:</a></p>";
echo"
<table width=\"99%\" summary=\"Demo of the included table styles\">
    <thead>
      <tr>
        <th scope=\"col\"><a>Chr</a></th><th scope=\"col\"><a>Start</a></th><th scope=\"col\"><a>End</a></th></tr></thead><tbody>";
$nn=count($lo);
//if(count($lo[$s]==1))
//$nn=$nn-1;
for($i=0;$i<$nn;$i++)
{
echo "<tr>";
echo"<th width=\"10%\" >";echo $lo[$i][0]; echo "</th>";
echo"<th width=\"29%\" >";echo $lo[$i][1]; echo "</th>";
echo"<th width=\"29%\" >";echo $lo[$i][2]; echo "</th>";
echo "</tr>";
}
echo "
    </tbody>
    </table>";
    echo"<a>The sample and modification type you have chosed:</a><p>";
function search($chr,$loca1,$loca2,$s,&$hg)// Ò»ÐÐlocationµÄ²éÑ¯µ÷ÓÃº¯Êý,h1ÓÃÓÚ´æ´¢²éÑ¯µÄ½á¹û£¬h1[locationÇøÓò][locationµ¥µã+µ¥µã¶ÔÓ¦µÄ106¸öÖµ]
{ //2
$s1='location'.','.$s;
$sql="select $s1 from $chr where location between $loca1 and $loca2";
$conn=mysql_connect("localhost","root","000000");
mysql_select_db("test");
$res1=mysql_query($sql);
$m=0;
while($row=mysql_fetch_row($res1))
{ //1
 
  
  $n=count($row);//Ò»¸öÇøÓò½á¹ûÐÐÓÐ¶àÉÙ¸öÁÐ
  for($i=0;$i<$n;$i++)
  {

  $hg[$m][$i]=$row[$i];

  }

  $m=$m+1;
  }//1
   
}//2


    


if(isset($_POST['celltype']))
{//kl
$array1=$_POST['celltype'];
  $array2=$_POST['a'];
    $n=count($array1);
  $n1=count($array2);
  $c=array();//hm array
  $c1=array();//hm char array
  for($i=0;$i<$n;$i++)
    {
      for($j=0;$j<$n1;$j++)
    { find($array1[$i],$array2[$j],$c,$c1,$t);}
    
    }
    if(count($c)!=0)
    {//if
    $s=getc($c);

$hg=array();

for($j=0;$j<$nl;$j++)
{
$hg[$j]=array();
search($lo[$j][0],$lo[$j][1],$lo[$j][2],$s,$hg[$j]);

}


      session_start();
    $gh=1;
    $_SESSION['t'] = serialize($gh);
    $_SESSION['xdata2'] = serialize($hg); 
    $_SESSION['hm2'] = serialize($c1);
    $_SESSION['lo'] = serialize($lo);
    }//if
    
    }//kl
    else 
     {
    $gh=2;
    $_SESSION['t'] = serialize($gh);}
    
  }//7
  
  
  if(isset($_POST['submit6']))//Æ÷¹ÙµÄ²éÑ¯
  {//7



if(isset($_POST['o']))
{//hj
    $array1=$_POST['o'];
  $array2=$_POST['a'];
    $n=count($array1);
  $n1=count($array2);
  $o_c=array();//hm array
  $o_c1=array();//hm char array
  for($i=0;$i<$n;$i++)
    {
      for($j=0;$j<$n1;$j++)
    { o_find($array1[$i],$array2[$j],$o_c,$o_c1,$ot);
    }
    
    }
    if(count($o_c)!=0)
    {//if
    $s=getc($o_c);

$o_hg=array();

for($j=0;$j<$nl;$j++)
{
$o_hg[$j]=array();
search($lo[$j][0],$lo[$j][1],$lo[$j][2],$s,$o_hg[$j]);

}


      $gh=1;
    $_SESSION['t'] = serialize($gh);
    $_SESSION['o_xdata2'] = serialize($o_hg); 
    $_SESSION['o_hm2'] = serialize($o_c1);
    }//if
    else
    $_SESSION['t'] = serialize(2);
}//hj
  }//7

?>
  <?php
if(isset($_POST['submit56']))

{if (($_FILES["file"]["size"] < 20000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    
  if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. Change your name or go on W-Chipeaks";
    $name=$_FILES["file"]["name"];
     session_start();
    $_SESSION['name'] = serialize($name);
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
    $name=$_FILES["file"]["name"];
    session_start();
    $_SESSION['name'] = serialize($name);
      }
    }
  
  }
else
  {
  echo "Invalid file";
  }

echo "
  <form method=\"POST\" action=\"peak.php\">
                <select name=\"se\" >
                          <option value=\"2\">Bin_size(2)</option>
                  <option value=\"4\">Bin_size(4)</option>
                  <option value=\"5\">Bin_size(5)</option>
                </select>               
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
             <input name=\"submit3\" type=\"submit\" id=\"rb2\" value=\"W_chipeaks \" /> </p>
      </form>           
                  </p>  ";                
    }?>     
  </div>
</div>
    <div id="footer">
    <p><img src="img/2.png" alt="" width="100" height="60" /><br />
    Recommended Browser:Firefox or Chrome</p> 
    <p>Maintained by DMB Lab, Tongji University, China </p>
</div>
</body>
</html>