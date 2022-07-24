$(function () {
    let flag = true;

    $("#js_locked").on('click', function () {
        if (!flag) {
            $("#js_locked").html('<i class="fas fa-lock"></i>Lock');
            $(".edit-title, .edit-content").prop("readonly", false);
            flag = true;
        } else {
            $("#js_locked").html('<i class="fas fa-lock-open"></i>Lock');
            $(".edit-title, .edit-content").prop("readonly", true);
            flag = false;
        }
    });
});