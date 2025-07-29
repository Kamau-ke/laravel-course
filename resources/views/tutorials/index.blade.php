<x-layout>
  


<ul>
  @foreach ($tutorials as $tutorial)
       <li>
        <x-card href="/tutorial/{{ $tutorial['id'] }}" :highlight="$tutorial['duration'] >1">
          <h3>{{$tutorial["title"]}}</h3>
          <p>{{$tutorial["tutor"]}}</p>
        </x-card>
      </li>
  @endforeach
 
</ul>
    
</x-layout>