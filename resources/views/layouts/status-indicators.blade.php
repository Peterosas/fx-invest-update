@php ($statuses = getStatuses())
@php (ksort($statuses))
<ul class="list-group list-group-horizontal">
                     
    <li class="list-group-item">
        
        <div class = "row">
        <div class = "col-sm-6">
            @foreach($statuses as $status => $value)
                <span class="badge badge-{{ $value['color'] }}"></span> {{ ucfirst($status) }}
            @endforeach
        </div>
        
        <div class = "col-sm-6 text-right">
            <button class = 'btn btn-sm btn-warning' onclick = "location.reload()">Refresh Data</button>
        </div>
        </div>
    </li>
</ul>
<br />