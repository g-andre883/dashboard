@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <body>
                    <div class="card">
                        <h1>検索結果</h1>

                        @if (isset($list))
                        @endif
                        @if (!empty($message))
                            <div class="alert alert-primary" role="alert">{{ $message }}</div>
                        @endif
                    </div>
                    <table>
                    </table>

                </body>
            </div>
        </div>
    </div>
@endsection
