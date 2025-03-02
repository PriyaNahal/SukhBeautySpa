<?php include('include/config.php'); ?>
<html>
<?php include('templates/header.php'); ?>

<div class="aboutPage">
	<?php
	$image_id = 3;

	// Prepare and execute the query securely
	$stmt = $pdo->prepare("SELECT * FROM images WHERE id = :image_id");
	$stmt->bindParam(':image_id', $image_id, PDO::PARAM_INT);
	$stmt->execute();

	// Fetch the result
	$row = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($row) {
		$id = $row['id'];
		$image = $row['image'];
	} else {
		echo "No image found with ID: $image_id";
	}
	?>

    <div class="imageContainer" style="background-image: url('data:image/jpeg;base64,<?php echo base64_encode($image); ?>');">
        <div class="content">
            <h2>Who We Are</h2>

            <p>Nestled in the heart of Salinas, Sukh Beauty Spa is your destination for expert beauty care and 
            relaxation. We take pride in offering a wide range of services, delivered with precision and care, 
            at prices you can trust. Since opening our doors in 2021, we've become a trusted name for those who 
            value exceptional beauty services at affordable rates.</p>
        
            <p>Whether you're stopping by for a quick touch-up or transformation, our members are here to make you 
            feel and look your absolute best. Stop by today or book an appointment with one of our fabulous crew members, 
            and find out why our clients come back time and again.</p>
        </div>
    </div>
</div> 

<?php include('templates/footer.php'); ?>

<style>
    .aboutPage {
        position: relative;
    }

    /*.aboutPage img {
        padding-top: 96px;
        width: 100%;
        height: 100vh;
        object-fit: cover;
    }*/

    .imageContainer {
        padding-top: 96px;
        position: relative;
        width: 100%;
        height: 100vh; 
        background-size: cover; 
        background-position: center; 
    }

    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: rgb(97, 96, 96);
    }

    .content h2 {
        margin-bottom: 20px;
        font-size: 40;
    }

    .content p {
        width: 600px;
        font-size: 18;
    }

    @media (max-width: 480px) {
        .content h2 {
            font-size: 35;
        }

        .content p {
            width: 350px;
            font-size: 17;
        }
    }
</style>
</html>
