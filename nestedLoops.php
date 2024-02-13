<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Multiplication</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <style>

            :root {
                --bg-rainbow: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAABCAYAAAAo/lyUAAAAzElEQVQ4y6VUyxLEIAiL6P9/MeheOrOsy0t7YDpVDGhC2iIsdCCNAYCMNS+fjH2NMYwcSjC7ke/1N4I7RBhRH/q88RaLAME3JgBW//ysiRH7Hjt53hkO6nr4lXrZHfYeZoLHCnP/6poCKGHuhAyH/DdissRbxaCiACtD1S9qF4ZstZi0TEARiVXBekK9qS8FAXuDIC/6f+KEpX6oQkoU5NlU1ktiX67q9b+lLs+Wq+/Sfoia52RcuWfkyJz0YblVZbCqjmgJ2HLifyF/AOUV/gIb19GPAAAAAElFTkSuQmCC);
            }
            @keyframes bg-slide {
                from {
                    background-position-x: 0%;
                }
                to {
                    background-position-x: 200%;
                }
            }

            .cool {
                animation-name: bg-slide;
                animation-duration: 10s;
                animation-fill-mode: both;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
                animation-direction: normal;
                background: var(--bg-rainbow);
                background-size: 200% 100%;
            }

            td, th {

                text-shadow: 0px 0px 2px black;
            }

            table  {
                animation-name: bg-slide;
                animation-duration: 15s;
                animation-fill-mode: both;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
                animation-direction: normal;
                background: var(--bg-rainbow);
                background-size: 50% 100%;
            }        
        </style>
        
        <?php 
            global $mult1, $mult2;
            
            $mult1 = array(1,2,3,4,5,6,7,8,9,10,11,12);
            $mult2 = array(1,2,3,4,5,6,7,8,9,10,11,12);
        ?>
    </head>
    
    <body class="bg-dark text-light text-center">
        <h1 class="mt-3">Multiplication</h1>
        <div class="container mt-3 rounded p-3 bg-secondary">
            <table class="table m-0 table-bordered text-light">
                <thead>
                    <tr>
                        <th>x</th>
                        <?php
                            for($x = 1; $x <= 12; $x++)
                                echo "<th >$x</th>";
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($mult1 as $val1){
                        //Create the row
                        echo "<tr> <th>$val1</th>";
                        //Net the loops
                        foreach($mult2 as $val2){
                            $result = $val1 * $val2;
                            echo "<td>$result</td>";
                        }
                        //Close the table row
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>