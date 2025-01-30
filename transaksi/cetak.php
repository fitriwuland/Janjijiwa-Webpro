
<body>
    <header>
    <img src="struknobg.png" alt="" style="margin-left:250px;">
    <div  style="text-align:center;">
        <h3>Janji Jiwa</h3>
        <h4>Jl.Kisamun No.201, 
            <br>Babakan Kec.Tangerang, Kota Tangerang, Banten.</h4>
            <h4>0812464246864</h4>
            <hr>
    </div>
</header>

<?php
include "koneksi.php";
$sqln = mysqli_query($kon, "select * from transaksi inner join keranjang on
transaksi.idkjg = keranjang.idkjg inner join barang on keranjang.idbrg = 
barang.idbrg where idtrans='$_GET[idt]'");
$row = mysqli_num_rows($sqln);
$no=1;


while ($rn = mysqli_fetch_array($sqln)) { ?>
    <div class="cet-ak" style="text-align:left;">
        <p>Date: <?php echo $rn['tgltrans']?></p>
        <p>ID Transaction:  <?php echo $rn['idtrans']?></p>
        <p>ID Cart:  <?php echo $rn['idkjg']?></p>
        <div class="" style="text-align:right; margin-top:-100px;">
        <p>Customor :<?php echo $rn['nama']?></p>
        <p>Address : <?php echo $rn['alamat']?></p>
        <p>Number Phone : <?php echo $rn['nohp']?></p>
        </div>
        <hr>
    </div>
    <div class="struk">
        <h2><?php echo $rn['nmbrg']?></h2>
        <p style="text-align:center;"><?php echo $rn['jmlbeli']?></p>
        <p style="text-align:right; margin-top:-50px;"> Rp. <?php echo $rn['hrgbrg']?> </p>
        <p></p>
        <hr>
    </div>
    <div class="total">
        <p><h3  style="text-align:center;">Total :</h3></p>
        <p><h3 style="text-align:right; margin-top:-50px;"> Rp. <?php echo $rn['total']?> </h3></p>
       
        <hr>
        <div>
        <h3 style="text-align:center;">Thank You ! </h3>
        <h3 style="text-align:center;">Happy Shopping  </h3>
  
 <?php }?>       
</div>
    </div>   
 
    <script>
window.print();
</script>

</body>






























