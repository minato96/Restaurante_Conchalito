
<?php
    include_once 'Pheader.php';
    include_once 'Paside.php';
?>
    <script src="../js/Chart.min.js"></script>
    <h2>Productos mas vendidos</h2>
    <br>
    <canvas id="popChart" width="600" height="400"></canvas>
    <script>
        var popCanvas = $("#popChart");
        var popCanvas = document.getElementById("popChart");
        var popCanvas = document.getElementById("popChart").getContext("2d");
        var barChart = new Chart(popCanvas, {
  type: 'bar',
  data: {
    labels: ["China", "India", "United States", "Indonesia", "Brazil", "Pakistan", "Nigeria", "Bangladesh", "Russia", "Japan"],
    datasets: [{
      label: 'Population',
      data: [1379302771, 1281935911, 326625791, 260580739, 207353391, 204924861, 190632261, 157826578, 142257519, 126451398],
      backgroundColor: [
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
        'rgba(75, 192, 192, 0.6)',
        'rgba(153, 102, 255, 0.6)',
        'rgba(255, 159, 64, 0.6)',
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
        'rgba(75, 192, 192, 0.6)',
        'rgba(153, 102, 255, 0.6)'
      ]
    }]
  }
});
    </script>
<?php
    include_once 'Pfooter.php';
?>