@extends('brookshillfarm.layouts.default')

@push('scripts')
<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<script>
    $(function() {
        //masonry js
        $('.grid').masonry({
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            percentPosition: true
        });
    });
</script>
@endpush()

@section('content')
<section class="page-section about-heading">
    <div class="container">
      	<img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{ asset('images/brookshill/accomodation.jpg') }}" alt="Book of birds, binoculars and grey basket on shelf">
      	<div class="about-heading-content">
        	<div class="row">
          		<div class="col-xl-9 col-lg-10 mx-auto">
            		<div class="bg-faded rounded p-5">
		              	<h2 class="section-heading mb-4">
			                <span class="section-heading-upper">A little bit of luxury</span>
			                <span class="section-heading-lower">Accomodation</span>
		              	</h2>
		              	<p class="mb-3">Our beautiful bespoke, shepherds hut MooBells (sorry named by our children) will be welcoming guests from April 2020. Our hut is brand new and offers guests a little bit of luxury whilst importantly still maintaining that all important, at one with nature camping feel which is so very important to us.</p>

                        <p class="mb-3">MooBells comes furnished with every creature comfort you can think of to help fully recharge your batteries. The hut sleeps two adults, a travel cot can be hired upon request.</p>

                        <ul class="unordered-list mb-3">
                            <li>En-suite bathroom including gas powered shower, wash basin &amp; elegant composting WC</li>
                            <li>Full size double bed with quality pocket sprung mattress &amp; storage underneath</li>
                            <li>Cast iron traditional multifuel stove and hearth</li>
                            <li>Electric oven and hob</li>
                            <li>50's style retro fridge/freezer</li> 
                            <li>Full 240v electrics & lighting</li>
                            <li>Armitage Shanks Belfast sink</li>
                            <li>Built in wardrobe</li>
                            <li>BBQ with planted herbs for that extra special outside cooking experience</li>
                            <li>Firepit</li>
                            <li>Table and chairs</li>
                            <li>Log store</li>
                        </ul>

                        <p class="mb-0">An additional camping pitch is also available in association with your stay or there is the option to hire our bell tent complete with bunting to accommodate up to two more members of your party or accommodate your teens!</p>
            		</div>
          		</div>
        	</div>
      	</div>
    </div>
</section>



<section class="project_gallery page-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
               <div class="grid">
                    <div class="grid-sizer"></div>
                    <div class="grid-item big_weight">
                        <div class="project_img">
                            <img src="{{ asset('images/brookshill/gallery/bottles.jpg') }}" alt="Various bottles and soap in window">
                            <div class="project_gallery_hover_text">
                                <p>Sherpherd's Hut</p>
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <ul>
                                    <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                                    <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                                    <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                                    <li><a href=""><span class="ti-heart"></span></a> like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item big_height">
                        <div class="project_img">
                            <img src="{{ asset('images/brookshill/gallery/bed.jpg') }}" alt="Bed and furniture inside Shepherd's Hut">
                            <div class="project_gallery_hover_text">
                                <p>Sherpherd's Hut</p>
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <ul>
                                    <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                                    <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                                    <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                                    <li><a href=""><span class="ti-heart"></span></a> like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="project_img">
                            <img src="{{ asset('images/brookshill/gallery/bench.jpg') }}" alt="Bottle of wine, glasses, flowers in vase and picknet basket on wooden bench">
                            <div class="project_gallery_hover_text">
                                <p>Sherpherd's Hut</p>
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <ul>
                                    <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                                    <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                                    <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                                    <li><a href=""><span class="ti-heart"></span></a> like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="project_img">
                            <img src="{{ asset('images/brookshill/gallery/sofa.jpg') }}" alt="Sofa with cushions inside shepherd's hut" alt="">
                            <div class="project_gallery_hover_text">
                                <p>Sherpherd's Hut</p>
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <ul>
                                    <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                                    <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                                    <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                                    <li><a href=""><span class="ti-heart"></span></a> like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ asset('images/brookshill/outdoors.jpg') }}" alt="Bench overlooking Blackdown Hills">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Enjoy Fantastic Views</span>
                    <span class="section-heading-lower">Culmstock Beacon</span>
                </h2>
                <p class="mb-3">Outside your shepherd hut is where your glamping experience really takes shape. Your accommodation comes with far reaching views to the famous Culmstock Beacon (we recommend you take a walk up here) and is situated just a stone's throw from the river Culm footpath. With just a fifteen-minute stroll along the meandering river Culm to the local village of Culmstock, with its great pub and Village shop what could be better.</p>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="{{ route('brookshillfarm.glamping.booking.index') }}">How To Book</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img-r img-fluid mb-3 mb-lg-0 rounded" src="{{ asset('images/brookshill/shepherds-hut.jpg') }}" alt="">
            <div class="intro-text-r left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Outdoor Cooking On A</span>
                    <span class="section-heading-lower">Rustic Campfire</span>
                </h2>
                <p class="mb-3">We love absolutely nothing more than outdoor cooking so in addition to your very well equipped kitchen we have provided you with a quint essentially rustic campfire set up so you can cook bangers (Brookshill homemade are best) and beans on an open fire, under the stars to your hearts content. We would recommend cooking your breakfast like this too as in addition to breath taking sunsets you could be in for some truly magnificent sunrises.</p>
                <div class="intro-button-r mx-auto">
                    <a class="btn btn-primary btn-xl" href="{{ route('brookshillfarm.glamping.booking.index') }}">How To Book</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection