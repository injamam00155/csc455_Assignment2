<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href='' rel='stylesheet'>
    <link rel="stylesheet" href="admin.css">
</head>
<body oncontextmenu='return false' class='snippet-body'>
    <div id="wrapper">
        <h1>Customer Queries And Messages</h1>
    
        <table id="keywords" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th><span>First_Name</span></th>
                    <th><span>Last_Name</span></th>
                    <th><span>Email</span></th>
                    <th><span>Messages</span></th>
                  
                </tr>
            </thead>
            <tbody>
                <?php
				include 'database.php';
                $str = "SELECT * FROM `customer`";
         
                $result=$connection->query($str);
                if($result->num_rows >0){
                    while($row = $result->fetch_assoc()){
                        echo "<tr><td data-label='First_Name'>" .$row["fname"]. "</td><td data-label='Last_Name'> " . $row["lname"]."</td><td data-label='Email'> ". $row["email"]."</td><td data-label='Messages'> ". $row["messages"]."</td><tr> ";
						
                    }                   
                }else{
                    echo "no result";
                }
                $connection->close();
            ?>
            </tbody>
        </table>
        <div>
                 <a href="index.php" class="button-1 " style="text-decoration: none; color: black;">Back To Customer Message Page </a> 
        </div>
    </div>

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.14/js/jquery.tablesorter.min.js'></script>
    <script type='text/javascript'>$(function () {
            $('#keywords').tablesorter();
            });
            document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
    </script>
</body>
</html>