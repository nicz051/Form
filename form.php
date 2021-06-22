

<html>

    <body>
    <form method="get">
    Name: <input type="text" name="name"><br>
    Age: <input type="text" name="age"><br>
    <input type="submit">

    </body>



</html>





<?php
	if (isset($_GET["name"]))
		{
			echo $_GET["name"];
			echo $_GET["age"];
		}
?>