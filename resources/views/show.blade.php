<x-layout>
  <h2>{{$tutor->name}}</h2>

  <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong>{{$tutor->skill}}</p>
        <p><strong>About me:</strong></p>
        <p>{{$tutor->bio}}</p>
  </div>

  <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
    <h3>Tutorial</h3>
    <p><strong>Title:</strong>{{$tutor->tutorial->title}}</p>
    <p><strong>Description:</strong>{{$tutor->tutorial->description}}</p>
  </div>

  <form action="{{route('tutors.destroy', $tutor->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn my-4">delete tutor</button>
  </form>
</x-layout>