// Zu Zahlvorgang
$(".pfadleiste__linking").click(function () {
    window.location = $(this).find("a:first").attr("href");
    return false;
});