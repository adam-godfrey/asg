@extends('brookshillfarm.layouts.default')

@push('scripts')
<script src="{{ asset('js/dateTimePicker.min.js') }}"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('js/jquery.daterangepicker.js') }}"></script>
<script>
$(function() {
    $('#show-next-month').calendar(
      {
        num_next_month: 2,
        num_prev_month: 0,
        unavailable: ['*-*-9', '*-*-10']
      });

      $('#daterange').dateRangePicker({
        format: 'dddd MMM Do, YYYY',
        startDate: new Date(),
        autoClose: true
        // beforeShowDay: function(t)
        // {
        //  var valid = !(t.getDay() == 0 || t.getDay() == 6);  //disable saturday and sunday
        //  var _class = '';
        //  var _tooltip = valid ? '' : 'sold out';
        //  return [valid,_class,_tooltip];
        // }
      });
    });
</script>
@endpush

@section('content')
<section class="page-section about-heading">
    <div class="container">
      	<img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="https://via.placeholder.com/1900x710.png?text=Image Coming Soon" alt="">
      	<div class="about-heading-content">
        	<div class="row">
          		<div class="col-xl-9 col-lg-10 mx-auto">
            		<div class="bg-faded rounded p-5">
		              	<h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                            <span class="section-heading-lower">Tariff &amp; Booking</span>
                        </h2>
		              	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut nibh leo. Nunc vitae ex ut turpis aliquam lacinia ac dictum dui. Sed blandit magna arcu, non ullamcorper lectus egestas quis. Curabitur vel metus lacinia mi lobortis venenatis. Nullam ornare dui in quam malesuada, sed dapibus neque tristique. Donec id ligula maximus, gravida augue vel, gravida tellus.</p>
		              	<p class="mb-0">Suspendisse efficitur, velit et tincidunt tincidunt, lorem tellus accumsan nibh, ornare dignissim orci sem at ex. Phasellus eget ex a magna scelerisque convallis. Cras id nunc id tortor iaculis ultrices. Quisque consectetur ullamcorper massa a luctus.</p>
            		</div>
          		</div>
        	</div>
      	</div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4 text-center">
                            <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                            <span class="section-heading-lower">Tariff</span>
                        </h2>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Length of stay</th>
                                        <th scope="col">Number of nights</th>
                                        <th scope="col">Start day</th>
                                        <th scope="col">Total price</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <td scope="row">One night stay</td>
                                        <td>{{ $tariff[0]->nights }}</td>
                                        <td>Any day</td>
                                        <td>&pound;{{ $tariff[0]->formatted_price }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Two night stay</td>
                                        <td>{{ $tariff[1]->nights }}</td>
                                        <td>Any day</td>
                                        <td>&pound;{{ $tariff[1]->formatted_price }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Weekend break</td>
                                        <td>{{ $tariff[2]->nights }}</td>
                                        <td>Friday</td>
                                        <td>&pound;{{ $tariff[2]->formatted_price }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Midweek break</td>
                                        <td>{{ $tariff[3]->nights }}</td>
                                        <td>Monday</td>
                                        <td>&pound;{{ $tariff[3]->formatted_price }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">One week holiday</td>
                                        <td>{{ $tariff[4]->nights }}</td>
                                        <td>Monday or Friday</td>
                                        <td>&pound;{{ $tariff[4]->formatted_price }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Two week holiday</td>
                                        <td>{{ $tariff[5]->nights }}</td>
                                        <td>Monday or Friday</td>
                                        <td>&pound;{{ $tariff[5]->formatted_price }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <div class="bg-faded rounded p-5 text-center rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">&lsquo;MooBells&rsquo; Shepherd's Hut</span>
                            <span class="section-heading-lower">Availability</span>
                        </h2>
                        <div id="show-next-month" data-toggle="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="cta-inner rounded">
                    <h2 class="section-heading mb-5 text-center">
                        <span class="section-heading-upper">Make A</span>
                        <span class="section-heading-lower">Booking Enquiry ...</span>
                    </h2>

                    <div class="row">
                        <div class="col-lg-12">
                          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                              
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
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <input class="form-control placeholder hide-on-focus" name="name" id="telephone" type="text" placeholder="Enter your telephone">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <input class="form-control placeholder hide-on-focus" name="email" id="daterange" type="email" placeholder="Enter dates required i.e. August 1st to August 5th">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100 placeholder hide-on-focus" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="form-group mt-3">
                              <button type="submit" class="btn btn-primary button-contactForm">Send Message</button>
                            </div>
                          </form>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection