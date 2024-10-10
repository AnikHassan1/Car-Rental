<!DOCTYPE html>
<html>
<head>
    <title>Rental Confirmation</title>
</head>
<body>
    <h1>Rental Confirmation</h1>
    <p>Dear {{ $RentalNotification['user_name'] }},</p>
    <p>Thank you for renting a car with us!</p>
    <p>Here are your rental details:</p>
    <ul>
        <li><strong>Car Name:</strong> {{ $RentalNotification['car_name'] }}</li>
        <li><strong>Rental Start Date:</strong> {{ $RentalNotification['start_date'] }}</li>
        <li><strong>Rental End Date:</strong> {{ $RentalNotification['end_date'] }}</li>
        <li><strong>Total Cost:</strong> ${{ $RentalNotification['total_price'] }}</li>
    </ul>
    <p>Best Regards,<br>Your Car Rental Company</p>
</body>
</html>
