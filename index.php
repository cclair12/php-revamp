<?php
include './_includes/title.php';
require './_includes/header.php';
require_once './_includes/connection.php';
$conn = dbConnect('read');
$sql= 'SELECT * FROM album ORDER BY album_id';
$sql2= 'SELECT tracks.track_name, tracks.album_id FROM tracks INNER JOIN albums ON tracks.album_id = albums.album_id WHERE tracks.album_id = albums.album_id ORDER BY tracks.album_id';
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
if (!$result && !$result2) {
    $error = $conn->error;
} else {
  $numRows = $result->num_rows;
  $numRows2 = $result2->num_rows;
}
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
      <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

  <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
          <div class="item active">
              <img src="_images/slide1.jpg" alt="Portland" width="1080" height="720">
              <div class="carousel-caption">
                  <h3>M5ONTHEROAD &ndash; PORTLAND</h3>
              </div>
          </div>
          <!-- Slide 2 -->
          <div class="item">
              <img src="_images/slide2.jpg" alt="SaltLake" width="1080" height="720">
              <div class="carousel-caption">
                  <h3>M5ONTHEROAD &ndash; SALT LAKE CITY</h3>
              </div>
          </div>
           <!-- Slide 3 -->
          <div class="item">
              <img src="_images/slide3.jpg" alt="Paris" width="1080" height="720">
              <div class="carousel-caption">
                  <h3>M5ONTHEROAD &ndash; PARIS</h3>
              </div>
          </div>
           <!-- Slide 4 -->
          <div class="item">
              <img src="_images/slide4.jpg" alt="Baltimore" width="1080" height="720">
              <div class="carousel-caption">
                  <h3>M5ONTHEROAD &ndash; BALTIMORE</h3>
              </div>
          </div>
      </div>
  </div>

<!-- ABOUT -->
<section id="about">
  <h1>BIOGRAPHY</h1>
      <p>Maroon 5, born and bred in Los Angeles, with their catchy hook, soaring vocals, and signature sound, have solidified their position as one of pop music&apos;s most enduring artists. The band captured their first of three Grammy Awards as &quot;Best New Artist&quot; of 2005 and have gone on to sell more than 17 million albums worldwide. Maroon 5&apos;s releases have also gone gold and platinum in over 35 countries. <a href="http://www.maroon5.com/about" target="_blank"><em>More details about Maroon5</em></a></p>
</section>
<!-- BIOGRAPHY -->
<section id="bio">
  <h2>THE BAND</h2>
      <!-- ROW 1 -->
      <div class="row">
          <div class="col-xs-8 col-sm-4 col-md-4">
              <p class="text-center"><strong>ADAM LEVINE</strong></p><br>
                  <a href="#demo" data-toggle="collapse">
                      <img src="_images/adam.jpg" class="img-circle person" alt="member" width="150" height="150">
                  </a>
              <div id="demo" class="collapse">
                  <p>Guitarist and Lead Vocalist</p>
              </div>
          </div>
          <div class="col-xs-8 col-sm-4 col-md-4">
              <p class="text-center"><strong>JAMES VALENTINE</strong></p><br>
                  <a href="#demo2" data-toggle="collapse">
                      <img src="_images/james.jpg" class="img-circle person" alt="member" width="150" height="150">
                  </a>
              <div id="demo2" class="collapse">
                  <p>Guitarist and Backing Vocals</p>
              </div>
          </div>
          <div class="col-xs-8 col-sm-4 col-md-4">
              <p class="text-center"><strong>MATT FLYNN</strong></p><br>
                  <a href="#demo3" data-toggle="collapse">
                      <img src="_images/matt.jpg" class="img-circle person" alt="member" width="150" height="150">
                  </a>
              <div id="demo3" class="collapse">
                  <p>Drummer</p>
              </div>
          </div>
      </div>
      <!-- ROW 2 -->
      <div class="row">
          <div class="col-xs-8 col-sm-4 col-md-4">
              <p class="text-center"><strong>JESSE CARMICHAEL</strong></p><br>
                  <a href="#demo4" data-toggle="collapse">
                      <img src="_images/jesse.jpg" class="img-circle person" alt="member" width="150" height="150">
                  </a>
              <div id="demo4" class="collapse">
                  <p>Keyboardist and Backing Vocals</p>
              </div>
          </div>
          <div class="col-xs-8 col-sm-4 col-md-4">
              <p class="text-center"><strong>MICKEY MADDEN</strong></p><br>
                  <a href="#demo5" data-toggle="collapse">
                      <img src="_images/mickey.jpg" class="img-circle person" alt="member" width="150" height="150">
                  </a>
              <div id="demo5" class="collapse">
                  <p>Bass player</p>
              </div>
          </div>
          <div class="col-xs-8 col-sm-4 col-md-4">
              <p class="text-center"><strong>PJ MORTON</strong></p><br>
                  <a href="#demo6" data-toggle="collapse">
                      <img src="_images/pj.png" class="img-circle person" alt="member" width="150" height="150">
                  </a>
              <div id="demo6" class="collapse">
                  <p>Keyboardist and Backing Vocals</p>
              </div>
          </div>
      </div>
</section>
<!-- MUSIC -->
<section id="music">
  <h2>MUSIC</h2>
      <div class="row">
        <?php while ($row = $result->fetch_assoc()) { ?>
          <!-- ALBUM 1 -->
          <div class="col-xs-offset-0 col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-6 col-lg-offset-0 col-lg-6">
              <div class="hovereffect">
                 <img src="_images/<?= $row['image'];?>" alt="album" width="500" height="500" class="album">
                     <div class="overlay">
                         <h4><?= $row['album_name'];?></h4>
                              <p>
                               <?= $row['tracks'];?>
                              </p>

                      </div>
                 </div>
             </div>
                <?php } ?>
          </div>
</section>
<!-- TOUR -->
<section id="tour">
  <h2>ON TOUR</h2>
      <div class="container">
          <!-- ROW 1 -->
          <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4">
                  <div class="month">APR</div>
                  <div class="date">29</div>
                  <div class="country">New Orleans, LA, USA</div>
                  <div class="place">New Orleans Jazz Fest</div>
                  <a href="http://www.nojazzfest.com/" target="_blank" class="ticket">GET TICKETS</a>
                  </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                  <div class="month">MAY</div>
                  <div class="date">26</div>
                  <div class="country">Napa, CA, USA</div>
                  <div class="place">BottleRock Napa Valley</div>
                  <a href="https://www.eventbrite.com/e/bottlerock-napa-valley-2017-tickets-29319137329?aff=ArtistMaroon5&utm_source=ArtistMaroon5" target="_blank" class="ticket">GET TICKETS</a>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                  <div class="month">SEP</div>
                  <div class="date">01</div>
                  <div class="country">Aspen, CO, USA</div>
                  <div class="place">Aspen Snowmass JAS Experience</div>
                  <a href="http://www.jazzaspensnowmass.org/" target="_blank" class="ticket">GET TICKETS</a>
              </div>
          </div>
          <!-- ROW 2 -->
          <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4">
                  <div class="month">SEP</div>
                  <div class="date">02</div>
                  <div class="country">Aspen, CO, USA</div>
                  <div class="place">Aspen Snowmass JAS Experience</div>
                  <a href="http://www.jazzaspensnowmass.org/" target="_blank" class="ticket">GET TICKETS</a>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                  <div class="month">SEP</div>
                  <div class="date">03</div>
                  <div class="country">Aspen, CO, USA</div>
                  <div class="place">Aspen Snowmass JAS Experience</div>
                  <a href="http://www.jazzaspensnowmass.org/" target="_blank" class="ticket">GET TICKETS</a>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                  <div class="month">SEP</div>
                  <div class="date">16</div>
                  <div class="country">Rio De Janeiro, Brazil</div>
                  <div class="place">Rock N Rio</div>
                  <a href="http://rockinrio.com/rio/en" target="_blank" class="ticket">GET TICKETS</a>
              </div>
          </div>
      </div>
</section>
<!-- UPDATE -->
<section id="update">
  <h2 class="update">UPDATES FROM MAROON5</h2>
      <p class="text">Sign up to join our mailing list and receive exclusive offers and updates</p>
  <p>&ast; Required</p>
          <div class="col-sm-6 form-group">
              <input class="form-control" id="firstname" name="first name" placeholder="First Name&ast;" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
              <input class="form-control" id="lastname" name="last name" placeholder="Last Name&ast;" type="text" required>
          </div>
          <div class="col-sm-4 form-group">
              <input class="form-control" id="birthday" name="birthday" placeholder="Birthday (mm/dd/yyyy)" type="text" required>
          </div>
          <div class="col-sm-4 form-group">
              <input class="form-control" id="adress" name="adress" placeholder="Adress" type="text" required>
          </div>
          <div class="col-sm-4 form-group">
              <input class="form-control" id="city" name="city" placeholder="City" type="text" required>
          </div>
          <div class="col-sm-4 form-group">
              <input class="form-control" id="state" name="state" placeholder="State" type="text" required>
          </div>
          <div class="col-sm-4 form-group">
              <input class="form-control" id="zipcode" name="zipcode" placeholder="Zip Code" type="text" required>
          </div>
          <div class="col-sm-4 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email&ast;" type="email" required>
          </div>
          <div class="col-lg-5">
              <div class="form-group">
                      <label>Email Preference</label>
                  <div class="radio">
                      <label for="preference1">
                          <input type="radio" name="preference" id="preference1" value="HTML" checked>HTML
                      </label>
                  </div>
                  <div class="radio">
                      <label for="preference2">
                          <input type="radio" name="preference" id="preference2" value="Plain Text"> Plain Text
                      </label>
                  </div>
              </div>
              <div class="form-group">
                  <label for="terms">Terms and Conditions</label>
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="terms" id="terms" value="Agree" checked> I have read and agree to the terms and conditions
                      </label>
                  </div>
              </div>
          </div>
  <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
    <br>
  <div class="row">
      <div class="col-md-12 form-group">
          <button class="btn btn-lg pull-right" type="submit">SUBSCRIBE</button>
      </div>
  </div>
</section>
<?php
include './_includes/footer.php';
?>
