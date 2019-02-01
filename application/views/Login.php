  <section class="ftco-section" style="display:block; margin:auto;">
        <div class="container" style="text-align:center;">
             <div class="row slider-text align-items-center">
                    <div class="col-md-4 col-sm-12">
                        <h1 class="mb-3 mt-5">Login</h1>
                    </div>
            </div>

            <div class="row col-md-4 col-sm-12">
                    <?php if($this->session->flashdata('errors')): ?>

                    <?php echo $this->session->flashdata('errors'); ?>

                    <?php endif; ?>

                    <?php if($this->session->flashdata('success')): ?>

                    <?php echo $this->session->flashdata('success'); ?>

                    <?php endif; ?>
            </div>

                <form action="adminsunway/login" method="post" class="form">

                    <div class="row mb-3 mt-3 col-md-4 col-sm-12">
                        <input name="username" type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="row mb-3 mt-3 col-md-4 col-sm-12">
                        <input name="password" type="passsword" class="form-control" placeholder="Password">
                    </div>
                    <div class="row mb-3 mt-3 col-md-4 col-sm-12">
                        <input name="login" type="submit" class="search-submit btn btn-primary" placeholder="Submit">
                    </div>

                </form>

                <a href="pro-reg">Register User</a>
        </div>
    </section>