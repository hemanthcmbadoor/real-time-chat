const { default: axios } = require('axios');

require('./bootstrap');

const message_el = document.getElementById("messages");
const username_input = document.getElementById("username");
const message_input = document.getElementById("message_input");
const message_form = document.getElementById("message_form");

message_form.addEventListener('submit', function(e){
    e.preventDefault();

    let has_errors = false;

    if(username_input.value == ''){
        alert("Please Enter name");
        has_errors = true;
    }

    if(message_input.value == ''){
        alert("Please Enter some message");
        has_errors = true;
    }

    if(has_errors){
        return;
    }

    const options = {
        method: 'post',
        url: '/send-message',
        data: {
            username: username_input.value,
            message: message_input.value
        }
    }
    axios(options);
});

window.Echo.channel('chat')
    .listen('.message', (e)=>{
        message_input.value = '';
        message_el.innerHTML +=
                                "<div class='direct-chat-msg shadow p-3 mb-5 bg-white rounded'>" +
                                    "<div class='direct-chat-info clearfix'>"+
                                        "<span class='direct-chat-name pull-left'>"+ e.username +"</span>"+
                                        
                                    "</div>"+
                                    "<div class='direct-chat-info clearfix'>"+
                                        
                                        "<span class='direct-chat-timestamp pull-right'>" + e.time +"</span>"+
                                    "</div>"+

                                    "<img class='direct-chat-img' src='https://img.icons8.com/color/36/000000/administrator-male.png' alt='message user image'>"+

                                    "<div class='direct-chat-text'>"+ e.message + "</div>"+

                                "</div>"
    })