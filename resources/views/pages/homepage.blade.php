@extends('layouts.app')

@section('content')
<div class="container-fluid" style="padding:0px;">

    {{-- Top Banner --}}
    <div class="container">
        @include('includes.banner')
    </div>

    {{-- Steps --}}
    <div class="container">
        @include('includes.steps')
    </div>

    {{-- Checks --}}
    <div class="container-fluid" style="padding:0px;">
        @include('includes.checks')
    </div>

    {{-- Statistics --}}
    <div class="container">
        @include('includes.statistics')
    </div>
</div>
<script>

</script>
@endsection