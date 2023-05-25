<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni3dots - List Products</title>
    <link rel="stylesheet" href="../../Public/CSS/product-ad.css">

    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . "/do-an-web/do-an-web-php/Views/blocks/header-admin.php");
    ?>

    <div class="container-fluid px-5">
        <h2 class="mt-5 mb-3">LIST OF PRODUCTS</h2>
        <table class="mb-5 productlist">
            <thead>
                <tr>
                    <th>
                        <h1>ID</h1>
                    </th>
                    <th>
                        <h1>NAME</h1>
                    </th>
                    <th>
                        <h1>DESCRIPTION</h1>
                    </th>
                    <th>
                        <h1>PRICE</h1>
                    </th>
                    <th>
                        <h1>IMAGE</h1>
                    </th>
                    <th>
                        <h1>CAT ID</h1>
                    </th>
                    <th>
                        <h1>ACTION</h1>
                    </th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($products as $product)
                    echo "  <tr>
                <td>" . $product->getId() . "</td>
                <td>" . $product->getName() . "</td>
                <td>" . $product->getDescription() . "</td>
                <td>" . $product->getPrice() . "</td>
                <td><img width='80' src='../../Assets/img/" . $product->getImage() . "'></td>    
                <td>" . $product->getCategory() . "</td>     
                <td><a href='product.php?productid=" . $product->getId() . "'>
                        Edit
                    </a> 
                    <a href='product.php?action=delete&id=" . $product->getId() . "'>
                        Delete
                    </a>
                </td>
                
                </tr>"
                ?>


            </tbody>
        </table>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

</body>

</html>