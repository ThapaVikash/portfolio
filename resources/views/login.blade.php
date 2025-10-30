<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Acme — Login</title>
	<meta name="description" content="Log in to your Acme account.">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
	<style>
		:root{
			--bg:#0b0f19;
			--card:#121826;
			--text:#e6e8ef;
			--muted:#a5adcb;
			--brand:#6ea8fe;
			--accent:#39d98a;
			--border:#22293a;
		}
		*{box-sizing:border-box}
		html,body{margin:0;padding:0;font-family:Inter,system-ui,Segoe UI,Roboto,Arial,sans-serif;background:var(--bg);color:var(--text)}
		a{color:inherit;text-decoration:none}
		img{max-width:100%;display:block}
		.container{max-width:1100px;margin:0 auto;padding:0 20px}
		.btn{display:inline-block;padding:12px 18px;border-radius:10px;border:1px solid var(--border);background:var(--card);color:var(--text);transition:.2s}
		.btn:hover{transform:translateY(-1px);border-color:#2a3246}
		.btn.primary{background:var(--brand);border-color:var(--brand);color:#0b1020}
		.btn.ghost{background:transparent}
		.card{background:var(--card);border:1px solid var(--border);border-radius:14px;padding:20px}
		.small{color:var(--muted);font-size:14px}
		/* Navbar */
		.nav{position:sticky;top:0;z-index:50;background:rgba(11,15,25,.8);backdrop-filter:saturate(150%) blur(10px);border-bottom:1px solid var(--border)}
		.nav-inner{display:flex;align-items:center;justify-content:space-between;height:64px}
		.brand{display:flex;gap:10px;align-items:center;font-weight:700}
		.brand .logo{width:28px;height:28px;border-radius:7px;background:linear-gradient(135deg,var(--brand),#9ad0ff)}
		.menu{display:flex;gap:18px;align-items:center}
		.menu a{color:var(--muted)}
		.menu a:hover{color:var(--text)}
		/* Login section */
		.login-wrapper{display:flex;justify-content:center;align-items:center;min-height:calc(100vh - 64px);padding:40px 20px}
		.login-card{max-width:400px;width:100%;background:var(--card);border:1px solid var(--border);border-radius:16px;padding:32px}
		h1{margin:0 0 16px;font-size:26px;text-align:center}
		form{display:flex;flex-direction:column;gap:14px}
		input{padding:12px;border-radius:10px;border:1px solid var(--border);background:#0f1524;color:var(--text)}
		input:focus{outline:none;border-color:var(--brand)}
		label{font-size:14px;color:var(--muted)}
		.actions{display:flex;justify-content:space-between;align-items:center;margin-top:10px}
		.actions a{font-size:14px;color:var(--brand)}
		.footer{padding:32px 0;border-top:1px solid var(--border);color:var(--muted);font-size:14px;text-align:center}
	</style>
</head>
<body>

	<!-- Navbar -->
	<header class="nav">
		<div class="container nav-inner">
			<a href="/" class="brand">
				<span class="logo" aria-hidden="true"></span>
				<span>Acme</span>
			</a>
			<nav class="menu">
				<a href="/">Home</a>
				<a href="#features">Features</a>
				<a href="#contact">Contact</a>
			</nav>
		</div>
	</header>

	<!-- Login form -->
	<div class="login-wrapper">
		<div class="login-card">
			<h1>Log in to your account</h1>

			@if(session('error'))
				<p style="color:#f87171;background:#2d1b1b;padding:10px;border-radius:8px;">{{ session('error') }}</p>
			@endif

			<form method="POST" action="{{ route('login.post') }}">
				@csrf
				<div>
					<label for="email">Email address</label>
					<input type="email" name="email" id="email" placeholder="you@example.com" required>
				</div>
				<div>
					<label for="password">Password</label>
					<input type="password" name="password" id="password" placeholder="••••••••" required>
				</div>
				<div class="actions">
					<a href="{{ route('password.request') }}">Forgot password?</a>
				</div>
				<button type="submit" class="btn primary" style="width:100%;margin-top:10px;">Log In</button>
			</form>

			<p class="small" style="text-align:center;margin-top:16px;">
				Don't have an account? <a href="{{ route('register') }}" style="color:var(--brand)">Sign up</a>
			</p>
		</div>
	</div>

	<!-- Footer -->
	<footer class="footer">
		<p>© <span id="y"></span> Acme Inc. All rights reserved.</p>
	</footer>

	<script>
		document.getElementById('y').textContent = new Date().getFullYear();
	</script>

</body>
</html>
