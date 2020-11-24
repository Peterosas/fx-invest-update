
<div class = "row mb-3 mt-2">
    
    <div class = "col-md-3">
        <div class="card stretch-card cardx">
                  <div class="card-body">
                    <div>
                       <h4 class="text-muted">Total Deposit</h4>
                    </div>
                    <h3 class="text-success font-weight-bold">{{ formatAmount(App\Transaction::adTotalDeposit()) }}</h3>
                  </div>
        </div>
    </div>
    
    
    <div class = "col-md-3">
        <div class="card stretch-card cardx">
            <div class="card-body">
                <div>
                    <h4 class="text-muted">Total Earning</h4>
                </div>
                <h3 class="text-success font-weight-bold">{{ formatAmount($total_earnings?? 0 )}}</h3>
            </div>
        </div>
    </div>
    
 
    <div class = "col-md-3">
        <div class="card cardx">
                <div class="card-body">
                    <div>
                       <h4 class="text-muted">Total Investment</h4>
                    </div>
                    <h3 class="text-success font-weight-bold">{{ formatAmount(App\Investment::adTotalInvestments()) }}</h3>
                </div>
        </div>


    </div>
    
       <div class = "col-md-3">
        <div class="card cardx">
                <div class="card-body">
                    <div>
                       <h4 class="text-muted">Total Withdrawal</h4>
                    </div>
                    <h3 class="text-success font-weight-bold">{{ formatAmount(App\Transaction::adTotalWithdrawal()) }}</h3>
                </div>
        </div>


    </div>
</div>
                
