<html>
<head>
</head>
<body>
    <center>
<table border="1">
    <tr>
        <th>Key</th>
        <th>Players</th>
    </tr>

    <?php
        $players=array("KL Rahul (C)","Rohit Sharma","Virat Kohli",'Rishabh Pant','Shreyas Iyer','Hardhik Pandya','Shardul Thakur','R Ashwin','Bhuvneshwar Kumar','Jasprit Bumrah','Rahul Chahar');
        foreach($players as $k=>$v)
        {
            echo"<tr><td><h3>$k</h3></td><td><h3>$v</h3></td></tr>";
        }
        ?>
</table>
</center>

    
</body>
</html>
