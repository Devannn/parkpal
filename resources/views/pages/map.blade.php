@extends('layouts.app')

@section('content')
<div class="container-fluid" style="padding:0px;">
    {{-- License --}}
    <div class="container-fluid" style="padding:0px;">
        @include('includes.license')
    </div>
    {{-- Map --}}
    <div class="container">
        @include('includes.map')
    </div>
</div>
<script>

</script>
@endsection