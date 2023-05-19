<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <nav class="flex" aria-label="Breadcrumb">
                <ol role="list" class="flex space-x-4 rounded-md bg-white px-6 shadow">
                    <li class="flex">
                        <div class="flex items-center">
                            <a href="/dashboard" class="text-gray-400 hover:text-gray-500">
                                <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Home</span>
                            </a>
                        </div>
                    </li>
                    <li class="flex">
                        <div class="flex items-center">
                            <svg class="h-full w-6 flex-shrink-0 text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none"
                                fill="currentColor" aria-hidden="true">
                                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                            </svg>
                            <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{ $blog->title }}</a>
                        </div>
                    </li>
                  
                </ol>
            </nav>
        </h2>
    </x-slot>
<x-slot name="content">
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white px-4 py-5 sm:px-6">
                <div class="flex space-x-3">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </div>
                    <div class="min-w-0 flex-1">
                        <p class="text-sm font-semibold text-gray-900">
                            <a href="#" class="hover:underline">{{ $blog->user->name }}</a>
                        </p>
                        <p class="text-sm text-gray-500">
                            <a href="#" class="hover:underline">{{
                                Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</a>
                        </p>
                        <br>
                        <p class="text-sm text-gray-500">
                            <a href="/user/{{ $blog->user_id }}/blog/{{ $blog->id }}" class="hover:underline">{{
                                $blog->content }}</a>
                        </p>
                        <div class="min-w-0 flex-1">
                                <a href="/user/{{ $blog->user_id }}/blog/{{ $blog->id }}" class="hover:underline">
                                    <img src="{{ asset('/storage/'.$blog->thumbnail) }}" width='50%' height='50%'>
                                </a>
                        </div>
                    </div>
                    <div class="flex flex-shrink-0 self-center">
                        <div class="relative inline-block text-left">
                            <div>
                                <button type="button"
                                    class="-m-2 flex items-center rounded-full p-2 text-gray-400 hover:text-gray-600"
                                    id="menu-0-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open options</span>
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>
</x-slot>
</x-app-layout>