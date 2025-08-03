<x-layout>
  


<ul>
  @foreach ($tutors as $tutor)
       <li>
        <x-card href="{{ route('tutors.show', $tutor->id)  }}" :highlight="$tutor->skill >50">
          <h3>{{$tutor->name}}</h3>
         
        </x-card>
      </li>
  @endforeach
 
</ul>
    {{$tutors->links()}}
</x-layout>