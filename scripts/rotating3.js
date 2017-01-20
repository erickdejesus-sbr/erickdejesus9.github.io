//newrotate.js

var newqprefix = "images/p";
var newqimagearray = new Array(4);
for (i=0; i<newqimagearray.length; i++)
    newqimagearray[i] = newqprefix + (i+1) + ".jpg";
	
var newqimagecounter = 0;
function newqrotate()
{
    var newqimageobject = document.getElementById('mic');
    newqimageobject.src = newqimagearray[newqimagecounter];
    ++newqimagecounter;
    if (newqimagecounter == 4) newqimagecounter = 0;
}

function newqstartRotation()
{
    document.getElementById('mic').src=newqimagearray[3];
    setInterval('newqrotate()', 2000);
}

