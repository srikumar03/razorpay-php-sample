<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md text-center">
        <h1 class="text-2xl font-bold mb-4">Nandri Vanakkam</h1>
        <p class="text-gray-700 mb-6">Thank you <?php echo $_POST['customer_name']; ?> for your payment of <?php echo $_POST['customer_totalamount']; ?>Rs. Your transaction has been successfully completed.</p>
        <a href="index.php" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Return to Home</a>
    </div>
</body>
</html>
