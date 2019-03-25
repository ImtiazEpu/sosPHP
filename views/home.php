<?php require_once 'partials/_header.php'; ?>
<main role="main">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator,
                etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Main call to action</a>
                <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <? foreach ($products as $product): ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <a href="/eshopping/product/<? echo $product->slug; ?>">
                                <img class="card-img-top pro-img-size" src="/eshopping/media/products/<? echo
                                $product->product_photo->image_path; ?>" alt="">
                            </a>

                            <div class="card-body">
                                <a class="px-2" href="/eshopping/product/<? echo $product->slug; ?>">
                                    <p class="card-text"><? echo $product->title; ?></p>
                                </a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to cart
                                        </button>
                                    </div>
                                    <span class="text-muted">BDT <? echo $product->price; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</main>
<?php require_once "partials/_footer.php"; ?>
