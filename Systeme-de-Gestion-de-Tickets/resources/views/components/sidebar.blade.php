<div class="flex min-h-screen">
    <div id="sidebar" class="fixed inset-y-0 left-0 transform -translate-x-full lg:translate-x-0 lg:relative lg:flex w-64 bg-gray-900 transition-transform duration-200 ease-in-out z-30">
        <div class="flex flex-col h-full">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-bold text-white"></h1>
                    <button onclick="toggleSidebar()" class="lg:hidden text-white">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>
                </div>
                <p class="text-gray-400 text-sm">
                    <!-- Gestion de tickets  -->
                </p>
            </div>

            <!-- Navigation -->
            <nav class="mt-6 flex-grow">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center w-full px-6 py-3 text-white bg-gray-800">
                    <i data-lucide="layout-dashboard" class="w-5 h-5 mr-3"></i>
                    <span>Dashboard</span>
                </a>
                @if(auth()->user()->role === 'admin')
                <a href="#" class="flex items-center w-full px-6 py-3 text-gray-400 hover:text-white hover:bg-gray-800">
                    <i data-lucide="users" class="w-5 h-5 mr-3"></i>
                    <span>Users</span>
                </a>

                <a href="{{ route('admin.tickets') }}" class="flex items-center w-full px-6 py-3 text-gray-400 hover:text-white hover:bg-gray-800">
                    <i data-lucide="credit-card" class="w-5 h-5 mr-3"></i>
                    <span>tickets</span>
                </a>
                @elseif(auth()->user()->role === 'client')
                <a href="{{ route('client.tickets') }}" class="flex items-center w-full px-6 py-3 text-gray-400 hover:text-white hover:bg-gray-800">
                    <i data-lucide="credit-card" class="w-5 h-5 mr-3"></i>
                    <span>Mes tickets</span>
                </a>
                @endif

                <a href="#" class="flex items-center w-full px-6 py-3 text-gray-400 hover:text-white hover:bg-gray-800">
                    <i data-lucide="bell" class="w-5 h-5 mr-3"></i>
                    <span>Notifications</span>
                </a>
                <a href="#" class="flex items-center w-full px-6 py-3 text-gray-400 hover:text-white hover:bg-gray-800">
                    <i data-lucide="settings" class="w-5 h-5 mr-3"></i>
                    <span>Paramètres</span>
                </a>
            </nav>
        </div>
    </div>

