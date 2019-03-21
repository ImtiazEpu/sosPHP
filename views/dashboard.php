<? require_once "partials/_dash_header.php"; ?>
    <div class="container-fluid">
        <div class="row">
            <? require_once "partials/_dash_sidebar.php" ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>
                <? require_once "partials/_notification.php"; ?>
                <div class="well">
                    <div class="alert alert-info">
                        You have been logged in as <strong><?php echo $_SESSION['user']['username'];?></strong>
                    </div>
                </div>
            </main>
        </div>
    </div>
<? require_once "partials/_dash_footer.php"; ?>