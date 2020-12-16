@extends('layouts.user')
@section('content')
    <!-- partial -->
<div class="container">
    <div class="row mt-4">
				<div class="col-lg-12 grid-margin stretch-card">
					<div class="card card-danger card-outline card-outline-danger">
						<div class="card-header">
							<h4 class="card-title">PAYMENT CONFIRMATION</h4>
						</div>
					  <div class="card-body">
							<div class="row">
								<div class="col-lg-4">
		              <div class="col-lg-8">
										<div class="position-relative">
											
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<h4 class="card-title">Subscription Payment Details</h4><br>
									<div class="row">
										<div class="col-sm-12">
											<ul class="graphl-legend-rectangle">
												<li><span class="bg-danger"></span><b>Name </b>: {{(Auth::user()->name)}}</li>
												<li><span class="bg-danger"></span><b>Account Number </b>: {{\App\Helper\PaymentHelper::bind_account_number($value)}}</li>
												<li><span class="bg-warning"></span><b>Email </b>: {{(Auth::user()->email)}}</li>
                                                <li><span class="bg-info"></span><b>Phone Number</b> : {{(Auth::user()->phone)}}</li>
                                                <li><span class="bg-info"></span><b>Subscription Amount</b> : &#x20B9; {{($amount)}}</li>
										</div>
                                        <a href="{{route('walletpayment')}}"><button type="button" class="btn btn-primary">Confirm Payment >></button></a>
									</div>
								</div>
							</div>
						</div>
					</div>
</div>
		
@endsection			