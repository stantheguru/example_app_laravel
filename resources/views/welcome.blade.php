<html>
   <head>
      <title>Welcome to my app</title>
   </head>
   <style>
      table, th, td {
  border: 1px solid black;
}
   </style>
   <body>
    
<table>
   <tr>
      <th>
         Name
      </th>
      <th>Email</th>
      <th>Image</th>
   </tr>
   @foreach ($results as $result)

   <tr>
      <td>{{$result->name}}</td>
      <td>{{$result->email}}</td>
      <td><image width="100" src='{{$result->image}}'/></td>
     
   </tr>
   @endforeach

</table>
     
      

     
<a href='/register'>REGISTER</a>

   </body>
</html>
