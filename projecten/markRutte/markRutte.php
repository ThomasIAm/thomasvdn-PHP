<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <link rel="stylesheet" href="markRutte.css">
        
        <title>Mark-O-Meter</title>
    </head>
    
    <body>
        <?php
            if(isset($_POST['submit'])) {
                $aantal = trim($_POST['aantal']);
                $gebied = strtolower(trim($_POST['gebied']));

                if($aantal < 3 || ($aantal > 5 && $gebied == "onderwijs")) {
                    $humeur = "boos";
                } elseif (3 <= $aantal && $aantal <= 5) {
                    $humeur = "humeurig";
                } elseif ($gebied == "zorg") {
                    $humeur = "verdrietig";
                } else {
                    $humeur = "blij";
                }
                
                echo("<h1>Mark is ".$humeur."</h1>");

                if($humeur == "boos" || $humeur == "humeurig") {
                    $img = "markRutteBoos.jpg";
                } elseif($humeur == "verdrietig") {
                    $img = "markRutteVerdrietig.jpg";
                } else {
                    $img = "markRutteBlij.jpg";
                }
                
                echo("<img class=\"img-fluid\" id=\"mark\"src=\"".$img."\"");
            }
        ?>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>