<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js\jscript.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      //google.charts.setOnLoadCallback(drawChart);
    </script>
</head>
<body>  
    <button onclick="drawChart()">    
      Send Ajax Request
    </button>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <div id="container"></div>
</body>
</html>