<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
    <h2><?php echo $title; ?></h2>

    <?php echo form_open('mimin/places/update/'.$places_item['idPlaces']); ?>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="validationDefault01">Nama Tempat</label>
            <input type="text" name="name" class="form-control" id="validationDefault02" value="<?php echo $places_item['placesName']; ?>" required>
            <div class="invalid-feedback">
                Please provide a valid Name.
            </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
</main>
