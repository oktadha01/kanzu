$(document).ready(function () {
    function disableBtn() {
        document.getElementById("btn-login").disabled = true;
    }

    function enableBtn() {
        document.getElementById("btn-login").disabled = false;
    }
    $('.input-password').hide();
    $(document).on('keypress', '#username', function (e) {
        if (e.which == 13) {
            // alert('You pressed enter!');
            if ($('#username').val() == 0) {
                $(function () {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });
                    Toast.fire({
                        type: 'error',
                        title: 'Username cannot be empty!!'
                    })
                });
            } else {
                if ($('.input-password').val() == 0) {
                    disableBtn();
                    $('.input-password').show(300);
                    $('.input-user').hide();
                } else {

                }
            }
        }
    });
    $(document).on('input', '#password', function (e) {
        // alert('ya');
        enableBtn()

    });
    $('.btn-next-login').on('click', function (e) {
        if ($('#username').val() == 0) {
            // alert($('#username').val());
            $(function () {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                Toast.fire({
                    type: 'error',
                    title: 'Username cannot be empty!!'
                })
            });
        } else {
            $('.input-password').show(300);
            $('.input-user').hide();
        }

    })

    $('#btn-batal').on('click', function (e) {
        $('#registrasi').attr('hidden', true);
        $('#login').removeAttr('hidden');
    })
});