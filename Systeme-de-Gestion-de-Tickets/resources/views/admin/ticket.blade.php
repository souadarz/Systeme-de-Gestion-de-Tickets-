<x-app-layout>

    <section class="bg-gray-100">
        <div class="flex min-h-screen">
            <button
                onclick="toggleSidebar()"
                class="lg:hidden fixed top-4 left-4 z-50 bg-gray-900 text-white p-2 rounded-lg">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>



            <x-sidebar/>
            <!-- Main Content -->
            <!-- <div class="flex-1"> -->
                <!-- Top Navigation -->
                <x-topNav></x-topNav>
            <div class="bg-white rounded-lg shadow">
                    <div class="p-6">
                        <table class="min-w-full">
                            <thead>
                                <tr class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <th class="p-3">Ticket</th>
                                    <th class="p-3">Titre</th>
                                    <th class="p-3">description</th>
                                    <th class="p-3">categorie</th>
                                    <th class="p-3">Statut</th>
                                    <th class="p-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <!-- Ticket 1 -->
                                <tr class="hover:bg-gray-50">
                                    <td class="p-3">
                                        <div class="flex items-center">
                                            <img src="/api/placeholder/40/40" alt="Thomas Robert" class="w-10 h-10 rounded-full">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Thomas Robert</div>
                                                <div class="text-sm text-gray-500">ID: #45789</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-3">
                                        <div class="text-sm text-gray-900">thomas@email.com</div>
                                        <div class="text-sm text-gray-500">06 12 34 56 78</div>
                                    </td>
                                    <td class="p-3">
                                        <div class="text-sm text-gray-900">2 comptes</div>
                                        <div class="text-sm text-gray-500">Courant, Épargne</div>
                                    </td>
                                    <td class="p-3">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Actif
                                        </span>
                                    </td>
                                    <td class="p-3">
                                        <div class="text-sm text-gray-900">Il y a 2 heures</div>
                                        <div class="text-sm text-gray-500">Virement sortant</div>
                                    </td>
                                    <td class="p-3">
                                        <div class="flex space-x-2">
                                            <button class="text-blue-600 hover:text-blue-900">
                                                <i data-lucide="eye" class="w-5 h-5"></i>
                                            </button>
                                            <button class="text-gray-600 hover:text-gray-900">
                                                <i data-lucide="edit" class="w-5 h-5"></i>
                                            </button>
                                            <button class="text-red-600 hover:text-red-900">
                                                <i data-lucide="lock" class="w-5 h-5"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
</x-app-layout>