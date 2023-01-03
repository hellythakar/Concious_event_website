<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      Join a spiritual event   </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- adds class if specific page should have a semi-transparent background -->
    <img src="images/bg.jpeg" class="bg transparency">
      <nav class="navbar navbar-dark bg-transparent navbar-expand-lg navbar-light bg-light navbar-z-1 px-5 py-4">
        <a class="navbar-brand" href="index.php">
          <svg id="logo" width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.1855 15.4233L13.4149 15.4234L13.4369 39.0227L11.2075 39.0226L11.1855 15.4233Z"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M41.4661 15.1061L43.6955 15.1061L43.7175 38.7054L41.4881 38.7054L41.4661 15.1061Z"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M26.2732 15.4233L28.5026 15.4234L28.5246 39.0227L26.2953 39.0226L26.2732 15.4233Z"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M43.7174 37.5719L43.7173 39.8013L11.186 39.8317L11.1861 37.6023L43.7174 37.5719Z"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M43.7174 14.6245L43.7173 16.8539L11.186 16.8844L11.1861 14.655L43.7174 14.6245Z"/>
            <path d="M38.0149 26.9095C38.0149 24.438 40.0238 22.4358 42.4886 22.4358C42.8058 22.4358 42.8058 31.3758 42.4886 31.3758C40.0598 31.3758 38.0149 29.4201 38.0149 26.9095ZM42.4886 33.5978C43.0194 33.5978 43.0194 20.2212 42.4886 20.2212C38.8242 20.2212 35.8003 23.1727 35.8003 26.9095C35.8003 30.6923 38.8645 33.5978 42.4886 33.5978Z"/>
            <path d="M12.3117 31.3758C11.8995 31.3758 11.8995 22.4358 12.3117 22.4358C14.7703 22.4358 16.7854 24.4509 16.7854 26.9095C16.7854 29.3681 14.7703 31.3758 12.3117 31.3758ZM19 26.9095C19 23.2215 15.9996 20.2212 12.3117 20.2212C11.9834 20.2212 11.9834 33.5978 12.3117 33.5978C15.9996 33.5978 19 30.5974 19 26.9095Z"/>
            <path d="M27.4001 29.5919C28.8836 29.5919 30.0862 28.3893 30.0862 26.9058C30.0862 25.4223 28.8836 24.2197 27.4001 24.2197C25.9166 24.2197 24.714 25.4223 24.714 26.9058C24.714 28.3893 25.9166 29.5919 27.4001 29.5919Z"/>
          </svg>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mr-auto">
            <a class="nav-item nav-link" href="events.php">Join event</a>
            <a class="nav-item nav-link" href="organise.php">Organise event</a>
          </div>
          <div class="navbar-nav ml-auto">
            <!-- display if user is logged in -->
                          <a class="nav-item nav-link" href="login.php">Login</a>
              <a class="nav-item nav-link" href="register.php">Sign Up</a>
                      </div>
        </div>
      </nav>
      <div class="page-wrapper position-absolute text-light">
      <div class="container-fluid container-nonav px-5 py-3">
        <h1>Join an event in your area</h1>
        <div class="row my-5 mx-md-5">
                    <!-- display essential information of each event in a card -->
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card bg-black">
              <div class="card-body">
                <h5 class="card-title">24 Hours To Live: What would you do?</h5>
                <p class="card-text">
                  5th January 2021<br>
                  20:00 - 22:00                </p>
                <a href="detail.php?id=25" class="btn btn-outline-light">More info</a>
              </div>
            </div>
          </div>
                    <!-- display essential information of each event in a card -->
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card bg-black">
              <div class="card-body">
                <h5 class="card-title">Have you ever Googled happiness?</h5>
                <p class="card-text">
                  12th January 2021<br>
                  20:00 - 22:00                </p>
                <a href="detail.php?id=26" class="btn btn-outline-light">More info</a>
              </div>
            </div>
          </div>
                    <!-- display essential information of each event in a card -->
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card bg-black">
              <div class="card-body">
                <h5 class="card-title">Under the skin: Who am I?</h5>
                <p class="card-text">
                  19th January 2021<br>
                  19:30 - 21:00                </p>
                <a href="detail.php?id=24" class="btn btn-outline-light">More info</a>
              </div>
            </div>
          </div>
                    <!-- display essential information of each event in a card -->
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card bg-black">
              <div class="card-body">
                <h5 class="card-title">Power Of Words</h5>
                <p class="card-text">
                  26th January 2021<br>
                  20:00 - 22:00                </p>
                <a href="detail.php?id=27" class="btn btn-outline-light">More info</a>
              </div>
            </div>
          </div>
                    <!-- display essential information of each event in a card -->
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card bg-black">
              <div class="card-body">
                <h5 class="card-title">Karma: I saw that.</h5>
                <p class="card-text">
                  3rd February 2021<br>
                  12:00 - 14:30                </p>
                <a href="detail.php?id=20" class="btn btn-outline-light">More info</a>
              </div>
            </div>
          </div>
                    <!-- display essential information of each event in a card -->
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card bg-black">
              <div class="card-body">
                <h5 class="card-title">Emotional Intelligence</h5>
                <p class="card-text">
                  10th February 2021<br>
                  20:00 - 22:00                </p>
                <a href="detail.php?id=28" class="btn btn-outline-light">More info</a>
              </div>
            </div>
          </div>
                  </div>
      </div>
    </div>
  </body>
</html>