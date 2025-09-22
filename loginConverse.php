<!DOCTYPE html>
<html lang="en">

<?php $error = ''; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Converse</title>

    <!-- ESTA LÍNEA ES LA CLAVE -->
    <base href="/converseLarry/vendor/lightdata-user/pruebas-templates/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/smartapp.css" rel="stylesheet">
    <link href="css/authentication.css" rel="stylesheet">
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark position-fixed w-100 py-3" style="z-index: 1000;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo-converse-white.svg" alt="logo" style="height: 100px;">
            </a>
            <div class="ms-auto d-flex gap-2">
                <a href="login.php" class="btn btn-link text-white border-0 text-decoration-none">Login</a>
                <a href="register.html" class="btn btn-link text-white border-0 text-decoration-none">Register</a>
            </div>
        </div>
    </nav>

    <section class="hero-section position-relative overflow-hidden">
        <div class="container" style="position: relative; z-index: 1;">
            <div class="row justify-content-center">
                <div class="col-11 col-md-8 col-lg-6 col-xl-4">
                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                    <?php endif; ?>

                    <div id="regular-login" class="login-card p-4 p-md-5 bg-dark bg-opacity-50 translucent-dark rounded-4">
                        <h2 class="text-center mb-4">Login</h2>
                        <p class="text-center text-white opacity-50 mb-4">Please enter your credentials below</p>
                        <form method="POST" action="/orquestadorLiit/handleLogin.php">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control form-control-lg text-dark bg-white border-light border-opacity-25" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select name="role" class="form-control form-control-lg" id="role" required>
                                    <option value="">Select a role</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input name="password" type="password" class="form-control form-control-lg text-dark bg-white border-light border-opacity-25" id="password" required>
                                </div>
                            </div>
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary btn-lg bg-primary bg-opacity-75">Sign In</button>
                            </div>
                            <div class="text-center mb-4">
                                <a href="forgetpassword.html" class="text-decoration-none small text-white">Forgot Password?</a>
                            </div>
                            <div class="divider small text-white opacity-25">or</div>
                            <div class="d-grid mb-3">
                                <button type="button" id="switchToToken" class="btn btn-dark bg-opacity-50 border-dark btn-lg"> Login with Token </button>
                            </div>
                        </form>
                    </div>

                    <div id="token-login" class="login-card d-none p-4 p-md-5 bg-dark bg-opacity-50 translucent-dark rounded-4">
                        <h2 class="text-center mb-4">Login</h2>
                        <p class="text-center text-white opacity-50 mb-4">Login with Token</p>
                        <form>
                            <!-- botones de OAuth aquí -->
                            <div class="d-grid mb-3">
                                <button type="button" class="btn btn-lg">Sign In Using Google</button>
                            </div>
                            <!-- …otros botones… -->
                            <div class="divider small text-white opacity-25">or</div>
                            <div class="d-grid mb-3">
                                <button type="button" id="switchToRegular" class="btn btn-dark bg-opacity-50 border-dark btn-lg"> Sign In Using Password </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="net"></div>
    </section>

    <script src="scripts/smartApp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.halo.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
    <script>
        VANTA.HALO({
            el: "#net",
            mouseControls: false,
            touchControls: false,
            gyroControls: false,
            color: 0xfd3995,
            size: 1.6,
            scale: 0.75,
            xOffset: 0.22,
            scaleMobile: 0.50,
        });

        const switchToTokenButton = document.querySelector('#switchToToken');
        const switchToRegularButton = document.querySelector('#switchToRegular');
        const regularLogin = document.querySelector('#regular-login');
        const tokenLogin = document.querySelector('#token-login');
        switchToTokenButton.addEventListener('click', () => {
            regularLogin.classList.add('d-none');
            tokenLogin.classList.remove('d-none');
        });
        switchToRegularButton.addEventListener('click', () => {
            tokenLogin.classList.add('d-none');
            regularLogin.classList.remove('d-none');
        });
    </script>
</body>

</html>