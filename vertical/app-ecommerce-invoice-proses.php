<?php
session_start();
include 'koneksi.php';

if(isset($_POST['invoice'])){
    $userkar = $_SESSION['userID'];
    if(isset($_SESSION['custid']) && $_SESSION['custid']){
            $userkar = $_SESSION['userID'];
            $idcust = $_SESSION['custid'];
            $subtotall = $_SESSION['totalprice'];
            $totall= $_SESSION['totalbuy'];
            $getpoint = $_SESSION['getpoint'];
            $redempoint = $_SESSION['redpoint'];
            $jumstok = $_SESSION['jumstok'];
            $idprod = $_SESSION['idprod'];
            $methodPembayaran = 2;
            $sisamystok=$_SESSION['mystok'];
            $custpoint = $_SESSION['custPoint'];


            $query = mysqli_query($koneksi,"INSERT INTO transaksi (TanggalTransaksi,WaktuTransaksi,KaryawanID,PelangganID,SubtotalHarga,TotalHarga,GetPoint,RedeemPoint,PembayaranID)
                        VALUES (CURRENT_DATE,CURRENT_TIME,'$userkar','$idcust','$subtotall','$totall','$getpoint','$redempoint',$methodPembayaran)");
            
            $idTransaksi = mysqli_insert_id($koneksi);

            $produkpel= isset($_SESSION['shop'])? $_SESSION['shop'] : array();
            foreach($produkpel as $idcus){
                $iddprod=  $idcus['id'];
                $jumlah =$idcus['jumlah'];
                $hargaa=$idcus['price'];

            $querydetail = mysqli_query($koneksi,"INSERT INTO detailtransaksi(TransaksiID,ProdukID,Jumlah,Harga) VALUES ($idTransaksi,$iddprod,$jumlah,$hargaa)");
            }


            $updatepointcus = mysqli_query($koneksi,"UPDATE pelanggan SET Points=Points-'$custpoint' where PelangganID = '$idcust'");

            $updatepoint = mysqli_query($koneksi,"UPDATE pelanggan SET Nama = Nama, Email = Email,Telepon=Telepon,Alamat=Alamat,TanggalLahir=TanggalLahir,Gender=Gender,Points=Points+'$getpoint' where PelangganID ='$idcust'");

            $stokproduk = isset($_SESSION['shop'])? $_SESSION['shop'] : array();
            foreach($stokproduk as $stok){
                $iddstok = $stok['id'];
                 $jumstok = $_SESSION['jumstok'];
                 if($jumstok >  $sisamystok){
                    echo "<script>alert('Jumlah Produk Berlebihan');</script>";
                    echo "<script>window.location.href='app-ecommerce-product.php';</script>";
                 }else{
                 $updatepieces =mysqli_query($koneksi,"UPDATE produk SET stok=stok -'$jumstok' where ProdukID ='$iddstok'");
                  header("location: app-ecommerce-invoice.php?idTransaksi=$idTransaksi");
                 }
            }
           
            

           
            unset($_SESSION['custid']);
            unset($_SESSION['totalprice']);
            unset($_SESSION['totalbuy']);
            unset($_SESSION['getbuy']);
            unset($_SESSION['getpoint']);
            unset($_SESSION['redpoint']);
            unset($_SESSION['shop']);
            unset($_SESSION['jumstok']);
            unset($_SESSION['idprod']);
            unset($_SESSION['custPoint']);
            unset($_SESSION['mystok']);

    }else{
        echo "<script>alert('Silahkan isi  data customer terlebih dahulu');</script>";
        echo "<script>window.location.href='app-ecommerce-checkout.php';</script>";
        exit(); 
    }

}

if(isset($_POST['creditbut'])){
    $userkar = $_SESSION['userID'];
    if(isset($_SESSION['custid']) && $_SESSION['custid']){
            $userkar = $_SESSION['userID'];
            $idcust = $_SESSION['custid'];
            $subtotall = $_SESSION['totalprice'];
            $totall= $_SESSION['totalbuy'];
            $getpoint = $_SESSION['getpoint'];
            $redempoint = $_SESSION['redpoint'];
            $jumstok = $_SESSION['jumstok'];
            $idprod = $_SESSION['idprod'];
            $methodPembayaran = 1;
            $sisamystok=$_SESSION['mystok'];
            $custpoint = $_SESSION['custPoint'];


            $query = mysqli_query($koneksi,"INSERT INTO transaksi (TanggalTransaksi,WaktuTransaksi,KaryawanID,PelangganID,SubtotalHarga,TotalHarga,GetPoint,RedeemPoint,PembayaranID)
                        VALUES (CURRENT_DATE,CURRENT_TIME,'$userkar','$idcust','$subtotall','$totall','$getpoint','$redempoint',$methodPembayaran)");
            
            $idTransaksi = mysqli_insert_id($koneksi);

            $produkpel= isset($_SESSION['shop'])? $_SESSION['shop'] : array();
            $ambilidtransaksi = $query;
            foreach($produkpel as $idcus){
                $iddprod=  $idcus['id'];
                $jumlah =$idcus['jumlah'];
                $hargaa=$idcus['price'];

            $querydetail = mysqli_query($koneksi,"INSERT INTO detailtransaksi(TransaksiID,ProdukID,Jumlah,Harga) VALUES ($idTransaksi,$iddprod,$jumlah,$hargaa)");
            }


            $updatepointcus = mysqli_query($koneksi,"UPDATE pelanggan SET Points=Points-'$custpoint' where PelangganID = '$idcust'");

            $updatepoint = mysqli_query($koneksi,"UPDATE pelanggan SET Nama = Nama, Email = Email,Telepon=Telepon,Alamat=Alamat,TanggalLahir=TanggalLahir,Gender=Gender,Points=Points+'$getpoint' where PelangganID ='$idcust'");

            $stokproduk = isset($_SESSION['shop'])? $_SESSION['shop'] : array();
            foreach($$stokproduk as $stok){
                $iddstok = $stok['id'];
                $jumstok = $_SESSION['jumstok'];
                 if($jumstok > $sisamystok){
                    echo "<script>alert('Jumlah Produk Berlebihan');</script>";
                    echo "<script>window.location.href='app-ecommerce-product.php';</script>";
                 }else{
                 $updatepieces =mysqli_query($koneksi,"UPDATE produk SET stok=stok -'$jumstok' where ProdukID ='$iddstok'");
                 header("location: app-ecommerce-invoice.php?idTransaksi=$idTransaksi");
                 }
            }
           
            unset($_SESSION['custid']);
            unset($_SESSION['totalprice']);
            unset($_SESSION['totalbuy']);
            unset($_SESSION['getbuy']);
            unset($_SESSION['getpoint']);
            unset($_SESSION['redpoint']);
            unset($_SESSION['shop']);
            unset($_SESSION['jumstok']);
            unset($_SESSION['idprod']);
            unset($_SESSION['custPoint']);
            unset($_SESSION['mystok']);

    }else{
        echo "<script>alert('Silahkan isi  data customer terlebih dahulu');</script>";
        echo "<script>window.location.href='app-ecommerce-checkout.php';</script>";
        exit(); 
    }

}

?>  