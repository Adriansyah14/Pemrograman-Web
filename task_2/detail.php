<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: small;
        }

        table{
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
            
        }
        
        th{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            border: 3px solid rgb(148, 115, 100);
            padding: 8px;
            background-color: rgb(244, 255, 145);
            color: rgb(0, 0, 0);
        }

        td{
            font-size: medium;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            border: 3px solid rgb(148, 115, 100);
        }

        #urutan{
            text-align: center;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        p{
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: large;
        }
        div.data{
            background-color: rgb(248, 248, 248);
            border: 5px outset rgb(143, 90, 17);
            top: 50%;
            width: 50%;
            margin: auto;
            padding: 12px;
        }
    </style>
    <title>Data Mahasiswa</title>
</head>

<body>
    <br>
    <div class="data">
        <p><b><u>Hasil Pencarian</b></p>

        <table>
            <tr class="kolom_judul">
                <th>No. </th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Program Studi</th>
            </tr>
    
            <tr>
                
                <td id="urutan">1.</td>
                <td><?php echo $_GET['fnama']; ?></td>
                <td><?php echo $_GET['fnim']; ?></td>
                <td><?php echo $_GET['fprodi']; ?></td>
            </tr>
        </table>
    </div>    
    
</body>
</html>