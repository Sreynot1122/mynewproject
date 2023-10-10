@extends('front_master')
@section('content')
 {{-- <!-- Navbar & Hero Start -->
 @include('partials.navbar')
 <!-- Navbar & Hero End --> --}}






    <!-- About Start -->
    @include('partials.about')
    <!-- About End -->


    <!-- Team Start -->
    @include('partials.our_guides')
    <!-- Team End -->

    @endsection

