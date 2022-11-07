@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    <h1><span style="border-bottom: solid 5px orange;">タスク一覧</span></h1>
                                </th>

                                <th><a href="/tasks/create">新規登録</a></th>
                            </tr>
                        </thead>
                    </table>
                    <div class="card-header"></div>
                    <form action="{{ url('tasks') }}" method="post">
                        {{ csrf_field() }}

                        <div class="col-md-4">
                            <label>開始予定日</label>
                            <input type="text" class="form-control"  name="plans_work_start_date">
                        </div>
                        <div class="col-md-4">
                            <label>分類</label>
                            <input type="text" class="form-control"  name="task_category_id">
                        </div>
                        <div class="col-md-4">
                            <label>状態</label>
                            <input type="text" class="form-control"  name="state">
                        </div>
                        <div> <br></div>
                        <button type="submit" class="btn btn-primary col-md-3">検索</button>
                    </form>
                    @if (session('flash_message'))
                        <div class="alert alert-primary" role="alert" style="margin-top:50px;">
                            {{ session('flash_message') }}</div>
                    @endif
                    <div style="margin-top:50px;">
                    </div>


                    <div class="card-header"></div>


                    <table>
                        <thead>
                            <tr>
                                <th>操作</th>
                                <th>分類</th>
                                <th>名称</th>
                                <th>状態</th>
                                <th>予定日</th>
                                <th>納期</th>
                                {{-- <th>名前</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td><a href="./tasks/{{ $item->id }}/edit" class="btn btn-info">編集</a></td>
                                    <td>{{ $item->taskscategory->name }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->state_text }}</td>
                                    <td>{{ $item->plans_work_start_date_text }}</td>
                                    <td>{{ $item->dead_line_text }}</td>
                                    {{-- <td>{{ var_dump($item->family_name_text); }} --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>

                    {{ $list->links() }}
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
