var verifyC = 0;
$(':input[type="submit"]').prop('disabled', true);
$('#eVerify').prop('disabled', true);
$('#mVerify').prop('disabled', true);
$('#eotpVerify').css('display', 'none');
$('#eotp').css('display', 'none');
$('#motp').css('display', 'none');
$('#motpVerify').css('display', 'none');
$('#email').keyup(function () {
    if ($('#email').val() != '') {
        $('#eVerify').prop('disabled', false);
    } else {
        $('#eVerify').prop('disabled', true);
    }
})
$('#eVerify').click(function () {
    $.post(
        'Validations/sendmail.php', {
        email: $('#email').val(),
    },
        function (response) {
            $('#eVerify').val(response);
        }
    )
    $('#eotp').css('display', 'block');
    $('#eotpVerify').css('display', 'block');

});
$('#eotpVerify').click(function () {
    $.post(
        'Validations/verify.php', {
        value: $('#eotp').val(),
        count: 1
    },
        function (response) {
            if (response == "success") {
                verifyC++;
                alert('Email Verified');
                $('#eotp').css('display', 'none');
                $('#eotpVerify').css('display', 'none');
                $('#eVerify').val('Verified');
                $('#eVerify').prop('disabled', true);
                if (verifyC > 1) {
                    $(':input[type="submit"]').prop('disabled', false);
                }
                //$('#email').attr({ type:"button", value:$('#email').val() });
            } else {
                alert('Email Verification fail..');
            }
        }
    )
})
$('#mobile').keyup(function () {
    if ($('#mobile').val() != '') {
        $('#mVerify').prop('disabled', false);
    } else {
        $('#mVerify').prop('disabled', true);
    }
})
$('#mVerify').click(function () {
    $.post(
        'Validations/mobile.php', {
        mobile: $('#mobile').val(),
    },
        function (response) {
            $('#mVerify').val(response);
        }
    )
    $('#motp').css('display', 'block');
    $('#motpVerify').css('display', 'block');

});
$('#motpVerify').click(function () {
    $.post(
        'Validations/verify.php', {
        mval: $('#motp').val(),
        count: 2
    },
        function (response) {
            if (response == "success") {
                verifyC++;
                if (verifyC > 1) {
                    $(':input[type="submit"]').prop('disabled', false);
                }
                alert('Mobile OTP Verified');
                $('#motp').css('display', 'none');
                $('#motpVerify').css('display', 'none');
                $('#mVerify').val('Verified');
                $('#mVerify').prop('disabled', true);
                //$('#email').attr({ type:"button", value:$('#email').val() });
            } else {
                alert('Mobile OTP Verification fail..');
            }
        }
    )
})