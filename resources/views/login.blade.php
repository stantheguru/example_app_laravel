<html>
   <head>
      <title>Welcome to my app</title>
      <!-- 
      <script src="https://cdn.tailwindcss.com"></script>-->


   </head>
   <body>
    
   
      <form method="POST" action="login" name='login'>
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
   

    <label for="email">Email:</label>
    <input required type="email" name="email" id="email">
    <input required type="password" name="password" id="password">
  
    <button type="submit">Submit</button>
</form>

   </body>
</html>
