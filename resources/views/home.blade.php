@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <table>
                        <thead>
                            <tr>
                                {{-- <td>{{ $item->formatted_due_date }}</td> --}}
                                <th> <h1><span style="border-bottom: solid 5px orange;">ToDo</span></h1></th>
                            </tr>
                        </thead>
                    </table>
                    <div class="card-header"></div>
                    <table>
                        <thead>
                            <tr>
                                <th>分類</th>
                                <th>件名</th>
                                <th>状態</th>
                                <th>操作</th>
                            </tr>
                        </thead>

                        {{-- <select class="form-control" id="sel01" name="sel01">
                            <option value="1">男性</option>
                            <option value="2" selected>女性</option>
                         </select> --}}



                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td>{{ $item->taskscategory->name }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->state_text }}</td>
                                    <td><form method="get">
                                        @csrf
                                        {{-- <input type="submit" name="button1" value="未完了">
                                        <input type="submit" name="button2" value="完了"> --}}
                                        <a href="{{ $item->getAcction() }}" class="btn btn-default {{ $item->state_class }}">{{$item->state_label}}</a>
                                        <!-- <td>{{$item->created_at}}</td> -->
  
                                      </form></td>

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
