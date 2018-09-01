$(document).ready(function () {
    // Zu Tickets-Kaufen
    $(".go-to-ticketbuy").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });
    // Anreise & Rückreise (Akkordeon) ein- und ausblenden
    $("#anreise").click(function () {
        $("#container__anreiserueckreise").toggle();
    });
});



// Line Up von Freitag ein- und ausblenden
    // DESKTOP
    $("#tabs__btnfreitag-lg").on("click",picture);

    function picture() {
        if ($('#zielbox').is(':empty')) {
            let pic = document.createElement('img');
            pic.setAttribute("src", "images/lineup_detailsite.png");
            pic.classList.add('img-183prozent');
            document.getElementById("zielbox").appendChild(pic);
            document.getElementById('tabs__btnfreitag').classList.add('tabs__btn--active', '.tabs__imagebox');
        }
        else {
            let list = document.getElementById("zielbox");
            list.removeChild(list.childNodes[0]);
            document.getElementById('tabs__btnfreitag').classList.add('tabs__btn');
            document.getElementById('tabs__btnfreitag').classList.remove('tabs__btn--active');
        }
    }
    // MOBILE
    $("#tabs__btnfreitag-sm").on("click",picturesm);
    function picturesm() {
        if ($('#zielbox-sm').is(':empty')) {
            let pic = document.createElement('img');
            pic.setAttribute("src", "images/lineup_detailsite.png");
            pic.classList.add('img-183prozent');
            document.getElementById("zielbox-sm").appendChild(pic);
            document.getElementById('tabs__btnfreitag').classList.add('tabs__btn--active', '.tabs__imagebox');
        }
        else {
            let list = document.getElementById("zielbox-sm");
            list.removeChild(list.childNodes[0]);
            document.getElementById('tabs__btnfreitag').classList.add('tabs__btn');
            document.getElementById('tabs__btnfreitag').classList.remove('tabs__btn--active');
        }
}
