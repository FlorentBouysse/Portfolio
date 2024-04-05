@extends('base')

@section('content')
<div class="h-screen relative top-10">
    <span class="z-10 text-xs text-green-400">Hello everyone 👋</span>
    <h1 class="z-10 text-5xl mt-9">I'm Billy</h1>
    

    @if($agent->isMobile())
    <p class="z-10 mt-9 pr-28 pe-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the <span class="text-green-300">industry's</span> standard dummy text ever since the <span class="text-green-300">1500s</span>, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <div style="right:-150px;width:500px;height:500px" class=" rounded-full opacity-20 bg-gray-500 absolute top-20"></div>
    <div style="right:-150px" class="text-9xl opacity-5 absolute top-10 uppercase font-black text-white right-10">Hello</div>
    <div style="box-shadow: 0px -5px 10px rgb(17 24 39);" class="absolute bg-gray-900 w-screen h-40 bottom-10 left-0 md:h-60 md:bottom-0"></div>
    @else
    <p class="z-10 text-xl mt-9 pr-28 pe-8 md:mr-96 md:pr-24">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the <span class="text-green-300">industry's</span> standard dummy text ever since the <span class="text-green-300">1500s</span>, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <div style="right:-160px;width:700px;height:700px" class=" rounded-full opacity-20 bg-gray-500 absolute top-20"></div>
    <div class="text-9xl opacity-5 absolute top-10 uppercase font-black text-white right-96">Hello</div>
    @endif
    <img style="right:-150px" class="z-0 absolute top-24 md:top-5" src="{{ asset('assets/pictures/picture1.png') }}" alt="Homme">
    
</div>

@include('about')
@include('speciality')
@include('skill')
@include('project')
@include('contact')

@endsection