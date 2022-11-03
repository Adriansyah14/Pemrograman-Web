<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSAT DATA</title>
    <style>
        #tabel{
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
            text-align: justify;
        }

        div.border_tabel{
            margin: auto;
            border: 10px outset rgb(48, 21, 146);
            top: 60%;
            width: 60%;
        }

        section.judul{
            font-size: large;
            text-align: center;
        }

        #form{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: medium;
            text-align: center;
        }

        body{
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: small;
        }
        button{
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: medium;
            color: rgba(70, 43, 4, 0.767);
            margin-left: 80%;
        }
        .resizedTextbox{
            width: 30px; 
            height: 10px
        }

    </style>
</head>
<body>
    <section class="judul">
            <p font-size=20px><b>DATA MAHASISWA</b></p>
    </section>
<br>
    <div class="border_tabel">
        <h2 id="form">Input Data</h2>
        <form action="detail.php" method="GET">
            <table id="tabel">
                <tr>
                    <th>Nama: <input type="text" name="fnama"> </th> 
                </tr>

                <tr>
                    <th>NIM: <input type="text" name="fnim"> </th>
                </tr>

                <tr>
                    <th>Prodi: <input type="text" name="fprodi"> </th>
                </tr>
            </table>
            <input type="submit" value="Submit">
        </form>
    </div>

    <?php 
    if(isset($_GET['submit']))
    {
        $fnama = $_GET['fnama'];
        $fnim = $_GET['fnim'];
        $fprodi = $_GET['fprodi'];
    }
?>
   
</body>

</html>