<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link type="text/css" rel="stylesheet" href="/static/css/index/main.css" />
        <link type="text/css" rel="stylesheet" href="/static/lib/bootstrap-3.3.6/css/bootstrap.min.css" />

        <title>鲲鹏</title>
	</head>
	<body>
        <div class="index-main">
            <div class="index-main-center">
                <div class="index-header">
                    <h1 class="logo"></h1>
                    <h4>在自由的天空展翅翱翔</h4>
                </div>
                <div class="index-desk">
                    <div class="index-table-nav">                        
                        <ul id="signup-signin-nav" class="nav nav-tabs">
                            <li role="presentation" class="active"><a href="#">注册</a></li>
                            <li role="presentation"><a href="#">登陆</a></li>                          
                        </ul>                   
                    </div>
                    <div class="view-signup">
                        <form class="signup-box" action="/signup" method="POST">
							{{ csrf_field() }}

                            <div class="input-wrapper">
                                <input required name='name' type="text" class="form-control" placeholder="姓名" value="{{ old('name') }}">

								@if ($errors->has('name'))
									<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
                            </div>                            
                            <div class="input-wrapper">
                                <input required name='email' type="email" class="form-control" placeholder="邮箱" value="{{ old('email') }}">
								
								@if ($errors->has('email'))
									<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
                            </div>
                            <div class="input-wrapper">
                                <input required name='password' type="password" class="form-control" placeholder="密码" value="{{ old('password') }}">
								
								@if ($errors->has('name'))
									<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
                            </div>
                            <div class="button-wrapper">
                                <button type="submit" class="btn btn-primary sign-btn">注册鲲鹏</button>
                            </div>
                        </form>
                    </div>
                    <div class="view-signin hide">
						<form class="signin-box" action="/signin" method="POST">
							{{ csrf_field() }}
                                                        
                            <div class="input-wrapper">
                                <input required name='email' type="email" class="form-control" placeholder="邮箱" value="{{ old('email') }}">
								
								@if ($errors->has('email'))
									<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
                            </div>
                            <div class="input-wrapper">
                                <input required name='password' type="password" class="form-control" placeholder="密码" value="{{ old('password') }}">
								
								@if ($errors->has('name'))
									<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
                            </div>
							<div class="input-wrapper">
								<label>
									<input type="checkbox" name="remember">记住密码
								</label>
							</div>
                            <div class="button-wrapper">
                                <button type="submit" class="btn btn-primary sign-btn">登陆鲲鹏</button>
                            </div>
                        </form>
                    </div>
                </div>                
            </div>
        </div>
        <div class="footer">
        </div>        

		<script language="javascript" src="/static/lib/jquery/jquery-1.11.0.min.js"></script>
		<script language="javascript" src="/static/js/index/main.js"></script>
	</body>
</html>
