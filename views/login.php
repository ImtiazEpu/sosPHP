<? require_once "partials/_header.php" ?>
<main role="main" class="login-page">
    <div class="container">
        <? require_once "partials/_notification.php" ?>
        <form class="form-signin py-5" action="/eshopping/login" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required >
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"
                   required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <small id="emailHelp" class="py-4 form-text text-muted">New user ?
                <a href="/eshopping/register" style="color: limegreen;">
                    <strong>Create an account</strong>
                </a>
            </small>
        </form>
    </div>
</main>
<? require_once "partials/_footer.php" ?>
