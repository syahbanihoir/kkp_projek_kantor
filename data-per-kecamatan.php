<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        include("index.php");
    }
    else {
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="asset/style/styles.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <table>
            <tr>
                <td><img src="asset/image/logo_kota_adminis_jaksel.png" alt="Logo Kota Administrasi Jakarta Selatan"
                        class="featured-image"></td>
                <td>
                    <h2>DATA BERSIH KASUS DEMAM BERDARAH <br>KOTA ADMINISTRASI JAKARTA SELATAN</h2>
                </td>
            </tr>
        </table>
    </header>

    <section>

        <!-- -------------->
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="data-per-kelurahan.php">Per kelurahan</a></li>
                <li><a href="data-per-kecamatan.php">Per kecamatan</a></li>
                <li><a href="seluruhdata.php">Seluruh Wilayah Jakarta Selatan</a>
                <li><a href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>
        <!-- -------------->

        <article>


            <?php
include_once "koneksi.php";
    
    ?>
            <div class=" card" style="margin-bottom: 10px; padding: 2px;">
                <p style="font-size:18px; font-weight: bold; padding-left: 5px; margin-top: 10px; margin-bottom: 10px;">
                    Per Kecamatan</p>
            </div>

            <div class="card">
                <div style="overflow-x:auto;">
                    <table class="tabel-layout" border="1" cellpadding="5" class="tab">
                        <h3 style="font-size: 15px; text-align: center; margin-top: 0;">DATA BERSIH KASUS DEMAM
                            BERDARAH
                            PERKECAMATAN
                        </h3>

                        <button class="btn-seluruh">
                            <a target="_blank" href="export_excel_perkecamatan.php"">Download</a>
            </button>
                                <tr class=" k">
                                <th>NO</th>
                                <th>Kecamatan</th>
                                <th>Januari</th>
                                <th>Februari</th>
                                <th>Maret</th>
                                <th>April</th>
                                <th>Mei</th>
                                <th>Juni</th>
                                <th>Juli</th>
                                <th>Agustus</th>
                                <th>September</th>
                                <th>Oktober</th>
                                <th>November</th>
                                <th>Desember</th>
                                <th align=" center">Jumlah</th>

                                </tr>
                                <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_cilandak";

$total = mysqli_query($conn, $q);
while ($row = mysqli_fetch_array($total)) {
    $jumlah_jan = $row['jumlah_januari'];
    $jumlah_feb = $row['jumlah_februari'];
    $jumlah_mar = $row['jumlah_maret'];
    $jumlah_apr = $row['jumlah_april'];
    $jumlah_mei = $row['jumlah_mei'];
    $jumlah_juni = $row['jumlah_juni'];
    $jumlah_juli = $row['jumlah_juli'];
    $jumlah_ags = $row['jumlah_ags'];
    $jumlah_september = $row['jumlah_september'];
    $jumlah_oktober = $row['jumlah_oktober'];
    $jumlah_november = $row['jumlah_november'];
    $jumlah_des = $row['jumlah_desember'];
    $jumlah_seluruh = $jumlah_jan +  $jumlah_feb  +   $jumlah_mar +  $jumlah_apr+
    $jumlah_mei+ $jumlah_juni+   $jumlah_juli +   $jumlah_ags +
     $jumlah_september +  $jumlah_oktober + $jumlah_november + $jumlah_des  ;
?>
                                <tr>
                                    <td>1</td>
                                    <td>cilandak</td>
                                    <td><?php echo $jumlah_jan ?></td>
                                    <td><?php echo $jumlah_feb ?></td>
                                    <td><?php echo $jumlah_mar ?></td>
                                    <td><?php echo $jumlah_apr ?></td>
                                    <td><?php echo $jumlah_mei ?></td>
                                    <td><?php echo $jumlah_juni ?></td>
                                    <td><?php echo $jumlah_juli ?></td>
                                    <td><?php echo $jumlah_ags ?></td>
                                    <td><?php echo $jumlah_september ?></td>
                                    <td><?php echo $jumlah_oktober ?></td>
                                    <td><?php echo $jumlah_november ?></td>
                                    <td><?php echo $jumlah_des ?></td>
                                    <td class="a"><?php echo $jumlah_seluruh ?></td>
                                    <?php } ?>
                                </tr>

                                <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_pesanggrahan";

$total = mysqli_query($conn, $q);
while ($row = mysqli_fetch_array($total)) {
    $jumlah_jan = $row['jumlah_januari'];
    $jumlah_feb = $row['jumlah_februari'];
    $jumlah_mar = $row['jumlah_maret'];
    $jumlah_apr = $row['jumlah_april'];
    $jumlah_mei = $row['jumlah_mei'];
    $jumlah_juni = $row['jumlah_juni'];
    $jumlah_juli = $row['jumlah_juli'];
    $jumlah_ags = $row['jumlah_ags'];
    $jumlah_september = $row['jumlah_september'];
    $jumlah_oktober = $row['jumlah_oktober'];
    $jumlah_november = $row['jumlah_november'];
    $jumlah_des = $row['jumlah_desember'];
    $jumlah_seluruh = $jumlah_jan +  $jumlah_feb  +   $jumlah_mar +  $jumlah_apr+
    $jumlah_mei+ $jumlah_juni+   $jumlah_juli +   $jumlah_ags +
     $jumlah_september +  $jumlah_oktober + $jumlah_november + $jumlah_des  ;
?>
                                <tr>
                                    <td>2</td>
                                    <td>pesanggrahan</td>
                                    <td><?php echo $jumlah_jan ?></td>
                                    <td><?php echo $jumlah_feb ?></td>
                                    <td><?php echo $jumlah_mar ?></td>
                                    <td><?php echo $jumlah_apr ?></td>
                                    <td><?php echo $jumlah_mei ?></td>
                                    <td><?php echo $jumlah_juni ?></td>
                                    <td><?php echo $jumlah_juli ?></td>
                                    <td><?php echo $jumlah_ags ?></td>
                                    <td><?php echo $jumlah_september ?></td>
                                    <td><?php echo $jumlah_oktober ?></td>
                                    <td><?php echo $jumlah_november ?></td>
                                    <td><?php echo $jumlah_des ?></td>
                                    <td class="a"><?php echo $jumlah_seluruh ?></td>
                                    <?php } ?>

                                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_jagakarsa";

$total = mysqli_query($conn, $q);
while ($row = mysqli_fetch_array($total)) {
    $jumlah_jan = $row['jumlah_januari'];
    $jumlah_feb = $row['jumlah_februari'];
    $jumlah_mar = $row['jumlah_maret'];
    $jumlah_apr = $row['jumlah_april'];
    $jumlah_mei = $row['jumlah_mei'];
    $jumlah_juni = $row['jumlah_juni'];
    $jumlah_juli = $row['jumlah_juli'];
    $jumlah_ags = $row['jumlah_ags'];
    $jumlah_september = $row['jumlah_september'];
    $jumlah_oktober = $row['jumlah_oktober'];
    $jumlah_november = $row['jumlah_november'];
    $jumlah_des = $row['jumlah_desember'];
    $jumlah_seluruh = $jumlah_jan +  $jumlah_feb  +   $jumlah_mar +  $jumlah_apr+
    $jumlah_mei+ $jumlah_juni+   $jumlah_juli +   $jumlah_ags +
     $jumlah_september +  $jumlah_oktober + $jumlah_november + $jumlah_des  ;
?>
                                <tr>
                                    <td>3</td>
                                    <td>jagakarsa</td>
                                    <td><?php echo $jumlah_jan ?></td>
                                    <td><?php echo $jumlah_feb ?></td>
                                    <td><?php echo $jumlah_mar ?></td>
                                    <td><?php echo $jumlah_apr ?></td>
                                    <td><?php echo $jumlah_mei ?></td>
                                    <td><?php echo $jumlah_juni ?></td>
                                    <td><?php echo $jumlah_juli ?></td>
                                    <td><?php echo $jumlah_ags ?></td>
                                    <td><?php echo $jumlah_september ?></td>
                                    <td><?php echo $jumlah_oktober ?></td>
                                    <td><?php echo $jumlah_november ?></td>
                                    <td><?php echo $jumlah_des ?></td>
                                    <td class="a"><?php echo $jumlah_seluruh ?></td>
                                    <?php } ?>

                                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_kebayoran_baru";

$total = mysqli_query($conn, $q);
while ($row = mysqli_fetch_array($total)) {
    $jumlah_jan = $row['jumlah_januari'];
    $jumlah_feb = $row['jumlah_februari'];
    $jumlah_mar = $row['jumlah_maret'];
    $jumlah_apr = $row['jumlah_april'];
    $jumlah_mei = $row['jumlah_mei'];
    $jumlah_juni = $row['jumlah_juni'];
    $jumlah_juli = $row['jumlah_juli'];
    $jumlah_ags = $row['jumlah_ags'];
    $jumlah_september = $row['jumlah_september'];
    $jumlah_oktober = $row['jumlah_oktober'];
    $jumlah_november = $row['jumlah_november'];
    $jumlah_des = $row['jumlah_desember'];
    $jumlah_seluruh = $jumlah_jan +  $jumlah_feb  +   $jumlah_mar +  $jumlah_apr+
    $jumlah_mei+ $jumlah_juni+   $jumlah_juli +   $jumlah_ags +
     $jumlah_september +  $jumlah_oktober + $jumlah_november + $jumlah_des  ;
?>
                                <tr>
                                    <td>4</td>
                                    <td>kebayoran baru</td>
                                    <td><?php echo $jumlah_jan ?></td>
                                    <td><?php echo $jumlah_feb ?></td>
                                    <td><?php echo $jumlah_mar ?></td>
                                    <td><?php echo $jumlah_apr ?></td>
                                    <td><?php echo $jumlah_mei ?></td>
                                    <td><?php echo $jumlah_juni ?></td>
                                    <td><?php echo $jumlah_juli ?></td>
                                    <td><?php echo $jumlah_ags ?></td>
                                    <td><?php echo $jumlah_september ?></td>
                                    <td><?php echo $jumlah_oktober ?></td>
                                    <td><?php echo $jumlah_november ?></td>
                                    <td><?php echo $jumlah_des ?></td>
                                    <td class="a"><?php echo $jumlah_seluruh ?></td>
                                    <?php } ?>


                                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_kebayoran_lama";

$total = mysqli_query($conn, $q);
while ($row = mysqli_fetch_array($total)) {
    $jumlah_jan = $row['jumlah_januari'];
    $jumlah_feb = $row['jumlah_februari'];
    $jumlah_mar = $row['jumlah_maret'];
    $jumlah_apr = $row['jumlah_april'];
    $jumlah_mei = $row['jumlah_mei'];
    $jumlah_juni = $row['jumlah_juni'];
    $jumlah_juli = $row['jumlah_juli'];
    $jumlah_ags = $row['jumlah_ags'];
    $jumlah_september = $row['jumlah_september'];
    $jumlah_oktober = $row['jumlah_oktober'];
    $jumlah_november = $row['jumlah_november'];
    $jumlah_des = $row['jumlah_desember'];
    $jumlah_seluruh = $jumlah_jan +  $jumlah_feb  +   $jumlah_mar +  $jumlah_apr+
    $jumlah_mei+ $jumlah_juni+   $jumlah_juli +   $jumlah_ags +
     $jumlah_september +  $jumlah_oktober + $jumlah_november + $jumlah_des  ;
?>
                                <tr>
                                    <td>5</td>
                                    <td>Kebayoran lama</td>
                                    <td><?php echo $jumlah_jan ?></td>
                                    <td><?php echo $jumlah_feb ?></td>
                                    <td><?php echo $jumlah_mar ?></td>
                                    <td><?php echo $jumlah_apr ?></td>
                                    <td><?php echo $jumlah_mei ?></td>
                                    <td><?php echo $jumlah_juni ?></td>
                                    <td><?php echo $jumlah_juli ?></td>
                                    <td><?php echo $jumlah_ags ?></td>
                                    <td><?php echo $jumlah_september ?></td>
                                    <td><?php echo $jumlah_oktober ?></td>
                                    <td><?php echo $jumlah_november ?></td>
                                    <td><?php echo $jumlah_des ?></td>
                                    <td class="a"><?php echo $jumlah_seluruh ?></td>
                                    <?php } ?>


                                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_mampang_prapatan";

$total = mysqli_query($conn, $q);
while ($row = mysqli_fetch_array($total)) {
    $jumlah_jan = $row['jumlah_januari'];
    $jumlah_feb = $row['jumlah_februari'];
    $jumlah_mar = $row['jumlah_maret'];
    $jumlah_apr = $row['jumlah_april'];
    $jumlah_mei = $row['jumlah_mei'];
    $jumlah_juni = $row['jumlah_juni'];
    $jumlah_juli = $row['jumlah_juli'];
    $jumlah_ags = $row['jumlah_ags'];
    $jumlah_september = $row['jumlah_september'];
    $jumlah_oktober = $row['jumlah_oktober'];
    $jumlah_november = $row['jumlah_november'];
    $jumlah_des = $row['jumlah_desember'];
    $jumlah_seluruh = $jumlah_jan +  $jumlah_feb  +   $jumlah_mar +  $jumlah_apr+
    $jumlah_mei+ $jumlah_juni+   $jumlah_juli +   $jumlah_ags +
     $jumlah_september +  $jumlah_oktober + $jumlah_november + $jumlah_des  ;
?>
                                <tr>
                                    <td>6</td>
                                    <td>mampang prapatan</td>
                                    <td><?php echo $jumlah_jan ?></td>
                                    <td><?php echo $jumlah_feb ?></td>
                                    <td><?php echo $jumlah_mar ?></td>
                                    <td><?php echo $jumlah_apr ?></td>
                                    <td><?php echo $jumlah_mei ?></td>
                                    <td><?php echo $jumlah_juni ?></td>
                                    <td><?php echo $jumlah_juli ?></td>
                                    <td><?php echo $jumlah_ags ?></td>
                                    <td><?php echo $jumlah_september ?></td>
                                    <td><?php echo $jumlah_oktober ?></td>
                                    <td><?php echo $jumlah_november ?></td>
                                    <td><?php echo $jumlah_des ?></td>
                                    <td class="a"><?php echo $jumlah_seluruh ?></td>
                                    <?php } ?>


                                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_pancoran";

$total = mysqli_query($conn, $q);
while ($row = mysqli_fetch_array($total)) {
    $jumlah_jan = $row['jumlah_januari'];
    $jumlah_feb = $row['jumlah_februari'];
    $jumlah_mar = $row['jumlah_maret'];
    $jumlah_apr = $row['jumlah_april'];
    $jumlah_mei = $row['jumlah_mei'];
    $jumlah_juni = $row['jumlah_juni'];
    $jumlah_juli = $row['jumlah_juli'];
    $jumlah_ags = $row['jumlah_ags'];
    $jumlah_september = $row['jumlah_september'];
    $jumlah_oktober = $row['jumlah_oktober'];
    $jumlah_november = $row['jumlah_november'];
    $jumlah_des = $row['jumlah_desember'];
    $jumlah_seluruh = $jumlah_jan +  $jumlah_feb  +   $jumlah_mar +  $jumlah_apr+
    $jumlah_mei+ $jumlah_juni+   $jumlah_juli +   $jumlah_ags +
     $jumlah_september +  $jumlah_oktober + $jumlah_november + $jumlah_des  ;
?>
                                <tr>
                                    <td>7</td>
                                    <td>pancoran</td>
                                    <td><?php echo $jumlah_jan ?></td>
                                    <td><?php echo $jumlah_feb ?></td>
                                    <td><?php echo $jumlah_mar ?></td>
                                    <td><?php echo $jumlah_apr ?></td>
                                    <td><?php echo $jumlah_mei ?></td>
                                    <td><?php echo $jumlah_juni ?></td>
                                    <td><?php echo $jumlah_juli ?></td>
                                    <td><?php echo $jumlah_ags ?></td>
                                    <td><?php echo $jumlah_september ?></td>
                                    <td><?php echo $jumlah_oktober ?></td>
                                    <td><?php echo $jumlah_november ?></td>
                                    <td><?php echo $jumlah_des ?></td>
                                    <td class="a"><?php echo $jumlah_seluruh ?></td>
                                    <?php } ?>


                                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_pasar_minggu";

$total = mysqli_query($conn, $q);
while ($row = mysqli_fetch_array($total)) {
    $jumlah_jan = $row['jumlah_januari'];
    $jumlah_feb = $row['jumlah_februari'];
    $jumlah_mar = $row['jumlah_maret'];
    $jumlah_apr = $row['jumlah_april'];
    $jumlah_mei = $row['jumlah_mei'];
    $jumlah_juni = $row['jumlah_juni'];
    $jumlah_juli = $row['jumlah_juli'];
    $jumlah_ags = $row['jumlah_ags'];
    $jumlah_september = $row['jumlah_september'];
    $jumlah_oktober = $row['jumlah_oktober'];
    $jumlah_november = $row['jumlah_november'];
    $jumlah_des = $row['jumlah_desember'];
    $jumlah_seluruh = $jumlah_jan +  $jumlah_feb  +   $jumlah_mar +  $jumlah_apr+
    $jumlah_mei+ $jumlah_juni+   $jumlah_juli +   $jumlah_ags +
     $jumlah_september +  $jumlah_oktober + $jumlah_november + $jumlah_des  ;
?>
                                <tr>
                                    <td>8</td>
                                    <td>pasar minggu</td>
                                    <td><?php echo $jumlah_jan ?></td>
                                    <td><?php echo $jumlah_feb ?></td>
                                    <td><?php echo $jumlah_mar ?></td>
                                    <td><?php echo $jumlah_apr ?></td>
                                    <td><?php echo $jumlah_mei ?></td>
                                    <td><?php echo $jumlah_juni ?></td>
                                    <td><?php echo $jumlah_juli ?></td>
                                    <td><?php echo $jumlah_ags ?></td>
                                    <td><?php echo $jumlah_september ?></td>
                                    <td><?php echo $jumlah_oktober ?></td>
                                    <td><?php echo $jumlah_november ?></td>
                                    <td><?php echo $jumlah_des ?></td>
                                    <td class="a"><?php echo $jumlah_seluruh ?></td>
                                    <?php } ?>


                                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_setia_budi";

$total = mysqli_query($conn, $q);
while ($row = mysqli_fetch_array($total)) {
    $jumlah_jan = $row['jumlah_januari'];
    $jumlah_feb = $row['jumlah_februari'];
    $jumlah_mar = $row['jumlah_maret'];
    $jumlah_apr = $row['jumlah_april'];
    $jumlah_mei = $row['jumlah_mei'];
    $jumlah_juni = $row['jumlah_juni'];
    $jumlah_juli = $row['jumlah_juli'];
    $jumlah_ags = $row['jumlah_ags'];
    $jumlah_september = $row['jumlah_september'];
    $jumlah_oktober = $row['jumlah_oktober'];
    $jumlah_november = $row['jumlah_november'];
    $jumlah_des = $row['jumlah_desember'];
    $jumlah_seluruh = $jumlah_jan +  $jumlah_feb  +   $jumlah_mar +  $jumlah_apr+
    $jumlah_mei+ $jumlah_juni+   $jumlah_juli +   $jumlah_ags +
     $jumlah_september +  $jumlah_oktober + $jumlah_november + $jumlah_des  ;
?>
                                <tr>
                                    <td>9</td>
                                    <td>setia budi</td>
                                    <td><?php echo $jumlah_jan ?></td>
                                    <td><?php echo $jumlah_feb ?></td>
                                    <td><?php echo $jumlah_mar ?></td>
                                    <td><?php echo $jumlah_apr ?></td>
                                    <td><?php echo $jumlah_mei ?></td>
                                    <td><?php echo $jumlah_juni ?></td>
                                    <td><?php echo $jumlah_juli ?></td>
                                    <td><?php echo $jumlah_ags ?></td>
                                    <td><?php echo $jumlah_september ?></td>
                                    <td><?php echo $jumlah_oktober ?></td>
                                    <td><?php echo $jumlah_november ?></td>
                                    <td><?php echo $jumlah_des ?></td>
                                    <td class="a"><?php echo $jumlah_seluruh ?></td>
                                    <?php } ?>


                                    <?php
            $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS 
    jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept)
     AS jumlah_september,SUM(okt) AS jumlah_oktober,
    SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM kecamatan_tebet";

$total = mysqli_query($conn, $q);
while ($row = mysqli_fetch_array($total)) {
    $jumlah_jan = $row['jumlah_januari'];
    $jumlah_feb = $row['jumlah_februari'];
    $jumlah_mar = $row['jumlah_maret'];
    $jumlah_apr = $row['jumlah_april'];
    $jumlah_mei = $row['jumlah_mei'];
    $jumlah_juni = $row['jumlah_juni'];
    $jumlah_juli = $row['jumlah_juli'];
    $jumlah_ags = $row['jumlah_ags'];
    $jumlah_september = $row['jumlah_september'];
    $jumlah_oktober = $row['jumlah_oktober'];
    $jumlah_november = $row['jumlah_november'];
    $jumlah_des = $row['jumlah_desember'];
    $jumlah_seluruh = $jumlah_jan +  $jumlah_feb  +   $jumlah_mar +  $jumlah_apr+
    $jumlah_mei+ $jumlah_juni+   $jumlah_juli +   $jumlah_ags +
     $jumlah_september +  $jumlah_oktober + $jumlah_november + $jumlah_des  ;
?>
                                <tr>
                                    <td>10</td>
                                    <td>tebet</td>
                                    <td><?php echo $jumlah_jan ?></td>
                                    <td><?php echo $jumlah_feb ?></td>
                                    <td><?php echo $jumlah_mar ?></td>
                                    <td><?php echo $jumlah_apr ?></td>
                                    <td><?php echo $jumlah_mei ?></td>
                                    <td><?php echo $jumlah_juni ?></td>
                                    <td><?php echo $jumlah_juli ?></td>
                                    <td><?php echo $jumlah_ags ?></td>
                                    <td><?php echo $jumlah_september ?></td>
                                    <td><?php echo $jumlah_oktober ?></td>
                                    <td><?php echo $jumlah_november ?></td>
                                    <td><?php echo $jumlah_des ?></td>
                                    <td class="a"><?php echo $jumlah_seluruh ?></td>
                                    <?php } ?>
                                    <?php
                $q = "SELECT SUM(jan) as jumlah_januari,sum(feb) AS jumlah_februari,SUM(maret) AS jumlah_maret,SUM(april) AS jumlah_april,SUM(mei) AS jumlah_mei,SUM(juni) AS jumlah_juni,SUM(juli) AS jumlah_juli,SUM(ags) AS jumlah_ags,SUM(sept) AS jumlah_september,SUM(okt) 
                AS jumlah_oktober,SUM(nov) AS jumlah_november,SUM(des) AS jumlah_desember FROM 
                (SELECT * FROM kecamatan_cilandak WHERE id UNION SELECT * FROM kecamatan_jagakarsa WHERE id 
                UNION SELECT * FROM kecamatan_kebayoran_baru WHERE id UNION SELECT * FROM kecamatan_kebayoran_lama WHERE id
                 UNION SELECT * FROM kecamatan_mampang_prapatan WHERE id UNION SELECT * FROM kecamatan_pancoran WHERE id 
                 UNION SELECT * FROM kecamatan_pasar_minggu WHERE id UNION SELECT * FROM kecamatan_pesanggrahan WHERE id 
                 UNION SELECT * FROM kecamatan_setia_budi WHERE id UNION SELECT * FROM kecamatan_tebet WHERE id) AS tabel_union";

        $total = mysqli_query($conn, $q);

        while ($row = mysqli_fetch_array($total)) {
        $jumlah_jan = $row['jumlah_januari'];
        $jumlah_feb = $row['jumlah_februari'];
        $jumlah_mar = $row['jumlah_maret'];
        $jumlah_apr = $row['jumlah_april'];
        $jumlah_mei = $row['jumlah_mei'];
        $jumlah_juni = $row['jumlah_juni'];
        $jumlah_juli = $row['jumlah_juli'];
        $jumlah_ags = $row['jumlah_ags'];
        $jumlah_september = $row['jumlah_september'];
        $jumlah_oktober = $row['jumlah_oktober'];
        $jumlah_november = $row['jumlah_november'];
        $jumlah_des = $row['jumlah_desember'];
        $jumlah_seluruh = $jumlah_jan +  $jumlah_feb  +   $jumlah_mar +  $jumlah_apr+
        $jumlah_mei+ $jumlah_juni+   $jumlah_juli +   $jumlah_ags +
         $jumlah_september +  $jumlah_oktober + $jumlah_november + $jumlah_des  ;
  
                ?>
                                <tr class="a">
                                    <th></th>
                                    <th>JAKARTA SELATAN</th>
                                    <th><?php echo $jumlah_jan ?></th>
                                    <th><?php echo $jumlah_feb ?></th>
                                    <th><?php echo $jumlah_mar ?></th>
                                    <th><?php echo $jumlah_apr ?></th>
                                    <th><?php echo $jumlah_mei ?></th>
                                    <th><?php echo $jumlah_juni ?></th>
                                    <th><?php echo $jumlah_juli ?></th>
                                    <th><?php echo $jumlah_ags ?></th>
                                    <th><?php echo $jumlah_september ?></th>
                                    <th><?php echo $jumlah_oktober ?></th>
                                    <th><?php echo $jumlah_november ?></th>
                                    <th><?php echo $jumlah_des ?></th>
                                    <th class="a"><?php echo $jumlah_seluruh ?></th>
                                </tr>
                                <?php } ?>
                    </table>

                </div>
            </div>
        </article>
    </section>
    <footer>
        <p>Copyright &copy;2023</p>
    </footer>

</body>
<?php
    }?>