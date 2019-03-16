<? require_once "partials/_header.php" ?>
<main role="main" class="login-page">
    <div class="container text-center">
        <form class="form-signin py-5">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required >
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <small id="emailHelp" class="py-4 form-text text-muted">New user ?
                <a href="registration.php" style="color: limegreen;">
                    <strong>Create an account</strong>
                </a>
            </small>
        </form>
    </div>
</main>
<? require_once "partials/_footer.php" ?>
