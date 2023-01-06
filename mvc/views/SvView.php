<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Ho va ten:</h1>
        <b>
            <?php
                echo $data["HoTen"];
            ?>
        </b></br>

        <b>Tuoi Cua ban la:
            <?php
                echo $data["Tuoi"];
            ?>
        </b>
        <h2>
            <?php
                while($row = mysqli_fetch_array($data["SV"])){
                    echo $row["hoten"];
                    echo $row["namsinh"];
                }
            ?>
        </h2>
        
    </div>
</body>
</html>