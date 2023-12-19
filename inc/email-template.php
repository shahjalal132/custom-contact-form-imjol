<?php
require_once IMJOL_PLUGIN_PATH . '/inc/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
    body {
        background-color: #eeeefe;
        font-family: 'Poppins', sans-serif;
    }

    .container {
        width: 85%;
        margin: 0 auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    #header h2 {
        color: #271def;
        font-size: 30px;
        margin: 5px 0;
    }

    #main p {
        margin: 0;
        font-size: 18px;
    }

    .information {
        font-size: 30px;
        margin-top: 15px;
        margin-bottom: 10px;
        color: #271def;
    }

    #main h3 {
        font-size: 18px;
        margin-top: 0;
        margin-bottom: 5px;
    }

    /* .key{
            margin-right: 20px;
        } */
    </style>
</head>

<body>
    <div class="container">
        <header id="header">
            <h2>Hello, Admin</h2>
        </header>
        <main id="main">
            <p>A new form submission has been received from.</p>
            <h2 class="information">Information</h2>
            <h3><span class="key">Name:</span> <?php echo $first_name; ?></h3>
            <h3><span class="key">Product: <?php echo $mobile_app . ' ' . $website . ' ' . $software; ?>
                </span> </h3>
            <h3><span class="key">Requirement:</span> <?php echo $fullRequirement; ?></h3>
            <h3><span class="key">Budget:</span> <?php echo $cleanFullBudget; ?></h3>
            <h3><span class="key">Deadline:</span> <?php echo $cleanFullDeadline; ?></h3>
            <h3><span class="key">Address:</span> <?php echo $address; ?></h3>
            <h3><span class="key">Email:</span> <?php echo $email; ?></h3>
            <h3><span class="key">Phone:</span> <?php echo $number; ?></h3>
            <h3><span class="key">What's App:</span> <?php echo $watsAppNumber; ?></h3>
        </main>
    </div>
</body>

</html>