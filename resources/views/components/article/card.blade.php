@props(['article'])
        {{-- <div class="bg-neutral-primary-soft block sm:25 md:40 p-6 border border-default rounded-base shadow-xs">
            <a href="#">
                <img class="rounded-base h-1/2 w-full" src="{{ Storage::url($article->image) }}" alt="width-100 />
            </a>
            <a href="#">
                <h5 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading">{{$article->title}}</h5>
            </a>
            <p class="mb-6 text-body">{{$article->content}}</p>
            <a href="#" class="inline-flex items-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                Read more
                <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
            </a>
        </div>
 --}}

        <div class="w-full h-48 flex flex-row items-center rounded-xl p-4 gap-6 bg-zinc-300">

    <div class="w-1/3 h-full rounded-xl bg-neutral-500 flex items-center justify-center shrink-0">
                <img class="rounded-xl h-full w-full" src="{{ Storage::url($article->image) }}" alt="width-100" />
    </div>


    <div class="w-2/3 h-full flex flex-col justify-between py-1">
        <div>
            <h1 class="text-xl font-semibold">INTERNET WIFI PAASANH</h1>
            <p class="text-xs text-gray-700 mt-2 line-clamp-3">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad ipsa deleniti porro quasi nulla eum dicta a. Magnam natus tenetur facilis eaque, nulla illo, nostrum laborum nisi cumque nesciunt molestiae.
            </p>
        </div>

        <button class="w-fit px-5 py-1.5 bg-blue-600 rounded-3xl text-sm font-medium text-zinc-200 hover:bg-blue-700">
            READ MORE
        </button>

        <button class="w-fit px-5 py-1.5 bg-red-600 rounded-3xl text-sm font-medium text-zinc-200 hover:bg-red-200">
            READ MORE
        </button>


    </div>
</div>

