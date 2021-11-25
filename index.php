
<?php include_once 'temp/header.php'; ?>
<?php include_once 'temp/nav.php'; ?>



  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="wrapper row2"> 
    <!-- ################################################################################################ -->
    <img src="images/1.jpg" alt="" style="height: 600px; width: 100%;">
    
   
    <article>
      <h3 class="heading">Daudkandi Pourashava</h3>
      
      <p>Et malesuada fames ac turpis egestas duis rutrum eros ut sapien in hac habitasse platea dictumst aliquam venenatis leo et orci ut pretium odio eu nisi nulla at.</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#">Egestas</a></li>
          <li><a class="btn inverse" href="#">Tristique</a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <ul class="nospace group grid-3">
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/1.jpg" alt=""></a>
            <figcaption><a href="#">Aliquam faucibus</a></figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/1.jpg" alt=""></a>
            <figcaption><a href="#">Aliquam faucibus</a></figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/1.jpg" alt=""></a>
            <figcaption><a href="#">Aliquam faucibus</a></figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
     <?php 
    include_once 'db_con.php';
    $conn = connect();
    $sql = "SELECT * FROM notice ORDER BY id DESC LIMIT 2";
    $services = $conn -> query ($sql);
    ?>
    <figure class="one_half first">
      <h1 class="heading" style="color: white;" >Pourashava Notice Board</h1>
      <p class="btmspace-30">Purashava Notice Board will Published Notice for The Citizens</p>
      <ul class="nospace clear points">
        <?php
                                    foreach ($services as $service){
                                ?>
        <li><a href="#"><i class="fas fa-equals"></i></a>
          <h6 class="heading"><?= $service['title']?></h6>
          <p><?= $service['description']?></p>
        </li>
        <?php } ?>
      </ul>
    </figure>
    <div class="one_half last"><a class="imgover" href="#"><img src="images/1.jpg" alt=""></a></div>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section id="services" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">Mollis eu commodo eu dui quisque</p>
      <h6 class="heading">Ut ipsum vivamus tincidunt</h6>
    </div>
    <ul class="nospace group grid-3">
      <li class="one_third">
        <article><a href="#"><i class="fas fa-chess-king"></i></a>
          <h6 class="heading">Tincidunt enim etiam</h6>
          <p>Tellus lacus tempor in pharetra id imperdiet sit amet enim suspendisse potenti fusce ornare imperdiet sit amet enim suspendisse.</p>
          <footer><a href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-archive"></i></a>
          <h6 class="heading">Tincidunt enim etiam</h6>
          <p>Tellus lacus tempor in pharetra id imperdiet sit amet enim suspendisse potenti fusce ornare imperdiet sit amet enim suspendisse.</p>
          <footer><a href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-backspace"></i></a>
          <h6 class="heading">Tincidunt enim etiam</h6>
          <p>Tellus lacus tempor in pharetra id imperdiet sit amet enim suspendisse potenti fusce ornare imperdiet sit amet enim suspendisse.</p>
          <footer><a href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-bezier-curve"></i></a>
          <h6 class="heading">Tincidunt enim etiam</h6>
          <p>Tellus lacus tempor in pharetra id imperdiet sit amet enim suspendisse potenti fusce ornare imperdiet sit amet enim suspendisse.</p>
          <footer><a href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-box-open"></i></a>
          <h6 class="heading">Tincidunt enim etiam</h6>
          <p>Tellus lacus tempor in pharetra id imperdiet sit amet enim suspendisse potenti fusce ornare imperdiet sit amet enim suspendisse.</p>
          <footer><a href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-luggage-cart"></i></a>
          <h6 class="heading">Tincidunt enim etiam</h6>
          <p>Tellus lacus tempor in pharetra id imperdiet sit amet enim suspendisse potenti fusce ornare imperdiet sit amet enim suspendisse.</p>
          <footer><a href="#">Read More</a></footer>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">Mollis eu commodo eu dui quisque</p>
      <h6 class="heading">Ut ipsum vivamus tincidunt</h6>
    </div>
    <figure>
      <figcaption class="center btmspace-50"><a href="#">Pharetra</a> / <a href="#">Imperdiet</a> / <a href="#">Suspendisse</a> / <a href="#">Potenti</a></figcaption>
      <ul class="nospace group grid-3">
        <li class="one_third"><a class="imgover" href="#"><img src="images/1.jpg" alt=""></a></li>
        <li class="one_third"><a class="imgover" href="#"><img src="images/1.jpg" alt=""></a></li>
        <li class="one_third"><a class="imgover" href="#"><img src="images/1.jpg" alt=""></a></li>
        <li class="one_third"><a class="imgover" href="#"><img src="images/1.jpg" alt=""></a></li>
        <li class="one_third"><a class="imgover" href="#"><img src="images/1.jpg" alt=""></a></li>
        <li class="one_third"><a class="imgover" href="#"><img src="images/1.jpg" alt=""></a></li>
      </ul>
    </figure>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <section id="testimonials" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <article>
      <figure><img src="images/demo/100x100.png" alt=""></figure>
      <h6 class="heading font-x2">J. Doe</h6>
      <em>Conubia nostra per inceptos</em>
      <blockquote>Himenaeos curabitur feugiat etiam in enim sed felis interdum lobortis phasellus nec eros ut arcu sollicitudin pellentesque curabitur porta justo vitae molestie semper ligula enim sed felis interdum lobortis phasellus nec eros ut arcu sollicitudin pellentesque curabitur porta justo vitae molestie semper ligula.</blockquote>
    </article>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">Mollis eu commodo eu dui quisque</p>
      <h6 class="heading">Ut ipsum vivamus tincidunt</h6>
    </div>
    <ul id="latest" class="nospace group sd-third">
      <li class="one_third first">
        <article>
          <figure><a class="imgover" href="#"><img src="images/1.jpg" alt=""></a>
            <figcaption>
              <h6 class="heading">Nisl nullam odio justo pharetra</h6>
              <ul class="nospace meta clear">
                <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                <li>
                  <time datetime="2045-04-06T08:15+00:00">06 Apr 2045</time>
                </li>
              </ul>
            </figcaption>
          </figure>
          <p>Et sagittis ac dignissim nec metus proin nunc maecenas vel nulla vivamus mattis massa vitae metus proin nunc maecenas vel nulla vivamus mattis massa vitae.</p>
          <footer><a href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Nisl nullam odio justo pharetra</h6>
              <ul class="nospace meta clear">
                <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                <li>
                  <time datetime="2045-04-05T08:15+00:00">05 Apr 2045</time>
                </li>
              </ul>
            </figcaption>
          </figure>
          <p>Et sagittis ac dignissim nec metus proin nunc maecenas vel nulla vivamus mattis massa vitae metus proin nunc maecenas vel nulla vivamus mattis massa vitae.</p>
          <footer><a href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a>
            <figcaption>
              <h6 class="heading">Nisl nullam odio justo pharetra</h6>
              <ul class="nospace meta clear">
                <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                <li>
                  <time datetime="2045-04-04T08:15+00:00">04 Apr 2045</time>
                </li>
              </ul>
            </figcaption>
          </figure>
          <p>Et sagittis ac dignissim nec metus proin nunc maecenas vel nulla vivamus mattis massa vitae metus proin nunc maecenas vel nulla vivamus mattis massa vitae.</p>
          <footer><a href="#">Read More</a></footer>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Bottom Background Image Wrapper -->

<!-- End Bottom Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include_once 'temp/footer.php'; ?>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>