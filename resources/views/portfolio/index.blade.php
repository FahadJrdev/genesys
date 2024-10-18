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
    </script>
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
            <button onclick="showWalletPopup()" class="mx-auto flex items-center justify-center space-x-3 bg-brand hover:bg-hoverBrand font-semibold py-2 px-6 rounded-lg">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 4.5C16.411 4.5 20 8.089 20 12.5C20 16.911 16.411 20.5 12 20.5C7.589 20.5 4 16.911 4 12.5C4 8.089 7.589 4.5 12 4.5ZM12 2.5C6.477 2.5 2 6.977 2 12.5C2 18.023 6.477 22.5 12 22.5C17.523 22.5 22 18.023 22 12.5C22 6.977 17.523 2.5 12 2.5ZM17 11.5H13V7.5H11V11.5H7V13.5H11V17.5H13V13.5H17V11.5Z" fill="white"/>
                </svg>
                <span>Add a wallet</span>
            </button>
        </div>
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
    </script>
</x-app-layout>