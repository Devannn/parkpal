<div class="row py-5 justify-content-center">
    <div class="col-12">
        <div class="card card-license">
            <div class="card-license-header">
                <a>Ingang</a>
                <div>
                    <x-fas-arrow-down-long style="width:15px;height:15px;" />
                </div>
            </div>
            <div class="card-map-body">
                <div class="row">
                    @foreach($spots as $spot)
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="parking-lot parking-lot-{{ $spot->id }} 
                                    @if ($spot->is_occupied)
                                    is-occupied
                                    @else
                                    is-not-occupied
                                    @endif"> Parkeerplaats:
                                    {{ $spot->spot_number }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>