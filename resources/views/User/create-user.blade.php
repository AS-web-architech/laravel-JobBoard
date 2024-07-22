<x-login>
<form method="POST" action="/users">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">User Name / Company Name:</label>
                <input id="name" type="text" name="name" required autofocus
                       class="block w-full px-4 py-2 mt-2 border rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email :</label>
                <input id="email" type="email" name="email" required autofocus
                       class="block w-full px-4 py-2 mt-2 border rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password :</label>
                <input id="password" type="password" name="password" required
                       class="block w-full px-4 py-2 mt-2 border rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Confirm Password :</label>
                <input id="password" type="password" name="password" required
                       class="block w-full px-4 py-2 mt-2 border rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400">
            </div>
            <div class="sm:col-span-3">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">User Role</label>
          <div class="mt-2">
            <select id="userRole" name="userRole" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <!-- <option>Select your Role</option> -->
              <option>Job Seeker</option>
              <option>Employer</option>
            </select>
          </div>
        </div>
            <div>
                <button type="submit" class="w-full px-4 py-2 mt-4 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-200">Create Account</button>
            </div>
            <div class="flex justify-center mt-4">
                <a href="/signIn" class=" text-gray-600 ">Back</a>
            </div>
        </form>
</x-login>