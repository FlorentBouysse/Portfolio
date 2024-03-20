<div class="mt-24 flex flex-col text-center relative">
    <span class="text-xs text-green-400">Send me a message</span>
    <h2 class="text-3xl mt-6">Contact</h1>
    <p class="mt-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>

    <div class="flex flex-col justify-evenly h-96">
        <form class="flex flex-col relative" action="">
            <label class="text-start" for="name">Name</label>
            <input class="mb-2 rounded-lg pl-4" type="text" name="name" id="name" placeholder="Jimmy">

            <label class="text-start" for="email">Email</label>
            <input class="mb-2 rounded-lg pl-4" type="text" name="email" id="email" placeholder="jimmy@email.com">

            <label class="text-start" for="name_projet">Name of project</label>
            <input class="mb-2 rounded-lg pl-4" type="text" name="name_project" id="name_project" placeholder="Project">

            <label class="text-start" for="project">What project</label>
            <input class="mb-2 rounded-lg pl-4" type="text" name="project" id="project" placeholder="blog">

            <label class="text-start" for="description">Description</label>
            <textarea class="mb-2 rounded-lg" name="description" id="description" cols="30" rows="4" placeholder="Your message..."></textarea>

            <button class="text-end absolute bottom-2 right-2">
                <i class="text-black rotate-45 fa-solid fa-circle-arrow-up"></i>
                <p class="text-xs text-green-400">Send</p>
            </button>
        </form>
    </div>

    {{-- Absolute div --}}
    <div style="width:300px;height:300px; top:100px;left:-200px" class="rounded-full opacity-20 bg-gray-500 absolute"></div>
    <div style="right:-100px; top: 10px" class="text-7xl opacity-5 absolute uppercase font-black text-white z-20">Contact</div>
</div>