<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./css/app.css" class="rel"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>RealTime Chat</title>
</head>

<body>
    <div class="container mt-5">
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center">
                    <div class="col-md-8 shadow-lg p-3 mb-5 bg-white rounded">

                        <div class="box box-warning direct-chat direct-chat-warning">
                            <div class="box-header with-border mb-3">
                                <h3 class="box-title text-center">Chat Messages</h3>
                                    <div class="input-group">
                                        <input type="text" name="username" id="username" placeholder="Please enter your name" class="form-control">
                                        <!-- <span class="input-group-btn">
                                            <button type="button" class="btn btn-warning btn-flat">Send</button>
                                        </span> -->
                                    </div>
                            </div>

                            <div class="box-body">

                                <div class="direct-chat-messages">

                                    <div id="messages"></div>

                                    <!-- <div class="direct-chat-msg shadow p-3 mb-5 bg-white rounded">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-left">Timona Siera</span>
                                            <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                                        </div>

                                        <img class="direct-chat-img" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="message user image">

                                        <div class="direct-chat-text">
                                            For what reason would it be advisable for me to think about business content?
                                        </div>

                                    </div> -->

                                    <!-- <div class="direct-chat-msg shadow p-3 mb-5 bg-white rounded">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                            <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                        </div>

                                        <img class="direct-chat-img" src="https://img.icons8.com/office/36/000000/person-female.png" alt="message user image">

                                        <div class="direct-chat-text">
                                            Thank you for your believe in our supports
                                        </div>

                                    </div> -->


                                </div>

                            </div>

                            <div class="box-footer">
                                <form id="message_form">
                                    <div class="input-group">
                                        <input type="text" name="message" id="message_input" placeholder="Type Message ..." class="form-control">
                                        <span class="input-group-btn">
                                            <button type="submit" id="message_send" class="btn btn-warning btn-flat">Send Message</button>
                                        </span>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</body>
<script src="./js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</html>