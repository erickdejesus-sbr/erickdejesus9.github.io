//newrotate.js

var newprefix = "images/m";
var newimageArray = new Array(4);
for (i=0; i<newimageArray.length; i++)
    newimageArray[i] = newprefix + (i+1) + ".jpg";
	
var newimageCounter = 0;
function newrotate()
{
    var newimageObject = document.getElementById('mice');
    newimageObject.src = newimageArray[newimageCounter];
    ++newimageCounter;
    if (newimageCounter == 4) newimageCounter = 0;
}

function newstartRotation()
{
    document.getElementById('mice').src=newimageArray[3];
    setInterval('newrotate()', 2000);
}

