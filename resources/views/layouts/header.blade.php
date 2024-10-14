<!-- Header -->
<header class="header-container fixed md:hidden z-10 bg-primaryBg top-0 w-full p-2 border-b border-brand">
    <div class="flex justify-between">
        <a href="/" class="inline">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="large-logo">
        </a>
        <button id="menu-bar" class="open-navbar flex items-center space-x-3 px-3 py-1 rounded bg-secondaryBg transition-all">
            <svg class="stroke-brand" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.14514 1.85352H14.8118H1.14514Z" fill="#DC1FFF"/>
                <path d="M1.14514 1.85352H14.8118" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1.14514 6.97852H14.8118H1.14514Z" fill="#DC1FFF"/>
                <path d="M1.14514 6.97852H14.8118" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M1.14514 12.1035H14.8118" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span id="menu-text" class="font-bold">Explorer</span>
        </button>
    </div>
</header>

<script>
    const mobileMenuBar = document.getElementById('menu-bar');
    const mobileMenuText = document.getElementById('menu-text');
</script>