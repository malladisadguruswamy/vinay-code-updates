<?php
$redirectStr = '';
//include 'config.php';
if(!empty($_GET['paymentID']) && !empty($_GET['token']) && !empty($_GET['payerID']) && !empty($_GET['uid'])  ){
    // Include and initialize database class
    include 'DB.class.php';
    $db = new DB;

    // Include and initialize paypal class
    include 'PaypalExpress.class.php';
    $paypal = new PaypalExpress;
    //$cost=125;
    // Get payment info from URL
    $paymentID = $_GET['paymentID'];
    $token = $_GET['token'];
    $payerID = $_GET['payerID'];
    $uid= $_GET['uid'];
    // $ids= $_GET['ids'];

    
    // Validate transaction via PayPal API
    $paymentCheck = $paypal->validate($paymentID, $token, $payerID, $productID);
    //echo '<pre>';print_r($paymentCheck); exit();
    // If the payment is valid and approved
    if($paymentCheck && $paymentCheck->state == 'approved'){

        // Get the transaction data
        $id = $paymentCheck->id;
        $state = $paymentCheck->state;
        $payerFirstName = $paymentCheck->payer->payer_info->first_name;
        $payerLastName = $paymentCheck->payer->payer_info->last_name;
        $payerName = $payerFirstName.' '.$payerLastName;
        $payerEmail = $paymentCheck->payer->payer_info->email;
        $payerID = $paymentCheck->payer->payer_info->payer_id;
        $payerCountryCode = $paymentCheck->payer->payer_info->country_code;
        $paidAmount = $paymentCheck->transactions[0]->amount->details->subtotal;
        $currency = $paymentCheck->transactions[0]->amount->currency;
        
        // Get product details
//        $conditions = array(
//            'where' => array('id' => $productID),
//            'return_type' => 'single'
//        );
//        $productData = $db->getRows('products', $conditions);
        
        // If payment price is valid
       // if($cost >= $paidAmount){
            
            // Insert transaction data in the database
            $data = array(
                // 'fname' => $fname,
                'user_id' => $uid,
                'txn_id' => $id,
                'payment_gross' => $paidAmount,
                'currency_code' => $currency,
                'payer_id' => $payerID,
                'payer_name' => $payerName,
                'payer_email' => $payerEmail,
                'payer_country' => $payerCountryCode,
                'payment_status' => $state
            );
            $insert = $db->insert('payments', $data);
            
            // Add insert id to the URL
            $redirectStr = '&id='.$insert;
 

            // $sql = "UPDATE tata_users SET status =1 where user_id= '".$uid."'";
            
            // mysqli_query($conn, $sql);
        //}
    }
    
    // Redirect to payment status page
    header("Location:payment-status.php?uid=".$uid.$redirectStr);
}else{
    // Redirect to the home page
    header("Location:index.php");
}
?>