<?php
	require "product.json.file.php";
	require "ObjectCart.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home: My Shop</title>

        <!-- icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!--Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/bootstrap-grid.css.map" media="screen" >
        <link rel="stylesheet" href="css/bootstrap-grid.min.css" media="screen" >
        <link rel="stylesheet" href="css/bootstrap-reboot.css" media="screen" >
        <link rel="stylesheet" href="css/bootstrap-reboot.css.map" media="screen" >
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css" media="screen" >
        <link rel="stylesheet" href="css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="css/bootstrap.css.map" media="screen" >
        <link rel="stylesheet" href="css/bootstrap.css.map" media="screen" >
        <link rel="stylesheet" href="css/bootstrap.min.css.map" media="screen" >
        
		<style>
			body{
				margin-top:50px;
				margin-bottom:200px;
			}
			h1{
				text-align: center;
				color: Blue;
				text-decoration-line: underline;
				padding-bottom: 10px;

				
			}
			.fa{
				color: slategray;
				
			}
			.form-inline{
				float: right;
				
				
			}
			.form-control-one{
				padding-right: 12.6rem;
				height: 3.5rem;
				
			}
			.search-submit-btn{
				
				height: 2.9rem;
			}
			.form-group-one{
				margin-top: 15px;
			}
			.search-submit-btn:hover{
				background: transparent;
				color: #EEEEEE;
			}
			.container{
				margin-top: 2px;
				padding-bottom: 40px;
			}
			.row{
				margin-bottom: 2rem;
			}
			li{
				list-style: none;

			}
			.navbar-brand{
				font-size: 30px;
				
			}
			.navbar{
				height: 80px;
				background-color: black;

			}
		</style>
	</head>

	<body>

		<div class="container">
                <div class="page-header">
                    <div class="row">
                        <nav class="navbar navbar-expand-lg navbar-black bg-light fixed-top">
                            
							<a style="font-size: 30px;" href="?a=shop" class="navbar-brand"><i style="font-size: 32px;" class="fa fa-home" aria-hidden="true"></i> NinjaSite Shop</a>
                            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i></button>
                            <div class="collapse navbar-collapse" id="collapsibleNavId">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                
									<li class="nav-item">
										<a style="font-size: 18px;" class="nav-link" href="our-blog.html">Shop Now</a>
									</li>
									
									<li class="nav-item dropdown">
										<a style="font-size: 18px;" class="nav-link dropdown-toggle" href="contacts.html" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
											aria-expanded="false">Contacts</a>
										<div class="dropdown-menu" aria-labelledby="dropdownId">
											<a class="dropdown-item" href="mail:to">Email Us</a>
											<a class="dropdown-item" href="https://www.facebook.com/my-child-foundation/">Facebook</a>
											<a class="dropdown-item" href="callUs.html">Call Us</a>
										</div>
									</li>
								</ul>
                            
								<li class="nav-item">
									<a class="nav-link" href="portal-sign-in.php">Sign-in</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">||</a>
								</li>
								<li class="nav-item ">
									<a class="nav-link" href="portal-sign-up.php">Sign-up</a>
								</li>
								<form class="form-inline my-2 my-lg-0">
									<input class="form-control mr-sm-2" type="text" placeholder="Type to Search">
									<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
								</form>
								<li class="nav-item active">
									<li><a style="padding: 0px 30px;" href="?a=cart" id="li-cart"><i style="font-size: 1.5rem;margin-top: 6px;" class="fa fa-shopping-cart"></i> Cart (<?php echo $cart->getTotalItem(); ?>)</a></li>
								</li>

							</div>
                        </nav>
                    </div> 
                </div>   
            </div>
        
		

		<?php if ($a == 'cart'): ?>
		<div class="container">
			<h1>Shopping Cart</h1>

			<div class="row">
				<div class="col-md-12">
					 <div class="table-responsive">
						<?php echo $cartContents; ?>
					 </div>
				</div>
			</div>
		</div>
		<?php elseif ($a == 'checkout'): ?>
		<div class="container">
			<h1>Checkout</h1>
			<div class="row">
				<div class="col-md-12">
					 <div class="table-responsive">
					 	<pre><?php print_r($cart->getItems()); ?></pre>
					 </div>
				</div>
			</div>
		</div>
		<?php else: ?>
		<h1 style="margin-bottom: 65px;">Our Products</h1>
		<div class="product-container">
			
			<div class="row">
				<?php
					foreach ($products as $product) {
						echo '
											<div class="col-lg-3">
												<h3>' . $product->name . '</h3>

												<div>
													<div class="pull-left">
														<img src="' . $product->image->source . '" border="0" width="' . $product->image->width . '" height="' . $product->image->height . '" title="' . $product->name . '" />
													</div>
													<div class="pull-right">
														<h4>$' . $product->price . '</h4>
														<form>
															<input type="hidden" value="' . $product->id . '" class="product-id" />';

											if ($product->colors) {
												echo '
													<div class="form-group">
														<label>Color:</label>
														<select class="form-control color">';

												foreach ($product->colors as $key => $value) {
													echo '
														<option value="' . $key . '"> ' . $value . '</option>';
												}

												echo '
														</select>
													</div>';
											}

											echo '

											<div class="form-group">
												<label>Quantity:</label>
												<input type="number" value="1" class="form-control quantity" />
											</div>
											<div class="form-group">
												<button class="btn btn-danger add-to-cart"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
											</div>
										</form>
									</div>
									<div class="clearfix">
									
									
									</div>
								</div>
							</div>
						';
					}
				?>
			</div>
		</div>
		<?php endif; ?>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<script>
			$(document).ready(function(){
				$('.add-to-cart').on('click', function(e){
					e.preventDefault();

					var $btn = $(this);
					var id = $btn.parent().parent().find('.product-id').val();
					var color = $btn.parent().parent().find('.color').val() || '';
					var qty = $btn.parent().parent().find('.quantity').val();

					var $form = $('<form action="?a=cart" method="post" />').html('<input type="hidden" name="add" value=""><input type="hidden" name="id" value="' + id + '"><input type="hidden" name="color" value="' + color + '"><input type="hidden" name="qty" value="' + qty + '">');

					$('body').append($form);
					$form.submit();
				});

				$('.btn-update').on('click', function(){
					var $btn = $(this);
					var id = $btn.attr('data-id');
					var qty = $btn.parent().parent().find('.quantity').val();
					var color = $btn.attr('data-color');

					var $form = $('<form action="?a=cart" method="post" />').html('<input type="hidden" name="update" value=""><input type="hidden" name="id" value="'+id+'"><input type="hidden" name="qty" value="'+qty+'"><input type="hidden" name="color" value="'+color+'">');

					$('body').append($form);
					$form.submit();
				});

				$('.btn-remove').on('click', function(){
					var $btn = $(this);
					var id = $btn.attr('data-id');
					var color = $btn.attr('data-color');

					var $form = $('<form action="?a=cart" method="post" />').html('<input type="hidden" name="remove" value=""><input type="hidden" name="id" value="'+id+'"><input type="hidden" name="color" value="'+color+'">');

					$('body').append($form);
					$form.submit();
				});

				$('.btn-empty-cart').on('click', function(){
					var $form = $('<form action="?a=cart" method="post" />').html('<input type="hidden" name="empty" value="">');

					$('body').append($form);
					$form.submit();
				});
			});
		</script>
	</body>
</html>