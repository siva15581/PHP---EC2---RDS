<html>
<body>
<form action="<?PHP echo $_SERVER['SCRIPT_NAME'] ?>" method="POST">
  <table border="0">
    <tr>
      <td>NAME</td>
      <td>ADDRESS</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="NAME" maxlength="45" size="30" />
      </td>
      <td>
        <input type="text" name="ADDRESS" maxlength="90" size="60" />
      </td>
      <td>
        <input type="submit" value="Add Data" />
      </td>
    </tr>
  </table>

<?php

define('DB_SERVER', 'employeedet.cqjrmguzefqi.us-east-1.rds.amazonaws.com');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'admin123');
define('DB_DATABASE', 'employee');

        $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
        if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
        $database = mysqli_select_db($connection, DB_DATABASE);

        $checktable = mysqli_query($connection,
              "select * from information_schema.tables where table_name ='Employee' and table_schema ='employee'");

        if(mysqli_num_rows($checktable) > 0){
        $employee_name = htmlentities($_POST['NAME']);
        $employee_address = htmlentities($_POST['ADDRESS']);
          if ((strlen($employee_name)>1) && (strlen($employee_address)>1)) {
                $query = "INSERT INTO Employee (NAME, ADDRESS) VALUES ('$employee_name', '$employee_address');";

                if(!mysqli_query($connection, $query)){
                        echo("Error adding employee data");
                }
//                echo "Data Inserted";
          }
        }
        else
        {
                echo "Not responding";
        }

?>

<!-- Display table data. -->
<br>
table border="1" cellpadding="2" cellspacing="2">
  <tr>
    <td>NAME</td>
    <td>ADDRESS</td>
  </tr>

<?php

$result = mysqli_query($connection, "SELECT * FROM Employee");

while($query_data = mysqli_fetch_row($result)) {
  echo "<tr>";
  echo "<td>",$query_data[0], "</td>",
       "<td>",$query_data[1], "</td>";
  echo "</tr>";
}
?>

</table>

</body>
</form>