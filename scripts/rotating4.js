//newrotate.js

var netprefix = "images/c";
var netimagearray = new Array(4);
for (i=0; i<netimagearray.length; i++)
    netimagearray[i] = netprefix + (i+1) + ".jpg";
	
var netimagecounter = 0;
function netrotate()
{
    var netimageobject = document.getElementById('mon');
    netimageobject.src = netimagearray[netimagecounter];
    ++netimagecounter;
    if (netimagecounter == 4) netimagecounter = 0;
}

function netstartRotation()
{
    document.getElementById('mon').src=netimagearray[3];
    setInterval('netrotate()', 2000);
}


