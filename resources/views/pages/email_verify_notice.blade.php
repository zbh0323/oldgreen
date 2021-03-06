@extends('layouts.app')
@section('title', '提示')

@section('content')
	<div class="panel panel-warning">
		<div class="panel-heading">
			提示
		</div>
		<div class="panel-body text-center">
			<h1>请先验证邮箱</h1>
			<a href="{{ route('email_verification.send') }}" class="btn btn-link">重新发送验证邮件</a>
			<a href="{{ route('root') }}" class="btn btn-primary">
				返回首页
			</a>
		</div>
	</div>
@endsection