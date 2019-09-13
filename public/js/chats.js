var username;
$(document).ready(function () {
   username = $('#username').html();

   pullData();

   $(document).keyup(function (e) {
      if (e.keyCode == 13)
         sendMessage();
      else
         isTyping();
   })
});

function sendMessage() {
   var text = $('#text').val();

   if (text.length > 0) {
      $.get('http://laravel-chat/sendMessage', {text: text, username: username}, function () {
         $('#chat-window').append('<br><div style="text-align: right">' + text + '</div><br>');
         $('#text').val('');
         notTyping();
         console.log(username, text);
      })
   }

}

function isTyping() {
   $.get('http://laravel-chat/isTyping', {username: username});
}

function notTyping() {
   $.get('http://laravel-chat/notTyping', {username: username});
}


function pullData() {
   retrieveChatMessages();
   retrieveTypingStatus();
   setTimeout(pullData, 3000);
}

function retrieveChatMessages() {
   $.get('http://laravel-chat/retrieveChatMessages', {username: username}, function (data) {
      if (data.length > 0) $('#chat-window').append('<br><div>' + data + '</div><br>');
   })
}

function retrieveTypingStatus() {
   $.get('http://laravel-chat/retrieveTypingStatus', {username: username}, function (username) {
      if (username.length > 0)
         $('#typingStatus').html(username+' is typing');
      else
         $('#typingStatus').html('');
   })
}





