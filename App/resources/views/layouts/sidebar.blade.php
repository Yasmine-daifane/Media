<!-- resources/views/components/sidebar.blade.php -->
<div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
    <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
        <!-- Loading screen -->
        <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-indigo-800">
            Loading.....
        </div>

        <!-- Sidebar -->
        <div class="flex flex-shrink-0 transition-all">
            <div x-show="isSidebarOpen" @click="isSidebarOpen = false" class="fixed inset-0 z-10 bg-black bg-opacity-50 lg:hidden"></div>
            <div x-show="isSidebarOpen" class="fixed inset-y-0 z-10 w-16 bg-white"></div>

            <!-- Mobile bottom bar -->
            <nav aria-label="Options" class="fixed inset-x-0 bottom-0 flex flex-row-reverse items-center justify-between px-4 py-2 bg-white border-t border-indigo-100 sm:hidden shadow-t rounded-t-3xl">
                <button @click="isSidebarOpen = !isSidebarOpen; currentSidebarTab = 'linksTab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2" :class="isSidebarOpen ? 'text-white bg-indigo-600' : 'text-gray-500 bg-white'">
                    <span class="sr-only">Toggle sidebar</span>
                    Menu
                </button>
                <a href="#">
                    <img class="w-10 h-auto" src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/main/public/assets/images/logo.png" alt="K-UI"/>
                </a>
            </nav>

            <!-- Left mini bar -->
            <nav aria-label="Options" class="z-20 flex-col items-center flex-shrink-0 hidden w-16 py-4 bg-white border-r-2 border-indigo-100 shadow-md sm:flex rounded-tr-3xl rounded-br-3xl">
                <div class="flex-shrink-0 py-4">
                    <a href="#">
                        <img class="w-10 h-auto" src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/main/public/assets/images/logo.png" alt="K-UI"/>
                    </a>
                </div>
                <div class="flex flex-col items-center flex-1 p-2 space-y-4">
                    <!-- Menu button -->
                    <button @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2" :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-indigo-600' : 'text-gray-500 bg-white'">
                        <span class="sr-only">Toggle sidebar</span>
                        <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                        </svg>
                    </button>
                    <!-- Messages button -->
                    <button @click="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'messagesTab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2" :class="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? 'text-white bg-indigo-600' : 'text-gray-500 bg-white'">
                        <span class="sr-only">Toggle message panel</span>
                        <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                    </button>
                    <!-- Notifications button -->
                    <button @click="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'notificationsTab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2" :class="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? 'text-white bg-indigo-600' : 'text-gray-500 bg-white'">
                        <span class="sr-only">Toggle notifications panel</span>
                        <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </button>
                </div>
            </nav>

            <div x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="isSidebarOpen" class="fixed inset-y-0 left-0 z-10 flex-shrink-0 w-64 bg-white border-r-2 border-indigo-100 shadow-lg sm:left-16 rounded-tr-3xl rounded-br-3xl sm:w-72 lg:static lg:w-64">
                <nav x-show="currentSidebarTab == 'linksTab'" aria-label="Main" class="flex flex-col h-full">
                    <!-- Logo -->
                    <div class="flex items-center justify-center flex-shrink-0 py-10">
                        <a href="#">
                            <img class="w-24 h-auto" src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/main/public/assets/images/logo.png" alt="K-UI"/>
                        </a>
                    </div>

                    <!-- Links -->
                    <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
                        <!-- All Services link -->
                        <a @click.prevent="navigateTo('{{ route('services.index') }}', 'linksTab')" class="flex items-center justify-between w-full space-x-2 text-gray-700 rounded-lg hover:bg-gray-200 cursor-pointer">
                            <div class="flex items-center space-x-2">
                                <span aria-hidden="true" class="p-2 bg-gray-200 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11V5h-2v2H7v2h2v2h2V9h2V7h-2z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span>All Services</span>
                            </div>
                        </a>

                        <!-- New submenu toggle link -->
                        <a @click.prevent="toggleSubmenu()" class="flex items-center justify-between w-full space-x-2 text-gray-700 rounded-lg hover:bg-gray-200 cursor-pointer">
                            <div class="flex items-center space-x-2">
                                <span aria-hidden="true" class="p-2 bg-gray-200 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11V5h-2v2H7v2h2v2h2V9h2V7h-2z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span>Services Menu</span>
                            </div>
                        </a>

                        <!-- Submenu for Services -->
                        <div x-show="isSubmenuOpen" class="pl-4 mt-2 space-y-2">
                            @foreach ($services as $service)
                                <a href="{{ route('services.packs', $service->id) }}" class="flex items-center space-x-2 text-black-700 rounded-lg hover:bg-gray-200">
                                    <span aria-hidden="true" class="p-2 bg-gray-200 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11V5h-2v2H7v2h2v2h2V9h2V7h-2z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span>{{ $service->title }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </nav>

                <section x-show="currentSidebarTab == 'messagesTab'" class="px-4 py-6">
                    <!-- Messages content -->
                </section>

                <section x-show="currentSidebarTab == 'notificationsTab'" class="px-4 py-6">
                    <!-- Notifications content -->
                </section>
            </div>
        </div>
    </div>
</div>

<script>
    function setup() {
        return {
            loading: true,
            isSubmenuOpen: false, // Track submenu state
            isSidebarOpen: true, // Keep sidebar open
            currentSidebarTab: 'linksTab', // Track the current tab
            watchScreen() {
                this.isSidebarOpen = window.innerWidth >= 1024;
            },
            navigateTo(route, tab) {
                this.currentSidebarTab = tab; // Set the active tab
                // Use setTimeout to allow any animations before navigating
                setTimeout(() => {
                    window.location.href = route; // Navigate to the route
                }, 200); // Adjust the delay as needed
            },
            toggleSubmenu() {
                this.isSubmenuOpen = !this.isSubmenuOpen; // Toggle submenu
            },
        };
    }
</script>