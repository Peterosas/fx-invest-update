<div class="cell-row row">
            <div class="cell col-sm-4 col-md-3">
				<div class="card card-body pull-up">
				  <div class="media align-items-center p-0">
					<div class="text-center">
					  <a href="#"><i class="fa fa-money fa-2x" title="Balance"></i></a>
					</div>
					<div>
					  <h4>Total Deposit</h4>
					</div>
				  </div>
				  <div class="flexcard align-items-center mt-30">
					<div class="text-right">
					  <p class="no-margin"><span class="text-black font-size-20">{{ formatAmount(App\Transaction::adTotalDeposit()) }}</span></p>
					</div>
				  </div>
				</div>
            </div>
            <div class="cell col-sm-4 col-md-3">
				<div class="card card-body pull-up">
				  <div class="media align-items-center p-0">
					<div class="text-center">
					  <a href="#"><i class="fa fa-money fa-2x" title="Balance"></i></a>
					</div>
					<div>
					  <h4>Total Earning</h4>
					</div>
				  </div>
				  <div class="flexcard align-items-center mt-30">
					<div class="text-right">
					  <p class="no-margin"><span class="text-black font-size-20">{{ formatAmount($total_earnings?? 0 )}}</span></p>
					</div>
				  </div>
				</div>
            </div>
            <div class="cell col-sm-4 col-md-3">
				<div class="card card-body pull-up">
				  <div class="media align-items-center p-0">
					<div class="text-center">
					  <a href="#"><i class="fa fa-money fa-2x" title="Balance"></i></a>
					</div>
					<div>
					  <h4>Total Investment</h4>
					</div>
				  </div>
				  <div class="flexcard align-items-center mt-30">
					<div>
					  <p class="no-margin"><span class="text-black font-size-20">{{ formatAmount(App\Investment::adTotalInvestments()) }}</span></p>
					</div>
				  </div>
				</div>
            </div>
            <div class="cell col-sm-4 col-md-3">
				<div class="card card-body pull-up">
				  <div class="media align-items-center p-0">
					<div class="text-center">
					  <a href="#"><i class="fa fa-money fa-2x" title="Balance"></i></a>
					</div>
					<div>
					  <h4>Total Withdrawal</h4>
					</div>
				  </div>
                    
                  @php ($pendings = App\Transaction::pendingWithdrawals())
                    
				  <div class="flexcard align-items-center mt-30">
                    @if ($pendings > 0)
                    <div>
					  <p class="no-margin"><span class="badge badge-pending" title = "Pending Withdrawals">{{ $pendings }}</span></p>
					</div>
                    @endif
					<div>
					  <p class="no-margin"><span class="text-black font-size-20">{{ formatAmount(App\Transaction::adTotalWithdrawal()) }}</span></p>
					</div>
				  </div>
				</div>
            </div>
        </div>