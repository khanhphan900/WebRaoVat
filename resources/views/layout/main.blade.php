  <!DOCTYPE html>
  <html lang="en">
    <head>
      <title>Title</title>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
      />

      <!-- Bootstrap CSS -->
      <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
      />

    </head>
    <body>
      @include('layout.header')
      <div class="container">
          <div class="row">
            <div class="col-3">
              <ul class="list-group">
                <li
                  class="list-group-item active text-dark font-weight-bold"
                  style="background: #eeeeee;border: #dfdfdf "
                >
                  <img
                    class="rounded mr-2"
                    src="./img/vitri.png"
                    alt=""
                    width="30"
                    height="30"
                  />
                  Vị trí
                </li>
                <li class="list-group-item">
                  <div class="dropdown">
                    <a
                      class="form-control dropdown-toggle"
                      href="#"
                      role="button"
                      id="dropdownMenuLink"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      Đà Nẵng &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach ($khuVuc as $khuVuc)
                        <a class="dropdown-item" href="#">{{$khuVuc}}</a>
                        @endforeach
                    </div>
                </li>
              </ul>
              <hr />
              <ul class="list-group">
                <li
                  class="list-group-item active text-dark font-weight-bold"
                  style="background: #eeeeee;border: #dfdfdf"
                >
                  <img
                    class="rounded mr-2"
                    src="./img/danhMuc.png"
                    alt=""
                    width="30"
                    height="30"
                  />
                  Danh mục
                @php
                    $hinh = ["./img/nhaDat.png","./img/viecLam.jpg","./img/oTo.jpg","./img/dienThoai.png","./img/laptop.png"]
                @endphp
                @for ($i = 0; $i < count($hinh); $i++)
                  <li class="list-group-item">
                    <img
                      class="rounded mr-2"
                      src={{$hinh[$i]}}
                      alt=""
                      width="30"
                      height="30"
                    />{{$danhMuc[$i]}}
                  </li>
                @endfor
              </ul>
            </div>
            <div class="col-9 border rounded">
            @section('content')
                
            @show
            </div>
          
        </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"
      ></script>
    </body>
  </html>
