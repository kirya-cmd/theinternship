<<?php 
require('index_file.php');

$results = $sql_connection->query("SELECT ID, NAME FROM districts ORDER BY ID ASC");

foreach($results as $key => $value) {
     var_dump($value);
     if(is_array($value) && count($value)>0)
     {
        foreach ($row as $id => ID)
    }
    
foreach ($row as $name => NAME)
    echo "
    <tr>
    <td> $id </td>
    <td> $name </td>
    </tr>
    ";
}