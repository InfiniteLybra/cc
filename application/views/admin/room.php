<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Room</a></li>
            </ol>
        </div>
        <!-- row -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Room</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form id="formRoom" method="post" enctype="multipart/form-data" action="<?= base_url('Admin/addroom'); ?>">
                        <div class="modal-body">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control input-default" id="room" name="room" placeholder="Number Room" />
                            </div>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="category" id="category" class="form-control">
                                    <?php foreach ($roomcategory as $r) : ?>
                                        <option value="<?= $r['category'] ?>"><?= $r['category'] ?></option>
                                    <?php endforeach; ?>
                                </select>
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
                        <h4 class="card-title">Room Queque</h4>
                        <button type="button" class="btn btn-primary mb-2 tombolTambahData" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Add Room</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>#</strong></th>
                                        <th><strong>ROOM</strong></th>
                                        <th><strong>CATEGORY</strong></th>
                                        <th><strong>STATUS</strong></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($room as $r) : ?>
                                        <tr>
                                            <td><strong><?= $i++ ?></strong></td>
                                            <td><?= $r['room'] ?></td>
                                            <td><?= $r['category'] ?></td>
                                            <td>
                                                <?php if ($r['status'] == 'Available') : ?>
                                                    <span class="badge light badge-success"><?= $r['status']; ?></span>
                                                <?php else : ?>
                                                    <span class="badge light badge-danger"><?= $r['status']; ?></span>
                                                <?php endif; ?>
                                            </td>
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
                                                        <a class="dropdown-item" href="<?= base_url(); ?>Admin/deleteroom/<?= $r['id']; ?>">Delete</a>
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
            $('#exampleModalLabel').html('Add Room');
            $('#formRoom')[0].reset();
        });

        $('.tombolEditData').on('click', function() {
            console.log('Edit Data Clicked');
            $('#exampleModalLabel').html('Edit Room');
            const id = $(this).data('id');

            $.ajax({
                url: "<?= base_url('Admin/getroombyid/'); ?>" + id,
                method: 'get',
                dataType: 'json',
                success: function(data) {
                    console.log('Ajax Request Success', data);
                    $('#id').val(data.id);
                    $('#room').val(data.room);
                    $('#category').val(data.category);
                    $('#exampleModalCenter').modal('show');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Ajax Request Error', textStatus, errorThrown);
                }
            });
        });
    });
</script>