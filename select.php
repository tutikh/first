<?php

$link = mysqli_connect('localhost', 'root', '123', 'my_db')
or die("Ошибка " . mysqli_error($link));

$query ='select * from user';
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    $rows = mysqli_num_rows($result);
    echo "<table><tr><th>id</th><th>name</th><th>login</th><th>password</th></tr>";
    for ($i = 0; $i < $rows; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
        for ($j = 0; $j < 4; ++$j)
            echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
    echo "test";
}