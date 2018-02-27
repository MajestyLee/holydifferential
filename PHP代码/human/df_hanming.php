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
      /**
       * Created by PhpStorm.
       * User: majestylee
       * Date: 17/04/2017
       * Time: 3:10 PM
       */
 function check(){


     console.log("enter");
     var textbox=document.getElementsByName('a[]');
     if($("#location1")[0].value<0 ||$("#location2")[0].value<0){
         alert("region input error: cant be negative");
         return false;
     }else if(Math.abs($("#location1")[0].value-$("#location2")[0].value)>700000){
         alert("region input error: interval is too big");
         return false;
     }

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
 if((l+l1)==0)//�����
 {
     for(var r=0;r<28;r++)
 { a[r].checked=false;
     a[r].disabled="disabled";}
 }

 if((l+l1)>0)//��������ߣ�ȡ����
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
 if((l+l1)==0)//�����
 {
     for(var r=0;r<28;r++)
 { a[r].checked=false;
     a[r].disabled="disabled";}
 }

 if((l+l1)>0)//��������ߣ�ȡ����
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
 if((l+l1)==0)//�����
 {
     for(var r=0;r<28;r++)
 { a[r].checked=false;
     a[r].disabled="disabled";}
 }

 if((l+l1)>0)//��������ߣ�ȡ����
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
 if((l+l1)==0)//�����
 {
     for(var r=0;r<28;r++)
 { a[r].checked=false;
     a[r].disabled="disabled";}
 }

 if((l+l1)>0)//��������ߣ�ȡ����
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
 if((l+l1)==0)//�����
 {
     for(var r=0;r<28;r++)
 { a[r].checked=false;
     a[r].disabled="disabled";}
 }

 if((l+l1)>0)//��������ߣ�ȡ����
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
 if((l+l1)==0)//�����
 {
     for(var r=0;r<28;r++)
 { a[r].checked=false;
     a[r].disabled="disabled";}
 }

 if((l+l1)>0)//��������ߣ�ȡ����
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
 function one()
 {//one
     $("#children").remove();
     var ty=check();
     if(ty==false){
         return true;
     }
     var xmlhttp;
     var textbox=document.getElementsByName('a[]');

     var textbox1=document.getElementsByName('celltype[]');
     var textbox2=document.getElementsByName('o[]');
     var textbox3=document.getElementById("number").value;
     var textbox4=document.getElementById("dfmethod").value;
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
         if (xmlhttp.readyState==4 && xmlhttp.status==200 &&ty!=false){
             //alert(xmlhttp.responseText);
             var data=xmlhttp.responseText.split("taohan");
             console.log(data);
             if(data[1]!=0){
                 document.getElementById("texthint").innerHTML=data[0];
             }else{
                 document.getElementById("texthint").innerHTML="";
                 new_obj = $("<div id=\"children\" style=\"background-color: beige;font-family: initial;width: 600px;margin-left: 25%;margin-bottom: 2%;visibility:visible\">The histone modification data of the selected region is absent.  Please input a new region.</div>");
                 $("#texthint").before(new_obj);
             }
         }
     }
     var url="s_11.php";
     if (textbox4 == "shannon"){
         var url = "s_12.php";
     }
     if (textbox4 == "shannon2"){
         var url = "s_13.php";
     }
  url=url+"?a="+aa(textbox);
 url=url+"&c="+aa(textbox1);
 url=url+"&o="+aa(textbox2);
 url=url+"&lo1="+textboxa;
 url=url+"&lo2="+textboxb;


 url=url+"&number="+textbox3;
  //alert(textbox.toString())
  console.log(url);
xmlhttp.open("GET",url,true);
xmlhttp.send();



}//one
///////////////////two
function two()
{
    var ty=check();
    if(ty==false){
        return true;
    }
    console.log(12);
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
        if (xmlhttp.readyState==4 && xmlhttp.status==200 ){
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
function aa(r){
    var s="";
    for(var i=0;i<r.length;i++){
        if(r[i].checked){
            s += r[i].value+",";
        }
    }
  return s.substring(0,s.length-1);
}
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


      <li><a href="single.php">Single Query</a></li>
      <li><a href="batch.php">Batch Query</a></li>
      <li><a href="../visu/index.html">Visualize</a></li>
      <li><a href="download.php">Download</a></li>
        <li><a href="df_hanming.php" class="current">single differential Analysis</a></li>
        <li><a  href="batch_da.php">batch differential Analysis</a></li>
      <li><a href="tutorial.php">Tutorial</a></li>
      <li><a href="help.html">Contact</a></li>
    </ul>
  </div>
  <h2>&nbsp;Differential Analysis</h2>
  <div id="contentwide">
    <div id="dfdf" style="margin-left:50px"></div>

    <p> Specify your interested cell types and histone modification marks, you can query one region by genomic location.



    </p>

  </div>

  <div id="th">

    <form method="post" action="result.php"  onsubmit="return check()" >
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
          <script type="text/javascript">
    $("#hah").bind('click',function(){
        var cell=$("input[name='celltype[]']");
        var orga=$("input[name='o[]']")
      for(var i=0;i<cell.length;i++){
            cell[i].checked=cell[i].checked?false:true;
        }
      for(var i=0;i<orga.length;i++){
            orga[i].checked=orga[i].checked?false:true;
            newor(i);
        }
      newcul();
      newstem();
      newtro();
      newcell();
      newmen();
    });
    $("#hah").bind('mouseover',function(){
        $("#t").css("visibility","visible");
    });
    $("#hah").bind('mouseout',function(){
        $("#t").css("visibility","hidden");
    });
  </script>
         <div>
             <p><a href="#">Method: </a>
             <select name="dfmethod" id="dfmethod">
                 <option value="hm_dis">hm_distance</option><option value="shannon">shannon</option><option value="shannon2">highdif</option>
             </select>
                    <p><a href="#">Region: </a>

                    <p><a href="#">Location--> >&nbsp;  &nbsp;&nbsp;&nbsp; Chromosome</a>
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
            </script>
                      <img src="img/green.jpg" alt=" " id="pic" style="width: 25px;vertical-align: middle;margin-left: 20px;margin-bottom: 5px;visibility: hidden;">
                      <!--<input type="button"  value="Search "  onclick="two()" style="background-color:#cccccc"/> -->
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <!--<input type="button" a href="#"  onclick="window.open('gene.php','go1','scrollbars=yes,top=100,left=0,resizable=yes,alwaysRaised=yes,z-look=yes,width=1238,height=350')" value="Gene List" name="B1" style="background-color: #CCCCCC; height:24px;font-family: $Five Double Zero; color: #000000; border: 1 solid #5FB020"> -->
                 </p>
         </div>
    </form>
  </div>
<div id="genehint" style="margin-left: 150px;background-color: white;padding-left: 10px;color: balck;width: 900px;overflow: auto;"></div>
<div id="texthint">
</div>
<div id="texthint1"></div>
<div id="footer">
    <p><img src="img/2.png" alt="" width="100" height="60" /><br />
    Recommended Browser:Firefox or Chrome</p>
    <p>Maintained by DMB Lab, Tongji University, China </p>
</div>
</div>
</body>
</html>