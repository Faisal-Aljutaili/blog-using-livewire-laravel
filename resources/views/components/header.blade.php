<header class="text-gray-700 body-font border-b">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        @auth
        Welcome, {{ auth()->user()->name }}!
        <div>
            <a href="/">
                <img src="/images/letter-f-svgrepo-com.svg" alt="f Logo" width="165" height="16">
            </a>
        </div>      
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a href="/post/create" class="mr-5 hover:text-gray-900">Create a Post</a>

            <a href="/" class="mr-5 hover:text-gray-900">Home</a>
            <a href="/admin/posts" class="mr-5 hover:text-gray-900">Dashboard</a>
            <a href="/about" class="mr-5 hover:text-gray-900">About</a>
        </nav>
        
        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <a href="/logout" class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Logout</a>
        </div>
        @endauth
        @guest
        
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a href="/" class="mr-5 hover:text-gray-900">Home</a>
            <a href="/admin/posts" class="mr-5 hover:text-gray-900">Dashboard</a>
            <a href="/about" class="mr-5 hover:text-gray-900">About</a>
        </nav>
        <div>
            <a href="/">
                <img src="/images/letter-f-svgrepo-com.svg" alt="f Logo" width="165" height="16">
            </a>
        </div>
        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <a href="/login" class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Login</a>
        </div>
        @endguest
    </div>
</header>