<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni3dots - Create Product</title>
    <link rel="stylesheet" href="../do-an-web-php/Public/CSS/header.css">
    <link rel="stylesheet" href="../../Public/CSS/add-product-ad.css">

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



    <div class="container-fluid px-5 add-product">
        <form method="POST">
            <h2 class="mb-3">CREATE PRODUCT</h2>
            <fieldset>
                <section>
                    <div class="input-block">
                        <label for="name">Name</label>
                        <input class="input" type="text" name="name" autocomplete="off" placeholder="Enter your product name">
                    </div>
                    <div class="input-block">
                        <label for="price">Price</label>
                        <input class="input" type="text" name="price" autocomplete="off" placeholder="Price">
                    </div>
                    <div class="input-block">
                        <label for="strap">Categories</label>
                        <select class="input" name="category">
                            <option value="1">Bed</option>
                            <option value="2">Chair</option>
                            <option value="3">Clock</option>
                            <option value="4">Sofa</option>
                            <option value="5">Table</option>
                        </select>

                    </div>

                </section>

                <section>
                    <div class="input-block">
                        <label for="Description">Description</label>
                        <textarea class="input" placeholder="Description" name="description" cols="30" rows="10"></textarea>
                    </div>
                    <div class="input-block upload">

                        <div class="UploadImage">
                            <label for="thumb1">Upload Image</label>
                            <label for="thumb1-btn" class="upload-btn" id="thumb1">Upload File</label>
                            <input type="file" name="image" id="thumb1-btn">
                            <span class="image-upload-check1">No file uploaded</span>
                        </div>

                        <div class="UploadImage">
                            <label for="thumb2">Upload Image Detail</label>
                            <label for="thumb2-btn" class="upload-btn" id="thumb2">Upload File</label>
                            <input type="file" name="image_detail" id="thumb2-btn">
                            <span class="image-upload-check2">No file uploaded</span>
                        </div>

                    </div>

                </section>
            </fieldset>

            <button href="" type="submit" name="submit">
                <p class="submit">SUBMIT</p>
            </button>

        </form>

    </div>
    <script src="../../Public/JS/addproduct.js"></script>
</body>

</html>