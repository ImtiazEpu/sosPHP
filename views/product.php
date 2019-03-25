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
                                    <div class="col-lg-12">
                                        <h6>Quantity :</h6>
                                        <input type="number" class="form-control text-center w-100" value="1">
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="row">
                                            <div class="col-lg-6 pb-2">
                                                <a href="#" class="btn btn-danger w-100">Add To Cart</a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="#" class="btn btn-success w-100">Shop Now</a>
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