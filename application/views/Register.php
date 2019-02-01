  <section class="ftco-section" style="display:block; margin:auto;">
        <div class="container" style="text-align:center;">
             <div class="row slider-text align-items-center">
                    <div class="col-md-4 col-sm-12">
                        <h1 class="mb-3 mt-5">Register</h1>
                    </div>
            </div>

            <div class="row col-md-4 col-sm-12">
                    <?php if($this->session->flashdata('errors')): ?>

                    <?php echo $this->session->flashdata('errors'); ?>

                    <?php endif; ?>
            </div>

                <form action="adminsunway/register" method="post" class="form">

                    <div class="row mb-3 mt-3 col-md-4 col-sm-12">
                        <input name="username" type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="row mb-3 mt-3 col-md-4 col-sm-12">
                        <input name="password" type="passsword" class="form-control" placeholder="Password">
                    </div>
                    <div class="row mb-3 mt-3 col-md-4 col-sm-12">
                        <input name="confirm_password" type="passsword" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="row mb-3 mt-3 col-md-4 col-sm-12">
                        <input name="login" type="submit" class="search-submit btn btn-primary" value="Register">
                    </div>

                </form>

        </div>
    </section>