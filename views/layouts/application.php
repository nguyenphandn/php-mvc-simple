<!DOCTYPE html>
<html lang="en">

<!-- This website follows this color palette: https://colorpalettes.net/color-palette-3797/ -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome for icons and stuff -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap-social for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
    <!-- my CSS file -->
    <link rel="stylesheet" href="/lab-7/assets/stylesheets/styles.css">
    <!-- every relative URL is resolved from that URL -->
    <!-- <base href="/lab-7" /> -->
    <title>Application</title>

</head>

<body>

    <!-- NAVBAR -->
    <?php include 'navbar.php';?>

    <?= @$content ?>

    <!-- FOOTER -->
    <?php include 'footer.php';?>

</body>


<!-- COPYRIGHT BANNER -->
<?php include 'copyrights_banner.php';?>

</html>
