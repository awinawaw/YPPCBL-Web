<form method="POST" action="<?php echo base_url()?>index.php/home/add">
    <div>
        <label> Nama Depan </label>
        <input type="text" name="first_name" value="" class="fields__input undefined-input">
    </div>
    <div>
        <label> Nama Belakang </label>
        <input type="text" name="last_name" value="" class="fields__input undefined-input">
    </div>
    <div>
        <label> Nama Ayah </label>
        <input type="text" name="father_name" value="" class="fields__input undefined-input">
    </div>
    <div>
        <label> Nama Ibu </label>
        <input type="text" name="mother_name" value="" class="fields__input undefined-input">
    </div>
    <div>
        <label> No HP </label>
        <input type="text" name="phone" value="" class="fields__input undefined-input">
    </div>
    <button type="submit" id="add-submit" class="btn btn-accent login-page__btn undefined">
                                <canvas class="ink" height="0" width="0" style="border-radius: inherit; height: 100%; left: 0px; position: absolute; top: 0px; width: 100%;">
                                </canvas>Submit</button>
</form>
