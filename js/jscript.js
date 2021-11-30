
function fetchTasks() {
    var theObject = new XMLHttpRequest();
    theObject.open('GET', 'grafico.php', true);
    theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    theObject.onreadystatechange = function() {
      if(theObject.readyState === 4 & theObject.status === 200) {
        document.getElementById('container').innerHTML = theObject.responseText;
        var res = theObject.responseText;
        ///const data = JSON.parse(res);
        //console.log(data[0].rango);
        }
    }
    theObject.send();
}
function drawChart() {


    var theObject = new XMLHttpRequest();
    theObject.open('GET', 'grafico.php', true);
    theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    theObject.onreadystatechange = function() {
        var d;
      if(theObject.readyState === 4 & theObject.status === 200) {
        var res = theObject.responseText;
        d = JSON.parse(res);
        }
        var data = google.visualization.arrayToDataTable([
            ['Rango etario', 'cantidad de registros'],
            [d[0].rango,    parseInt(d[0].suma)],
            [d[1].rango,     parseInt(d[1].suma)],
            [d[2].rango,  parseInt(d[2].suma)],
            [d[3].rango, parseInt(d[3].suma)]
          ]);
        var options = {
          title: 'Rango etario'
        };
    
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
        chart.draw(data, options);
    }
    theObject.send();
  }

