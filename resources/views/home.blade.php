@extends('base')

@section('content')
<div class="h-screen relative top-10">
    <span class="text-xs text-green-400">Hello everyone 👋</span>
    <h1 class="text-5xl mt-9">I'm Billy</h1>
    <p class="mt-9 pr-20 pe-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the <span class="text-green-300">industry's</span> standard dummy text ever since the <span class="text-green-300">1500s</span>, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <div style="right:-150px;width:500px;height:500px" class="rounded-full opacity-20 bg-gray-500 absolute top-20"></div>
    <div style="right:-150px" class="text-9xl opacity-5 absolute top-10 uppercase font-black text-white">Hello</div>
    <img style="right:-150px" class="z-0 absolute top-24" src="{{ asset('assets/pictures/picture1.png') }}" alt="Homme">
    <div style="box-shadow: 0px -5px 10px rgb(17 24 39);" class="absolute bg-gray-900 w-screen h-40 bottom-10 left-0"></div>
</div>

@include('about')
@include('speciality')
@include('skill')
@include('project')
@include('contact')

@endsection