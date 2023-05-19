<x-app-layout>
    <x-slot name="alert alert-{{ $success }}">
        
            
        @if (Session::has('Success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="fa fa-times"></i>
                </button>
                <strong>Success !</strong> {{ session('Success') }}
            </div>
        @endif

        @if (Session::has('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="fa fa-times"></i>
                </button>
                <strong>Error !</strong> {{ session('error') }}
            </div>
        @endif
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <x-slot name="content">
    <div class="p-4">
        {{ $blogs->links() }}
    </div>
    <div class="mx-auto p-4">
        <form action="/dashboard/" method="GET" class="mt-5 sm:flex sm:items-center">
                <div class="w-full sm:max-w-xs">
                    <label for="title" class="sr-only"></label>
                    <input type="text" name="title" id="title"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        placeholder="Search for title">
                </div>
                <button type="submit"
                    class="mt-3 inline-flex w-full items-center justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:ml-3 sm:mt-0 sm:w-auto">Search</button>
            </form>
    </div>
<div class="mx-auto p-4">
        <button type="button" onclick="location='/user/{{ auth()->user()->id }}/blog-create';"
            class="mt-3 inline-flex w-full items-center justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:ml-3 sm:mt-0 sm:w-auto">Create a blog</button>
</div>
    
    @foreach($blogs as $blog)
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
                                <a href="/user/{{ $blog->user_id }}/blog/{{ $blog->id }}" class="hover:underline">{{ $blog->title }}</a>
                            </p>
                            <p class="text-sm font-semibold text-gray-900">
                                <a href="#" class="hover:underline">{{ $blog->user->name }}</a>
                            </p>
                            <p class="text-sm text-gray-500">
                                <a href="#" class="hover:underline">{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</a>
                            </p>
                            <br>
                            <p class="text-sm text-gray-500">
                                <a href="/user/{{ $blog->user_id }}/blog/{{ $blog->id }}" class="hover:underline">{{ $blog->content }}</a>
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
    @endforeach
    </x-slot>
</x-app-layout>
