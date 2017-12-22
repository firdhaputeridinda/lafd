<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
    <h1><?php echo $title; ?></h1>

    <?php echo validation_errors(); ?>

    <?php echo form_open('staff/create'); ?>
        <div class="row">
            <div class="col-md-12 mb-6">
            <label for="validationDefault01">NIK</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="NIK" required>
            <div class="invalid-feedback">
                Please provide a valid NIK.
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="validationDefault01">Name</label>
            <input type="text" class="form-control" id="validationDefault02" placeholder="Name" required>
            <div class="invalid-feedback">
                Please provide a valid Name.
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="validationDefault02">Gender</label>
            <input type="text" class="form-control" id="validationDefault03" placeholder="Select Gender" required>
            <div class="invalid-feedback">
                Please provide a valid Gender.
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="validationDefault03">Email</label>
            <input type="email" class="form-control" id="validationDefault04" placeholder="Email" required>
            <div class="invalid-feedback">
                Please provide a valid email.
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="validationDefault04">Password</label>
            <input type="password" class="form-control" id="validationDefault05" placeholder="Password" required>
            <div class="invalid-feedback">
                Please provide a valid password.
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="validationDefault03">Mobile Phone</label>
            <input type="number" class="form-control" id="validationDefault04" placeholder="080000000" required>
            <div class="invalid-feedback">
                Please provide a valid email.
            </div>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Add User</button>
    </form>
</main>
