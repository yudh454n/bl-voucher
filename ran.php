<?php
$data = array("id" => 971981312,"invoice_id" => 971981312,"voucher_code" => "BLMOIVPBDB","payment_type" => "transfer","priority_buyer_reduction" => false,"transactions" => "id" => 1202414459,"type" => "product","payment_details" => "virtual_account_type" => "","request_id" => "01f4bc11-2162-0663-9134-84b5df53d395");                                                                    
$data_string = json_encode($data);                                                                                   
                                                                                                                     
$ch = curl_init('https://api.bukalapak.com/invoices/check');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);
?>
