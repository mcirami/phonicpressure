<?php
include 'header.php';
?>

    <div class="full_width">


        <div class="full_width hero_section">

            <div id="global_header" class="py-2 header full_width">
                <nav class="navbar navbar-expand-md">
                    <a class="mobile_menu_icon" aria-controls="navbarNav" href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <div class="collapse navbar-collapse justify-content-center" id="navToggler">
                        <div class="social_media d-flex d-md-none align-content-center justify-content-center">
                            <a class="facebook" href="https://www.facebook.com/phonicpressure/">
                                <img class="pr-2" src="images/icon-facebook.png" alt="">
                            </a>
                            <span>|</span>
                            <a class="instagram" href="#">
                                <img class="px-2" src="images/icon-instagram.png" alt="">
                            </a>
                            <span>|</span>
                            <a class="youtube" href="#">
                                <img class="pl-2" src="images/icon-youtube.png" alt="">
                            </a>
                        </div>
                        <ul class="navbar-nav navigation">
                            <li class="nav-item d-flex align-content-center pr-2">
                                <a class="nav-link text-uppercase" href="#about">About</a>
                            </li>
                            <li class="nav-item d-flex align-content-center pl-0 pl-md-2">
                                <a class="nav-link text-uppercase pr-0" href="#media">Media</a>
                            </li>
                            <li class="nav-item logo">
                                <a class="nav-link p-0 text-uppercase" href="#music">
                                    <img src="images/logo.jpg" alt="">
                                </a>
                            </li>
                            <li class="nav-item d-flex align-content-center pr-2">
                                <a class="nav-link text-uppercase pl-0" href="#shows">Shows</a>
                            </li>
                            <li class="nav-item d-flex align-content-center pl-0 pl-md-2">
                                <a class="nav-link text-uppercase" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="mobile_logo navigation">
                    <a href="#music" class="mobile_logo_click">
                        <img src="images/logo.jpg" alt="">
                    </a>
                </div>
                <div class="social_media d-none d-md-flex align-content-center justify-content-center">
                    <a class="facebook" href="https://www.facebook.com/phonicpressure/">
                        <img class="pr-2" src="images/icon-facebook.png" alt="">
                    </a>
                    <span>|</span>
                    <a class="instagram" href="#">
                        <img class="px-2" src="images/icon-instagram.png" alt="">
                    </a>
                    <span>|</span>
                    <a class="youtube" href="#">
                        <img class="pl-2" src="images/icon-youtube.png" alt="">
                    </a>
                </div>
            </div><!-- header -->
            <div id="music" class="full_width music_player_section animatedParent animateOnce page-section">
                <h2 class="text-uppercase text-center animated growIn">Jam <span>Out</span></h2>
                <div class="music_player">
                    <div id="player">
                        <ul class="playlist">
                            <?php
                                $count = 1;
                                $fileDir = "audio";
                                $files = scandir($fileDir);
                                foreach($files as $file) {
                                    if(substr($file,-4) == ".mp3"){
                                        echo "<li data-cover='images/cover.png' data-artist='Phonic Pressure'><a href='$fileDir/$file'><span>$count.</span>".substr($file,0,-4)."</a></li>";
                                        $count++;
                                    }
                                }
                                ?>
                        </ul>

                    </div>
                </div>
            </div>
        </div><!-- hero_section -->
        <div id="about" class="about_section full_width py-3 py-md-5 page-section">
            <div class="my_container">
                <h2 class="text-uppercase mb-4 section_title">About</h2>
                <div class="full_width my_row d-block d-sm-flex">
                    <div class="column animatedParent animateOnce">
                        <div class="full_width animated bounceInLeft">
                            <div class="image_wrap">
                                <img src="images/img-vocals.jpg" alt="">
                                <div class="text_bar">
                                    <p>Walter aka camillo Rizen <span>(Vocals)</span></p>
                                </div>
                            </div>
                            <div class="description">
                                <p>Vocals, guitar and keys. Influenced by James Brown, Muddy Waters, Rolling Stones, Led Zeppelin, Soundgarden, Living Colour, Chili Peppers and The Ojays</p>
                            </div>
                        </div>
                    </div>
                    <div class="column animatedParent animateOnce">
                        <div class="full_width animated bounceInRight">
                            <div class="image_wrap">
                                <img src="images/img-guitar.jpg" alt="">
                                <div class="text_bar">
                                    <p>Matteo <span>(Guitar)</span></p>
                                </div>
                            </div>
                            <div class="description">
                                <p>Adventurous guitar playing blending funk and rock. Musically influenced by RATM, RHCP, Pearl Jam, 311, Jack White, Incubus and so many more! John Frusciante wanna be... Web Dev nerd in real life...</p>
                            </div>
                        </div>
                    </div>
                </div><!-- my_row -->
                <div class="full_width my_row d-block d-sm-flex ">
                    <div class="column animatedParent animateOnce">
                        <div class="full_width animated bounceInLeft">
                            <div class="image_wrap">
                                <img src="images/img-bass.jpg" alt="">
                                <div class="text_bar">
                                    <p>Jeff Tochtrop <span>(Bass)</span></p>
                                </div>
                            </div>
                            <div class="description">
                                <p>Bringing the funk and groove for the last 20 years. Influenced by RHCP, Rage, 311, Sublime. Favorite past time is stomping stages!</p>
                            </div>
                        </div>
                    </div>
                    <div class="column animatedParent animateOnce">
                        <div class="full_width animated bounceInRight">
                            <div class="image_wrap">
                                <img src="images/img-drums.jpg" alt="">
                                <div class="text_bar">
                                    <p>Pocket <span>(Drums)</span></p>
                                </div>
                            </div>
                            <div class="description">
                                <p>Matt "Pocket" Abernathy is a drummer, producer, & composer hailing from St.Louis, Mo. He's performed with many local funk, r&b, & blues bands but grew his musical chops in church. His musical influences include legends like George Clinton, Bootsy Collins, & Johnny "Guitar" Watson with some new school artists like Anderson.Paak, Thundercat, Lettuce, & Cory Henry & The Funk Apostles.</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- my_row -->
            </div> <!-- my_container -->
        </div><!-- about_section -->
        <div id="media" class="media_section full_width text-center py-3 py-md-5 page-section">
            <div class="my_container animatedParent animateOnce">
                <h2 class="text-uppercase section_title mb-4">Media</h2>
                <div id="carouselControls" class="carousel slide animated flipInY" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="video_wrapper">
                                <iframe src="https://www.youtube.com/embed/10tZ707IqAg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="video_wrapper">
                                <iframe src="https://www.youtube.com/embed/m7qxPPk7Z8c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="video_wrapper">
                                <iframe src="https://www.youtube.com/embed/-Z89UlnbCCk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="video_wrapper">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/I83WThj5PWE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="video_wrapper">
                                <iframe src="https://www.youtube.com/embed/yQWHigoLHJM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div id="shows" class="full_width shows_section text-center py-3 py-md-5 page-section">
            <div class="my_container">
                <h2 class="text-uppercase section_title mb-4">Upcoming Shows</h2>
                <ul class="list-unstyled full_width animatedParent animateOnce">
                    <li class="full_width animated fadeInLeft">
                        <div class="column text-left text-sm-center d-block d-sm-flex justify-content-start">
                            <p class="mr-5">Fri Nov 1</p>
                            <p>9:00 pm</p>
                        </div>
                        <div class="column d-block d-sm-flex justify-content-end text-left text-sm-center">
                            <h4 class="mr-1 mb-1 mb-sm-0">The Way Out Club,</h4>
                            <h5>2525 S Jefferson Ave St. Louis, MO 63104</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="contact" class="full_width contact_section py-3 py-md-5 page-section">
            <h2 class="text-uppercase section_title mb-4 text-center">Contact</h2>
            <?php if (!isset($_POST['submit']) || $mailSent == false) : ?>

                <div class="form_wrap animatedParent animateOnce">

                    <form class="animated bounceInDown" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name" aria-describedby="name"
                                   value="<?php if (isset($_POST['name'])) { echo $_POST['name']; } ?>" required>

                            <div class="errors">
                                <p class="text-danger"><?php echo $nameErr; ?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                   value="<?php if (isset($_POST['email'])) { echo $_POST['email'];} ?>" required>

                            <div class="errors">
                                <p class="text-danger"><?php echo $emailErr; ?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" id="phone" class="bfh-phone form-control" data-format="+1 (ddd) ddd-dddd" value="<?php if (isset($_POST['email'])) { echo $_POST['email'];} ?>">

                            <div class="errors">
                                <p class="text-danger"><?php echo $phoneErr; ?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea rows=6 name="message" class="form-control" id="message"
                                      required><?php if (isset($_POST['message'])) { echo $_POST['message'];} ?></textarea>

                            <div class="errors">
                                <p class="text-danger"><?php echo $userMessageErr; ?></p>
                            </div>
                        </div>

                        <button type="submit" class="button text-uppercase">Submit</button>
                    </form>

                </div>

            <?php else : ?>

                <div class="text-center success_message">
                    <h2 class="text-uppercase">Thanks for Your Inquiry!</h2>
                    <p>We will get back to you as soon as possible!</p>
                </div>

            <?php endif; ?>
        </div>

<?php
include 'footer.php';
?>