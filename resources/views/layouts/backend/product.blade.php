<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Document</title>
    <!--build:css css/styles.min.css-->
    <link href="{{ asset('css/backend/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend/selectize.bootstrap3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend/switcher.css') }}" rel="stylesheet">

    <!--build:js js/main.min.js -->
    <script src="{{ asset('js/lib/jquery.js') }}"></script>
    <script src="{{ asset('js/lib/tether.js') }}"></script>
    <script src="{{ asset('js/lib/bootstrap.js') }}"></script>
    <script src="{{ asset('js/lib/selectize.js') }}"></script>

    <script src="{{ asset('js/lib/jquery_dataTables.js') }}"></script>
    <script scr="{{ asset('js/lib/dataTables_bootstrap4.js') }}"></script>
    <script scr="{{ asset('js/lib/dataTables_fixedColumns.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/moment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- endbuild -->

    <!--endbuild-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap4.min.css">
    <style>
      th, td { white-space: nowrap; }
      div.dataTables_wrapper {
      margin: 0 auto;
      }
    </style>
</head>

<body>
  @include('layouts/backend/_header')
    <div class="container-fluid border-b main">
        <form>
            <div class="row py-2">
                <div class="col-3 mr-auto align-self-center">
                    <select id="select-promotion" placeholder="選擇管理商店"></select>
                </div>
                <div class="col-1 pull-right align-self-center">
                    <button class="btn btn-success btn-sm" type="button">建立廣告</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container-fluid">
        <div class="d-flex justify-content-start">
            <div class="py-2 align-self-center">
                <span data-toggle="tooltip" data-placement="top" title="報告">               
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                  <div class="dropdown-menu dropdown-save" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-item"><a href="#">儲存新檔</a></div>
                    <div class="divider" href="#"></div>
                    <div class="dropdown-header"><p>測測測測測測測測測測測測測測測測測測測測測測測測測測ㄜ測測測 <a href="">瞭解更多</a></p></div>
                  </div>
              </span>
            </div>
            <div class="p-2 mr-auto align-self-center">
                <h5 class="mb-0"><strong>帳號：</strong>京瓷弟弟</h5>
            </div>
            <div class="py-2 col-1 pr-0">
                <div class="control-group">
                    <select id="select-search" data-placeholder="搜尋">
                        <option value="3">搜尋ㄧ</option>
                        <option value="4">搜尋二</option>
                        <option value="1">搜尋三</option>
                    </select>
                </div>
            </div>
            <div class="py-2 col-2 pr-0">
                <div class="control-group">
                    <select id="select-filter" data-placeholder="篩選條件">
                        <option value="3">篩選條件ㄧ</option>
                        <option value="4">篩選條件二</option>
                        <option value="1">篩選條件三</option>
                    </select>
                </div>
            </div>
            <div class="py-2 col-4 pr-0">
                <div class="control-group">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                        <span></span> <b class="caret"></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <footer class="fixed-bottom bg-faded">
        <button class="btn btn-secondary pull-right">回報</button>
    </footer>
    
    <script>
    // 選擇廣告對象篩選
    $('#select-promotion').selectize({
        create: false,
        valueField: 'id',
        searchField: 'username',
        options: [{
            type: 'personal',
            id: 1234567,
            username: '京瓷弟弟',
            img: 'http://placehold.it/40x40/dddddd/000'
        }, {
            type: 'business',
            id: 2345678,
            username: '反亞尼',
            img: 'http://placehold.it/40x40/cccccc/000'
        }, {
            type: 'business',
            id: 3456789,
            username: '沒有人是局外人',
            img: 'http://placehold.it/40x40/aaaaaa/000'
        }, ],
        optgroups: [{
            value: 'personal',
            label: 'personal',
            label_scientific: '個人帳號',
            icon: 'fa-user'
        }, {
            value: 'business',
            label: 'business',
            label_scientific: '行銷專案',
            icon: 'fa-address-card'
        }, ],
        optgroupField: 'type',
        labelField: 'username',
        render: {
            optgroup_header: function(data, escape) {
                return '<div class="optgroup-header dropdown-tip"><small class="text-muted"><i class="fa ' + escape(data.icon) + '" aria-hidden="true"></i> ' + escape(data.label_scientific) + '</small></div>';
            },
            option: function(data, escape) {
                return '<div class="option d-flex justify-content-start">' +
                    '<div class="py-2 pr-2"><img src=" ' + escape(data.img) + '" alt="" class="rounded"></div>' +
                    '<div class="py-2 pr-2 align-self-top"><strong>' + escape(data.username) + '</strong><br><small>帳號 : 12345677</small></div>' +
                    '</div>';
            },
            item: function(data, escape) {
                return '<div class="item">' + escape(data.username) + '（ ' + escape(data.id) + '）</div>';
            }
        },

    });
    $('#select-search').selectize({
        create: true
    });
    $('#select-filter').selectize({
        create: true
    });
    $(function(){

      var table = $(".fixed-table").DataTable( {
          scrollY:        "600px",
          scrollX:        true,
          scrollCollapse: true,
          paging:         false,
          fixedColumns:   {
              leftColumns: 3
          }
      } );
  


      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }

      $('#reportrange').daterangepicker({
          startDate: start,
          endDate: end,
          ranges: {
             '今天': [moment(), moment()],
             '昨天': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
             '過去七天': [moment().subtract(6, 'days'), moment()],
             '過去三十天': [moment().subtract(29, 'days'), moment()],
             '這個月': [moment().startOf('month'), moment().endOf('month')],
             '上個月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          }
      }, cb);

      cb(start, end);

    })

    </script>
</body>

</html>
