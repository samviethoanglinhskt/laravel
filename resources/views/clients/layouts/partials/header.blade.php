
    <div class="header-top d-flex bg-black color-white align-items-center">
      <ul class="list-unstyled d-flex flex-1 gap-3 m-0">
        <li><a href="#" class="menu-link menu-link_us-s color-white">Shipping</a></li>
        <li><a href="#" class="menu-link menu-link_us-s color-white">FAQ</a></li>
        <li><a href="#" class="menu-link menu-link_us-s color-white">Contact</a></li>
        <li><a href="#" class="menu-link menu-link_us-s color-white">Track Order</a></li>
      </ul>
      <p class="mx-auto mb-0">FREE SHIPPING WORLDWIDE</p>
      <div class="heeader-top__right flex-1 d-flex gap-1 justify-content-end">
        <ul class="social-links list-unstyled d-flex flex-wrap mb-0">
          <li>
            <a href="#" class="footer__social-link d-block color-white">
              <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_facebook" /></svg>
            </a>
          </li>
          <li>
            <a href="#" class="footer__social-link d-block color-white">
              <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_twitter" /></svg>
            </a>
          </li>
          <li>
            <a href="#" class="footer__social-link d-block color-white">
              <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_instagram" /></svg>
            </a>
          </li>
          <li>
            <a href="#" class="footer__social-link d-block color-white">
              <svg class="svg-icon svg-icon_pinterest" width="14" height="15" viewBox="0 0 14 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_pinterest" /></svg>
            </a>
          </li>
        </ul>
        <select class="form-select form-select-sm bg-transparent color-white" name="store-language">
          <option value="english" selected>English</option>
          <option value="german">German</option>
          <option value="french">French</option>
          <option value="swedish">Swedish</option>
        </select>
        <select class="form-select form-select-sm bg-transparent color-white" name="store-currency">
          <option value="usd" selected>$ USD</option>
          <option value="gbp">£ GBP</option>
          <option value="eur">€ EURO</option>
        </select>
      </div>
    </div>
    <div class="header-desk header-desk_type_1">
      <div class="logo">
        <a href="index.html">
          <img src="{{asset('assets/images/logo.png')}}" alt="Uomo" class="logo__image d-block">
        </a>
      </div><!-- /.logo -->

      <nav class="navigation">
        <ul class="navigation__list list-unstyled d-flex">
            <li class="navigation__item">
                <a href="{{route('clients.index')}}" class="navigation__link">Home</a>
            </li>
          <li class="navigation__item">
            <a href="#" class="navigation__link">Category</a>
            <ul class="default-menu list-unstyled">
              @foreach ($dm as $d )
              <li class="sub-menu__item"><a href="{{url('product_details',$d->id)}}" class="menu-link menu-link_us-s">{{$d->name}}</a></li>
              @endforeach

            </ul><!-- /.box-menu -->
          </li>
          <li class="navigation__item">
            <a href="/about" class="navigation__link">About</a>
          </li>
          <li class="navigation__item">
            <a href="/contact" class="navigation__link">Contact</a>
          </li>
        </ul><!-- /.navigation__list -->
      </nav><!-- /.navigation -->

      <div class="header-tools d-flex align-items-center">
        <div class="header-tools__item hover-container">
          <div class="js-hover__open position-relative">
            <a class="js-search-popup search-field__actor" href="">
              <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_search" /></svg>
              <i class="btn-icon btn-close-lg"></i>
            </a>
          </div>

          <div class="search-popup js-hidden-content">
            <form action="https://uomo-html.flexkitux.com/Demo4/search_result.html" method="GET" class="search-field container">
              <p class="text-uppercase text-secondary fw-medium mb-4">What are you looking for?</p>
              <div class="position-relative">
                <input class="search-field__input search-popup__input w-100 fw-medium" type="text" name="search-keyword" placeholder="Search products">
                <button class="btn-icon search-popup__submit" type="submit">
                  <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_search" /></svg>
                </button>
                <button class="btn-icon btn-close-lg search-popup__reset" type="reset"></button>
              </div>
            </form><!-- /.header-search -->
          </div><!-- /.search-popup -->
        </div>
          @if (Route::has('clients.login'))

                  @auth
                  <a href="{{ url('client/index')}}" class="navigation__link">Home</a>
                  <a href="{{ url('auth/logout')}}" >Đăng Xuất</a>
                  @else
                  <div class="header-tools__item hover-container">
                      <a href="{{route('clients.login')}}">Đăng Nhập</a>
                  </div>
                      @if (Route::has('clients.register'))
                      <div class="header-tools__item hover-container">
                          <a href="{{route('clients.register')}}">Đăng Kí</a>
                      </div>
                  @endif
                  @endauth

          @endif
{{--        <div class="header-tools__item hover-container">--}}
{{--              <a href="{{route('clients.login')}}">Đăng Nhập</a>--}}
{{--          </div>--}}
{{--        <div class="header-tools__item hover-container">--}}
{{--          <a href="{{route('clients.register')}}">Đăng Kí</a>--}}
{{--        </div>--}}

        <a href="#" class="header-tools__item header-tools__cart js-open-aside" data-aside="cartDrawer">
          <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_cart" /></svg>
          <span class="cart-amount d-block position-absolute js-cart-items-count">0</span>
        </a>


      </div><!-- /.header__tools -->
    </div><!-- /.header-desk header-desk_type_1 -->
