<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/StandardStyle.css">
    <link rel="stylesheet" href="css/mystyles.css">
    

    <title>Logout Page</title>
</head>
<body>
    <?php 
      session_start();
      session_destroy();
      
    ?>

    <!-- Cuando se pase a PHP ponene el include navbar y ya -->
    <!-- css file donde esta el style es StandardStyle.css -->
    <div class="is-flex-centered-column">
    <h1 class="size-3-rem ">
        
        <span> <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-snowflake"><line x1="2" x2="22" y1="12" y2="12"/><line x1="12" x2="12" y1="2" y2="22"/><path d="m20 16-4-4 4-4"/><path d="m4 8 4 4-4 4"/><path d="m16 4-4 4-4-4"/><path d="m8 20 4-4 4 4"/></svg></span>
        You have successfully Log out of your account.
    
        <span><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-snowflake"><line x1="2" x2="22" y1="12" y2="12"/><line x1="12" x2="12" y1="2" y2="22"/><path d="m20 16-4-4 4-4"/><path d="m4 8 4 4-4 4"/><path d="m16 4-4 4-4-4"/><path d="m8 20 4-4 4 4"/></svg></span>
    </h1>
    <h2 class="size-rem-2 rem-space-1">Please go to the login screen to continue</h2>
 
    </div>
       
  

</body>
</html>
