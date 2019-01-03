<div class="container hw-py">
  <div class="text-center">
    <h2>
      hw PySocket
    </h2>
  </div>
  <div class="hw-ws">
  </div>
  <input placeholder="send message here..." name="ws-message" type="text" class="ws-message" id="ws-message" />
</div>

<script>
var ws = new WebSocket("ws://home.hackweb.it:8765/"),
messages = document.createElement('div');
messages.setAttribute("id", "ws-list");
ws.onmessage = function(event) {
  var messages = document.getElementById('ws-list'),
  message = document.createElement('div'),
  content = document.createTextNode(event.data);
  messages.classList.add('ws-line');

  var isBottom = (messages.scrollTop >= messages.scrollHeight-90) ? true : false;
  message.appendChild(content);
  messages.appendChild(message);
  if(isBottom) messages.scrollTop = messages.scrollHeight;
};
document.getElementsByClassName('hw-ws')[0].appendChild(messages);

$('body').on('keyup', '#ws-message', function (e) {
  if (e.keyCode == 13) {
    var messages = document.getElementById('ws-list'),
    message = document.createElement('div'),
    content = document.createTextNode('$ '+$(this).val());
    messages.classList.add('ws-line');
    var isBottom = true;
    message.appendChild(content);
    messages.appendChild(message);
    if(isBottom) messages.scrollTop = messages.scrollHeight;
    $(this).val('');
  }
});
</script>