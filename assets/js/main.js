(function ($) {
    $(document).ready(function () {
        $('.pilih-gambar-detail-produk').carousel({
            indicators: true
        });

        $('.button-collapse').sideNav();

        $('.dropdown-trigger').dropdown();

        $('.slider').slider({
            indicators: true
        });

        $('select').material_select();
    });

    $(document).ready(function () {
        $('.modal').modal();
    });

    $(document).ready(function () {

        // melalui bank
        $('#mandiri').click(function () {
            alert("Anda berTransaksi melalui Bank Mandiri");
        });

        $('#BCA').click(function () {
            alert("Anda berTransaksi melalui Bank BCA");
        });

        $('#BNI').click(function () {
            alert("Anda berTransaksi melalui Bank BNI");
        });

        $('#BRI').click(function () {
            alert("Anda berTransaksi melalui Bank BRI");
        });

        // melalui retail
        $('#alfa').click(function () {
            alert("Anda berTransaksi melalui Retail Alfa");
        });

        $('#indomart').click(function () {
            alert("Anda berTransaksi melalui Retail Alfa");
        });
    });
})(jQuery);