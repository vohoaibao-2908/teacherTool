<aside class="sidebar-wrapper">
  <div class="iconmenu">
    <div class="nav-toggle-box">
      <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
    </div>
    <ul class="nav nav-pills flex-column">
      <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
      </li>
      <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Quản lý">
        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-manager" type="button"><i class="bi bi-briefcase-fill"></i></button>
      </li>

      <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Lớp học">
        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-classroom" type="button"><i class="bi bi-layers-fill"></i></button>
      </li>

      <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Sinh viên">
        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-student" type="button"><i class="bi bi-layers-fill"></i></button>
      </li>
      <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Tiện ích">
        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-extensions" type="button"><i class="bi bi-grid-fill"></i></button>
      </li>

      <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Liên kết">
        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-links" type="button">
          <i class="bi bi-share-fill"></i></button>
      </li>
    </ul>
  </div>


  <div class="textmenu">
    <div class="brand-logo">
      <img src="<?= BASE_URL('assets/images/brand-logo-2.png') ?>" width="140" alt="" />
    </div>
    <div class="tab-content">
      <div class="tab-pane fade" id="pills-dashboards">
        <div class="list-group list-group-flush">
          <div class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-0">Dashboards</h5>
            </div>
            <small class="mb-0">FPOLY MANAGER</small>
          </div>
          <?php

          $dashboard  = [

            [
              "name" => 'Quản lý',
              "path" => 'quan-ly',
              "icon" => 'bx bx-cast',
            ],
            [
              "name" => 'Lớp học',
              'icon' => 'bx bx-layer',
              "path" => 'lop-hoc',
            ],
            [
              "name" => 'Sinh viên',
              'icon' => 'bx bx-user',
              "path" => 'sinh-vien',
            ],
            [
              "name" => 'Tiện ích',
              "path" => 'tien-ich',
              'icon' => 'bx bx-extension',
            ], [
              "name" => 'Liên kết',
              "path" => 'lien-ket',
              'icon' => 'bx bx-link',

            ]
          ]

          ?>
          <?php foreach ($dashboard as $item) { ?>
            <a href="<?= BASE_URL($item['path']) ?>" class="list-group-item"><i class="<?= $item['icon'] ?>"></i><?= $item['name'] ?></a>
          <?php } ?>

        </div>
      </div>

      <div class="tab-pane fade" id="pills-manager">
        <div class="list-group list-group-flush">
          <div class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-0">Quản lý</h5>
            </div>
            <small class="mb-0">FPOLY MANAGER</small>
          </div>

          <?php

          $manager = [
            [
              'name' => 'Khóa học',
              'path' => 'quan-ly/khoa-hoc',
              'icon' => 'bi bi-box',
            ],
            [
              'name' => 'Học kỳ',
              'path' => 'quan-ly/hoc-ky',
              'icon' => 'bi bi-box',
            ],
            [
              'name' => 'Môn học',
              'path' => 'quan-ly/mon-hoc',
              'icon' => 'bi bi-box',
            ],

            [
              'name' => 'Loại lớp',
              'path' => 'quan-ly/loai-lop',
              'icon' => 'bi bi-box',
            ],
            [
              'name' => 'Điểm của loại lớp',
              'path' => 'quan-ly/diem',
              'icon' => 'bi bi-box',
            ],
          ];
          ?>

          <?php
          foreach ($manager as $item) { ?>
            <a href="<?= BASE_URL($item['path']) ?>" class="list-group-item"><i class="<?= $item['icon'] ?>"></i><?= $item['name'] ?></a>

          <?php } ?>
        </div>
      </div>

      <div class="tab-pane fade" id="pills-classroom">
        <div class="list-group list-group-flush">
          <div class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-0">Lớp học</h5>
            </div>
            <small class="mb-0">FPOLY MANAGER</small>
          </div>

          <?php

          $classroom = [
            [
              'name' => 'Lớp đang dạy',
              'path' => 'lop-hoc/lop-dang-day',
              'icon' => 'bi bi-box',
            ],
            [
              'name' => 'Các lớp đã dạy',
              'path' => 'lop-hoc/lop-da-day',
              'icon' => 'bi bi-box',
            ],
          ];
          ?>

          <?php
          foreach ($classroom as $item) { ?>
            <a href="<?= BASE_URL($item['path']) ?>" class="list-group-item"><i class="<?= $item['icon'] ?>"></i><?= $item['name'] ?></a>

          <?php } ?>
        </div>
      </div>

      <div class="tab-pane fade" id="pills-student">
        <div class="list-group list-group-flush">
          <div class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-0">Lớp học</h5>
            </div>
            <small class="mb-0">FPOLY MANAGER</small>
          </div>

          <?php

          $student = [
            [
              'name' => 'Sinh viên giỏi',
              'path' => 'sinh-vien/sinh-vien-gioi',
              'icon' => 'bi bi-box',
            ],
            [
              'name' => 'Sinh viên yếu',
              'path' => 'sinh-vien/sinh-vien-yeu',
              'icon' => 'bi bi-box',
            ],
          ];
          ?>

          <?php
          foreach ($student as $item) { ?>
            <a href="<?= BASE_URL($item['path']) ?>" class="list-group-item"><i class="<?= $item['icon'] ?>"></i><?= $item['name'] ?></a>

          <?php } ?>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-extensions">
        <div class="list-group list-group-flush">
          <div class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-0">Tiện ích</h5>
            </div>
            <small class="mb-0">Một số tiện ích cho bạn</small>
          </div>

          <?php

          $extensions = [
            [
              'name' => 'Thành ngữ',
              'path' => 'tien-ich/thanh-ngu',
              'icon' => 'bi bi-box',
            ],
            [
              'name' => 'Profile',
              'path' => 'tien-ich/profile',
              'icon' => 'bi bi-box',
            ],
            [
              'name' => 'Files tải xuống',
              'path' => 'tien-ich/downloads',
              'icon' => 'bi bi-download',
            ],

          ];
          ?>

          <?php
          foreach ($extensions as $item) { ?>
            <a href="<?= BASE_URL($item['path']) ?>" class="list-group-item"><i class="<?= $item['icon'] ?>"></i><?= $item['name'] ?></a>
          <?php } ?>

        </div>
      </div>

      <div class="tab-pane fade" id="pills-links">
        <div class="list-group list-group-flush">
          <div class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-0">Liên kết</h5>
            </div>
            <small class="mb-0">Một số liên kết cho bạn</small>
          </div>
          <?php

          $links = [
            [
              'name' => 'Giảng dạy',
              'path' => 'lien-ket/giang-day',
              'icon' => 'bi bi-box',
            ],
            [
              'name' => 'Khác',
              'path' => 'lien-ket/khac',
              'icon' => 'bi bi-box',
            ],

          ];
          ?>

          <?php
          foreach ($links as $item) { ?>
            <a href="<?= BASE_URL($item['path']) ?>" class="list-group-item"><i class="<?= $item['icon'] ?>"></i><?= $item['name'] ?></a>
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
</aside>