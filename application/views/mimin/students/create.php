<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
    <h1><?php echo $title; ?></h1>

    <?php echo validation_errors(); ?>

    <?php echo form_open('students/create'); ?>
        <div class="row">
            <div class="col-md-12 mb-6">
            <label for="validationDefault01">NIK</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="NIM" required>
            <div class="invalid-feedback">
                Please provide a valid NIM.
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
            <label for="validationDefault02">Email</label>
            <input type="text" class="form-control" id="validationDefault03" placeholder="Email" required>
            <div class="invalid-feedback">
                Please provide a valid Email.
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="validationDefault03">Email</label>
            <input type="email" class="form-control" id="validationDefault04" placeholder="Password" required>
            <div class="invalid-feedback">
                Please provide a valid email.
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="validationDefault04">Password</label>
            <input type="password" class="form-control" id="validationDefault05" placeholder="080000000" required>
            <div class="invalid-feedback">
                Please provide a valid password.
            </div>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Add Students</button>
    </form>
</main>
