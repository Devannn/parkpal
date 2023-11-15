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

    {{-- Statistics --}}
    <div class="container">
        @include('includes.statistics')
    </div>

    {{-- Checks --}}
    <div class="container">
        @include('includes.checks')
    </div>
</div>
<script>

</script>
@endsection