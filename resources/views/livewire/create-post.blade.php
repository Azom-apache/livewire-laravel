<div>
    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
    <header>
        <!-- Navigation bar -->
        <nav class="relative flex w-full items-center justify-between bg-white py-2 text-neutral-600 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 dark:text-neutral-200 md:flex-wrap md:justify-start"
            data-te-navbar-ref>
            <div class="flex w-full flex-wrap items-center justify-between px-3">
                <div class="flex items-center">
                    <!-- Hamburger menu button -->
                    <button
                        class="border-0 bg-transparent px-2 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white lg:hidden"
                        type="button" data-te-collapse-init data-te-target="#navbarSupportedContentX"
                        aria-controls="navbarSupportedContentX" aria-expanded="false" aria-label="Toggle navigation">
                        <!-- Hamburger menu icon -->
                        <span class="[&>svg]:w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-7 w-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </span>
                    </button>
                </div>

                <!-- Navigation links -->
                <div class="!visible hidden grow basis-[100%] items-center lg:!flex lg:basis-auto"
                    id="navbarSupportedContentX" data-te-collapse-item>
                    <ul class="mr-auto flex flex-col lg:flex-row" data-te-navbar-nav-ref>
                        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                            <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                                href="#!" data-te-nav-link-ref data-te-ripple-init
                                data-te-ripple-color="light">Home</a>
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                            <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                                href="#!" data-te-nav-link-ref data-te-ripple-init
                                data-te-ripple-color="light">Features</a>
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                            <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                                href="#!" data-te-nav-link-ref data-te-ripple-init
                                data-te-ripple-color="light">Pricing</a>
                        </li>
                        <li class="mb-2 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                            <a class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                                href="#!" data-te-nav-link-ref data-te-ripple-init
                                data-te-ripple-color="light">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero section with background image, heading, subheading and button -->
        <div class="relative overflow-hidden bg-cover bg-no-repeat"
            style="
        background-position: 50%;
        background-image: url('https://tecdn.b-cdn.net/img/new/slides/146.webp');
        height: 350px;
      ">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.75)">
                <div class="flex h-full items-center justify-center">
                    <div class="px-6 text-center text-white md:px-12">
                        <h1 class="mb-6 text-5xl font-bold">Heading</h1>
                        <h3 class="mb-8 text-3xl font-bold">Subeading</h3>
                        <button type="button"
                            class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                            data-te-ripple-init data-te-ripple-color="light">
                            Get started
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
    <div
        class="mt-6 relative flex  items-center justify-between bg-white py-2 text-neutral-600 shadow-lg hover:text-neutral-700 focus:text-neutral-700  dark:text-neutral-200 md:flex-wrap md:justify-center">
        <div
            class=" block max-w-sm rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <form wire:submit="save">
                <!--E-mail input-->
                <div class="relative mb-12" data-te-input-wrapper-init>

                    <input type="text"wire:model="title"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-gray-200 px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="exampleFormControlInput2" />


                </div>




                <!--Submit button-->
                <button type="submit"
                    class="inline-block rounded bg-green-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-ripple-init data-te-ripple-color="light">
                    Submit
                </button>
            </form>
        </div>
    </div>

    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->

    <div id="datatable" class="flex flex-col">
        <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-center text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">Title</th>
                                    <th scope="col" class="px-6 py-4">Action</th>

                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr class="border-b border-primary-200 bg-primary-100 text-neutral-800">

                                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $loop->index + 1 }}</td>
                                        <td class="whitespace-nowrap px-6 py-4"> {{ $post->title }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            <button type="submit"
                                                class="inline-block rounded bg-red-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                                data-te-ripple-init data-te-ripple-color="light">
                                                Edit
                                            </button>
                                            {{-- <button
                                                wire:click="delete({{ $post->id }})"wire:confirm="Are you sure you want to delete this post?"
                                                class="inline-block rounded bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                                data-te-ripple-init data-te-ripple-color="light">
                                                Delete
                                            </button> --}}


                                            @if ($confirming === $post->id)
                                                <button wire:click="delete"
                                                    class="bg-red-800 text-white w-32 px-4 py-1 hover:bg-red-600 rounded border">Sure?</button>
                                            @else
                                                <button wire:click="confirmDelete({{ $post->id }})"
                                                    class="bg-gray-600 text-white w-32 px-4 py-1 hover:bg-red-600 rounded border">Delete</button>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{ $posts->links() }}
    </div>

</div>
