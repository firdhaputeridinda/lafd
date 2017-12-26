<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
    <h2><?php echo $title; ?></h2>
    <?php echo validation_errors(); ?>    
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="validationDefault01">Lost and Found</label>
            <input type="text" name="name" class="form-control" id="validationDefault02" value="<?php echo $homepage_item['homepageName']; ?>" required>
            <div class="invalid-feedback">
                Lost and Found
            </div>
            </div>
        </div>
    </form>
</main>
