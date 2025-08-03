<x-layout>
  <h2>{{$tutor->name}}</h2>

  <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong>{{$tutor->skill}}</p>
        <p><strong>About me:</strong></p>
        <p>{{$tutor->bio}}</p>
  </div>
</x-layout>