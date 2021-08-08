$(document).ready(function(){
    $.ajax({
      url: "app/src/show-chart-data.php",
      
      //url: "http://grumin.lt/my-work/chartjs/data.php",
      method: "GET",
      success: function(data) {
        console.log(data);
        var player = [];
        var score = [];
  
        for(var i in data) {
          player.push("Player " + data[i].playerid);
          score.push(data[i].score);
        }
  
        var chartdata = {
          labels: player,
          datasets : [
            {
              label: 'Player Score',
              backgroundColor: 'rgba(0,26,26, 0.75)',
              borderColor: 'rgba(0,26,26, 0.95)',
              hoverBackgroundColor: 'rgba(32,158,145, 0.6)',
              hoverBorderColor: 'rgba(200, 200, 200, 0.95)',
              data: score
            }
          ]
        };
  
        var ctx = $("#mycanvas");
  
        var barGraph = new Chart(ctx, {
          type: 'bar',
          data: chartdata
        });
      },
      error: function(data) {
        console.log(data);
      }
    });
});

