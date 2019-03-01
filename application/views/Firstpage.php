<?php include 'head.php';?>
<div class="container">
<div class="row">
    <?php
  foreach($records as $r) {
    ?>

  <?php  echo "<a href = '".base_url()."index.php/detail/".$r->ID."'>" ?>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?= $r->PRODUCTTITLE ?></div>
        <div class="panel-body">
          <img src="../images/<?= $r->IMAGE ?>" class="img-fluid" style="width:100%;height:100%" alt="Image">
        </div>

        <div class="panel-footer"><?= $r->PRODUCTDESC ?><br><br>
          <?PHP
            $SHOW=$r->SHOWPRICE;
            if ($SHOW!="N")
            {
              ECHO "harga: ".$r->CURRENCY." ".number_format($r->PRICE)." / ".$r->PRICEFOR;
            }
              ?>
          </div>
      </div>
    </div>
  </a>
<?php  }
?></div>
</div><br><br>
<?php include 'foot.php';?>
