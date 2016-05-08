<!DOCTYPE html>

<html>

<head>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<title>geoArt</title>

<meta name="viewport" content="width=device-width, initial-scale=1">



<script type="text/javascript">




if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(function(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    rlat = Math.round( lat * 1000 ) / 1000
    rlng = Math.round( lng * 1000) / 1000
    updatepage(rlat,rlng);
},
  function(failure) {

      var xmlhttp = new XMLHttpRequest();
      var url = "http://freegeoip.net/json/<?php echo $_SERVER['REMOTE_ADDR'] ?>";


      xmlhttp.onreadystatechange = function() {
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              var myArr = JSON.parse(xmlhttp.responseText);
              parseloc(myArr);
          }
      };
      xmlhttp.open("GET", url, true);
      xmlhttp.send();








  }
);

} else {
 document.writeln("no geolocation :(");
}

function failuref(failure) {
    alert("OH NO")
}

function parseloc(arr) {
    rlat = arr.latitude;
    rlng = arr.longitude;
    updatepage(rlat,rlng);

}

function updatepage(rlat, lng)
{

    $('#userLat').html(rlat);
    $('#userLng').html(rlng);
    //var pref = "http://willow.lol/"          - To use my rndimg.php
    var pref = ""                           // - To use local rndimg.php
    var mystring = "rndimg?s="+rlat+""+rlng
    var newstring = mystring.split('.').join('');
    finstring =  newstring.split('-').join('');
    finstring = pref + finstring
    $('#image').attr("src",finstring);
}

    </script>
</head>

<body>

<div style="width:50%;margin:auto;">

<img id="image" src="" width="100%" style="image-rendering:pixelated;"/>
<BR>

    <span id="userLat">x</span>, <span id="userLng">x</span>
    <BR>




</div>

</body>

</html>
