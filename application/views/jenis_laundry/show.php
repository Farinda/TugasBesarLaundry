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
                                <a href="<?php echo base_url('Jenis_laundry/insert') ?>" class="btn btn-sm btn-primary mb-3">Tambah</a>
                                <table class="table table-bordered">
                                    <thead>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Ratio</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list_data as $key => $value): ?>
                                            <tr>
                                                <td><?php echo ++$key ?></td>
                                                <td><?php echo $value['nama'] ?></td>
                                                <td><?php echo $value['ratio'] ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('Jenis_laundry/update/'.$value['id_jenis_laundry']) ?>" class="btn btn-sm btn-success">Edit</a>
                                                    <a href="<?php echo base_url('Jenis_laundry/delete/'.$value['id_jenis_laundry']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
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