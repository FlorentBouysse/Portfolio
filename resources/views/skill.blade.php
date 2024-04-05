<div class="mt-20 relative">
    <span class="text-xs text-green-400">Skills Possessed</span>
    <h2 class="text-3xl mt-6">Lorem Ipsum is simply dummy text</h1>
    <p class="mt-6 pe-8 md:text-xl md:mr-96">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    {{-- Icon --}}
    <div class="z-10 relative h-60 mt-6 pe-8 md:h-96">
        {{-- HTML --}}
        <div class="w-14 h-14 bg-gray-500 rounded-full text-white flex justify-center items-center absolute p-1 md:w-24 md:h-24">
        
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
            <path d="M 9 7 L 12 41 L 26 45 L 40 41 C 41 29.667 42 18.333 43 7 L 9 7 z M 11.183594 9 L 40.816406 9 L 38.128906 39.455078 L 26 42.919922 L 13.871094 39.455078 L 11.183594 9 z M 18.550781 15 L 17.589844 27 L 30.580078 27 L 30.169922 32 L 26 32.619141 L 21.880859 32 L 21.699219 30 L 17.839844 30 L 18.230469 35 L 25.990234 37 L 33.759766 35 L 34.75 23 L 22.089844 23 L 22.410156 19 L 30.769531 19 L 31 21 L 34.699219 21 L 34 15 L 18.550781 15 z"></path>
            </svg>
        </div>
        {{-- CSS --}}
        @if($agent->isMobile())
        <div style="top:55px;left:40px" class="w-14 h-14 bg-gray-500 rounded-full text-white flex justify-center items-center absolute p-1">
        @else
        <div style="top:110px;left:80px" class="w-24 h-24 bg-gray-500 rounded-full text-white flex justify-center items-center absolute p-1">
        @endif
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                <path fill-rule="evenodd" d="M 39 40 L 25 44 L 11 40 L 8 6 L 42 6 C 41 17.332031 40 28.667969 39 40 Z M 39.816406 8 L 10.183594 8 L 12.871094 38.453125 L 25 41.921875 L 37.128906 38.453125 Z M 16.800781 28 L 20.800781 28 L 20.898438 30.5 L 25 31.898438 L 29.101563 30.5 L 29.398438 26 L 20.601563 26 L 20.398438 22 L 29.601563 22 L 29.898438 18 L 16.101563 18 L 15.800781 14 L 34.101563 14 L 33.601563 22 L 32.898438 33.5 L 25 36.101563 L 17.101563 33.5 Z"></path>
                </svg>
        </div>
        {{-- JS --}}
        @if($agent->isMobile())
        <div style="top:40px;left:110px" class="w-14 h-14 bg-gray-500 rounded-full text-white flex justify-center items-center absolute p-1">
        @else
        <div style="top:80px;left:220px" class="w-24 h-24 bg-gray-500 rounded-full text-white flex justify-center items-center absolute p-1">
        @endif
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                <path d="M 6.667969 4 C 5.207031 4 4 5.207031 4 6.667969 L 4 43.332031 C 4 44.792969 5.207031 46 6.667969 46 L 43.332031 46 C 44.792969 46 46 44.796875 46 43.332031 L 46 6.667969 C 46 5.207031 44.796875 4 43.332031 4 Z M 6.667969 6 L 43.332031 6 C 43.703125 6 44 6.296875 44 6.667969 L 44 43.332031 C 44 43.703125 43.703125 44 43.332031 44 L 6.667969 44 C 6.296875 44 6 43.703125 6 43.332031 L 6 6.667969 C 6 6.296875 6.296875 6 6.667969 6 Z M 23 23 L 23 35.574219 C 23 37.503906 22.269531 38 21 38 C 19.671875 38 18.75 37.171875 18.140625 36.097656 L 15 38 C 15.910156 39.925781 18.140625 42 21.234375 42 C 24.65625 42 27 40.179688 27 36.183594 L 27 23 Z M 35.453125 23 C 32.046875 23 29.863281 25.179688 29.863281 28.042969 C 29.863281 31.148438 31.695313 32.617188 34.449219 33.789063 L 35.402344 34.199219 C 37.140625 34.960938 38 35.425781 38 36.734375 C 38 37.824219 37.171875 38.613281 35.589844 38.613281 C 33.707031 38.613281 32.816406 37.335938 32 36 L 29 38 C 30.121094 40.214844 32.132813 42 35.675781 42 C 39.300781 42 42 40.117188 42 36.683594 C 42 33.496094 40.171875 32.078125 36.925781 30.6875 L 35.972656 30.28125 C 34.335938 29.570313 33.625 29.109375 33.625 27.964844 C 33.625 27.039063 34.335938 26.328125 35.453125 26.328125 C 36.550781 26.328125 37.253906 26.792969 37.90625 27.964844 L 40.878906 26.058594 C 39.625 23.84375 37.878906 23 35.453125 23 Z"></path>
                </svg>
        </div>
        {{-- python --}}
        @if($agent->isMobile())
        <div style="top:90px;left:150px" class="w-14 h-14 bg-gray-500 rounded-full text-white flex justify-center items-center absolute p-1">
        @else
        <div style="top:180px;left:300px" class="w-24 h-24 bg-gray-500 rounded-full text-white flex justify-center items-center absolute p-1">
        @endif
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
            <path d="M 25 2 C 20.941406 2 18.1875 2.96875 16.4375 4.375 C 14.6875 5.78125 14 7.589844 14 9.09375 L 14 14 L 24 14 L 24 15 L 9.09375 15 C 7.265625 15 5.410156 15.792969 4.09375 17.46875 C 2.777344 19.144531 2 21.644531 2 25 C 2 28.355469 2.777344 30.855469 4.09375 32.53125 C 5.410156 34.207031 7.265625 35 9.09375 35 L 14 35 L 14 40.90625 C 14 42.410156 14.6875 44.21875 16.4375 45.625 C 18.1875 47.03125 20.941406 48 25 48 C 29.058594 48 31.8125 47.03125 33.5625 45.625 C 35.3125 44.21875 36 42.410156 36 40.90625 L 36 36 L 26 36 L 26 35 L 40.90625 35 C 42.734375 35 44.589844 34.207031 45.90625 32.53125 C 47.222656 30.855469 48 28.355469 48 25 C 48 21.644531 47.222656 19.144531 45.90625 17.46875 C 44.589844 15.792969 42.734375 15 40.90625 15 L 36 15 L 36 9.09375 C 36 7.550781 35.316406 5.738281 33.5625 4.34375 C 31.808594 2.949219 29.054688 2 25 2 Z M 25 4 C 28.746094 4 31.015625 4.875 32.3125 5.90625 C 33.609375 6.9375 34 8.136719 34 9.09375 L 34 21 C 34 22.65625 32.65625 24 31 24 L 19 24 C 16.941406 24 15.167969 25.269531 14.40625 27.0625 C 14.277344 27.359375 14.160156 27.675781 14.09375 28 C 14.027344 28.324219 14 28.65625 14 29 L 14 33 L 9.09375 33 C 7.824219 33 6.648438 32.503906 5.6875 31.28125 C 4.726563 30.058594 4 28.042969 4 25 C 4 21.957031 4.726563 19.941406 5.6875 18.71875 C 6.648438 17.496094 7.824219 17 9.09375 17 L 26 17 L 26 12 L 16 12 L 16 9.09375 C 16 8.199219 16.386719 6.980469 17.6875 5.9375 C 18.988281 4.894531 21.257813 4 25 4 Z M 20 7 C 18.898438 7 18 7.898438 18 9 C 18 10.101563 18.898438 11 20 11 C 21.101563 11 22 10.101563 22 9 C 22 7.898438 21.101563 7 20 7 Z M 36 17 L 40.90625 17 C 42.175781 17 43.351563 17.496094 44.3125 18.71875 C 45.273438 19.941406 46 21.957031 46 25 C 46 28.042969 45.273438 30.058594 44.3125 31.28125 C 43.351563 32.503906 42.175781 33 40.90625 33 L 24 33 L 24 38 L 34 38 L 34 40.90625 C 34 41.800781 33.613281 43.019531 32.3125 44.0625 C 31.011719 45.105469 28.742188 46 25 46 C 21.257813 46 18.988281 45.105469 17.6875 44.0625 C 16.386719 43.019531 16 41.800781 16 40.90625 L 16 29 C 16 28.792969 16.023438 28.601563 16.0625 28.40625 C 16.34375 27.039063 17.550781 26 19 26 L 31 26 C 33.746094 26 36 23.746094 36 21 Z M 30 39 C 28.898438 39 28 39.898438 28 41 C 28 42.101563 28.898438 43 30 43 C 31.101563 43 32 42.101563 32 41 C 32 39.898438 31.101563 39 30 39 Z"></path>
            </svg>
        </div>
            {{-- React --}}
        @if($agent->isMobile())
        <div style="top:120px;right:70px" class="w-14 h-14 bg-gray-500 rounded-full text-white flex justify-center items-center absolute p-1">
        @else
        <div style="top:240px;left:450px" class="w-24 h-24 bg-gray-500 rounded-full text-white flex justify-center items-center absolute p-1">
        @endif
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 80 80">
                <path d="M 54.410156 9 C 53.860156 8.97 53.389141 9.3992188 53.369141 9.9492188 C 53.339141 10.499219 53.770313 10.97 54.320312 11 L 54.369141 11 C 54.899141 11 55.339375 10.579063 55.359375 10.039062 C 55.389375 9.4890625 54.960156 9.02 54.410156 9 z M 26.880859 9.0996094 C 26.330859 9.0396094 25.829531 9.4304687 25.769531 9.9804688 C 25.699531 10.530469 26.100391 11.019844 26.650391 11.089844 L 26.759766 11.089844 C 27.259766 11.089844 27.69 10.720937 27.75 10.210938 C 27.82 9.6609375 27.420859 9.1596094 26.880859 9.0996094 z M 50.494141 9.7421875 C 50.363516 9.7378125 50.229609 9.7605469 50.099609 9.8105469 C 49.589609 10.010547 49.329297 10.589375 49.529297 11.109375 C 49.689297 11.499375 50.070703 11.75 50.470703 11.75 C 50.590703 11.75 50.710078 11.729688 50.830078 11.679688 C 51.340078 11.479687 51.600391 10.900625 51.400391 10.390625 C 51.250391 10.000625 50.886016 9.7553125 50.494141 9.7421875 z M 22.753906 9.8574219 C 22.625156 9.8783594 22.498359 9.925 22.380859 10 C 21.910859 10.29 21.770312 10.910859 22.070312 11.380859 C 22.250312 11.680859 22.580156 11.849609 22.910156 11.849609 C 23.090156 11.849609 23.279453 11.799453 23.439453 11.689453 C 23.909453 11.399453 24.049766 10.780547 23.759766 10.310547 C 23.542266 9.9655469 23.140156 9.7946094 22.753906 9.8574219 z M 30.605469 10.273438 C 30.217344 10.257031 29.840156 10.472344 29.660156 10.839844 C 29.420156 11.339844 29.640625 11.939687 30.140625 12.179688 C 30.270625 12.239688 30.420547 12.269531 30.560547 12.269531 C 30.940547 12.269531 31.300703 12.059219 31.470703 11.699219 C 31.700703 11.199219 31.490234 10.609141 30.990234 10.369141 C 30.865234 10.309141 30.734844 10.278906 30.605469 10.273438 z M 57.955078 10.542969 C 57.700078 10.540469 57.445 10.635078 57.25 10.830078 C 56.85 11.220078 56.850234 11.850234 57.240234 12.240234 C 57.430234 12.440234 57.689219 12.539062 57.949219 12.539062 C 58.199219 12.539062 58.460391 12.45 58.650391 12.25 C 59.040391 11.87 59.050156 11.229844 58.660156 10.839844 C 58.465156 10.644844 58.210078 10.545469 57.955078 10.542969 z M 46.753906 11.605469 C 46.625 11.627344 46.498359 11.675 46.380859 11.75 C 45.920859 12.05 45.780078 12.670625 46.080078 13.140625 C 46.270078 13.430625 46.599688 13.589844 46.929688 13.589844 C 47.109688 13.589844 47.300703 13.539687 47.470703 13.429688 C 47.930703 13.139688 48.059531 12.520781 47.769531 12.050781 C 47.544531 11.705781 47.140625 11.539844 46.753906 11.605469 z M 34.015625 12.306641 A 1.0001 1.0001 0 0 0 33.419922 14.130859 C 33.419922 14.130859 33.421875 14.130859 33.421875 14.130859 C 33.421875 14.130859 33.423828 14.132812 33.423828 14.132812 C 35.067777 15.289459 36.792095 16.786261 38.537109 18.517578 C 36.525408 20.661085 34.523735 23.118301 32.582031 25.830078 C 28.746866 26.168525 25.175484 26.77535 21.947266 27.587891 C 21.33635 25.186239 20.924986 22.929714 20.779297 20.927734 A 1.0001 1.0001 0 0 0 19.792969 19.986328 A 1.0001 1.0001 0 0 0 18.783203 21.072266 C 18.939669 23.222341 19.370101 25.598162 20.005859 28.103516 C 18.033141 28.679991 16.211543 29.336875 14.587891 30.072266 A 1.0001 1.0001 0 0 0 14.341797 30.224609 C 14.28109 30.240397 14.218866 30.241351 14.160156 30.269531 C 13.660156 30.499531 13.449687 31.099609 13.679688 31.599609 C 13.849687 31.959609 14.209844 32.169922 14.589844 32.169922 C 14.729844 32.169922 14.879766 32.140078 15.009766 32.080078 C 15.064804 32.05366 15.102378 32.008923 15.150391 31.974609 A 1.0001 1.0001 0 0 0 15.412109 31.894531 C 16.923854 31.209827 18.641354 30.591238 20.517578 30.042969 C 21.443671 33.203906 22.714521 36.56143 24.314453 40.005859 C 22.905883 43.040095 21.738224 46.011882 20.849609 48.835938 C 18.847283 48.2655 17.011609 47.616033 15.414062 46.892578 C 15.414062 46.892578 15.412109 46.892578 15.412109 46.892578 A 1.0001 1.0001 0 0 0 15.410156 46.890625 C 15.408211 46.88973 15.406245 46.889553 15.404297 46.888672 A 1.0001 1.0001 0 0 0 15.027344 46.798828 A 1.0001 1.0001 0 0 0 14.263672 48.484375 C 14.263672 48.484375 14.263672 48.486328 14.263672 48.486328 A 1.0001 1.0001 0 0 0 14.570312 48.707031 C 14.577752 48.710605 14.582276 48.71729 14.589844 48.720703 C 14.606813 48.728535 14.62529 48.729815 14.642578 48.736328 C 16.327976 49.496181 18.229337 50.170781 20.287109 50.759766 C 20.000683 51.790989 19.739233 52.807577 19.529297 53.789062 A 1.0001 1.0001 0 1 0 21.484375 54.208984 C 21.686783 53.262697 21.941751 52.277073 22.220703 51.275391 C 25.108337 51.986825 28.280266 52.518708 31.652344 52.857422 C 33.880638 56.100531 36.208658 58.992311 38.544922 61.480469 C 37.538945 62.479911 36.539442 63.416142 35.558594 64.230469 A 1.0001 1.0001 0 1 0 36.835938 65.769531 C 37.860156 64.919199 38.897105 63.95149 39.935547 62.921875 C 41.40782 64.384203 42.874444 65.68416 44.3125 66.78125 C 44.319527 66.786984 44.322857 66.795201 44.330078 66.800781 L 44.330078 66.794922 A 1.0001 1.0001 0 1 0 45.542969 65.205078 C 44.174686 64.162491 42.761622 62.907795 41.333984 61.486328 C 43.670927 59.000601 46.001737 56.111465 48.232422 52.869141 C 51.619575 52.533538 54.797999 51.994041 57.699219 51.283203 C 58.175831 52.990188 58.547183 54.625951 58.800781 56.162109 A 1.0005251 1.0005251 0 0 0 60.775391 55.837891 C 60.510431 54.232917 60.128986 52.538363 59.640625 50.78125 C 61.33811 50.298333 62.933265 49.76006 64.382812 49.160156 A 1.0001 1.0001 0 1 0 63.617188 47.3125 C 62.237889 47.883331 60.703406 48.400043 59.058594 48.865234 C 58.165314 46.024272 57.003568 43.043464 55.583984 39.990234 C 57.187235 36.541532 58.453699 33.188416 59.382812 30.023438 C 60.525776 30.355592 61.630652 30.704587 62.644531 31.089844 A 1.0001 1.0001 0 1 0 63.367188 29.224609 C 63.364406 29.22349 63.362172 29.2218 63.359375 29.220703 C 63.358125 29.220223 63.356719 29.221178 63.355469 29.220703 C 62.280758 28.812331 61.118725 28.444298 59.919922 28.095703 C 60.360331 26.370074 60.704158 24.706303 60.919922 23.140625 C 60.919922 23.140625 60.919922 23.138672 60.919922 23.138672 C 60.919922 23.138672 60.919922 23.136719 60.919922 23.136719 A 1.0001 1.0001 0 0 0 59.953125 21.986328 A 1.0001 1.0001 0 0 0 58.941406 22.855469 C 58.941207 22.856955 58.939646 22.857887 58.939453 22.859375 C 58.939453 22.859375 58.939453 22.861328 58.939453 22.861328 A 1.0001 1.0001 0 0 0 58.939453 22.863281 C 58.736717 24.335512 58.411012 25.917761 57.990234 27.566406 C 54.754871 26.75651 51.158065 26.165374 47.316406 25.830078 C 45.368791 23.113403 43.361375 20.642239 41.34375 18.498047 C 42.789432 17.059152 44.21925 15.78983 45.603516 14.740234 A 1.0001 1.0001 0 0 0 45.017578 12.935547 A 1.0001 1.0001 0 0 0 44.396484 13.146484 C 42.930835 14.257789 41.43351 15.584046 39.931641 17.076172 C 38.124016 15.287191 36.324372 13.726089 34.576172 12.496094 A 1.0001 1.0001 0 0 0 34.015625 12.306641 z M 20.480469 12.957031 C 20.092813 12.971563 19.730078 13.209609 19.580078 13.599609 C 19.380078 14.109609 19.640156 14.690625 20.160156 14.890625 C 20.280156 14.940625 20.399766 14.960937 20.509766 14.960938 C 20.919766 14.960938 21.299219 14.710547 21.449219 14.310547 C 21.649219 13.800547 21.389141 13.219531 20.869141 13.019531 C 20.741641 12.972031 20.609687 12.952187 20.480469 12.957031 z M 59.923828 14.058594 C 59.796484 14.039062 59.661797 14.045078 59.529297 14.080078 C 58.989297 14.220078 58.670781 14.759063 58.800781 15.289062 C 58.920781 15.749063 59.329531 16.050781 59.769531 16.050781 C 59.849531 16.050781 59.939531 16.039531 60.019531 16.019531 C 60.549531 15.879531 60.880234 15.340781 60.740234 14.800781 C 60.635234 14.403281 60.305859 14.117188 59.923828 14.058594 z M 19.810547 16.869141 C 19.260547 16.839141 18.78 17.250547 18.75 17.810547 C 18.71 18.360547 19.129453 18.829375 19.689453 18.859375 C 19.709453 18.869375 19.73 18.869141 19.75 18.869141 C 20.27 18.869141 20.71 18.459688 20.75 17.929688 C 20.78 17.379687 20.360547 16.899141 19.810547 16.869141 z M 60.210938 18.009766 C 59.660937 18.009766 59.220703 18.459531 59.220703 19.019531 C 59.220703 19.569531 59.670703 20.009766 60.220703 20.009766 C 60.770703 20.009766 61.220703 19.559766 61.220703 19.009766 C 61.220703 18.459766 60.770938 18.009766 60.210938 18.009766 z M 39.943359 19.945312 C 41.533539 21.641888 43.127281 23.561414 44.695312 25.648438 C 43.156857 25.563894 41.597425 25.505859 40 25.505859 C 38.36077 25.505859 36.762314 25.567567 35.185547 25.65625 C 36.755086 23.561084 38.350548 21.649197 39.943359 19.945312 z M 40 27.505859 C 42.133731 27.505859 44.215894 27.590745 46.234375 27.744141 C 47.62469 29.727478 48.980116 31.846857 50.271484 34.083984 C 51.41194 36.05987 52.449595 38.033977 53.380859 39.980469 C 52.442461 41.944488 51.403314 43.934122 50.251953 45.927734 A 1.0001 1.0001 0 0 0 50.238281 45.953125 A 1.0001 1.0001 0 0 0 50.222656 45.980469 C 49.215348 47.723069 48.166246 49.383271 47.095703 50.974609 C 44.810622 51.173966 42.439397 51.283203 40 51.283203 C 37.526992 51.283203 35.118965 51.173788 32.804688 50.96875 C 31.730907 49.371625 30.675628 47.713914 29.666016 45.964844 C 28.507633 43.957725 27.477227 41.957427 26.535156 39.980469 C 27.473281 38.018381 28.507543 36.031258 29.658203 34.039062 A 1.0001 1.0001 0 0 0 29.664062 34.029297 A 1.0001 1.0001 0 0 0 29.673828 34.013672 C 30.947529 31.808524 32.284739 29.722577 33.654297 27.763672 C 35.710207 27.603894 37.824098 27.505859 40 27.505859 z M 48.806641 27.990234 C 51.905304 28.330427 54.81151 28.840228 57.449219 29.496094 C 56.68678 32.082229 55.683249 34.817136 54.443359 37.640625 C 53.683432 36.129131 52.883696 34.610208 52.003906 33.085938 C 50.975543 31.304432 49.899604 29.61987 48.806641 27.990234 z M 31.072266 28.011719 C 30.001344 29.611779 28.949821 31.267823 27.941406 33.013672 C 27.936806 33.021472 27.932004 33.029519 27.927734 33.037109 C 27.926634 33.039009 27.926902 33.041069 27.925781 33.042969 C 27.039725 34.577291 26.227498 36.107321 25.462891 37.628906 C 24.235748 34.824888 23.219169 32.093622 22.462891 29.525391 C 25.088999 28.86773 27.984822 28.356739 31.072266 28.011719 z M 66.738281 30.794922 C 66.347813 30.758828 65.954766 30.952813 65.759766 31.320312 C 65.499766 31.810313 65.689688 32.409922 66.179688 32.669922 C 66.329687 32.749922 66.490391 32.789062 66.650391 32.789062 C 67.000391 32.789062 67.349297 32.599766 67.529297 32.259766 C 67.789297 31.779766 67.599141 31.170156 67.119141 30.910156 C 66.996641 30.845156 66.868437 30.806953 66.738281 30.794922 z M 11.292969 32.171875 C 11.040469 32.128125 10.769063 32.179844 10.539062 32.339844 C 10.089062 32.659844 9.9807812 33.280469 10.300781 33.730469 C 10.500781 34.010469 10.809141 34.160156 11.119141 34.160156 C 11.319141 34.160156 11.519453 34.100703 11.689453 33.970703 L 11.699219 33.980469 C 12.149219 33.660469 12.259453 33.030078 11.939453 32.580078 C 11.779453 32.355078 11.545469 32.215625 11.292969 32.171875 z M 69.892578 33.001953 C 69.637578 33.021953 69.390938 33.139609 69.210938 33.349609 C 68.850937 33.769609 68.910078 34.399766 69.330078 34.759766 C 69.520078 34.919766 69.750703 35 69.970703 35 C 70.260703 35 70.540234 34.880625 70.740234 34.640625 C 71.090234 34.220625 71.039141 33.590234 70.619141 33.240234 C 70.409141 33.060234 70.147578 32.981953 69.892578 33.001953 z M 40 34.003906 C 36.686 34.003906 34 36.689906 34 40.003906 C 34 43.317906 36.686 46.003906 40 46.003906 C 43.314 46.003906 46 43.317906 46 40.003906 C 46 36.689906 43.314 34.003906 40 34.003906 z M 8.0703125 34.908203 C 7.8165625 34.948203 7.5799219 35.085547 7.4199219 35.310547 C 7.0999219 35.760547 7.2003906 36.390937 7.6503906 36.710938 C 7.8203906 36.830938 8.0304687 36.900391 8.2304688 36.900391 C 8.5404687 36.900391 8.8490625 36.750469 9.0390625 36.480469 C 9.3690625 36.030469 9.2603125 35.409844 8.8203125 35.089844 C 8.5953125 34.924844 8.3240625 34.868203 8.0703125 34.908203 z M 72.435547 36.083984 C 72.306172 36.089297 72.175781 36.119687 72.050781 36.179688 C 71.550781 36.409687 71.330547 37 71.560547 37.5 C 71.730547 37.87 72.090703 38.080078 72.470703 38.080078 C 72.610703 38.080078 72.750625 38.050234 72.890625 37.990234 C 73.390625 37.760234 73.610859 37.160156 73.380859 36.660156 C 73.200859 36.285156 72.823672 36.068047 72.435547 36.083984 z M 6.9609375 38.619141 C 6.4129261 38.649032 5.983184 39.106812 6.0097656 39.664062 C 6.0317688 40.20215 6.4710894 40.619141 7.0097656 40.619141 L 7.0507812 40.619141 C 7.6007813 40.599141 8.03 40.130078 8 39.580078 C 7.98 39.020078 7.5109375 38.599141 6.9609375 38.619141 z M 72.658203 39.976562 C 72.271016 40.013594 71.920781 40.279922 71.800781 40.669922 L 71.800781 40.679688 C 71.640781 41.199688 71.930937 41.759687 72.460938 41.929688 C 72.550937 41.959688 72.66 41.970703 72.75 41.970703 C 73.18 41.970703 73.570937 41.699531 73.710938 41.269531 C 73.870937 40.749531 73.580781 40.189531 73.050781 40.019531 C 72.920781 39.977031 72.787266 39.964219 72.658203 39.976562 z M 8.6152344 42.257812 C 8.3602344 42.230313 8.0958594 42.300703 7.8808594 42.470703 C 7.4508594 42.820703 7.3804688 43.450859 7.7304688 43.880859 C 7.9204688 44.120859 8.2097656 44.25 8.5097656 44.25 C 8.7297656 44.25 8.9508594 44.179297 9.1308594 44.029297 C 9.5608594 43.689297 9.6290625 43.060859 9.2890625 42.630859 C 9.1140625 42.410859 8.8702344 42.285313 8.6152344 42.257812 z M 25.455078 42.324219 C 26.227157 43.86319 27.03735 45.409977 27.933594 46.962891 A 1.0001 1.0001 0 0 0 27.933594 46.964844 C 28.672926 48.245676 29.436294 49.477916 30.210938 50.681641 C 27.571387 50.355404 25.078404 49.908583 22.787109 49.349609 C 23.499918 47.097875 24.392942 44.741072 25.455078 42.324219 z M 54.447266 42.324219 C 55.513063 44.748161 56.400203 47.107591 57.115234 49.365234 C 54.809413 49.923898 52.319475 50.380143 49.664062 50.703125 C 50.441486 49.497174 51.209187 48.26594 51.951172 46.982422 C 51.976022 46.942662 51.992809 46.912812 52.011719 46.875 C 52.890115 45.351708 53.688449 43.834619 54.447266 42.324219 z M 70.582031 43.265625 C 70.327031 43.259375 70.069141 43.349063 69.869141 43.539062 C 69.469141 43.919062 69.460078 44.560938 69.830078 44.960938 C 70.030078 45.160938 70.290547 45.259766 70.560547 45.259766 C 70.810547 45.259766 71.06 45.170234 71.25 44.990234 C 71.65 44.610234 71.659297 43.970312 71.279297 43.570312 C 71.089297 43.375312 70.837031 43.271875 70.582031 43.265625 z M 11.298828 44.90625 C 11.047578 44.955 10.815156 45.100078 10.660156 45.330078 C 10.350156 45.790078 10.479453 46.410703 10.939453 46.720703 C 11.109453 46.830703 11.300234 46.890625 11.490234 46.890625 C 11.820234 46.890625 12.130313 46.729453 12.320312 46.439453 C 12.630313 45.979453 12.510781 45.360547 12.050781 45.060547 C 11.820781 44.905547 11.550078 44.8575 11.298828 44.90625 z M 67.208984 45.623047 C 67.079141 45.638984 66.950078 45.68 66.830078 45.75 C 66.360078 46.02 66.190703 46.639375 66.470703 47.109375 C 66.650703 47.439375 66.990078 47.609375 67.330078 47.609375 C 67.500078 47.609375 67.680078 47.570469 67.830078 47.480469 C 68.310078 47.200469 68.479219 46.589141 68.199219 46.119141 C 67.996719 45.759141 67.598516 45.575234 67.208984 45.623047 z M 34.265625 53.072266 C 36.134453 53.198435 38.039729 53.283203 40 53.283203 C 41.920649 53.283203 43.789821 53.203441 45.623047 53.082031 C 43.761093 55.670169 41.849629 58.005025 39.943359 60.041016 C 38.038362 58.003247 36.125999 55.660556 34.265625 53.072266 z M 19.970703 56.949219 C 19.420703 56.889219 18.919375 57.289844 18.859375 57.839844 C 18.809375 58.389844 19.2 58.879453 19.75 58.939453 C 19.79 58.939453 19.819375 58.949219 19.859375 58.949219 C 20.359375 58.949219 20.799609 58.570781 20.849609 58.050781 C 20.909609 57.500781 20.520703 57.009219 19.970703 56.949219 z M 60.119141 58.429688 C 59.569141 58.459688 59.149687 58.930469 59.179688 59.480469 C 59.209688 60.010469 59.649687 60.419922 60.179688 60.419922 L 60.240234 60.419922 C 60.790234 60.389922 61.209688 59.919375 61.179688 59.359375 C 61.149687 58.809375 60.669141 58.389688 60.119141 58.429688 z M 19.669922 60.939453 C 19.109922 60.969453 18.690703 61.440234 18.720703 61.990234 C 18.740703 62.520234 19.190703 62.939453 19.720703 62.939453 L 19.769531 62.939453 C 20.319531 62.909453 20.740938 62.440625 20.710938 61.890625 C 20.690938 61.340625 20.219922 60.909453 19.669922 60.939453 z M 60.210938 62.419922 C 59.660937 62.349922 59.150078 62.739297 59.080078 63.279297 C 59.010078 63.829297 59.389453 64.330156 59.939453 64.410156 C 59.979453 64.410156 60.030313 64.419922 60.070312 64.419922 C 60.560313 64.419922 61.000547 64.050781 61.060547 63.550781 C 61.140547 63.000781 60.750937 62.499922 60.210938 62.419922 z M 20.482422 64.861328 C 20.353047 64.854453 20.219844 64.872422 20.089844 64.919922 C 19.569844 65.099922 19.300469 65.679219 19.480469 66.199219 C 19.630469 66.609219 20.009922 66.859375 20.419922 66.859375 C 20.529922 66.859375 20.649766 66.840781 20.759766 66.800781 C 21.279766 66.620781 21.549375 66.039297 21.359375 65.529297 C 21.224375 65.131797 20.870547 64.881953 20.482422 64.861328 z M 33.982422 65.839844 C 33.729922 65.794844 33.460469 65.845 33.230469 66 C 32.780469 66.32 32.670469 66.940625 32.980469 67.390625 C 33.180469 67.670625 33.490781 67.820312 33.800781 67.820312 C 34.000781 67.820312 34.200859 67.770391 34.380859 67.650391 C 34.830859 67.330391 34.940859 66.71 34.630859 66.25 C 34.470859 66.025 34.234922 65.884844 33.982422 65.839844 z M 59.013672 66.220703 C 58.626484 66.170078 58.229531 66.350938 58.019531 66.710938 C 57.749531 67.190938 57.910625 67.800078 58.390625 68.080078 C 58.550625 68.170078 58.720625 68.210938 58.890625 68.210938 C 59.240625 68.210938 59.569766 68.030937 59.759766 67.710938 C 60.029766 67.230937 59.870625 66.619609 59.390625 66.349609 C 59.270625 66.279609 59.142734 66.237578 59.013672 66.220703 z M 48.373047 67.208984 C 47.986328 67.168203 47.593125 67.360703 47.390625 67.720703 C 47.130625 68.200703 47.299297 68.810078 47.779297 69.080078 C 47.939297 69.160078 48.099531 69.199219 48.269531 69.199219 C 48.619531 69.199219 48.960625 69.019453 49.140625 68.689453 C 49.410625 68.209453 49.24 67.600078 48.75 67.330078 C 48.63 67.262578 48.501953 67.222578 48.373047 67.208984 z M 30.316406 67.830078 C 30.18625 67.833984 30.054688 67.862422 29.929688 67.919922 C 29.429688 68.149922 29.209453 68.75 29.439453 69.25 C 29.609453 69.62 29.969609 69.830078 30.349609 69.830078 C 30.489609 69.830078 30.629531 69.800234 30.769531 69.740234 C 31.269531 69.510234 31.489766 68.910156 31.259766 68.410156 C 31.087266 68.035156 30.706875 67.818359 30.316406 67.830078 z M 22.533203 68.074219 C 22.280703 68.121719 22.045625 68.265234 21.890625 68.490234 C 21.580625 68.940234 21.690391 69.570859 22.150391 69.880859 C 22.320391 70.000859 22.520937 70.060547 22.710938 70.060547 C 23.030938 70.060547 23.339063 69.909141 23.539062 69.619141 C 23.849062 69.169141 23.729297 68.550469 23.279297 68.230469 C 23.054297 68.075469 22.785703 68.026719 22.533203 68.074219 z M 55.986328 68.730469 C 55.856641 68.720313 55.722344 68.734297 55.589844 68.779297 C 55.069844 68.949297 54.779219 69.509062 54.949219 70.039062 C 55.089219 70.459062 55.480391 70.730469 55.900391 70.730469 C 56.000391 70.730469 56.110937 70.709688 56.210938 70.679688 C 56.740938 70.509687 57.019609 69.939922 56.849609 69.419922 C 56.722109 69.022422 56.375391 68.760937 55.986328 68.730469 z M 51.800781 68.734375 C 51.415 68.797187 51.087734 69.082969 50.990234 69.480469 C 50.850234 70.020469 51.180937 70.559219 51.710938 70.699219 L 51.710938 70.689453 C 51.790937 70.719453 51.880938 70.730469 51.960938 70.730469 C 52.400938 70.730469 52.809688 70.420703 52.929688 69.970703 C 53.059688 69.430703 52.739219 68.89 52.199219 68.75 C 52.064219 68.7175 51.929375 68.713437 51.800781 68.734375 z M 26.439453 68.949219 C 25.889453 68.999219 25.479297 69.479297 25.529297 70.029297 C 25.579297 70.549297 26.019297 70.939453 26.529297 70.939453 L 26.619141 70.939453 C 27.169141 70.889453 27.579531 70.399609 27.519531 69.849609 C 27.479531 69.299609 26.989453 68.899219 26.439453 68.949219 z"></path>
                </svg>
        </div>
    </div>


    {{-- Absolute div --}}
    @if($agent->isMobile())
    <div style="width:300px;height:300px;left:-80px; bottom:-50px;" class="rounded-full opacity-20 bg-gray-500 absolute"></div>
    @else
    <div style="width:500px;height:500px;left:-80px; bottom:-50px;" class="rounded-full opacity-20 bg-gray-500 absolute top-24"></div>
    @endif
    
    <div style="left:-10px;top:-70px" class="text-8xl opacity-5 absolute uppercase font-black text-white">Skills Possessed</div>
    <div style="box-shadow: 0px -5px 10px rgb(17 24 39);bottom:-50px;left:-32px" class="absolute bg-gray-900 w-screen h-20 bottom-10 left-0"></div>
</div>