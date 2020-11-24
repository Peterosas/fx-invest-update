@php ($total = Auth::user()->total_amount )

<h4 class = "box-title">Current Balance: <span class = "text-{{ $total < 1? 'red':'green'}}">{{ Auth::user()->balanceWithFormat("right") }}</span></h4>