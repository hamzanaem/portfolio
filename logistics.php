<?php require 'head/header.php'; ?>
<?php 
	if(isset($_POST['pids'])) { 
		$pids = $_POST['pids'];
	}
    
?>
    <div id="logistics">
        <div class="container">
            <h1>Products Set Freight Method</h1>
            <div class="col-1">
                <form name="deliveryId" id="deliveryId" method="post">
                    <label for="start">Start:</label>
                    <input type="text" id="start" name="start" required>
                    <label for="length">Length:</label>
                    <input type="text" id="length" name="length" required>

                    <input type="submit" name="download_csv" value="Download">
                </form>
            </div>
            <div class="col">
                <h3>Update Products (new line separated IDs)</h3>
                <form action="" method="post" id="cids" name="cids">
                    <div class="fields-holder">
                        <textarea name="pids" id="pids" placeholder="Product Ids..." required><?php echo $pids; ?></textarea>
                        <input type="submit" class="btn" name="download_csv" value="Download" />
                    </div>
                </form>
            </div>
            <div class="log-rules">
                <table>
                    <thead>
                        <tr>
                            <td>Index</td>
                            <td>Rule</td>
                            <td>Delivery method DK</td>
                            <td>Delivery method SE</td>
                            <td>Delivery method NO</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rule #0</td>
                            <td>No Rule Applied</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Rule #1</td>
                            <td>Items with weight below 19,5 kg</td>
                            <td>-</td>
                            <td>Bring parcel</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Rule #2</td>
                            <td>If total weight of an item is higher that 19,5 kg, but weight of each is below 19,5 kg</td>
                            <td>-</td>
                            <td>Bring parcel</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Rule #3</td>
                            <td>Items with weight between 19,5-29,5 kg</td>
                            <td>-</td>
                            <td>GLS SE</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Rule #4</td>
                            <td>If weight for 1 box has a volume weight that is higher than 19,5 kg: </td>
                            <td>-</td>
                            <td>GLS SE</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Rule #5</td>
                            <td>Items with weight below 29,5 kg</td>
                            <td>-</td>
                            <td>-</td>
                            <td>Bring parcel NO</td>
                        </tr>
                        <tr>
                            <td>Rule #6</td>    
                            <td>Items with weight between 29,5-34,5 kg</td>
                            <td>-</td>
                            <td>-</td>
                            <td>Bring parcel NO</td>
                        </tr>
                        <tr>
                            <td>Rule #7</td>    
                            <td>If total weight of an item is higher that 34,5 kg, but weight of each box is below 34,5 kg</td>
                            <td>-</td>
                            <td>-</td>
                            <td>Bring parcel NO</td>
                        </tr>
                        <tr>
                            <td>Rule #8</td>
                            <td>If total weight is above 29,5 kg, and each box weights is between 0-19,5 kg:</td>
                            <td>GLS DK</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Rule #9</td>
                            <td>If total weight is above 29,5 kg, and each box weights is between 19,5-29,5 kg: </td>
                            <td>GLS DK</td>
                            <td>GLS SE</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Rule #10</td>    
                            <td>If 1 box has a weight for more than 70 kg</td>
                            <td>BFT DK</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Rule #11</td>    
                            <td>If weight of 1 box for an item is higher than 29,5 kg: </td>
                            <td>BFT DK</td>
                            <td>Bring Home Delivery SE (fragtmand)</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Rule #12</td>    
                            <td>If 1 box is more than 200 cm</td>
                            <td>BFT DK</td>
                            <td>Bring Home Delivery SE (fragtmand)</td>
                            <td>Bring Home Delivery NO (fragtmand)</td>
                        </tr>
                        <tr>
                            <td>Rule #13</td>    
                            <td>If (2 x width + 2 x height + length is more than 300 cm)</td>
                            <td>BFT DK</td>
                            <td>Bring Home Delivery SE (fragtmand)</td>
                            <td>Bring Home Delivery NO (fragtmand)</td>
                        </tr>
                        <tr>
                            <td>Rule #14</td>    
                            <td>If price is more than 500 DKK + Material includes on of these
                                "glas, marmor, terrazxzo, terracotta, sten, cement,  keramik, Spejlglas
                            </td>
                            <td>BFT DK</td>
                            <td>Bring Home Delivery SE (fragtmand)</td>
                            <td>Bring Home Delivery NO (fragtmand)</td>
                        </tr>
                        <tr>
                            <td>Rule #15</td>
                            <td>If 1 box has a weight for more than 100 kg</td>
                            <td>-</td>
                            <td>Bring Home Delivery SE (fragtmand)</td>
                            <td>Bring Home Delivery NO (fragtmand)</td>
                        </tr>
                        <tr>
                            <td>Rule #16</td>    
                            <td>If a box is more than 70 kg. in volume weight</td>
                            <td>-</td>
                            <td>Bring Home Delivery SE (fragtmand)</td>
                            <td>Bring Home Delivery NO (fragtmand)</td>
                        </tr>
                        <tr>
                            <td>Rule #17</td>    
                            <td>If 1 box for an item is higher than 34,5 kg: </td>
                            <td>-</td>
                            <td>-</td>
                            <td>Bring Home Delivery NO (fragtmand)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php 

if((isset($_POST['start']) && isset($_POST['length'])) || isset($_POST['pids'])) {
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


    if(isset($_POST['pids'])){
		$productids = explode(PHP_EOL,$pids);
        $Client->Product_SetFields (array('Fields' => 'Id,Price,Weight'));
        $allProductsId = $Client->Product_GetByIds(array('ProductIds' => $productids));
        if(is_array($allProductsId->Product_GetByIdsResult->item)){
            $allProductsId = $allProductsId->Product_GetByIdsResult->item;
        } else {
            $allProductsId = $allProductsId->Product_GetByIdsResult;
        }
        //echo "<pre>"; print_r($allProductsId); echo "</pre>";
		
	} else {
        $start = $_POST['start'];
        $length = $_POST['length'];
    
        $Client->Product_SetFields (array('Fields' => 'Id,Price,Weight'));
        $allProductsId = $Client->Product_GetAllWithLimit(array('Start' => $start, 'Length' => $length)); //get product Ids
        $allProductsId = $allProductsId->Product_GetAllWithLimitResult->item;
		//echo "<pre>"; print_r($allProductsId); echo "</pre>";
        if(!array_key_exists(0,$allProductsId)){    // If data comes in object fromat
            $allProductsId = [$allProductsId];
        }
	}

    $logistics = array();
    
    foreach ($allProductsId as $singleProduct) {
        $rules = array();
        $freightId = array();
        $rule_applied = 0;

        $productId = $singleProduct->Id;
        $productPrice =str_replace(',', '.', $singleProduct->Price);

        $boxAmnt= 0; $totalWeight=0; $totalLength=0; $totalWidth=0; $totalHeight=0; $material = false; $deliveryId= 0; $rule=''; $note='';
        $box1Weight=0; $box2Weight=0; $box3Weight=0; $box4Weight=0; $box5Weight=0; $box6Weight=0; 
        $box1Length=0; $box2Length=0; $box3Length=0; $box4Length=0; $box5Length=0; $box6Length=0;
        $box1Width=0; $box2Width=0; $box3Width=0; $box4Width=0; $box5Width=0; $box6Width=0;  
        $box1Height=0; $box2Height=0; $box3Height=0; $box4Height=0; $box5Height=0; $box6Height=0; 

        $freightMethod_NO=''; $freightMethod_SE =''; $freightMethod_DK =''; $note_NO=''; $note_SE =''; $note_DK ='';
        $freightId_NO=''; $freightId_SE =''; $freightId_DK ='';
        
        $Client->Solution_SetLanguage(array('LanguageISO' => 'DK'));
        $customData = $Client->Product_GetCustomData(array('ProductId' => $productId)); //get product custom data
        $customData = $customData->Product_GetCustomDataResult->item;
        
        //echo "<pre>"; print_r($customData); echo "</pre>";


        foreach ($customData as $customField) {
            if($customField->ProductCustomTypeId == 28) { //product m3
                $productMc = str_replace(',','.',$SCData->Title);
            } else if($customField->ProductCustomTypeId == 32){  //amount of boxes
                $boxAmnt = $customField->Title;
            } elseif($customField->ProductCustomTypeId == 73){  //weight
                if($customField->Title){
                    $box1Weight = str_replace(',', '.', $customField->Title);
                }
            } elseif($customField->ProductCustomTypeId == 77){  //weight
                if($customField->Title){
                    $box2Weight = str_replace(',', '.', $customField->Title);
                }
            } elseif($customField->ProductCustomTypeId == 81){  //weight
                if($customField->Title){
                    $box3Weight = str_replace(',', '.', $customField->Title);
                } 
            } elseif($customField->ProductCustomTypeId == 85){  //weight
                if($customField->Title){
                    $box4Weight = str_replace(',', '.', $customField->Title); 
                }
            } elseif($customField->ProductCustomTypeId == 89){  //weight
                if($customField->Title){
                    $box5Weight = str_replace(',', '.', $customField->Title);
                }    
            } elseif($customField->ProductCustomTypeId == 93){  //weight
                if($customField->Title){
                    $box6Weight = str_replace(',', '.', $customField->Title);  
                } 
            } elseif($customField->ProductCustomTypeId == 72){  //measure
                if($customField->Title){
                    $num = explode('x', strtolower($customField->Title));
                    $box1Length = str_replace(',', '.', $num[0]); 
                    $box1Width = str_replace(',', '.', $num[1]);
                    $box1Height = str_replace(',', '.', $num[2]);
                } 
            } elseif($customField->ProductCustomTypeId == 74){  //measure
                if($customField->Title){
                    $num = explode('x', strtolower($customField->Title));
                    $box2Length = str_replace(',', '.', $num[0]);;
                    $box2Width = str_replace(',', '.', $num[1]);;
                    $box2Height = str_replace(',', '.', $num[2]);;
                } 
            } elseif($customField->ProductCustomTypeId == 79){  //measure
                if($customField->Title){
                    $num = explode('x', strtolower($customField->Title));
                    $box3Length = str_replace(',', '.', $num[0]); 
                    $box3Width = str_replace(',', '.', $num[1]);
                    $box3Height = str_replace(',', '.', $num[2]);              
                } 
            } elseif($customField->ProductCustomTypeId == 83){  //measure
                if($customField->Title){ 
                    $num = explode('x', strtolower($customField->Title));
                    $box4Length = str_replace(',', '.', $num[0]);
                    $box4Width = str_replace(',', '.', $num[1]);
                    $box4Height = str_replace(',', '.', $num[2]);
                } 
            } elseif($customField->ProductCustomTypeId == 87){  //measure
                if($customField->Title){
                    $num = explode('x', strtolower($customField->Title));
                    $box5Length = str_replace(',', '.', $num[0]); 
                    $box5Width = str_replace(',', '.', $num[1]);
                    $box5Height = str_replace(',', '.', $num[2]);
                } 
            } elseif($customField->ProductCustomTypeId == 91){  //measure
                if($customField->Title){
                    $num = explode('x', strtolower($customField->Title));
                    $box6Length = str_replace(',', '.', $num[0]);
                    $box6Width = str_replace(',', '.', $num[1]);
                    $box6Height = str_replace(',', '.', $num[2]);
                } 
            } elseif($customField->ProductCustomTypeId == 119){ //material 
                if ($material === false) {
                    if(strpos(strtolower($customField->Title), 'glas') !== false) {
                        $material = true;
                    } elseif(strpos(strtolower($customField->Title), 'marmor') !== false) {
                        $material = true;
                    } elseif(strpos(strtolower($customField->Title), 'teracotta') !== false) {
                        $material = true;
                    } elseif(strpos(strtolower($customField->Title), 'sten') !== false) {
                        $material = true;
                    } elseif(strpos(strtolower($customField->Title), 'cement') !== false) {
                        $material = true;
                    } elseif(strpos(strtolower($customField->Title), 'keramik') !== false) {
                        $material = true;
                    } elseif(strpos(strtolower($customField->Title), 'terazzo') !== false) {
                        $material = true;
                    }  elseif(strpos(strtolower($customField->Title), 'spejlglas') !== false) {
                        $material = true;
                    }
                }
            }
        }
        
        $weightF = $singleProduct->Weight;

        if($productMc > 0) {
            $freightCarWeight = round(($productMc*280),2);
        } else { 
            $freightCarWeight = 0; 
        }
        if($freightCarWeight > $weightF) {
            $volweight = $freightCarWeight;
        } else {
            $volweight = $weightF;
        }

        $totalWeight = $box1Weight + $box2Weight + $box3Weight + $box4Weight + $box5Weight + $box6Weight; //total weight
        $totalLength = $box1Length + $box2Length + $box3Length + $box4Length + $box5Length + $box6Length; //total length
        $totalWidth = $box1Width + $box2Width + $box3Width + $box4Width + $box5Width + $box6Width;        //total width 
        $totalHeight = $box1Height + $box2Height + $box3Height + $box4Height + $box5Height + $box6Height; //total height 
        
        // SE
        if($weightF<19.5){
            $rule_applied = '1';
            $rules[] = '#1'; 
            $freightMethod_SE ='Bring parcel';
            $note_SE = '';
            $freightId['SE'] =''; 
        }
        if($totalWeight>19.5 && ($box1Weight<19.5 || $box2Weight<19.5 || $box3Weight<19.5 || $box4Weight<19.5 || $box5Weight<19.5 || $box6Weight<19.5)){
            $rule_applied = '1';
            $rules[] = '#2';
            $freightMethod_SE ='Bring parcel';
            $note_SE = '';
            $freightId['SE'] ='113|111|112';
        }
        if($weightF>19.5 && $weightF<29.5 ){
            $rule_applied = '1';
            $rules[] = '#3';
            $freightMethod_SE = 'GLS SE';
            $note_SE = '';
            $freightId['SE'] ='';
        }
        if($volweight>19.5){
            $rules[] = '#4';
            $rule_applied = '1';
            $freightMethod_SE ='GLS SE';
            $note_SE = 'GLS i SE da det er billigere';
            $freightId['SE'] ='109';
        }

        // DK and NO
        if($weightF<29.5){
            $rule_applied = '1';
            $rules[] = '#5';
            $freightMethod_DK = '';
            $note_DK = 'standard i Scannet';
            $freightId['DK'] ='';
            $freightMethod_NO='Bring parcel NO';
            $note_NO = '';
            $freightId['NO'] ='';
        }

        // NO 
        if($weightF>29.5 && $weightF<34.5 ){
            $rule_applied = '1';
            $rules[] = '#6';
            $freightMethod_NO='Bring parcel NO';
            $note_NO = 'Fast fragtmetode';
            $freightId['NO'] ='132|133|134';
        }
        if($totalWeight>34.5 && ($box1Weight<34.5 || $box2Weight<34.5 || $box3Weight<34.5 || $box4Weight<34.5 || $box5Weight<34.5 || $box6Weight<34.5)){
            $rule_applied = '1';
            $rules[] = '#7';
            $freightMethod_NO='Bring parcel NO';
            $note_NO = 'Fast fragtmetode';
            $freightId['NO'] ='132|133|134';
        }

        // Dk
        if($totalWeight>29.5 && (($box1Weight>0 && $box1Weight<19.5 ) || ($box2Weight>0 && $box2Weight<19.5) || ($box3Weight>0 && $box3Weight<19.5) || ($box4Weight>0 && $box4Weight<19.5) || ($box5Weight>0 && $box5Weight<19.5) || ($box6Weight>0 && $box6Weight<19.5))){
            $rule_applied = '1';
            $rules[] = '#8';
            $freightMethod_DK = 'GLS DK';
            $note_DK = 'Fast fragtmetode';
            $freightId['DK'] ='20|22|39|46|135';
        }

        //DK and SE
        if($totalWeight>29.5 && (($box1Weight>19.5 && $box1Weight<29.5 ) || ($box2Weight>19.5 && $box2Weight<29.5) || ($box3Weight>19.5 && $box3Weight<29.5) || ($box4Weight>19.5 && $box4Weight<29.5) || ($box5Weight>19.5 && $box5Weight<29.5) || ($box6Weight>19.5 && $box6Weight<29.5))){
            $rule_applied = '1';
            $rules[] = '#9';
            $freightMethod_DK = 'GLS DK';
            $note_DK = 'Fast fragtmetode';
            $freightId['DK'] ='22|39|42|46';
            $freightMethod_SE = 'GLS SE';
            $note_SE = '';
            $freightId['SE'] ='109';
        }

        // DK
        if($box1Weight>70 || $box2Weight>70 || $box3Weight>70 || $box4Weight>70 || $box5Weight>70 || $box6Weight>70){
            $rule_applied = '1';
            $rules[] = '#10';
            $freightMethod_DK = 'BFT DK';
            $note_DK = 'Ingen indbæring DK';
            $freightId['DK'] ='30|31|32|34|36|66|67|57|39';
        }

        //DK and SE
        if($box1Weight>29.5 || $box2Weight>29.5 || $box3Weight>29.5 || $box4Weight>29.5 || $box5Weight>29.5 || $box6Weight>29.5){
            $rule_applied = '1';
            $rules[] = '#11';
            $freightMethod_DK = 'BFT DK';
            $note_DK = 'Fast fragtmetode';
            $freightId['DK'] ='30|31|32|34|36|66|67|57|39';
            $freightMethod_SE = 'Bring Home Delivery SE (fragtmand)';
            $note_SE = '';
            $freightId['SE'] ='76|77|78|79|83|84|85|86|87|88';
        }

        //DK and SE and NO
        if($box1Length>200 || $box2Length>200 || $box3Length>200 || $box4Length>200 || $box5Length>200 || $box6Length>200){
            $rule_applied = '1';
            $rules[] = '#12';
            $freightMethod_DK = 'BFT DK';
            $note_DK = 'Fast fragtmetode';
            $freightId['DK'] ='30|31|32|34|36|66|67|57|39';
            $freightMethod_SE = 'Bring Home Delivery SE (fragtmand)';
            $note_SE = '';
            $freightId['SE'] ='76|77|78|79|83|84|85|86|87|88';
            $freightMethod_NO='Bring Home Delivery NO (fragtmand)';
            $note_NO = 'Fast fragtmetode';
            $freightId['NO'] ='123|124|125|126|127|128|129|130|131';
        }
        if((2*$box1Width+2*$box1Height+$box1Length > 300) || (2*$box2Width+2*$box2Height+$box2Length > 300) || (2*$box3Width+2*$box3Height+$box3Length > 300) || (2*$box4Width+2*$box4Height+$box4Length > 300) || (2*$box5Width+2*$box5Height+$box5Length > 300) || (2*$box6Width+2*$box6Height+$box6Length > 300)){
            $rule_applied = '1';
            $rules[] = '#13';
            $freightMethod_DK = 'BFT DK';
            $note_DK = 'Fast fragtmetode';
            $freightId['DK'] ='30|31|32|34|36|66|67|57|39';
            $freightMethod_SE = 'Bring Home Delivery SE (fragtmand)';
            $note_SE = '';
            $freightId['SE'] ='76|77|78|79|83|84|85|86|87|88';
            $freightMethod_NO='Bring Home Delivery NO (fragtmand)';
            $note_NO = 'Fast fragtmetode';
            $freightId['NO'] ='123|124|125|126|127|128|129|130|131';
        }
        if($material && $productPrice>500) {
            $rule_applied = '1';
            $rules[] = '#14';
            $freightMethod_DK = 'BFT DK';
            $freightId['DK'] ='30|31|32|34|36|66|67|57|39';
            $freightMethod_SE = 'Bring Home Delivery SE (fragtmand)';
            $note_SE = '';
            $freightId['SE'] ='76|77|78|79|83|84|85|86|87|88';
            $freightMethod_NO='Bring Home Delivery NO (fragtmand)';
            $note_NO = 'Fast fragtmetode';
            $freightId['NO'] ='123|124|125|126|127|128|129|130|131';
        }

        // SE and NO
        if($box1Weight>100 || $box2Weight>100 || $box3Weight>100 || $box4Weight>100 || $box5Weight>100 || $box6Weight>100){
            $rule_applied = '1';
            $rules[] = '#15';
            $freightMethod_SE ='Bring Home Delivery SE (fragtmand)';
            $note_SE = 'Fragtmand - Ingen indbæring';
            $freightId['SE'] ='76|77|78|79|83|84|85|86|87|88';
            $freightMethod_NO='Bring Home Delivery NO (fragtmand)';
            $note_NO = 'Fast fragtmetode';
            $freightId['NO'] ='123|124|125|126|127|128|129|130|131';
        }
        if($volweight>70){
            $rule_applied = '1';
            $rules[] = '#16';
            $freightMethod_SE ='Bring Home Delivery SE (fragtmand)';
            $note_SE = 'Fragtmand - Ingen indbæring';
            $freightId['SE'] ='76|77|78|79|83|84|85|86|87|88';
            $freightMethod_NO='Bring Home Delivery NO (fragtmand)';
            $note_NO = 'Fast fragtmetode';
            $freightId['NO'] ='123|124|125|126|127|128|129|130|131';
        }
       
        // NO 
        if($box1Weight>34.5 || $box2Weight>34.5 || $box3Weight>34.5 || $box4Weight>34.5 || $box5Weight>34.5 || $box6Weight>34.5){
            $rule_applied = '1';
            $rules[] = '#17';
            $freightMethod_NO='Bring Home Delivery NO (fragtmand)';
            $note_NO = 'Fast fragtmetode';
            $freightId['NO'] ='123|124|125|126|127|128|129|130|131';
        }


        
       
        if($rule_applied == '0'){
            $rules[] = '#0';
            $freightId['DK'] = '';
            $freightId['SE'] = '';
            $freightId['NO'] = '';
        }

        $rule_string = implode(', ', $rules);
        $freightId_string = implode('|', array_filter($freightId));

        $logistics[] = array(
            'Product ID' => $productId,
            'Freight ID' => $freightId_string,
            'Delivery method (Custom field 264) DK' => $freightMethod_DK,
            'Delivery method (Custom field 264) SE' => $freightMethod_SE,
            'Delivery method (Custom field 264) NO' => $freightMethod_NO,
            'Note DK' => $note_DK,
            'Note SE' => $note_SE,
            'Note NO' => $note_NO,
            'Rule' => $rule_string
        );

    }


    //echo '<pre>'; print_r($logistics); echo '</pre>';
  
    if (isset($_POST['download_csv'])) {
        $date = date('Y-m-d');
        $filename = "Logistics_$date.csv";

        ob_end_clean();
        header('Content-Type: text/csv; charset=utf-8');
        header("Content-Disposition: attachment; filename=\"$filename\"");

        $fp = fopen('php://output', 'w');

        fwrite($fp, "\xEF\xBB\xBF");
        $headers = array_keys($logistics[0]);
        fputcsv($fp, $headers);

        $logistic_decoded = array();
        foreach ($logistics as $row) {
            $new_row = array();
            foreach ($row as $value) {
                $value = html_entity_decode($value);
                $new_row[] = $value;
            }
            $logistic_decoded[] = $new_row;
        }

        foreach ($logistic_decoded as $row) {
            fputcsv($fp, $row);
        }

        fclose($fp);
        exit;
    }


} ?>
<?php require 'head/footer.php'?>