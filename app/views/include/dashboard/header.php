<?php

$menu  = [

  [
    "name" => 'Dashboard',
    "path" => '',
  ],
  [
    "name" => 'Quản lý',
    "path" => 'quan-ly',
  ],
  [
    "name" => 'lớp học',
    "path" => 'lop-hoc',
  ],
  [
    "name" => 'sinh viên',
    "path" => 'sinh-vien',
  ],
  [
    "name" => 'tiện ích',
    "path" => 'tien-ich',
  ], [
    "name" => 'liên kết',
    "path" => 'lien-ket',
  ]
]

?>

<header class="top-header">
  <nav class="navbar navbar-expand">
    <div class="mobile-toggle-icon d-xl-none">
      <i class="bi bi-list"></i>
    </div>
    <div class="top-navbar d-none d-xl-block">
      <ul class="navbar-nav align-items-center">
        <?php
        foreach ($menu as $item) { ?>
          <li class="nav-item">
            <a class="nav-link d-none d-xxl-block" href="<?= BASE_URL($item['path']) ?>"><?= $item['name'] ?></a>
          </li>
        <?php } ?>
      </ul>
    </div>
    <div class="search-toggle-icon d-xl-none ms-auto">
      <i class="bi bi-search"></i>
    </div>
    <div class="searchbar d-none d-xl-flex ms-auto"></div>

    <div class="top-navbar-right ms-3">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item dropdown dropdown-large">
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
            <div class="user-setting d-flex align-items-center gap-1">
              <img src="assets/images/avatars/avatar-1.png" class="user-img" alt="">
              <div class="user-name d-none d-sm-block">Thầy Long</div>
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="#">
                <div class="d-flex align-items-center">
                  <img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="60" height="60">
                  <div class="ms-3">
                    <h6 class="mb-0 dropdown-user-name">Thầy Long</h6>
                    <small class="mb-0 dropdown-user-designation text-secondary">Giáo viên</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <?php

            $menu_user = [
              [
                "name" => 'Thông tin tài khoản',
                "path" => 'tien-ich/profile',
                "icon" => 'bi bi-person-fill',

              ],

              [
                "name" => 'Files tải xuống',
                "path" => 'tien-ich/downloads',
                "icon" => 'bi bi-cloud-arrow-down-fill',

              ],

              [
                "name" => 'Đăng xuất',
                "path" => 'logout',
                "icon" => 'bi bi-lock-fill',

              ],
            ]

            ?>

            <?php

            foreach ($menu_user as $key => $value) { ?>
              <?php
              if ($key === array_key_last($menu_user)) { ?>
                <li>
                  <hr class="dropdown-divider">

                </li>
              <?php
              }
              ?>

              <li>
                <a class="dropdown-item" href="<?= BASE_URL($value['path']) ?>">
                  <div class="d-flex align-items-center">
                    <div class="setting-icon"><i class="<?= $value['icon'] ?>"></i></div>
                    <div class="setting-text ms-3"><span><?= $value['name'] ?></span></div>
                  </div>
                </a>
              </li>



            <?php } ?>

          </ul>
        </li>
        <li class="nav-item dropdown dropdown-large">
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
            <div class="projects">
              <i class="bi bi-grid-3x3-gap-fill"></i>
            </div>
          </a>
          <!-- <div class="dropdown-menu dropdown-menu-end">
            <div class="row row-cols-3 gx-2">
              <div class="col">
                <a href="ecommerce-orders.html">
                  <div class="apps p-2 radius-10 text-center">
                    <div class="apps-icon-box mb-1 text-white bg-primary bg-gradient">
                      <i class="bi bi-cart-plus-fill"></i>
                    </div>
                    <p class="mb-0 apps-name">Orders</p>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="javascript:;">
                  <div class="apps p-2 radius-10 text-center">
                    <div class="apps-icon-box mb-1 text-white bg-danger bg-gradient">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <p class="mb-0 apps-name">Users</p>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="ecommerce-products-grid.html">
                  <div class="apps p-2 radius-10 text-center">
                    <div class="apps-icon-box mb-1 text-white bg-success bg-gradient">
                      <i class="bi bi-bank2"></i>
                    </div>
                    <p class="mb-0 apps-name">Products</p>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="component-media-object.html">
                  <div class="apps p-2 radius-10 text-center">
                    <div class="apps-icon-box mb-1 text-white bg-orange bg-gradient">
                      <i class="bi bi-collection-play-fill"></i>
                    </div>
                    <p class="mb-0 apps-name">Media</p>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="pages-user-profile.html">
                  <div class="apps p-2 radius-10 text-center">
                    <div class="apps-icon-box mb-1 text-white bg-purple bg-gradient">
                      <i class="bi bi-person-circle"></i>
                    </div>
                    <p class="mb-0 apps-name">Account</p>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="javascript:;">
                  <div class="apps p-2 radius-10 text-center">
                    <div class="apps-icon-box mb-1 text-dark bg-info bg-gradient">
                      <i class="bi bi-file-earmark-text-fill"></i>
                    </div>
                    <p class="mb-0 apps-name">Docs</p>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="ecommerce-orders-detail.html">
                  <div class="apps p-2 radius-10 text-center">
                    <div class="apps-icon-box mb-1 text-white bg-pink bg-gradient">
                      <i class="bi bi-credit-card-fill"></i>
                    </div>
                    <p class="mb-0 apps-name">Payment</p>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="javascript:;">
                  <div class="apps p-2 radius-10 text-center">
                    <div class="apps-icon-box mb-1 text-white bg-bronze bg-gradient">
                      <i class="bi bi-calendar-check-fill"></i>
                    </div>
                    <p class="mb-0 apps-name">Events</p>
                  </div>
                </a>
              </div>
              <div class="col">
                <a href="javascript:;">
                  <div class="apps p-2 radius-10 text-center">
                    <div class="apps-icon-box mb-1 text-dark bg-warning bg-gradient">
                      <i class="bi bi-book-half"></i>
                    </div>
                    <p class="mb-0 apps-name">Story</p>
                  </div>
                </a>
              </div>
            </div>

          </div> -->
        </li>

      </ul>
    </div>
  </nav>
</header>