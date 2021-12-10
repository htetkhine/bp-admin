@extends(backpack_view('blank'))

@php
    Widget::add([
        'type' => 'progress',
        'class' => 'card text-white bg-primary mb-4',
        'value' => App\Models\User::count(),
        'description' => 'Registered users.',
        'progress' =>  App\Models\User::count(), // integer
        'hint' => '8544 more until next milestone.',
    ]);
    Widget::add([
        'type' => 'chart',
        'controller' => \App\Http\Controllers\Admin\Charts\WeeklyUsersChartController::class,

        // OPTIONALS

        'class' => 'card',
        'wrapper' => ['class' => 'col-md-6'],
        'content' => [
            'header' => 'New Users',
            'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>',
        ],
    ]);
@endphp

@section('content')

@endsection
