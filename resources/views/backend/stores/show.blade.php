@extends('layouts.backend.product')

@section('content')

	<!-- Modal start-->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!--ajax start-->
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								category:<input type="text" placeholder="category" id="category" value="">
								category123:<input type="text" placeholder="category" id="category123" value="">
								category456:<input type="text" placeholder="category" id="category456" value="">
								category789:<input type="text" placeholder="category" id="category789" value="">
							</div>
						</div>
					</div>
					<!--ajax end-->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" id="save_change">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		$('#save_change').click(function ()
		{
            $.ajax({
                    type: "GET",
                	dataType: "TEXT",
					url: "/backend/stores/{{$store_id}}/category/store",
					data: {category:$('#category').val(),
						   category123:$('#category123').val(),
						   category456:$('#category456').val(),
						   category789:$('#category789').val()},
					success: function(response)
					{
                        console.log(response);
                        console.log(typeof(response));
                	},
					error: function(response)
                	{
                        console.log(response.status);
                	}
                })
			$('.close').click();
        })
	</script>


<div class="container-fluid py-2" id="maincontent">
	<ul class="nav nav-tabs nav-justified nav-style" role="tablist">
	    <li class="nav-item">
	        <a class="nav-link " data-toggle="tab" href="#home" role="tab"><i class="fa fa-snowflake-o" aria-hidden="true"></i>營銷分析</a>
	    </li>
	    <li class="nav-item">
	        <a class="nav-link active" data-toggle="tab" href="#profile" role="tab"><i class="fa fa-snowflake-o" aria-hidden="true"></i> 商品類別
	    <span id="ad-chose" class="mr-3 hidden-xs-up alert pop-alert pull-right alert-success alert-dismissible fade show" role="alert">已選擇 <strong>1</strong> 個類別  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></span>
	    </a>
	    </li>
	    <li class="nav-item">
	        <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="fa fa-snowflake-o" aria-hidden="true"></i> 商品</a>
	    </li>
	    <li class="nav-item">
	        <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="fa fa-snowflake-o" aria-hidden="true"></i> 加購品</a>
	    </li>
	</ul>
	<!-- Tab panes -->
	<div class="d-flex tab-wrap">
		<div class="tab-content tab-main">
			<div class="tab-pane" id="home" role="tabpanel">


			</div>
      <div class="tab-pane active" id="profile" role="tabpanel">
				<div class="nav mb-2">
					<div class="btn-group">

		        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal">

					<i class="fa fa-plus" aria-hidden="true"></i> 新增目錄
				</button>
					</div>
				</div>
				<div class="content">
					<div class="fixed-table-wrap">
						<table class="table table-sm table-bordered table-hover fixed-table">
							<thead class="thead-default">
								<tr>
								 	<th width="25">
									<input type="radio" name="">
								 	</th>
								 	<th width="30"></th>
								 	<th width="300">行銷活動名稱 <i class="fa fa-info-circle text-muted" aria-hidden="true"></i></th>
								 	<th>投放 <i class="fa fa-info-circle text-muted" aria-hidden="true"></i></th>
								 	<th width="200px">成果 <i class="fa fa-info-circle text-muted" aria-hidden="true"></i></th>
								 	<th>觸及率 <i class="fa fa-info-circle text-muted" aria-hidden="true"></i></th>
								 	<th>觸及率 <i class="fa fa-info-circle text-muted" aria-hidden="true"></i></th>
								 	<th>觸及率 <i class="fa fa-info-circle text-muted" aria-hidden="true"></i></th>
								 	<th>觸及率 <i class="fa fa-info-circle text-muted" aria-hidden="true"></i></th>
								 	<th>觸及率 <i class="fa fa-info-circle text-muted" aria-hidden="true"></i></th>
								 	<th>觸及率 <i class="fa fa-info-circle text-muted" aria-hidden="true"></i></th>
								 	<th>觸及率 <i class="fa fa-info-circle text-muted" aria-hidden="true"></i></th>
								 	<th>觸及率 <i class="fa fa-info-circle text-muted" aria-hidden="true"></i></th>
								</tr>
						  </thead>
							<tbody>
								<tr>
                  <td class="align-self-center">
					  <label class="custom-control custom-checkbox">
					  	<input type="checkbox" class="custom-control-input contol-checkbox" value="1" id="checkbox-1">
					  	<span class="custom-control-indicator"></span>
                      </label>
                  </td>
									<td>
										<div class="form-switcher form-switcher-md form-switcher-sm-phone">
      							<input type="checkbox" name="switcher-md" id="switcher-md">
      							<label class="switcher" for="switcher-md"></label>
						</div>    		
					</td>
                  <td>測測
                      <br><span class="text-muted small onhover"><a href="">連結</a>。<a href="">連結</a></span></td>
                  <td><strong>停止投放</strong>
                      <br><span class="text-muted small">已經停止</span></td>
                  <td><strong>-</strong>
                      <br><span class="text-muted small">購買</span></td>
                  <td><strong>91257</strong></td>
                  <td><strong>91257</strong></td>
                  <td><strong>91257</strong></td>
                  <td><strong>91257</strong></td>
                  <td><strong>91257</strong></td>
                  <td><strong>91257</strong></td>
                  <td><strong>91257</strong></td>
                  <td><strong>91257</strong></td>
              	</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
      <div class="tab-pane" id="messages" role="tabpanel">
				<div class="nav mb-2">
					<div class="btn-group">
		        <button type="button" class="btn btn-sm btn-secondary"><i class="fa fa-plus" aria-hidden="true"></i> 新增商品</button>
					</div>
	        <button type="button" class="btn-control btn btn-sm btn-secondary mx-2" disabled> 編輯</button>
	        <button type="button" class="btn-control btn btn-sm btn-secondary mx-2 mr-auto" data-toggle="tooltip" data-placement="bottom" title="請選擇至少一個行銷專案" disabled>複製商品</button>
				</div>
      </div>
      <div class="tab-pane" id="settings" role="tabpanel">...</div>
		</div>
		<!-- 展開編輯區塊 -->
		<div class="sidebar d-flex">
			<div class="sidebar-menu">
				<div class="sidebar-inner">
          <ul class="nav flex-column">
            <li class="nav-item sidebar-item">
							<a class="nav-link active" href="#"><i class="fa fa-2x fa-chevron-circle-right" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item sidebar-item">
 							<a class="nav-link" href="#"><i class="fa fa-2x fa-hand-peace-o" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item sidebar-item">
              <a class="nav-link" href="#"><i class="fa fa-2x fa-hand-peace-o" aria-hidden="true"></i></a>
            </li>
          </ul>
				</div>
        <div class="wrapmenu" data-toggle="tooltip" data-placement="left" title="請選擇行銷方案"></div>
      </div>
			<div class="sidebar-content">
				<div class="sidebar-header navbar-inverse"><h6>行銷活動專案</h6></div>
				<div class="sidebar-main bg-fade">
          <ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#s-effect" role="tab"><i class="fa fa-signal" aria-hidden="true"></i> 成效</a>
            </li>
            <li class="nav-item">
            	<a class="nav-link" data-toggle="tab" href="#s-cal" role="tab"><i class="fa fa-users" aria-hidden="true"></i> 人口統計</a>
            </li>
            <li class="nav-item">
            	<a class="nav-link" data-toggle="tab" href="#s-theme" role="tab"><i class="fa fa-window-restore" aria-hidden="true"></i> 版位</a>
            </li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="s-effect" role="tabpanel">...</div>
            <div class="tab-pane" id="s-cal" role="tabpanel">...</div>
            <div class="tab-pane" id="s-theme" role="tabpanel">...</div>
          </div>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	if($('.coverflow .carousel-inner div.item').length < 2) 
	{ 
		$('.carousel-indicators, .carousel-control').hide();
	}
</script>

@endSection
