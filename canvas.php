    <?php

    require 'vendor/autoload.php'; // include Composer's autoloader


    $client = new MongoDB\Client("mongodb://localhost:27017");
    $collection = $client->test->col;

    


     
    $result1 = $collection->count(array('TARGET'=>1));
    $result0 = $collection->count(array('TARGET'=>0));

    $dataPoints = array(
    	array("y"=> $result0,"label"=> "NO"),
    	array("y"=> $result1,"label"=> "yes")
    );
    	
    ?>
    <!DOCTYPE HTML>
    <html>
    <head>  

    <script>
        window.onload = function() {
         
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2",
            title:{
                text: "destribution des classes"
            },
            axisY: {
                title: "destribution des classes"
            },
            data: [{
                type: "column",
                yValueFormatString: "#,##0.## tonnes",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
         
        }
    </script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
    </html>                              