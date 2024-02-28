<div class="row">
    <div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Danh mục', 'Số lượng sản phẩm'],
    <?php
        $sum_cat=count($list_statistical);
        $i=1;
        foreach ($list_statistical as $statistical) {
            extract($statistical);
            if($i==$sum_cat) $phay=""; else $phay=",";
            echo "
                ['".$statistical['name_cat']."', ".$statistical['count_products']."]
            ".$phay;
            $i+=1;
        }
    ?>
    
    ]);

    // Optional; add a title and set the width and height of the chart
    var options = {'title':'My Average Day', 'width':550, 'height':400};

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
    }
    </script>
</div>