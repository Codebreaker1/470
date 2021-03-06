<!DOCTYPE HTML>
<html>

<head>  
  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
      text: "Coal Reserves of Countries"   
      },
      axisY:{
        title:"Coal (mn tonnes)"   
      },
      animationEnabled: true,
      data: [
      {        
        type: "stackedColumn",
        toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}mn tonnes",
        name: "Anthracite and Bituminous",
        showInLegend: "true",
        dataPoints: [
        {  y: 111338 , label: "USA"},
        {  y: 49088, label: "Russia" },
        {  y: 62200, label: "China" },
        {  y: 90085, label: "India" },
        {  y: 38600, label: "Australia"},
        {  y: 48750, label: "SA"}
        
        ]
      },  {        
        type: "stackedColumn",
        toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}mn tonnes",
        name: "SubBituminous and Lignite",
        showInLegend: "true",
        dataPoints: [
        {  y: 135305 , label: "USA"},
        {  y: 107922, label: "Russia" },
        {  y: 52300, label: "China" },
        {  y: 3360, label: "India" },
        {  y: 39900, label: "Australia"},
        {  y: 0, label: "SA"}
        
        ]
      }            
      ]
      ,
      legend:{
        cursor:"pointer",
        itemclick: function(e) {
          if (typeof (e.dataSeries.visible) ===  "undefined" || e.dataSeries.visible) {
	          e.dataSeries.visible = false;
          }
          else
          {
            e.dataSeries.visible = true;
          }
          chart.render();
        }
      }
    });

    chart.render();
  }
  </script>
 <script type="text/javascript" src="canvasjs.min.js"></script></head>
<body>
  <div id="chartContainer" style="height: 300px; width: 100%;">
  </div>
</body>
</html>
