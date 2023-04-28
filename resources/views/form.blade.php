<html>
   <head>
      <title>Welcome to my app</title>
      <!-- 
      <script src="https://cdn.tailwindcss.com"></script>-->


   </head>
   <body>
    
   
      <form method="POST" action="submit_form" enctype="multipart/form-data" name='submit_form'>
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <label for="name">Name:</label>
    <input required type="text" name="name"  id="name">

    <label for="email">Email:</label>
    <input required type="email" name="email" id="email">
    <input required type="password" name="password" id="password">
    <input required type="file" name="image" accept="image/*" id="image">

    <button type="submit">Submit</button>
</form>

   </body>
</html>
