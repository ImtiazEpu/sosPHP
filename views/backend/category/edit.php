<? partials_view( "_dash_header" ); ?>
    <div class="container-fluid">
        <div class="row">
            <? partials_view( "_dash_sidebar" ); ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit Category</h1>
                </div>
                <? partials_view( "_notification" ); ?>
                <form action="/eshopping/dashboard/categories/edit/<? echo $category->id; ?>" method="post">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" class="form-control" name="title" value=<?
                        echo $category->title; ?>>
                    </div>
                    <div class="form-group">
                        <label for="slug">Title slug</label>
                        <input type="text" id="slug" class="form-control" name="slug" value=<? echo $category->slug; ?>>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="active" id="status" class="form-control">
                            <option value="1"<? if ($category->active === 1) {
                                echo 'selected';
                            } ?>>Active
                            </option>
                            <option value="0"<? if ($category->active === 0) {
                                echo 'selected';
                            } ?>>Inactive
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block">Update Category</button>
                    </div>
                </form>
            </main>
        </div>
    </div>
<? partials_view( "_dash_footer" ); ?>