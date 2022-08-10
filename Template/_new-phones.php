<?php
    shuffle($product_shuffle);

    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['new_phones_submit'])){
            if(isset($_SESSION['is_login']))
            {
                $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
                header('location:cart.php');
            }else{
                header('location:login.php');
            }
        }
    }
?>


<section id="new-phones">
    <div class="container">
        <h4 class="font-size-20 font-rubik">New Phones</h4>
        <hr>
        <!--Owlcarousel-->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) {?>
                <div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?? "unknown";?></h6>
                            <div class="rating font-size-12 text-warning">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $item['item_price'] ?? '0'; ?></span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                    if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                        echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                    }else{
                                        echo '<button type="submit" name="new_phones_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>