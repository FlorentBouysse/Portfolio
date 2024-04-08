<div class="mt-16 relative ">
    <span class="z-10 text-xs text-green-400">Project Work</span>
    <h2 class="z-10 text-3xl mt-6 pe-8">Specialist Focus Project</h1>
    <p class="z-10 mt-6 pe-8 md:text-xl md:mr-96">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
    
    {{-- icon more --}}
    <button class="z-10 absolute right-8 md:right-48 md:mt-10">
        <i class=" rotate-45 fa-solid fa-circle-arrow-up"></i>
        <p class="text-xs text-green-400">More project</p>
    </button>

    <div class="flex flex-wrap md:mt-24">
        <div class="z-10 h-48 relative rounded-xl opacity-75 mt-24 px-6">
            <img class="w-64" src="{{ asset('assets/pictures/picture__project.webp') }}" alt="image projet">
            <h3 class="">Cook project</h3>
            <p>Project of cook and reservation</p>
        </div>
        <div class="z-10 h-56 relative rounded-xl opacity-75 mt-24 px-6">
            <img class="w-64" src="{{ asset('assets/pictures/picture__project.webp') }}" alt="image projet">
            <h3 class="">Cook project</h3>
            <p>Project of cook and reservation</p>
        </div>
        @if(!$agent->isMobile())
        <div class="z-10 h-48 relative rounded-xl opacity-75 mt-24 px-6">
            <img class="w-64" src="{{ asset('assets/pictures/picture__project.webp') }}" alt="image projet">
            <h3 class="">Cook project</h3>
            <p>Project of cook and reservation</p>
        </div>
        <div class="z-10 h-56 relative rounded-xl opacity-75 mt-24 px-6">
            <img class="w-64" src="{{ asset('assets/pictures/picture__project.webp') }}" alt="image projet">
            <h3 class="">Cook project</h3>
            <p>Project of cook and reservation</p>
        </div>
        @endif
    </div>

    {{-- Absolute div --}}
    <div style="width:250px;height:250px; top:150px;right:-50px" class="rounded-full opacity-20 bg-gray-500 absolute"></div>
    <div style="width:50px;height:50px; top:100px;left:20px" class="rounded-full opacity-20 bg-gray-500 absolute"></div>
    <div style="left:-50px; top: -50px" class="text-7xl opacity-5 absolute uppercase font-black text-white z-20">Project Work</div>
</div>