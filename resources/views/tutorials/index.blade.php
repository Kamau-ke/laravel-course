<x-layout>
  


<ul>
  @foreach ($tutors as $tutor)
       <li>
        <x-card href="{{ route('tutors.show', $tutor->id)  }}" :highlight="$tutor->skill >50">
       
          <div>
               <h3>{{$tutor->name}}</h3>
               <p>{{$tutor->tutorial->title}}</p>
          </div>
         
        </x-card>
      </li>
  @endforeach
 
</ul>
    {{$tutors->links()}}
</x-layout>