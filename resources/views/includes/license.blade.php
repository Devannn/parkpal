<div class="container-license">
    <div class="row py-5 justify-content-center">
        <div class="col-6">
            <div class="card card-map">
                <div class="card-map-body">
                    <form method="post" action="/find">
                        @csrf
                        <label for="plate_number">Enter License Plate Number:</label>
                        <input type="text" class="form-control" name="plate_number" placeholder="PPCAR1" required>
                        <div class="row">
                            <div class="col-1"><button type="submit" class="btn btn-secondary"
                                    style="margin-top: 10px;">Find</button>
                            </div>
                            <div class="col" style="padding-top:18px;height:10px;">@if($licensePlate)
                                <p>Plate Number: {{ $licensePlate->plate_number }}, Parkeerplaats: {{
                                    $licensePlate->spot_id }}</p>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>