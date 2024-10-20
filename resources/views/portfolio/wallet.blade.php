<x-app-layout>
    <script>
        const showWalletPopup = () => {
            document.querySelector(".wallet-popup").classList.remove("hidden");
            document.querySelector(".wallet-popup").classList.add("flex");
        };
        const hideWalletPopup = () => {
            document.querySelector(".wallet-popup").classList.remove("flex");
            document.querySelector(".wallet-popup").classList.add("hidden");
        };
        const showWalletRenamePopup = () => {
            document.querySelector(".wallet-rename-popup").classList.remove("hidden");
            document.querySelector(".wallet-rename-popup").classList.add("flex");
        };
        const hideWalletRenamePopup = () => {
            document.querySelector(".wallet-rename-popup").classList.remove("flex");
            document.querySelector(".wallet-rename-popup").classList.add("hidden");
        };
        const showWalletDeletePopup = () => {
            document.querySelector(".wallet-delete-popup").classList.remove("hidden");
            document.querySelector(".wallet-delete-popup").classList.add("flex");
        };
        const hideWalletDeletePopup = () => {
            document.querySelector(".wallet-delete-popup").classList.remove("flex");
            document.querySelector(".wallet-delete-popup").classList.add("hidden");
        };
        const showSharePortfolioPopup = () => {
            document.querySelector(".share-portfolio-popup").classList.remove("hidden");
            document.querySelector(".share-portfolio-popup").classList.add("flex");
        };
        const hideSharePortfolioPopup = () => {
            document.querySelector(".share-portfolio-popup").classList.remove("flex");
            document.querySelector(".share-portfolio-popup").classList.add("hidden");
        };
    </script>
    
    <!-- Coins -->
    <x-filter-coin3 />
    <div class="min-w-full overflow-y-hidden border-b border-brandSecondary mb-6">
        <div class="min-w-full flex justify-between items-center">
            <div class="chains flex items-center">
                <li class="w-24 font-semibold cursor-pointer px-2 py-1 list-none h-full border-b">Metamask</li>
            </div>
        </div>
    </div>

    <!-- Total Value Section -->
    <div class="flex flex-col justify-between items-center sm:flex-row mb-6">
        <div class="flex items-end space-x-2">
            <span class="text-3xl font-bold">$1,737.85 </span>
            <span class="text-gray-600 dark:text-gray-400">TOTAL VALUE</span>
        </div>
        <div class="text-sm flex items-center space-x-2">
            <span class="text-gray-600 dark:text-gray-400">Wallet:</span> 
            <span class="font-bold">25fgjr...54dlisjus</span>
            <button class="ml-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.84536 19.2666L5.90815 19.6167C6.03369 20.3169 6.26625 20.8622 6.70165 21.2985C7.19483 21.7917 7.82919 22.0238 8.67431 22.1384L5.84536 19.2666ZM5.84536 19.2666L5.49398 19.2111M5.84536 19.2666L5.49398 19.2111M5.49398 19.2111C4.72913 19.0904 4.03249 18.7006 3.52946 18.1119C3.02642 17.5232 2.75002 16.7743 2.75 16V9.944C2.75 8.09291 2.75103 6.67697 2.89852 5.5778L5.49398 19.2111ZM18.2666 4.84536L18.2111 4.49398C18.0904 3.72913 17.7006 3.03249 17.1119 2.52946C16.5232 2.02642 15.7743 1.75002 15 1.75H10.944C9.09284 1.75 7.67594 1.75103 6.5778 1.89852L18.2666 4.84536ZM18.2666 4.84536L18.6167 4.90815M18.2666 4.84536L18.6167 4.90815M18.6167 4.90815C19.3169 5.03369 19.8622 5.26625 20.2985 5.70165C20.7917 6.19483 21.0238 6.82919 21.1384 7.67431C21.249 8.5007 21.25 9.56502 21.25 10.945V16.055C21.25 17.435 21.249 18.4993 21.1384 19.3257L18.6167 4.90815ZM3.99455 2.99455C3.35495 3.63514 3.04907 4.46108 2.89853 5.57773L3.99455 2.99455ZM3.99455 2.99455C4.63511 2.35498 5.461 2.0491 6.57757 1.89855L3.99455 2.99455ZM17.1128 4.7707L17.8382 4.79568L17.603 4.109C17.4172 3.56633 17.0663 3.09536 16.5995 2.76202C16.1328 2.42874 15.5735 2.24971 15 2.25C15 2.25 14.9999 2.25 14.9999 2.25C14.9998 2.25 14.9998 2.25 14.9997 2.25L11 2.25C9.10711 2.25 7.7135 2.25094 6.64354 2.39444L6.64343 2.39445C5.58257 2.53695 4.87966 2.81723 4.34845 3.34845C3.81719 3.8797 3.53694 4.58265 3.39445 5.64448C3.25094 6.71348 3.25 8.10715 3.25 10L3.25 15.9997C3.25 15.9998 3.25 15.9998 3.25 15.9999C3.25 15.9999 3.25 16 3.25 16C3.24971 16.5735 3.42874 17.1328 3.76202 17.5995C4.09536 18.0663 4.56633 18.4172 5.109 18.603L5.79568 18.8382L5.7707 18.1128C5.75006 17.5131 5.75 16.8325 5.75 16.055V10.945C5.75 9.56491 5.75103 8.50092 5.86251 7.67487L5.86261 7.67408C5.97513 6.83023 6.20887 6.19506 6.70185 5.70126C7.19513 5.20814 7.82961 4.97615 8.67462 4.86254L8.67487 4.86251C9.50092 4.75103 10.5649 4.75 11.945 4.75H15.055C15.8325 4.75 16.5131 4.75006 17.1128 4.7707ZM7.05445 6.05645L7.05381 6.05709C6.67053 6.44176 6.46309 6.9518 6.35649 7.74217L6.35641 7.7427C6.24995 8.53858 6.249 9.58014 6.249 11.001V16.001C6.249 17.4219 6.24995 18.4624 6.35641 19.2583L6.35647 19.2587C6.46294 20.0492 6.66912 20.5602 7.05445 20.9456L7.05509 20.9462C7.43976 21.3295 7.9498 21.5369 8.74017 21.6435L8.7407 21.6436C9.53658 21.7501 10.5781 21.751 11.999 21.751H14.999C16.4199 21.751 17.4604 21.7501 18.2563 21.6436L18.2567 21.6435C19.0472 21.5371 19.5582 21.3309 19.9436 20.9456L19.9442 20.9449C20.3275 20.5602 20.5349 20.0502 20.6415 19.2598L20.6416 19.2592C20.748 18.4624 20.749 17.4219 20.749 16.001V11.001C20.749 9.58019 20.7481 8.53856 20.6416 7.74362L20.6415 7.74326C20.5351 6.9528 20.3289 6.44177 19.9436 6.05645L19.9429 6.05581C19.5582 5.67253 19.0482 5.46509 18.2578 5.35849L18.2572 5.3584C17.4604 5.25195 16.4199 5.251 14.999 5.251H11.999C10.5782 5.251 9.53656 5.25194 8.74162 5.35843L8.74126 5.35847C7.9508 5.46494 7.43977 5.67112 7.05445 6.05645ZM11.945 22.25C10.5655 22.25 9.50143 22.249 8.67516 22.1385L18.3257 22.1384C17.4993 22.249 16.435 22.25 15.055 22.25H11.945ZM20.2984 21.2984C19.8053 21.7916 19.1709 22.0238 18.3257 22.1384L21.1384 19.3257C21.0238 20.1709 20.7916 20.8053 20.2984 21.2984Z" stroke="white"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Buttons -->
    <div class="flex items-center flex-col lg:flex-row space-x-2 mb-6 text-sm">
        <div class="flex items-center space-x-2 mb-3 lg:mb-0">
            <button onclick="showWalletPopup()" class="w-40 h-10 flex items-center space-x-2 px-3 py-1 rounded-lg bg-transparent border border-brand hover:bg-brand transition-all">
                <svg class="stroke-light-primaryFont dark:stroke-primaryFont" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 11.5V12H13.5H17V13H13.5H13V13.5V17H12V13.5V13H11.5H8V12H11.5H12V11.5V8H13V11.5ZM21 12.5C21 7.81286 17.1871 4 12.5 4C7.81286 4 4 7.81286 4 12.5C4 17.1871 7.81286 21 12.5 21C17.1871 21 21 17.1871 21 12.5ZM3 12.5C3 7.25314 7.25314 3 12.5 3C17.7469 3 22 7.25314 22 12.5C22 17.7469 17.7469 22 12.5 22C7.25314 22 3 17.7469 3 12.5Z"/>
                </svg>
                <span>Add Wallet</span>
            </button>
            <button onclick="showWalletRenamePopup()" class="w-40 h-10 flex items-center space-x-2 px-3 py-1 rounded-lg bg-transparent border border-brand hover:bg-brand transition-all">
                <svg width="19" height="20" viewBox="0 0 19 20" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 5.5H3C2.46957 5.5 1.96086 5.71071 1.58579 6.08579C1.21071 6.46086 1 6.96957 1 7.5V16.5C1 17.0304 1.21071 17.5391 1.58579 17.9142C1.96086 18.2893 2.46957 18.5 3 18.5H12C12.5304 18.5 13.0391 18.2893 13.4142 17.9142C13.7893 17.5391 14 17.0304 14 16.5V15.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13 3.50011L16 6.50011M17.385 5.08511C17.7788 4.69126 18.0001 4.15709 18.0001 3.60011C18.0001 3.04312 17.7788 2.50895 17.385 2.11511C16.9912 1.72126 16.457 1.5 15.9 1.5C15.343 1.5 14.8088 1.72126 14.415 2.11511L6 10.5001V13.5001H9L17.385 5.08511Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Rename</span>
            </button>
        </div>
        <div class="flex items-center space-x-2">
            <button onclick="showWalletDeletePopup()" class="w-32 sm:w-40 h-10 flex items-center space-x-2 px-3 py-1 rounded-lg bg-transparent border border-brand hover:bg-brand transition-all">
                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.14645 11.1464C7.24022 11.0527 7.36739 11 7.5 11H15.5C15.6326 11 15.7598 11.0527 15.8536 11.1464C15.9473 11.2402 16 11.3674 16 11.5C16 11.6326 15.9473 11.7598 15.8536 11.8536C15.7598 11.9473 15.6326 12 15.5 12H7.5C7.36739 12 7.24022 11.9473 7.14645 11.8536C7.05268 11.7598 7 11.6326 7 11.5C7 11.3674 7.05268 11.2402 7.14645 11.1464Z"/>
                    <path d="M22 11.5C22 17.2989 17.2989 22 11.5 22C5.70114 22 1 17.2989 1 11.5C1 5.70114 5.70114 1 11.5 1C17.2989 1 22 5.70114 22 11.5ZM20.2769 15.1355C20.7543 13.9829 21 12.7476 21 11.5C21 8.98044 19.9991 6.56408 18.2175 4.78249C16.4359 3.00089 14.0196 2 11.5 2C8.98044 2 6.56408 3.00089 4.78249 4.78249C3.00089 6.56408 2 8.98044 2 11.5C2 12.7476 2.24572 13.9829 2.72314 15.1355C3.20056 16.2881 3.90033 17.3354 4.78249 18.2175C5.66464 19.0997 6.71191 19.7994 7.86451 20.2769C9.0171 20.7543 10.2524 21 11.5 21C12.7476 21 13.9829 20.7543 15.1355 20.2769C16.2881 19.7994 17.3354 19.0997 18.2175 18.2175C19.0997 17.3354 19.7994 16.2881 20.2769 15.1355Z"/>
                </svg>
                <span>Remove</span>
            </button>
            <button class="w-48 h-10 flex items-center space-x-2 px-3 py-1 rounded-lg bg-transparent border border-brand hover:bg-brand transition-all">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.73096 12.2801L2.62325 12.5L2.73096 12.7199C3.58037 14.4542 4.89931 15.9155 6.53787 16.9375C8.17642 17.9595 10.0688 18.5013 12 18.5013C13.9312 18.5013 15.8236 17.9595 17.4621 16.9375C19.1007 15.9155 20.4196 14.4542 21.269 12.7199L21.3767 12.5L21.269 12.2801C20.4196 10.5458 19.1007 9.08452 17.4621 8.0625C15.8236 7.04049 13.9312 6.49868 12 6.49868C10.0688 6.49868 8.17642 7.04049 6.53787 8.0625C4.89931 9.08452 3.58037 10.5458 2.73096 12.2801ZM12 10C12.663 10 13.2989 10.2634 13.7678 10.7322C14.2366 11.2011 14.5 11.837 14.5 12.5C14.5 13.163 14.2366 13.7989 13.7678 14.2678C13.2989 14.7366 12.663 15 12 15C11.337 15 10.7011 14.7366 10.2322 14.2678C9.76339 13.7989 9.5 13.163 9.5 12.5C9.5 11.837 9.76339 11.2011 10.2322 10.7322C10.7011 10.2634 11.337 10 12 10ZM12 5.5C16.7171 5.5 20.7578 8.39095 22.4607 12.5C20.7578 16.6091 16.7171 19.5 12 19.5C7.28287 19.5 3.24223 16.6091 1.53928 12.5C3.24223 8.39095 7.28287 5.5 12 5.5Z"/>
                </svg>
                <span>Show small values</span>
            </button>
        </div>
    </div>

    <!-- Wallet Items -->
    <div class="bg-light-tertiaryBg dark:bg-tertiaryBg rounded-lg p-4 sm:p-8 mb-4 flex flex-col lg:flex-row items-center justify-between">
        <div class="flex flex-col space-y-3 w-full mb-6 sm:mb-0">
            <div class="flex items-center justify-between">
                <div class="cursor-pointer flex items-center space-x-1">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_497_3848)">
                        <path d="M12 24.5C18.6274 24.5 24 19.1274 24 12.5C24 5.87258 18.6274 0.5 12 0.5C5.37258 0.5 0 5.87258 0 12.5C0 19.1274 5.37258 24.5 12 24.5Z" fill="#F3BA2F"/>
                        <path d="M9.087 11.303L12 8.39L14.9145 11.3045L16.6095 9.6095L12 5L7.392 9.608L9.087 11.303ZM4.5 12.5L6.195 10.805L7.89 12.5L6.195 14.195L4.5 12.5ZM9.087 13.697L12 16.61L14.9145 13.6955L16.6095 15.3898L12 20L7.392 15.392L7.38975 15.3898L9.087 13.697ZM16.11 12.5L17.805 10.805L19.5 12.5L17.805 14.195L16.11 12.5ZM13.719 12.4985H13.7205V12.5L12 14.2205L10.2817 12.503L10.2787 12.5L10.2817 12.4977L10.5825 12.1962L10.7288 12.05L12 10.7795L13.7197 12.4992L13.719 12.4985Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_497_3848">
                        <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <span>BSC</span>
                </div>
                <button class="flex lg:hidden w-28 items-center space-x-1 px-3 py-2 rounded bg-transparent border border-brand hover:bg-brand transition-all">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.73096 12.2801L2.62325 12.5L2.73096 12.7199C3.58037 14.4542 4.89931 15.9155 6.53787 16.9375C8.17642 17.9595 10.0688 18.5013 12 18.5013C13.9312 18.5013 15.8236 17.9595 17.4621 16.9375C19.1007 15.9155 20.4196 14.4542 21.269 12.7199L21.3767 12.5L21.269 12.2801C20.4196 10.5458 19.1007 9.08452 17.4621 8.0625C15.8236 7.04049 13.9312 6.49868 12 6.49868C10.0688 6.49868 8.17642 7.04049 6.53787 8.0625C4.89931 9.08452 3.58037 10.5458 2.73096 12.2801ZM12 10C12.663 10 13.2989 10.2634 13.7678 10.7322C14.2366 11.2011 14.5 11.837 14.5 12.5C14.5 13.163 14.2366 13.7989 13.7678 14.2678C13.2989 14.7366 12.663 15 12 15C11.337 15 10.7011 14.7366 10.2322 14.2678C9.76339 13.7989 9.5 13.163 9.5 12.5C9.5 11.837 9.76339 11.2011 10.2322 10.7322C10.7011 10.2634 11.337 10 12 10ZM12 5.5C16.7171 5.5 20.7578 8.39095 22.4607 12.5C20.7578 16.6091 16.7171 19.5 12 19.5C7.28287 19.5 3.24223 16.6091 1.53928 12.5C3.24223 8.39095 7.28287 5.5 12 5.5Z"/>
                    </svg>
                    Hide
                </button>
            </div>
            <div class="flex items-end space-x-2">
                <div class="font-bold bg-brandSecondary p-1 rounded-sm">$1,785.25</div>
                <div>Tether USD <span class="text-gray-400 dark:text-gray-600">USDT</span></div>
            </div>
        </div>
        <div class="flex items-center justify-between space-x-4 w-full">
            <div class="flex flex-col space-y-3">
                <span class="text-gray-400 dark:text-gray-600">AMOUNT:</span>
                <span class="font-bold">1,458</span>
            </div>
            <div class="flex flex-col space-y-3">
                <span class="text-gray-400 dark:text-gray-600">PRICE USD:</span>
                <span class="font-bold">$0.2568</span>
            </div>
            <div class="flex flex-col space-y-3">
                <span class="text-gray-400 dark:text-gray-600">1H:</span>
                <span class="font-bold">0%</span>
            </div>
            <div class="flex flex-col space-y-3">
                <span class="text-gray-400 dark:text-gray-600">24H:</span>
                <span class="font-bold">0%</span>
            </div>
            <button class="hidden lg:flex w-28 items-center space-x-1 px-3 py-2 rounded bg-transparent border border-brand hover:bg-brand transition-all">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.73096 12.2801L2.62325 12.5L2.73096 12.7199C3.58037 14.4542 4.89931 15.9155 6.53787 16.9375C8.17642 17.9595 10.0688 18.5013 12 18.5013C13.9312 18.5013 15.8236 17.9595 17.4621 16.9375C19.1007 15.9155 20.4196 14.4542 21.269 12.7199L21.3767 12.5L21.269 12.2801C20.4196 10.5458 19.1007 9.08452 17.4621 8.0625C15.8236 7.04049 13.9312 6.49868 12 6.49868C10.0688 6.49868 8.17642 7.04049 6.53787 8.0625C4.89931 9.08452 3.58037 10.5458 2.73096 12.2801ZM12 10C12.663 10 13.2989 10.2634 13.7678 10.7322C14.2366 11.2011 14.5 11.837 14.5 12.5C14.5 13.163 14.2366 13.7989 13.7678 14.2678C13.2989 14.7366 12.663 15 12 15C11.337 15 10.7011 14.7366 10.2322 14.2678C9.76339 13.7989 9.5 13.163 9.5 12.5C9.5 11.837 9.76339 11.2011 10.2322 10.7322C10.7011 10.2634 11.337 10 12 10ZM12 5.5C16.7171 5.5 20.7578 8.39095 22.4607 12.5C20.7578 16.6091 16.7171 19.5 12 19.5C7.28287 19.5 3.24223 16.6091 1.53928 12.5C3.24223 8.39095 7.28287 5.5 12 5.5Z"/>
                </svg>
                Hide
            </button>
        </div>
    </div>
    <div class="bg-light-tertiaryBg dark:bg-tertiaryBg rounded-lg p-4 sm:p-8 mb-4 flex flex-col lg:flex-row items-center justify-between">
        <div class="flex flex-col space-y-3 w-full mb-6 sm:mb-0">
            <div class="flex items-center justify-between">
                <div class="cursor-pointer flex items-center space-x-1">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_497_3848)">
                        <path d="M12 24.5C18.6274 24.5 24 19.1274 24 12.5C24 5.87258 18.6274 0.5 12 0.5C5.37258 0.5 0 5.87258 0 12.5C0 19.1274 5.37258 24.5 12 24.5Z" fill="#F3BA2F"/>
                        <path d="M9.087 11.303L12 8.39L14.9145 11.3045L16.6095 9.6095L12 5L7.392 9.608L9.087 11.303ZM4.5 12.5L6.195 10.805L7.89 12.5L6.195 14.195L4.5 12.5ZM9.087 13.697L12 16.61L14.9145 13.6955L16.6095 15.3898L12 20L7.392 15.392L7.38975 15.3898L9.087 13.697ZM16.11 12.5L17.805 10.805L19.5 12.5L17.805 14.195L16.11 12.5ZM13.719 12.4985H13.7205V12.5L12 14.2205L10.2817 12.503L10.2787 12.5L10.2817 12.4977L10.5825 12.1962L10.7288 12.05L12 10.7795L13.7197 12.4992L13.719 12.4985Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_497_3848">
                        <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <span>BSC</span>
                </div>
                <button class="flex lg:hidden w-28 items-center space-x-1 px-3 py-2 rounded bg-transparent border border-brand hover:bg-brand transition-all">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.73096 12.2801L2.62325 12.5L2.73096 12.7199C3.58037 14.4542 4.89931 15.9155 6.53787 16.9375C8.17642 17.9595 10.0688 18.5013 12 18.5013C13.9312 18.5013 15.8236 17.9595 17.4621 16.9375C19.1007 15.9155 20.4196 14.4542 21.269 12.7199L21.3767 12.5L21.269 12.2801C20.4196 10.5458 19.1007 9.08452 17.4621 8.0625C15.8236 7.04049 13.9312 6.49868 12 6.49868C10.0688 6.49868 8.17642 7.04049 6.53787 8.0625C4.89931 9.08452 3.58037 10.5458 2.73096 12.2801ZM12 10C12.663 10 13.2989 10.2634 13.7678 10.7322C14.2366 11.2011 14.5 11.837 14.5 12.5C14.5 13.163 14.2366 13.7989 13.7678 14.2678C13.2989 14.7366 12.663 15 12 15C11.337 15 10.7011 14.7366 10.2322 14.2678C9.76339 13.7989 9.5 13.163 9.5 12.5C9.5 11.837 9.76339 11.2011 10.2322 10.7322C10.7011 10.2634 11.337 10 12 10ZM12 5.5C16.7171 5.5 20.7578 8.39095 22.4607 12.5C20.7578 16.6091 16.7171 19.5 12 19.5C7.28287 19.5 3.24223 16.6091 1.53928 12.5C3.24223 8.39095 7.28287 5.5 12 5.5Z"/>
                    </svg>
                    Hide
                </button>
            </div>
            <div class="flex items-end space-x-2">
                <div class="font-bold bg-brandSecondary p-1 rounded-sm">$1,785.25</div>
                <div>Tether USD <span class="text-gray-400 dark:text-gray-600">USDT</span></div>
            </div>
        </div>
        <div class="flex items-center justify-between space-x-4 w-full">
            <div class="flex flex-col space-y-3">
                <span class="text-gray-400 dark:text-gray-600">AMOUNT:</span>
                <span class="font-bold">1,458</span>
            </div>
            <div class="flex flex-col space-y-3">
                <span class="text-gray-400 dark:text-gray-600">PRICE USD:</span>
                <span class="font-bold">$0.2568</span>
            </div>
            <div class="flex flex-col space-y-3">
                <span class="text-gray-400 dark:text-gray-600">1H:</span>
                <span class="font-bold">0%</span>
            </div>
            <div class="flex flex-col space-y-3">
                <span class="text-gray-400 dark:text-gray-600">24H:</span>
                <span class="font-bold">0%</span>
            </div>
            <button class="hidden lg:flex w-28 items-center space-x-1 px-3 py-2 rounded bg-transparent border border-brand hover:bg-brand transition-all">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.73096 12.2801L2.62325 12.5L2.73096 12.7199C3.58037 14.4542 4.89931 15.9155 6.53787 16.9375C8.17642 17.9595 10.0688 18.5013 12 18.5013C13.9312 18.5013 15.8236 17.9595 17.4621 16.9375C19.1007 15.9155 20.4196 14.4542 21.269 12.7199L21.3767 12.5L21.269 12.2801C20.4196 10.5458 19.1007 9.08452 17.4621 8.0625C15.8236 7.04049 13.9312 6.49868 12 6.49868C10.0688 6.49868 8.17642 7.04049 6.53787 8.0625C4.89931 9.08452 3.58037 10.5458 2.73096 12.2801ZM12 10C12.663 10 13.2989 10.2634 13.7678 10.7322C14.2366 11.2011 14.5 11.837 14.5 12.5C14.5 13.163 14.2366 13.7989 13.7678 14.2678C13.2989 14.7366 12.663 15 12 15C11.337 15 10.7011 14.7366 10.2322 14.2678C9.76339 13.7989 9.5 13.163 9.5 12.5C9.5 11.837 9.76339 11.2011 10.2322 10.7322C10.7011 10.2634 11.337 10 12 10ZM12 5.5C16.7171 5.5 20.7578 8.39095 22.4607 12.5C20.7578 16.6091 16.7171 19.5 12 19.5C7.28287 19.5 3.24223 16.6091 1.53928 12.5C3.24223 8.39095 7.28287 5.5 12 5.5Z"/>
                </svg>
                Hide
            </button>
        </div>
    </div>

    <!-- Share Button -->
    <div class="flex items-center justify-center py-4">
        <button onclick="showSharePortfolioPopup()" class="flex items-center text-sm sm:text-base justify-center space-x-1 sm:space-x-3 bg-brand hover:bg-hoverBrand font-semibold py-2 px-2 sm:px-6 rounded-lg">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 12.5L13.6 5.5V9C10.4 9 4 11.1 4 19.5C4 18.333 5.92 16 13.6 16V19.5L20 12.5Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Share this portfolio</span>
        </button>
    </div>
    
    <x-overlay-popup title="Add Wallet" visibilityClass="hidden wallet-popup">
        <form id="wallet-form" class="p-3 text-sm">
            <!-- Wallet Name Input -->
            <div class="flex items-center mt-6 mb-3">
                <div class="w-10 h-10 rounded-tl rounded-bl border-2 border-brandSecondary bg-brandSecondary flex items-center justify-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-inside-1_286_15421" fill="white">
                        <path d="M20.71 7.04006C21.1 6.65006 21.1 6.00006 20.71 5.63006L18.37 3.29006C18 2.90006 17.35 2.90006 16.96 3.29006L15.12 5.12006L18.87 8.87006M3 17.2501V21.0001H6.75L17.81 9.93006L14.06 6.18006L3 17.2501Z"/>
                        </mask>
                        <path d="M20.71 5.63006L20.0029 6.33717L20.0122 6.34647L20.0217 6.35552L20.71 5.63006ZM18.37 3.29006L17.6445 3.97832L17.6536 3.98786L17.6629 3.99717L18.37 3.29006ZM16.96 3.29006L17.6652 3.99909L17.6671 3.99717L16.96 3.29006ZM15.12 5.12006L14.4148 4.41103L13.7039 5.11813L14.4129 5.82717L15.12 5.12006ZM3 17.2501L2.29257 16.5433L2 16.8361V17.2501H3ZM3 21.0001H2V22.0001H3V21.0001ZM6.75 21.0001V22.0001H7.16448L7.45743 21.7068L6.75 21.0001ZM17.81 9.93006L18.5174 10.6368L19.2239 9.92974L18.5171 9.22295L17.81 9.93006ZM14.06 6.18006L14.7671 5.47295L14.0597 4.76553L13.3526 5.47327L14.06 6.18006ZM21.4171 7.74717C22.187 6.97724 22.2145 5.67899 21.3983 4.9046L20.0217 6.35552C20.0121 6.3464 20.0065 6.33672 20.0039 6.33054C20.0018 6.32529 20.0025 6.32432 20.0025 6.32756C20.0025 6.33078 20.0018 6.33366 20.0012 6.33503C20.001 6.33565 20.0015 6.33435 20.0029 6.33295L21.4171 7.74717ZM21.4171 4.92295L19.0771 2.58295L17.6629 3.99717L20.0029 6.33717L21.4171 4.92295ZM19.0955 2.6018C18.3211 1.78554 17.0228 1.81303 16.2529 2.58295L17.6671 3.99717C17.6657 3.99857 17.6644 3.99908 17.665 3.99883C17.6664 3.99828 17.6693 3.99756 17.6725 3.99756C17.6757 3.99756 17.6748 3.99826 17.6695 3.99611C17.6633 3.99359 17.6537 3.98793 17.6445 3.97832L19.0955 2.6018ZM16.2548 2.58103L14.4148 4.41103L15.8252 5.82909L17.6652 3.99909L16.2548 2.58103ZM14.4129 5.82717L18.1629 9.57717L19.5771 8.16295L15.8271 4.41295L14.4129 5.82717ZM2 17.2501V21.0001H4V17.2501H2ZM3 22.0001H6.75V20.0001H3V22.0001ZM7.45743 21.7068L18.5174 10.6368L17.1026 9.22327L6.04257 20.2933L7.45743 21.7068ZM18.5171 9.22295L14.7671 5.47295L13.3529 6.88717L17.1029 10.6372L18.5171 9.22295ZM13.3526 5.47327L2.29257 16.5433L3.70743 17.9568L14.7674 6.88685L13.3526 5.47327Z" fill="white" mask="url(#path-1-inside-1_286_15421)"/>
                    </svg>
                </div>
                <input
                    type="text"
                    name="wallet_name"
                    id="wallet_name"
                    required
                    placeholder="Give a name to the wallet"
                    class="w-full px-2 h-10 placeholder-brandSecondary rounded-tr rounded-br bg-transparent border-brandSecondary focus:outline-none focus:ring-brand"
                />
            </div>
            <div class="flex items-center mb-8">
                <div class="w-10 h-10 rounded-tl rounded-bl border-2 border-brandSecondary bg-brandSecondary flex items-center justify-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 8V5C17 4.73478 16.8946 4.48043 16.7071 4.29289C16.5196 4.10536 16.2652 4 16 4H6C5.46957 4 4.96086 4.21071 4.58579 4.58579C4.21071 4.96086 4 5.46957 4 6M4 6C4 6.53043 4.21071 7.03914 4.58579 7.41421C4.96086 7.78929 5.46957 8 6 8H18C18.2652 8 18.5196 8.10536 18.7071 8.29289C18.8946 8.48043 19 8.73478 19 9V12M4 6V18C4 18.5304 4.21071 19.0391 4.58579 19.4142C4.96086 19.7893 5.46957 20 6 20H18C18.2652 20 18.5196 19.8946 18.7071 19.7071C18.8946 19.5196 19 19.2652 19 19V16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 12V16H16C15.4696 16 14.9609 15.7893 14.5858 15.4142C14.2107 15.0391 14 14.5304 14 14C14 13.4696 14.2107 12.9609 14.5858 12.5858C14.9609 12.2107 15.4696 12 16 12H20Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <input
                    type="text"
                    name="wallet_address"
                    id="wallet_address"
                    required
                    placeholder="Enter wallet address"
                    class="w-full px-2 h-10 placeholder-brandSecondary rounded-tr rounded-br bg-transparent border-brandSecondary focus:outline-none focus:ring-brand"
                />
            </div>
            <div class="submit flex items-center justify-end w-full space-x-2">
                <button type="reset" class="flex items-center justify-center space-x-3 border border-brand bg-transparent hover:bg-hoverBrand font-semibold py-2 px-4 rounded transition-all">
                    <span>Clear Field</span>
                </button>
                <button type="submit" onclick="showWalletPopup()" class="flex items-center justify-center space-x-3 bg-brand hover:bg-hoverBrand font-semibold py-2 px-4 rounded">
                    <svg width="18" height="19" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4.5C16.411 4.5 20 8.089 20 12.5C20 16.911 16.411 20.5 12 20.5C7.589 20.5 4 16.911 4 12.5C4 8.089 7.589 4.5 12 4.5ZM12 2.5C6.477 2.5 2 6.977 2 12.5C2 18.023 6.477 22.5 12 22.5C17.523 22.5 22 18.023 22 12.5C22 6.977 17.523 2.5 12 2.5ZM17 11.5H13V7.5H11V11.5H7V13.5H11V17.5H13V13.5H17V11.5Z" fill="white"/>
                    </svg>
                    <span>Add a wallet</span>
                </button>
            </div>
        </form>
    </x-overlay-popup>
    <x-overlay-popup title="Rename Wallet" visibilityClass="hidden wallet-rename-popup">
        <form id="wallet-rename-form" class="p-3 text-sm">
            <div class="flex items-center mt-6 mb-8">
                <div class="w-10 h-10 rounded-tl rounded-bl border-2 border-brandSecondary bg-brandSecondary flex items-center justify-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 8V5C17 4.73478 16.8946 4.48043 16.7071 4.29289C16.5196 4.10536 16.2652 4 16 4H6C5.46957 4 4.96086 4.21071 4.58579 4.58579C4.21071 4.96086 4 5.46957 4 6M4 6C4 6.53043 4.21071 7.03914 4.58579 7.41421C4.96086 7.78929 5.46957 8 6 8H18C18.2652 8 18.5196 8.10536 18.7071 8.29289C18.8946 8.48043 19 8.73478 19 9V12M4 6V18C4 18.5304 4.21071 19.0391 4.58579 19.4142C4.96086 19.7893 5.46957 20 6 20H18C18.2652 20 18.5196 19.8946 18.7071 19.7071C18.8946 19.5196 19 19.2652 19 19V16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 12V16H16C15.4696 16 14.9609 15.7893 14.5858 15.4142C14.2107 15.0391 14 14.5304 14 14C14 13.4696 14.2107 12.9609 14.5858 12.5858C14.9609 12.2107 15.4696 12 16 12H20Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <input
                    type="text"
                    name="metamask"
                    id="metamask"
                    required
                    placeholder="Enter wallet address"
                    class="w-full px-2 h-10 placeholder-brandSecondary rounded-tr rounded-br bg-transparent border-brandSecondary focus:outline-none focus:ring-brand"
                />
            </div>
            <div class="submit flex items-center justify-end w-full space-x-2">
                <button type="submit" class="flex items-center justify-center space-x-3 bg-brand hover:bg-hoverBrand font-semibold py-2 px-4 rounded">
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 5.5H3C2.46957 5.5 1.96086 5.71071 1.58579 6.08579C1.21071 6.46086 1 6.96957 1 7.5V16.5C1 17.0304 1.21071 17.5391 1.58579 17.9142C1.96086 18.2893 2.46957 18.5 3 18.5H12C12.5304 18.5 13.0391 18.2893 13.4142 17.9142C13.7893 17.5391 14 17.0304 14 16.5V15.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13 3.50011L16 6.50011M17.385 5.08511C17.7788 4.69126 18.0001 4.15709 18.0001 3.60011C18.0001 3.04312 17.7788 2.50895 17.385 2.11511C16.9912 1.72126 16.457 1.5 15.9 1.5C15.343 1.5 14.8088 1.72126 14.415 2.11511L6 10.5001V13.5001H9L17.385 5.08511Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Rename wallet</span>
                </button>
            </div>
        </form>
    </x-overlay-popup>
    <x-overlay-popup visibilityClass="hidden wallet-delete-popup">
        <form id="wallet-delete-form" class="p-3 text-sm">
            <div class="flex items-center justify-center pb-10">
                <p>Are you sure you want to remove the wallet “Metmask”?</p>
            </div>
            <div class="bg-light-primaryBg dark:bg-primaryBg p-2 w-full max-w-2xl flex items-center justify-around rounded absolute bottom-[-5px] left-0 shadow">
                <button type="submit" class="flex items-center justify-center space-x-3 bg-brand hover:bg-hoverBrand font-semibold py-2 px-4 rounded">
                    <span>Confirm</span>
                </button>
                <button type="button" onclick="hideWalletDeletePopup()" class="flex items-center justify-center space-x-3 border border-brand hover:bg-hoverBrand font-semibold py-2 px-4 rounded">
                    <span>Cancel</span>
                </button>
            </div>
        </form>
    </x-overlay-popup>
    <x-overlay-popup title="Share Portfolio" visibilityClass="hidden share-portfolio-popup">
        <div id="wallet-delete-form" class="text-sm py-10">
            <div class="flex items-center justify-center space-x-2">
                <input type="checkbox" name="allow-link" id="allow-portfolio-link">
                <label for="allow-link">Allow anyone with link to view this portfolio</label>
            </div>
            <div id="copy-share-portfolio-link" class="hidden bg-light-primaryBg dark:bg-primaryBg p-2 w-full max-w-2xl flex-col items-center space-y-3 rounded absolute bottom-[-4rem] left-0 shadow">
                <p class="text-sm leading-4 text-center text-[#8C8C8C] py-2">https://genesysviewapp.com/portfolio/yyI2Z1Ivk37eb5jñiajkA9L</p>
                <button type="button" class="flex items-center justify-center space-x-3 bg-brand hover:bg-hoverBrand font-semibold py-2 px-4 rounded">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.34536 19.7666L6.40815 20.1167C6.53369 20.8169 6.76625 21.3622 7.20165 21.7985C7.69483 22.2917 8.32919 22.5238 9.17431 22.6384L6.34536 19.7666ZM6.34536 19.7666L5.99398 19.7111M6.34536 19.7666L5.99398 19.7111M5.99398 19.7111C5.22913 19.5904 4.53249 19.2006 4.02946 18.6119C3.52642 18.0232 3.25002 17.2743 3.25 16.5V10.444C3.25 8.59291 3.25103 7.17697 3.39852 6.0778L5.99398 19.7111ZM18.7666 5.34536L18.7111 4.99398C18.5904 4.22913 18.2006 3.53249 17.6119 3.02946C17.0232 2.52642 16.2743 2.25002 15.5 2.25H11.444C9.59284 2.25 8.17594 2.25103 7.0778 2.39852L18.7666 5.34536ZM18.7666 5.34536L19.1167 5.40815M18.7666 5.34536L19.1167 5.40815M19.1167 5.40815C19.8169 5.53369 20.3622 5.76625 20.7985 6.20165C21.2917 6.69483 21.5238 7.32919 21.6384 8.17431C21.749 9.0007 21.75 10.065 21.75 11.445V16.555C21.75 17.935 21.749 18.9993 21.6384 19.8257L19.1167 5.40815ZM4.49455 3.49455C3.85495 4.13514 3.54907 4.96108 3.39853 6.07773L4.49455 3.49455ZM4.49455 3.49455C5.13511 2.85498 5.961 2.5491 7.07757 2.39855L4.49455 3.49455ZM17.6128 5.2707L18.3382 5.29568L18.103 4.609C17.9172 4.06633 17.5663 3.59536 17.0995 3.26202C16.6328 2.92874 16.0735 2.74971 15.5 2.75C15.5 2.75 15.4999 2.75 15.4999 2.75C15.4998 2.75 15.4998 2.75 15.4997 2.75L11.5 2.75C9.60711 2.75 8.2135 2.75094 7.14354 2.89444L7.14343 2.89445C6.08257 3.03695 5.37966 3.31723 4.84845 3.84845C4.31719 4.3797 4.03694 5.08265 3.89445 6.14448C3.75094 7.21348 3.75 8.60715 3.75 10.5L3.75 16.4997C3.75 16.4998 3.75 16.4998 3.75 16.4999C3.75 16.4999 3.75 16.5 3.75 16.5C3.74971 17.0735 3.92874 17.6328 4.26202 18.0995C4.59536 18.5663 5.06633 18.9172 5.609 19.103L6.29568 19.3382L6.2707 18.6128C6.25006 18.0131 6.25 17.3325 6.25 16.555V11.445C6.25 10.0649 6.25103 9.00092 6.36251 8.17487L6.36261 8.17408C6.47513 7.33023 6.70887 6.69506 7.20185 6.20126C7.69513 5.70814 8.32961 5.47615 9.17462 5.36254L9.17487 5.36251C10.0009 5.25103 11.0649 5.25 12.445 5.25H15.555C16.3325 5.25 17.0131 5.25006 17.6128 5.2707ZM7.55445 6.55645L7.55381 6.55709C7.17053 6.94176 6.96309 7.4518 6.85649 8.24217L6.85641 8.2427C6.74995 9.03858 6.749 10.0801 6.749 11.501V16.501C6.749 17.9219 6.74995 18.9624 6.85641 19.7583L6.85647 19.7587C6.96294 20.5492 7.16912 21.0602 7.55445 21.4456L7.55509 21.4462C7.93976 21.8295 8.4498 22.0369 9.24017 22.1435L9.2407 22.1436C10.0366 22.2501 11.0781 22.251 12.499 22.251H15.499C16.9199 22.251 17.9604 22.2501 18.7563 22.1436L18.7567 22.1435C19.5472 22.0371 20.0582 21.8309 20.4436 21.4456L20.4442 21.4449C20.8275 21.0602 21.0349 20.5502 21.1415 19.7598L21.1416 19.7592C21.248 18.9624 21.249 17.9219 21.249 16.501V11.501C21.249 10.0802 21.2481 9.03856 21.1416 8.24362L21.1415 8.24326C21.0351 7.4528 20.8289 6.94177 20.4436 6.55645L20.4429 6.55581C20.0582 6.17253 19.5482 5.96509 18.7578 5.85849L18.7572 5.8584C17.9604 5.75195 16.9199 5.751 15.499 5.751H12.499C11.0782 5.751 10.0366 5.75194 9.24162 5.85843L9.24126 5.85847C8.4508 5.96494 7.93977 6.17112 7.55445 6.55645ZM12.445 22.75C11.0655 22.75 10.0014 22.749 9.17516 22.6385L18.8257 22.6384C17.9993 22.749 16.935 22.75 15.555 22.75H12.445ZM20.7984 21.7984C20.3053 22.2916 19.6709 22.5238 18.8257 22.6384L21.6384 19.8257C21.5238 20.6709 21.2916 21.3053 20.7984 21.7984Z" stroke="white"/>
                    </svg>
                    <span>Copy link</span>
                </button>
            </div>
        </div>
    </x-overlay-popup>

    <script>
        document.getElementById("wallet-form").addEventListener("submit", function(event) {
            event.preventDefault();  

            // Get the values of the form fields
            const nameValue = document.getElementById("wallet_name").value;
            const addressValue = document.getElementById("wallet_address").value;

            // You can now use these values for any logic or redirection
            console.log("Wallet:", nameValue);
            console.log("Address:", addressValue);
            
            window.location.href = "/portfolio/wallet";
        });
        document.getElementById("wallet-rename-form").addEventListener("submit", function(event) {
            event.preventDefault();  

            // Get the values of the form fields
            const metamaskValue = document.getElementById("metamask").value;

            // You can now use these values for any logic or redirection
            console.log("Metamask:", metamaskValue);
            
            window.location.href = "/portfolio/wallet";
        });
        document.getElementById("wallet-delete-form").addEventListener("submit", function(event) {
            event.preventDefault();  
            
            window.location.href = "/portfolio";
        });
    </script>
    <script>
        // Get references to the checkbox and the element to show/hide
        const allowLinkCheckbox = document.getElementById("allow-portfolio-link");
        const copyShareLink = document.getElementById("copy-share-portfolio-link");

        // Add an event listener to the checkbox
        allowLinkCheckbox.addEventListener("change", function() {
            if (allowLinkCheckbox.checked) {
                // Show the copy-share-link when checked
                copyShareLink.classList.remove("hidden");
                copyShareLink.classList.add("flex");
            } else {
                // Hide the copy-share-link when unchecked
                copyShareLink.classList.remove("flex");
                copyShareLink.classList.add("hidden");
            }
        });
    </script>
</x-app-layout>