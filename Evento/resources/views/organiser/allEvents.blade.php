<body class="relative bg-yellow-50 overflow-hidden max-h-screen">
<script src="https://cdn.tailwindcss.com"></script>

<header class="fixed right-0 top-0 left-60 bg-yellow-50 py-3 px-4 h-16">
    <div class="max-w-4xl mx-auto">
        <div class="flex items-center justify-between">
            <div>
                <button type="button"
                        class="flex items-center focus:outline-none rounded-lg text-gray-600 hover:text-yellow-600 focus:text-yellow-600 font-semibold p-2 border border-transparent hover:border-yellow-300 focus:border-yellow-300 transition">
            <span
                class="inline-flex items-center justify-center w-6 h-6 text-gray-600 text-xs rounded bg-white transition mr-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                   class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
              </svg>
            </span>
                    <span class="text-sm">Archive</span>
                </button>
            </div>
            <div class="text-lg font-bold">Today's Plan</div>
            <div>
                <button type="button"
                        class="flex items-center focus:outline-none rounded-lg text-gray-600 hover:text-yellow-600 focus:text-yellow-600 font-semibold p-2 border border-transparent hover:border-yellow-300 focus:border-yellow-300 transition">
                    <span class="text-sm">This week</span>
                    <span
                        class="inline-flex items-center justify-center w-6 h-6 text-gray-600 text-xs rounded bg-white transition ml-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                   class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg>
            </span>
                </button>
            </div>
        </div>
    </div>
</header>

<aside class="fixed inset-y-0 left-0 bg-white shadow-md max-h-screen w-60">
    <div class="flex flex-col justify-between h-full">
        <div class="flex-grow">
            <div class="px-4 py-6 text-center border-b">
                <h1 class="text-xl font-bold leading-none"><span class="text-yellow-700">Task Manager</span> App</h1>
            </div>
            <div class="p-4">
                <ul class="space-y-1">
                    <li>
                        <a href="javascript:void(0)"
                           class="flex items-center bg-yellow-200 rounded-xl font-bold text-sm text-yellow-900 py-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                 class="text-lg mr-4" viewBox="0 0 16 16">
                                <path
                                    d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            Plan
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                           class="flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                 class="text-lg mr-4" viewBox="0 0 16 16">
                                <path
                                    d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                            </svg>
                            Task list
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                           class="flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                 class="text-lg mr-4" viewBox="0 0 16 16">
                                <path
                                    d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                            </svg>
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                           class="flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="text-lg mr-4" viewBox="0 0 16 16">
                                <path
                                    d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                            Tags
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="p-4">
            <button type="button"
                    class="inline-flex items-center justify-center h-9 px-4 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class=""
                     viewBox="0 0 16 16">
                    <path
                        d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
            </button>
            <span class="font-bold text-sm ml-2">Logout</span>
        </div>
    </div>
</aside>
<main class="ml-60 pt-16 max-h-screen overflow-auto">
    <a
        class="mt-6 block absolute right-4 text-white bg-black hover:bg-gray focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        href="/createEvent">
        Add event
    </a>
    <div class="px-6 py-8">
        <div class="mx-auto">
            <!-- component -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3">
                @foreach($events as $event)
                    <div class="bg-white rounded shadow-lg">
                        <div class="w-full h-64 bg-top bg-cover rounded-t"
                             style="background-image: url(https://www.si.com/.image/t_share/MTY4MTkyMjczODM4OTc0ODQ5/cfp-trophy-deitschjpg.jpg)"></div>
                        <div class="flex flex-col w-full h-44 md:flex-row">
                            <div
                                class="flex flex-row justify-around p-2 font-bold leading-none text-white uppercase bg-black rounded-b md:flex-col md:items-center md:justify-center md:w-24">
                                <div class="md:text-lg">{{ \Carbon\Carbon::parse($event->date)->format('j') }}</div>
                                <div class="md:text-xl">{{ \Carbon\Carbon::parse($event->date)->format('F') }}</div>
                                <div class="md:text-lg">{{ date('g:i A', strtotime($event->time)) }}</div>
                            </div>
                            <div class="p-4 font-normal text-gray-800 md:w-72 flex flex-col justify-around">
                                <div>
                                    <h1 class="mb-2 text-2xl font-bold leading-none tracking-tight text-gray-800">{{$event->title}}</h1>
                                    <p class="leading-normal text-justify text-sm">{{ Str::limit($event->description, 100) }}</p>
                                </div>
                                <div class="flex flex-row items-center mt-2 text-gray-700 text-xs">
                                    <div class="w-1/2 font-bold flex">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                  d="M12 2a8 8 0 0 1 6.6 12.6l-.1.1-.6.7-5.1 6.2a1 1 0 0 1-1.6 0L6 15.3l-.3-.4-.2-.2v-.2A8 8 0 0 1 11.8 2Zm3 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                                  clip-rule="evenodd"/>
                                        </svg>

                                        <div class="mt-2">
                                            {{$event->location}}
                                        </div>
                                    </div>
                                    <div class="w-1/2 flex justify-end">
                                        <svg id="menuIcon" class="w-6 h-6 text-gray-800 dark:text-white cursor-pointer"
                                             aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="3"
                                                  d="M12 6h0m0 6h0m0 6h0"/>
                                        </svg>
                                        <div id="menuOptions" class="hidden ml-2 flex flex-col font-bold">
                                            {{--update event--}}
                                            <a href="/updateEvent/{{$event->id}}" class="">Update</a>
                                            {{--<button id="updateBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>--}}

                                            {{--delete event--}}
                                            <form action="/deleteEvent/{{$event->id}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button>Delete</button>
                                                {{-- <button id="deleteBtn" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>--}}
                                            </form>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
<script>
    document.getElementById('menuIcon').addEventListener('click', function () {
        // Récupérer l'élément du menu des options
        var menuOptions = document.getElementById('menuOptions');

        // Afficher ou masquer le menu des options
        menuOptions.classList.toggle('hidden');
    });

    // Vous pouvez ajouter des gestionnaires d'événements pour les boutons Update et Delete ici
    document.getElementById('updateBtn').addEventListener('click', function () {
        // Ajoutez ici le code pour l'action Update
    });

    document.getElementById('deleteBtn').addEventListener('click', function () {
        // Ajoutez ici le code pour l'action Delete
    });

</script>
</body>


