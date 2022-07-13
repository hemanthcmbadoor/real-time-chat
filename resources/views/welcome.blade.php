<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css" class="rel">
    <title>RealTime Chat</title>
</head>

<body>
    <section class="msger">
        <header class="msger-header">
            <div class="msger-header-title">
                <i class="fas fa-comment-alt"></i> RealTime Chat
            </div>
            <div class="msger-header-options">
                <span><i class="fas fa-cog"></i></span>
            </div>
        </header>

        <main class="msger-chat">
            <div id="messages"></div>
        </main>

        <form class="msger-inputarea">
            <input type="text" name="username" id="username" class="msger-input" placeholder="Enter your name...">
        </form>
        <form class="msger-inputarea" id="message_form">
            <input type="text" name="message" id="message_input" class="msger-input" placeholder="Enter your message...">
            <button type="submit" id="message_send" class="msger-send-btn">Send</button>
        </form>
    </section>
</body>
<script src="./js/app.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</html>