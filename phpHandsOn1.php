<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hands On 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div>
    <nav class="navbar ps-5" style="background: #d0011b;">
    <img style="width: 150px;" src="https://www.freepnglogos.com/uploads/shopee-logo-png/shopee-logo-products-kjm-11.png" alt="shopee"/>
    <a class="navbar-brand text-white" href="#">PHP Hands On 1</a>
    </nav>
</div>
<?php
class OnlineShop{
    var $itemdesc, $price, $discount, $itemsold,$sellerloc,$img;
    
    function set_Item($itemdesc, $price, $discount, $itemsold,$sellerloc,$img){
        $this->itemdesc = $itemdesc;
        $this->price = $price;
        $this->discount = $discount;
        $this->itemsold = $itemsold;
        $this->sellerloc = $sellerloc;
        $this->img= $img;
    }
} 
$sellitem = new OnlineShop();
$sellitem -> set_Item("NEW Curry 7th generation mandarin duck basketball shoes male and female students junior high school","588","599","10.9","Metro Manila, Metro Manila","https://cf.shopee.ph/file/8adad9b72eb7d99392eb03107ab168db");
$sellitem2 = new OnlineShop();
$sellitem2 -> set_Item("New Arrival Sport Outdoor Running Focus Basketball Shoes for men 41-45
","599","2,499","8.8","Metro Manila, Metro Manila","https://cf.shopee.ph/file/3d038ae58664afb0c28faaaeff13a5cb");
$sellitem3 = new OnlineShop();
$sellitem3 -> set_Item("Fashion sports canvass highcut KYRIE basketball shoes outdoor design for men
","598","799","7.4","Metro Manila, Metro Manila","https://lzd-img-global.slatic.net/g/p/fe9feb0259c355c842b33d4fffad86bb.jpg_720x720q80.jpg_.webp");
$sellitem4 = new OnlineShop();
$sellitem4 -> set_Item("2022 BASKETBALL SHOES non-slip high cut sneakers shoes for men's and women's
","549","699","10.4","Metro Manila, Metro Manila","https://cf.shopee.ph/file/df21c3dad952a6cdb9fcece28d6afe73");
$sellitem5 = new OnlineShop();
$sellitem5 -> set_Item("Basketball shoes for older kids braided hight-top basketball shoes for kids size31-40
","335","499","3.2","
Metro Manila, Metro Manila","https://cf.shopee.ph/file/97e4664e26ba380a8c644d9d0ca1d570");
$sellitem6 = new OnlineShop();
$sellitem6 -> set_Item("NBA Stephen Curry 5 high cut Sports Shoes and Clothing basketball Shoes Men's and women shoes
","599","1,999","2.8","
Metro Manila, Metro Manila","https://cf.shopee.ph/file/0ffed64b06356287767097e25b39c355");
$sellitem7 = new OnlineShop();
$sellitem7 -> set_Item("high cut leather rubber non-slip breathable mens outdoor basketball shoes
","549","599","7.1","
Metro Manila, Metro Manila","https://cf.shopee.ph/file/370da1bae07ad833926b5287680c8697");
$sellitem8 = new OnlineShop();
$sellitem8 -> set_Item("XTEP Jeremy Lin Moling Men Basketball Shoes Breathable Shock Absorbing Wear Resistant Low Top Actual Combat Rebound
","4,291","5,366","1","Mainland China","https://cf.shopee.ph/file/6b5f8ed1dc2fcf5273939ce23f71c62c");
?>
    <section class="container p-5 d-flex flex-wrap justify-content-evenly gap-3">
    <div class="card" style="width: 18rem; min-height: 100px;">
        <img class="card-img-top" src=<?php echo $sellitem -> img;?> alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title fs-6"><?php echo $sellitem -> itemdesc;?></h5>
            <p class="card-text fs-5 text-danger"><del class="text-secondary fs-6"><span>PHP <?php echo $sellitem -> discount;?></span></del> PHP <?php echo $sellitem -> price;?></p>
            <p class="card-text fs-6 text-danger"><span>⭐⭐⭐⭐⭐</span> <?php echo $sellitem -> itemsold;?>K sold</p>
            <p class="card-text fs-6 text-secondary"><?php echo $sellitem -> sellerloc;?></p>
        </div>
    </div>
    <div class="card" style="width: 18rem; min-height: 100px;">
        <img class="card-img-top" src=<?php echo $sellitem2 -> img;?> alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title fs-6"><?php echo $sellitem2 -> itemdesc;?></h5>
            <p class="card-text fs-5 text-danger"><del class="text-secondary fs-6"><span>PHP <?php echo $sellitem2 -> discount;?></span></del> PHP <?php echo $sellitem2 -> price;?></p>
            <p class="card-text fs-6 text-danger"><span>⭐⭐⭐⭐</span> <?php echo $sellitem2 -> itemsold;?>K sold</p>
            <p class="card-text fs-6 text-secondary"><?php echo $sellitem2 -> sellerloc;?></p>
        </div>
    </div>
    <div class="card" style="width: 18rem; min-height: 100px;">
        <img class="card-img-top" src=<?php echo $sellitem3 -> img;?> alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title fs-6"><?php echo $sellitem3 -> itemdesc;?></h5>
            <p class="card-text fs-5 text-danger"><del class="text-secondary fs-6"><span>PHP <?php echo $sellitem3 -> discount;?></span></del> PHP <?php echo $sellitem3 -> price;?></p>
            <p class="card-text fs-6 text-danger"><span>⭐⭐⭐⭐⭐</span> <?php echo $sellitem3 -> itemsold;?>K sold</p>
            <p class="card-text fs-6 text-secondary"><?php echo $sellitem3 -> sellerloc;?></p>
        </div>
    </div>
    <div class="card" style="width: 18rem; min-height: 100px;">
        <img class="card-img-top" src=<?php echo $sellitem4 -> img;?> alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title fs-6"><?php echo $sellitem4 -> itemdesc;?></h5>
            <p class="card-text fs-5 text-danger"><del class="text-secondary fs-6"><span>PHP <?php echo $sellitem4 -> discount;?></span></del> PHP <?php echo $sellitem4 -> price;?></p>
            <p class="card-text fs-6 text-danger"><span>⭐⭐⭐⭐</span> <?php echo $sellitem4 -> itemsold;?>K sold</p>
            <p class="card-text fs-6 text-secondary"><?php echo $sellitem4 -> sellerloc;?></p>
        </div>
    </div>
    <div class="card" style="width: 18rem; min-height: 100px;">
        <img class="card-img-top" src=<?php echo $sellitem5 -> img;?> alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title fs-6"><?php echo $sellitem5 -> itemdesc;?></h5>
            <p class="card-text fs-5 text-danger"><del class="text-secondary fs-6"><span>PHP <?php echo $sellitem5 -> discount;?></span></del> PHP <?php echo $sellitem5 -> price;?></p>
            <p class="card-text fs-6 text-danger"><span>⭐⭐⭐</span> <?php echo $sellitem5 -> itemsold;?>K sold</p>
            <p class="card-text fs-6 text-secondary"><?php echo $sellitem5 -> sellerloc;?></p>
        </div>
    </div>
    <div class="card" style="width: 18rem; min-height: 100px;">
        <img class="card-img-top" src=<?php echo $sellitem6 -> img;?> alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title fs-6"><?php echo $sellitem6 -> itemdesc;?></h5>
            <p class="card-text fs-5 text-danger"><del class="text-secondary fs-6"><span>PHP <?php echo $sellitem6 -> discount;?></span></del> PHP <?php echo $sellitem6 -> price;?></p>
            <p class="card-text fs-6 text-danger"><span>⭐⭐⭐⭐⭐</span> <?php echo $sellitem6 -> itemsold;?>K sold</p>
            <p class="card-text fs-6 text-secondary"><?php echo $sellitem6 -> sellerloc;?></p>
        </div>
    </div>
    <div class="card" style="width: 18rem; min-height: 100px;">
        <img class="card-img-top" src=<?php echo $sellitem7 -> img;?> alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title fs-6"><?php echo $sellitem7 -> itemdesc;?></h5>
            <p class="card-text fs-5 text-danger"><del class="text-secondary fs-6"><span>PHP <?php echo $sellitem7 -> discount;?></span></del> PHP <?php echo $sellitem7 -> price;?></p>
            <p class="card-text fs-6 text-danger"><span>⭐⭐⭐⭐⭐</span> <?php echo $sellitem7 -> itemsold;?>K sold</p>
            <p class="card-text fs-6 text-secondary"><?php echo $sellitem7 -> sellerloc;?></p>
        </div>
    </div>
    <div class="card" style="width: 18rem; min-height: 100px;">
        <img class="card-img-top" src=<?php echo $sellitem8 -> img;?> alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title fs-6"><?php echo $sellitem8 -> itemdesc;?></h5>
            <p class="card-text fs-5 text-danger"><del class="text-secondary fs-6"><span>PHP <?php echo $sellitem8 -> discount;?></span></del> PHP <?php echo $sellitem8 -> price;?></p>
            <p class="card-text fs-6 text-danger"><span>⭐⭐⭐⭐</span> <?php echo $sellitem8 -> itemsold;?>K sold</p>
            <p class="card-text fs-6 text-secondary"><?php echo $sellitem8 -> sellerloc;?></p>
        </div>
    </div>
    </section>
    <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright: Jullie Morales
  </div>
  <!-- Copyright -->
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>






