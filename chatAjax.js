function chat() {
    var message = chatForm.message.value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var newMessage = document.createElement('div');
            newMessage.innerHTML = xmlhttp.responseText;
            var chatlogs = document.getElementById('chatlogs');
            chatlogs.appendChild(newMessage); // change this line back to appendChild
        }
    }
    xmlhttp.open('GET', 'insertChat.php?message=' + message + '&user=' + user + '&group=' + group, true);
    xmlhttp.send();
}

$(document).ready(function (e) {
    $.ajax({ cache: false });
    setInterval(function () {
        $.get('logs.php?group=' + group + '&user=' + user, function (data) {
            var newMessages = $(data);
            newMessages = $(newMessages.get().reverse()); // reverse the order of the messages
            $('#chatlogs').empty();
            newMessages.each(function () {
                $('#chatlogs').append(this); // append each message to the chat log
            });
        });
    }, 200);
});