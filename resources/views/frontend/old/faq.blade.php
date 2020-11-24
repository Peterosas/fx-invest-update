@extends('frontend.layouts.app', ['title'=>'FAQ ' . ($site_settings->site_name?? config('company.name'))])


@section('content')
    <!-- Wrapper Starts -->
    <div class="wrapper">
        @include('frontend.layouts.common.header')
        <!-- Banner Area Starts -->
        <section class="banner-area">
			<div class="banner-overlay">
				<div class="banner-text text-center">
					<div class="container">
						<!-- Section Title Starts -->
						<div class="row text-center">
							<div class="col-xs-12">
								<!-- Title Starts -->
								<h2 class="title-head">Frequenty Asked <span>Questions</span></h2>
								<!-- Title Ends -->
								<hr>
								<!-- Breadcrumb Starts -->
								<ul class="breadcrumb">
									<li><a href="index-2.html"> home</a></li>
									<li>faq</li>
								</ul>
								<!-- Breadcrumb Ends -->
							</div>
						</div>
						<!-- Section Title Ends -->
					</div>
				</div>
			</div>
        </section>
        <!-- Banner Area Ends -->
        <!-- Section FAQ Starts -->
        <section class="faq">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <!-- Panel Group Starts -->
                        <div class="panel-group" id="accordion">
                            <!-- Panel Starts -->
                            <div class="panel panel-default">
                                <!-- Panel Heading Starts -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
								How can I resgister?</a>
                                    </h4>
                                </div>
                                <!-- Panel Heading Ends -->
                                <!-- Panel Content Starts -->
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body"><strong>Ans.</strong> you can register through this link: <a href = "{{ route('register') }}">{{ route('register') }}</a></div>
                                </div>
                                <!-- Panel Content Starts -->
                            </div>
                            <!-- Panel Ends -->
                            <!-- Panel Starts -->
                            <div class="panel panel-default">
                                <!-- Panel Heading Starts -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
								When can I make withdrawal?</a>
                                    </h4>
                                </div>
                                <!-- Panel Heading Ends -->
                                <!-- Panel Content Starts -->
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body"> <strong>Ans.</strong> you can make withdrawal anytime any day.</div>
                                </div>
                                <!-- Panel Content Starts -->
                            </div>
                            <!-- Panel Ends -->
							<!-- Panel Starts -->
                            <div class="panel panel-default">
                                <!-- Panel Heading Starts -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
								When can I make deposit?</a>
                                    </h4>
                                </div>
                                <!-- Panel Heading Ends -->
                                <!-- Panel Content Starts -->
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body"><strong>Ans.</strong> you can make deposit any time.</div>
                                </div>
                                <!-- Panel Content Starts -->
                            </div>
                            <!-- Panel Ends -->
							<!-- Panel Starts -->
                            <div class="panel panel-default">
                                <!-- Panel Heading Starts -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
								Can I cancel a running contract?</a>
                                    </h4>
                                </div>
                                <!-- Panel Heading Ends -->
                                <!-- Panel Content Starts -->
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">Ans: Yes! You can cancel a contract of which the accrued profits will be minused and a 5% charge upon withdrawal.</div>
                                </div>
                                <!-- Panel Content Starts -->
                            </div>
                            <!-- Panel Ends -->
							
                        </div>
                        <!-- Panel Group Ends -->
                    </div>
			
                </div>
            </div>
        </section>
      
        @include('frontend.layouts.common.footer')
    </div>
@endsection