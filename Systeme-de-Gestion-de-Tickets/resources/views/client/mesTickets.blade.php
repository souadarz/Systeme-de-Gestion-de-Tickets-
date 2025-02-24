<x-app-layout>

    <section class="bg-gray-100">

        <x-sidebar />
        <x-topNav></x-topNav>
        <div class="flex justify-end">
            <a href="/client/createTicket">
                <button class ="m-4 bg-gray-900 rounded-lg px-8 py-4 text-white hover:bg-gray-500">New Ticket</button>
            </a>
        </div>
            <div class="bg-white rounded-lg shadow">
                <div class="p-6">
                    <table class="min-w-full">
                        <thead>
                            <tr class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <th class="p-3">Title</th>
                                <!-- <th class="p-3">user</th> -->
                                <th class="p-3">description</th>
                                <th class="p-3">category</th>
                                <th class="p-3">Statut</th>
                                <th class="p-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <!-- Tickets -->
                        @foreach($tickets as $ticket)
                            <tr class="hover:bg-gray-50">
                                <td class="p-3">
                                    <div class="flex items-center">
                                        <!-- <img src="/api/placeholder/40/40" alt="Thomas Robert" class="w-10 h-10 rounded-full"> -->
                                        <div class="ml">
                                            <div class="text-sm font-medium text-gray-900">{{ $ticket->title }}</div>
                                        </div>
                                    </div>
                                </td>
                                <!-- <td class="p-3">
                                    <div class="text-sm text-gray-900">{{ $ticket->user->name }}</div>
                                </td> -->
                                <td class="p-3">
                                    <div class="text-sm text-gray-900">{{ $ticket->description }}</div>
                                   
                                </td>
                                <td class="p-3">
                                    <div class="text-sm text-gray-900">{{ $ticket->category->name }}</div>
                                </td>
                                <td class="p-3">
                                    <div class="text-sm text-gray-900">{{ $ticket->status }}</div>
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
                        @endforeach
                        </tbodys>
                    </table>

                </div>
            </div>
        </div>
        
</x-app-layout>