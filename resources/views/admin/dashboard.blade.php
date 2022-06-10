<html>
  <head></head>
  <body>
    <h1> Admin Dashboard!!</h1><br>
    <table border="1">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Eamil</th>
        <th>User Type</th>

        <th colspan="3">Actions</th>
      </tr>
      @foreach ($customers as $cus)
      <tr>
        <td>{{$cus -> id}}</td>
        <td>{{$cus -> name}}</td>
        <td>{{$cus -> dob}}</td>
        <td>{{$cus -> email}}</td>
        <td>{{$cus -> type}}</td>

        <td><button>View<button></td>
        <td><button>Edit<button></td>
        <td><button>Delete<button></td>
      </tr>
      @endforeach
    </table>
  </body>
</html>