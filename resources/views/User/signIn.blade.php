<x-login>
    <div class="space-y-4">
        <div class="flex justify-center">

            <img src="{{asset('images/job.png')}}" alt="Website Logo" class="h-20 w-30 mb-4 ">
        </div>
        <form method="POST" action="">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" required autofocus
                       class="block w-full px-4 py-2 mt-2 border rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required
                       class="block w-full px-4 py-2 mt-2 border rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400">
            </div>
            <div class="flex items-center justify-between mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input type="checkbox" name="remember" id="remember_me" class="text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
                <a href="{{route('users.index')}}" class="text-sm text-gray-600 hover:underline">create account</a>
            </div>
            <div>
                <button type="submit" class="w-full px-4 py-2 mt-4 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-200">Login</button>
            </div>
            <div class="flex justify-center mt-4">
                <a href="/" class=" text-gray-600 ">Back</a>
            </div>
        </form>
    </div>
</x-login>
