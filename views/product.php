<? require_once "partials/_header.php"; ?>
    <main role="main">
        <div class="container">
            <section class="jumbotron text-center py-4">
                <div class="container ">
                    <h1 class="jumbotron-heading"><? echo $product->title?></h1>
                </div>
            </section>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row m-0">
                        <div class="col-lg-5 left-side-product-box pb-3">
                            <img src="/eshopping/media/products/<? echo
                            $product->product_photo->image_path; ?>" alt="" class="border p-3">
                        </div>
                        <div class="col-lg-7">
                            <div class="right-side-pro-detail border p-3 m-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class="m-0 p-0"><? echo $product->title;?></p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="m-0 p-0 price-pro">BDT <? echo $product->price?></p>
                                        <hr class="p-0 m-0">
                                    </div>
                                    <div class="col-lg-12 pt-2">
                                        <h5>Product Detail</h5>
                                        <span><?echo $product->description?></span>
                                        <hr class="m-0 pt-2 mt-2">
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="row">
                                            <div class="col-lg-12">
                                            <form action="/eshopping/cart" method="post">
                                                <input type="hidden" name="id" value="<?echo $product->id?>">
                                                <button type="submit" class="btn btn-lg btn-block btn-success text-uppercase">Add To
                                                    Cart</button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php require_once "partials/_footer.php"; ?>