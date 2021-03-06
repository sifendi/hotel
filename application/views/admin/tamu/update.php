<?php foreach ($tamu as $list): ?>
    <form action="<?= site_url('admin/tamu/update') ?>" method="post" class="form-horizontal"
          enctype="multipart/form-data" role="form">
        <div class="col-lg-8">
            <div class="panel panel-warning">
                <div class="panel-heading"><h4><?= $title ?></h4></div>
                <div class="panel-body">

                    <!-- alert -->
                    <?php if ($this->session->flashdata('errors') != NULL) { ?>
                        <div class="alert alert-warning" role="alert">
                            <p><?= $this->session->flashdata('errors'); ?></p>
                        </div>
                    <?php } ?>
                    <!-- end of alert -->

                    <fieldset>
                        <!-- Text input-->
                        <input id="id" name="id" type="text" value="<?= $list['id'] ?>" required="" hidden/>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="ktp">KTP / KTM / Passport</label>
                            <div class="col-md-8">
                                <input id="ktp" name="ktp" type="text" value="<?= $list['no_ktp'] ?>" placeholder=""
                                       class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="fname">Nama Depan</label>
                            <div class="col-md-8">
                                <input id="fname" name="fname" type="text" value="<?= $list['nama_depan'] ?>"
                                       placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="lname">Nama Belakang</label>
                            <div class="col-md-8">
                                <input id="lname" name="lname" type="text" value="<?= $list['nama_belakang'] ?>"
                                       placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">E-mail</label>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" value="<?= $list['email'] ?>" placeholder=""
                                       class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="phone">Telepon / HP</label>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" value="<?= $list['telepon'] ?>"
                                       placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="country">Negara</label>
                            <div class="col-md-8">
                                <select id="country" name="country" class="form-control">
                                    <?php foreach ($negara as $country): ?>
                                        <option value="<?= $country['country_id'] ?>" <?php if ($country['country_id'] == $list['country_id']) {
                                            echo 'selected';
                                        } ?>><?= $country['country_code'] ?> - <?= $country['country_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="address">Alamat</label>
                            <div class="col-md-8">
                                <input id="address" name="address" type="text" value="<?= $list['alamat'] ?>"
                                       placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="province">Provinsi</label>
                            <div class="col-md-8">
                                <input id="province" name="province" type="text" value="<?= $list['provinsi'] ?>"
                                       placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="city">Kota / Kabupaten</label>
                            <div class="col-md-8">
                                <input id="city" name="city" type="text" value="<?= $list['kota'] ?>" placeholder=""
                                       class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="zipcode">Kode Pos</label>
                            <div class="col-md-8">
                                <input id="zipcode" name="zipcode" type="text" value="<?= $list['zip'] ?>"
                                       placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="gcode">Grup Tamu</label>
                            <div class="col-md-8">
                                <select id="gcode" name="gcode" class="form-control">
                                    <?php foreach ($grup as $group): ?>
                                        <?php if ($list['kode_grup'] == $group['id_guest_group']) { ?>
                                            <option value="<?= $group['id_guest_group'] ?>"
                                                    selected><?= $group['nama'] ?></option>
                                        <?php } else { ?>
                                            <option
                                                value="<?= $group['id_guest_group'] ?>"><?= $group['nama'] ?></option>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="panel-footer">
                    <a href="javascript:back()" class="btn btn-warning">Kembali</a>
                    <button id="Submit" name="Submit" class="btn btn-success pull-right">Update</button>
                </div>
            </div>
        </div>
    </form>
<?php endforeach; ?>
<script>
    function back() {
        $.ajax({
            type: "POST",
            url: "<?=site_url('admin/tamu/')?>",
            data: "back=" + true,
            success: function (msg) {
                $("#div_result").html(msg);
            }
        });
    }
</script>
