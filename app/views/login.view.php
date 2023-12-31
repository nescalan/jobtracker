<!DOCTYPE html>
<html style="font-size: 16px" lang="es">

<head>
    <!-- META -->
    <meta name="theme-color" content="#0149b8" />
    <meta property="og:title" content="actividad" />
    <meta property="og:type" content="website" />
    <meta data-intl-tel-input-cdn-path="intlTelInput/" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="keywords"
        content="work orders, maintenance, repairs, tickets, tasks, tracking, reporting, management" />
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://jobtracker.ai/static/media/jobTracker_logo.841b821f.svg"
        type="image/x-icon">
    <!-- CSS: Local style -->
    <link rel="stylesheet" href="public/css/index.css" />
    <link rel="stylesheet" href="public/css/nicepage.css">
    <script class="u-script" type="text/javascript" src="./public/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./public/js/nicepage.js" defer=""></script>
    <meta name="generator" content="Mobilnet Solutions, mobilnetcr.net" />
    <!-- FONT: Google font -->
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Mulish:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" />
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" />
    <title>JobTracker | Login page</title>
</head>

<body data-home-page="actividad.html" data-home-page-title="actividad" class="u-body u-xl-mode" data-lang="es">
    <section class="container">
        <div class="content">
            <div class="flex">
                <i style="
              background-image: url('https://jobtracker.ai/static/media/jobTracker_logo.841b821f.svg');
              background-size: contain;
              width: 50px;
              height: 40px;
              background-repeat: no-repeat;
            " role="img" class="" aria-label="Instagram" data-visualcompletion="css-img"></i>
                <p>JobTracker</p>
            </div>

            <!-- FORM: Login -->
            <form class="content__form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="content__inputs">
                    <label>
                        <input type="text" name="user" />
                        <span>Correo electrónico</span>
                    </label>
                    <label>
                        <input type="password" name="password" />
                        <span>Contraseña</span>
                    </label>
                </div>
                <button>Iniciar sesión</button>

                <!-- Error messages -->
                <?php if (!empty($errorMessage)): ?>
                    <div class=" p-2">
                        <?php echo $errorMessage; ?>
                    </div>

                <?php elseif (!empty($successMessage)): ?>
                    <div class=" p-2">
                        <?php echo $successMessage; ?>
                    </div>
                <?php endif; ?>
            </form>

            <div class="content__forgot-buttons">
                <a href="register.php">¿No tienes una cuenta? Registrate aquí</a>
            </div>

        </div>
    </section>

    <!-- SCRIPT: ld+json -->
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "./public/img/b78c1c47-c604-4ca8-9934-e25928046c8b.png",
        "sameAs": []
      }
    </script>
</body>

</html>