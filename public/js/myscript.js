var baseUrl = '';

$(document).ready(function () {

    baseUrl = $('#base-url-1').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    clickButton();

});


/* click on button */
function clickButton() {
    $(document).on('click', '#button1', function () {
        console.log('clickButton');

        var myData = {
            test: 'test1'
        };

        // AJAX call
        $.ajax({
            url: baseUrl + '/getTime',
            type: 'POST',
            data: myData,
            success: function (resultData) {
                console.log("AJAX 1 - clickButton: resultData = " + resultData);
                var resultObject = JSON.parse(resultData);
                var time1 = resultObject['time'];
                $('#data1').text(time1);
            }
        });
    });
}

