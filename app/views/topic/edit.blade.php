@extends('layout.application')

@section('content')
<div class="container main">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="col-xs-12 col-sm-8 col-md-8 well">
				<form action="" class="create" method="post" role="form">
					<legend>编辑话题</legend>
					<div class="form-group">
						<label for="title" class="control-label">标题：</label>
						<input type="text" name="title" class="form-control" value="{{ $topic->title }}" placeholder="请用一句话说明你的标题" />
					</div>
					<div class="form-group">
						<label for="content" class="control-label">内容：</label>
						@include('layout.editor', array('data' => $topic->content))
					</div>
					<button type="submit" id="topic_post" class="btn btn-primary">提交发布</button>
					<a href="" class="btn btn-default">取消</a>
				</form>
			</div>

			<div class="col-xs-12 col-sm-4 col-md-4">
			</div>
		</div>
	</div>
</div>
@stop