{"filter":false,"title":"create.blade.php","tooltip":"/message-board/resources/views/messages/create.blade.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":0,"column":0},"end":{"row":20,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","","    <h1>メッセージ新規作成ページ</h1>","","    <div class=\"row\">","        <div class=\"col-6\">","            {!! Form::model($message, ['route' => 'messages.store']) !!}","","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","","                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}","","            {!! Form::close() !!}","        </div>","    </div>","@endsection"],"id":1}],[{"start":{"row":2,"column":19},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"insert","lines":["    "],"id":3}],[{"start":{"row":4,"column":4},"end":{"row":10,"column":10},"action":"insert","lines":["@if (count($errors) > 0)","        <ul class=\"alert alert-danger\" role=\"alert\">","            @foreach ($errors->all() as $error)","                <li class=\"ml-4\">{{ $error }}</li>","            @endforeach","        </ul>","    @endif"],"id":4}],[{"start":{"row":4,"column":4},"end":{"row":12,"column":25},"action":"remove","lines":["@if (count($errors) > 0)","        <ul class=\"alert alert-danger\" role=\"alert\">","            @foreach ($errors->all() as $error)","                <li class=\"ml-4\">{{ $error }}</li>","            @endforeach","        </ul>","    @endif","","    <h1>メッセージ新規作成ページ</h1>"],"id":5},{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"remove","lines":["    "]},{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":3,"column":0},"end":{"row":3,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1631878642959,"hash":"a6aa41102f39cff319f1b14a0569dfe79f17979a"}