<? partials_view( "_dash_header" ); ?>
    <div class="container-fluid">
        <div class="row">
            <? partials_view( "_dash_sidebar" ); ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Add Category</h1>
                </div>
                <? partials_view( "_notification" ); ?>
                <form action="/eshopping/dashboard/categories" method="post">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" class="form-control" name="title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="active" id="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block">Add Category</button>
                    </div>
                </form>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Categories List</h1>
                </div>
                <? $category = \App\Models\Category::all(); ?>
                <? if ($category->count() > 0): ?>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Title</td>
                            <td>Slug</td>
                            <td>Status</td>
                            <td width="10%" class="text-center">Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        <? $categories = \App\Models\Category::all();
                        foreach ($categories as $category):
                            ?>
                            <tr>
                                <td><? echo $category->id; ?></td>
                                <td><? echo $category->title; ?></td>
                                <td><? echo $category->slug; ?></td>
                                <td><? echo $category->active === 1 ? '<span class="badge badge-success py-2 px-2">Active</span>' : '<span class="badge badge-warning py-2 px-2">Inactive</span>'; ?></td>
                                <td class="text-center">
                                    <a href="/eshopping/dashboard/categories/edit/<? echo $category->id; ?>"
                                       class="badge badge-info py-2 px-2"><i class="fas fa-edit"></i>
                                    </a>
                                    <a href="/eshopping/dashboard/categories/delete/<? echo $category->id; ?>"
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
                        No Category Found. Please Add one.
                    </div>
                <? endif; ?>
            </main>
        </div>
    </div>
<? partials_view( "_dash_footer" ); ?>