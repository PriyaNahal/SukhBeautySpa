<?php include('include/config.php'); ?>
<html>
<?php include('templates/header.php'); ?>

<div id="productTitle">
    <h1>PRODUCTS</h1>
</div>

<div class="row">
    <?php
		$query = $pdo->query("SELECT * FROM products");
		while($row = $query->fetch(PDO::FETCH_ASSOC)) {
			$image = $row['image'];
			$item = $row['item'];
			$description = $row['description'];
			$price = $row['price'];
    ?>
    <div class="column">
    <tr>
        <?php if($image): ?>
            <div class="image-container">
                <img src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>" alt="<?php echo $item; ?> image">
                <button class="more-btn" onclick="showDescription('<?php echo $description; ?>', this)">More</button>
                <div class="descriptionBox hidden"></div>
            </div>
        <?php else: ?>
            <p>No image available.</p>
		<?php endif; ?>
		<div class="products"><?php echo $item; ?></div>
		<div class="price">$<?php echo number_format($price, 2); ?></div>
    </tr>
    </div>
    <?php
    }
    ?>
</div>

<?php include('templates/footer.php'); ?>

<style>
    * {
        box-sizing: border-box;
    }

    #productTitle h1 {
        padding-top: 170px;
        padding-left: 40px;
        text-align: left;
        color: gray;
        font-weight: bold;
        font-size: 40;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .column {
        flex: 1 1 calc(25% - 10px); 
        padding: 10px;
        text-align: center;
        position: relative;
        display: block;
        width: calc(25% - 20px);
        box-sizing: border-box;
        padding-bottom: 20px;
    }

    .row {
        display: flex;
        padding-top: 50px;
        flex-wrap: wrap; 
        padding-left: 20px;
        padding-right: 20px;
        justify-content: flex-start;
        
    }

    @media (max-width: 850px) {
        .column {
            flex: 1 1 calc(50% - 10px);
        }
    }

    .boxes {
        background-color: #f4f4f4; 
        border: 1px solid #ccc; 
        border-radius: 5px; 
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
        text-align: center; 
        height: 100px; 
    }

    img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;   
    }

    .products {
        font-weight: bold;
        text-align: left;
        padding-top: 10px;
    }

    .price {
        text-align: left;
        padding-top: 10px;
    }

    .image-container {
        position: relative;
    }

    .more-btn {
        position: absolute;
        bottom: 10px;
        right: 10px;
        padding: 5px 10px;
        color: rgb(121, 70, 70);
        border: none;
        cursor: pointer;
    }

    .more-btn:hover {
        background-color: rgb(77, 42, 42); 
    }

    .descriptionBox {
        position: absolute;
        top: 50%;
        left: calc(100% + 10px); 
        width: 300px;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        transform: translateY(-50%);
        z-index: 1000;
        max-height: 300px;
        overflow-y: auto; 
    }

    @media screen and (max-width: 1024px) {
        .descriptionBox {
            width: 250px;
        }

        .more-btn {
            padding: 1px 7px;
        }
    }

    @media screen and (max-width: 768px) {
        .descriptionBox {
            width: 250px;
        }
    }

    @media screen and (max-width: 480px) {
        .descriptionBox {
            width: 200px;
        }

        .more-btn {
            padding: 1px 7px;
        }
    }

    .descriptionBox::-webkit-scrollbar-thumb:hover {
        background-color: #555;
    }

    .descriptionBox:after {
        content: '';
        position: absolute;
        top: 50%;
        left: -10px;
        transform: translateY(-50%);
        border-width: 10px;
        border-style: solid;
        border-color: transparent white transparent transparent;
    }

    .hidden {
        display: none; 
    }
</style>

<script>
    function showDescription(description, btn) {
        const bubble = btn.nextElementSibling;
        const imageContainer = btn.closest('.image-container'); 
        const bubbleWidth = 300; 
        const padding = 10; 
        const viewportWidth = window.innerWidth;

        const isMobile = window.matchMedia("(max-width: 480px)").matches;

        document.querySelectorAll('.descriptionBox').forEach(b => {
            if (b !== bubble) {
                b.classList.add('hidden');
            }
        });

        if (bubble.classList.contains('hidden')) {
            bubble.textContent = description;
            bubble.classList.remove('hidden');

            const containerRect = imageContainer.getBoundingClientRect();

            if(!isMobile) {
                if (containerRect.right + bubbleWidth + padding < viewportWidth) {
                    bubble.style.left = 'calc(100% + 10px)'; 
                    bubble.style.right = 'auto'; 
                } else {
                    bubble.style.left = 'auto'; 
                    bubble.style.right = 'calc(100% + 10px)'; 
                }

                bubble.style.top = '50%';
                bubble.style.transform = 'translateY(-50%)';
            } else {
                const bubbleWidth = 200; 
                if (containerRect.right + bubbleWidth + padding < viewportWidth) {
                    bubble.style.left = 'calc(100% + 10px)'; 
                    bubble.style.right = 'auto'; 
                } else {
                    bubble.style.left = 'auto'; 
                    bubble.style.right = 'calc(100% + 10px)'; 
                }

                bubble.style.top = '50%';
                bubble.style.transform = 'translateY(-50%)';
            }
        } else {
            bubble.classList.add('hidden'); 
        }
    }

    document.addEventListener('click', (event) => {
        const isClickInside = event.target.closest('.image-container');
        const isClickOnButton = event.target.classList.contains('more-btn');
        if (!isClickInside || (isClickInside && !isClickOnButton)) {
            document.querySelectorAll('.descriptionBox').forEach(bubble => {
                bubble.classList.add('hidden');
            });
        }
    });
</script>
</html>
