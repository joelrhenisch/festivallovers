$(document).ready(function () {
// Desktop
    // Zu Events
    $("#go-to-events-lg").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });

    // Zu Magazin
    $("#go-to-magazin-lg").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });

    // Zu News
    $("#go-to-news-lg").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });

    // Zum Anfang der Seite wechseln
    $("#go-to-top-lg").click(function () {
        $(window).scrollTop(0);
    });

// Mobile
    // Zu Events
    $("#go-to-events-sm").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });

    // Zu Magazin
    $("#go-to-magazin-sm").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });

    // Zu News
    $("#go-to-news-sm").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });

    // Zum Anfang der Seite wechseln
    $("#go-to-top-sm").click(function () {
        $(window).scrollTop(0);
    });
});