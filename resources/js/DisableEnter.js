// Suppressing the enter key
$("input[name = edit_title]").on('keypress', function (e) {
    if (e.which === 13) {
        return false;
    }
});