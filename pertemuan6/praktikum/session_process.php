<?php
    //memulai session
    session_start();
    // membuat kondisi untuk menampilkan pesan
    if(isset($_GET['process'])){
        //tampil saat menghapus semua isi
        if($_GET['process']=='hapus_semua_session'){
        session_start();
        session_destroy();
        header("location:session_read.php");
        }

        // tampil saat menghapus session 1
        elseif($_GET['process']=='hapus_session1'){
        session_start();
        unset($_SESSION['session_tersimpan1']);
        header("location:session_read.php");
        }

        // tampil saat menghapus session 2
        elseif($_GET['process']=='hapus_session2'){
        session_start();
        unset($_SESSION['session_tersimpan2']);
        header("location:session_read.php");
        } 
    } elseif(isset($_POST)){
        session_start();
        // menyimpan session satu
        $_SESSION['session_tersimpan1'] = $_POST['kolom_input_session1'];
        // menyimpan session dua
        $_SESSION['session_tersimpan2'] = $_POST['kolom_input_session2'];
        //lokasi tujuan
        header("location:session_read.php");
    }
?>