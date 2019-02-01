<?php if(isset($_SESSION['logged_in'])) : ?>

    <?php if($this->session->logged_in) : ?>

    <section class="ftco-section">
            <div class="container">
                <div class="col-lg-12">
                    <div class="row slider-text align-items-center">
                        <div class="col-md-7 col-sm-12 ftco-animate">
                            <h1 class="mb-3 mt-5">Add Tours</h1>
                        </div>
                    </div>
                    <form action="tourcontroller/addtours">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="name" type="text" class="form-control" placeholder="Hotel Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="discription" type="text" class="form-control" placeholder="Discription">
                            </div>
                        </div>
                        <div class="row">
                            <div class="select-wrap col-md-6 group mb-3">
                                <select name="" id="" class="form-control" name="tour_type">
                                    <option value="" class="form-control-option-white" >Tour Type</option>
                                    <option value="" class="form-control-option-white" >Common</option>
                                    <option value="" class="form-control-option-white" >Beach</option>
                                    <option value="" class="form-control-option-white" >Eco</option>
                                    <option value="" class="form-control-option-white" >Nature</option>
                                    <option value="" class="form-control-option-white" >Wild Life</option>
                                    <option value="" class="form-control-option-white" >Adventure</option>
                                    <option value="" class="form-control-option-white" >Action</option>
                                    <option value="" class="form-control-option-white" >Ayurweda</option>
                                </select>
                            </div>
                            <div class="select-wrap col-md-6 group mb-3">
                                <select name="" id="" class="form-control" name="suitable_for">
                                    <option value="" class="form-control-option-white">Suitable for</option>
                                    <option value="" class="form-control-option-white">Seniors</option>
                                    <option value="" class="form-control-option-white">Couples</option>
                                    <option value="" class="form-control-option-white">Family</option>
                                    <option value="" class="form-control-option-white">Honeymooners</option>
                                    <option value="" class="form-control-option-white">Smalll Group </option>
                                    <option value="" class="form-control-option-white">Resurchers</option>
                                    <option value="" class="form-control-option-white">Singles + kids</option>
                                    <option value="" class="form-control-option-white">Pilgrims</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Price" name="price">
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
        
                </div>
            </div>
        </section>



    <?php else : ?>
        <?php redirect('home'); ?>
    <?php endif; ?>
    
<?php else : ?>
    <?php redirect('home'); ?>
<?php endif; ?>



