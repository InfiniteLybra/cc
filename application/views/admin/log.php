<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">History</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">History Queue</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>#</strong></th>
                                        <th><strong>DATE</strong></th>
                                        <th><strong>USERNAME</strong></th>
                                        <th><strong>CATEGORY</strong></th>
                                        <th><strong>ROOM</strong></th>
                                        <th><strong>PRICE</strong></th>
                                        <th><strong>PAYMENT</strong></th>
                                        <th><strong>STATUS</strong></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($log as $l) : ?>
                                        <tr>
                                            <td><strong><?= $i++ ?></strong></td>
                                            <td><?= $l['date_reserved'] ?></td>
                                            <td><?= $l['name'] ?></td>
                                            <td><?= $l['type_room'] ?></td>
                                            <td><?= $l['room'] ?></td>
                                            <td>Rp. <?= $l['price'] ?></td>
                                            <td>
                                                <a class="badge light badge-primary" href="<?= base_url('assets/upload/pembayaran/' . $l['payment']) ?>" target="_blank">
                                                    View Image
                                                </a>
                                            </td>
                                            <td>
                                                <?php if ($l['status'] == 'Success') : ?>
                                                    <span class="badge light badge-success"><?= $l['status']; ?></span>
                                                <?php elseif ($l['status'] == 'Booking') : ?>
                                                    <span class="badge light badge-primary"><?= $l['status']; ?></span>
                                                <?php else : ?>
                                                    <span class="badge light badge-warning"><?= $l['status']; ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <!-- <td>
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
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="<?= base_url(); ?>Admin/deletelog/<?= $l['id']; ?>">Delete</a>
                                                    </div>
                                                </div>
                                            </td> -->
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