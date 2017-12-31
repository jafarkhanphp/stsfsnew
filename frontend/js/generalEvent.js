
function MakeTD()
{
 var jshight = screen.height;
  if (jshight==600)
 {
   document.write("<td align='center' valign='top' style='width:1000px;height:180px;'>");
 }
else if (jshight==768)
{
 document.write("<td align='center' valign='top' style='width:1000px;height:328px;'>");
}
else if (jshight==864)
{
 document.write("<td align='center' valign='top' style='width:1000px;height:424px;'>");
}
else if  (jshight==720)
{
document.write("<td align='center' valign='top' style='width:1000px;height:300px;'>");
}
else if  (jshight==960)
{
document.write("<td align='center' valign='top' style='width:1000px;height:545px;'>");
}
else if  (jshight==1024)
{
document.write("<td align='center' valign='top' style='width:1000px;height:600px;'>");
}
else if  (jshight==1050)
{
document.write("<td align='center' valign='top' style='width:1000px;height:600px;'>");
}
else 
{
document.write("<td align='center' valign='top' style='width:1000px;height:620px;'>");
}
}

function CloseDiv()
{
document.write("</td>");
}

function DivOnOff(DivName,Divvalue)
{	
	if(Divvalue==true)
	{
		document.getElementById(DivName).style.display='Block';
	}
	else
	{
		document.getElementById(DivName).style.display='none';
	}
}

function DivTrueFalse(DivEnable,Divdisable)
{
    document.getElementById(DivEnable).style.display='Block'; 
    document.getElementById(Divdisable).style.display='none';
}

function DivEnable(DivChName,DivCardName,Divvalue)
{
	if(Divvalue==2)
	{
		document.getElementById(DivCardName).style.display='Block';
		document.getElementById(DivChName).style.display='none';
	}
	else if(Divvalue==1)
	{
		document.getElementById(DivChName).style.display='Block';
		document.getElementById(DivCardName).style.display='none';
	}
	else
	{
		document.getElementById(DivChName).style.display='none';
		document.getElementById(DivCardName).style.display='none';
	}
}

function showreceipt()
{
	window.open('receipt.aspx','receipt','width=480px,height=420px,toolbar=no,location=no');
}

function showwelcome()
{
	window.open('welcome.aspx','Welcome','width=640px,height=500px,toolbar=no,location=no,scrollbars=yes');
}



function toggle1(which) 
{
if(which.value == 'Username' || which.value == 'Password')
{
which.value = "";
return false;
}
}
function toggle2(which,from) 
{
if(which.value == '' && from == 1)
{
which.value = "Username";
}
if(which.value == '' && from == 2)
{
which.value = "Password";
}
}