<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fatal error | <?= $class ?></title>

    <link rel="stylesheet" href="/vendor/creativetimofficial/argon-design-system/assets/css/argon.min.css">
    <script src="/vendor/creativetimofficial/argon-design-system/assets/vendor/jquery/jquery.min.js" defer></script>
    <script src="/vendor/creativetimofficial/argon-design-system/assets/vendor/popper/popper.min.js" defer></script>
    <script src="/vendor/creativetimofficial/argon-design-system/assets/vendor/bootstrap/bootstrap.min.js" defer></script>
    <script src="/vendor/creativetimofficial/argon-design-system/assets/js/argon.min.js" defer></script>
</head>
<body>
    <div class="card container" style="margin-top: 35vh; border: 1px solid hsl(0, 0%, 85%)">
        <div class="card-header text-center"><span class="text-muted"><?= $dir ?></span></div>
        <div class="card-body mb-3">
            <h5 class="card-title">Fatal error in <?= $class ?></h5>
            <p class="card-text"><?= $message ?></p>
        </div>
    </div>
</body>
</html>