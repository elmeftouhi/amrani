<div class="border rounded-lg p-2 mb-4 bg-green-50">
    <div class="flex items-center justify-between h-12 px-4 text-gray-600">
        <h1 class="font-bold text-lg">Type en %</h1>
        <button class="text-blue-400 p-2 hover:text-gray-600"><i class="fas fa-sync-alt"></i></button>
    </div>
    <canvas id="myDoughnutChart" width="400" height="150"></canvas>
</div>
<script>
$(document).ready(function(){

    ctx = document.getElementById('myDoughnutChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Vente', 'Location', 'Les Deux', 'Aucune'],
            datasets: [{
                label: '# of Votes',
                data: [38, 45, 5, 12,],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {

        }
    });

})
</script>