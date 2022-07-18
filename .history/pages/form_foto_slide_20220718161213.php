<?php
if ($_SESSION['id_user'] == '') {
    header("location:index.php");
} else {
    if (isset($_POST['submit'])) {
        $dashboard      = $_POST['upload_foto_dashboard'];
        if ($dashboard == 'dashboard') {
            $uploadsDir = "assets/img/foto_slidedashboard/";
            // $uploadsDir = "uploads/";
            $allowedFileType = array('jpg', 'png', 'jpeg');

            // Velidate if files exist
            if (!empty(array_filter($_FILES['file_foto']['name']))) {

                // Loop through file items
                foreach ($_FILES['file_foto']['name'] as $id => $val) {
                    // Get files upload path
                    $fileName        = $_FILES['file_foto']['name'][$id];
                    $tempLocation    = $_FILES['file_foto']['tmp_name'][$id];
                    $newfilefoto      = date('dmYHis') . $fileName;
                    $targetFilePath  = $uploadsDir . $newfilefoto;
                    $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                    $uploadOk = 1;

                    if (in_array($fileType, $allowedFileType)) {
                        if (move_uploaded_file($tempLocation, $targetFilePath)) {
                            $sqlVal = "('" . $newfilefoto . "')";
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "File coud not be uploaded."
                            );
                        }
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Only .jpg, .jpeg and .png file formats allowed."
                        );
                    }
                    // Add into MySQL database
                    if (!empty($sqlVal)) {
                        $insert = $koneksi->query("INSERT INTO fot_slide (file_slidedashboard) VALUES $sqlVal");
                        if ($insert) {
                            $response = array(
                                "status" => "alert-success",
                                "message" => "File berhasil diupload."
                            );
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "Files coudn't be uploaded due to database error."
                            );
                        }
                    }
                }
            } else {
                // Error
                $response = array(
                    "status" => "alert-danger",
                    "message" => "Silahkan pilih foto."
                );
            }
        } else {
            $id_perum      = $_POST['id_fotperum'];
            if ($id_perum == '0') {
                $response = array(
                    "status" => "alert-danger",
                    "message" => "Pilihan tidak boleh kosong"
                );
            } else {
                if ($_POST['id_fottipe'] == '') {
                    $uploadsDir = "assets/img/foto_slideperum/";
                    // $uploadsDir = "uploads/";
                    $allowedFileType = array('jpg', 'png', 'jpeg');

                    // Velidate if files exist
                    if (!empty(array_filter($_FILES['file_foto']['name']))) {

                        // Loop through file items
                        foreach ($_FILES['file_foto']['name'] as $id => $val) {
                            // Get files upload path
                            $fileName        = $_FILES['file_foto']['name'][$id];
                            $tempLocation    = $_FILES['file_foto']['tmp_name'][$id];
                            $newfilefoto      = date('dmYHis') . $fileName;
                            $targetFilePath  = $uploadsDir . $newfilefoto;
                            $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                            $id_perum      = $_POST['id_fotperum'];
                            $uploadOk = 1;

                            if (in_array($fileType, $allowedFileType)) {
                                if (move_uploaded_file($tempLocation, $targetFilePath)) {
                                    $sqlVal = "('" . $id_perum . "', '" . $newfilefoto . "')";
                                } else {
                                    $response = array(
                                        "status" => "alert-danger",
                                        "message" => "File coud not be uploaded."
                                    );
                                }
                            } else {
                                $response = array(
                                    "status" => "alert-danger",
                                    "message" => "Only .jpg, .jpeg and .png file formats allowed."
                                );
                            }
                            // Add into MySQL database
                            if (!empty($sqlVal)) {
                                $insert = $koneksi->query("INSERT INTO fot_slide (id_fotperum, file_slideperum) VALUES $sqlVal");
                                if ($insert) {
                                    $response = array(
                                        "status" => "alert-success",
                                        "message" => "File berhasil diupload."
                                    );
                                } else {
                                    $response = array(
                                        "status" => "alert-danger",
                                        "message" => "Files coudn't be uploaded due to database error."
                                    );
                                }
                            }
                        }
                    } else {
                        // Error
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Silahkan pilih foto."
                        );
                    }
                } else {
                    $uploadsDir = "assets/img/foto_slidetipe/";
                    // $uploadsDir = "uploads/";
                    $allowedFileType = array('jpg', 'png', 'jpeg');

                    // Velidate if files exist
                    if (!empty(array_filter($_FILES['file_foto']['name']))) {

                        // Loop through file items
                        foreach ($_FILES['file_foto']['name'] as $id => $val) {
                            // Get files upload path
                            $fileName        = $_FILES['file_foto']['name'][$id];
                            $tempLocation    = $_FILES['file_foto']['tmp_name'][$id];
                            $newfilefoto      = date('dmYHis') . $fileName;
                            $targetFilePath  = $uploadsDir . $newfilefoto;
                            $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                            $id_tipe      = $_POST['id_fottipe'];
                            $uploadOk = 1;

                            if (in_array($fileType, $allowedFileType)) {
                                if (move_uploaded_file($tempLocation, $targetFilePath)) {
                                    $sqlVal = "('" . $id_tipe . "', '" . $newfilefoto . "')";
                                } else {
                                    $response = array(
                                        "status" => "alert-danger",
                                        "message" => "File coud not be uploaded."
                                    );
                                }
                            } else {
                                $response = array(
                                    "status" => "alert-danger",
                                    "message" => "Only .jpg, .jpeg and .png file formats allowed."
                                );
                            }
                            // Add into MySQL database
                            if (!empty($sqlVal)) {
                                $insert = $koneksi->query("INSERT INTO fot_slide (id_fottipe, file_slidetipe) VALUES $sqlVal");
                                if ($insert) {
                                    $response = array(
                                        "status" => "alert-success",
                                        "message" => "File berhasil diupload."
                                    );
                                } else {
                                    $response = array(
                                        "status" => "alert-danger",
                                        "message" => "Files coudn't be uploaded due to database error."
                                    );
                                }
                            }
                        }
                    } else {
                        // Error
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Silahkan pilih foto."
                        );
                    }
                }
            }
        }
    }
?>
    <div class="container mt-5rem pt-3">
        <input type="text" id="action" value="" hidden>
        <input type="text" id="action-tabel" value="" hidden>
        <input type="text" id="id_fotslide" value="" hidden>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label for="pilih-perum">Pilih Perumahan</label>
                            <select id="pilih-perum" name="id_perum" class="custom-select">
                                <option value="0">Pilih Perumahan</option>
                                <?php
                                include '../koneksi.php';
                                $no = 1;
                                $query = "SELECT * FROM perumahan ORDER BY id_perum DESC";
                                $data = $koneksi->prepare($query);
                                $data->execute();
                                $res1 = $data->get_result();
                                while ($row = $res1->fetch_assoc()) {
                                ?>
                                    <option value="<?php echo $row['id_perum']; ?> "><?php echo $row['nm_perum']; ?></option>

                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label for="pilih-tipe">Pilih Tipe</label>
                            <select id="pilih-tipe" name="id_tipe" class="custom-select">
                                <option value="">Pilih Tipe</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="cheklis-upload-fotdashboard" value="option1">
                                <label for="cheklis-upload-fotdashboard" class="custom-control-label">Ceklis untuk upload foto slide dahsboard</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="" method="post" enctype="multipart/form-data" class="mb-3">
                            <div class="user-image mb-3 text-center">
                                <div class="imgGallery">
                                </div>
                            </div>
                            <input type="text" id="in-dashboard" name="upload_foto_dashboard" value="0" hidden>
                            <input type="text" id="id-pilih-perum" name="id_fotperum" value="" hidden>
                            <input type="text" id="id-pilih-tipe" name="id_fottipe" value="" hidden>
                            <div class="form-group ">
                                <input type="text" id="link" class="form-control" name="link" placeholder="Link ..." autocomplete="off" required value="">
                            </div>
                            <div class="custom-file">
                                <input type="file" name="file_foto[]" class="custom-file-input" id="chooseFile" multiple disabled>
                                <label class="custom-file-label" for="chooseFile">Pilih file foto slide</label>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4 elevation-3">
                                <i class="fa-solid fa-file-arrow-up"></i> Upload Files
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Display response messages -->
                <?php if (!empty($response)) { ?>
                    <div class="alert <?php echo $response["status"]; ?>">
                        <?php echo $response["message"]; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <button type="button" id="btn-data-foto-dashboard" class="btn btn-sm bg-gradient-info elevation-3 float-right" data-id="">
                            <i class="fa-solid fa-images"></i> Lihat data foto slide dahsboard
                        </button>
                    </div>
                </div>
                <hr>
                <div id="select-tipe" class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label for="pilih-perum-tabel">Pilih Perumahan</label>
                            <select id="pilih-perum-tabel" name="id_perum" class="custom-select">
                                <option value="0">Pilih Perumahan</option>
                                <?php
                                include '../koneksi.php';
                                $no = 1;
                                $query = "SELECT * FROM perumahan ORDER BY id_perum DESC";
                                $data = $koneksi->prepare($query);
                                $data->execute();
                                $res1 = $data->get_result();
                                while ($row = $res1->fetch_assoc()) {
                                ?>
                                    <option value="<?php echo $row['id_perum']; ?> "><?php echo $row['nm_perum']; ?></option>

                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group">
                            <label for="pilih-tipe-tabel">Pilih Tipe</label>
                            <select id="pilih-tipe-tabel" name="id_tipe" class="custom-select">
                                <option value="">Pilih Tipe</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="text" id="id-pilih-perum-tabel" value="" hidden>
                <input type="text" id="id-pilih-tipe-tabel" value="" hidden>
            </div>
            <div class="card-body table-responsive p-0" style="height: 410px;">
                <table id="data-foto-slide" class="table table-head-fixed text-nowrap table-hover">
                </table>
            </div>
        </div>
    </div>

    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#chooseFile').attr('disabled');

            $('#pilih-tipe').change(function(e) {
                var tipe = $("#pilih-tipe").find(':selected').val();
                $('#id-pilih-tipe').val(tipe);
            });

            // CHEKLIST INPUT FOTO DASHBOARD
            $('#cheklis-upload-fotdashboard').click(function(e) {
                if ($(this).is(":checked")) {
                    // profesi.push($(this).val());
                    $('#in-dashboard').val('dashboard');
                    $('#chooseFile').removeAttr('disabled', true);
                } else {
                    $('#chooseFile').attr('disabled');
                    $('#in-dashboard').val('0');
                    alert('tdk');
                }
            });
            // END CHEKLIST INPUT FOTO DASHBOARD

            // SELECT INPUT
            $('#pilih-perum').change(function(e) {
                $('#chooseFile').removeAttr('disabled', true);
                var perum = $("#pilih-perum").find(':selected').val();
                $('#id-pilih-perum').val(perum);
                $('#action').val('input');
                // alert(perum);
                let formData = new FormData();
                formData.append('id-pilih-perum', $('#id-pilih-perum').val());
                formData.append('action', $('#action').val());
                $.ajax({
                    type: 'POST',
                    url: "prosess/proses_fotslide.php",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(msg) {
                        // alert(data);
                        $("#pilih-tipe").html(msg);


                    },
                    error: function() {
                        alert("Data Gagal Diupload");
                    }
                });
            });
            // END SELECT INPUT

            // SELECT TABEL 
            $('#pilih-perum-tabel').change(function(e) {
                var tabel_perum = $("#pilih-perum-tabel").find(':selected').val();
                $('#id-pilih-perum-tabel').val(tabel_perum);
                $('#action').val('tabel-perum');
                // alert(perum);
                let formData = new FormData();
                formData.append('id-pilih-perum-tabel', $('#id-pilih-perum-tabel').val());
                formData.append('action', $('#action').val());
                $.ajax({
                    type: 'POST',
                    url: "prosess/proses_fotslide.php",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(msg) {
                        // alert(data);
                        $("#pilih-tipe-tabel").html(msg);
                    },
                    error: function() {
                        alert("Data Gagal Diupload");
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: "pages/data_fotslide.php",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        // alert(data);
                        $("#data-foto-slide").html(data);
                        $('#action-tabel').val('action-perum');

                    },
                    error: function() {
                        alert("Data Gagal Diupload");
                    }
                });
            });

            $('#pilih-tipe-tabel').change(function(e) {
                var tipe = $("#pilih-tipe-tabel").find(':selected').val();
                $('#id-pilih-tipe-tabel').val(tipe);
                $('#action').val('data-foto-slide');
                // alert(tipe);
                let formData = new FormData();
                formData.append('id-pilih-tipe-tabel', $('#id-pilih-tipe-tabel').val());
                formData.append('action', $('#action').val());
                $.ajax({
                    type: 'POST',
                    url: "pages/data_fotslide.php",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        // alert(data);
                        $("#data-foto-slide").html(data);
                        $('#action-tabel').val('action-tipe');

                    },
                    error: function() {
                        alert("Data Gagal Diupload");
                    }
                });
            });
            // END SELECT TABEL

            $('#btn-data-foto-dashboard').click(function(e) {

                $('#action').val('data-foto-dashboard');
                // alert(tipe);
                let formData = new FormData();
                formData.append('action', $('#action').val());
                $.ajax({
                    type: 'POST',
                    url: "pages/data_fotslide.php",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        // alert(data);
                        $("#data-foto-slide").html(data);
                        $('#action-tabel').val('action-dashboard');

                    },
                    error: function() {
                        alert("Data Gagal Diupload");
                    }
                });
            });

            $(function() {
                // Multiple images preview with JavaScript
                var multiImgPreview = function(input, imgPreviewPlaceholder) {

                    if (input.files) {
                        var filesAmount = input.files.length;

                        for (i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();

                            reader.onload = function(event) {
                                $($.parseHTML('<img>')).addClass('img-fluid img-thumbnail width-15rem mr-3').attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                            }

                            reader.readAsDataURL(input.files[i]);
                        }
                    }

                };

                $('#chooseFile').on('change', function() {
                    multiImgPreview(this, 'div.imgGallery');
                });
            });

        });
    </script>
<?php } ?>