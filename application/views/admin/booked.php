<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Booked</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Booked Queue</h4>
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
                                    <?php foreach ($booked as $b) : ?>
                                        <tr>
                                            <td><strong><?= $i++ ?></strong></td>
                                            <td><?= $b['date_reserved'] ?></td>
                                            <td><?= $b['name'] ?></td>
                                            <td><?= $b['type_room'] ?></td>
                                            <td><?= $b['room'] ?></td>
                                            <td>Rp. <?= $b['price'] ?></td>
                                            <td>
                                                <a class="badge light badge-primary" href="<?= base_url('assets/upload/pembayaran/' . $b['payment']) ?>" target="_blank">
                                                    View Image
                                                </a>
                                            </td>
                                            <td>
                                                <?php if ($b['status'] == 'Success') : ?>
                                                    <span class="badge light badge-success"><?= $b['status']; ?></span>
                                                <?php elseif ($b['status'] == 'Booking') : ?>
                                                    <span class="badge light badge-primary"><?= $b['status']; ?></span>
                                                <?php else : ?>
                                                    <span class="badge light badge-warning"><?= $b['status']; ?></span>
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
                                                        <?php foreach ($room as $r) : ?>
                                                            <?php if ($r['status'] == 'Available') : ?>
                                                                <a class="dropdown-item" href="<?= base_url('Admin/insertroom'); ?>/<?= $r['room']; ?>/<?= $b['id']; ?>"><?= $r['room']; ?></a>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
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