// ====================OPEN MODAL====================

$(document).on("click", "#add_banner", function () {
    $.ajax({
        url: '/banner_addedit',
        type: 'GET',
        dataType: 'html',
        data: {
            title: 'Your Title',
            sub_title: 'Your Sub Title',
        },
        success: function (data) {
                $("#getCode").html(data);
                $('#banner_model_open').modal('show');
                $('#banner_model_open').attr('aria-hidden', 'false');
            },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
});

// ========================================


// ====================MODAL-SUBMIT====================

$(document).ready(function () {
    $(document).on("click", ".banner_modal_submit", function () {
        var formData = $("#banner_form").serialize();
        $.ajax({
            url: '{{ route("banner_submit") }}',
            type: 'POST',
            dataType: 'html',
            data: formData,
            success: function (data) {
                $('#banner_model_open').modal('hide');
                loadDataTable(data);
                $('#banner_model_open').attr('aria-hidden', 'false');
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});


// $(document).on("click", ".banner_modal_submit", function () {
//     var formData = $("#banner_form").serialize();
//     $.ajax({
//         url: '/banner_modal_submit',
//         type: 'POST',
//         dataType: 'html',
//         data: formData,
//         success: function (data) {
//             $('#banner_model_open').modal('hide');
//             loadDataTable(data);
//             $('#banner_model_open').attr('aria-hidden', 'false');
//         },
//         error: function (xhr, status, error) {
//             console.error(xhr.responseText);
//         }
//     });
// });

// ========================================


// ====================LOAD-DATATABLE====================

function loadDataTable(data) {
    $('#dataTables-example').DataTable({
        data: data,
        columns: [
            { data: 'id' },
        ],
    });
}

// ========================================