<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <h1>All Users</h1>
     <form action="/users" method="GET">
        <input type="text" name="name" placeholder="Name">
        <button type="submit">Get All Users</button>
     </form> <br><br>

    <h1>Users post</h1>
    <form action="/adduser" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Add User</button>
    </form>

    <br><br>
    <h1>Update User</h1>
    <form action="/updateuser" method="POST">
        @csrf
        @method('PUT')
        <input type="number" name="id" value="3">
        <input type="text" name="name" placeholder="Updated Name">
        <input type="email" name="email" placeholder="Updated Email">
        <input type="password" name="password" placeholder="Updated Password">
        <button type="submit">Update User</button>
    </form>

    <br><br>
    <h1>Delete User</h1>
    <form action="/deleteuser" method="POST">
        @csrf   
        @method('DELETE')
        <input type="number" name="id" value="4" >
        <button type="submit">Delete User</button>
    </form>
</body>
</html>