<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Ticket</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<!-- <body class="bg-gray-100 flex"> -->
<section class="bg-gray-100">

  
    <!-- <div id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-gray-900 text-white h-full p-6">
        <h1 class="text-2xl font-bold">Gestion Tickets</h1>
        <nav class="mt-6 space-y-2">
            <a href="{{ route('client.dashboard') }}" class="flex items-center px-4 py-3 bg-gray-800 rounded-md">
                <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
            </a>
            <a href="{{ route('client.tickets') }}" class="flex items-center px-4 py-3 hover:bg-gray-800 rounded-md">
                <i class="fas fa-ticket-alt mr-3"></i> Mes Tickets
            </a>
        </nav>
    </div> -->

    <x-topNav></x-topNav>
    <!-- Main Content -->
    <x-sidebar />
    <main class="ml-64 p-8 w-full">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold border-b pb-4">Add New Ticket</h2>

            <form action="{{ route('store.ticket') }}" method="POST" enctype="multipart/form-data" class="space-y-6 mt-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Title <span class="text-red-500">*</span></label>
                    <input type="text" name="title"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        @error('title')
                           <div><p class="mt-1 text-sm text-red-700">{{ $message }}</p></div>
                        @enderror
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Description <span class="text-red-500">*</span></label>
                    <textarea name="description"  
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"></textarea>
                        @error('description')
                           <div><p class="mt-1 text-sm text-red-700">{{ $message }}</p></div>
                        @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Category <span class="text-red-500">*</span></label>
                    <select name="category_id"  
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        <option value="">Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div><p class="mt-1 text-sm text-red-700">{{ $message }}</p></div>
                    @enderror
                </div>

                <div class="flex justify-end space-x-4">
                    <a href="{{ route('client.tickets') }}" class="px-6 py-2 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50">
                        Cancel
                    </a>
                    <button type="submit" class="px-6 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-700">
                        Add Ticket
                    </button>
                </div>
            </form>
        </div>
    </main>
</section>
</body>
</html>
