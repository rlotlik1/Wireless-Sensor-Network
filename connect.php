<!DOCTYPE html>
<html>
    <head>
        <title>
            Pollution
        </title>
        
        <style type="text/css">
            
            body{
                background-image: url(p.jpg);
                background-repeat: :no-repeat;
                background-size:cover;
            }
            
            table{
                border-collapse: :collapse;
                width: 100%;
                color:#d96459;
                font-family: monospace;
                font-size:25px;
                text-align:left;
            }
            
            th{
                background-color:#d96459;
                color:white;
            }
            
            tr:nth-child(even)
            {
                background-color: #f2f2f2
            }
            
            tr:nth-child(odd)
            {
                background-color:#99ccff
            }
            
            
        </style>
    </head>
    
    <body>
        
       <center> <h1>Environment Monitoring System</h1></center>
        <table>
            <tr>
                <th>ID </th>
                <th>ArduinoID </th>
                <th>KitLocation </th>
                <th>GasSensor </th>
                <th>SoundSensor </th>
                <th>CurrentTime </th>
                <th>CurrentDate </th>
                <th>CurrentYear </th>
            </tr>
           
<?php
$conn=mysqli_connect('localhost','root','root','testdb');
if (!$conn)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

            
            
$result =mysqli_query($conn,"SELECT * FROM sensorData") or die("error");     

while($row=mysqli_fetch_array($result))
    
{
    echo "<tr><td>". $row["id"] ."</td><td>".$row["arduinoid"]."</td><td>".$row["kit_location"]."</td>
    <td>".$row["gas_sensor"]."</td>
    <td>".$row["sound_sensor"]."</td>
    <td>".$row["currenttime"]."</td>
    <td>".$row["currentdate"]."</td>
    <td>".$row["currentyear"]."</td>
    </tr>";
    
}
echo "</table>"

?>
            
</table>
</body>
</html>
