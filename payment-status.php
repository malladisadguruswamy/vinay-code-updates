<html>
<style>
    .payment-box
    {
        box-shadow:1px 1px 10px grey; 
    }
    </style>
</html>

<?php
if(!empty($_GET['id'])){

// Include and initialize database class
include 'DB.class.php';
$db = new DB;

// Get payment details

$conditions = array(
    'where' => array('id' => $_GET['id']),
    'return_type' => 'single'
);
$paymentData = $db->getRows('payments', $conditions);

}
?>

<?php
// List all products
if(!empty($paymentData)){
?>
<span class="payment-box">
    <center>
        <br>
        <br>
    <h3>Your payment was successful.</h3>
    <p>TXN ID: <?php echo $paymentData['txn_id']; ?></p>
    <p>Paid Amount: <?php echo $paymentData['payment_gross'].' '.$paymentData['currency_code']; ?></p>
    <p>Payment Status: <?php echo $paymentData['payment_status']; ?></p>
    <p>Payment Date: <?php echo $paymentData['created']; ?></p>
    </center>
</span>
<?php  
    $uid= $_GET['uid'];
    $update_data = array('status'=> 1);
    $where = array('user_id'=> $uid);
    $db->update('tata_users',$update_data,$where);      
    }else{
        echo '<p>Payment was unsuccessful</p>';
        ?>
        
        <?php

    }
?>
<script>
setTimeout(index, 3000);
function index() {
    window.location.replace("membership.php");
}
</script>