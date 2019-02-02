<?php if(isset($_SESSION['logged_in'])) : ?>

    <?php if($this->session->logged_in) : ?>
    <style>
        .navbar{
            display:none;
        };
        .ftco-section{
            margin-top: 0 !important; 
        };
        p{
            margin-bottom: 0px !important;
        }

    </style>


    <section class="ftco-section" style="padding-top:0px !important">
        <div class="container">
            <div class="col-lg-12">
            
             <?php if($this->session->flashdata('errors')) : ?>
                <div class="message" style="width:50%; height:auto; color: black; background-color:yellow; line-hight: 1; ">
                    <?php echo $this->session->flashdata('errors'); ?>
                </div>
            <?php endif; ?>
             <?php if($this->session->flashdata('success')) : ?>
                <div class="message" style="width:50%; height:auto; color: black; background-color:#7CFC00; line-hight: 1; ">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
                <div class="row slider-text align-items-center">
                    <div class="col-md-4 col-sm-12 ftco-animate">
                        <h1 class="mb-3 mt-5">Add Tours</h1>
                    </div>
                </div>
                <form action="tourcontroller/addtours" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" class="form-control" placeholder="Tour Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="description" type="text" class="form-control" placeholder="Description">
                        </div>
                    </div>
                    <div class="row">
                        <div class="select-wrap col-md-6 group mb-3">
                            <select class="form-control" name="tour_type">
                                <option value="" class="form-control-option-white" >Tour Type</option>
                                <option value="common" class="form-control-option-white" >Common</option>
                                <option value="beach" class="form-control-option-white" >Beach</option>
                                <option value="eco" class="form-control-option-white" >Eco</option>
                                <option value="nature" class="form-control-option-white" >Nature</option>
                                <option value="wild life" class="form-control-option-white" >Wild Life</option>
                                <option value="adventure" class="form-control-option-white" >Adventure</option>
                                <option value="action" class="form-control-option-white" >Action</option>
                                <option value="ayurweda" class="form-control-option-white" >Ayurweda</option>
                            </select>
                        </div>
                        <div class="select-wrap col-md-6 group mb-3">
                            <select class="form-control" name="suitable_for">
                                <option value="" class="form-control-option-white">Suitable for</option>
                                <option value="seniors" class="form-control-option-white">Seniors</option>
                                <option value="couples" class="form-control-option-white">Couples</option>
                                <option value="family" class="form-control-option-white">Family</option>
                                <option value="honeymooners" class="form-control-option-white">Honeymooners</option>
                                <option value="small-group" class="form-control-option-white">Smalll Group </option>
                                <option value="resurchers" class="form-control-option-white">Resurchers</option>
                                <option value="singles-kids" class="form-control-option-white">Singles + kids</option>
                                <option value="pilgrims" class="form-control-option-white">Pilgrims</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder="Price in $" name="price">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="file" class="form-control" placeholder="Photo" name="photo_id">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder="Location" name="location">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-10">
                            <div class="form-group">
                                <input type="submit" value="Add Tour" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </div>
                </form>
                <form action="adminsunway/logout"  method="post">
                    <div class="row mb-5">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="submit" value="Log out" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
    <?php else : ?>
        <?php redirect('home'); ?>
    <?php endif; ?>
    
<?php else : ?>
    <?php redirect('home'); ?>
<?php endif; ?>



