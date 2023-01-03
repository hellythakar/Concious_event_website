<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      Conscious Events    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- adds class if specific page should have a semi-transparent background -->
    <img src="images/bg.jpeg" class="bg ">
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
                          <a class="nav-item nav-link" href="myevents.php">My events</a>
              <a class="nav-item nav-link" href="index.php?logout=1">Logout</a>
            <!-- display if user isn't logged in -->
                      </div>
        </div>
      </nav>
      <div class="page-wrapper position-absolute text-light">
      <div class="container-fluid h-100 d-flex align-items-center p-5">
        <div class="col-12 p-0 text-center">
          <h1 class="display-4 font-weight-bold">
            Find Yourself
          </h1>
          <p class="lead font-weight-normal">Your online spiritual experience</p>
          <a class="btn btn-outline-light" href="Concious_events.php">Get started</a>
        </div>
      </div>
      <div class="container-fluid p-5 full-container overflow-overlay">
        <h1 id="join" class="mb-5">Join event</h1>
        <div class="row h-min-400 align-self-center mx-auto">
          <div class="col-sm-12 col-lg-6 p-0">
            <div class="card h-100 bg-black card-home mx-auto mx-lg-0 mb-0 mb-lg-5 mr-lg-5">
              <div class="card-body text-center p-md-5">
                <svg class="d-block mx-auto home-svg" height='90px' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 381.19 237.184" style="enable-background:new 0 0 381.19 237.184;" xml:space="preserve"><g>
                  <path d="M8.576,146.429c0.158,0,0.316-0.005,0.476-0.014c4.409-0.258,7.776-4.043,7.517-8.454   c-0.392-6.649-0.567-12.707-0.567-18.222c-0.034-24.213,3.496-37.817,6.963-44.916V224.82c0,6.83,5.537,12.363,12.363,12.363   c6.828,0,12.365-5.533,12.365-12.363v-90.271h4.635v90.271c0,6.83,5.537,12.363,12.363,12.363c6.828,0,12.365-5.533,12.365-12.363   V63.822c2.072-0.861,4.854-1.902,8.203-2.896c1.443,2.55,4.127,4.062,6.948,4.063c0.172,0,0.345-0.014,0.517-0.025V224.82   c0,6.83,5.537,12.363,12.363,12.363c6.828,0,12.365-5.533,12.365-12.363v-90.271h4.635v90.271c0,6.83,5.537,12.363,12.363,12.363   c6.828,0,12.365-5.533,12.365-12.363V64.637c1.633-0.614,3.068-1.757,4.023-3.332c1.241-0.387,2.702-0.806,4.351-1.226   c0.1,0.025,0.207,0.051,0.307,0.077c0.077,0.02,0.148,0.04,0.226,0.06c1.316,2.981,4.238,4.771,7.315,4.771   c0.171,0,0.344-0.014,0.516-0.025V224.82c0,6.83,5.537,12.363,12.364,12.363c6.828,0,12.365-5.533,12.365-12.363v-90.271h4.635   v90.271c0,6.83,5.537,12.363,12.363,12.363c6.828,0,12.365-5.533,12.365-12.363V64.962c0.172,0.011,0.344,0.025,0.516,0.025   c3.074,0,5.994-1.789,7.313-4.768c0.178-0.047,0.358-0.093,0.539-0.14c0.103,0.026,0.211,0.052,0.31,0.078   c1.522,0.393,2.869,0.784,4.031,1.146c0.955,1.576,2.393,2.719,4.027,3.333V224.82c0,6.83,5.537,12.363,12.363,12.363   c6.828,0,12.365-5.533,12.365-12.363v-90.271h4.635v90.271c0,6.83,5.537,12.363,12.363,12.363c6.828,0,12.365-5.533,12.365-12.363   V64.962c0.172,0.011,0.344,0.025,0.514,0.025c2.824,0,5.508-1.515,6.951-4.067c0.83,0.246,1.629,0.496,2.387,0.745   c2.303,0.755,4.256,1.506,5.814,2.157V224.82c0,6.83,5.537,12.363,12.365,12.363c6.826,0,12.363-5.533,12.363-12.363v-90.271h4.635   v90.271c0,6.83,5.537,12.363,12.365,12.363c6.826,0,12.363-5.533,12.363-12.363V74.867c0.592,1.215,1.19,2.609,1.779,4.235   c2.818,7.812,5.189,20.629,5.18,40.638c0,5.512-0.178,11.572-0.564,18.224c-0.258,4.411,3.109,8.195,7.522,8.451   c0.158,0.009,0.314,0.014,0.471,0.014c4.209,0,7.734-3.282,7.982-7.535c0.4-6.932,0.588-13.298,0.59-19.154   c-0.041-30.184-4.863-46.886-11.434-56.93c-0.77-1.167-1.57-2.227-2.389-3.203c1.373-3.942-0.521-8.326-4.418-9.984   c-6.553-2.786-12.996-4.755-19.209-6.096C340.067,45.73,335.772,47,331.185,47c-6.004,0-11.508-2.175-15.773-5.774   c-8.035,0.385-15.014,1.563-20.541,2.86c-5.266-1.239-11.338-2.23-18.023-2.567c-4.213,3.423-9.58,5.48-15.42,5.48   c-6.031,0-11.555-2.194-15.828-5.821c-7.525,0.293-14.158,1.294-19.586,2.464c-5.428-1.169-12.061-2.17-19.586-2.464   C202.153,44.805,196.628,47,190.599,47c-6.029,0-11.555-2.194-15.829-5.821c-7.525,0.293-14.158,1.295-19.586,2.464   c-5.427-1.169-12.06-2.17-19.585-2.464C131.326,44.806,125.801,47,119.771,47c-5.84,0-11.206-2.057-15.421-5.48   c-6.685,0.336-12.758,1.328-18.026,2.567c-5.527-1.297-12.505-2.475-20.539-2.86C61.519,44.825,56.016,47,50.011,47   c-4.587,0-8.882-1.27-12.558-3.473c-6.212,1.341-12.655,3.311-19.207,6.096c-3.899,1.656-5.793,6.044-4.418,9.987   c-2.564,3.058-4.965,7.03-6.95,12.085C2.771,82.073,0.015,97.081,0,119.739c0.002,5.856,0.189,12.225,0.596,19.159   C0.845,143.149,4.371,146.429,8.576,146.429z"></path><circle cx="50.011" cy="22.5" r="22.5"></circle><circle cx="331.185" cy="22.5" r="22.5"></circle><circle cx="119.771" cy="22.5" r="22.5"></circle><circle cx="190.598" cy="22.5" r="22.5"></circle><circle cx="261.427" cy="22.5" r="22.5"></circle></g>
                </svg>
                <h3 class="card-title">Join an existing event</h3>
                <p class="card-text">Browse through existing events in your area and choose one to join.</p>
                <a href="events.php" class="btn btn-outline-light">Join an event</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-lg-6 p-0">
            <div class="card h-100 bg-black card-home mx-auto mx-lg-0 mt-5 mt-lg-0 ml-lg-5">
              <div class="card-body text-center p-md-5">
                <svg class="svg-organise home-svg" height='102px' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;" viewBox="0 0 138 267" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd"><g>
                  <path class="fil0" d="M91 255c0,16 -24,16 -24,0l0 -75c-1,0 -2,0 -3,0l0 75c0,16 -23,16 -23,0 0,-42 -1,-150 0,-162 -36,-9 -41,-52 -41,-83 0,-14 21,-13 21,0 -1,25 1,64 34,64 8,0 18,0 22,0 8,1 15,3 21,5 43,14 47,50 34,88 -4,12 -22,7 -20,-4 9,-4 15,-13 15,-23 0,-9 -5,-16 -12,-21 -3,-9 -10,-17 -24,-21l0 20c-8,4 -14,12 -14,22 0,10 6,18 14,22 0,31 0,62 0,93z"></path><circle class="fil1" cx="67" cy="48" r="21"></circle><circle class="fil1" cx="102" cy="140" r="19"></circle></g>
                </svg>
                <h3 class="card-title">Organise your event game</h3>
                <p class="card-text">Organise aan event on your favourite pitch. Set your own date and time and invite your friends to join.</p>
                <a href="organise.php" class="btn btn-outline-light">Create an event</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>