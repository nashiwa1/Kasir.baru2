<h3>Dashboard</h3>
<br/>
<?php 
	$sql=" select * from barang where stok <= 3";
	$row = $config -> prepare($sql);
	$row -> execute();
	$r = $row -> rowCount();
	if($r > 0){
?>
<?php
		echo "
		<div class='alert alert-warning'>
			<span class='glyphicon glyphicon-info-sign'></span> Ada <span style='color:red'>$r</span> barang yang Stok tersisa sudah kurang dari 3 items. silahkan pesan lagi !!
			<span class='pull-right'><a href='index.php?page=barang&stok=yes'>Tabel Barang <i class='fa fa-angle-double-right'></i></a></span>
		</div>
		";	
	}
?>
<?php $hasil_barang = $lihat -> barang_row();?>
<?php $hasil_kategori = $lihat -> kategori_row();?>
<?php $stok = $lihat -> barang_stok_row();?>
<?php $jual = $lihat -> jual_row();?>
<div class="row">
    <!--STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
        <style>
    .bg-purple {
        background-color: #800080 !important; /* Warna ungu */
        color: white !important; /* Warna teks agar kontras */
        padding: 10px; /* Padding agar rapi */
        border-radius: 5px 5px 0 0; /* Membuat sudut atas membulat */
    }
</style>

<div class="card-header bg-purple">
    <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Nama Barang</h6>
</div>

            <div class="card-body">
                <center>
                    <h1><?php echo number_format($hasil_barang);?></h1>
                </center>
            </div>
            <style>
    .bg-purple {
        background-color: #800080 !important; /* Warna ungu */
        color: white !important; /* Warna teks agar kontras */
        padding: 10px; /* Padding agar rapi */
        text-align: center; /* Pusatkan teks */
        border-radius: 0 0 5px 5px; /* Membuat sudut bawah membulat */
    }

    .bg-purple a {
        color: #fff !important; /* Warna teks link agar tetap terbaca */
        text-decoration: none; /* Menghilangkan garis bawah */
        font-weight: bold; /* Membuat teks lebih tegas */
    }

    .bg-purple a:hover {
        text-decoration: underline; /* Efek hover */
        color: #d8bfd8 !important; /* Warna ungu lebih terang saat hover */
    }
</style>

<div class="card-footer bg-purple">
    <a href='index.php?page=barang'>Tabel Barang <i class='fa fa-angle-double-right'></i></a>
</div>

        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
        <style>
    .bg-purple {
        background-color: #800080 !important; /* Warna ungu */
        color: white !important; /* Warna teks agar kontras */
        padding: 10px; /* Padding agar rapi */
        border-radius: 5px 5px 0 0; /* Membuat sudut atas membulat */
    }
</style>

<div class="card-header bg-purple">
    <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Stok Barang</h6>
</div>

            <div class="card-body">
                <center>
                    <h1><?php echo number_format($stok['jml']);?></h1>
                </center>
            </div>
            <style>
    .bg-purple {
        background-color: #800080 !important; /* Warna ungu */
        color: white !important; /* Warna teks agar kontras */
        padding: 10px; /* Padding agar rapi */
        text-align: center; /* Pusatkan teks */
        border-radius: 0 0 5px 5px; /* Membuat sudut bawah membulat */
    }

    .bg-purple a {
        color: #fff !important; /* Warna teks link agar tetap terbaca */
        text-decoration: none; /* Menghilangkan garis bawah */
        font-weight: bold; /* Membuat teks lebih tegas */
    }

    .bg-purple a:hover {
        text-decoration: underline; /* Efek hover */
        color: #d8bfd8 !important; /* Warna ungu lebih terang saat hover */
    }
</style>

<div class="card-footer bg-purple">
    <a href='index.php?page=barang'>Data Barang <i class='fa fa-angle-double-right'></i></a>
</div>

        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
        <style>
    .bg-purple {
        background-color: #800080 !important; /* Warna ungu */
        color: white !important; /* Warna teks agar kontras */
        padding: 10px; /* Padding agar rapi */
        border-radius: 5px 5px 0 0; /* Membuat sudut atas membulat */
    }
</style>

<div class="card-header bg-purple">
    <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Telah Terjual</h6>
</div>

            <div class="card-body">
                <center>
                    <h1><?php echo number_format($jual['stok']);?></h1>
                </center>
            </div>
            <style>
    .bg-purple {
        background-color: #800080 !important; /* Warna ungu */
        color: white !important; /* Warna teks agar kontras */
        padding: 10px; /* Padding agar rapi */
        text-align: center; /* Pusatkan teks */
        border-radius: 0 0 5px 5px; /* Membuat sudut bawah membulat */
    }

    .bg-purple a {
        color: #fff !important; /* Warna teks link agar tetap terbaca */
        text-decoration: none; /* Menghilangkan garis bawah */
        font-weight: bold; /* Membuat teks lebih tegas */
    }

    .bg-purple a:hover {
        text-decoration: underline; /* Efek hover */
        color: #d8bfd8 !important; /* Warna ungu lebih terang saat hover */
    }
</style>

<div class="card-footer bg-purple">
    <a href='index.php?page=barang'>Tabel Laporan <i class='fa fa-angle-double-right'></i></a>
</div>

        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <div class="col-md-3 mb-3">
        <div class="card">
        <style>
    .bg-purple {
        background-color: #800080 !important; /* Warna ungu */
        color: white !important; /* Warna teks agar kontras */
        padding: 10px; /* Padding agar rapi */
        border-radius: 5px 5px 0 0; /* Membuat sudut atas membulat */
    }
</style>

<div class="card-header bg-purple">
    <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Kategori Barang</h6>
</div>

            <div class="card-body">
                <center>
                    <h1><?php echo number_format($hasil_kategori);?></h1>
                </center>
            </div>
            <style>
    .bg-purple {
        background-color: #800080 !important; /* Warna ungu */
        color: white !important; /* Warna teks agar kontras */
        padding: 10px; /* Padding agar rapi */
        text-align: center; /* Pusatkan teks */
        border-radius: 0 0 5px 5px; /* Membuat sudut bawah membulat */
    }

    .bg-purple a {
        color: #fff !important; /* Warna teks link agar tetap terbaca */
        text-decoration: none; /* Menghilangkan garis bawah */
        font-weight: bold; /* Membuat teks lebih tegas */
    }

    .bg-purple a:hover {
        text-decoration: underline; /* Efek hover */
        color: #d8bfd8 !important; /* Warna ungu lebih terang saat hover */
    }
</style>

<div class="card-footer bg-purple">
    <a href='index.php?page=barang'>Tabel Kategori <i class='fa fa-angle-double-right'></i></a>
</div>

        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
</div>