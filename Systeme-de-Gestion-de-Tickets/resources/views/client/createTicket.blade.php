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
<body class="bg-gray-100">
    <!-- Sidebar (same as your existing sidebar) -->
    <!-- {# <div class="fixed left-0 top-0 w-64 h-full bg-white p-4 z-50 shadow-lg"> -->
        <!-- ... existing sidebar code ... -->
    <!-- </div> #} -->
   <x-sidebar/>
    <!-- Main Content -->
    <div class="ml-64 p-8">
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-xl font-semibold">Add New Ticket</h2>
            </div>
            {% if errors %}
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    {% for field, messages in errors %}
                        {% for message in messages %}
                            <p class="text-sm">{{ field|capitalize }}: {{ message }}</p>
                        {% endfor %}
                    {% endfor %}
                </div>
            {% endif %}
            <div class="p-6">
                <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
                    <div class="grid grid-cols-2 gap-6">
        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">title<span class="text-red-500">*</span></label>
                            <input type="text" name="title" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"-
                                >
                        </div>

                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Website<span class="text-red-500">*</span></label>
                            <input type="url" name="description" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                      
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Logo Image<span class="text-red-500">*</span></label>
                            <input type="file" name="status"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Cover Image  <span class="text-red-500">*</span></label>
                            <input type="file" name="categorie" 
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                    {% if errors %}
                        <div class="errors bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                            {% for field, error in errors %}
                                <p>{{ field }}: {{ error }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}

                    <!-- Submit Button -->
                    <div class="flex justify-end space-x-4">
                        <a href="/admin/companies" class="px-6 py-2 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50">
                            Cancel
                        </a>
                        <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                            Add Ticket
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>









