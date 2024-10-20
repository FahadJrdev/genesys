<x-app-layout>
    <div class="max-w-md mx-auto fixed right-0 top-0 h-full overflow-x-hidden bg-purple-900 text-white p-4 rounded-xl shadow-md space-y-4">
        <!-- Header -->
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
            <img src="path/to/profile.jpg" alt="Profile" class="w-10 h-10 rounded-full">
            <div class="text-lg font-semibold">TrumpBeatBiden</div>
            </div>
            <div class="text-xl">...</div> <!-- Three dot menu or other icon -->
        </div>

        <!-- Token Info -->
        <div class="text-center">
            <div class="font-bold text-xl">TrumBBp / SOL</div>
            <div class="flex justify-center space-x-2 text-yellow-400 text-sm">
            <span>5h</span>
            <span>#4</span>
            </div>
            <div class="flex justify-center space-x-2 text-white mt-2">
            <span class="bg-gray-800 p-1 rounded">Solana</span>
            <span class="bg-gray-800 p-1 rounded">Ethereum</span>
            </div>
        </div>

        <!-- Progress Bar -->
        <div class="space-y-2">
            <div class="flex justify-between text-sm">
            <span>79.2%</span>
            <span>397.52 of 500 SOL</span>
            </div>
            <div class="w-full bg-gray-800 rounded-full h-2.5">
            <div class="bg-pink-500 h-2.5 rounded-full" style="width: 79.2%;"></div>
            </div>
            <div class="text-sm underline cursor-pointer">What's this?</div>
        </div>

        <!-- Price Info -->
        <div class="grid grid-cols-2 gap-2 text-center">
            <div>
            <div class="text-xs">PRICE</div>
            <div class="font-bold">$0.0001125</div>
            </div>
            <div>
            <div class="text-xs">MARKET CAP</div>
            <div class="font-bold">$61K</div>
            </div>
        </div>

        <!-- Buy/Sell Section -->
        <div class="bg-purple-800 p-4 rounded-lg">
            <div class="flex justify-between">
            <button class="bg-green-600 py-1 px-4 rounded-md">BUY</button>
            <button class="bg-red-600 py-1 px-4 rounded-md">SELL</button>
            </div>

            <!-- SOL Input -->
            <div class="mt-4">
            <div class="flex items-center justify-between">
                <span>SOL</span>
                <input type="number" value="0.1" class="bg-purple-900 p-2 rounded-md text-right w-24" />
            </div>
            <div class="flex justify-between mt-2 text-sm space-x-1">
                <button class="bg-gray-700 py-1 px-3 rounded-md">0.1</button>
                <button class="bg-gray-700 py-1 px-3 rounded-md">0.25</button>
                <button class="bg-gray-700 py-1 px-3 rounded-md">0.5</button>
                <button class="bg-gray-700 py-1 px-3 rounded-md">1</button>
                <button class="bg-gray-700 py-1 px-3 rounded-md">2</button>
                <button class="bg-gray-700 py-1 px-3 rounded-md">5</button>
            </div>
            </div>

            <!-- Slippage -->
            <div class="mt-4">
            <div class="flex justify-between items-center">
                <span>Slippage%</span>
                <input type="number" value="15" class="bg-purple-900 p-2 rounded-md text-right w-24" />
            </div>
            <div class="flex justify-between mt-2 text-sm space-x-1">
                <button class="bg-gray-700 py-1 px-3 rounded-md">5%</button>
                <button class="bg-gray-700 py-1 px-3 rounded-md">10%</button>
                <button class="bg-gray-700 py-1 px-3 rounded-md">15%</button>
                <button class="bg-gray-700 py-1 px-3 rounded-md">20%</button>
                <button class="bg-gray-700 py-1 px-3 rounded-md">25%</button>
                <button class="bg-gray-700 py-1 px-3 rounded-md">50%</button>
            </div>
            </div>

            <!-- Connect Wallet -->
            <div class="mt-4 text-center">
            <button class="bg-pink-600 py-2 px-6 rounded-md w-full">CONNECT WALLET</button>
            <div class="text-xs mt-1">You receive min. 120293.91 TrumpBP</div>
            </div>
        </div>

        <!-- Performance and Volumes -->
        <div class="grid grid-cols-2 gap-2 text-center text-xs mt-4">
            <div>
            <div>5M</div>
            <div class="text-red-400">-0.39%</div>
            </div>
            <div>
            <div>1H</div>
            <div class="text-red-400">-2.06%</div>
            </div>
            <div>
            <div>6H</div>
            <div class="text-green-400">633%</div>
            </div>
            <div>
            <div>24H</div>
            <div class="text-green-400">633%</div>
            </div>
        </div>

        <!-- Volume and Market Info -->
        <div class="grid grid-cols-2 gap-2 text-center mt-4 text-xs">
            <div>
            <div>TXNS</div>
            <div class="font-bold">171</div>
            </div>
            <div>
            <div>VOLUME</div>
            <div class="font-bold">$99K</div>
            </div>
            <div>
            <div>BUY</div>
            <div class="font-bold">135</div>
            </div>
            <div>
            <div>SELL</div>
            <div class="font-bold">36</div>
            </div>
            <div>
            <div>BUY VOL</div>
            <div class="font-bold">50K</div>
            </div>
            <div>
            <div>SELL VOL</div>
            <div class="font-bold">36K</div>
            </div>
            <div>
            <div>MAKERS</div>
            <div class="font-bold">67</div>
            </div>
            <div>
            <div>BUYERS</div>
            <div class="font-bold">567</div>
            </div>
            <div>
            <div>SELLERS</div>
            <div class="font-bold">25</div>
            </div>
        </div>

        <!-- Alerts and Watchlist -->
        <div class="flex justify-between mt-4">
            <button class="bg-pink-600 py-1 px-4 rounded-md">Alerts</button>
            <button class="bg-pink-600 py-1 px-4 rounded-md">Add watchlist</button>
        </div>

        <!-- Token Created Info -->
        <div class="text-xs space-y-2">
            <div class="flex justify-between">
                <span>Token created</span>
                <span>4h 44m ago</span>
            </div>
        </div>

        <!-- Creator, Mummat, Bonding Curve -->
        <div class="space-y-2">
            <div class="flex justify-between items-center bg-purple-800 p-2 rounded-lg">
                <span>Creator</span>
                <button class="bg-gray-800 px-2 py-1 text-sm rounded-full">IUHvgvs...ng5 EXP 🔒</button>
            </div>
            <div class="flex justify-between items-center bg-purple-800 p-2 rounded-lg">
                <span>Mummat</span>
                <button class="bg-gray-800 px-2 py-1 text-sm rounded-full">IUHvgvs...ng5 EXP 🔒</button>
            </div>
            <div class="flex justify-between items-center bg-purple-800 p-2 rounded-lg">
                <span>Bonding curve</span>
                <button class="bg-gray-800 px-2 py-1 text-sm rounded-full">IUHvgvs...ng5 EXP 🔒</button>
            </div>
        </div>

        <!-- Quick Intel -->
        <div class="bg-purple-800 p-3 rounded-lg flex justify-between items-center">
            <span>Quick Intel</span>
            <span class="text-gray-400 text-sm">Not available</span>
        </div>
        <div class="text-xs text-gray-400 text-center">
            Warning! Audits may not be 100% accurate! <span class="underline cursor-pointer">More</span>
        </div>

        <!-- Stats Section -->
        <div class="flex justify-around text-center mt-2">
            <div>
                <div class="text-pink-500">64</div>
                <div class="text-xs">🔥</div>
            </div>
            <div>
                <div class="text-red-500">44</div>
                <div class="text-xs">💥</div>
            </div>
            <div>
                <div class="text-purple-400">5</div>
                <div class="text-xs">💧</div>
            </div>
            <div>
                <div class="text-yellow-500">10</div>
                <div class="text-xs">⚡</div>
            </div>
        </div>

        <!-- Profile Section -->
        <div class="bg-purple-800 p-4 rounded-lg text-center">
            <img src="path/to/profile.jpg" alt="Profile Image" class="w-16 h-16 mx-auto rounded-full">
            <div class="text-xl font-semibold mt-2">TrumpBeatBiden</div>
            <div class="flex justify-center space-x-2 mt-2">
                <button class="bg-gray-700 px-4 py-2 rounded-full text-xs">🌐 Website</button>
                <button class="bg-gray-700 px-4 py-2 rounded-full text-xs">❌ Twitter</button>
            </div>
            <button class="bg-blue-600 px-4 py-2 rounded-full text-xs mt-2">💬 Telegram</button>
        </div>

        <!-- Description Section -->
        <div class="text-xs mt-4 text-gray-300">
            <p>
            Lorem ipsum dolor sit amet consectetur. Magna tristique egestas massa egestas semper consectetur ultrices. 
            Ridiculus nunc tempus eu mauris egestas lectus pharetra fermentum vitae. Elementum sagittis est sapien in elementum sed.
            </p>
            <p class="mt-2">
            Lorem ipsum dolor sit amet consectetur. Magna tristique egestas massa egestas semper consectetur ultrices. 
            Ridiculus nunc tempus eu mauris egestas lectus pharetra fermentum vitae. Elementum sagittis est sapien in elementum sed.
            </p>
        </div>

        <!-- Token Info -->
        <div class="bg-purple-800 p-4 rounded-lg mt-4">
            <div class="text-center mb-2 text-xs">This token was created on</div>
            <div class="bg-gray-700 py-2 rounded-full text-center">Solana</div>
        </div>

        <!-- Swap Section -->
        <div class="bg-purple-800 p-4 rounded-lg mt-4">
            <div class="flex justify-between items-center">
                <input type="number" value="1" class="bg-purple-900 p-2 rounded-md text-right w-20" />
                <span>Mummat</span>
                <button class="text-2xl">🔁</button>
            </div>

            <div class="mt-4">
                <input type="number" value="0.0001414" class="bg-purple-900 p-2 rounded-md text-right w-full" />
                <div class="flex justify-between text-sm mt-2">
                    <button class="bg-gray-700 px-4 py-1 rounded-full">USD</button>
                    <button class="bg-gray-700 px-4 py-1 rounded-full">SOL</button>
                </div>
            </div>

            <div class="mt-4 text-center">
                <button class="bg-pink-600 py-2 px-6 rounded-md w-full">Embed this chart</button>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center text-xs text-gray-400 mt-4">
            Crypto charts by TradingView
        </div>

    </div>
</x-app-layout>