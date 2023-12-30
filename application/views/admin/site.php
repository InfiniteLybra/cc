<!--**********************************
            Content body start
        ***********************************-->

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Site Settings</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Section Settings</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form action="<?= base_url('Admin/update_data_section'); ?>" method="post" class="needs-validation" novalidate="">
                                <?php foreach ($site as $s) : ?>
                                    <div class="row">
                                        <!-- <div class="col-xl-6"> -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Section Heading
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="section_heading" name="section_heading" placeholder="Choose a safe one.." value="<?= $s['section_heading'] ?>" required>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Section Text</label>
                                                <input type="text" id="section_text" name="section_text" class="form-control" value="<?= $s['section_text'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                <?php endforeach; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Leadership Settings</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <?php foreach ($site as $s) : ?>
                                <div class="accordion accordion-primary" id="accordion-one">
                                    <div class="accordion-item">
                                        <div class="accordion-header  rounded-lg" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne" aria-expanded="true" role="button">
                                            <span class="accordion-header-icon"></span>
                                            <span class="accordion-header-text"><?= $s['leadership_name_1'] ?></span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-one">
                                            <div class="accordion-body-text">
                                                <form action="<?= base_url('Admin/update_data_leadership_1'); ?>" method="post" class="needs-validation" novalidate="">
                                                    <div class="row">
                                                        <!-- <div class="col-xl-6"> -->
                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Leadership Name
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="leadership_name_1" name="leadership_name_1" placeholder="Choose a safe one.." value="<?= $s['leadership_name_1'] ?>" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Leadership Title
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="leadership_title_1" name="leadership_title_1" placeholder="Choose a safe one.." value="<?= $s['leadership_title_1'] ?>" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-3">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Leadership Text</label>
                                                                <input type="text" id="leadership_text_1" name="leadership_text_1" class="form-control" value="<?= $s['leadership_text_1'] ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header  rounded-lg" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo" aria-expanded="true" role="button">
                                            <span class="accordion-header-icon"></span>
                                            <span class="accordion-header-text"><?= $s['leadership_name_2'] ?></span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordion-one">
                                            <div class="accordion-body-text">
                                                <form action="<?= base_url('Admin/update_data_leadership_2'); ?>" method="post" class="needs-validation" novalidate="">
                                                    <div class="row">
                                                        <!-- <div class="col-xl-6"> -->
                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Leadership Name
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="leadership_name_2" name="leadership_name_2" placeholder="Choose a safe one.." value="<?= $s['leadership_name_2'] ?>" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Leadership Title
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="leadership_title_2" name="leadership_title_2" placeholder="Choose a safe one.." value="<?= $s['leadership_title_2'] ?>" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-3">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Leadership Text</label>
                                                                <input type="text" id="leadership_text_2" name="leadership_text_2" class="form-control" value="<?= $s['leadership_text_2'] ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div class="accordion-header  rounded-lg" id="headingThree" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree" aria-expanded="true" role="button">
                                            <span class="accordion-header-icon"></span>
                                            <span class="accordion-header-text"><?= $s['leadership_name_3'] ?></span>
                                            <span class="accordion-header-indicator"></span>
                                        </div>
                                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-bs-parent="#accordion-one">
                                            <div class="accordion-body-text">
                                                <form action="<?= base_url('Admin/update_data_leadership_3'); ?>" method="post" class="needs-validation" novalidate="">
                                                    <div class="row">
                                                        <!-- <div class="col-xl-6"> -->
                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Leadership Name
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="leadership_name_3" name="leadership_name_3" placeholder="Choose a safe one.." value="<?= $s['leadership_name_3'] ?>" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Leadership Title
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="leadership_title_3" name="leadership_title_3" placeholder="Choose a safe one.." value="<?= $s['leadership_title_3'] ?>" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-3">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Leadership Text</label>
                                                                <input type="text" id="leadership_text_3" name="leadership_text_3" class="form-control" value="<?= $s['leadership_text_3'] ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- <div class="row"> -->
                                <!-- <div class="col-xl-6"> -->
                                <!-- <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Section Heading
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="section_heading" name="section_heading" placeholder="Choose a safe one.." value="<?= $s['section_heading'] ?>" required>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Section Text</label>
                                                <input type="text" id="section_text" name="section_text" class="form-control" value="<?= $s['section_text'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div> -->
                                <!-- </div> -->
                                <!-- </div> -->
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Slider Settings</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form action="<?= base_url('Admin/update_data_slider'); ?>" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
                                <?php foreach ($site as $s) : ?>
                                    <div class="row">
                                        <!-- <div class="col-xl-6"> -->
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom04">Slider Heading <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="slider_heading" name="slider_heading" placeholder="Choose a safe one.." value="<?= $s['slider_heading'] ?>" required>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Slider Text</label>
                                                <input type="text" id="slider_text" name="slider_text" class="form-control" value="<?= $s['slider_text'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Image 1</label>
                                                <div class="form-file">
                                                    <input type="file" id="file1" name="file1" class="form-file-input form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Image 2</label>
                                                <div class="form-file">
                                                    <input type="file" id="file2" name="file2" class="form-file-input form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Image 3</label>
                                                <div class="form-file">
                                                    <input type="file" id="file3" name="file3" class="form-file-input form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Image 4</label>
                                                <div class="form-file">
                                                    <input type="file" id="file4" name="file4" class="form-file-input form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Image 5</label>
                                                <div class="form-file">
                                                    <input type="file" id="file5" name="file5" class="form-file-input form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Image 6</label>
                                                <div class="form-file">
                                                    <input type="file" id="file6" name="file6" class="form-file-input form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="mb-3">
                                                <label class="text-label form-label">Image 7</label>
                                                <div class="form-file">
                                                    <input type="file" id="file7" name="file7" class="form-file-input form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                <?php endforeach; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">History Settings</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <div class="accordion accordion-primary" id="accordion-one">
                                <div class="accordion-item">
                                    <div class="accordion-header  rounded-lg" id="headingFour" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-controls="collapseFour" aria-expanded="true" role="button">
                                        <span class="accordion-header-icon"></span>
                                        <span class="accordion-header-text"><?= $s['heading_1'] ?></span>
                                        <span class="accordion-header-indicator"></span>
                                    </div>
                                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-bs-parent="#accordion-one">
                                        <div class="accordion-body-text">
                                            <form action="<?= base_url('Admin/update_data_history'); ?>" method="post" class="needs-validation" novalidate="">
                                                <?php foreach ($site as $s) : ?>
                                                    <div class="row">
                                                        <!-- <div class="col-xl-6"> -->
                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="heading_1">History
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="heading_1" name="heading_1" value="<?= $s['heading_1'] ?>" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="heading_tahun_1">Year
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="heading_tahun_1" name="heading_tahun_1" value="<?= $s['heading_tahun_1'] ?>" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-3">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">History Text</label>
                                                                <input type="text" id="heading_text_1" name="heading_text_1" class="form-control" value="<?= $s['heading_text_1'] ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                <?php endforeach; ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header  rounded-lg" id="headingFive" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-controls="collapseFive" aria-expanded="true" role="button">
                                        <span class="accordion-header-icon"></span>
                                        <span class="accordion-header-text"><?= $s['heading_2'] ?></span>
                                        <span class="accordion-header-indicator"></span>
                                    </div>
                                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-bs-parent="#accordion-one">
                                        <div class="accordion-body-text">
                                            <form action="<?= base_url('Admin/update_data_history_2'); ?>" method="post" class="needs-validation" novalidate="">
                                                <?php foreach ($site as $s) : ?>
                                                    <div class="row">
                                                        <!-- <div class="col-xl-6"> -->
                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="heading_2">History
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="heading_2" name="heading_2" value="<?= $s['heading_2'] ?>" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="heading_tahun_2">Year
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="heading_tahun_2" name="heading_tahun_2" value="<?= $s['heading_tahun_2'] ?>" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-3">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">History Text</label>
                                                                <input type="text" id="heading_text_2" name="heading_text_2" class="form-control" value="<?= $s['heading_text_2'] ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                <?php endforeach; ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header  rounded-lg" id="headingSix" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-controls="collapseSix" aria-expanded="true" role="button">
                                        <span class="accordion-header-icon"></span>
                                        <span class="accordion-header-text"><?= $s['heading_3'] ?></span>
                                        <span class="accordion-header-indicator"></span>
                                    </div>
                                    <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-bs-parent="#accordion-one">
                                        <div class="accordion-body-text">
                                            <form action="<?= base_url('Admin/update_data_history_3'); ?>" method="post" class="needs-validation" novalidate="">
                                                <?php foreach ($site as $s) : ?>
                                                    <div class="row">
                                                        <!-- <div class="col-xl-6"> -->
                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="heading_3">History
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="heading_3" name="heading_3" value="<?= $s['heading_3'] ?>" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="heading_tahun_3">Year
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="heading_tahun_3" name="heading_tahun_3" value="<?= $s['heading_tahun_3'] ?>" required>
                                                                <div class="invalid-feedback">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mb-3">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">History Text</label>
                                                                <input type="text" id="heading_text_3" name="heading_text_3" class="form-control" value="<?= $s['heading_text_3'] ?>" required>
                                                            </div>
                                                        </div>
                                                        <!-- </div> -->
                                                    </div>
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                <?php endforeach; ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************
            Content body end
        ***********************************-->