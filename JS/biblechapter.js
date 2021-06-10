$(document).ready(function() {
    $("#booknames").change(function() {
        var bid = $("#booknames").val();
        console.log(bid);
        $.ajax({
            url: 'data.php',
            method: 'post',
            data: 'bid=' + bid
        }).done(function(r_chapter) {
            console.log(r_chapter);
            r_chapter = JSON.parse(r_chapter);
            $('#r_chapter').empty();
            r_chapter.forEach(function(chapter) {
                $('#r_chapter').append('<option>' + chapter.chaptername + '</option>')
            })
        })

    })
})