$(document).ready(function() {
    $("#r_chapter").change(function() {
        var cid = $("#r_chapter").val();
        console.log(cid);
        $.ajax({
            url: 'data.php',
            method: 'post',
            data: 'cid=' + cid
        }).done(function(r_verses) {
            console.log(r_verses);
            r_verses = JSON.parse(r_verses);
            $('#r_verses').empty();
            r_chapter.forEach(function(verses) {
                $('#r_verses').append('<option>' + verses.id_verses + '</option>')
            })
        })
    })
})