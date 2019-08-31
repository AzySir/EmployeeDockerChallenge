<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
<body>
    <h1 style="color:#767676 !important;">List of Employees in our Database</h1>
        <?php 
            $host = 'mysql';
            $user = 'root';
            $pass = 'hello1';
            $db = 'employees';
            $conn = new mysqli($host, $user, $pass, $db);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            else {
                $sql = "SELECT * FROM employees";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    echo '<table class="table table-striped" style="margin:0 auto;">';
                    echo '<thead><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Department</th></tr></thead>';
                    echo '<tbody>';
                    while($row = $result->fetch_assoc()) {
                        echo  '<tr><td>' . $row["first_name"]. '</td><td>' . $row["last_name"]. '</td><td>' . $row["email"]. '</td><td>' . $row["department"] . '</td><td>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo "<h1>There are no employees in the database</h1>";
                }
                $conn->close();
            }   
            
        ?>
    </body>
</html>
