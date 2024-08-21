
<x-login>

<form method="POST" action="{{ route('user.store') }}">
            @csrf
              <div>
                  <x-form-label for='title'>User Name / Company Name:</x-form-label>
                  <x-form-input id="name" type="text" name="name" autofocus/>
                  
              </div>
               <x-form-error name="name"/>
              <div>
                  <x-form-label for='email'>Email:</x-form-label>
                  <x-form-input id="email" type="email" name="email" autofocus/>
                  
              </div>
               <x-form-error name="email"/>
              <div>
                  <x-form-label for='password'>Password:</x-form-label>
                  <x-form-input id="password" type="password" name="password" autofocus/>
                  
              </div>
               <x-form-error name="password"/>  
              <div>
                  <x-form-label for='password_confirmation'>Confirm Password:</x-form-label>
                  <x-form-input id="password_confirmation" type="password_confirmation" name="password_confirmation" autofocus/>
                  
              </div>
               <x-form-error name="confirm_password"/>
              
            <div class="sm:col-span-3">
              
                <label for='userRole' class="block text-sm font-medium leading-6 text-gray-900">User Role:</label>
                <div class="mt-2">
                  <select id='type' name='userRole'  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    <option>Select your Role</option>
                    <option value="jobSeeker">Job Seeker</option>
                    <option value="employer">Employer</option>
                  </select>
                </div>
            </div>
            <x-form-error name="userRole"/>
            <div>
                <button type="submit" class="w-full px-4 py-2 mt-4 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-200">Create Account</button>
            </div>
            <div class="flex justify-center mt-4">
                <a href="{{ route('loginPage') }}" class=" text-gray-600 ">Back</a>
            </div>
        </form>
</x-login>