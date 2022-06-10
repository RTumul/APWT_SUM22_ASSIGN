<html>
  <head></head>
  <body>
    <h1> Customers Dashboard!!</h1><br>
    <table border="1">
      <tr>
        <th>Id</th>
        <th>Name</th>
      </tr>
      @foreach ($customers as $cus)
      <tr>
        <td>{{$cus -> id}}</td>
        <td>{{$cus -> name}}</td>
        <td>
          <form method="post" action="">
            @csrf
            <input type="submit" value="view">
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </body>
</html>