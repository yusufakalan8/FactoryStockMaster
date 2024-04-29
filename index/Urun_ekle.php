<?php

session_start();

if (!isset($_SESSION["admin_id"])) {
    header("Location: index.php"); // Oturum açılmamışsa veya oturumda admin kimliği yoksa giriş sayfasına yönlendir.
    exit;
}
if(isset($_POST['logout'])){
    session_destroy();
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Serkeft</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">

                <div class="d-flex align-items-left">
                    <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                </div>

                <div class="d-flex align-items-center">



                    

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-bell"></i>
                            <span class="badge badge-danger badge-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small"> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="assets/images/users/avatar-2.jpg"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Samuel Coverdale</h6>
                                            <p class="font-size-12 mb-1">You have new follower on Instagram</p>
                                            <p class="font-size-12 mb-0 text-muted"><i
                                                    class="mdi mdi-clock-outline"></i> 2 min ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-success rounded-circle">
                                                <i class="mdi mdi-cloud-download-outline"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Download Available !</h6>
                                            <p class="font-size-12 mb-1">Latest version of admin is now available.
                                                Please download here.</p>
                                            <p class="font-size-12 mb-0 text-muted"><i
                                                    class="mdi mdi-clock-outline"></i> 4 hours ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="assets/images/users/avatar-3.jpg"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Victoria Mendis</h6>
                                            <p class="font-size-12 mb-1">Just upgraded to premium account.</p>
                                            <p class="font-size-12 mb-0 text-muted"><i
                                                    class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-down-circle mr-1"></i> Load More..
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-3.jpg"
                                alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1">Jamie D.</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                <span>Inbox</span>
                                <span>
                                    <span class="badge badge-pill badge-info">3</span>
                                </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                <span>Profile</span>
                                <span>
                                    <span class="badge badge-pill badge-warning">1</span>
                                </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                Settings
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                <span>Lock Account</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div class="navbar-brand-box">
                    <a href="index.html" class="logo">
                        <i class="mdi mdi-alpha-x-circle"></i>
                        <span>
                            Xacton
                        </span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="index.php" class="waves-effect"><i class="feather-airplay"></i><span
                                    class="badge badge-pill badge-primary float-right">7</span><span>Anasayfa</span></a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="feather-copy"></i><span>müşterliler</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="musteri_liste.php">Musteriler</a></li>
                                <li><a href="Musteri_ekle.php">musteri ekle</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="feather-copy"></i><span>mamüller</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="mamul_liste.php">Mamüller</a></li>
                                <li><a href="Urun_ekle.php">mamül ekle</a></li>
                                <li><a href="recete_liste.php">mamül üretim listesi</a></li>
                                <li><a href="Uretim.php">Mamül üretim girişi</a></li>
                                <li><a href="mamul_iade.php">mamül iade girişi</a></li>
                                <li><a href="m_transfer.php">mamül depo transferi</a></li>
                                <li><a href="satis_hareket.php">Mamül stok hareketleri</a></li>
                                <li><a href="Satis.php">Satış faturası girisi</a></li>
                                <li><a href="satis_ft.php">satış faturaları</a></li>
                                <li><a href="m_iade_liste.php">mamül iade liste</a></li>
                                <li><a href="m_transfer_liste.php">mamül Transfer liste</a></li>

                                

                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="feather-copy"></i><span>ham maddeler</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="hm_liste.php">Ham maddeler</a></li>
                                <li><a href="hammadde_ekle.php">ham madde ekle</a></li>
                                <li><a href="alis_ft.php">alış faturaları</a></li>
                                <li><a href="hm_iade.php">ham madde iade girişi</a></li>
                                <li><a href="hm_iade_liste.php">hammadde iadeler</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="feather-copy"></i><span>yarı mamüller</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                            <li><a href="ym_liste.php">YarıMamüller</a></li>
                                <li><a href="yarimamul.php">yari mamül girişi</a></li>
                                <li><a href="ym_recete_liste.php">reçeteler</a></li>
                                <li><a href="yarimamul_uretim.php">yarı mamul üretim</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="siparisler.php" class=" waves-effect"><i
                                    class="feather-calendar"></i><span>siparişler</span></a>
                        </li>

                        
                        

                    </ul>
                    <li>
                        <form method="post" action="">
                        <input type="submit" name="logout" value="Çıkış Yap">
                        </form></li>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
<!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                <form method="post" action="" >
        <div class="col-xl-6">
        <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">Mamül kayıt</h4>
                                

                                    <div class="form-group">
                                        <label>mamül adı</label>
                                        <input type="text" class="form-control"  name="Urun_Adi" id="defaultconfig" />
                                    </div>

                                    <div class="form-group">
                                        <label>stok bilgisi</label>
                                        <input type="text"  name="Urun_Stok" class="form-control" id="thresholdconfig" />
                                    </div>
                                    <div class="form-group">
                                        <label>Fiyat</label>
                                        <input type="text"  name="Urun_Fiyat" class="form-control" id="thresholdconfig" />
                                    </div>

                                    <div class="form-group">
                                        <label>Barkod</label>
                                        <input type="text" class="form-control"  name="Barkod" id="placement" />
                                    </div>
                                    <label>Reçete Bilgileri</label>
                                    <div class="form-group">
                                                <label>Hammaddeler</label>
                                                <textarea class="form-control" name="Hammadde_Bilgileri"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Yarımamuller</label>
                                                <textarea class="form-control" name="Yarimamul_Bilgileri"></textarea>
                                            </div>
                                    
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Kaydet</button>
                                   
                    
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
</div>
</form>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                
                                include("Baglan.php"); 
                                
                                    // Ana ürün ekleme
                                    $urunAdi = $_POST['Urun_Adi'];
                                    $urunFiyati = $_POST['Urun_Fiyat'];
                                    $stokAdeti = $_POST['Urun_Stok'];
                                    $barkod = $_POST['Barkod'];
                                    
                                    $hmBilgi = $_POST['Hammadde_Bilgileri'] ;
                                    $ymBilgi= $_POST['Yarimamul_Bilgileri'];

                                    // Mevcut ürünleri kontrol et
                                    $sqlUrunKontrol = "SELECT * FROM urunler WHERE Barkod = '$barkod'";
                                    $result = $baglan->query($sqlUrunKontrol);

                                    if ($result->num_rows > 0) {
                                        // Ürün zaten var, stok miktarını artır
                                        $row = $result->fetch_assoc();
                                        $stokAdeti += $row["Urun_Stok"];

                                        $sqlUrunGuncelle = "UPDATE urunler SET Urun_Stok = $stokAdeti WHERE Barkod = '$barkod'";
                                        if ($baglan->query($sqlUrunGuncelle) !== TRUE) {
                                            echo "Ürün güncelleme hatası: " . $baglan->error;
                                        }
                                    } else {
                                        // Yeni ürün ekle
                                        
                                        
                                        $sqlAnaUrunEkle = "INSERT INTO urunler (Urun_Adi, Urun_Stok, Urun_Fiyat, Barkod, Hammaddeler, Yarimamuller) VALUES ('$urunAdi', $stokAdeti, $urunFiyati, '$barkod', '$hmBilgi', '$ymBilgi')";
                                        if ($baglan->query($sqlAnaUrunEkle) !== TRUE) {
                                            echo "Ana ürün ekleme hatası: " . $baglan->error;
                                        }
                                        
        

        
                                    }
                                


                            }
                            ?>
 

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2023 © EVO
                        </div>

                    </div>
                </div>
            </footer>


        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/simplebar.min.js"></script>

    <!-- third party js -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap4.js"></script>
    <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/datatables/buttons.html5.min.js"></script>
    <script src="../plugins/datatables/buttons.flash.min.js"></script>
    <script src="../plugins/datatables/buttons.print.min.js"></script>
    <script src="../plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="../plugins/datatables/dataTables.select.min.js"></script>
    <script src="../plugins/datatables/pdfmake.min.js"></script>
    <script src="../plugins/datatables/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="assets/pages/datatables-demo.js"></script>


    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>

</html>