<div class="mt-24 flex flex-col text-center relative">
    <span class="text-xs text-green-400">Send me a message</span>
    <h2 class="text-3xl mt-6">Contact</h1>
    <p class="mt-6 pe-8 md:text-xl md:mx-auto md:w-2/3 md:my-16">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>

    <div class="flex flex-col justify-evenly h-96 pe-8">
        <form class="flex flex-col relative md:w-1/2 md:m-auto" action="">
            @csrf
            <label class="z-10 text-start" for="name">Name</label>
            <input class="z-10 mb-2 rounded-lg pl-4" type="text" name="name" id="name" placeholder="Jimmy">

            <label class="z-10 text-start" for="email">Email</label>
            <input class="z-10 mb-2 rounded-lg pl-4" type="email" name="email" id="email" placeholder="jimmy@email.com">

            <label class="z-10 text-start" for="name_projet">Name of project</label>
            <input class="z-10 mb-2 rounded-lg pl-4" type="text" name="name_project" id="name_project" placeholder="Project">

            <label class="z-10 text-start" for="project">What project</label>
            <input class="z-10 mb-2 rounded-lg pl-4" type="text" name="project" id="project" placeholder="blog">

            <label class="z-10 text-start" for="description">Description</label>
            <textarea class="z-10 mb-2 rounded-lg" name="description" id="description" cols="30" rows="4" placeholder="Your message..."></textarea>

            <button class="z-10 text-end absolute bottom-2 right-2">
                <i class="z-10 text-black rotate-45 fa-solid fa-circle-arrow-up"></i>
                <p class="z-10 text-xs text-green-400">Send</p>
            </button>
        </form>
    </div>

    {{-- Absolute div --}}
    <div style="width:300px;height:300px; top:100px;left:-200px" class="rounded-full opacity-20 bg-gray-500 absolute"></div>
    <div style="right:-100px; top: 10px" class="text-7xl opacity-5 absolute uppercase font-black text-white z-20">Contact</div>
</div>