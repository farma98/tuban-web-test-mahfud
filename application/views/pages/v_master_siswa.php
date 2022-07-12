<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Siswa CI3</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url() . 'assets/dist/img/logo-php.png' ?>" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/fonts/custom-font.css' ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/adminlte.min.css' ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css' ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/select2/css/select2.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css' ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css' ?>">

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
    <div class="wrapper">
        <!--Include Header-->
        <?php $this->load->view('layouts/header'); ?>
        <!--Include Sidebar-->
        <?php $this->load->view('layouts/sidebar'); ?>
        <div class="content-wrapper" style="height: auto">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Master Siswa</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="">Data Master</a>
                                </li>
                                <li class="breadcrumb-item active">DataMaster Siswa</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="float-right">
                                                <a href="" class="btn btn-warning p-2" data-toggle="modal" data-placement="top" title="Tambah Data Master Siswa" data-target="#ModalAdd"><i class="nav-icon fas fa-plus"></i>
                                                    Tambah Data</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="mytable" class="table table-bordered table-striped text-center table-full">
                                        <thead>
                                            <tr>
                                                <th>Nim</th>
                                                <th>Nama</th>
                                                <th>Password</th>
                                                <th>TTL</th>
                                                <th>Alamat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <!-- Modal Add Siswa-->
                                <div id="add-row-form">
                                    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Tambah Data</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <input type="text" name="nim" id="nim" class="form-control" placeholder="NIM" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="date" name="ttl" id="ttl" class="form-control" placeholder="TTL" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button id="btnSimpanSiswa" class="btn btn-success">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Update Siswa-->
                                <div id="update-row-form">
                                    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Update Data</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <input type="text" name="u_nim" id="u_nim" class="form-control" placeholder="NIM" required readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="u_nama" id="u_nama" class="form-control" placeholder="Nama" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="u_password" id="u_password" class="form-control" placeholder="Nama" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="date" name="u_ttl" id="u_ttl" class="form-control" placeholder="TTL" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="u_alamat" id="u_alamat" class="form-control" placeholder="Alamat" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button id="btnUpdateSiswa" class="btn btn-success">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Hapus Produk-->
                                <div id="delete-row-div">
                                    <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Hapus Data</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form>
                                                    <div class="modal-body">
                                                        <input type="text" name="d_nim" id="d_nim" required value="" class="form-control">
                                                        <strong>Anda yakin mau menghapus data ini?</strong>
                                                    </div>
                                                </form>
                                                <div class=" modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button id="btnHapusSiswa" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--Include Footer-->
        <?php $this->load->view('layouts/footer'); ?>
    </div>
</body>

<!-- jQuery -->
<script src="<?php echo base_url() . 'assets/plugins/jquery/jquery.min.js' ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() . 'assets/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() . 'assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() . 'assets/dist/js/adminlte.js' ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/datatables-responsive/js/dataTables.responsive.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/datatables-buttons/js/dataTables.buttons.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js' ?>"></script>

<script>
    $(document).ready(function() {
        // Setup datatables
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
            return {
                "iStart": oSettings._iDisplayStart,
                "iEnd": oSettings.fnDisplayEnd(),
                "iLength": oSettings._iDisplayLength,
                "iTotal": oSettings.fnRecordsTotal(),
                "iFilteredTotal": oSettings.fnRecordsDisplay(),
                "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };

        var table = $("#mytable").dataTable({
            "pageLength": 25,
            "lengthChange": true,
            "responsive": true,
            initComplete: function() {
                var api = this.api();
                $('#mytable_filter input')
                    .off('.DT')
                    .on('input.DT', function() {
                        api.search(this.value).draw();
                    });
            },
            oLanguage: {
                sProcessing: "loading..."
            },
            processing: true,
            serverSide: true,
            ajax: {
                "url": "<?php echo base_url() . 'Siswa/getSiswaJson' ?>",
                "type": "POST"
            },
            columns: [{
                    "data": "s_nim"
                },
                {
                    "data": "s_nama"
                },
                {
                    "data": "s_password",
                },
                {
                    "data": "s_ttl"
                },
                {
                    "data": "s_alamat"
                },
                {
                    "data": "view"
                }
            ],
            order: [
                [1, 'asc']
            ],
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                $('td:eq(0)', row).html();
            }
        });

        $('#mytable').on('click', '.edit_record', function() {
            var nim = $(this).data('s_nim');
            var nama = $(this).data('s_nama');
            var password = $(this).data('s_password');
            var ttl = $(this).data('s_ttl');
            var alamat = $(this).data('s_alamat');

            $('#ModalEdit').modal('show');
            $('[name="u_nim"]').val(nim);
            $('[name="u_nama"]').val(nama);
            $('[name="u_password"]').val(password);
            $('[name="u_ttl"]').val(ttl);
            $('[name="u_alamat"]').val(alamat);
        });

        $('#mytable').on('click', '.hapus_record', function() {
            var nim = $(this).data('s_nim');
            $('#ModalHapus').modal('show');
            $('[name="d_nim"]').val(nim);
        });

        $('#btnSimpanSiswa').on('click', function() {
            var nim = $('#nim').val();
            var nama = $('#nama').val();
            var ttl = $('#ttl').val();
            var alamat = $('#alamat').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url() . 'Siswa/simpan' ?>",
                dataType: "JSON",
                data: {
                    nim: nim,
                    nama: nama,
                    ttl: ttl,
                    alamat: alamat
                },
                success: function(data) {
                    $('[name="nim"]').val("");
                    $('[name="nama"]').val("");
                    $('[name="ttl"]').val("");
                    $('[name="alamat"]').val("");
                    $('#ModalAdd').modal('hide');

                    window.location.reload();
                }
            });
            return false;
        });

        $('#btnUpdateSiswa').on('click', function() {
            var nim = $('#u_nim').val();
            var nama = $('#u_nama').val();
            var password = $('#u_password').val();
            var ttl = $('#u_ttl').val();
            var alamat = $('#u_alamat').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url() . 'Siswa/update' ?>",
                dataType: "JSON",
                data: {
                    nim: nim,
                    nama: nama,
                    password: password,
                    ttl: ttl,
                    alamat: alamat
                },
                success: function(data) {
                    $('[name="u_nim"]').val("");
                    $('[name="u_nama"]').val("");
                    $('[name="u_password"]').val("");
                    $('[name="u_ttl"]').val("");
                    $('[name="u_alamat"]').val("");
                    $('#ModalaEdit').modal('hide');

                    window.location.reload();
                }
            });
            return false;
        });

        $('#btnHapusSiswa').on('click', function() {
            var nim = $('#d_nim').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url() . 'Siswa/delete' ?>",
                dataType: "JSON",
                data: {
                    nim: nim
                },
                success: function(data) {
                    $('#ModalHapus').modal('hide');

                    window.location.reload();
                }
            });
            return false;
        });
    });
</script>