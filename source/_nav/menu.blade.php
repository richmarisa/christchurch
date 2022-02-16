<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Posts" href="/posts"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/posts') ? 'active text-blue-600' : '' }}">
        Posts
    </a>

    <a title="{{ $page->siteName }} Main Site" href="https://www.christchurchithaca.com/"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
        Main Site
    </a>

</nav>
