<? require_once "partials/_header.php" ?>
<main role="main" class="login-page">
    <div class="container text-center">
        <form class="form-signin py-5">
            <h1 class="h3 mb-3 font-weight-normal">Create an account</h1>
            <label for="inputName" class="sr-only">Full Name</label>
            <input type="text" id="inputName" class="form-control" placeholder="Full name" required >
            <label for="inputUsername" class="sr-only">Username</label>
            <input type="text" id="inputUsername" class="form-control" placeholder="Email username" required >
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required >
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputPhoto" class="sr-only">Profile Photo</label>
            <input type="file" id="inputPhoto" class="form-control" required>
            <button class="mt-3 btn btn-lg btn-primary btn-block" type="submit">Register</button>
            <small id="emailHelp" class="py-4 form-text text-muted">Already have an account ?
                <a href="login.php" style="color: limegreen;">
                    <strong> Login now</strong>
                </a>
            </small>
        </form>
    </div>
</main>

<? require_once "partials/_footer.php" ?>