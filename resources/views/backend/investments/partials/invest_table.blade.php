


 <div class="card card-primary no-border">
                  <div class="card-header">
                    <h3 class="card-title pull-left">Active Investments</h3>
                    @include("backend.layouts.common.reload")
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-dark table-invest">
                        <thead>
                          <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Package</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Total Profit</th>
                            <th scope="col">Code</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php ($investments =  Auth::user()->investments)

                            @foreach($investments as $investment)
							               <tr>

                              <td>
                                @if (isset($finvest_date))
                                  {{ $investment->created_at->toDateString() }}
                                @else
                                  {{ $investment->created_at }}
                                @endif
                              </td>

                               <td>{{ $investment->package->name }}</td>
              							  <td>
              								{{ formatAmount($investment->amount) }}
              							  </td>

                              <td>
								{{ formatAmount($investment->totalEarnings()) }}
							  </td>

							  <td>
								{{ $investment->invest_code }}

							  </td>

                              <td class="{{ getStatusLabel($investment->status) }}">{{ ucfirst($investment->status) }}</td>

                              <td>
                                <a href = "{{ route('invest.details', ['id'=>$investment->id]) }}" class = "btn btn-primary ajax-popup-link">View</a>
                              </td>

							</tr>
                            @endforeach


                        </tbody>
                      </table>
                    </div>

                  </div>
                </div>
