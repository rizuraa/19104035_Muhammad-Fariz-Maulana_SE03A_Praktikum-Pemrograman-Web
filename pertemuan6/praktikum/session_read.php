<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <form action="session_process.php" method="post">
        <input type="text" name="kolom_input_session1" require> <br>
        <input type="text" name="kolom_input_session2" require> <br>
        <br>
        <button type="submit">Simpan</button>
    </form>

    <?php session_start() ?>
    Session yang tersimpan 1 : <?= isset ($_SESSION['session_tersimpan1'])?$_SESSION['session_tersimpan1']:'Session 1 Kosong' ?> <br>    
    Session yang tersimpan 2 : <?= isset ($_SESSION['session_tersimpan2']) ? $_SESSION['session_tersimpan2'] : 'Session 2 Kosong' ?>

    <br>
    <a href="session_process.php?process=hapus_session1"><button>Hapus Session 1</button></a>
    <br>
    <a href="session_process.php?process=hapus_session2"><button>Hapus Session 2</button></a>
    <br>
    <a href="session_process.php?process=hapus_semua_session"><button>hapus semua session</button></a>
</body>
</html>