@props(['visibilityClass' => 'hidden', 'title' => null]) <!-- You can control the visibility class here -->

<x-overlay-popup visibilityClass="{{ $visibilityClass }}" title="{{ $title }}">
    <div class="text-center">
        <h2 class="text-2xl font-semibold text-white mb-2">Sign-in</h2>
        <p class="text-gray-400 mb-6">Sign-in to Genesys View App to sync your settings, list, and alerts across unlimited devices.</p>

        <div class="flex flex-col space-y-4">
            <!-- Google Sign-In Button -->
            <button class="bg-[#1877F2] hover:bg-blue-700 text-white py-3 rounded-md flex items-center justify-center w-full">
                <svg class="mr-3" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.54 12.2615C23.54 11.446 23.4668 10.6619 23.3309 9.90918H12.5V14.3576H18.6891C18.4225 15.7951 17.6123 17.013 16.3943 17.8285V20.714H20.1109C22.2855 18.7119 23.54 15.7637 23.54 12.2615Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 23.4998C15.605 23.4998 18.2081 22.47 20.1109 20.7137L16.3943 17.8282C15.3645 18.5182 14.0472 18.9259 12.5 18.9259C9.50474 18.9259 6.96951 16.903 6.06519 14.1848H2.22314V17.1644C4.11542 20.9228 8.00451 23.4998 12.5 23.4998Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.06523 14.185C5.83523 13.495 5.70455 12.7579 5.70455 12C5.70455 11.242 5.83523 10.505 6.06523 9.81499V6.83545H2.22318C1.44432 8.38795 1 10.1443 1 12C1 13.8557 1.44432 15.612 2.22318 17.1645L6.06523 14.185Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 5.07386C14.1884 5.07386 15.7043 5.65409 16.8961 6.79364L20.1945 3.49523C18.2029 1.63955 15.5997 0.5 12.5 0.5C8.00451 0.5 4.11542 3.07705 2.22314 6.83545L6.06519 9.815C6.96951 7.09682 9.50474 5.07386 12.5 5.07386Z" fill="white"/>
                </svg>
                Sign In with Google
            </button>

            <!-- Apple Sign-In Button -->
            <button class="bg-white hover:bg-gray-300 text-black py-3 rounded-md flex items-center justify-center w-full">
                <svg class="mr-3" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.7808 18.424C21.433 19.2275 21.0213 19.9672 20.5442 20.6472C19.894 21.5743 19.3616 22.216 18.9513 22.5724C18.3153 23.1573 17.6338 23.4568 16.9041 23.4739C16.3802 23.4739 15.7485 23.3248 15.013 23.0224C14.2752 22.7214 13.5972 22.5724 12.9772 22.5724C12.327 22.5724 11.6296 22.7214 10.8837 23.0224C10.1366 23.3248 9.53481 23.4824 9.07468 23.498C8.37491 23.5278 7.6774 23.2197 6.98118 22.5724C6.53681 22.1848 5.98099 21.5204 5.31515 20.5791C4.60075 19.5739 4.01342 18.4084 3.55329 17.0795C3.06051 15.6442 2.81348 14.2543 2.81348 12.9087C2.81348 11.3673 3.14654 10.0379 3.81366 8.92385C4.33796 8.029 5.03546 7.32312 5.90844 6.80493C6.78142 6.28674 7.72468 6.02267 8.74048 6.00578C9.2963 6.00578 10.0252 6.1777 10.931 6.51559C11.8342 6.85462 12.4141 7.02655 12.6684 7.02655C12.8585 7.02655 13.5028 6.82552 14.5949 6.42473C15.6278 6.05305 16.4995 5.89916 17.2136 5.95978C19.1487 6.11595 20.6024 6.87876 21.5693 8.25303C19.8386 9.30163 18.9826 10.7703 18.9996 12.6544C19.0152 14.122 19.5476 15.3432 20.5939 16.3129C21.0681 16.7629 21.5977 17.1107 22.1868 17.3578C22.0591 17.7283 21.9242 18.0832 21.7808 18.424ZM17.3428 0.960131C17.3428 2.11039 16.9226 3.18439 16.0849 4.17847C15.0741 5.36023 13.8514 6.04311 12.5256 5.93536C12.5087 5.79736 12.4989 5.65213 12.4989 5.49951C12.4989 4.39526 12.9796 3.21349 13.8333 2.24724C14.2595 1.75801 14.8015 1.35122 15.4588 1.02671C16.1147 0.707053 16.7352 0.530273 17.3187 0.5C17.3357 0.653772 17.3428 0.807554 17.3428 0.960116V0.960131Z" fill="black"/>
                </svg>
                Sign In with Apple
            </button>

            <!-- Wallet Connect Button -->
            <button class="bg-[#3D1673] hover:bg-[#291249] text-white py-3 rounded-md flex items-center justify-center w-full">
                <svg class="mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 7V5C20 3.897 19.103 3 18 3H5C3.346 3 2 4.346 2 6V18C2 20.201 3.794 21 5 21H20C21.103 21 22 20.103 22 19V9C22 7.897 21.103 7 20 7ZM18 16H16V12H18V16ZM5 7C4.74252 6.98848 4.49941 6.87809 4.32128 6.69182C4.14315 6.50554 4.04373 6.25774 4.04373 6C4.04373 5.74226 4.14315 5.49446 4.32128 5.30818C4.49941 5.12191 4.74252 5.01152 5 5H18V7H5Z" fill="white"/>
                </svg>
                Connect Wallet
            </button>

            <!-- login -->
             <div class="flex p-3 justify-between items-center">
                 <a href="/register" class="underline">Register</a>
                 <a href="/login" class="underline">Login</a>
             </div>
        </div>
    </div>
</x-overlay-popup>
