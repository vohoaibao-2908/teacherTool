  <div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(<?= BASE_URL('assets/theme/media/bg-3.jpg') ?>);">
        <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
          <div class="kt-login__container">
            <div class="kt-login__logo" style="margin: 0 auto">
              <a href="#">
                <img alt="Logo" src="<?= BASE_URL('assets/images/logo.png') ?>" width="200" />
              </a>
            </div>
            <div class="kt-login__signin">
              <div class="kt-login__head" style="margin-bottom: 0">
              </div>
              <form class="kt-form" action="" method="post">



                <div class="input-group">
                  <input class="form-control" id="username" name="username" placeholder="Username or Email"></input>
                </div>

                <div class="input-group">
                  <input class="form-control" id="password" name="password" placeholder="Password"></input>
                </div>

                <div class="input-group">
                  <select class="form-control" name="campus_id" id="campus_id">
                    <option value="">Lựa chọn cơ sở</option>
                    <option value="ph">FPT Polytechnic Hà Nội</option>
                    <option value="pd">FPT Polytechnic Đà Nẵng</option>
                    <option value="ps">FPT Polytechnic Hồ Chí Minh</option>
                    <option value="pk">FPT Polytechnic Tây Nguyên</option>
                    <option value="ho">FPT Polytechnic HO</option>
                    <option value="pc">FPT Polytechnic Cần Thơ</option>
                    <option value="ht">FPT Polytechnic HiTech</option>
                    <option value="th">FPT PTCĐ Hà Nội</option>
                    <option value="ts">FPT PTCĐ Hồ Chí Minh</option>
                    <option value="td">FPT PTCĐ Đà Nẵng</option>
                    <option value="tc">FPT PTCĐ Cần Thơ</option>
                    <option value="tk">FPT PTCĐ Tây Nguyên</option>
                    <option value="tp">FPT PTCĐ Hải Phòng</option>
                    <option value="tt">FPT PTCĐ Huế</option>
                    <option value="tb">FPT PTCĐ Đồng Nai</option>
                    <option value="tg">FPT PTCĐ Bắc Giang</option>
                    <option value="pp">FPT Polytechnic Hải Phòng</option>
                    <option value="ti">FPT PTCĐ Bình Định</option>
                    <option value="tu">FPT PTCĐ Thái Nguyên</option>
                    <option value="tv">FPT PTCĐ Bình Dương</option>
                  </select>
                </div>


                <div class="kt-login__divider" style="margin: 15px 0">
                  <div class="kt-divider">
                    <span></span>
                    <span><a href="<?= BASE_URL('register') ?>">Đăng ký</a></span>
                    <span></span>
                  </div>
                </div>
                <div class="kt-login__options text-center">
                  <button type="button" class="btn btn-danger kt-btn btn-block">
                    Đăng Nhập
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>