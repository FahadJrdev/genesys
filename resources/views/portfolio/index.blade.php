<x-app-layout>
    <div class="flex justify-center items-center h-screen">
        <div class="bg-light-tertiaryBg dark:bg-tertiaryBg rounded-lg shadow-lg p-10 max-w-md text-center">
            <!-- Icon -->
            <div class="flex items-center justify-center mb-4">
                <svg class="stroke-brand" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M49.5837 23.3334V14.5834C49.5837 13.8099 49.2764 13.068 48.7294 12.521C48.1824 11.974 47.4405 11.6667 46.667 11.6667H17.5003C15.9532 11.6667 14.4695 12.2813 13.3755 13.3753C12.2816 14.4693 11.667 15.953 11.667 17.5001M11.667 17.5001C11.667 19.0472 12.2816 20.5309 13.3755 21.6249C14.4695 22.7188 15.9532 23.3334 17.5003 23.3334H52.5003C53.2739 23.3334 54.0157 23.6407 54.5627 24.1877C55.1097 24.7347 55.417 25.4765 55.417 26.2501V35.0001M11.667 17.5001V52.5001C11.667 54.0472 12.2816 55.5309 13.3755 56.6249C14.4695 57.7188 15.9532 58.3334 17.5003 58.3334H52.5003C53.2739 58.3334 54.0157 58.0261 54.5627 57.4791C55.1097 56.9322 55.417 56.1903 55.417 55.4167V46.6667" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M58.334 35V46.6667H46.6673C45.1202 46.6667 43.6365 46.0521 42.5425 44.9581C41.4486 43.8642 40.834 42.3804 40.834 40.8333C40.834 39.2862 41.4486 37.8025 42.5425 36.7085C43.6365 35.6146 45.1202 35 46.6673 35H58.334Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <!-- Message -->
            <p class="text-md mb-4 font-bold">You´re not tracking any wallet yet.</p>
            <!-- Button -->
             <a href="/watchlist/add">
                <button class="mx-auto flex items-center justify-center space-x-3 bg-brand hover:bg-hoverBrand font-semibold py-2 px-6 rounded-lg">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4.5C16.411 4.5 20 8.089 20 12.5C20 16.911 16.411 20.5 12 20.5C7.589 20.5 4 16.911 4 12.5C4 8.089 7.589 4.5 12 4.5ZM12 2.5C6.477 2.5 2 6.977 2 12.5C2 18.023 6.477 22.5 12 22.5C17.523 22.5 22 18.023 22 12.5C22 6.977 17.523 2.5 12 2.5ZM17 11.5H13V7.5H11V11.5H7V13.5H11V17.5H13V13.5H17V11.5Z" fill="white"/>
                    </svg>
                    <span>Add a wallet</span>
                </button>
             </a>
        </div>
    </div>
</x-app-layout>