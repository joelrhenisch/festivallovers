$(document).ready(function () {
    // Zu Zahlvorgang
    $("#go-to-payment").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });
});