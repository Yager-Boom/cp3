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
	            <li><h5 class="strong"><i class="fa fa-folder" aria-hidden="true"></i> 企業&商店</h5><a href="#step-1"><small>創建</small></a></li>	            
	        </ul>
          <div class="right-content">

              <div id="step-1" class="">
                  <div class="container d-flex">
                      <div class="article-wrap">
                        <div class="article">
                          <div class="article-header">
                            <h4 class="pull-left">方案</h4>
                            <div class="article-text pull-right">
                              <a href="">一些連結</a> ・
                              
                            </div>
                            <div class="clearfix"></div>
                          </div>                       
                        </div>
                        <h4>What's your marketing objective?</h4>
                        <div class="article mt-2">
                          <div class="article-block">
                            <div class="row justify-content-md-center my-5">
                              <div class="col-8">
                                <div class="text-center m-4"><i class="fa fa-paper-plane fa-4x text-info" aria-hidden="true"></i></div>
                                <h4 class="display-4 text-center mb-4">REACH</h4>
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="alert-heading">一些注意</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                              </div>
															{!! Form::open(array('id' => 'creatForm', 'action' => array('backend\StoresController@store'), 'files'=>true)) !!}
									            @include('backend/stores/_form')
                              </div>
                            </div>

                          </div>                     
                        </div>
												{{ Form::submit('建立', array('class' => 'btn btn-success pull-right')) }}
												{!! Form::close() !!}
                      </div>
                  </div>               
              </div>
              
          </div>
       </div>
    </div>


@endsection
