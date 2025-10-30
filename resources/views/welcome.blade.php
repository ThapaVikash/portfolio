<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Acme — Home</title>
	<meta name="description" content="Simple responsive landing page with navbar and sections.">
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
		.tag{display:inline-block;padding:6px 10px;border:1px solid var(--border);border-radius:999px;color:var(--muted);font-size:12px}
		.section{padding:72px 0}
		.section.alt{background:linear-gradient(180deg,rgba(255,255,255,0.02),rgba(255,255,255,0) 60%)}
		.grid{display:grid;gap:24px}
		/* Navbar */
		.nav{position:sticky;top:0;z-index:50;background:rgba(11,15,25,.8);backdrop-filter:saturate(150%) blur(10px);border-bottom:1px solid var(--border)}
		.nav-inner{display:flex;align-items:center;justify-content:space-between;height:64px}
		.brand{display:flex;gap:10px;align-items:center;font-weight:700}
		.brand .logo{width:28px;height:28px;border-radius:7px;background:linear-gradient(135deg,var(--brand),#9ad0ff)}
		.menu{display:flex;gap:18px;align-items:center}
		.menu a{color:var(--muted)}
		.menu a:hover{color:var(--text)}
		.cta-wrap{display:flex;gap:10px;align-items:center}
		.burger{display:none;cursor:pointer;border:1px solid var(--border);border-radius:10px;padding:8px 10px;color:var(--muted);background:transparent}
		/* Mobile menu */
		.mobile{display:none;border-top:1px solid var(--border);background:rgba(11,15,25,.95)}
		.mobile a{display:block;padding:14px 20px;color:var(--muted)}
		.mobile a:hover{color:var(--text);background:#0f1524}
		/* Hero */
		.hero{padding:84px 0 48px}
		.hero h1{font-size:42px;line-height:1.1;margin:14px 0 14px}
		.hero p{color:var(--muted);font-size:18px;max-width:700px}
		.hero-cta{display:flex;gap:12px;flex-wrap:wrap;margin-top:18px}
		.card{background:var(--card);border:1px solid var(--border);border-radius:14px;padding:20px}
		/* Features */
		.features{grid-template-columns:repeat(3,minmax(0,1fr))}
		.feature h3{margin:0 0 6px;font-size:18px}
		.feature p{margin:0;color:var(--muted)}
		/* Sections */
		h2.section-title{margin:0 0 10px;font-size:28px}
		p.section-sub{margin:0 0 24px;color:var(--muted)}
		/* Pricing */
		.pricing{grid-template-columns:repeat(3,minmax(0,1fr))}
		.price{font-size:28px;font-weight:700}
		.small{color:var(--muted);font-size:14px}
		/* Footer */
		.footer{padding:32px 0;border-top:1px solid var(--border);color:var(--muted);font-size:14px}
		/* Responsive */
		@media (max-width: 860px){
			.menu,.cta-wrap{display:none}
			.burger{display:block}
			.features{grid-template-columns:1fr}
			.pricing{grid-template-columns:1fr}
			.hero h1{font-size:34px}
		}
	</style>
</head>
<body>
	<!-- Navbar -->
	<header class="nav">
		<div class="container nav-inner">
			<a href="#" class="brand">
				<span class="logo" aria-hidden="true"></span>
				<span>Acme</span>
			</a>
			<nav class="menu" aria-label="Primary">
				<a href="#home">Home</a>
				<a href="#features">Features</a>
				<a href="#about">About</a>
				<a href="#services">Services</a>
				<a href="#pricing">Pricing</a>
				<a href="#testimonials">Testimonials</a>
				<a href="#contact">Contact</a>
			</nav>
			<div class="cta-wrap">
				<a class="btn ghost" href="#login">Log in</a>
				<a class="btn primary" href="#signup">Get Started</a>
			</div>
			<button class="burger" id="burger" aria-label="Toggle navigation">☰</button>
		</div>
		<div class="mobile" id="mobileMenu" aria-label="Mobile">
			<a href="#home">Home</a>
			<a href="#features">Features</a>
			<a href="#about">About</a>
			<a href="#services">Services</a>
			<a href="#pricing">Pricing</a>
			<a href="#testimonials">Testimonials</a>
			<a href="#contact">Contact</a>
			<a href="#signup">Get Started</a>
		</div>
	</header>

	<!-- Hero -->
	<section id="home" class="hero container">
		<span class="tag">New</span>
		<h1>Build a beautiful landing page in minutes</h1>
		<p>Clean, responsive starter with a sticky navbar, smooth section links, and all the must‑have blocks to get you live fast.</p>
		<div class="hero-cta">
			<a class="btn primary" href="#signup">Get Started</a>
			<a class="btn" href="#features">See Features</a>
		</div>
	</section>

	<!-- Feature highlights -->
	<section id="features" class="section alt">
		<div class="container">
			<h2 class="section-title">Features</h2>
			<p class="section-sub">Everything you need to launch quickly.</p>
			<div class="grid features">
				<div class="card feature">
					<h3>Responsive by default</h3>
					<p>Looks great on phones, tablets, and desktops.</p>
				</div>
				<div class="card feature">
					<h3>Modern styles</h3>
					<p>Dark theme, soft borders, and accessible contrast.</p>
				</div>
				<div class="card feature">
					<h3>Vanilla stack</h3>
					<p>No build tools required. Just HTML, CSS, and a dash of JS.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- About -->
	<section id="about" class="section">
		<div class="container grid" style="grid-template-columns:1.2fr .8fr;align-items:center;gap:28px">
			<div>
				<h2 class="section-title">About Acme</h2>
				<p class="section-sub">We craft simple foundations you can customize in minutes.</p>
				<p class="small">Edit the copy, swap colors, and add your brand assets to make it yours.</p>
				<div style="margin-top:12px;display:flex;gap:10px;flex-wrap:wrap">
					<a class="btn primary" href="#services">Our Services</a>
					<a class="btn ghost" href="#contact">Contact us</a>
				</div>
			</div>
			<div class="card">
				<p class="small">Quick facts</p>
				<ul class="small" style="margin:8px 0 0 16px;line-height:1.8">
					<li>Founded 2024</li>
					<li>Remote‑first</li>
					<li>Customer‑obsessed</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- Services -->
	<section id="services" class="section alt">
		<div class="container">
			<h2 class="section-title">Services</h2>
			<p class="section-sub">Pick the plan that fits your stage.</p>
			<div class="grid features">
				<div class="card">
					<h3>Starter Site</h3>
					<p class="small">One‑page landing, basic analytics, email capture.</p>
				</div>
				<div class="card">
					<h3>Growth</h3>
					<p class="small">Multi‑page, blog, integrations, priority support.</p>
				</div>
				<div class="card">
					<h3>Custom</h3>
					<p class="small">Tailored components and deployment pipelines.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Pricing -->
	<section id="pricing" class="section">
		<div class="container">
			<h2 class="section-title">Pricing</h2>
			<p class="section-sub">Simple, transparent pricing.</p>
			<div class="grid pricing">
				<div class="card">
					<div class="price">$0</div>
					<p class="small">Free forever • Basic features</p>
					<a class="btn" href="#signup">Choose Free</a>
				</div>
				<div class="card" style="border-color:var(--brand)">
					<div class="price">$19</div>
					<p class="small">Pro • Most popular</p>
					<a class="btn primary" href="#signup">Choose Pro</a>
				</div>
				<div class="card">
					<div class="price">$49</div>
					<p class="small">Business • Advanced controls</p>
					<a class="btn" href="#signup">Choose Business</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimonials -->
	<section id="testimonials" class="section alt">
		<div class="container">
			<h2 class="section-title">What users say</h2>
			<p class="section-sub">Loved for its speed and simplicity.</p>
			<div class="grid" style="grid-template-columns:repeat(3,minmax(0,1fr))">
				<figure class="card">
					<blockquote class="small">“I shipped a landing page the same day.”</blockquote>
					<figcaption class="small" style="color:var(--muted)">Alex P.</figcaption>
				</figure>
				<figure class="card">
					<blockquote class="small">“Clean code and great defaults.”</blockquote>
					<figcaption class="small" style="color:var(--muted)">Riya S.</figcaption>
				</figure>
				<figure class="card">
					<blockquote class="small">“Exactly what I needed to launch.”</blockquote>
					<figcaption class="small" style="color:var(--muted)">Jordan K.</figcaption>
				</figure>
			</div>
		</div>
	</section>

	<!-- Contact -->
	<section id="contact" class="section">
		<div class="container">
			<h2 class="section-title">Contact</h2>
			<p class="section-sub">We usually reply within one business day.</p>
			<form class="grid" style="grid-template-columns:1fr 1fr">
				<input class="card" style="padding:12px" type="text" name="name" placeholder="Your name" required>
				<input class="card" style="padding:12px" type="email" name="email" placeholder="Email address" required>
				<textarea class="card" style="padding:12px;grid-column:1/-1" name="message" rows="5" placeholder="How can we help?" required></textarea>
				<button class="btn primary" type="submit">Send message</button>
			</form>
		</div>
	</section>

	<!-- Footer -->
	<footer class="footer">
		<div class="container" style="display:flex;justify-content:space-between;flex-wrap:wrap;gap:12px">
			<span>© <span id="y"></span> Acme Inc.</span>
			<nav style="display:flex;gap:14px">
				<a href="#privacy">Privacy</a>
				<a href="#terms">Terms</a>
				<a href="#contact">Support</a>
			</nav>
		</div>
	</footer>

	<script>
		// Mobile menu toggle
		const burger = document.getElementById('burger');
		const mobile = document.getElementById('mobileMenu');
		burger?.addEventListener('click', ()=> {
			mobile.style.display = mobile.style.display === 'block' ? 'none' : 'block';
		});
		// Close on link click (mobile)
		mobile?.querySelectorAll('a').forEach(a => {
			a.addEventListener('click', ()=> mobile.style.display = 'none');
		});
		// Year
		document.getElementById('y').textContent = new Date().getFullYear();
	</script>
</body>
</html>
