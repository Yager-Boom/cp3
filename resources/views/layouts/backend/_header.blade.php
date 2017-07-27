<header role="banner">
  <div role="navigation">
    <nav class="fixed-top navbar navbar-toggleable-md navbar-inverse bg-primary">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/backend">{{ config('app.name', 'Laravel') }}</a>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown dropdown-main">
              <a class="nav-link" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownSub">
                  <i class="fa fa-bars" aria-hidden="true"></i> 主要選單
              </a>
              <div class="dropdown-menu dropdown-submenu"">
                  <div class="card-group">
                    <div class="card">
                      <div class="card-block">
                        <h5 class="card-title">資產</h5>
                        <p class="card-text"><a href="" data-des="一些介紹qereytru">公司管理</a></p>
                        <p class="card-text"><a href="manage.html" data-des="一些介紹sfsdfsdf">商店管理</a></p>
                        <p class="card-text"><a href="" data-des="一些介紹qereytru">公司人員</a></p>
                      </div>
                    </div>
                    <div class="card card-sub">
                      <div class="card-block">
                        <h5 class="card-title">建立與管理</h5>
                        <p class="card-text"><a href="" data-des="一些介紹gggggg">建立商店</a></p>
                        <p class="card-text"><a href="" data-des="一些介紹gggggg">上架商品</a></p>
                        <p class="card-text"><a href="" data-des="一些介紹gggggg">會員管理</a></p>
                      </div>
                    </div>
                    <div class="card card-sub">
                      <div class="card-block">
                        <h5 class="card-title">營銷</h5>
                        <p class="card-text"><a href="" data-des="一些介紹j">電訪</a></p>
                        <p class="card-text"><a href="" data-des="一些介紹j">優惠券</a></p>
                        <p class="card-text"><a href="" data-des="一些介紹j">電子報</a></p>
                      </div>
                    </div>
                    <div class="card card-sub">
                      <div class="card-block">
                        <h5 class="card-title">分析報表</h5>
                        <p class="card-text"><a href="" data-des="一些介紹sdddd">會員分析</a></p>
                        <p class="card-text"><a href="" data-des="一些介紹sdddd">訂單分析</a></p>
                      </div>
                    </div>
                    <div class="card card-sub">
                      <div class="card-block">
                        <h5 class="card-title">自動化</h5>
                        <p class="card-text"><a href="" data-des="一些介紹">郵件通知</a></p>
                        <p class="card-text"><a href="" data-des="一些介紹">簡訊通知</a></p>
                        <p class="card-text"><a href="" data-des="一些介紹">對帳</a></p>
                        <p class="card-text"><a href="" data-des="一些介紹">托運單匯出</a></p>
                      </div>
                    </div>
                    
                  </div>
                  <div class="card-footer d-flex">
                    <div class="card-more text-right"><a href="" id="more">更多選單 <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
                    <div class="card-des">
                      <p class="card-text text-muted"><i class="fa fa-info-circle" aria-hidden="true"></i> 滑鼠移至可了解連結</p>
                    </div>
                  </div>
              </div>
             
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right top-navbar">
            <li class="nav-item align-self-center">
                <form class="form-inline my-2 my-lg-0">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" placeholder="網站內容">
                        <span class="input-group-btn">
                          <button class="btn btn-secondary btn-sm" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </span>
                    </div>
                </form>
            </li>
            <li class="nav-item nav-blank"><span class="m-x-2 nav-link">|</span></li>
            <!-- 企業切換 -->
            <li class="nav-item dropdown topbar-profile">
                <a href="#" class="nav-link" data-toggle="dropdown"><span class="rounded topbar-profile-image"><img src="http://placehold.it/20x20/f4f4f4/000"></span> {{ Auth::user()->name }} <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-header">
                    <a href="#">前往主頁</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="pull-right"><i class="fa fa-sign-out" aria-hidden="true"></i> 登出</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>

                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item active">
                        <a href="#">
                            <div class="d-flex justify-content-start">
                                <div class="py-2 pr-2"><img src="http://placehold.it/60x60/dddddd/000" alt="" class="rounded"></div>
                                <div class="py-2 pr-2 align-self-center"><strong>{{ Auth::user()->email }}</strong>
                                    <br><small>帳號 : {{ Auth::user()->name }}</small></div>
                                <div class="ml-auto p-2 align-self-center"><i class="fa fa-lg fa-check" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </li>

                </ul>
            </li>
            <!-- <li class="nav-item nav-blank"><span class="m-x-2 nav-link">|</span></li>
            <li class="nav-item dropdown iconify">
                <a href="#" class="nav-link" data-toggle="dropdown"><span data-toggle="tooltip" data-placement="bottom" title="通知"><i class="fa fa-lg fa-globe"></i></span><span class="bg-danger text-white label label-danger absolute">4</span></a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-notice">
                    <li class="dropdown-header"><a href="#"><strong>通知報告</strong></a><span class="pull-right"><a href="#">顯示已讀</a>．<a href="#">未讀</a></span></li>
                    <li class="dropdown-item dropdown-notice bg-primary text-white">
                        <div class="row">
                            <div class="col-3 py-2 text-center align-self-center"><i class="fa fa-lg fa-info-circle" aria-hidden="true"></i></div>
                            <div class="col-9 py-2 align-self-center">
                                <p>看書或工作時，您需要集中式光線，以免傷害眼睛。用燈具裝飾天花板及牆面，可讓房間看起來更大。 </p>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown-item active">
                        <a href="#">
                            <div class="row">
                                <div class="col-3 py-2"><img src="http://placehold.it/60x60/dddddd/000" alt="" class="rounded"></div>
                                <div class="col-9 py-2 align-self-top">
                                    <p>看書或工作時，您需要集中式光線，以免傷害眼睛。用燈具裝飾天花板及牆面，可讓房間看起來更大。 </p>
                                    <small class="text-muted">13 hours ago</small></div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#">
                            <div class="row">
                                <div class="col-3 py-2"><img src="http://placehold.it/60x60/dddddd/000" alt="" class="rounded"></div>
                                <div class="col-9 py-2 align-self-top">
                                    <p>看書或工作時，您需要集中式光線，以免傷害眼睛。</p>
                                    <small class="text-muted">13 hours ago</small></div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown iconify">
                <a href="#" class="nav-link" data-toggle="dropdown"><span data-toggle="tooltip" data-placement="bottom" title="專案"><i class="fa fa-lg fa-flag" aria-hidden="true"></i></span><span class="label label-danger bg-danger text-white absolute">3</span></a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-notice">
                    <li class="dropdown-header"><strong>管理頁面</strong></li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item active">
                        <a href="#">
                            <div class="row">
                                <div class="col-3 py-2"><img src="http://placehold.it/60x60/dddddd/000" alt="" class="rounded"></div>
                                <div class="col-9 py-2 align-self-top">
                                    <p>看書或工作時，您需要集中式光線，以免傷害眼睛。用燈具裝飾天花板及牆面，可讓房間看起來更大。 </p>
                                    <small class="text-muted">13 hours ago</small></div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#">
                            <div class="row">
                                <div class="col-3 py-2"><img src="http://placehold.it/60x60/dddddd/000" alt="" class="rounded"></div>
                                <div class="col-9 py-2 align-self-top">
                                    <p>看書或工作時，您需要集中式光線，以免傷害眼睛。</p>
                                    <small class="text-muted">13 hours ago</small></div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li> -->
            <li class="nav-item nav-blank"><span class="m-x-2 nav-link">|</span></li>
            <li class="right-opener">
                <a href="javascript:;" class="nav-link open-right">使用說明 <i class="fa fa-question-circle" aria-hidden="true"></i></a>
            </li>
        </ul>
      </div>
    </nav>
  </div>
</header>