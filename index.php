<!DOCTYPE html>
<html lang="en">
<head>
    <title>People in need of help</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
        #map {
            height: 100%;
        }
        #floating-panel {
            position: absolute;
            top: 10px;
            left: 25%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto','arial';
            line-height: 30px;
            padding-left: 10px;
        }
        /* Fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div id="floating-panel">
    <p>
        Emergencies since
        <input id="date" value="2017-01-01" type="date" onchange="candiDate(this.value)"/>
        <input id="button" type="button" onclick="setMarkers()" value="Find" />
        <script>
            document.getElementById("date").addEventListener("keyup", function(event) {
                event.preventDefault();
                if (event.keyCode == 13) {
                    document.getElementById("button").click();
                }
            });
        </script>
    </p>
</div>
<div id="map"></div>
<form action="listener.php">
  <input type="submit" value="click on me!">
</form>
<script language="javascript" type="text/javascript" src="point.js"></script>
<script language="javascript" type="text/javascript" src="main.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAVldevQ9URKGx2yxZ4or9YdBtdnmkjh8&callback=initMap&language=en">
</script>
</body>
</html>