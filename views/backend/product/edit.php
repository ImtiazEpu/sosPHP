<? partials_view( "_dash_header" ); ?>
    <div class="container-fluid">
        <div class="row">
            <? partials_view( "_dash_sidebar" ); ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit Product</h1>
                </div>
                <? partials_view( "_notification" ); ?>
                <form action="/eshopping/dashboard/products/edit/<? echo $product->id; ?>" method="post"
                      enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" class="form-control" name="title" value="<? echo $product->title;
                        ?>">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category_id" id="category" class="form-control">
                            <? foreach ($categories as $category): ?>
                                <option value="<? echo $category->id; ?>"
                                    <? if ($category->id === $product->category_id) {
                                        echo 'selected';
                                    } ?>>
                                    <? echo $category->title ?>
                                </option>
                            <? endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" class="form-control"
                                  name="description"><? echo $product->description; ?></textarea>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" id="price" class="form-control" name="price"
                                   value="<? echo $product->price; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="sale_price">Sale price</label>
                            <input type="text" id="sale_price" class="form-control" name="sale_price"
                                   value="<? echo $product->sale_price; ?>">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="active" id="status" class="form-control">
                                <option value="1"<? if ($product->active === 1) {
                                    echo 'selected';
                                } ?>>Active
                                </option>
                                <option value="0"<? if ($product->active === 0) {
                                    echo 'selected';
                                } ?>>Inactive
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_photo">Product Photo</label>
                            <input type="file" id="product_photo" class="form-control-file" name="product_photo">
                            <? if ($product->product_photo): ?>
                                <img width="50"
                                     src="/eshopping/media/products/<? echo $product->product_photo->image_path;
                                     ?>" alt=""/>
                            <? else: ?>
                                <img src="holder.js/50x50?text=No image" alt=""/>
                            <? endif; ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Update Product</button>
                        </div>
                </form>
            </main>
        </div>
    </div>
<? partials_view( "_dash_footer" ); ?>