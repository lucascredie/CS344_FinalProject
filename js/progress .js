jQuery(function ($) {
    $('#statusButtonSubmit').click(function () {
        var val = 20 + '%';
        $('.progress-bar').width(val).text(val)
    })
     $('#studentButtonNext').click(function () {
        var val = 40 + '%';
        $('.progress-bar').width(val).text(val)
    })
});