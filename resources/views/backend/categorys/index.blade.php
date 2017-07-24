@extends('layouts.app')

@section('content')
    <a href="#" class="btn btn-info pull-right" onclick="history.back();">上一頁</a>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($details as $detail)
                    <div class="panel-heading">
                        <a href="/backend/stores/{{$detail->id}}/category/create">Create...商店網址{{$detail->domain}}</a>
                    </div>
                    <div class="panel-body">
                        <table>
                            <thead>
                            head.......
                            </thead>
                            <tbody>
                                <tr>
                                    <th>123</th>
                                    <th>123</th>
                                    <th>123</th>
                                    <th>123</th>
                                    <th>123</th>
                                </tr>
                                <tr>
                                    <td>456</td>
                                    <td>456</td>
                                    <td>456</td>
                                    <td>456</td>
                                    <td>456</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection