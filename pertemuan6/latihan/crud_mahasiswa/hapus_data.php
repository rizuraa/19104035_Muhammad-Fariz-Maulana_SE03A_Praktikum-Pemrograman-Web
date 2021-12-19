<?php 
    include 'connection.php';
    //memanggil file create massage
    include 'create_message.php';
    //query untuk menghapus data 
    $sql = "DELETE FROM tb_data WHERE id=".$_GET['mahasiswa_id'];

    //cek kondisi untuk eksekusi
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        //memberikan notifkasi berhasil menghapus data
        create_message('Hapus data berhasil','success','check');
        header("location:index.php");
        exit();
    }else{
        $conn->close();
        //menampilkan notifikasi gagal menghapus data 
        create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
        header("location:index.php");
        exit();
    }
?>