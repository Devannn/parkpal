<!-- resources/views/spots/index.blade.php -->

<h1>Spots</h1>

<ul>
    @foreach ($spots as $spot)
    <li>{{ $spot->spot_id }}</li>
    <!-- Replace 'column_name' with the actual column name in your 'spots' table -->
    @endforeach
</ul>