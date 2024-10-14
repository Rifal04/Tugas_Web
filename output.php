<html>
    <head>
    <title>Tugas Web 1</title>
    </head>
    
    <body style= "background: #456aa9;">
        <center>
        <image src="image/icon.png" alt="Logo Makrab" width= 150; height=150;>
        <h2 style= "margin-top: 5%">Data Registrasi Panitia Makrab</h2>
        </center>

        <div style="margin-top: 5vh; margin-left: 65vh;">
        <table border=1 width=400>
        <tr>
            <td>Nama Lengkap</td>
            <td><?php echo $_GET["name"]; ?></td>
        </tr>
        <tr>
            <td>NPM</td>
            <td><?php echo $_GET["npm"]; ?></td>
        </tr>
        <tr>
            <td>Divisi</td>
            <td><?php echo $_GET["Divisi"]; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $_GET["Jenis_Kelamin"]; ?></td>
        </tr>
        
        </table>
        </div>
    </body>
</html>