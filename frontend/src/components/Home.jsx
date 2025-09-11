import React from 'react';
import videoImage from '../../public/assets/images/video-image.jpg';
import logo1 from '../../public/assets/images/logo1.png';
import logo2 from '../../public/assets/images/logo2.png';
import logo3 from '../../public/assets/images/logo3.png';
import logo4 from '../../public/assets/images/logo4.png';
import logo5 from '../../public/assets/images/logo5.png';
import patternBg from '../../public/assets/images/pattern-bg.png';

const Home = () => (
	<main>
		{/* Billboard Section */}
		<section id="billboard" className="bg-light py-5">
			<div className="container">
				<div className="row justify-content-center">
					<h1 className="section-title text-center mt-4" data-aos="fade-up">New Collections</h1>
					<div className="col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptas ut dolorum consequuntur, adipisci repellat! Eveniet commodi voluptatem voluptate, eum minima, in suscipit explicabo voluptatibus harum, quibusdam ex repellat eaque!</p>
					</div>
				</div>
				<div className="row">
					<div className="swiper main-swiper py-4" data-aos="fade-up" data-aos-delay="600">
						<div className="swiper-wrapper d-flex border-animation-left">
							{[...Array(6)].map((_, i) => (
								<div className="swiper-slide" key={i}>
									<div className="banner-item image-zoom-effect">
										<div className="image-holder">
											<a href="#"></a>
										</div>
										<div className="banner-content py-4">
											<h5 className="element-title text-uppercase"></h5>
											<p>Scelerisque duis aliquam qui lorem ipsum dolor amet, consectetur adipiscing elit.</p>
											<div className="btn-left"></div>
										</div>
									</div>
								</div>
							))}
						</div>
						<div className="swiper-pagination"></div>
					</div>
					<div className="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24"><use xlinkHref="#arrow-left"></use></svg></div>
					<div className="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24"><use xlinkHref="#arrow-right"></use></svg></div>
				</div>
			</div>
		</section>

		{/* Features Section */}
		<section className="features py-5">
			<div className="container">
				<div className="row">
					<div className="col-md-3 text-center" data-aos="fade-in" data-aos-delay="0">
						<div className="py-5">
							<svg width="38" height="38" viewBox="0 0 24 24"><use xlinkHref="#calendar"></use></svg>
							<h4 className="element-title text-capitalize my-3">Book An Appointment</h4>
							<p>At imperdiet dui accumsan sit amet nulla risus est ultricies quis.</p>
						</div>
					</div>
					<div className="col-md-3 text-center" data-aos="fade-in" data-aos-delay="300">
						<div className="py-5">
							<svg width="38" height="38" viewBox="0 0 24 24"><use xlinkHref="#shopping-bag"></use></svg>
							<h4 className="element-title text-capitalize my-3">Pick up in store</h4>
							<p>At imperdiet dui accumsan sit amet nulla risus est ultricies quis.</p>
						</div>
					</div>
					<div className="col-md-3 text-center" data-aos="fade-in" data-aos-delay="600">
						<div className="py-5">
							<svg width="38" height="38" viewBox="0 0 24 24"><use xlinkHref="#gift"></use></svg>
							<h4 className="element-title text-capitalize my-3">Special packaging</h4>
							<p>At imperdiet dui accumsan sit amet nulla risus est ultricies quis.</p>
						</div>
					</div>
					<div className="col-md-3 text-center" data-aos="fade-in" data-aos-delay="900">
						<div className="py-5">
							<svg width="38" height="38" viewBox="0 0 24 24"><use xlinkHref="#arrow-cycle"></use></svg>
							<h4 className="element-title text-capitalize my-3">free global returns</h4>
							<p>At imperdiet dui accumsan sit amet nulla risus est ultricies quis.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		{/* Logo Bar Section */}
		<section className="logo-bar py-5 my-5">
			<div className="container">
				<div className="row">
					<div className="logo-content d-flex flex-wrap justify-content-between">
						<img src={logo1} alt="logo" className="logo-image img-fluid" />
						<img src={logo2} alt="logo" className="logo-image img-fluid" />
						<img src={logo3} alt="logo" className="logo-image img-fluid" />
						<img src={logo4} alt="logo" className="logo-image img-fluid" />
						<img src={logo5} alt="logo" className="logo-image img-fluid" />
					</div>
				</div>
			</div>
		</section>

		{/* Newsletter Section */}
		<section className="newsletter bg-light" style={{ background: `url(${patternBg}) no-repeat` }}>
			<div className="container">
				<div className="row justify-content-center">
					<div className="col-md-8 py-5 my-5">
						<div className="subscribe-header text-center pb-3">
							<h3 className="section-title text-uppercase">Sign Up for our newsletter</h3>
						</div>
						<form id="form" className="d-flex flex-wrap gap-2">
							<input type="text" name="email" placeholder="Your Email Addresss" className="form-control form-control-lg" />
							<button className="btn btn-dark btn-lg text-uppercase w-100">Sign Up</button>
						</form>
					</div>
				</div>
			</div>
		</section>

		{/* Video Section */}
		<section className="video py-5 overflow-hidden">
			<div className="container-fluid">
				<div className="row">
					<div className="video-content open-up" data-aos="zoom-out">
						<div className="video-bg">
							<img src={videoImage} alt="video" className="video-image img-fluid" />
						</div>
						<div className="video-player">
							<a className="youtube" href="https://www.youtube.com/embed/pjtsGzQjFM4"></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
);

export default Home;
