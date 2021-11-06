<h1 class="">Login</h1>

<form action="users" method="post">
  @csrf
  <div>
    <label for="username">Username</label> <br>
    <input id="username" type="text" name="username">
    @error('username')
      {{ $message }}
    @enderror
  </div>

  <div>
    <label for="password">Password</label> <br>
    <input id="password" type="text" name="password">
    @error('password')
      {{ $message }}
    @enderror
  </div>

  <button class="submit">Login</button>
</form>
