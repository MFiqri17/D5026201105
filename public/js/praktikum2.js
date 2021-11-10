$(document).ready(() => {
    $.validator.addMethod(
        "letterswithbasicpunc",
        function (value, element) {
            return this.optional(element) || /^[a-z\-.,()'"\s]+$/i.test(value);
        },
        "Letters or punctuation only please"
    );
    $("#validation").validate({
        rules: {
            name: {
                required: true,
                letterswithbasicpunc: true,
            },
            username: {
                required: true,
                maxlength: 8,
                minlength: 6,
            },
            email: {
                required: true,
            },
            state: {
                required: true,
            },
            Address: {
                required: true,
            },
            zip: {
                required: true,
                digits: true,
                minlength: 6,
                maxlength: 6,
            },
        },
        messages: {
            name: {
                required: "Please enter your full name",
            },
        },
        submitHandler: () => {
            Swal.fire({
                title: "Are you sure want to submit this form",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Yes",
                denyButtonText: `No`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: "success",
                        title: "Your work form is already submitted",
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(() => {
                        window.location.replace("https://oploverz.biz/");
                    });
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });
        },
    });
});
