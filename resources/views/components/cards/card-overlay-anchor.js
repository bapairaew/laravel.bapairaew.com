$(function () {
    $("body").on("click", ".card-overlay-anchor", function (e) {
        e.preventDefault();
        const dialog = $(this).closest(".card").find("dialog")[0];
        dialog.showModal();
        history.pushState(null, "", e.target.href);
        $(dialog).one("close", function () {
            history.back();
        });
    });
});
