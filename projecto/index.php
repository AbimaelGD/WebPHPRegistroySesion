<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog PersonaL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="css/bulma.css" />
    <link rel="stylesheet" type="text/css" href="css/personal.css">
    <script async type="text/javascript" src="js/bulma.js"></script>
    <!--Carrusel-->
    <link rel="stylesheet" href="css/bulma-carousel.min.css">
    <!--slider-->
    <link rel="stylesheet" href="css/bulma-slider.min.css">

</head>

<body>
    <section class="hero is-info is-medium is-bold">
        <?php include 'views/header.php' ?>
    </section>
    <section class="section">
        <?php include 'controller/routing.php' ?>
        <?php include 'views/footer.php' ?>

    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>
    <script>
        bulmaCarousel.attach('#carousel-demo', {
            slidesToScroll: 1,
            slidesToShow: 1
        });
    </script>

</body>

</html>