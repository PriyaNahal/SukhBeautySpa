<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Bonheur+Royale">
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Quintessential">
  <title>Sukh Beauty Spa</title>
</head>
<body>
    <div class="header-container">
      <span class="menu-btn" onclick="openNav()">☰</span>
      <h1>Sukh Beauty Spa</h1>
    

      <div id="sideMenu" class="sideMenu">
        <a href="javascript:void(0)" class="closeBtn" onclick="closeNav()">×</a>
        <div class="mainMenu">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="products.php">Products</a>
            <a href="contact.php">Contact</a>
        </div>
      </div>
    </div>
</body>

<style>
    body {
        background-color: rgb(251, 232, 234);/* #faf0e6;*/
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: space-between; 
    }

    .header-container {
        position: fixed;
        margin: 0 auto;
        padding: 20px 0;
        top: 0;
        left: 0;
        width: 100%;
        background-color:rgb(251, 249, 247);/*#f3ebe3;*/
        border-bottom: 1px solid #ddd;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: space-between;
        z-index: 1000;
        height: auto;
        box-sizing: border-box;
    }

    .header-container h1 {
        color: black;
        font-weight: bold;
        letter-spacing: 2px;
        margin: 0;
        padding: 0;
        font-size: calc(2.5rem + 1vw);
        font-family: Quintessential;
        flex-grow: 1; 
        text-align: center; 
    }
	
	@media (max-width: 480px) {
		.header-container h1 {
			font-size: calc(2rem + 1vw);
		}
	}

    .menu-btn {
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
        margin-left: 20px;
        margin-top: -7px;
        color: black;
    }

    .sideMenu {
        position: fixed;
        height: 100%;
        width: 0;
        z-index: 999;
        top: 0;
        left: 0;
        background: white;
        overflow-x: hidden;
        transition: 0.3s;
        padding-top: 120px;
    }

    .sideMenu a {
        padding-bottom: 8px;
        text-decoration: none;
        color: black;
        display: block;
        transition: 0.5s;
        font-size: 25px;
        margin-bottom: 30px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .mainMenu a:hover {
        color: #fff;
        background: lightgray;
    }

    .sideMenu .closeBtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }
</style>

<script>
    function openNav() {
        document.getElementById("sideMenu").style.width = "300px";
        document.getElementById("contentArea").style.marginLeft = "300px";
    }

    function closeNav() {
        document.getElementById("sideMenu")
            .style.width = "0";
        document.getElementById("contentArea")
            .style.marginLeft = "0";
    }
</script>
</html>
