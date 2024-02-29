<?php
include 'connect.php';
?>

<table class="data">
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
    </tr>

    <?php
    $data = mysqli_query("select * from user")
    while($input_data=mysqli_fetch_array($data))


    ?>
</table>