
$(".signup-btn").on('click', (e) => {
    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "bcnkddee333mnnqpd/api.php",
        data: {
            name: $("#name_field").val(),
            email: $("#email_field").val(),
            password: $("#pass_field").val()
        },
        success: function() {
            window.location.href = "index.php";
        }
    })
})    