<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Room: {{ $room->name }}</title>
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
</head>
<body>
<div id="app">
    <h2>Chat Room: {{ $room->name }}</h2>
    <div id="messages"
         style="border: 1px solid #ccc; margin-bottom: 10px; padding: 10px; height: 300px; overflow-y: scroll;">
        <!-- Messages will be displayed here -->
    </div>
    <input type="text" id="messageInput" placeholder="Type your message here..." autofocus>
    <button onclick="sendMessage()">Send</button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const roomId = "{{ $room->id }}";
        Echo.channel(`chat.${roomId}`)
            .listen('MessageSent', (e) => {
                const messages = document.getElementById('messages');
                const messageElement = document.createElement('div');
                messageElement.innerHTML = `<strong>${e.userName}:</strong> ${e.message}`;
                messages.appendChild(messageElement);
                messages.scrollTop = messages.scrollHeight; // Scroll to the bottom
            });
    })


    function sendMessage() {
        const messageInput = document.getElementById('messageInput');
        const message = messageInput.value;
        messageInput.value = ''; // Clear input
        const roomId = "{{$room->id}}"
        fetch(`/rooms/${roomId}/message`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({message: message})
        }).catch(error => console.error('Error:', error));
    }

</script>
</body>
</html>
