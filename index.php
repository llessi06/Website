<!DOCTYPE html>
<html lang="de-at" id="html" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="index.php"/>
    <link rel="canonical" href="https://lukaslesslhumer.com/index.php"/>
    <?php include 'scripts.php'; ?>
    <title>Home | Lukas Leßlhumer</title>
</head>

<body>
<?php include 'header.php'; ?>
<?php include 'cookie-banner.php'; ?>

<div class="container-fluid" id="container-main">
    <div class="container text-center">
        <div class="container col-xxl-8 px-4">
            <div class="row flex-lg-row-reverse align-items-center g-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="images/me.jpg" class="d-block mx-lg-auto img-fluid" alt="me" width="700"
                         height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <p class="lead" id="startseiteText1">Hello, my name is</p>
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3" id="startseiteText2">Lukas Leßlhumer</h1>
                    <p class="lead" id="startseiteText3">I'm a Software Developer from Austria.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a id="linkStartseite" href="kontakt.php">
                            <button type="button" class="btn btn-outline-primary btn-lg px-4 me-md-2">Contact me
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container px-4 py-5">
                <h2 class="pb-2 border-bottom">My Journey</h2>
                <div class="row g-4 align-items-center">
                    <div class="col">
                        <div class="col p-3">
                            <span class="fs-2 text-body-emphasis">2017 - 2021</span>
                        </div>
                        <div class="feature col">
                            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                                <img src="icons/backpack.svg" alt="Backpack" height="40px" width="40px"
                                     onload="SVGInject(this)">
                            </div>
                            <h3 class="fs-2 text-body-emphasis">MS Waizenkirchen</h3>
                        </div>
                    </div>

                    <div class="col">
                        <div class="col p-3">
                            <span class="fs-2 text-body-emphasis">ab 2021</span>
                        </div>
                        <div class="feature col">
                            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                                <img src="icons/laptop.svg" alt="Laptop" height="40px" width="40px"
                                     onload="SVGInject(this)">
                            </div>
                            <h3 class="fs-2 text-body-emphasis">HTL Grieskirchen</h3>
                            <p>Zweig Informatik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>