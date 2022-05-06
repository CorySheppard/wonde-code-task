<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

<h1>User Management Page</h1>

<h2>Here are all the users:</h2>

@foreach ($users as $user)
    <li>{{ $user->name }} - {{$user->email}}</li>
@endforeach

<br>
<h2>Add a New User</h2>
<form method="POST" action="users"/>

{{ csrf_field() }}

<p>
<input type="text" name="name" placeholder="Name" required>
</p>

<p>
<input type="email" name="email" placeholder="Email Address" required>
</p>

<p>
<input type="password" name="password" placeholder="Password" required>
</p>

<p>
    <button type="submit">Add User</button>
</p>

</form>

</body>

</html>