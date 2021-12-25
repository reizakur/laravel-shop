@extends('customer/accept-customer/main-template')     

@section('content')
    <li>
						<a href="login.php" target="_blank" class="btn btn-white btn-simple">
							<i class="material-icons">store</i> Toko
						</a>
                        
					</li>
					<li>
						<a href="../index.html">
							<i class="material-icons">shopping_cart</i> Transaksi
						</a>
					</li>
					
                    <li>
						<a href="login.php" target="_blank" class="btn btn-white btn-simple">
							<i class="material-icons">arrow_right_alt</i> Login
						</a>
                        
					</li>
        		</ul>
        	</div>
    	</div>
    </nav>
	<div class="page-header header-filter" data-parallax="active" style="background-image: url('img/bg9.jpg');">
	
            </div>
        </div>
	<div class="section section-gray">
	    <div class="container">
            <div class="main main-raised main-product">
                <div class="row">
                    <div class="col-md-6 col-sm-6">

                       <div class="tab-content">
                            <div class="tab-pane" id="product-page1">
                                 <img src="img/examples/product1.jpg"/>
                              </div>
                              <div class="tab-pane active" id="product-page2">
                                  <img src="img/examples/product2.jpg"/>
                             </div>
                              <div class="tab-pane" id="product-page3">
                                  <img src="img/examples/product3.jpg"/>
                              </div>
                              <div class="tab-pane" id="product-page4">
                                  <img src="img/examples/product4.jpg"/>
                              </div>
                        </div>
                        <ul class="nav flexi-nav" role="tablist" id="flexiselDemo1">
							<li>
								<a href="#product-page1" role="tab" data-toggle="tab" aria-expanded="false">
									<img src="img/examples/product1.jpg"/>
								</a>
							</li>
							<li class="active">
								<a href="#product-page2" role="tab" data-toggle="tab" aria-expanded="false">
									<img src="img/examples/product2.jpg"/>
								</a>
							</li>
							<li>
								<a href="#product-page3" role="tab" data-toggle="tab" aria-expanded="false">
									<img src="img/examples/product3.jpg"/>
								</a>
							</li>
							<li>
								<a href="#product-page4" role="tab" data-toggle="tab" aria-expanded="true">
									<img src="img/examples/product4.jpg"/>
								</a>
							</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
						<h2 class="title"> Becky Silk Blazer </h2>
						<h3 class="main-price">$335</h3>
						<div id="acordeon">
                            <div class="panel-group" id="accordion">
                          <div class="panel panel-border panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h4 class="panel-title">
                                    Description
                                    <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                              <div class="panel-body">
                                <p>Eres' daring 'Grigri Fortune' swimsuit has the fit and coverage of a bikini in a one-piece silhouette. This fuchsia style is crafted from the label's sculpting peau douce fabric and has flattering cutouts through the torso and back. Wear yours with mirrored sunglasses on vacation.</p>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-border panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-controls="collapseOne">
                                    <h4 class="panel-title">
                                    Designer Information
                                    <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                                An infusion of West Coast cool and New York attitude, Rebecca Minkoff is synonymous with It girl style. Minkoff burst on the fashion scene with her best-selling 'Morning After Bag' and later expanded her offering with the Rebecca Minkoff Collection - a range of luxe city staples with a "downtown romantic" theme.
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-border panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-controls="collapseOne">
                                    <h4 class="panel-title">
                                    Details and Care
                                    <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                              <div class="panel-body">
                                <ul>
                                     <li>Storm and midnight-blue stretch cotton-blend</li>
                                     <li>Notch lapels, functioning buttoned cuffs, two front flap pockets, single vent, internal pocket</li>
                                     <li>Two button fastening</li>
                                     <li>84% cotton, 14% nylon, 2% elastane</li>
                                     <li>Dry clean</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                        </div>
                        </div><!--  end acordeon -->

			            <div class="row pick-size">
                            <div class="col-md-6 col-sm-6">
                                <label>Select color</label>
                                 <select class="select form-control">
                                        <option value="1">Rose </option>
                                        <option value="2">Gray</option>
										<option value="3">White</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label>Select size</label>
                                 <select class="select form-control">
                                        <option value="1">Small </option>
                                        <option value="2">Medium</option>
                                        <option value="3">Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="row text-right">
                            <button class="btn btn-rose btn-round">Add to Cart &nbsp;<i class="material-icons">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
            </div>


			<div class="related-products">
				<h3 class="title text-center">You may also be interested in:</h3>

				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="card card-product">
							<div class="card-image">
								<a href="#pablo">
									<img class="img" src="img/examples/card-product1.jpg" />
								</a>
							</div>

							<div class="content">
								<h6 class="category text-rose">Trending</h6>
								<h4 class="card-title">
									<a href="#pablo">Dolce & Gabbana</a>
								</h4>
								<div class="card-description">
									Dolce & Gabbana's 'Greta' tote has been crafted in Italy from hard-wearing red textured-leather.
								</div>
								<div class="footer">
	                                <div class="price">
										<h4>$1,459</h4>
									</div>
	                            	<div class="stats">
										<button type="button" rel="tooltip" title="Saved to Wishlist" class="btn btn-just-icon btn-simple btn-rose">
											<i class="material-icons">favorite</i>
										</button>
	                            	</div>
	                            </div>

							</div>

						</div>
					</div>

					<div class="col-md-3">
								<div class="card card-product">
							<div class="card-image">
								<a href="#pablo">
									<img class="img" src="img/examples/card-product4.jpg" />
								</a>
							</div>

							<div class="content">
								
								<h6 class="card-title">
									<a href="#pablo">[CLASSIC] GRADUATE</a>
								</h6>
					
								<div class="footer">
	                                <div class="price">
										<button type="button" rel="tooltip" title="Saved to Wishlist" class="btn btn-just-icon btn-simple btn-rose">
										<i class="material-icons">shopping_cart</i><a style="
    font-size: 15px;
">5.000.000<a>		
										</button>
</div>
										<div class="stats">
										<button type="button" rel="tooltip" title="Saved to Wishlist" class="btn btn-just-icon btn-simple btn-rose">
											<i class="material-icons">favorite</i>
										</button>
										
	                            	</div>
									<i style="
    font-size: 10px; text-decoration: line-through;
">6.000.000</i>
	                            </div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3">
						<div class="card card-product">
							<div class="card-image">
								<a href="#pablo">
									<img class="img" src="img/examples/card-product4.jpg" />
								</a>
							</div>

							<div class="content">
								<h6 class="category text-muted">Popular</h6>
								<h4 class="card-title">
									<a href="#pablo">Balenciaga</a>
								</h4>
								<div class="card-description">
									Balenciaga's black textured-leather wallet is finished with the label's iconic 'Giant' studs. This is where you can...
								</div>
								<div class="footer">
	                                <div class="price">
										<h4>$590</h4>
									</div>
	                            	<div class="stats">
										<button type="button" rel="tooltip" title="Saved to Wishlist" class="btn btn-just-icon btn-simple btn-rose">
											<i class="material-icons">favorite</i>
										</button>
	                            	</div>
	                            </div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-3">
						<div class="card card-product">
							<div class="card-image">
								<a href="#pablo">
									<img class="img" src="img/examples/card-product2.jpg" />
								</a>
							</div>

							<div class="content">
								<h6 class="category text-rose">Trending</h6>
								<h4 class="card-title">
									<a href="#pablo">Dolce & Gabbana</a>
								</h4>
								<div class="card-description">
									Dolce & Gabbana's 'Greta' tote has been crafted in Italy from hard-wearing red textured-leather.
								</div>
								<div class="footer">
	                                <div class="price">
										<h4>$1,459</h4>
									</div>
	                            	<div class="stats">
										<button type="button" rel="tooltip" title="Save to Wishlist" class="btn btn-just-icon btn-simple btn-default">
											<i class="material-icons">favorite</i>
										</button>
	                            	</div>
	                            </div>

							</div>

						</div>
					</div>

				</div>
			</div>
	    </div>
	</div>


<footer class="footer footer-black footer-big">
	<div class="container">

		<div class="content">
			<div class="row">
				<div class="col-md-4">
					<h5>About Us</h5>
					<p>Creative Tim is a startup that creates design tools that make the web development process faster and easier. </p> <p>We love the web and care deeply for how users interact with a digital product. We power businesses and individuals to create better looking web projects around the world. </p>
				</div>

				<div class="col-md-4">
					<h5>Social Feed</h5>
					<div class="social-feed">
						<div class="feed-line">
							<i class="fa fa-twitter"></i>
							<p>How to handle ethical disagreements with your clients.</p>
						</div>
						<div class="feed-line">
							<i class="fa fa-twitter"></i>
							<p>The tangible benefits of designing at 1x pixel density.</p>
						</div>
						<div class="feed-line">
							<i class="fa fa-facebook-square"></i>
							<p>A collection of 25 stunning sites that you can use for inspiration.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<h5>Instagram Feed</h5>
					<div class="gallery-feed">
						<img src="img/faces/card-profile6-square.jpg" class="img img-raised img-rounded" alt="" />
						<img src="img/faces/christian.jpg" class="img img-raised img-rounded" alt="" />
						<img src="img/faces/card-profile4-square.jpg" class="img img-raised img-rounded" alt="" />
						<img src="img/faces/card-profile1-square.jpg" class="img img-raised img-rounded" alt="" />

						<img src="img/faces/marc.jpg" class="img img-raised img-rounded" alt="" />
						<img src="img/faces/kendall.jpg" class="img img-raised img-rounded" alt="" />
						<img src="img/faces/card-profile5-square.jpg" class="img img-raised img-rounded" alt="" />
						<img src="img/faces/card-profile2-square.jpg" class="img img-raised img-rounded" alt="" />
					</div>

				</div>
			</div>
		</div>


		<hr />

		<ul class="pull-left">
			<li>
				<a href="#pablo">
				   Blog
				</a>
			</li>
			<li>
				<a href="#pablo">
					Presentation
				</a>
			</li>
			<li>
				<a href="#pablo">
				   Discover
				</a>
			</li>
			<li>
				<a href="#pablo">
					Payment
				</a>
			</li>
			<li>
				<a href="#pablo">
					Contact Us
				</a>
			</li>
		</ul>

		<div class="copyright pull-right">
			Copyright &copy; <script>document.write(new Date().getFullYear())</script> Creative Tim All Rights Reserved.
		</div>
	</div>
</footer>

</body>
</html>
@endsection


