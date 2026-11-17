
<?php
if (!isset($school)) {
    $school = [
        'name' => 'SHARMILA ENTERPRISES',
        'phone' => '9101098127',
        'emails' => [
            'lokchetry497@gmail.com',
            'basnetlok1@gmail.com'
        ],
        'address' => 'C/O: Tilak Khulal, Habigaon Grant, Udalguri, Assam, 784507'
    ];
}

if (!function_exists('e')) {
    function e($v) {
        return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= e($school['name']) ?> | Primary School</title>

    <link rel="icon" href="assets/images/sharmila-logo.png">

    <!-- CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
</head>

<body>

<?php include __DIR__ . '/site-header.php'; ?>

<main>
