
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="container">
        <div class="images">
			<img src="1.png" class = "ball">
		</div>
        <div class="dropdown">
            <button class="dropbtn">Menu<i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="c_jadwal.php">Jadwal</a>
                <a href="c_pertandingan.php">Pertandingan</a>
                <a href="c_klasemen.php">Klasemen</a>
            </div>
        </div>
    <h1>DAFTAR KLUB LIGA PW</h1>
    <div class="tablecon">
    <table id="klub">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Klub</th>
            <th>Stadion Kandang</th>
            <th>Manager</th>
        </tr>
        </thead>
        <tbody>
        <?php
    
        $count = count($klub); // hitung banyaknya klub dalam array 
        for ($i = 0; $i < $count; $i++) //loop through the array..
        {
            echo "<tr><td>".($i+1)."</td><td>" . $klub[$i]["nama"] . "</td><td>" . $klub[$i]["stadion"] . "</td><td>" .
                $klub[$i]["manager"] ;
        }
        ?>
        </tbody>
    </table>
    </div>
    <div class = inputan >
    <form action="c_klub.php" method="post" name="input" class="login-email">
        <div class="input-group">
            <h2>Tambahkan klub</h2>
            <p>Nama Klub : <input type="text" name="nama" required><br></p>
            <p>Stadion Asal :<input type="text" name="stadion" required><br></p>
            <p>Manager :<input type="text" name="manager" required><br></p>
            <input type="submit" name="input" value="Input" class="btn" >
        </div>
    </form>
</body>

</div>
</div>
</html>