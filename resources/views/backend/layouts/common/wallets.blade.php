
<div class="card stretch-card cardx mb-1">
                <div class="card-body d-flex flex-wrap justify-content-between">
                    <div>
                    
                      <h4 class="text-muted">Wallet Balance</h4>
                    </div>
                    <h3 class="text-success font-weight-bold">{{ Auth::user()->balanceWithFormat() }}</h3>
                  </div>
                </div>
                <div class="card stretch-card cardx mb-1">
                  <div class="card-body d-flex flex-wrap justify-content-between">
                    <div>
                       <h4 class="text-muted">Total Profit</h4>
                    </div>
                    <h3 class="text-success font-weight-bold">{{ formatAmount(Auth::user()->totalProfit()) }}</h3>
                  </div>
                </div>
                <div class="card cardx mt-1">
                  <div class="card-body d-flex flex-wrap justify-content-between">
                    <div>
                       <h4 class="text-muted">Total Referral Bonus</h4>
                    </div>
                    <h3 class="text-danger font-weight-bold">{{ Auth::user()->bonusEarnedWithFormat() }}</h3>
                  </div>
                </div>