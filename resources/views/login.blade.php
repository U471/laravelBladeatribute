<h1>Login Page</h1>
<form action="login" method="post">
    @csrf
  <input type="text" name="username" placeholder="Enter a user name">
  <br><br>
  <input type="password" name="password" placeholder="Password">
  <br><br>
  <button type="submit">Login</button>

</form>