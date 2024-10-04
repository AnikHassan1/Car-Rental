<!-- resources/views/emails/admin_rental_notification.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>New Car Rental Alert</title>
</head>
<body>
    <h1>New Car Rental Alert</h1>
    <p>A new car rental has been created.</p>
    <p>Here are the details:</p>
    <ul>
        <li><strong>Customer Name:</strong> {{ $rentalDetails['customer_name'] }}</li>
        <li><strong>Car Name:</strong> {{ $rentalDetails['car_name'] }}</li>
        <li><strong>Rental Start Date:</strong> {{ $rentalDetails['start_date'] }}</li>
        <li><strong>Rental End Date:</strong> {{ $rentalDetails['end_date'] }}</li>
        <li><strong>Total Cost:</strong> ${{ $rentalDetails['total_cost'] }}</li>
    </ul>
    <p>Best Regards,<br>Your Car Rental Company</p>
</body>
</html>
