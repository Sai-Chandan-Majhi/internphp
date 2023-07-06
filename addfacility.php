<?php
    session_start();
    include 'conn.php';

    $sql_stu="select * from studentdeets";
    $result=mysqli_query($conn,$sql_stu);
?>
<table>
        <thead>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Action</th>
        </thead>
        <tbody>
<?php

    while($fetched_data=mysqli_fetch_row($result)){
        echo '<tr>';
        echo '<td>'.$fetched_data[2].'</td>';
        echo '<td>'.$fetched_data[3].'</td>';
        echo '<td>'.$fetched_data[4].'</td>';
        echo '<td>'.$fetched_data[5].'</td>';
        echo '<td>'.$fetched_data[6].'</td>';
        echo '<td><a href=edit.php?id='.$fetched_data[0].'>Edit</a></td>';
        echo '</tr>';
    }
?>
        </tbody>
</table>