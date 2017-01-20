//rotate.js

var prefix = "images/h";
var imageArray = new Array(4);
for (i=0; i<imageArray.length; i++)
    imageArray[i] = prefix + (i+1) + ".jpg";
	
var imageCounter = 0;
function rotate()
{
    var imageObject = document.getElementById('phone');
    imageObject.src = imageArray[imageCounter];
    ++imageCounter;
    if (imageCounter == 4) imageCounter = 0;
}

function startRotation()
{
    document.getElementById('phone').src=imageArray[3];
    setInterval('rotate()', 2000);
}







