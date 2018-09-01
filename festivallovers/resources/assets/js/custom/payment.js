$(function () {
    // Footer wird beim Laden der Seite automatisch ausgeblendet
    $('#footer-lg').addClass('hidden');
    $('#footer-sm').addClass('hidden');
    // weiter Schritt im Zahlungsvorgang wird beim Laden der Seite automatisch ausgeblendet
    $('#payment-step-2').addClass('hidden');
    $('#payment-step-3').addClass('hidden');
});

// Schritte beim Bezahlen werden in- ausgeblendet
$("#bezahlen").click(function () {
    $("#payment-step-1").hide();
    $("#payment-step-2").show();
});

// Schritte beim Bezahlen werden in- ausgeblendet
$("#bezahlt").click(function () {
    $("#payment-step-2").hide();
    $("#payment-step-3").show();
});