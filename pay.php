<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Pay</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<script>
function trigger_btn(){
    document.getElementById('checkoutdiv').style.display = 'none';
    document.getElementById('sbt').click();
}
</script>
</head>
<body onload="trigger_btn()" class="bg-gray-100 flex items-center justify-center min-h-screen">
<div id="checkoutdiv" class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <?php
    $apiKey = "rzp_test_d6PQapzcwY5IoS";
    ?>
    <form action="thanks.php" method="POST">
        <script src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $apiKey;?>"
        data-amount="<?php echo $_POST['totamt']*100; ?>"
        data-currency="INR"
        data-name="SBS Technology"
        data-description="Demo SBS"
        data-prefill.name="<?php echo $_POST['uname']; ?>"
        data-prefill.contact="<?php echo $_POST['mobile']; ?>"
        data-prefill.email="<?php echo $_POST['email']; ?>"
        data-notes-shopping_order_id="324"
        data-id="12345">
        </script>
        <input type="submit" id="sbt" value="Proceed to Payment" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
        <input type="hidden" name="customer_name" value="<?php echo $_POST['uname']; ?>">
        <input type="hidden" name="customer_email" value="<?php echo $_POST['email']; ?>">
        <input type="hidden" name="customer_totalamount" value="<?php echo $_POST['totamt']; ?>">
    </form>
</div>
</body>
</html>

