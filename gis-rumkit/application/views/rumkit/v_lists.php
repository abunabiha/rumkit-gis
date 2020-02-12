<div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <?=$title?>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <a href="<?= base_url('rumkit/input')?>" class="btn btn-primary btn-sn"><i class="fa fa-plus"> Input Data</i></a>
                                    <div><br></div>
                                    <div class="table-responsive">

         <table class="table table-striped table-bordered table-hover" id="dataTables-example">

             <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Rumah Sakit</th>
                    <th>No. Telpon</th>
                    <th>Alamat</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach ($rumkit as $key=>$value) { ?>
            <tr>    
            <td><?= $no++; ?> </td>
                
                <td><?= $value->nama_rumkit ?></td>
                <td><?= $value->alamat ?></td>
                <td><?= $value->no_telpon ?></td>
                <td><?= $value->latitude ?></td>
                <td><?= $value->longitude ?></td>
                <td>
                    <a href="" class="btn btn-success btn-sn">Edit</a>
                    <a href="" class="btn btn-danger btn-sn">Delete</a>
                </td>
</tr>
                <?php }; ?>
            </table>     
            </div>
        </div>
    </div>
</div>

                                      
    