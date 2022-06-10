<html>
  <head></head>
  <body>
 <h1>Details of {{$customers -> name}}</h1>
  <table border="1">
  <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Eamil</th>
        <th>User Type</th>
        
      </tr>
  <tr>
        <td>{{$customers -> id}}</td>
        <td>{{$customers -> name}}</td>
        <td>{{$customers -> dob}}</td>
        <td>{{$customers -> email}}</td>
        <td>{{$customers -> type}}</td>
</tr>


    </table> 
  </body>
</html>