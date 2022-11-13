<?php
    include 'dbconnect.php';

    $query = "SELECT * FROM minimarket;";
    $bestellungen = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>T-Shirt Bestellungen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div id="app">
    <main class="py-4">
        <div class="container-fluid text-center">
            <h1>T-Shirt Bestellungen</h1>
        </div>

        <br />

        <div class="container-fluid">
            <table class="table table-hover">
                <thead>
                <th>
                    Name
                </th>
                <th>
                    Kontakt
                </th>
                <th>
                    Grösse
                </th>
                <th>
                    Shirt Farbe
                </th>
                <th>
                    Druck Farbe
                </th>
                <th>
                    Druck Ort
                </th>
                <th>
                    Eigenes Shirt
                </th>
                <th>
                    Anzahl
                </th>
                </thead>
                <tbody>
                    <?php
                        while($row = $bestellungen->fetch_assoc()){
                            echo "<tr>";
                                echo "<td>";
                                    echo "$row[name]";
                                echo "</td>";
                                echo "<td>";
                                    echo "$row[contact]";
                                echo "</td>";
                                echo "<td>";
                                    echo strtoupper($row['shirt_size']);
                                echo "</td>";
                                echo "<td>";
                                    echo "$row[shirt_color]";
                                echo "</td>";
                                echo "<td>";
                                    echo "$row[print_color]";
                                echo "</td>";
                                echo "<td>";
                                    echo "$row[print_placing]";
                                echo "</td>";
                                echo "<td>";
                                    echo "$row[byos]";
                                echo "</td>";
                                echo "<td>";
                                    echo "$row[count]";
                                echo "</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/b7304ac133.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</div>
</body>
