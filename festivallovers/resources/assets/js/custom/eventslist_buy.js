// Zu Tickets-Kaufen
$("#go-to-ticketbuy").click(function () {
    window.location = $(this).find("a:first").attr("href");
    return false;
});