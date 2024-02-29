<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Sinau Jquery</title>
</head>

<body>



<div class="wrap">
<form method="post" class="form-user">
<table>
<tr>
<td>Nama</td>
<td><input type="text" name="nama"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat"></td>
</tr>
<tr>
<td>Pekerjaan</td>
<td><input type="text" name="pekerjaan"></td>
</tr>
<tr>
<td></td>
<td><a class="tombol-simpan">Simpan</a></td>
</tr>
</table>
</form>

</div>






    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".tombol-simpan").click(function () {
                var data = $('.form-user').serialize();
                $.ajax({
                    type: 'POST',
                    url: "action.php",
                    data: data,
                    success: function () {
                        $('.tampildata').load("tampil.php");
                    }
                });
            });
        });
    </script>

</body>

</html>