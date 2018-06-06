<?php $this->load->view('template_admin/header') ?>
<?php $this->load->view('template_admin/menu') ?>
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <?php echo form_open('Jenis_laundry/insert') ?>
                                <div class="form-group">
                                    <label for="">Id</label>
                                    <input type="text" class="form-control" name="id_jenis_laundry">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="">Ratio</label>
                                    <input type="number" class="form-control" name="ratio" step="0.1" max="1" min="0">
                                </div>
                                <input type="submit" class="btn btn-sm btn-primary">
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
<?php $this->load->view('template_admin/footer') ?>