<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
   
        @foreach($job as $jobs)
           <li>
           <a href="/jobs/{{$jobs['id']}}">
               {{$jobs['Title']}}
           </a> 
         </li>
        @endforeach
    
</x-layout>