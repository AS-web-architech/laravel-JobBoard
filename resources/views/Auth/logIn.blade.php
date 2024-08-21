<x-login>
    <div class="space-y-4">
        <div class="flex justify-center">

            <img src="{{asset('images/job.png')}}" alt="Website Logo" class="h-20 w-30 mb-4 ">
        </div>
        @if(session()->has('message'))
        <div id="alert-3" class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Congratulations!</span> {{ session()->get('message') }}.
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @endif
        <form method="post" action="{{ route('user.login') }}">
            @csrf
            <div>
                  <x-form-label for='email'>Email:</x-form-label>
                  <x-form-input id="email" type="email" name="email" :value="old('email')" autofocus/>
                  
              </div>
               <x-form-error name="email"/>
              <div>
                  <x-form-label for='password'>Password:</x-form-label>
                  <x-form-input id="password" type="password" name="password" autofocus/>
                  
              </div>
               <x-form-error name="password"/>
            <div class="flex items-center justify-between mt-4">
                <!-- <label for="remember_me" class="inline-flex items-center">
                    <input type="checkbox" name="remember" id="remember_me" class="text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label> -->
                
                <a href="{{ route('create.user') }}" class="text-sm text-gray-600 hover:underline hover:text-blue-600">create account</a>
                <a href="" class="text-sm text-gray-600 hover:underline hover:text-blue-600">Forgot Password ?</a>
            </div>
            <div>
                <button type="submit" class="w-full px-4 py-2 mt-4 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-200">Login</button>
            </div>

            <div class="flex justify-center mt-4">
                <a href="/" class=" text-gray-600 ">Back</a>
            </div>
        </form>
    </div>
    <script is:inline src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

</x-login>
