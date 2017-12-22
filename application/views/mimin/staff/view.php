<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
    <h1><?php echo $title; ?></h1>

    <?php echo form_open('mimin/staff/update'); ?>
        <div class="row">
            <div class="col-md-12 mb-6">
            <label for="validationDefault01">NIK</label>
            <input type="text" class="form-control" id="validationDefault01" value="<?php echo $staff_item['nik']; ?>" required>
            <div class="invalid-feedback">
                Please provide a valid NIK.
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="validationDefault01">Name</label>
            <input type="text" class="form-control" id="validationDefault02" value="<?php echo $staff_item['name']; ?>" required>
            <div class="invalid-feedback">
                Please provide a valid Name.
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="validationDefault02">Gender</label>
            <input type="text" class="form-control" id="validationDefault03" value="<?php echo $staff_item['gender']; ?>" required>
            <div class="invalid-feedback">
                Please provide a valid Gender.
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="validationDefault03">Email</label>
            <input type="email" class="form-control" id="validationDefault04" value="<?php echo $staff_item['email']; ?>" required>
            <div class="invalid-feedback">
                Please provide a valid email.
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="validationDefault04">Password</label>
            <input type="password" class="form-control" id="validationDefault05" value="<?php echo $staff_item['password']; ?>" required>
            <div class="invalid-feedback">
                Please provide a valid password.
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="validationDefault03">Telepon</label>
            <input type="email" class="form-control" id="validationDefault04" value="<?php echo $staff_item['mobilePhone']; ?>" required>
            <div class="invalid-feedback">
                Please provide a valid Telepon.
            </div>
            </div>
        </div>


        <button class="btn btn-primary" type="submit">Update User</button>
    </form>
</main>
