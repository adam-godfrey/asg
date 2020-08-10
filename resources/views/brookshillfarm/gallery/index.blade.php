@extends('brookshillfarm.layouts.default')

@section('content')
<section class="page-section cta">
    <div class="container">
        <div class="row gallery-item">
            <div class="col-xl-12 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Brookshill Farm</span>
                        <span class="section-heading-lower">Gallery</span>
                    </h2>
                    <div class="row gallery-item">
                        <div class="col-md-4">
                            <a href="images/elements/g1.jpg" class="images-pop-up">
                                <div class="single-gallery-image" style="background: url({{ asset('images/brookshill/gallery/small-tractor.jpg') }});"></div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="images/elements/g2.jpg" class="images-pop-up">
                                <div class="single-gallery-image" style="background: url({{ asset('images/brookshill/gallery/cows.jpg') }});"></div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="images/elements/g3.jpg" class="images-pop-up">
                                <div class="single-gallery-image" style="background: url({{ asset('images/brookshill/gallery/farm-house.jpg') }});"></div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="images/elements/g4.jpg" class="images-pop-up">
                                <div class="single-gallery-image" style="background: url({{ asset('images/brookshill/gallery/geese.jpg') }});"></div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="images/elements/g5.jpg" class="images-pop-up">
                                <div class="single-gallery-image" style="background: url({{ asset('images/brookshill/gallery/dogs.jpg') }});"></div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="images/elements/g6.jpg" class="images-pop-up">
                                <div class="single-gallery-image" style="background: url({{ asset('images/brookshill/gallery/sheep.jpg') }});"></div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="images/elements/g7.jpg" class="images-pop-up">
                                <div class="single-gallery-image" style="background: url({{ asset('images/brookshill/gallery/tractor.jpg') }});"></div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="images/elements/g8.jpg" class="images-pop-up">
                                <div class="single-gallery-image" style="background: url({{ asset('images/brookshill/gallery/soph-with-horse.jpg') }});"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>
@endsection