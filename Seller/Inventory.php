<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Seller Dashboard</title>
</head>
<body>
    <div class="flex p-8 space-x-8">
    <div class=" bg-green-300 text-black p-4">
        <div class="bg-green-300 text-black h-screen w-64 flex flex-col">
    <div class="p-4">
        <h2 class="text-2xl font-semibold">Dashboard</h2>
    </div>
    <ul class="flex flex-col space-y-2 p-4">
        <li class="hover:bg-gray-700 p-2 rounded-md cursor-pointer">
            <a href="#" class="flex items-center space-x-2">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 0H2C.9 0 0 .9 0 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8l-6-6zm-2 18H4v-2h6v2zm0-4H4v-2h6v2zm0-4H4V8h6v2zm5-6l-5-5v5h5zm-2 0H2V2h7v4z"/>
                </svg>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="hover:bg-gray-700 p-2 rounded-md cursor-pointer">
            <a href="#" class="flex items-center space-x-2">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2H2V2zm18 5H0v11a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7zM2 14h16V8H2v6z"/>
                </svg>
                <span>Inventory</span>
            </a>
        </li>
        <li class="hover:bg-gray-700 p-2 rounded-md cursor-pointer">
            <a href="#" class="flex items-center space-x-2">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2H2V2zm18 5H0v11a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7zM2 14h16V8H2v6z"/>
                </svg>
                <span>Orders</span>
            </a>
        </li>
        <li class="hover:bg-gray-700 p-2 rounded-md cursor-pointer">
            <a href="#" class="flex items-center space-x-2">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2H2V2zm18 5H0v11a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7zM2 14h16V8H2v6z"/>
                </svg>
                <span>Sales Report</span>
            </a>
        </li>
        <li class="hover:bg-gray-700 p-2 rounded-md cursor-pointer">
            <a href="#" class="flex items-center space-x-2">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2H2V2zm18 5H0v11a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7zM2 14h16V8H2v6z"/>
                </svg>
                <span>Sold History</span>
            </a>
        </li>
      
    </ul>
</div>
        
    </div>
    
    <div class="flex-1 bg-white p-4 shadow-md">
    <h2 class="text-xl font-semibold mb-4">Category</h2>
    
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Products</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">Cactus</td>
                <td class="px-6 py-4 whitespace-nowrap">28</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Update</button>
                    <button class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-md ml-2">Delete</button>
                </td>
            </tr>
            
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">Succulent</td>
                <td class="px-6 py-4 whitespace-nowrap">50</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Update</button>
                    <button class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-md ml-2">Delete</button>
                </td>
            </tr>
           <tr>
                <td class="px-6 py-4 whitespace-nowrap">Snake Plant</td>
                <td class="px-6 py-4 whitespace-nowrap">10</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Update</button>
                    <button class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-md ml-2">Delete</button>
                </td>
            </tr>
           
        </tbody>
    </table>
</div>
</div>








</body>
</html>