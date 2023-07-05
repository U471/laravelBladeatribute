<h1>Add Member</h1>
<form action="admin" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter a name"><br><br>
    <input type="text" name="email" placeholder="Enter a email"><br><br>
    <input type="text" name="address" placeholder="Enter a address"><br><br>
    <button type="submit">ADD</button>
</form>