<?php include('include/config.php'); ?>
<html>
<?php include('templates/header.php'); ?>

<body>
    <div id="servicesTitle">
        <h1>Services</h1>
    </div>

    <div class="row">
        <div class="column">
            <div id="facialsContainer">
                <h2>Facials</h2>
                <table class="tables">
					<?php
					// Prepare and execute the query
					$stmt = $pdo->prepare("SELECT DISTINCT item, price FROM facial");
					$stmt->execute();

					// Fetch all results
					$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

					foreach ($rows as $row) {
						$item = htmlspecialchars($row['item']);
						$price = $row['price'];

						// Format price correctly
						if ($price === null || $price === '') {
							$formatted_price = "";  // Display "N/A" if price is missing
						} else {
							$formatted_price = "$" . number_format((float)$price, 2, '.', ','); // Ensure 2 decimal places
						}

						echo "<tr>";
						echo "<td>$item</td>";
						echo "<td>$formatted_price</td>";
						echo "</tr>";
					}
					?>
                </table>
            </div>
        </div>

        <div class="column">
            <div id="facialTreatContainer">
                <h2>Facial Treatments</h2>
                <table class="tables">
					<?php
					// Prepare and execute the query
					$stmt = $pdo->prepare("SELECT DISTINCT item, price FROM facial_treatment");
					$stmt->execute();

					// Fetch all results
					$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

					foreach ($rows as $row) {
						$item = htmlspecialchars($row['item']);
						$price = $row['price'];

						// Format price correctly
						if ($price === null || $price === '') {
							$formatted_price = "";  // Display "N/A" if price is missing
						} else {
							$formatted_price = "$" . number_format((float)$price, 2, '.', ','); // Ensure 2 decimal places
						}

						echo "<tr>";
						echo "<td>$item</td>";
						echo "<td>$formatted_price</td>";
						echo "</tr>";
					}
					?>
                </table>
            </div>
        </div>

        <div class="column">
            <div id="bodySculpting">
                <h2>Body Sculpting</h2>
                <table class="tables">
					<?php
					// Prepare and execute the query
					$stmt = $pdo->prepare("SELECT DISTINCT item, price FROM body_sculpting");
					$stmt->execute();

					// Fetch all results
					$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

					foreach ($rows as $row) {
						$item = htmlspecialchars($row['item']);
						$price = $row['price'];

						// Format price correctly
						if ($price === null || $price === '') {
							$formatted_price = "";  // Display "N/A" if price is missing
						} else {
							$formatted_price = "$" . number_format((float)$price, 2, '.', ','); // Ensure 2 decimal places
						}

						echo "<tr>";
						echo "<td>$item</td>";
						echo "<td>$formatted_price</td>";
						echo "</tr>";
					}
					?>
                </table>
            </div>
        </div>

        <div class="column">
            <div id="eyelashExt">
                <h2>Eyelash Extensions</h2>
                <table class="tables">
					<?php
					// Prepare and execute the query
					$stmt = $pdo->prepare("SELECT DISTINCT item, price FROM eyelash_extensions");
					$stmt->execute();

					// Fetch all results
					$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

					foreach ($rows as $row) {
						$item = htmlspecialchars($row['item']);
						$price = $row['price'];

						// Format price correctly
						if ($price === null || $price === '') {
							$formatted_price = "";  // Display "N/A" if price is missing
						} else {
							$formatted_price = "$" . number_format((float)$price, 2, '.', ','); // Ensure 2 decimal places
						}

						echo "<tr>";
						echo "<td>$item</td>";
						echo "<td>$formatted_price</td>";
						echo "</tr>";
					}
					?>
                </table>
            </div>
        </div>

        <div class="column">
            <div id="threadWax">
                <h2>Threading/Waxing</h2>
                <table class="tables">
					<?php
					// Prepare and execute the query
					$stmt = $pdo->prepare("SELECT DISTINCT item, price FROM thread_wax");
					$stmt->execute();

					// Fetch all results
					$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

					foreach ($rows as $row) {
						$item = htmlspecialchars($row['item']);
						$price = $row['price'];

						// Format price correctly
						if ($price === null || $price === '') {
							$formatted_price = "";  // Display "N/A" if price is missing
						} else {
							$formatted_price = "$" . number_format((float)$price, 2, '.', ','); // Ensure 2 decimal places
						}

						echo "<tr>";
						echo "<td>$item</td>";
						echo "<td>$formatted_price</td>";
						echo "</tr>";
					}
					?>
                </table>
            </div>
        </div>

        <div class="column">
            <div id="liftTint">
                <h2>Lash & Brows Lift/Tint</h2>
                <table class="tables">
					<?php
					// Prepare and execute the query
					$stmt = $pdo->prepare("SELECT DISTINCT item, price FROM lift_tint");
					$stmt->execute();

					// Fetch all results
					$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

					foreach ($rows as $row) {
						$item = htmlspecialchars($row['item']);
						$price = $row['price'];

						// Format price correctly
						if ($price === null || $price === '') {
							$formatted_price = "";  // Display "N/A" if price is missing
						} else {
							$formatted_price = "$" . number_format((float)$price, 2, '.', ','); // Ensure 2 decimal places
						}

						echo "<tr>";
						echo "<td>$item</td>";
						echo "<td>$formatted_price</td>";
						echo "</tr>";
					}
					?>
                </table>
            </div>
        </div>

        <div class="column">
            <div id="microblading">
                <h2>Microblading</h2>
                <table class="tables">
					<?php
					// Prepare and execute the query
					$stmt = $pdo->prepare("SELECT DISTINCT item, price FROM microblading");
					$stmt->execute();

					// Fetch all results
					$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

					foreach ($rows as $row) {
						$item = htmlspecialchars($row['item']);
						$price = $row['price'];

						// Format price correctly
						if ($price === null || $price === '') {
							$formatted_price = "";  // Display "N/A" if price is missing
						} else {
							$formatted_price = "$" . number_format((float)$price, 2, '.', ','); // Ensure 2 decimal places
						}

						echo "<tr>";
						echo "<td>$item</td>";
						echo "<td>$formatted_price</td>";
						echo "</tr>";
					}
					?>
                </table>
            </div>
        </div>

        <div class="column">
            <div id="teethWhitening">
                <h2>Teeth Whitening</h2>
                <table class="tables">
					<?php
					// Prepare and execute the query
					$stmt = $pdo->prepare("SELECT DISTINCT item, price FROM teeth_whi");
					$stmt->execute();

					// Fetch all results
					$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

					foreach ($rows as $row) {
						$item = htmlspecialchars($row['item']);
						$price = $row['price'];

						// Format price correctly
						if ($price === null || $price === '') {
							$formatted_price = "";  // Display "N/A" if price is missing
						} else {
							$formatted_price = "$" . number_format((float)$price, 2, '.', ','); // Ensure 2 decimal places
						}

						echo "<tr>";
						echo "<td>$item</td>";
						echo "<td>$formatted_price</td>";
						echo "</tr>";
					}
					?>
                </table>
            </div>
        </div>
    </div>
    <?php include('templates/footer.php'); ?>
    </body>

<style>
    .column {
        flex: 1 1 calc(50% - 10px); 
        padding: 50px;
        text-align: center;
    }

    .row {
        display: flex;
        padding-top: 50px;
        flex-wrap: wrap; 
        margin: auto;
    }

    @media (max-width: 768px) {
        .column {
            flex: 1 1 100%; 
        }

        .row {
            padding-top: 40px;
        }
    }

    th, td {
        color: black;
        padding-left: 50px;
        padding-right: 50px;
        padding-bottom: 10px;
        font-family: 'Courier New', Courier, monospace;
        font-size: 20;
    }

    #servicesTitle h1 {
        padding-top: 170px;
        text-align: center;
        color: black;
        font-size: 45;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    @media (max-width: 768px) {
        th, td {
            padding-left: 15px; 
            padding-right: 15px;
            font-size: 16px; 
        }

        #servicesTitle h1 {
            font-size: 30px; 
            padding-top: 150px; 
        }
    }

    #facialsContainer h2,
    #facialTreatContainer h2,
    #bodySculpting h2,
    #eyelashExt h2,
    #threadWax h2,
    #liftTint h2,
    #microblading h2,
    #teethWhitening h2 {
        color: black;
        margin: auto;
        padding-bottom: 20px;
        text-transform: uppercase;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .tables {
        margin-left: auto;
        margin-right: auto;
    }
</style>
</html>
