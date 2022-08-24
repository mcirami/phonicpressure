<?php
include 'header.php';
?>

    <div class="full_width">


        <div class="full_width hero_section">
	            <div class="bg_image">
		            <img src="images/hero-bg.jpg" alt="">
	            </div>
	        
	            <div id="global_header" class="header full_width">
		            <div class="my_container">
		                <nav class="navbar navbar-expand-md p-0 pt-md-4 pb-0">
			                <div class="mobile_logo navigation">
			                    <a href="#music" class="mobile_logo_click">
			                        <img src="images/logo.png" alt="">
			                    </a>
			                </div>
			                <div class="social_media">
				                <ul class="d-flex align-content-center justify-content-center mb-0">
					                <li>
						                <a target="_blank" class="facebook" href="https://www.facebook.com/phonicpressure/">
							                <img src="images/icon-facebook.png" alt="">
						                </a>
					                </li>
					                <li>
						                <a target="_blank" class="instagram" href="https://www.instagram.com/phonicpressure">
							                <img src="images/icon-instagram.png" alt="">
						                </a>
					                </li>
					                <li>
						                <a target="_blank" class="youtube" href="https://www.youtube.com/channel/UClT3XD0ym4sQjOrVOZW5bUw">
							                <img src="images/icon-youtube.png" alt="">
						                </a>
					                </li>
				                </ul>
			                </div>
			                <a class="mobile_menu_icon mt-0" aria-controls="navbarNav" href="#">
				                <span></span>
				                <span></span>
				                <span></span>
			                </a>
		                    <div class="collapse navbar-collapse justify-content-center" id="navToggler">

		                        <ul class="navbar-nav navigation pb-2">
			                        <li class="nav-item logo">
				                        <a class="nav-link p-0 text-uppercase" href="#music">
					                        <img src="images/logo.png" alt="">
				                        </a>
			                        </li>
		                            <li class="nav-item d-flex align-content-end">
		                                <a class="nav-link text-uppercase" href="#about">About</a>
		                            </li>
		                            <li class="nav-item d-flex align-content-end">
		                                <a class="nav-link text-uppercase" href="#media">Media</a>
		                            </li>
		                            <li class="nav-item d-flex align-content-end">
		                                <a class="nav-link text-uppercase" href="#shows">Shows</a>
		                            </li>
			                        <li class="nav-item d-flex align-content-end">
				                        <a class="nav-link text-uppercase" href="https://merch.phonicpressure.com/" target="_blank">Merch</a>
			                        </li>
		                            <li class="nav-item d-flex align-content-end">
		                                <a class="nav-link text-uppercase pr-0" href="#contact">Contact</a>
		                            </li>
		                        </ul>
		                    </div>
		                </nav>
		            </div>
	            </div><!-- global_header -->
	            <div id="music" class="full_width music_player_section animatedParent animateOnce page-section">
	                <h2 class="text-uppercase text-center animated growIn">jam <span>out</span></h2>
	                <div class="music_player">
	                    <div id="player">
	                        <ul class="playlist">
	                            <?php
	                                $count = 1;
	                                $fileDir = "audio";
	                                $files = scandir($fileDir);
	                                foreach($files as $file) {
	                                    if(substr($file,-4) == ".mp3"){
	                                        echo "<li data-cover='images/album-cover.jpg' data-artist='Phonic Pressure'><a href='$fileDir/$file'><span>$count.</span>".substr($file,0,-4)."</a></li>";
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
                            <div class="image_wrap vocals">
                                <img src="images/img-singer.png" alt="">
                                <div class="text_bar">
                                    <p><span>(Vocals)</span></p>
                                </div>
	                            <div class="overlay_text">
		                            <p>
			                            Looking for a new singer!
		                            </p>
		                            <p>
			                            Hit Us Up If Interested!
		                            </p>
	                            </div>
                            </div>
                            <div class="description">
                                <p>Seeking new singer. Need an energetic, experienced, poetic, rocky, baddass mutha. Listen to our music here on our site, on Facebook, Instagram and YouTube and hit us up if you think you'd be a great fit!</p>
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
			                    <iframe src="https://www.youtube.com/embed/nk4nkPs_5xY?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                    </div>
	                    </div>
                        <div class="carousel-item">
                            <div class="video_wrapper">
                                <iframe src="https://www.youtube.com/embed/10tZ707IqAg?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="video_wrapper">
                                <iframe src="https://www.youtube.com/embed/m7qxPPk7Z8c?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="video_wrapper">
                                <iframe src="https://www.youtube.com/embed/-Z89UlnbCCk?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="video_wrapper">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/I83WThj5PWE?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="video_wrapper">
                                <iframe src="https://www.youtube.com/embed/yQWHigoLHJM?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                        <div class="my_row">
	                        <!--<div class="column text-left text-sm-center">
		                        <p class="mr-1">Fri Sept 2nd - </p>
		                        <p>Time TBD</p>
	                        </div>-->
	                        <div class="column w-100 text-center">
		                        <h3 class="mr-1 mb-1 mb-sm-0">All Shows On Hold Until We Find A Singer</h3>
		                        <!--<h3>26920 Nn-333, Waynesville, MO</h3>-->
	                        </div>
	                        <!--<div class="column text-left">
		                        <a class="button white text-uppercase" href="https://www.universe.com/events/midwest-bearfest-2022-tickets-G6HDN5?fbclid=IwAR1-Hw-0CVi3v4ZZGB-Ih0opr_iq0d9KTDAMdVH34sQt2vw7vmDPV1zbi9U" target="_blank">GET TICKETS NOW!</a>
	                        </div>-->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="contact" class="full_width contact_section py-3 py-md-5 page-section">
            <h2 class="text-uppercase section_title mb-4 text-center">Contact</h2>

                <div class="form_wrap animatedParent animateOnce">

                    <form id="contact-us" class="animated bounceInDown" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name" aria-describedby="name" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" id="phone" class="bfh-phone form-control" data-format="+1 (ddd) ddd-dddd" value="">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea rows=6 name="message" class="form-control" id="message" required></textarea>
                        </div>

                        <button type="submit" class="button red text-uppercase">Submit</button>
                    </form>
                    <div id="spinner" class="text-center">
						<div class="spinner-border" role="status">
						</div>
					</div>

                </div>
        </div>

<?php
include 'footer.php';
?>