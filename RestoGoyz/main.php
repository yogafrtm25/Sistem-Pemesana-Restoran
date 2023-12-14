<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pemesanan Restoran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body style="height:3000px">
    <!-- Header -->

    <?php include "header.php"; ?>

    <!-- End Header -->
    <div class="container">
        <div class="row">

            <!-- Sidebar -->
            <?php include "sidebar.php"; ?>
            <!-- End Sidebar -->

            <!-- Content -->
            <?php

                include $page;
    
            ?>
            <!-- Content -->
        </div>

        <div class="fixed-bottom text-center mb-2"><i class="bi bi-c-circle"></i>
            Copyright 2023 RestoGoyz
        </div>
    </div>

    <!-- End Content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>