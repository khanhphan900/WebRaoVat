<header>
    <div class="container-fluid bg-success">
      <div class="row">
        <div class="col-2 mb-2 mt-0 text-center">
          <a href="./Home.html" class="h1 text-warning">Logo</a
          ><span class="text-small text-light">Web rao vặt</span>
        </div>
        <div class="col-8">
          <div class="row" style="margin-top: 9px">
            <div class="col-8 px-0">
              <input
                type="text"
                class="form-control"
                placeholder="Tìm kiếm .."
              />
            </div>
            <div class="col-2 px-0">
              <!-- <input
                type="text"
                class="form-control"
                placeholder="Danh mục.."
              /> -->
              <div class="dropdown">
                <button
                  class="form-control dropdown-toggle"
                  href="#"
                  role="button"
                  id="dropdownMenuLink"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Danh mục &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  @foreach ($danhMuc as $danhMuc)
                    <a class="dropdown-item" href="#">{{$danhMuc}}</a>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="col-2 px-0">
              <div class="dropdown">
                <button
                  class="form-control dropdown-toggle"
                  href="#"
                  role="button"
                  id="dropdownMenuLink"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Đà Nẵng &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  @foreach ($khuVuc as $khuVuc)
                  <a class="dropdown-item" href="#">{{$khuVuc}}</a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-2 text-center m-auto pl-0">
          <a href="#" class="text-white px-2">Đăng nhập</a>
          <a
            href="{{route('home.create')}}"
            class="text-warning px-2"
            style="border:1px dashed white "
            >Đăng tin</a
          >
        </div>
      </div>
    </div>
    <hr class="mt-0" />

  </header>
  