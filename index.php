<?php include('include/config.php'); ?>
<html>
<head>
  <title>Sukh Beauty Spa</title>
  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Carattere">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body> 
  <?php include('templates/header.php'); ?>

  <div class="first">
    <div class="facialImg">
		<?php
		$image_id = 1;  

		// Prepare and execute the SQL statement
		$stmt = $pdo->prepare("SELECT * FROM images WHERE id = :id");
		$stmt->bindParam(':id', $image_id, PDO::PARAM_INT);
		$stmt->execute();

		// Fetch the image row
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($row) {
			$id = $row['id'];
			$image = $row['image'];
			echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="Image">';
		} else {
			echo "Image not found!";
		}
		?>
    </div>
    <div class="facialContent">
      <div class="facialText">
        <h1>Sukh 
          Beauty 
          Spa</h1>
        <a href="services.php" class="checkServiceBtn">
          SERVICES
        </a>
      </div>
    </div>
  </div>

  <div class="background">
    <div class="slider-container">
        <div class="slider">
          <div class="slide">
			<?php
			$image_id = 2;  

			// Prepare and execute the SQL statement
			$stmt = $pdo->prepare("SELECT * FROM images WHERE id = :id");
			$stmt->bindParam(':id', $image_id, PDO::PARAM_INT);
			$stmt->execute();

			// Fetch the image row
			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($row) {
				$id = $row['id'];
				$image = $row['image'];
				echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="Image">';
			} else {
				echo "Image not found!";
			}
			?>
          </div>

          <div class="slide">
			<?php
			$image_id = 4;  

			// Prepare and execute the SQL statement
			$stmt = $pdo->prepare("SELECT * FROM images WHERE id = :id");
			$stmt->bindParam(':id', $image_id, PDO::PARAM_INT);
			$stmt->execute();

			// Fetch the image row
			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($row) {
				$id = $row['id'];
				$image = $row['image'];
				echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="Image">';
			} else {
				echo "Image not found!";
			}
			?>
          </div>

          <div class="slide">
			<?php
			$image_id = 5;  

			// Prepare and execute the SQL statement
			$stmt = $pdo->prepare("SELECT * FROM images WHERE id = :id");
			$stmt->bindParam(':id', $image_id, PDO::PARAM_INT);
			$stmt->execute();

			// Fetch the image row
			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($row) {
				$id = $row['id'];
				$image = $row['image'];
				echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="Image">';
			} else {
				echo "Image not found!";
			}
			?>
          </div>

          <div class="slide">
			<?php
			$image_id = 6;  

			// Prepare and execute the SQL statement
			$stmt = $pdo->prepare("SELECT * FROM images WHERE id = :id");
			$stmt->bindParam(':id', $image_id, PDO::PARAM_INT);
			$stmt->execute();

			// Fetch the image row
			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($row) {
				$id = $row['id'];
				$image = $row['image'];
				echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="Image">';
			} else {
				echo "Image not found!";
			}
			?>
          </div>

          <div class="slide">
			<?php
			$image_id = 7;  

			// Prepare and execute the SQL statement
			$stmt = $pdo->prepare("SELECT * FROM images WHERE id = :id");
			$stmt->bindParam(':id', $image_id, PDO::PARAM_INT);
			$stmt->execute();

			// Fetch the image row
			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($row) {
				$id = $row['id'];
				$image = $row['image'];
				echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="Image">';
			} else {
				echo "Image not found!";
			}
			?>
          </div>

          <div class="slide">
			<?php
			$image_id = 8;  

			// Prepare and execute the SQL statement
			$stmt = $pdo->prepare("SELECT * FROM images WHERE id = :id");
			$stmt->bindParam(':id', $image_id, PDO::PARAM_INT);
			$stmt->execute();

			// Fetch the image row
			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($row) {
				$id = $row['id'];
				$image = $row['image'];
				echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="Image">';
			} else {
				echo "Image not found!";
			}
			?>
          </div>

        </div>
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </div>
    <div class="dots-container">
        <span class="dot" data-index="0"></span>
        <span class="dot" data-index="1"></span>
        <span class="dot" data-index="2"></span>
        <span class="dot" data-index="3"></span>
        <span class="dot" data-index="4"></span>
        <span class="dot" data-index="5"></span>
    </div>
  </div>

  <div class="walkinAppt">
        <div class="textContent">
          <h4>Our Doors Are Open</h4>
          <h5>Walk-Ins and Appointments</h5>
          <p>Contact Us!</p>
          <a href="contact.html" class="checkContactBtn">
            CONTACT
          </a>
        </div>

        <div class="salonImg">

			<?php
			$image_id = 17;  

			// Prepare and execute the SQL statement
			$stmt = $pdo->prepare("SELECT * FROM images WHERE id = :id");
			$stmt->bindParam(':id', $image_id, PDO::PARAM_INT);
			$stmt->execute();

			// Fetch the image row
			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($row) {
				$id = $row['id'];
				$image = $row['image'];
				echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="Image">';
			} else {
				echo "Image not found!";
			}
			?>


        </div>
  </div>

  <div class="bottom">
    <div class="column">
      <h3>STAY CONNECTED</h3>
      <div class="socialMedia">
        <a href="https://www.facebook.com/SukhBeautySpa/" class="fa fa-facebook"></a>
        <a href="https://g.co/kgs/Zz81WrA" class="fa fa-google"></a>
        <a href="https://www.instagram.com/sukhbeautyspa/" class="fa fa-instagram"></a>
        <a href="https://www.yelp.com/biz/sukh-beauty-spa-salinas" class="fa fa-yelp"></a>
      </div>
    </div>
    <div class="column">
      <h3>LOCATION</h3>
      <div class="middle">
        <a href="https://maps.app.goo.gl/3hfbwcLiw6aXVWHj7" target="_blank">
          1574 N Main St, Salinas, CA 93906
        </a>
        <a href="tel:8318003821">(831) 800-3821</a>
      </div>
    </div>
    <div class="column">
      <h3>NAVIGATE</h3>
      <div class="navigation">
        <a href="index.html" class="naviHome">
          Home ›
        </a>
        <a href="about.html" class="naviAbout">
          About ›
        </a>
        <a href="services.html" class="naviServices">
          Services ›
        </a>
        <a href="products.html" class="naviProducts">
          Products ›
        </a>
        <a href="contact.html" class="naviContact">
          Contact ›
        </a>
      </div>
    </div>
  </div>

  <?php include('templates/footer.php'); ?>
</body>

<style>
  .first {
    position: relative; 
    display: inline-block; 
    width: 100%;
    padding-top: 94px;
  }

  .facialImg img {
    width: 100%;
    height: auto;
  }

  .facialText {
    position: absolute;
    top: 55%; 
    right: 20%; 
    transform: translateY(-50%); 
    /*top: 55%;
    right: 13%;
    transform: translate(-13%, -55%);*/
    text-align: center;
  }

  .facialText h1 {
    color: gray;
    font-size: 120;
    font-family: 'Carattere';
    font-size: bold;
    white-space: pre-line;
    margin: 0 0 30px 0;
  }

  .checkServiceBtn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 20px;
    color: white;
    background-color: gray;
    text-decoration: none;
    border: none;
    text-align: center;
    transition: background-color 0.3s ease;
    font-family: 'Times New Roman', Times, serif;
  }

  .checkServiceBtn:hover {
    background-color: rgb(98, 96, 96); 
  }

  @media (max-width: 1080px) {
    .facialText {
      top: 57%; 
      right: 17%; 
    }

    .facialText h1 {
      font-size: 110px; 
    }

    .checkServiceBtn {
      font-size: 1rem; 
      padding: 0.7rem 1.2rem; 
    }
  }

  @media (max-width: 1024px) {
    .facialText {
      top: 57%; 
      right: 17%; 
    }

    .facialText h1 {
      font-size: 95px; 
      margin: 0 0 10px 0;
    }

    .checkServiceBtn {
      font-size: 1rem;
      padding: 0.7rem 1.2rem; 
    }
  }

  @media (max-width: 860px) {
    .facialText {
      top: 60%; 
      right: 15%; 
      text-align: center; 
    }

    .facialText h1 {
      font-size: 85px; 
    }

    .checkServiceBtn {
      font-size: 0.8rem; 
      padding: 0.6rem 1rem;
    }
  }

  @media (max-width: 768px) {
    .facialText {
      top: 60%; 
      right: 15%; 
      text-align: center; 
    }

    .facialText h1 {
      font-size: 70px; 
    }

    .checkServiceBtn {
      font-size: 0.8rem; 
      padding: 0.6rem 1rem;
    }
  }

  @media (max-width: 750px) {
    .facialText {
      top: 60%;
      right: 17%; 
      text-align: center; 
    }

    .facialText h1 {
      font-size: 60px; 
    }

    .checkServiceBtn {
      font-size: 0.8rem; 
      padding: 0.6rem 1rem;
    }
  }

  @media (max-width: 480px) {
    .facialText {
      top: 65%; 
      right: 19%; 
      text-align: center; 
    }

    .facialText h1 {
      font-size: 40px; 
      margin: 0 0 10px 0;
    }

    .checkServiceBtn {
      font-size: 0.7rem; 
      padding: 0.5rem 0.8rem;
    }
  }
  
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .background {
    width: 100%; 
    height: auto;
    position: relative;
    display: flex; 
    flex-direction: column; 
    justify-content: center; 
    align-items: center; 
    padding-top: 50px;
  }

  .slider-container {
    position: relative; 
    width: 70%; 
    max-width: 100%;
    height: auto;
    overflow: hidden; 
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); 
  }

  .slider {
    display: flex; 
    transition: transform 0.4s ease-in-out; 
  }

  .slide {
    min-width: 100%; 
    height: 400px; 
    transition: transform 0.5s ease-in-out; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
  }

  .slide img {
    max-width: 100%; 
    max-height: 100%; 
    object-fit: contain;
  }

  .prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%); 
    background-color: rgba(0, 0, 0, 0.5); 
    color: white; 
    border: none; 
    width: 40px;
    height: 40px; 
    cursor: pointer; 
    z-index: 10; 
    border-radius: 50%; 
    transition: background-color 0.3s ease; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    padding: 0; 
  }

  .prev {
    left: 10px;
  }

  .next {
    right: 10px; 
  }

  .prev:hover, .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }

  .dots-container {
    margin-top: 20px; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
  }

  .dot {
    height: 15px; 
    width: 15px; 
    margin: 0 5px;
    background-color: rgba(255, 255, 255, 0.5); 
    border-radius: 50%; 
    display: inline-block; 
    cursor: pointer; 
    transition: background-color 0.3s ease; 
  }

  .dot.active {
    background-color: rgba(255, 255, 255, 1);
  }

  @media (max-width: 768px) {
    .slider-container {
      width: 100%; 
    }

    .slide {
      min-width: 100%; 
      height: 400px; 
      transition: transform 0.5s ease-in-out; 
    }

    .slide img {
      width: 100%;
      height: 100%;
      object-fit: cover; 
      border-radius: 3px; 
    }

    .prev, .next {
      width: 35px;
      height: 35px;
    }

    .dot {
      height: 12px;
      width: 12px;
    }
  }

  @media (max-width: 480px) {
    .slider-container {
      width: 100%; 
    }

    .slide {
      min-width: 100%; 
      height: 250px;
      transition: transform 0.5s ease-in-out; 
    }

    .slide img {
      width: 100%; 
      height: 100%; 
      object-fit: cover; 
      border-radius: 3px; 
    }

    .prev, .next {
      width: 30px;
      height: 30px;
    }

    .dot {
      height: 10px;
      width: 10px;
    }
  }

  .walkinAppt {
    display: flex;
    padding-top: 50px;
  }

  .textContent {
    flex: 1 1 calc(45% - 10px);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: left;
  }

  .salonImg {
    flex: 1 1 calc(55% - 10px);
    display: flex;
    flex-direction: column;
    width: 90px;
    height: auto;
  }

  .textContent h4 {
    font-size: 35;
    padding-bottom: 20px;
    font-family: 'Times New Roman', Times, serif;
  }

  .textContent h5 {
    font-size: 25;
    padding-bottom: 20px;
    font-family: 'Times New Roman', Times, serif;
  }

  .textContent p {
    font-size: 20;
    padding-bottom: 5px;
    font-family: 'Times New Roman', Times, serif;
    text-align: left;
  }

  .checkContactBtn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 18px;
    color: white;
    background-color: rgba(128, 0, 128, 0.547);
    text-decoration: none;
    border: none;
    text-align: center;
    transition: background-color 0.3s ease;
    font-family: 'Times New Roman', Times, serif;
  }

  .checkContactBtn:hover {
    background-color: rgba(128, 0, 128, 0.804); 
  }

  @media screen and (max-width: 768px) {
    .textContent h4 {
      font-size: 1.8rem;
    }

    .textContent h5 {
      font-size: 1.3rem;
    }

    .textContent p {
      font-size: 1.1rem;
    }

    .checkContactBtn {
      font-size: 0.9rem;
      padding: 8px 15px;
    }
  }

  @media screen and (max-width: 480px) {
    .walkinAppt {
      gap: 15px;
      padding-left: 15px;
    }

    .textContent h4 {
      font-size: 1.3rem;
      padding-bottom: 10px;
    }

    .textContent h5 {
      font-size: 0.9rem;
      padding-bottom: 10px;
    }

    .textContent p {
      font-size: 0.8rem;
      padding-bottom: 0px;
    }

    .checkContactBtn {
      font-size: 0.7rem;
      padding: 7px 11px;
    }
  }

  .bottom {
    display: flex;
    flex-wrap: wrap; 
    gap: 10px; 
    padding-top: 40px;
    background-color: gray;
  }

  .column {
    padding-top: 10px;
    flex: 1 1 calc(33.33px - 10px);
    display: flex;
    flex-direction: column; 
    align-items: center;   
    justify-content: flex-start;
    padding-bottom: 40px;
  }

  .column h3 {
    color: white; 
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 35;
  }

  .socialMedia {
    padding-top: 20px;
    display: grid;
    grid-template-columns: repeat(2, auto); 
    gap: 30px; 
    justify-content: center; 
    align-items: center; 
  }

  .socialMedia a {
    padding: 30px;
    text-align: center;
    text-decoration: none;
    border-radius: 50%;
  }

  .fa {
    font-size: 35;
    box-shadow: 0 0 8px rgba(255, 255, 255, 0.5);
    text-shadow: 0 0 4px rgba(255, 255, 255, 0.7), 
              0 0 8px rgba(255, 255, 255, 0.5);
  }

  .fa:hover {
    opacity: 0.7;
    transform: scale(1.1);
    box-shadow: white;
  }

  .fa-facebook {
    background: gray;
    color: white;
  }

  .fa-google {
    background: gray;
    color: white;
  }

  .fa-instagram {
    background: gray;
    color: white;
  }

  .fa-yelp {
    background: gray;
    color: white;
  }

  .middle {
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding-top: 10px;
  }

  .middle a {
    color: lightgray;
    font-size: 27;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-align: center;
  }

  .navigation {
    display: flex;
    flex-direction: column;
    gap: 10px;
    padding-top: 10px;
  }

  .navigation a {
    color: lightgray;
    text-decoration: none;
    font-size: 27;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }

  .navigation a:hover {
    text-decoration: underline;
    transform: scale(1.1);
  }

  @media screen and (max-width: 1024px) {
    .bottom {
      gap: 18px; 
      padding-left: 10px;
      padding-right: 10px;
      padding-bottom: 40px;
    }

    .column h3 {
      padding-top: 40px;
      font-size: 30;
    }

    .socialMedia {
      padding-top: 20px;
      gap: 27px;
    }

    .socialMedia a {
      padding: 23px;
    }

    .fa {
      font-size: 23;
    }

    .middle {
      gap: 20px;
      padding-top: 10px;
    }

    .middle a {
      font-size: 23;
    }

    .navigation {
      gap: 10px;
      padding-top: 10px;
    }

    .navigation a {
      font-size: 25;
    }
  }

  @media screen and (max-width: 768px) {
    .bottom {
      gap: 18px; 
      padding-left: 10px;
      padding-right: 10px;
      padding-bottom: 40px;
    }

    .column h3 {
      padding-top: 40px;
      font-size: 27;
    }

    .socialMedia {
      padding-top: 20px;
      gap: 27px;
    }

    .socialMedia a {
      padding: 20px;
    }

    .fa {
      font-size: 20;
    }

    .middle {
      gap: 20px;
      padding-top: 10px;
    }

    .middle a {
      font-size: 20;
    }

    .navigation {
      gap: 10px;
      padding-top: 10px;
    }

    .navigation a {
      font-size: 20;
    }
  }

  @media screen and (max-width: 480px) {
    .bottom {
      gap: 18px; 
      padding-left: 10px;
      padding-right: 10px;
      padding-top: 0px;
      padding-bottom: 0px;
    }

    .column h3 {
      font-size: 18;
    }

    .socialMedia {
      padding-top: 20px;
      gap: 20px; 
    }

    .socialMedia a {
      padding: 10px;
    }

    .fa {
      font-size: 20;
    }

    .middle {
      gap: 20px;
      padding-top: 10px;
    }

    .middle a {
      font-size: 16;
    }

    .navigation {
      gap: 10px;
      padding-top: 10px;
    }

    .navigation a {
      font-size: 16;
    }
  }
</style>

<script>
  const slider = document.querySelector('.slider');
  const slides = document.querySelectorAll('.slide');
  const prevBtn = document.querySelector('.prev');
  const nextBtn = document.querySelector('.next');
  const dots = document.querySelectorAll('.dot');
  const sliderContainer = document.querySelector('.slider-container');

  let currentIndex = 0; 
  let autoSlideInterval; 

  function updateDots() {
      dots.forEach((dot, index) => {
          if (index === currentIndex) {
              dot.classList.add('active');
          } else {
              dot.classList.remove('active');
          }
      });
  }

  function showSlides(index) {
      if (index >= slides.length) {
          currentIndex = 0;
      } else if (index < 0) {
          currentIndex = slides.length - 1; 
      } else {
          currentIndex = index; 
      }
      slider.style.transform = `translateX(-${currentIndex * 100}%)`;
      updateDots();
  }

  function nextSlide() {
      showSlides(currentIndex + 1);
  }

  function prevSlide() {
      showSlides(currentIndex - 1);
  }

  function startAutoSlide() {
      autoSlideInterval = setInterval(nextSlide, 4000); 
  }

  function stopAutoSlide() {
      clearInterval(autoSlideInterval); 
  }

  dots.forEach(dot => {
      dot.addEventListener('click', () => {
          stopAutoSlide(); 
          showSlides(parseInt(dot.dataset.index)); 
          startAutoSlide(); 
      });
  });

  nextBtn.addEventListener('click', nextSlide);
  prevBtn.addEventListener('click', prevSlide);

  sliderContainer.addEventListener('mouseover', stopAutoSlide);

  sliderContainer.addEventListener('mouseout', startAutoSlide);

  startAutoSlide();
  updateDots(); 
</script>
</html>
