$(document).ready(function () {

    $('#stars li').on('mouseover', function () {
        var onStar = parseInt($(this).data('value'), 10);

        $(this).parent().children('li.star').each(function (e) {
            if (e < onStar) {
                $(this).addClass('hover');
            } else {
                $(this).removeClass('hover');
            }
        });

    }).on('mouseout', function () {
        $(this).parent().children('li.star').each(function (e) {
            $(this).removeClass('hover');
        });
    });



    $('#stars li').on('click', function () {
        var onStar = parseInt($(this).data('value'), 10);

        // The star currently selected
        var stars = $(this).parent().children('li.star');

        for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
        }

        for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass('selected');
        }


        var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
        var msg = "";
        var emoji = "";
        if (ratingValue == 1) {
            msg = "Hated It";
            emoji = "<i class='material-icons'>sentiment_very_dissatisfied</i>";
        } else if (ratingValue == 2) {
            msg = "Disliked It";
            emoji = "<i class='material-icons'>sentiment_dissatisfied</i>";
        } else if (ratingValue == 3) {
            msg = "It's OK";
            emoji = "<i class='material-icons'>sentiment_neutral</i>";
        } else if (ratingValue == 4) {
            msg = "Liked It";
            emoji = "<i class='material-icons'>sentiment_satisfied</i>";
        } else {
            msg = "Loved It";
            emoji = "<i class='material-icons'>sentiment_very_satisfied</i>";
        }
        responseMessage(msg, emoji);
    });

});


function responseMessage(msg, emoji) {
    $('.success-box').fadeIn(200);
    $('.success-box h5.text-message').html("<span>" + msg + "</span>");
    $('.success-box h5.text-emoji').html("<span>" + emoji + "</span>");
    $('.logic').val(msg);
}
