function getUserByToken(token, callback) {
    $.ajax({
        type: "GET",
        url: `bcnkddee333mnnqpd/api.php?action=getuserbytoken&user_token=${token}`,
        success: function (data) {
            data = JSON.parse(data);
            callback(data.user_name);
        }
    });
}


$(document).ready(function() {
    display_all();
    function display_all(){
        $.ajax({
            url: "bcnkddee333mnnqpd/api.php?action=display_all",
            type: "GET",
            success: function(data) {
                var parsed_data = JSON.stringify(data);
                parsed_data = JSON.parse(parsed_data);
                document.querySelector("#posts").innerHTML = "";
                var datas = "";
                $(parsed_data).each(function (index, element) {
                    getUserByToken(element["author_token"], function (userName) {
                        datas += `
                            <div class="post">
                                <div class="post-header">
                                    <img class='avatar' src='images/user_profile.svg'>
                                    <a href="user.php?name=${userName}" style="color: #3b5998;text-decoration: none;" class="username">${userName}</a>
                                </div>
                                <div class="post-content">
                                    ${element.post_content}
                                </div>
                                <div class="post-footer">
                                    <span class="icon"><img src="images/heart.svg" alt=""></span>
                                    <span class="icon"><img src="images/message.svg" alt=""></span>
                                    <span class="icon"><img src="images/share.svg" alt=""></span>
                                </div>
                            </div>
                        `;
                        $("#posts").html(datas);
                    });
                });
            }                
        })
    }
    $("#submit_button_sht").on('click', function(e) {
        var content = $("#form_content").val();
        $.ajax({
            type: "GET",
            url: `bcnkddee333mnnqpd/api.php?content=${content}`,
            success: function() {
                $("#for_message").html("<p style='margin-top: 10px;background-color: #3b5998;border: solid 5px #627AAD;padding: 5px;color: white;'>Post Created!</p>");
                setTimeout(() => {
                    $("#for_message").html("");
                }, 3000)
                $("#form_content").val("");
                $("#posts").html("");
                display_all();
            }
        })
    })
})