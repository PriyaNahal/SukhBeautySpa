<?php include('include/config.php'); ?>
<html>
<?php include('templates/header.php'); ?>

<div id="contactTitle">
    <h1>Contact Us</h1>

  <div class="row">
    <div class="column">
      <div id="mapContainer">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.3907426163205!2d-121.6529749!3d36.713175899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808dff8ee8e76ee7%3A0x6b7d61729ec50b85!2sSukh%20Beauty%20Spa!5e0!3m2!1sen!2sus!4v1736324110485!5m2!1sen!2sus" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div id="getDirections">
        <a href="https://maps.app.goo.gl/3hfbwcLiw6aXVWHj7" target="_blank" class="directionsButton">
          Get Directions
        </a>
        </div>
      </div>
    </div>

    <div class="column">
      <div id="contactInfo">
        <div id="address">
          <h3>Address</h3>
          <a href="https://maps.app.goo.gl/3hfbwcLiw6aXVWHj7" target="_blank">
            1574 N Main St, Salinas, CA 93906
          </a>
        </div>
    
        <div id="phoneNum">
          <h3>Phone Number</h3>
          <a href="tel:8318003821">(831) 800-3821</a>
        </div>
    
        <div id="socialMedia">
          <h3>Social Media</h3>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <a href="https://www.facebook.com/SukhBeautySpa/" class="fa fa-facebook"></a>
          <a href="https://g.co/kgs/Zz81WrA" class="fa fa-google"></a>
          <a href="https://www.instagram.com/sukhbeautyspa/" class="fa fa-instagram"></a>
<a href="https://www.tiktok.com/@sukhbeautyspa" class=" fa-brands fa-tiktok" target="_blank">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
	  <path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg>
</a>

		  <a href="https://www.tiktok.com/@sukhbeautyspa" class="bi bi-tiktok"></a>
          <a href="https://www.yelp.com/biz/sukh-beauty-spa-salinas" class="fa fa-yelp"></a>
        </div>
      </div>
    </div>

    <div class="column">
      <div id="hours">
          <h3>Hours</h3>
          <p>Sunday: 11 AM - 5 PM</p>
          <p>Monday: Closed</p>
          <p>Tuesday: 10 AM - 6:30 PM</p>
          <p>Wednesday: 10 AM - 6:30 PM</p>
          <p>Thursday: 10 AM - 6:30 PM</p>
          <p>Friday: 10 AM - 6:30 PM</p>
          <p>Saturday: 10AM - 6:30 PM</p>
      </div>
    </div>
  </div>
</div>

<?php include('templates/footer.php'); ?>

<style>
  #contactTitle h1 {
    position: relative;
    text-align: left;
    padding-left: 60px;
    padding-top: 150px;
    color: gray;
    font-size: 45;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .row {
    display: flex;
    flex-wrap: wrap; 
    gap: 10px; 
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 40px;
  }

  .column {
    flex: 1 1 calc(33.33px - 10px);
    display: flex;
    flex-direction: column; 
    align-items: center;   
    justify-content: flex-start;
    padding-bottom: 40px;

  }

  @media (max-width: 768px) {
    .column {
      flex: 1 1 100%;
    }
  }

  @media (max-width: 480px) {
    .column {
      flex: 1 1 100%;
      padding-bottom: 70px;
      
    }

    #contactTitle h1 {
      padding-left: 25px;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-size: 43;
    }

    #mapContainer {
      order: 2; 
    }

    #contactInfo {
      order: 1; 
    }

    #hours {
      order: 3;
    }
  }

  #mapContainer {
    display: flex;
    flex-direction: column;
    text-align: left;
  }

  #getDirections {
    display: flex;
    flex-direction: column; 
    padding-top: 5px;
  }

  .directionsButton {
    display: inline-block;
    background-color: black; 
    color: white;           
    padding: 10px 20px;    
    text-decoration: none;  
    font-size: 16px;        
    border-radius: 4px;     
    text-align: center;     
    border: none;          
    cursor: pointer;  
    max-width: 145;
  }

  .directionsButton:hover {
    background-color: #716f6f; 
  }

  #contactInfo h3 {   
    display: flex;
    flex-direction: column;  
    text-align: left;
    text-transform: uppercase;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 30;
  }

  #address a {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 21;
    padding-bottom: 40px;
  }

  #phoneNum h3 {
    padding-top: 60px;
  }

  #phoneNum a {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 21;
  }

  #socialMedia h3 {
    padding-top: 60px;
  }

  #hours h3 {
    display: flex;
    flex-direction: column;
    text-align: left;
    text-transform: uppercase;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 30;
  }

  #hours p {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 21;
  }

  #socialMedia a, svg {
    padding: 20px;
    text-align: center;
    text-decoration: none;
    border-radius: 50%;
  }

  .fa:hover {
      opacity: 0.7;
      transform: scale(1.1);
  }

  .fa-facebook {
      background: #3B5998;
      color: white;
  }

  .fa-google {
      background: #dd4b39;
      color: white;
  }

  .fa-instagram {
      background: #125688;
      color: white;
  }
	
  .fa-tiktok {
      background: white;
      color: white;
  }

  .fa-yelp {
      background: white;
      color: red;
  }
</style>
</html>
