<? partials_view( "_dash_header" ); ?>
    <div class="container-fluid">
        <div class="row">
            <? partials_view( "_dash_sidebar" ); ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Add Product</h1>
                </div>
                <? partials_view( "_notification" ); ?>
                <? $categories = \App\Models\Category::all(); ?>
                <form action="/eshopping/dashboard/products" method="post">
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
                        <textarea id="description" class="form-control" name="description" placeholder="Enter description"></textarea>
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
                            <button type="submit" class="btn btn-success btn-block">Add Product</button>
                        </div>
                </form>
            </main>
        </div>
    </div>
<? partials_view( "_dash_footer" ); ?>