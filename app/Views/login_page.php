
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Log in (v2)</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="<?=base_url('adminLTE/plugins/fontawesome-free/css/all.min.css')?>">
<link rel="stylesheet" href="<?=base_url('adminLTE/dist/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">

<link rel="stylesheet" href="<?=base_url('adminLTE/dist/css/adminlte.min.css')?>">
<script nonce="f03fff36-328c-4e5a-b412-333a6dfe949c">(function(w,d){!function(Y,Z,_,ba){Y[_]=Y[_]||{};Y[_].executed=[];Y.zaraz={deferred:[],listeners:[]};Y.zaraz.q=[];Y.zaraz._f=function(bb){return function(){var bc=Array.prototype.slice.call(arguments);Y.zaraz.q.push({m:bb,a:bc})}};for(const bd of["track","set","debug"])Y.zaraz[bd]=Y.zaraz._f(bd);Y.zaraz.init=()=>{var be=Z.getElementsByTagName(ba)[0],bf=Z.createElement(ba),bg=Z.getElementsByTagName("title")[0];bg&&(Y[_].t=Z.getElementsByTagName("title")[0].text);Y[_].x=Math.random();Y[_].w=Y.screen.width;Y[_].h=Y.screen.height;Y[_].j=Y.innerHeight;Y[_].e=Y.innerWidth;Y[_].l=Y.location.href;Y[_].r=Z.referrer;Y[_].k=Y.screen.colorDepth;Y[_].n=Z.characterSet;Y[_].o=(new Date).getTimezoneOffset();if(Y.dataLayer)for(const bk of Object.entries(Object.entries(dataLayer).reduce(((bl,bm)=>({...bl[1],...bm[1]})),{})))zaraz.set(bk[0],bk[1],{scope:"page"});Y[_].q=[];for(;Y.zaraz.q.length;){const bn=Y.zaraz.q.shift();Y[_].q.push(bn)}bf.defer=!0;for(const bo of[localStorage,sessionStorage])Object.keys(bo||{}).filter((bq=>bq.startsWith("_zaraz_"))).forEach((bp=>{try{Y[_]["z_"+bp.slice(7)]=JSON.parse(bo.getItem(bp))}catch{Y[_]["z_"+bp.slice(7)]=bo.getItem(bp)}}));bf.referrerPolicy="origin";bf.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(Y[_])));be.parentNode.insertBefore(bf,be)};["complete","interactive"].includes(Z.readyState)?zaraz.init():Y.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition login-page">
<div class="login-box">

<div class="card card-outline card-primary">
<div class="card-header text-center">
<a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
</div>
<div class="card-body">
<p class="login-box-msg">Sign in to start your session</p>
<form action="../../index3.html" method="post">
<div class="input-group mb-3">
<input type="email" class="form-control" placeholder="Email">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="password" class="form-control" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-8">
<div class="icheck-primary">
<input type="checkbox" id="remember">
<label for="remember">
Remember Me
</label>
</div>
</div>

<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">Sign In</button>
</div>

</div>
</form>
<div class="social-auth-links text-center mt-2 mb-3">
<a href="#" class="btn btn-block btn-primary">
<i class="fab fa-facebook mr-2"></i> Sign in using Facebook
</a>
<a href="#" class="btn btn-block btn-danger">
<i class="fab fa-google-plus mr-2"></i> Sign in using Google+
</a>
</div>

<p class="mb-1">
<a href="forgot-password.html">I forgot my password</a>
</p>
<p class="mb-0">
<a href="register.html" class="text-center">Register a new membership</a>
</p>
</div>

</div>

</div>


<script src="<?=base_url('adminLTE/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('adminLTE/dist/js/adminlte.min.js')?>"></script>
</body>
</html>
