<div class="container mt-5rem">
    <center class="p-5">
        <a href="../index.php#perumahan-murah-ungaran-semarang-cluster-milenial">
            <div class="col-12 btn-more-info p-2 mb-3">
                <h6 class="mb-0">Website PT KANPA</h6>
            </div>
        </a>
        <a href="https://bit.ly/PT-KANPAwhatsapp">
            <div class="col-12 btn-more-info p-2 mb-3">
                <h6 class="mb-0">Customer Service</h6>
            </div>
        </a>
        <a href="https://bit.ly/MarketingFajar">
            <div class="col-12 btn-more-info p-2 mb-3">
                <h6 class="mb-0">Marketing Fajar</h6>
            </div>
        </a>
        <a href="https://bit.ly/MaharaniKanpa">
            <div class="col-12 btn-more-info p-2 mb-3">
                <h6 class="mb-0">Marketing Maharani</h6>
            </div>
        </a>
        <a href="https://www.youtube.com/channel/UCLliJCkXBmAHT_ujeGicfjQ/">
            <div class="col-12 btn-more-info p-2 mb-3">
                <h6 class="mb-0">Youtube PT. KANPA</h6>
            </div>
        </a>
    </center>
</div>
<script>
    $(document).ready(function() {
        $('.more-info').click(function() {
            var menu = $(this).attr('id');
            setCookie("halaman", 'pages/' + menu + ".php", 30);
            $('.halaman-menu').load(getCookie("halaman"));
            // alert(menu);
        });

    });

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (30 * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
</script>