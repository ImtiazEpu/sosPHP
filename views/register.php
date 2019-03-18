<? require_once "partials/_header.php" ?>
    <main role="main" class="login-page">
        <div class="container">

            <? require_once "partials/_notification.php" ?>

            <form action="/eshopping/register" method="post" class="form-signin py-5" enctype="multipart/form-data">
                <h1 class="h3 mb-3 font-weight-normal">Create an account</h1>
                <label id="inputUsername" class="sr-only">Username</label>
                <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Email username"
                       required>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email address"
                       required>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"
                       required>
                <label for="inputPhoto" class="sr-only">Profile Photo</label>
                <input type="file" id="inputPhoto" name="profile_photo" class="form-control" required>
                <button class="mt-3 btn btn-lg btn-primary btn-block" type="submit">Register</button>
                <small id="emailHelp" class="py-4 form-text text-muted">Already have an account ?
                    <a href="/eshopping/login" style="color: limegreen;">
                        <strong> Login now</strong>
                    </a>
                </small>
            </form>
        </div>
    </main>

<? require_once "partials/_footer.php" ?>