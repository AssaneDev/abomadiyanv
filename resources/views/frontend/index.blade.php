@extends('frontend.main_master')
@section('main')
<main class="wrapper">

    <!-- Slider Section -->
    @include('frontend.home.hero')

    <!-- Services -->
    @include('frontend.home.services')

    <div class="divider-line-hr"></div>

    <!-- About Kimono -->
    @include('frontend.home.apropos')

    <!-- Our Projects -->
    @include('frontend.home.projet')

    <!-- Testimonial -->
    @include('frontend.home.temoignage')

    {{-- contact info --}}
    @include('frontend.home.infocontact')

    <div class="divider-line-hr mr-bottom-40"></div>

    <!-- Contact -->
    @include('frontend.home.contact')
</main>
@endsection