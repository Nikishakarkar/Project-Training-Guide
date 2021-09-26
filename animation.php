 
<html>
<title>Student training guide</title>
<head>

<script language="JavaScript">
<!-- hide from other browsers	

//Pictures to switch inbetween

var Rollpic1 = "image/student1.jpg";
var Rollpic2 = "image/student2.jpg";
var Rollpic3 = "image/student3.PNG";

 

//Start at the what pic:
var PicNumber=1;
//Number of pics:
var NumberOfPictures=4;
//Time between pics switching in secs
var HowLongBetweenPic=5;

//SwitchPic Function
function SwitchPic(counter){

	if(counter < HowLongBetweenPic){
	
		counter++;
		
		//DEBUG in the status bar at the bottom of the screen
		window.status="Switch picture at 5 : "+counter+" PicNumber: "+PicNumber+" ";
		
		//Display pic in what <IMG> tag roll is what I called the image
		document.roll.src = eval("Rollpic" + PicNumber);
		
		//function calls itself
		CallSwitchPic=window.setTimeout("SwitchPic("+counter+")",1500); 
		
		}
		
		else{
			//if its not the last picture goto the next picture
			if(PicNumber < NumberOfPictures){
				PicNumber++;
				SwitchPic(0);
			}
			//its the last picture go to the first one
			else{
				PicNumber=1;
				SwitchPic(0);
				}
	
		}

}
// Stop hiding from old browsers -->
</script>	
</head>
<body>
<BODY bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000" onload="SwitchPic(0)">
<img src="1.jpg" border="0" name="roll">
</body>
</html>