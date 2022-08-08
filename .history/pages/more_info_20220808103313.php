<div class="container mt-5rem">
    <center class="p-5">
        <a href="#" class="navmenu" id="dashboard">
            <div class="col-12 btn-more-info p-2">
                <h6 class="mb-0">Website PT KANPA</h6>
            </div>
        </a>
    </center>
</div>
<script>
    $(document).ready(function() {
        $('.btn-more-info').click(function() {
            var menu = $(this).attr('id');
            setCookie("halaman", 'pages/' + menu + ".php", 30);
            $('.halaman-menu').load(getCookie("halaman"));
            // alert(menu);
        });

    });
</script>