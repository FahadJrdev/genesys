<x-app-layout>
    <div class="flex justify-center items-center h-screen">
        <div class="bg-light-tertiaryBg dark:bg-tertiaryBg rounded-lg shadow-lg p-10 max-w-sm text-center">
            <!-- Icon -->
            <div class="flex items-center justify-center mb-4">
                <svg class="fill-brand" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35 4.375C26.9082 4.47318 19.1756 7.73126 13.4534 13.4534C7.73126 19.1756 4.47318 26.9082 4.375 35C4.47318 43.0918 7.73126 50.8244 13.4534 56.5466C19.1756 62.2687 26.9082 65.5268 35 65.625C43.0918 65.5268 50.8244 62.2687 56.5466 56.5466C62.2687 50.8244 65.5268 43.0918 65.625 35C65.5268 26.9082 62.2687 19.1756 56.5466 13.4534C50.8244 7.73126 43.0918 4.47318 35 4.375ZM52.5 37.1875H37.1875V52.5H32.8125V37.1875H17.5V32.8125H32.8125V17.5H37.1875V32.8125H52.5V37.1875Z"/>
                </svg>
            </div>
            <!-- Message -->
            <p class="text-lg mb-4 font-bold">Your watchlist is empty</p>
            <!-- Button -->
             <a href="/watchlist/add">
                 <button class="bg-brand hover:bg-hoverBrand font-semibold py-2 px-6 rounded-lg">
                     Add pair
                 </button>
             </a>
        </div>
    </div>
</x-app-layout>