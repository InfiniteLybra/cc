<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Room Category List</a></li>
            </ol>
        </div>
        <!-- row -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <form id="formCategory" method="post" enctype="multipart/form-data" action="<?= base_url('Admin/addcategory'); ?>">
                        <div class="modal-body">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control input-default" id="new_category" name="new_category" placeholder="New Category" />
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="information" name="information" placeholder="Information" />
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="price" name="price" placeholder="Price" />
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Upload</span>
                                <div class="form-file">
                                    <input type="file" id="file" name="file" class="form-file-input form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Room Category</h4>
                        <button type="button" class="btn btn-primary mb-2 tombolTambahData" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Add Category</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>#</strong></th>
                                        <th><strong>CATEGORY</strong></th>
                                        <th><strong>INFORMATION</strong></th>
                                        <th><strong>PRICE</strong></th>
                                        <th><strong>IMG</strong></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($roomcategory as $r) : ?>
                                        <tr>
                                            <td><strong><?= $i++ ?></strong></td>
                                            <td><?= $r['category'] ?></td>
                                            <td><?= $r['information'] ?></td>
                                            <td><?= $r['price'] ?></td>
                                            <td>
                                                <a class="badge light badge-primary" href="<?= base_url('assets/images/' . $r['img']) ?>" target="_blank">
                                                    View Image
                                                </a>
                                            </td>
                                            <!-- <td><span class="badge light badge-success">Successful</span></td> -->
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
                                                        <svg width="20px" height="20px" viewbox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item tombolEditData" data-id="<?= $r['id']; ?>" href="#">Edit</a>
                                                        <a class="dropdown-item" href="<?= base_url(); ?>Admin/deletecategory/<?= $r['id']; ?>">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('.tombolTambahData').on('click', function() {
            console.log('Tambah Data Clicked');
            $('#new_category').val('');
            $('#information').val('');
            $('#price').val('');

            $('#exampleModalLabel').html('Add Category');
            $('#formCategory')[0].reset();
        });

        $('.tombolEditData').on('click', function() {
            console.log('Edit Data Clicked');
            const id = $(this).data('id');
            $('#exampleModalLabel').html('Edit Category');

            $('#id').val(id);
            $('#formCategory').attr('action', 'http://softboy-lb-1545945834.us-east-1.elb.amazonaws.com/stay-smartly/Admin/updatecategory/' + id);

            $.ajax({
                url: "<?= base_url('Admin/getcategorybyid/'); ?>" + id,
                method: 'get',
                dataType: 'json',
                success: function(data) {
                    console.log('Ajax Request Success', data);
                    $('#new_category').val(data.category);
                    $('#information').val(data.information);
                    $('#price').val(data.price);
                    $('#exampleModalCenter').modal('show');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Ajax Request Error', textStatus, errorThrown);
                }
            });
        });

    });
</script>