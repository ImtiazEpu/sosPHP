<? require_once "partials/_header.php"; ?>
    <main role="main">
        <section class="jumbotron bg-light text-center">
            <div class="container">
                <h1 class="jumbotron-heading">E-COMMERCE CART</h1>
            </div>
        </section>

        <div class="container mb-4">
            <div class="row">
                <? if (empty( $cart )): ?>
                    <div class="col-12">
                    <div class="alert alert-info my-4">
                        No product added to the cart at the moment.
                    </div>
                <? else: ?>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col" class="text-center">Product Name</th>
                                <th scope="col" class="text-right">Unit Price</th>
                                <th width="10%" scope="col" class="text-right">Quantity</th>
                                <th scope="col" class="text-right">Total Price</th>
                                <th scope="col" class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <? foreach ($cart as $key => $product): ?>
                                <tr>
                                    <td><img width="50" src="/eshopping/media/products/<? echo
                                        $product[ 'product_photo' ]; ?>"></td>
                                    <td class="text-center"><? echo $product[ 'title' ]; ?></td>
                                    <td class="text-right">
                                        BDT <? echo number_format( $product[ 'unit_price' ] , 2 ); ?></td>
                                    <td><input class="form-control" type="number" value="<? echo $product[ 'quantity' ];
                                        ?>"/></td>
                                    <td class="text-right">
                                        BDT <? echo number_format( $product[ 'total_price' ] , 2 ); ?></td>

                                    <td class="text-right">
                                        <form action="/eshopping/cart/remove" method="post">
                                            <input type="hidden" name="id" value="<? echo $key; ?>">
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa
                                            fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <? endforeach; ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total Price:</strong></td>
                                <td class="text-right"><strong>BDT <? echo number_format( $sum , 2 ); ?></strong></td>
                                <td class="text-right">
                                    <form action="/eshopping/cart/destroy" method="post">
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-shopping-cart"></i>
                                            Empty Cart
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                    <div class="col mb-2">
                        <div class="row">
                            <div class="col-sm-12  col-md-6">
                                <a href="/eshopping" class="btn btn-lg btn-block btn-light text-uppercase">Continue
                                    Shopping</a>
                            </div>
                            <div class="col-sm-12 col-md-6 text-right">
                                <button type="submit" class="btn btn-lg btn-block btn-success text-uppercase">Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                <? endif; ?>
            </div>
        </div>
    </main>
<? require_once "partials/_footer.php" ?>