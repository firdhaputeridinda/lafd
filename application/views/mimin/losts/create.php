<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
    <h1><?php echo $title; ?></h1>

    <?php echo validation_errors(); ?>

    <?php echo form_open('losts/create'); ?>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="validationDefault01">Name</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="Nama" required>
            <div class="invalid-feedback">
                Please provide a valid NIM.
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="validationDefault01">Kategori</label>
            <select class="form-control" required>
                <?php foreach ($category as $category_item): ?> 
                <option value="<?php echo $category_item['idCategory'] ;?>"><?php echo $category_item['categoryName'] ;?></option>
                <?php endforeach; ?>
            </select>
            <div class="invalid-feedback">
                Please provide a valid Name.
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="validationDefault01">Lokasi</label>
            <select class="form-control" required>
                <?php foreach ($places as $places_item): ?> 
                <option value="<?php echo $places_item['idPlaces'] ;?>"><?php echo $places_item['placesName'] ;?></option>
                <?php endforeach; ?>
            </select>
            <div class="invalid-feedback">
                Please provide a valid Name.
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="validationDefault02">Spesifik Lokasi</label>
            <input type="text" class="form-control" id="validationDefault03" placeholder="Email" required>
            <div class="invalid-feedback">
                Please provide a valid Email.
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
            <label for="validationDefault03">Tanggal</label>
            <input type="date" class="form-control" id="validationDefault04" placeholder="Waktu" value="" required>
            <div class="invalid-feedback">
                Please provide a valid email.
            </div>
            </div>
            <div class="col-md-3 mb-3">
            <label for="validationDefault03">Jam</label>
            <input type="time" class="form-control" id="validationDefault04" placeholder="Waktu" value="" required>
            <div class="invalid-feedback">
                Please provide a valid email.
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="validationDefault04">Foto</label>
            <input type="file" class="form-control" id="validationDefault05" placeholder="Foto" required>
            <div class="invalid-feedback">
                Please provide a valid password.
            </div>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Add losts</button>
    </form>
</main>
