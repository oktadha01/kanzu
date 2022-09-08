<section class="row mt-5rem pt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control float-right" id="reservation" value="">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-4">
                                <button type="button" class=" col-12 btn btn-sm bg-gradient-info elevation-3 btn-action-kstmr" id="update">
                                    <i class="fa-solid fa-pen-to-square"></i> Perbarui data eksport
                                </button>
                            </div>
                            <div class="col-4">
                                <button type="button" class=" col-12 btn btn-sm bg-gradient-info elevation-3 btn-action-kstmr" id="batal">
                                    <i class="fa-solid fa-pen-to-square"></i> batal data eksport
                                </button>
                            </div>
                            <div class="col-4">
                                <button type="button" class=" col-12 btn btn-sm bg-gradient-info elevation-3 btn-action-kstmr" id="sudah">
                                    <i class="fa-solid fa-pen-to-square"></i> Sudah di eksport
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <div id="data-pembeli"></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="prosess/proses_eksport_datakstmr.php">
                    <button type="button" class=" col-12 btn btn-xs bg-gradient-info elevation-3" id="update-print-data-kstmr">
                        <i class="fa-solid fa-pen-to-square"></i> Eksport Ke Excel
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>
<input type="text" id="action-kstmr" value="">
<input type="text" id="post_id">
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script> -->