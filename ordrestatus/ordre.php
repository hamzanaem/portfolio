<?php

include('../genTemplates/functions.php'); 

try
{
	$Client = new SoapClient('https://api.hostedshop.dk/service.wsdl');
	$Client->Solution_Connect (array('Username' => 'mgulzar@qualitycodes.co.uk', 'Password' =>'Mub1BOBO'));

}
catch(Exception $e)
{
   // error handling goes here
   die("Error: ". $e->getMessage()."\n");
}
$orderStatus = array(
    1=>"Ordre modtaget",
    2=>"Bestilt",
    517=>"BFT tillæg",
    518=>"GLS tillæg",
    519=>"FO tillæg",
    520=>"Bring tillæg",
    3=>"Afsendt",
    4=>"Igang - Reklamationer",
    7=>"Igang - Returneringer",
    8=>"Igang - Mangler betaling",
    221=>"Igang - Leveringstid mangler",
    375=>"Igang - Diverse",
    6=>"Klar til afhentning",
    503=>"Afventer at kunne bestilles",
    515=>"Klar til fakturering",
    506=>"Afventer booking",
    5=>"Annulleret",
    509=>"Afventer ny forbindelse (GL)",
    516=>"Returvarer - står ved Bring (SE)",
    0=>"Ikke modtaget",
    9=>"Restordre",
    10=>"Faktureret",
    507=>"Ordren ikke plukket",
    511=>"VCM leveringsbekræftelse",
    512=>"Din(e) vare(r) står klar i Sverige",
    513=>"Din(e) vare(r) står klar hos producenten",
    514=>"Din(e) vare(r) står klar hos leverandøren i DK",
    11=>"Tilbagebet.",
    100=>"Tilbagebet. - returvare",
    373=>"Tilbagebet. - afslag - BOBO",
    374=>"Tilbagebet. - afslag - lev. betalt",
    13=>"Partial",
    99=>"Kladde",
    397=>"Uge 1 (2)",
    398=>"Uge 1 (3)",
    399=>"Uge 1 (4)",
    400=>"Uge 1",
    401=>"Uge 1 (afhentning)",
    402=>"Uge 2 (2)",
    403=>"Uge 2 (3)",
    404=>"Uge 2 (4)",
    405=>"Uge 2",
    406=>"Uge 2 (afhentning)",
    407=>"Uge 3 (2)",
    408=>"Uge 3 (3)",
    409=>"Uge 3 (4)",
    410=>"Uge 3",
    411=>"Uge 3 (afhentning)",
    412=>"Uge 4 (2)",
    413=>"Uge 4 (3)",
    414=>"Uge 4 (4)",
    415=>"Uge 4",
    416=>"Uge 4 (afhentning)",
    417=>"Uge 5 (2)",
    418=>"Uge 5 (3)",
    419=>"Uge 5 (4)",
    420=>"uge 5",
    421=>"Uge 5 (afhentning)",
    422=>"Uge 6 (2)",
    423=>"Uge 6 (3)",
    424=>"Uge 6 (4)",
    425=>"Uge 6",
    426=>"Uge 6 (afhentning)",
    427=>"Uge 7 (2)",
    428=>"Uge 7 (3)",
    429=>"Uge 7 (4)",
    430=>"Uge 7",
    431=>"Uge 7 (afhentning)",
    432=>"Uge 8 (2)",
    433=>"Uge 8 (3)",
    434=>"Uge 8 (4)",
    435=>"Uge 8",
    436=>"Uge 8 (afhentning)",
    437=>"Uge 9 (2)",
    438=>"Uge 9 (3)",
    439=>"Uge 9 (4)",
    440=>"Uge 9",
    441=>"Uge 9 (afhentning)",
    442=>"Uge 10 (2)",
    443=>"Uge 10 (3)",
    444=>"Uge 10 (4)",
    445=>"Uge 10",
    446=>"Uge 10 (afhentning)",
    447=>"Uge 11 (2)",
    448=>"Uge 11 (3)",
    449=>"Uge 11 (4)",
    450=>"Uge 11",
    451=>"Uge 11 (afhentning)",
    452=>"Uge 12 (2)",
    453=>"Uge 12 (3)",
    454=>"Uge 12 (4)",
    455=>"Uge 12",
    456=>"uge 12 (afhentning)",
    457=>"Uge 13 (2)",
    458=>"Uge 13 (3)",
    459=>"Uge 13 (4)",
    460=>"Uge 13",
    461=>"Uge 13 (afhentning)",
    462=>"Uge 14 (2)",
    463=>"Uge 14 (3)",
    464=>"Uge 14 (4)",
    465=>"Uge 14",
    466=>"Uge 14 (afhentning)",
    467=>"Uge 15 (2)",
    468=>"Uge 15 (3)",
    469=>"Uge 15 (4)",
    470=>"Uge 15",
    471=>"Uge 15 (afhentning)",
    472=>"Uge 16 (2)",
    473=>"Uge 16 (3)",
    474=>"Uge 16 (4)",
    475=>"Uge 16",
    476=>"Uge 16 (afhentning)",
    477=>"Uge 17 (2)",
    478=>"Uge 17 (3)",
    479=>"Uge 17 (4)",
    480=>"Uge 17",
    481=>"Uge 17 (afhentning)",
    482=>"Uge 18 (2)",
    483=>"Uge 18 (3)",
    484=>"Uge 18 (4)",
    485=>"Uge 18",
    486=>"Uge 18 (afhentning)",
    487=>"Uge 19 (2)",
    488=>"Uge 19 (3)",
    489=>"Uge 19 (4)",
    490=>"Uge 19",
    491=>"Uge 19 (afhentning)",
    492=>"Uge 20 (2)",
    493=>"Uge 20 (3)",
    494=>"Uge 20 (4)",
    495=>"Uge 20",
    496=>"Uge 20 (afhentning)",
    497=>"Uge 21 (2)",
    498=>"Uge 21 (3)",
    499=>"Uge 21 (4)",
    500=>"Uge 21",
    501=>"Uge 21 (afhentning)",
    245=>"Uge 22 (2)",
    267=>"Uge 22 (3)",
    246=>"Uge 22 (4)",
    309=>"Uge 22 (afhentning)",
    283=>"Uge 22",
    226=>"Uge 23 (2)",
    268=>"Uge 23 (3)",
    224=>"Uge 23 (4)",
    310=>"Uge 23 (afhentning)",
    284=>"Uge 23",
    203=>"Uge 24 (2)",
    269=>"Uge 24 (3)",
    225=>"Uge 24 (4)",
    311=>"Uge 24 (afhentning)",
    285=>"Uge 24",
    204=>"Uge 25 (2)",
    270=>"Uge 25 (3)",
    218=>"Uge 25 (4)",
    312=>"Uge 25 (afhentning)",
    286=>"Uge 25",
    205=>"Uge 26 (2)",
    271=>"Uge 26 (3)",
    227=>"Uge 26 (4)",
    313=>"Uge 26 (afhentning)",
    287=>"Uge 26",
    323=>"Uge 27 (2)",
    324=>"Uge 27 (3)",
    325=>"Uge 27 (4)",
    326=>"Uge 27 (afhentning)",
    327=>"Uge 27",
    328=>"Uge 28 (2)",
    329=>"Uge 28 (3)",
    330=>"Uge 28 (4)",
    331=>"Uge 28 (afhentning)",
    332=>"Uge 28",
    333=>"Uge 29 (2)",
    334=>"Uge 29 (3)",
    335=>"Uge 29 (4)",
    336=>"Uge 29 (afhentning)",
    337=>"Uge 29",
    338=>"Uge 30 (2)",
    339=>"Uge 30 (3)",
    372=>"Uge 30 (4)",
    340=>"Uge 30 (afhentning)",
    341=>"Uge 30",
    342=>"Uge 31 (2)",
    343=>"Uge 31 (3)",
    344=>"Uge 31 (4)",
    345=>"Uge 31 (afhentning)",
    346=>"Uge 31",
    347=>"Uge 32 (2)",
    348=>"Uge 32 (3)",
    349=>"Uge 32 (4)",
    350=>"Uge 32 (afhentning)",
    351=>"Uge 32",
    352=>"Uge 33 (2)",
    353=>"Uge 33 (3)",
    354=>"Uge 33 (4)",
    355=>"Uge 33 (afhentning)",
    356=>"Uge 33",
    357=>"Uge 34 (2)",
    358=>"Uge 34 (3)",
    359=>"Uge 34 (4)",
    360=>"Uge 34 (afhentning)",
    361=>"Uge 34",
    362=>"Uge 35 (2)",
    363=>"Uge 35 (3)",
    364=>"Uge 35 (4)",
    365=>"Uge 35 (afhentning)",
    366=>"Uge 35",
    367=>"Uge 36 (2)",
    368=>"Uge 36 (3)",
    369=>"Uge 36 (4)",
    370=>"Uge 36 (afhentning)",
    371=>"Uge 36",
    206=>"Uge 37 (2)",
    273=>"Uge 37 (3)",
    228=>"Uge 37 (4)",
    314=>"Uge 37 (afhentning)",
    288=>"Uge 37",
    274=>"Uge 38 (2)",
    275=>"Uge 38 (3)",
    276=>"Uge 38 (4)",
    315=>"Uge 38 (afhentning)",
    289=>"Uge 38",
    211=>"Uge 39 (2)",
    259=>"Uge 39 (3)",
    235=>"Uge 39 (4)",
    317=>"Uge 39 (afhentning)",
    291=>"Uge 39",
    210=>"Uge 40 (2)",
    258=>"Uge 40 (3)",
    234=>"Uge 40 (4)",
    316=>"Uge 40 (afhentning)",
    290=>"Uge 40",
    249=>"Uge 41 (2)",
    260=>"Uge 41 (3)",
    250=>"Uge 41 (4)",
    318=>"Uge 41 (afhentning)",
    292=>"Uge 41",
    293=>"Uge 42 (2)",
    294=>"Uge 42 (3)",
    295=>"Uge 42 (4)",
    319=>"Uge 42 (afhentning)",
    296=>"Uge 42",
    297=>"Uge 43 (2)",
    298=>"Uge 43 (3)",
    299=>"Uge 43 (4)",
    320=>"Uge 43 (afhentning)",
    300=>"Uge 43",
    301=>"Uge 44 (2)",
    302=>"Uge 44 (3)",
    303=>"Uge 44 (4)",
    321=>"Uge 44 (afhentning)",
    304=>"Uge 44",
    237=>"Uge 45 (2)",
    263=>"Uge 45 (3)",
    238=>"Uge 45 (4)",
    322=>"Uge 45 (afhentning)",
    279=>"Uge 45",
    239=>"Uge 46 (2)",
    264=>"Uge 46 (3)",
    240=>"Uge 46 (4)",
    306=>"Uge 46 (afhentning)",
    280=>"Uge 46",
    243=>"Uge 47 (2)",
    266=>"Uge 47 (3)",
    244=>"Uge 47 (4)",
    308=>"Uge 47 (afhentning)",
    282=>"Uge 47",
    241=>"Uge 48 (2)",
    265=>"Uge 48 (3)",
    242=>"Uge 48 (4)",
    307=>"Uge 48 (afhentning)",
    281=>"Uge 48",
    376=>"Uge 49 (2)",
    377=>"Uge 49 (3)",
    378=>"Uge 49 (4)",
    379=>"Uge 49",
    380=>"Uge 49 (afhentning)",
    381=>"Uge 50 (2)",
    382=>"Uge 50 (3)",
    383=>"Uge 50 (4)",
    384=>"Uge 50",
    385=>"Uge 50 (afhentning)",
    386=>"Uge 51 (2)",
    387=>"Uge 51 (3)",
    388=>"Uge 51 (4)",
    389=>"Uge 51",
    390=>"Uge 51 (afhentning)",
    391=>"Uge 52 (2)",
    392=>"Uge 52 (3)",
    394=>"Uge 52 (4)",
    395=>"Uge 52",
    396=>"Uge 52 (afhentning)",
    248=>"Dropship / Pick and ship"
    );

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ordrestatus – BOBO</title>
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <div id="wrapper">
        <header id="header">
            <div class="container">
                <div class="logo">
                    <a href="https://ordre.boboonline.dk/orderstatus/order.php"><img src="https://shop11691.dandomain.shimmercat.cloud/upload_dir/pics/logo_9.v1_1.5_pt_ramme_m._skygge.jpg" alt=""></a>
                </div>
            </div>
        </header>
        <?php //$orderID = 106267; //processing 2900
        //$orderID = 106110;
        //$orderID = 106101;
        //$orderID = 106270; //fakturet
        //$orderID = 105833;
        //$orderID = 105894;
        //$orderID = 105988;
        $orderID = $_GET['orderid'];
        $loginZIP = $_GET['zipcode'];
        if(isset($orderID)) {
            $Client->Order_SetFields(array('Fields' => 'Id,Customer,DateDue,DateSent,DateUpdated,Delivery,DeliveryTime,DateDelivered,Total,OrderLines,OrderCommentExternal,Status,OrderComment,CustomerComment'));
            $Client->Order_SetOrderLineFields(array('Fields' => 'PriceRounded,Amount,ProductId,DiscountRounded,ItemNumber,Vat,VatRate,Price,VariantTitle,ProductTitle'));
            
            $orderData = $Client->Order_GetById(array('OrderId' => $orderID));
            $singleOrder = $orderData->Order_GetByIdResult;
            $items = $singleOrder->OrderLines->item;
            $order_status_Ids = get_order_Id_field();
        }
		//echo "<pre>"; print_r($singleOrder); echo "</pre>";
		?>
        <main id="main">
            <section class="summary">
                <div class="container">
                    <div class="heading">
                        <h1>Din ordrestatus</h1>
                        <span></span>
                    </div>
                    <?php if(!isset($orderID) || !isset($loginZIP) || $loginZIP != $singleOrder->Customer->Zip) {?>
                    <div class="content form">
                        <form name="orderdetails" id="orderdetails" method="get">
                            <label for="orderid">ordrenummer:</label>
                            <input type="number" name="orderid" id="orderid" value="" required>
                            <label for="zipcode">Zip code:</label>
                            <input type="number" name="zipcode" id="zipcode" value="" required>
                            <input type="submit" value="Søg" id="">
                        </form>
                    </div>

                    <?php } else {?>

                    <div class="content">
                        <div>
                            <span class="sub-heading">ordre afgivet</span>
                            <span><strong><?php echo date('d. M',strtotime($singleOrder->DateDelivered)); ?></strong></span>
                        </div>
                        <div>
                            <span class="sub-heading">total</span> 
                            <?php if(is_array($items)) { ?>
                                <?php $totalprice = $singleOrder->Total + ($singleOrder->Total * $items[0]->VatRate); ?>
                                <span><strong><?php echo $totalprice; ?>,-</strong></span>
                            <?php } else {?> 
                                <?php $totalprice = $singleOrder->Total + ($singleOrder->Total * $items->VatRate); ?>
                                <span><strong><?php echo $totalprice; ?>,-</strong></span>
                            <?php }?>
                        </div>
                        <div>
                            <span class="sub-heading">afsendes til</span>
                            <?php if($singleOrder->Customer->ShippingFirstname) { $fullname = $singleOrder->Customer->ShippingFirstname.' '.$singleOrder->Customer->ShippingLastname; } 
							else { $fullname = $singleOrder->Customer->Firstname.' '.$singleOrder->Customer->Lastname; } ?>
                            <span><strong><?php echo $fullname; ?></strong></span>
                        </div>
                        <div>
                            <span class="sub-heading">ordrenr.</span>
                            <span><strong>#<?php echo $singleOrder->Id; ?></strong></span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="timeline">
                <div class="container">
                    <div class="heading">
                        <h1>ordrestatus: <span><strong><?php echo  str_replace(array( '(2)','(3)','(4)','(afhentning)'), ' ', $orderStatus[$singleOrder->Status] )?></strong></span></h1>
                        <!--<h2>forventet leveringsdato: 
                            <?php if(strpos($orderStatus[$singleOrder->Status], "Faktureret") !== false) { ?>
                                    <span><?php echo date('d. M',strtotime($singleOrder->DateUpdated)); ?></span>
                            <?php } else {?>
                                    <span>-</span>
                            <?php }?>
                        </h2>-->
                    </div>
                    <div class="pagination">
                        <div class="bar active">
                            <span class="circle"><img src="images/checkmark.svg" alt=""></span>
                        </div>
                        <?php 
                            if(strpos($orderStatus[$singleOrder->Status], "Order received") == false) {
                                 echo '<div class="bar active">';
                                }else {
                                    echo '<div class="bar">';
                                } 
                        ?>
                            <span class="circle"><img src="images/search-checkmark.svg" alt=""></span>
                        </div>
                        <?php 
                            if(strpos($orderStatus[$singleOrder->Status], "Faktureret") !== false){
                                 echo '<div class="bar active">';
                                }else {
                                    echo '<div class="bar">';
                                } 
                        ?>
                            <span class="circle"><img src="https://shop11691.sfstatic.io/upload_dir/templates/bobo_dk/assets/images/Truck.svg" alt=""></span>
                        </div>
                    </div>
                    <div class="steps">
                        <div class="box">
                            <div class="desc">
                                <span><strong>Ordre afgivet</strong></span>
                                <span><?php echo date('d. M',strtotime($singleOrder->DateDelivered)); ?></span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="desc">
                                <span><strong>Ordre behandiet</strong></span>
                                <span><?php echo date('d. M',strtotime($singleOrder->DateUpdated)); ?></span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="desc">
                                <span><strong>Ordre afsendt / leveret</strong></span>
                                <?php if(strpos($orderStatus[$singleOrder->Status], "Faktureret") !== false) { ?>
                                    <span><?php echo date('d. M',strtotime($singleOrder->DateUpdated)); ?></span>
                                <?php } else {?>
                                    <span>-</span>
                                <?php }?>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="order">
                <div class="container">
                    <div class="card">
                        <div class="heading">
                            <h2>status på din ordre</h2>
                        </div>
                        <div class="desc">
                        <?php 
                            if(array_key_exists($singleOrder->Status, $orderStatus)) {
                                if(strpos($orderStatus[$singleOrder->Status], "(afhentning)") !== false){
                                    $orderData = get_order_field(9998);
                                }elseif(strpos($orderStatus[$singleOrder->Status], "(2)") !== false) {
                                    $orderData = get_order_field(9995);
                                }elseif(strpos($orderStatus[$singleOrder->Status], "(3)") !== false){
                                    $orderData = get_order_field(9996);
                                }elseif(strpos($orderStatus[$singleOrder->Status], "(4)") !== false){
                                    $orderData = get_order_field(9997);
                                }elseif(!in_array($singleOrder->Status, $order_status_Ids)) {
                                    $orderData = get_order_field(9999);
                                }else{
                                    $orderData = get_order_field($singleOrder->Status);
                                } 
                            }else {
                                $orderData = get_order_field(9999);
                            }  
                        ?>
                            <h3><?php echo $orderData[3]; ?></h3>
                            <div class="text">
                                <p><?php echo str_replace("(ugenummer)",str_replace(array( 'Uge', '(afhentning)' ,'(2)','(3)','(4)'), '',$orderStatus[$singleOrder->Status]),$orderData[4]); ?></p>
                            </div>  
                        </div> 
                        <div class="note-box">
                            <h3>noter til din ordre</h3>
                            <span><?php echo $singleOrder->OrderCommentExternal?></span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="heading">
                            <h2>Detaljer for ordre #<?php echo $singleOrder->Id; ?></h2>
                        </div>
                        <div class="details"> 
                            <div class="delivery-detail">
                                <?php if($singleOrder->Customer->ShippingFirstname) { $fullname = $singleOrder->Customer->ShippingFirstname.' '.$singleOrder->Customer->ShippingLastname; } 
							    else { $fullname = $singleOrder->Customer->Firstname.' '.$singleOrder->Customer->Lastname; } ?>
                                <?php if($singleOrder->Customer->ShippingAddress) { $address = $singleOrder->Customer->ShippingAddress; } 
                                else { $address = $singleOrder->Customer->Address; } ?>
                                <?php if($singleOrder->Customer->ShippingCity) { $city = $singleOrder->Customer->ShippingCity; } 
                                else { $city = $singleOrder->Customer->City; } ?>
                                <?php if($singleOrder->Customer->ShippingZip) { $zip = $singleOrder->Customer->ShippingZip; } 
                                else { $zip = $singleOrder->Customer->Zip; } ?>
                                <?php if($singleOrder->Customer->ShippingCountry) { $country = $singleOrder->Customer->ShippingCountry; } 
                                else { $country = $singleOrder->Customer->Country; } ?>

                                <h3>Leveres til:</h3>
                                <span><?php echo $fullname?></span>
                                <span><?php echo $address;?></span>
                                <span><?php echo $city.' / '.$zip ?></span>
                                <span><?php echo $country ?></span>
                            </div>
                            <div class="customer-detail">
                                <h3>Faktureres til:</h3>
                                <span><?php echo $singleOrder->Customer->Firstname.' '.$singleOrder->Customer->Lastname; ?></span>
                                <span><?php echo $singleOrder->Customer->Address; ?></span>
                                <span><?php echo $singleOrder->Customer->City; ?> / <?php echo $singleOrder->Customer->Zip; ?></span>
                                <span><?php echo $singleOrder->Customer->Country; ?></span>
                            </div>
                        </div>
                        <div class="cart-details">
                            <div class="index">
                                <span>Vare</span>
                                <div class="index-2">
                                    <span>Antal</span>
                                    <span>Total</span>
                                </div>
                            </div>
                            <div class="product-holder">  
                                <?php if(is_array($items)) { ?>              
                                    <?php foreach ($items as $index => $item) {?>
                                        <?php 
                                            $Client->Product_SetFields(array('Fields' => 'Pictures'));
                                            $productData = $Client->Product_GetById(array('ProductId' => $item->ProductId)); 
                                            $singleproductData = $productData ->Product_GetByIdResult->Pictures;
                                        ?>
                                        <div class="product">
                                            <div class="col">
                                                <div class="img-holder">
                                                    <?php foreach ($singleproductData->item as $index => $pitem) {?>
                                                        <?php if($pitem->Sorting == 1) {?> 
                                                            <img src="https://shop11691.sfstatic.io/upload_dir/shop/_thumbs/<?php echo $pitem->FileName; ?>" alt="">
                                                        <?php }?>
                                                    <?php } ?>
                                                </div>                                        
                                                <div class="product-details">
                                                    <span class="name"><?php echo $item->ProductTitle; ?></span>
                                                    <span class="p-id"><?php echo $item->ItemNumber; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <span class="quantity"><?php echo $item->Amount; ?></span>
                                                <?php if(isset($item->DiscountRounded)) {?>
                                                    <?php 
                                                        $pricevat = ($item->Price * $item->Amount) +(($item->Price * $item->Amount)* $item->VatRate);
                                                        $discount = ($item->DiscountRounded * $item->Amount) +  (($item->DiscountRounded * $item->Amount)* $item->VatRate);
                                                        $discprice= $pricevat-$discount;
                                                    ?>
                                                    <span class="price"><?php echo $discprice; ?>,-</span> 
                                                <?php } else {?> 
                                                    <?php $pricevat = ($item->Price * $item->Amount) +(($item->Price * $item->Amount)* $item->VatRate);?>
                                                    <span class="price"><?php echo $pricevat; ?>,-</span> 
                                                <?php }?>

                                            </div>
                                        </div>
                                    <?php }?>
                                <?php } else {?>
                                    <div class="product">
                                        <?php 
                                            $Client->Product_SetFields(array('Fields' => 'Pictures'));
                                            $productData = $Client->Product_GetById(array('ProductId' => $items->ProductId)); 
                                            $singleproductData = $productData ->Product_GetByIdResult->Pictures;
                                        ?>
                                            <div class="col"> 
                                                <div class="img-holder">
                                                    <?php foreach ($singleproductData->item as $index => $pitem) {?>
                                                        <?php if($pitem->Sorting == 1) {?>
                                                            <img src="https://shop11691.sfstatic.io/upload_dir/shop/<?php echo $pitem->FileName; ?>" alt="img">
                                                        <?php }?>
                                                    <?php } ?>
                                                </div>                                        
                                                <div class="product-details">
                                                    <span class="name"><?php echo $items->ProductTitle; ?></span>
                                                    <span class="p-id"><?php echo $items->ItemNumber; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <span class="quantity"><?php echo $items->Amount; ?></span>
                                                <?php if(isset($items->DiscountRounded)) {?>
                                                    <?php 
                                                        $pricevat = ($items->Price * $items->Amount) +(($items->Price * $items->Amount)* $items->VatRate);
                                                        $discount = ($items->DiscountRounded * $items->Amount) + (($items->DiscountRounded * $items->Amount) * $items->VatRate);
                                                        $discprice= $pricevat - $discount;
                                                    ?>
                                                    <span class="price"><?php echo $discprice; ?>,-</span> 
                                                <?php } else {?> 
                                                    <?php $pricevat = ($items->Price * $items->Amount) +(($items->Price * $items->Amount)* $items->VatRate);?>
                                                    <span class="price"><?php echo $pricevat; ?>,-</span>  
                                                <?php }?>
                                            </div>
                                        </div>
                                <?php }?>
                            </div>
                        </div>
                        <span class="total"><?php echo $totalprice; ?>,-</span>
                        <div class="note-box-customer">
                            <h3>Din kommentar</h3>
                            <span><?php echo $singleOrder->CustomerComment?></span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="chat-bar">
                <div class="product-chat">
                    <div class="inner-holder">
                        <div class="inner-person">
                            <div class="img-holder">
                                <img class=" lazyloaded" src="https://shop11691.sfstatic.io/upload_dir/pics/Nicolai.png" alt="image" width="83" height="83">
                            </div>
                            <div class="img-holder">
                                <img class=" lazyloaded" src="https://shop11691.sfstatic.io/upload_dir/pics/Line-copy-1.png" alt="image" width="83" height="83">
                            </div>
                            <div class="img-holder">
                                <img class=" lazyloaded" src="https://shop11691.sfstatic.io/upload_dir/pics/Medarbejdere/Christian---portraet-1-knudeservice-footer.jpg" alt="image" width="83" height="83">
                            </div>
                        </div>
                        <div class="chat-person">
                            <strong>Har du brug for hjælp?</strong>
                            <p>Vi står klar til at hjælpe dig med alle dine spørgsmål</p>
                        </div>
                        <div class="chat-button">
                            <a class="button dixa-chat" href="#">Chat med os</a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="cus-chat-button">
                <div class="inner-holder">
                    <a class="open-ico" href="#"><cite class="des">SPØRG <br>OS</cite><cite class="mob"><img src="images/chat-icon-m.svg" alt="arrow" height="21" width="22" class="lazyload"></cite> </a>
                    <a class="close-ico" href="#"><img src="images/down-arr.svg" alt="arrow" height="16" width="29" class=" lazyloaded"></a>
                    <span class="total-online">1</span>
                    <span class="online"></span>
                    <strong class="date-field" data-pre="08:00-22:00" data-post="08:00-22:00" data-weekend="08:00-22:00"></strong>
                </div>
            </div>
            <div id="custom-chat" class="">
                <div class="chat-holder">
                    <div class="chat-header">
                        <div class="company-logo">
                            <img src="images/company-logo.png" alt="logo" height="38" width="38" class=" lazyloaded">
                        </div>
                        <div class="header-text">
                            <strong>Har du brug for hjælp?</strong>
                        </div>
                        <div class="close-icon">
                            <a href="#"><img src="images/close-icon.svg" alt="logo" height="20" width="20" class=" lazyloaded"></a>
                        </div>
                    </div>
                    <div class="chat-body">
                        <div class="body-holder">
                            <div class="img-holder">
                                <img src="images/faellesbillede-sjov-vinkel.jpg" height="163" width="290" class=" lazyloaded">
                            </div>
                        </div>
                        <div class="chat-faqs">
                            <div class="content-holder">
                                <h3>Hej med dig! 👋</h3>
                                <p>Vi har åbent fra 8-22 alle dage, også i weekenden, så vi sidder klar til at guide dig til dit næste indretningskøb. </p>
                                <div class="btn-holder">
                                    <a class="cbutton dixa-chat" href="#">Chat med os 
                                        <img src="images/chat-balloon.svg" alt="image" height="18" width="20" class=" lazyloaded">
                                    </a>
                                    <a class="cbutton elevio-chat" href="#">Ofte stillede spørgsmål 
                                        <img src="images/question.svg" alt="image" height="20" width="20" class=" lazyloaded">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </main>
        <footer id="footer">
            <div class="container">
                <div class="cvr-number">
                    <span>BOBO Aps CVR: 37348902</span>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
