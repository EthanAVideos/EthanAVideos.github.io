<?php
// Calling needed php template files.
require 'php/main.php';

echo mainTopStart(); 
?>
<title>73 Duster - Images</title>
<?php echo mainTopEndStart(); ?>

<!-- Navbars -->
<?php echo navBar(); ?>
<!-- Body Start -->
<center>
	
  					<!-- $image_folder = "content/images/imageSystem/73-duster/";
 					$images = glob($image_folder . "*.{JPG,jpg}", GLOB_BRACE);

  					foreach ($images as $image) {
    				$imageFileName = basename($image);
    				echo "<a href='" . $image . "' target='_blank' title='Click me to view full screen'>";
    				echo "<img src='" . $image . "' alt='If this text is seen a image failed to load.' width='150' height='80' />";
    				echo "</a>";
 					 } -->
				
				<!-- Testing Image System (Code Start) -->
<?php
	$image_folder = "content/images/imageSystem/73-duster/";
	$images = glob($image_folder . "*.{JPG,jpg}", GLOB_BRACE);
?>

<!DOCTYPE html>
<html>
<head>
	<style>
		#overlay {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.35);
			z-index: 9999;
			display: none;
		}

		#overlay img {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			max-height: 90vh;
			max-width: 90vw;
			border: 2px solid #fff;
		}

		#overlay .close-button {
			position: absolute;
			top: 20px;
			left: 20px;
			cursor: pointer;
			color: #fff;
			background-color: black;
			padding-left: 10px;
			padding-right: 10px;
			border: 5px solid black;
			border-radius: 5px;
			font-size: 35px;
			transition: 2s;
		}
		
		#overlay .close-button:hover {
			transition: 2s;
			color: #78BE21;	
			font-size: 45px;	
		}

		#overlay .instruction-text {
			position: absolute;
			bottom: 20px;
			left: 50%;
			transform: translateX(-50%);
			color: #1E90FF;
			background-color: black;
			font-size: 16px;
			animation: fadeColors 3s infinite;
		}

		@keyframes fadeColors {
			0%, 50% {
				color: #1E90FF;
			}
			50.1%, 100% {
				color: #78BE21;
			}
		} 
		
		.test {
			transition: 2s;
			width: 150px; 
			height: 80px;	
		}
		
		.test:hover {
			transition: 2s;
			width: 180px; 
			height: 110px;	
		}
		
		.arrow {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			width: 50px;
			height: 50px;
			font-size: 45px;
			color: #fff;
			cursor: pointer;
			display: flex;
			align-items: center;
			justify-content: center;
			background-color: rgba(0, 0, 0, 0.7);
			border-radius: 50%;
			transition: 2s;
			z-index: 999;
		}

		.arrow.left {
			left: 20px;
		}
		
		.arrow:hover {
			transition: 2s;
				width: 70px;
				height: 70px;	
				color: #78BE21;
				font-size: 65px;
		}

		.arrow.right {
			right: 20px;
		}
	</style>
</head>
<body>
	<?php foreach ($images as $image): ?>
		<a href="#" class="image-link" data-image="<?php echo $image; ?>">
			<img class="test" src="<?php echo $image; ?>" alt="If this text is seen, an image failed to load."  width="150" height="80" />
		</a>
	<?php endforeach; ?>

	<div id="overlay">
		<span class="close-button">&times;</span>
		<div class="arrow left" onclick="navigateToImage(currentImageIndex - 1)">&#8249;</div>
		<div class="arrow right" onclick="navigateToImage(currentImageIndex + 1)">&#8250;</div>
		<img id="overlay-image" src="" alt="Full-screen Image" />
		<div class="instruction-text">
			Use left & right arrow keys or mouse scroll up & down to change images.
		</div>
	</div>

	<script>
		window.addEventListener('DOMContentLoaded', () => {
			const overlay = document.getElementById('overlay');
			const overlayImage = document.getElementById('overlay-image');
			const closeBtn = document.querySelector('.close-button');
			const imageLinks = document.querySelectorAll('.image-link');
			let currentImageIndex = 0;

			function showOverlay(imageUrl) {
				overlayImage.src = imageUrl;
				overlay.style.display = 'flex';
			}

			function hideOverlay() {
				overlay.style.display = 'none';
			}

			function showImage(index) {
				const imageLink = imageLinks[index];
				const imageUrl = imageLink.getAttribute('data-image');
				showOverlay(imageUrl);
				currentImageIndex = index;
			}

			function navigateToImage(index) {
				if (index < 0) {
					index = imageLinks.length - 1;
				} else if (index >= imageLinks.length) {
					index = 0;
				}

				showImage(index);
			}

			// Event listeners
			imageLinks.forEach((link, index) => {
				link.addEventListener('click', (e) => {
					e.preventDefault();
					showImage(index);
				});
			});

			closeBtn.addEventListener('click', hideOverlay);

			// Arrows navigation
			document.querySelector('.arrow.left').addEventListener('click', () => {
				navigateToImage(currentImageIndex - 1);
			});

			document.querySelector('.arrow.right').addEventListener('click', () => {
				navigateToImage(currentImageIndex + 1);
			});

			window.addEventListener('keydown', (e) => {
				if (overlay.style.display === 'flex') {
					switch (e.key) {
						case 'Escape':
							hideOverlay();
							break;
						case 'ArrowLeft':
							navigateToImage(currentImageIndex - 1);
							break;
						case 'ArrowRight':
							navigateToImage(currentImageIndex + 1);
							break;
					}
				}
			});

			window.addEventListener('wheel', (e) => {
				if (overlay.style.display === 'flex') {
					if (e.deltaY < 0) {
						navigateToImage(currentImageIndex - 1);
					} else if (e.deltaY > 0) {
						navigateToImage(currentImageIndex + 1);
					}
				}
			});
		});
	</script>
</body>
</html>

				<!-- Testing Image System (Code End) -->
</center>
<!-- Body End -->

<?php echo mainSiteEnd(); ?>
