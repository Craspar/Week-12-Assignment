<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Process the 9.10.php form</title>

    <style type="text/css">

        td,th,table {
            border: thin solid black;
            border-collapse: collapse;
            padding: 5px;
        }

    </style>
</head>

<body>

    <?php

        $username = $_POST["fullname"] ?? null;
        $fourwlb = $_POST["4WLB"] ?? null;
        $eightwlb = $_POST["8WLB"] ?? null;
        $fourllb = $_POST["4LLB"] ?? null;
        $eightllb = $_POST["8LLB"] ?? null;


        if ($username == "") $username = 0;
        if ($fourwlb == NULL) $fourwlb = 0;
        if ($eightwlb == NULL) $eightwlb = 0;
        if ($fourllb == NULL) $fourllb = 0;
        if ($eightllb == NULL) $eightllb = 0;


        $total_price = round((($fourwlb + $eightwlb + $fourllb + $eightllb)*1.062),2);

    ?>

    <h4>Customer</h4>

    <p>

        <?php
            print "$username";
        ?>

    </p>



    <table>

        <tr>
            <th> Purchased Items </th>
            <th> Price </th>
            <th> Total </th>
        </tr>

        <?php

            if ($fourwlb != 0) print ("<tr> <td> Four 25-watt light bulbs</td> <td>$fourwlb</td> </tr>");
            if ($eightwlb != 0) print ("<tr><td> Eight 25-watt light bulbs</td> <td>$eightwlb</td> </tr>");
            if ($fourllb != 0) print ("<tr><td> Four 25-watt long-life light bulbs</td> <td>$fourllb</td> </tr>");
            if ($eightllb != 0) print ("<tr><td> Eight 25-watt long-life light bulbs</td> <td>$eightllb</td> </tr>");

            print ("<tr><td><b>Your Total is =></b></td><td></td><td><b>$total_price</b></td></tr>")

        ?>
        
    </table>
</body>

</html>