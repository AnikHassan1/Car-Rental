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
        <li><strong>Customer Name:</strong> {{ $RentalNotification['user_name'] }}</li>
        <li><strong>Car Name:</strong> {{ $RentalNotification['car_name'] }}</li>
        <li><strong>Rental Start Date:</strong> {{ $RentalNotification['start_date'] }}</li>
        <li><strong>Rental End Date:</strong> {{ $RentalNotification['end_date'] }}</li>
        <li><strong>Total Cost:</strong> ${{ $RentalNotification['total_price'] }}</li>
    </ul>
    <p>Best Regards,<br>Your Car Rental Company</p>
</body>
</html>
