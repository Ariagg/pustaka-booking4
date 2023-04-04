<!-- LOGIN MODAL -->
<div class="modal fade" tabindex="-1" id="loginModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login Member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>    
                </button>
            </div>
            <form action="<?= base_url('member'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">close</button>
                    <button type="submit" class="btn btn-outline-primary"> Log in</button>
                </div>
            </form>
        </div>      
    </div>
</div>
<!--/Login Modal--->

<!--Daftar Modal---->
<div class="modal fade" tabindex="-1" id="daftarModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Daftar Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('member/daftar'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama lengkap">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat lengkap">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                    </div>    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">close</button>
                    <button type="submit" class="btn btn-outline-primary"> Simpan</button>
                </div>   
            </form>   
        </div>
    </div>
</div>
<!--/Daftar Modal---->

<!--Info Modal---->
<div class="modal fade" tabindex="-1" id="Modalinfo" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-tittle">Informasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div class="modal-body">
            <span class="aler allert-message alert-success">Waktu Pengambilan BUku 1x24 jam dari Booking!!!</span>
        </div>
        <div class="modal-footer">
            <a class="btn btn-outline-info" href="<?= base_url(); ?>">Ok</a>
        </div>
    </div>
</div>
<!--/Info Modal---->