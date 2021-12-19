<?php 
    //memanggil file koneksi 
    include 'connection.php';

    //memanggil file message
    include 'create_message.php';

    //binding form dengan kolom pada table
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $foto = $_POST['foto'];


    if (isset ($_POST['mahasiswa_id'])) {
        //query untuk update 
        $sql = "UPDATE tb_data SET nama = '$nama', kelas = '$kelas', alamat = '$alamat', foto = '$foto' WHERE id=".$_POST['mahasiswa_id'];

        //eksekusi query update
        $edit = $conn->query($sql);

        //cek kondisi saat edit data 
        if ($edit) {
            $conn->close();
            //memanggil pesan ubah data berhasil
            create_message('Ubah data berhasil','success','check');
            header('location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }else{
            $conn->close();
            //memanggil pesan ubah data gagal
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            header('location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }
    }else{
        //query untuk insert data 
        $sql = "INSERT INTO tb_data(nama, kelas, alamat, foto) VALUES ('$nama', '$kelas', '$alamat', '$foto')";
        //eksekusi query insert data
        $add = $conn->query($sql);

        //cek kondisi query insert data berhasil atau tidak
        if($add) {
            $conn->close();
            //memanggil pesan berhasil input data
            create_message('Simpan data berhasil','success','check');
            header('location:'.$_SERVER['HTTP_REFERER']);
            exit();
        } else {            
            $conn->close();
            //memanggil pesan gagal input data 
            create_message("Error: " . $sql . "<br>" . $conn->error, "danger","warning");
            header('location:'.$_SERVER['HTTP_REFERER']);
            exit();
        }
    }

    
    

?>