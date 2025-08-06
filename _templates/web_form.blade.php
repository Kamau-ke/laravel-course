<form action="" method="">
  <h2>Create a New Tutor</h2>

  <!-- Tutor Name -->
  <label for="name">Tutor Name:</label>
  <input 
    type="text" 
    id="name" 
    name="name" 
    value="{{ old('name') }}" 
    required
  >

  <!-- Tutor Strength -->
  <label for="skill">Tutor Skill (0-100):</label>
  <input 
    type="number" 
    id="skill" 
    name="skill" 
    required
  >

  <!-- Tutor Bio -->
  <label for="bio">Biography:</label>
  <textarea
    rows="5"
    id="bio" 
    name="bio" 
    required
  ></textarea>

  <!-- select a tutorial -->
  <label for="tutorial_id">Tutorial:</label>
  <select id="tutorial_id" name="tutorial_id" required>
    <option value="" disabled selected>Select a tutorial</option>
    
  </select>

  <button type="submit" class="btn mt-4">Create Tutor</button>

  <!-- validation errors -->
  
</form>

