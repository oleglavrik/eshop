<?php include(ROOT . '/views/layout/header.php'); ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Каталог</h2>
                        <div class="panel-group category-products">
                            <?php include(ROOT . '/views/layout/left-sidebar.php'); ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center"><?php echo                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 $categoryProducts['0']['name']; ?></h2>
                        <?php foreach($categoryProducts as $productItem) : ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="/product/<?php echo $productItem['id']; ?>">
                                                <img src="/template/<?php echo $productItem['image']; ?>" alt="" />
                                            </a>
                                            <h2><?php echo '$' . $productItem['price']; ?></h2>
                                            <a href="/product/<?php echo $productItem['id']; ?>"><p><?php echo $productItem['name']; ?></p></a>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        <?php if($productItem['is_new']) : ?>
                                            <img src="/template/images/home/new.png" class="new" alt="" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>


                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>

<?php include(ROOT . '/views/layout/footer.php'); ?>