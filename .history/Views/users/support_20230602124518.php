<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni3dots - Shopping Cart</title>
    <link rel="stylesheet" href="../../Public/CSS/cart.css">

    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- link owl carousel -->
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
	<style>
		.my-footer{
			position: absolute;
    		bottom: 0;
    		left: 0;
		}
	</style>
</head>

<body>
    <!-- header -->
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . "/E-commerce/Views/blocks/header.php");
    ?>
    <?php
    require_once("../users/msg.php");
    ?>
    <!-- body -->

	<div class="container chatbot mt-5">
		<h2 class="mt-5 text-center">Hỗ trợ tư vấn khách hàng</h2>

		<div class="w-50 mx-auto text-center">
			<form action="" method="post">
				<input type="text" class="form-control" name="q" placeholder="Ask anything about furniture">
			</form>
		</div>

		<div class="w-50 mx-auto text-center txt-ans">

			<?php
			$qaPairs = [];
			if (isset($_POST['q'])) {

				$query = $_POST['q'];

				$queryOne = 'interact as assistant based on this "
				My website is an online furniture store that offers a wide range of furniture products. 
				To enhance the customer experience and provide personalized assistance, 
				we have integrated a chatbot into our website. 
				This chatbot is designed to assist customers in their furniture shopping journey based on their individual needs and preferences.
				" question:' . $query . ' Ans:';
				// 						$queryOne = 'interact as assistant based on this "
				// 						Trang web của tôi là một cửa hàng nội thất trực tuyến cung cấp nhiều loại sản phẩm nội thất.
				// 						Để nâng cao trải nghiệm của khách hàng và cung cấp hỗ trợ được cá nhân hóa,
				// 						chúng tôi đã tích hợp một chatbot vào trang web của chúng tôi.
				// 						Chatbot này được thiết kế để hỗ trợ khách hàng trong hành trình mua sắm nội thất dựa trên nhu cầu và sở thích cá nhân của họ.
				// " question:' . $query . ' Ans:';
				$ar = array(
					'prompt' => $queryOne,
					'model' => 'text-davinci-003',
					// 'temperature' => 0.6,
					'temperature' => 1,
					'max_tokens' => 200,

					// 'max_tokens' => 150,
					'top_p' => 1,
					'frequency_penalty' => 1,
					'presence_penalty' => 1,
				);



				$data = json_encode($ar);


				///curl
				$ch = curl_init();

				curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/completions");
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt(
					$ch,
					CURLOPT_POSTFIELDS,
					$data
				);

				$headers = array();
				$headers[] = 'Content-Type: application/json';
				$headers[] = 'Authorization:Bearer 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';
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


				$result = curl_exec($ch);


				curl_close($ch);

				$decode = json_decode($result, true);


				echo $decode['choices'][0]['text'];
				// Append the question and answer to the array
				$qaPairs[] = array('question' => $query, 'answer' => $decode);
			}
			
			?>
			

		</div>
	</div>

	
    <!--Footer-->
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . "/E-commerce/Views/blocks/footer.php");
    ?>
    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>