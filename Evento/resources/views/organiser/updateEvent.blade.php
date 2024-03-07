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
    <div class="text-xl font-bold text-center">Here you can create your events</div>
    <div class="px-6 py-8">
        <div class="max-w-xl mx-auto">
            <div class="bg-white rounded-3xl pt-4">
                <div class="flex items-center justify-center p-12">
                    <!-- Author: FormBold Team -->
                    <div class="mx-auto w-full max-w-[550px] bg-white">
                        <form action="/updateEvent/{{$event->id}}" method="post">
                            @csrf
                            <div class="-mx-3 flex flex-wrap">
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <label for="title" class="mb-3 block text-base font-medium text-[#07074D]">
                                            Title
                                        </label>
                                        <input type="text" name="title" placeholder="Event title"
                                               value="{{$event['title']}}"
                                               class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <label for="location" class="mb-3 block text-base font-medium text-[#07074D]">
                                            Location
                                        </label>
                                        <select name="location"
                                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                            <option value="" selected>Choose a location</option>
                                            @foreach($data as $item)
                                                <option
                                                    value="{{ $item->ville }}" {{ $event->location == $item->ville ? 'selected' : '' }}>{{ $item->ville }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="-mx-3 flex flex-wrap">
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                            Date
                                        </label>
                                        <input type="date" name="date" id="date" value="{{$event['date']}}"
                                               class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                            Time
                                        </label>
                                        <input type="time" name="time" id="time" value="{{$event['time']}}"
                                               class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                                    </div>
                                </div>
                            </div>

                            <div class="-mx-3 flex flex-wrap">
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <label for="price" class="mb-3 block text-base font-medium text-[#07074D]">
                                            Price
                                        </label>
                                        <input type="number" name="price" placeholder="245.00"
                                               value="{{$event['price']}}"
                                               class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="mb-5">
                                        <label for="nbr_place" class="mb-3 block text-base font-medium text-[#07074D]">
                                            Total tickets
                                        </label>
                                        <input type="number" name="nbr_place" placeholder="Nombre de places"
                                               value="{{$event['nbr_place']}}"
                                               class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5">
                                <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Description
                                </label>
                                <textarea type="text" name="description" placeholder="Event description"
                                          class="text-left text-justify w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                                {{$event['description']}}
                                </textarea>
                            </div>

                            <div class="mb-5">
                                <label class="mb-3 block text-base font-medium text-[#07074D]">
                                    Do you want this reservation to be done manually or automatically?
                                </label>
                                <div class="flex items-center space-x-6">
                                    <div class="flex items-center">
                                        <input type="radio" name="reservation_type" value="manuel"  id="radioButton1"
                                               class="h-5 w-5"/>
                                        <label for="radioButton1" class="pl-3 text-base font-medium text-[#07074D]">
                                            Manually
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" name="reservation_type" value="automatic" id="radioButton2"
                                               class="h-5 w-5"/>
                                        <label for="radioButton2" class="pl-3 text-base font-medium text-[#07074D]">
                                            Automatically
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- component -->
                            <div
                                class="bg-gray-100 h-36 p-8 text-center rounded-lg border-dashed border-2 border-gray-300 hover:border-blue-500 transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-md"
                                id="dropzone">
                                <label for="fileInput" class="cursor-pointer flex flex-col items-center space-y-2">
                                    <svg class="w-16 h-10 text-gray-400" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    <span class="text-gray-600">Drag and drop your files here</span>
                                    <span class="text-gray-500 text-sm">(or click to select)</span>
                                </label>
                                <input type="file" id="fileInput" class="hidden" name="image">
                            </div>
                            <div class="mt-6 text-center" id="fileList"></div>
                            <script>
                                const dropzone = document.getElementById('dropzone');
                                const fileInput = document.getElementById('fileInput');
                                const fileList = document.getElementById('fileList');

                                dropzone.addEventListener('dragover', (e) => {
                                    e.preventDefault();
                                    dropzone.classList.add('border-blue-500', 'border-2');
                                });

                                dropzone.addEventListener('dragleave', () => {
                                    dropzone.classList.remove('border-blue-500', 'border-2');
                                });

                                dropzone.addEventListener('drop', (e) => {
                                    e.preventDefault();
                                    dropzone.classList.remove('border-blue-500', 'border-2');

                                    const files = e.dataTransfer.files;
                                    handleFiles(files);
                                });

                                fileInput.addEventListener('change', (e) => {
                                    const files = e.target.files;
                                    handleFiles(files);
                                });

                                function handleFiles(files) {
                                    fileList.innerHTML = '';

                                    for (const file of files) {
                                        const listItem = document.createElement('div');
                                        listItem.textContent = `${file.name} (${formatBytes(file.size)})`;
                                        fileList.appendChild(listItem);
                                    }
                                }

                                function formatBytes(bytes) {
                                    if (bytes === 0) return '0 Bytes';

                                    const k = 1024;
                                    const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
                                    const i = Math.floor(Math.log(bytes) / Math.log(k));

                                    return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
                                }

                            </script>
                            <div>
                                <button
                                    class="hover:shadow-form rounded-md bg-black py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
