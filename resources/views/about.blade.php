@if($agent->isMobile())
<div class="z-10">
@else
<div style="margin-top:-300px; margin-bottom:200px" class="z-10">
@endif
    <span class="z-10 text-xs text-green-400">About me</span>
    <h2 class="z-10 text-3xl mt-6">Lorem Ipsum is simply dummy text of the printing</h1>
    
    <p class="z-10 mt-6 pe-8 md:mr-96 md:pr-52">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the <span class="text-green-300">industry's</span> standard dummy text ever since the <span class="text-green-300">1500s</span>, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    
    

    {{-- Absolute div --}}
    <div style="width:220px;height:200px; top:1000px;left:-50px" class="rounded-full opacity-20 bg-gray-500 absolute"></div>
    
    @if($agent->isMobile())
    <div style="box-shadow: 0px -5px 10px rgb(17 24 39);top:1120px;" class="absolute bg-gray-900 w-screen h-20 bottom-10 left-0"></div>
    <div style="left:-10px; top: 700px" class="text-8xl opacity-5 absolute uppercase font-black text-white">About me</div>
    @else
    <div style="left:-10px; top: 700px" class="text-8xl opacity-5 absolute uppercase font-black text-white">About me</div>
    @endif
</div>