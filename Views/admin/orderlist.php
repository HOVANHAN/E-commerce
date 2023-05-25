<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni3dots - Orders</title>
    <link rel="stylesheet" href="../do-an-web-php/Public/CSS/header.css">
    <link rel="stylesheet" href="../../Public/CSS/customers-ad.css">

    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include_once '../blocks/header-admin.php';
    ?>

    <div class="container-fluid w-50">
        <h2 class="mt-5 mb-3">LIST OF ORDER</h2>
        <table class="mb-5 productlist">
            <thead>
                <tr>

                    <th>
                        <h1>TIME</h1>
                    </th>
                    <th>
                        <h1>USER ID</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                </tr>
                <?php
                foreach ($orders as $order) {
                ?>

                    <tr>
                        <td><?php echo $order->getTime() ?></td>
                        <td><?php echo $order->getUser() ?></td>
 
                    </tr>

                <?php
                }

                ?>
                </tr>
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

</body>

</html>