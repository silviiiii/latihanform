<?php 
if (isset($_POST['submit'])) {
  # code...
  $cari=$_POST['cari'];
if(!isset($_GET['hal'])){
  $_GET['hal']=1;
}
$dataperpage=6;
$jumlah_record=mysql_query("SELECT count(*) FROM produk where nama_produk LIKE '%$cari%' ");
$jumlah=mysql_result($jumlah_record, 0);
$halaman=ceil($jumlah/$dataperpage);
$page=(isset($_GET['hal'])) ? (int)$_GET['hal'] :1;
$start=($page-1)*$dataperpage;
 $query_produk=mysql_query("SELECT * FROM produk where status_produk='Public' and nama_produk LIKE '%$cari%' ORDER BY tanggal_produk DESC, jam_produk DESC LIMIT $start, $dataperpage ");
 if (mysql_num_rows($query_produk) > 0) {
   # code...
 ?>
<div class="container" style="background-color:#1982F0;">
<h2 class="text-center">Pencarian Produk <?php echo $cari;?></h2>
</div>
<div class="container">
  <div class="container row text-center">
  <?php 
  include "admin/fungsi_rupiah.php";
 
  while($data_produk=mysql_fetch_array($query_produk)){
	  echo '<div class="col-sm-4 col-md-4 col-lg-4 col-xs-6" >
      <div class="thumbnail"> 
	  <img class="img-responsive"  src="admin/produk/';echo  $data_produk['gambar_produk']; echo'">
        <div class="caption">
          <h3>';echo $data_produk['nama_produk']; echo'</h3>
          <p>'; $harga=format_rupiah($data_produk['harga_produk']); echo 'Rp. '.$harga ;echo'</p>
          <p><a href="cart.php?&input=add&id_produk=';echo $data_produk['id_produk'];echo'&id_session=';echo $id_session ;echo'" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a> <a href="?page=detail_produk&id_produk=';echo  $data_produk['id_produk']; echo'" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Detail Produk</a></p>
        </div>
      </div>
    </div>';}
  ?>
  </div>
 
  <nav class="text-center">
    <!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks-->
    
    <ul class="pagination">
    <?php if($_GET['hal']==1){
      echo '<li><a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>';
    }else{
       echo '<li><a href="?hal=';echo $page -1 ;echo '" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>';
    }
    ?>
   
    
    
<?php 
for($x=1;$x<=$halaman;$x++){
  ?>
  <li class=""><a href="?hal=<?php echo $x ?>"><?php echo $x ?></a></li>
  <?php
}
?>
    </ul>
  </nav>
</div>
<?php }else{
  echo '<hr>
<h2 class="text-center">Produk '; echo $cari; echo' yang di cari tidak ada</h2>
<hr>';

} 

}
?>