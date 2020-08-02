@extends('brookshillfarm.layouts.default')

@section('content')

<section class="page-section">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        {{-- <div id="map" style="height: 480px;"></div>--}}
		<iframe width="100%" height="480px" id="mapcanvas" src="https://maps.google.com/maps?q=ex15%203az&amp;t=&amp;z=10&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
			<div style="overflow:hidden;">
				<div id="gmap_canvas" style="height:100%;width:100%;"></div>
			</div>
		</iframe>      
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="cta-inner rounded">
                    <h2 class="section-heading mb-5 text-center">
                        <span class="section-heading-upper">Send Us A</span>
                        <span class="section-heading-lower">Message</span>
                    </h2>

                    <div class="row">
				        <div class="col-lg-8">
				          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
				            <div class="row">
				              <div class="col-12">
				                <div class="form-group">
				                    <textarea class="form-control w-100 placeholder hide-on-focus" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
				                </div>
				              </div>
				              <div class="col-sm-6">
				                <div class="form-group">
				                  <input class="form-control placeholder hide-on-focus" name="name" id="name" type="text" placeholder="Enter your name">
				                </div>
				              </div>
				              <div class="col-sm-6">
				                <div class="form-group">
				                  <input class="form-control placeholder hide-on-focus" name="email" id="email" type="email" placeholder="Enter email address">
				                </div>
				              </div>
				              <div class="col-12">
				                <div class="form-group">
				                  <input class="form-control placeholder hide-on-focus" name="subject" id="subject" type="text" placeholder="Enter Subject">
				                </div>
				              </div>
				            </div>
				            <div class="form-group mt-3">
				              <button type="submit" class="btn btn-primary button-contactForm">Send Message</button>
				            </div>
				          </form>
				        </div>
				        <div class="col-lg-4">
				          <div class="media contact-info">
				            <span class="contact-info__icon"><i class="ti-home"></i></span>
				            <div class="media-body">
				              <h3><a href="">Brookshill Farm, Uffculme</a></h3>
				              <p>Cullompton, EX15 3AZ</p>
				            </div>
				          </div>
				          <div class="media contact-info">
				            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
				            <div class="media-body">
				              <h3><a href="tel:07979752275">07979 752275</a></h3>
				              <p>Mon to Fri 9am to 8pm</p>
				            </div>
				          </div>
				          <div class="media contact-info">
				            <span class="contact-info__icon"><i class="ti-email"></i></span>
				            <div class="media-body">
				              <h3><a href="mailto:hello@brookshillfarm">hello@brookshillfarm</a></h3>
				              <p>Send us your query anytime!</p>
				            </div>
				          </div>
				        </div>
				      </div>
				  </div>
				</div>
			</div>
		</div>
	</section>


  @endsection