
$('#id__hover').click(function (e) {
    e.preventDefault();
    $('#id__show').toggle();
});

$(document).mouseup(function (e) {
    var container = $("#id__show");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.hide();
    }
});




// Date ranger picker
$(function () {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        // ranges: {
        //     'Today': [moment(), moment()],
        //     'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        //     'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        //     'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        //     'This Month': [moment().startOf('month'), moment().endOf('month')],
        //     'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        // }
    }, cb);

    cb(start, end);

});


