<nav id="js-nav-menu" class="w-auto px-2 pt-6 pb-2 bg-gray-200 shadow hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Posts"
                href="/posts"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/posts') ? 'active text-blue-500' : 'text-gray-800 hover:text-blue-500' }}"
            >Posts</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/about') ? 'active text-blue-500' : 'text-gray-800 hover:text-blue-500' }}"
            >About</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="/contact"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/contact') ? 'active text-blue-500' : 'text-gray-800 hover:text-blue-500' }}"
            >Contact</a>
        </li>
    </ul>
</nav>
