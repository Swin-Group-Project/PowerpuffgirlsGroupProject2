<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>powerpuff corp — Home</title>
    <meta name="description" content="powerpuff corp is a game development company expanding its tech team.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- Establish a connection with google API -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- load Barlow font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons"> <!-- Load Google icons -->
    <link rel="stylesheet" href="styles/styles.css">
    <!-- RYAN: Example of embedded CSS: homepage tiles -->
    <style>

      .tile-jobs {
       background: linear-gradient(135deg, #13254b, #3b759d);
        grid-area: jobs;
      }

      .tile-apply {
       background: linear-gradient(135deg, #5e2f54, #bc626e);
        grid-area: apply;
      }

      .tile-about {
        background: linear-gradient(135deg, #3b759d, #5e2f54);
        grid-area: about;
      }

    </style>
  </head>

  <body>

  <?php include "./includes/header.inc" ?>

    <!-- Main content container -->
    <main id="main" role="main" class="container" tabindex="-1">


      <section id="about" class="about" aria-labelledby="about-heading">
        <h2 id="about-heading">About Us</h2>
        <p>
          Powerpuff Corp is a Melbourne-based game studio expanding our tech team.
          We build the engine, rendering and tools that help artists and designers
          ship great gameplay—faster and safer.
        </p>
        </h2>
      </section>

      <!-- Section with navigation tiles -->
      <section class="tiles" role="navigation" aria-label="Feature tiles">
        <!-- Home tile (links back to index) -->
        <a class="tile tile-home hover-effect" href="index.php" aria-label="Go to Home page">
          <p class="eyebrow">Welcome</p>
          <h3>Home</h3>
        </a>

        <!-- Jobs tile (links to jobs page) -->
        <a class="tile tile-jobs hover-effect" href="jobs.php" aria-label="View open jobs">
          <p class="eyebrow">We&apos;re hiring</p>
          <h3>Jobs</h3>
          <p class="tile-text" style="color: #e5d4df;">View open positions and requirements.</p>
        </a>

        <!-- Apply tile (links to apply page) -->
        <a class="tile tile-apply hover-effect" href="apply.php" aria-label="Apply for a role">
          <p class="eyebrow">Join us</p>
          <h3>Apply</h3>
          <p class="tile-text" style="color: #e5d4df;">Apply by submitting your form.</p>
          
        </a>

        <!-- About tile (links to about page) -->
        <a class="tile tile-about hover-effect" href="about.php">
          <p class="eyebrow">Discover us</p>
          <h3>About</h3>
          <p class="tile-text" style="color: #e5d4df;">Learn more about our team</p>
        </a>

      </section>
    </main>

  <?php include "./includes/footer.inc" ?>
  
  </body>

</html>

