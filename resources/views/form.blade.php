<h2>Add Member</h2>

<form action="add" method="POST">
    @csrf
     <label>Name: </label>
     <input type="text" name="name"/>

     <label>Email: </label>
     <input type="email" name="email"/>


     <label>Password: </label>
     <input type="password" name="password"/>


     <button type="submit" value="Submit">Add Member </button>
</form>