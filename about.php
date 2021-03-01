<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
    <link rel="stylesheet" href="style.css" />
    <script src="validimikodit.js"></script>

</head>
<body>
<?php
    include 'components/header.php'
?>

    <section id="newsletter">
        <div class="container">
            <h1>Merrni ofertat tona ne e-mail tuaj</h1>
            <form>
                <input type="email" placeholder="Enter Email..." />
                <button type="submit" class="button_1" formaction="https://www.sheffield.ac.uk/polopoly_fs/1.592452!/file/SSiD-web-development-offer.pdf">Merr Oferten</button>
            </form>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="emri-faqes">About us</h1>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </article>

            <aside id="sidebar">
                <div class="dark"
            <h3>What We Do</h3>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
            </aside>
        </div>
    </section>

    <?php
    include 'components/footer.php'
    ?>
</body>
</html>