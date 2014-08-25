$(document).ready(function(){


    function submitPost() {
        var subject, content, uid;

        subject = $('#postSubject').val();
        content = $('#postContent').val();
        uid = $('#uid').val();
        $.post(
            "http://localhost:8080/index.php/posts/insert_post",
            {
                subject: subject,
                content: content,
                uid: uid
            }
        ).done(function(data) {
               alert(data);
            });
        $('#myModal').modal('hide');
    }

    $('#submitPost').click(function() {
        submitPost();
    });
});