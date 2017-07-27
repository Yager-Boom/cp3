@extends('layouts.backend.app')

@section('content')
<!-- Nav tabs -->  
  <ul class="nav nav-tabs nav-submenu" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home" role="tab">商店列表</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#profile" role="tab">整體分析</a>
    </li>      
  </ul>
  <!-- Tab panes -->
  <div class="tab-content bg-faded">
    <div class="tab-pane active" id="home" role="tabpanel">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <div class="card">
              <img class="card-img-top" src="http://placehold.it/360x210/bbbbbb/000" alt="Card image cap">
              <div class="card-block">
                <p class="card-text text-center h4 mt-4">大港口</p>
                <p class="card-text text-center text-muted"><i class="fa fa-star" aria-hidden="true"></i> 1</p>
              </div>
                <a href="" class="img-center"><img class="card-img-top" src="http://placehold.it/180x180/dddddd/000" alt="Card image cap"></a>
              <a class="btn btn-primary">建立商店</a>
            </div>
            <span class="upload"><button class="btn btn-primary"><i class="fa fa-picture-o" aria-hidden="true"></i>上傳圖片</button></span>
          </div>
          <div class="col-8">
            <div class="article">
              <div class="article-header">
                <h4 class="pull-left">品牌商店</h4>                 
                <div class="clearfix"></div>
              </div>
              <hr class="my-2">
              <div class="article-block">
                <ul class="list-group list-group-plan">
                  @if($stores != '')
                    @foreach($stores as $list)
                      <li class="list-group-item clearfix">
                          <div class="col-6 list-group-link">
                            <a href="{{ url('backend/stores', ['link' => $list->id])}}">
                              <div class="d-flex align-self-center">
                                 <span class="mr-2"><img src="http://placehold.it/60x60/dddddd/000" class="rounded"></span>
                                  <span class="align-self-center">
                                    <h6 class="lead">{{ $list->domain}}</h6>
                                    <small class="text-muted">網址：{{ $list->domain}}</small>
                                  </span>
                                  <span class="hover-show align-self-center"><i class="fa fa-lg fa-sign-out" aria-hidden="true"></i></span>
                               
                              </div> 
                            </a>
                          </div>
                          <div class="col-1"><h3 class="display-4">0</h3></div>
                          <div class="col-2"><span class="text-muted">未處理訂單</span></div>
                          <div class="col-2"><strong>NT$100</strong><br><small class="text-muted">本日營業額</small></div>
                          <div class="col-1"><i class="fa fa-star ext-muted" aria-hidden="true"></i></div>
                      </li>
                    @endforeach
                  @endif
                </ul>
            
            <!-- <div class="article">
              <div class="article-header">
                <h4 class="pull-left">粉絲專頁</h4>
                 <form class="form-inline pull-right my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="搜尋">
                <span class="header-search">                      
                <select class="select-search" data-placeholder="過去七天">
                      <option value="3">搜尋ㄧ</option>
                      <option value="4">搜尋二</option>
                      <option value="1">搜尋三</option>
                  </select></span>
                </form>
                <div class="clearfix"></div>
              </div>
              <hr class="my-2">
              <div class="article-block">
               <h3>建立新的粉絲專頁</h3>
                <p>測測測測測ㄜ</p>
              </div>
              
            </div> -->

          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection
