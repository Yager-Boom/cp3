@extends('layouts.backend.buildstore')

@section('content')
<div class="container-fluid p-0 border-b main">
        <div class="nav">
          <div class="left-bar mr-auto align-self-center p-3">
                <p>快速導引</p>
            </div>
        </div>
        <div id="smartwizard">
	        <ul>
              <li>
                <h5 class="strong"><i class="fa fa-bullhorn" aria-hidden="true"></i> 商店設定 </h5>
                <a href="#step-2"><small>參數 <i class="fa fa-lock text-muted" aria-hidden="true"></i></small></a>
                <a href="#step-3"><small>參數 <i class="fa fa-lock text-muted" aria-hidden="true"></i></small></a>
              </li>
              <li>
                <h5 class="strong"><i class="fa fa-bullhorn" aria-hidden="true"></i> 商店佈置 </h5>
                <a href="#step-3"><small>導覽列 <i class="fa fa-lock text-muted" aria-hidden="true"></i></small></a>
                <a href="#step-2"><small>橫幅 <i class="fa fa-lock text-muted" aria-hidden="true"></i></small></a>
              </li>
              <li>
                <h5 class="strong"><i class="fa fa-bullhorn" aria-hidden="true"></i> 商店外掛 </h5>
                <a href="#step-2"><small>第三方 <i class="fa fa-lock text-muted" aria-hidden="true"></i></small></a>
              </li>
	        </ul>
          
       </div>
    </div>


@endsection