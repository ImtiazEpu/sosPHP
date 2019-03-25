<? partials_view( "_dash_header" ); ?>
    <div class="container-fluid">
        <div class="row">
            <? partials_view( "_dash_sidebar" ); ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Add Product</h1>
                </div>
                <? partials_view( "_notification" ); ?>
                <form action="/eshopping/dashboard/products" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" class="form-control" name="title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category_id" id="category" class="form-control">
                            <? foreach ($categories as $category): ?>
                                <option value="<? echo $category->id; ?>"><? echo $category->title ?></option>
                            <? endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" class="form-control" name="description"
                                  placeholder="Enter description"></textarea>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" id="price" class="form-control" name="price" placeholder="Enter Price">
                        </div>
                        <div class="form-group">
                            <label for="sale_price">Sale price</label>
                            <input type="text" id="sale_price" class="form-control" name="sale_price"
                                   placeholder="Enter Sale Price">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="active" id="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product_photo">Product Photo</label>
                            <input type="file" id="product_photo" class="form-control-file" name="product_photo">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Add Product</button>
                        </div>
                </form>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Product List</h1>
                </div>
                <? if ($products->count() > 0): ?>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td class="text-center">Photo</td>
                            <td class="text-center">Title</td>
                            <td class="text-center">Slug</td>
                            <td class="text-center">Price</td>
                            <td class="text-center">Sale Price</td>
                            <td class="text-center">Status</td>
                            <td class="text-center">Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?
                        foreach ($products as $product):
                            ?>
                            <tr>
                                <td><? echo $product->id; ?></td>
                                <td class="text-center">
                                    <? if ($product->product_photo):?>
                                        <img width="50"
                                             src="/eshopping/media/products/<? echo $product->product_photo->image_path;
                                             ?>" alt=""/>
                                    <? else:?>
                                        <img src="holder.js/50x50?text=No image" alt=""/>
                                    <? endif; ?>
                                </td>
                                <td><? echo $product->title; ?></td>
                                <td><? echo $product->slug; ?></td>
                                <td class="text-right"><? echo $product->price; ?></td>
                                <td class="text-right"><? echo $product->sale_price; ?></td>
                                <td class="text-center"><? echo $product->active === 1 ? '<span class="badge badge-success py-2 px-2">Active</span>' : '<span class="badge badge-warning py-2 px-2">Inactive</span>'; ?></td>
                                <td class="text-center">
                                    <a href="/eshopping/dashboard/products/edit/<? echo $product->id; ?>"
                                       class="badge badge-info py-2 px-2"><i class="fas fa-edit"></i>
                                    </a>
                                    <a href="/eshopping/dashboard/products/delete/<? echo $product->id; ?>"
                                       class="badge badge-danger py-2 px-2" onclick="return confirm('Are you sure to ' +
                                        'Delete');"><i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <? endforeach; ?>
                        </tbody>
                    </table>
                <? else: ?>
                    <div class="alert alert-info">
                        No Product Found. Please Add one.
                    </div>
                <? endif; ?>
            </main>
        </div>
    </div>
<? partials_view( "_dash_footer" ); ?>