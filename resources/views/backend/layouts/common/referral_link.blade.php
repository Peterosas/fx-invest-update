
<div class="card cardx card-stat stretch-card mb-3">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div class="text-black">
                <h5 class="mb-0 text-muted">Invite someone and earn {{ getReferralBonus() }}% bonus</h5>
                <br />
                <a href = "{{ route('register', ['ref_id'=>Auth::user()->ref_id]) }}" class="badge badge-danger">Referral ID: {{ Auth::user()->ref_id }}</a>
            </div>
            <div class="flot-bar-wrapper">
                <div id="column-chart" class="flot-chart"></div>
            </div>
        </div>
    </div>
</div>
                
