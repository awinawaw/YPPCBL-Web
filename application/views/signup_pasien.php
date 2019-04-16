<div class="login-page">
        <div class="login-page__box">
            <h4 class="login-page__title">Daftar Sebagai Pasien</h4>
            <p>isi data dibawah ini dengan lengkap dan benar</p>
            <div class="login-page__tabs">
                <div class="login-page__tab-panel" style="margin-top: 20px">
                    <div class="login-page__form">
                        <form method="POST" action="<?php echo base_url()?>index.php/home/add">
                            <div>
                                <label>Nama Depan</label>
                                <input type="text" name="first_name" value="" class="fields__input undefined-input">
                            </div>
                            <div>
                                <label>Nama Belakang</label>
                                <input type="text" name="last_name" value="" class="fields__input undefined-input">
                            </div>
                            <div>
                                <label>Nama Ayah</label>
                                <input type="text" name="father_name" value="" class="fields__input undefined-input">
                            </div>
                            <div>
                                <label>Nama Ibu</label>
                                <input type="text" name="mother_name" value="" class="fields__input undefined-input">
                            </div>
                            <div>
                                <label>No. Hp</label>
                                <input type="string" name="phone" value="" class="fields__input undefined-input">
                            </div>
                            <button type="submit" class="btn btn-accent login-page__btn undefined"> n   Submit</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
</div>