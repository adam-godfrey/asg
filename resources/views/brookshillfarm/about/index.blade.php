@extends('brookshillfarm.layouts.default')

@section('content')
<section class="page-section about-heading">
    <div class="container">
      	<img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{ asset('images/brookshill/scenery1.jpg') }}" alt="">
      	<div class="about-heading-content">
        	<div class="row">
          		<div class="col-xl-9 col-lg-10 mx-auto">
            		<div class="bg-faded rounded p-5">
		              	<h2 class="section-heading mb-4">
			                <span class="section-heading-upper">Sustainable Farming</span>
			                <span class="section-heading-lower">About Our Farm</span>
		              	</h2>
		              	<p>Sophia, Stewart and their two daughters Isabel and Maisie moved to Brookshill Farm just over four years ago. It had been a life-long dream to farm their own land but had never seemed a reality. Their lives took a change and in August 2016 they moved just a mile and a half from their much, loved village of Culmstock to Brookshill, a small but beautifully formed farm set at the edge of the stunning Blackdown Hills AONB on the Devon &amp; Somerset Border.</p>

                    <p>Having run their own Environmental Consultancy for ten years Sophia and Stewart are passionate about countryside management and sustainable farming. The farm is a haven for wildlife which thrives in the mosaic of habitats present ranging from species rich hedgerows through to wetland habitat and a tributary to the River Culm.</p>

                    <p>It was only weeks before their first livestock arrived and over the last four years the farm has continued to grow from strength to strength. "We are blessed to have the support of many well respected and experienced producers helping guide us on this journey.</p>

                    <blockquote class="generic-blockquote">
                      "We are confident about the future ahead and excited about plans we have to diversify the farm over the coming years"
                    </blockquote>

                    <p>New for 2020 is our beautiful, bespoke <a href="{{ route('brookshillfarm.glamping.accomodation') }}">Shepherds Hut</a> offering our guests the opportunity to enjoy a most superb Staycation, tailored exactly to your needs at our peaceful little farm on the edge of the Blackdown Hills Area of Outstanding Natural Beauty (AONB).</p>
            		</div>
          		</div>
        	</div>
      	</div>
    </div>
</section>
@endsection