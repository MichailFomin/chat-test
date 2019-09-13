<!DOCTYPE html>
<html>
<head>
   <title>Chats</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href={{ asset('css/style.css') }}>
   <link rel="stylesheet" type="text/css" href={{ asset('css/chats.css') }}>
</head>
<body>

   <div class="col-lg-4 col-lg-offset-4">
      <h1 id="greeting">Hello, <span id="username">{{ $username }}</span></h1>

      <div id="chat-window" class="col-lg-12">

      </div>
      <div class="col-lg-12">
         <div id="typingStatus" class="col-lg-12" style="padding: 15px">

         </div>
         <input type="text" id="text" class="form-control col-lg-12" autofocus="" onblur="notTyping()">
      </div>
   </div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script type="text/javascript" src={{ asset("js\chats.js")}}></script>

</body>
</html>
