<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'PicQ | Cinematic Excellence for Creators')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-container-highest": "#353535",
                        "on-tertiary-container":     "#d3d0cf",
                        "surface-tint":              "#d1bcff",
                        "on-surface-variant":        "#ccc3d8",
                        "secondary-fixed-dim":       "#ffaedc",
                        "secondary-container":       "#c30097",
                        "surface-container-lowest":  "#0e0e0e",
                        "tertiary-fixed-dim":        "#c8c6c5",
                        "tertiary-container":        "#5a5959",
                        "error":                     "#ffb4ab",
                        "primary-fixed":             "#e9ddff",
                        "on-tertiary-fixed":         "#1c1b1b",
                        "on-secondary-fixed":        "#3b002c",
                        "surface-dim":               "#131313",
                        "on-primary-container":      "#dac8ff",
                        "on-primary-fixed":          "#23005b",
                        "on-error-container":        "#ffdad6",
                        "on-tertiary":               "#313030",
                        "on-surface":                "#e2e2e2",
                        "background":                "#131313",
                        "primary-container":         "#6b21e8",
                        "inverse-primary":           "#702aed",
                        "outline":                   "#958da2",
                        "surface-container":         "#1f1f1f",
                        "on-secondary":              "#600049",
                        "outline-variant":           "#4a4456",
                        "surface-bright":            "#393939",
                        "surface-variant":           "#353535",
                        "error-container":           "#93000a",
                        "on-tertiary-fixed-variant": "#474646",
                        "on-secondary-container":    "#ffe0ee",
                        "secondary":                 "#ffaedc",
                        "on-error":                  "#690005",
                        "primary-fixed-dim":         "#d1bcff",
                        "on-primary-fixed-variant":  "#5700c9",
                        "tertiary":                  "#c8c6c5",
                        "tertiary-fixed":            "#e5e2e1",
                        "surface-container-high":    "#2a2a2a",
                        "inverse-surface":           "#e2e2e2",
                        "on-secondary-fixed-variant":"#880068",
                        "surface":                   "#131313",
                        "surface-container-low":     "#1b1b1b",
                        "on-primary":                "#3c0090",
                        "inverse-on-surface":        "#303030",
                        "on-background":             "#e2e2e2",
                        "secondary-fixed":           "#ffd8eb",
                        "primary":                   "#d1bcff",
                    },
                    fontFamily: {
                        "headline-md":       ["Plus Jakarta Sans"],
                        "body-lg":           ["Inter"],
                        "body-md":           ["Inter"],
                        "headline-lg-mobile":["Plus Jakarta Sans"],
                        "label-sm":          ["Inter"],
                        "display-lg":        ["Plus Jakarta Sans"],
                        "headline-lg":       ["Plus Jakarta Sans"],
                    },
                }
            }
        };
    </script>

    <style>
        * { scroll-behavior: smooth; }
body {
    background:
        radial-gradient(
            circle at top left,
            rgba(121, 4, 167, 0.35),
            transparent 35%
        ),
        radial-gradient(
            circle at top right,
            rgba(123, 25, 116, 0.25),
            transparent 40%
        ),
        radial-gradient(
            circle at bottom center,
            rgba(101, 33, 112, 0.2),
            transparent 45%
        ),
        linear-gradient(
            135deg,
            #2e0133 0%,
            #5d1679 30%,
            #180030 60%,
            #4c0251 100%
        );

    background-attachment: fixed;
    color: #e2e2e2;
    overflow-x: hidden;
}


.hiw-card{
    transform: rotate(-4deg);
    animation: floatCard 4s ease-in-out infinite;
    transition: all 0.4s ease;
    will-change: transform;
}

.hiw-img{
    transition: transform 0.5s ease;
}

.hiw-card:hover{
    transform: rotate(0deg) translateY(-15px) scale(1.03);
    box-shadow: 0 25px 50px rgba(124,58,237,0.35);
}

.hiw-card:hover .hiw-img{
    transform: scale(1.08);
}

@keyframes floatCard{
    0%,100%{
        transform: rotate(-4deg) translateY(0);
    }
    50%{
        transform: rotate(-4deg) translateY(-10px);
    }
}



body::before {
    content: "";
    position: fixed;
    inset: 0;
    z-index: -1;
    pointer-events: none;

    background:
        radial-gradient(circle at 20% 20%,
            rgba(139,92,246,.35),
            transparent 35%),

        radial-gradient(circle at 80% 25%,
            rgba(168,85,247,.25),
            transparent 40%),

        radial-gradient(circle at 50% 80%,
            rgba(217,70,239,.20),
            transparent 45%);
}

        /* ── Navbar ── */
        body {
            padding-top: 50px;
        }
        .nav-pill {
            top: 6px;
            z-index: 50;
            width: calc(100% - 16px);
            max-width: 1400px;
            margin: 6px 10px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(135deg, rgba(20,15,35,0.95) 0%, rgba(30,20,50,0.9) 100%);
            backdrop-filter: blur(40px);
            border: 1px solid rgba(139,92,246,0.3);
            border-radius: 9999px;
            padding: 4px 16px;
            box-shadow: 0 0 40px rgba(139,92,246,0.3), 0 8px 32px rgba(0,0,0,0.6), inset 0 1px 0 rgba(255,255,255,0.1);
            transition: box-shadow .3s;
        }
        .nav-pill:hover {
            box-shadow: 0 0 40px rgba(107,33,232,0.35), 0 8px 40px rgba(0,0,0,0.6);
        }

        .picq-brand {
            font-size: 1.5rem;
            font-weight: 900;
            letter-spacing: -1px;
            background: linear-gradient(90deg, #8b5cf6, #d946ef, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
        }

        /* ── Shining Animation for Buttons ── */
        .shining-btn {
            position: relative;
            overflow: hidden;
        }
        .shining-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.6s;
        }
        .shining-btn:hover::before {
            left: 100%;
        }

        .nav-link-pill {
            padding: 10px 18px;
            border-radius: 9999px;
            color: #d4d4d8;
            font-weight: 600;
            font-size: 15px;
            transition: .25s;
            position: relative;
            cursor: pointer;
        }
        .nav-link-pill:hover,
        .nav-link-pill.active {
            background: linear-gradient(135deg, rgba(139,92,246,0.2) 0%, rgba(217,70,239,0.1) 100%);
            color: white;
            box-shadow: 0 0 20px rgba(139,92,246,0.4);
        }
        .nav-link-pill.active::after {
            content: '';
            position: absolute;
            bottom: 1px;
            left: 50%;
            transform: translateX(-50%);
            width: 3px;
            height: 3px;
            border-radius: 9999px;
            background: #8b5cf6;
        }

        .nav-glow-btn {
            padding: 10px 18px;
            border-radius: 9999px;
            background: linear-gradient(135deg, #6d28d9, #b347e8, #e030d6);
            color: white;
            font-weight: 700;
            font-size: 14px;
            box-shadow: 0 0 12px rgba(168,85,247,.45), 0 0 28px rgba(168,85,247,.25);
            transition: .25s;
            white-space: nowrap;
            position: relative;
            overflow: hidden;
        }
        .nav-glow-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        .nav-glow-btn:hover::before { left: 100%; }
        .nav-glow-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 20px rgba(168,85,247,.8), 0 0 40px rgba(168,85,247,.45);
        }

        /* ── Floating button ── */
        .floating-btn {
            position: fixed;
            bottom: 70px;
            right: 30px;
            padding: 15px 20px;
            border-radius: 25px;
            background: linear-gradient(135deg, #6d28d9, #b347e8, #e030d6);
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(168,85,247,0.4), 0 0 40px rgba(168,85,247,0.2);
            transition: box-shadow .3s;
            font-weight: 700;
            font-size: 14px;
            white-space: nowrap;
            animation: float-bounce 2.4s ease-in-out infinite;
        }
        @keyframes float-bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
        .floating-btn:hover {
            animation: none;
            transform: scale(1.05) translateY(-3px);
            box-shadow: 0 8px 30px rgba(168,85,247,0.6), 0 0 60px rgba(168,85,247,0.3);
        }

        /* ── Modal styles ── */
        .modal {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.8);
            backdrop-filter: blur(10px);
            z-index: 10000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            opacity: 0;
            visibility: hidden;
            transition: opacity .3s, visibility .3s;
        }

        /* GLOBAL THEME */
:root{
    --purple:#7c3aed;
    --pink:#ec4899;
}

/* Gradient Text */
.text-theme-gradient,
.gradient-heading{
    background: linear-gradient(
        90deg,
        #7c5cff 0%,
        #b347e8 50%,
        #e030d6 100%
    );
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
    background-clip:text;
}

/* Main Cards */
.theme-card{
    background: rgba(255,255,255,0.04);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(168,85,247,0.18);
    box-shadow:
        0 0 0 1px rgba(255,255,255,0.02),
        0 10px 40px rgba(168,85,247,0.12),
        0 10px 50px rgba(236,72,153,0.08);
}

Sections
.section-primary{
    background: rgba(10,10,10,0.35);
}

.section-secondary{
    background: rgba(15,15,15,0.45);
}

/* Contact Section */
.contact-section-bg{
    position:relative;
    overflow:hidden;
}

.contact-section-bg::before{
    content:"";
    position:absolute;
    inset:0;
    background:
        radial-gradient(
            circle at 30% 40%,
            rgba(124,58,237,.20),
            transparent 50%
        ),
        radial-gradient(
            circle at 70% 60%,
            rgba(236,72,153,.18),
            transparent 50%
        );
    pointer-events:none;
}

/* Buttons */
.btn-theme{
    background: linear-gradient(
        135deg,
        #6d28d9 0%,
        #9333ea 50%,
        #e030d6 100%
    );
    color:white;
    border:none;
    box-shadow:
        0 0 20px rgba(124,58,237,.35),
        0 0 40px rgba(224,48,214,.20);
    transition:.3s ease;
}

.btn-theme:hover{
    transform:translateY(-2px);
    box-shadow:
        0 0 25px rgba(124,58,237,.45),
        0 0 50px rgba(224,48,214,.30);
}

/* Pricing Popular Card */
.pricing-popular{
    border:1px solid rgba(168,85,247,.4);
    box-shadow:
        0 0 30px rgba(168,85,247,.25),
        0 0 60px rgba(236,72,153,.15);
}


.modal-content{
    width:min(90%,700px);
    margin:5% auto;
    background:rgba(18,18,18,.95);
    border:1px solid rgba(168,85,247,.25);
    border-radius:24px;
    box-shadow:
        0 0 40px rgba(124,58,237,.25),
        0 0 80px rgba(236,72,153,.15);
}

/* Glow Animation */
.shining-btn{
    position:relative;
    overflow:hidden;
}

.shining-btn::after{
    content:"";
    position:absolute;
    top:0;
    left:-120%;
    width:60%;
    height:100%;
    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,.35),
            transparent
        );
    transform:skewX(-20deg);
    animation:shine 4s infinite;
}

@keyframes shine{
    100%{
        left:140%;
    }
}

/* Optimize shine animation */
.shining-btn::after {
    will-change: left;
}
        .modal.show {
            opacity: 1;
            visibility: visible;
        }
        .modal-content {
            background: rgba(15,15,15,0.95);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 24px;
            max-width: 500px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            transform: scale(0.9) translateY(20px);
            transition: transform .3s;
        }
        .modal.show .modal-content {
            transform: scale(1) translateY(0);
        }

        /* ── Glass card ── */
        .glass-card {
            background: rgba(15,15,15,0.8);
            backdrop-filter: blur(12px);
            border-top:  1px solid rgba(255,255,255,0.08);
            border-left: 1px solid rgba(255,255,255,0.08);
            border-right: 1px solid rgba(255,255,255,0.04);
            border-bottom: 1px solid rgba(255,255,255,0.04);
        }

        /* ── Gradient heading ── */
        .gradient-heading {
            background: linear-gradient(90deg, #d1bcff 0%, #ffaedc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* ── Book button ── */
        .book-btn {
            padding: 14px 34px;
            border-radius: 9999px;
            background: linear-gradient(135deg, #6d28d9, #b347e8, #e030d6);
            color: white;
            font-weight: 700;
            box-shadow: 0 0 15px rgba(168,85,247,.4), 0 0 30px rgba(224,48,214,.25);
            transition: .3s;
        }
        .book-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 20px rgba(168,85,247,.7), 0 0 40px rgba(224,48,214,.4);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        section { scroll-margin-top: 80px; }

        .logo-no-bg { mix-blend-mode: multiply; background: transparent; }
        .logo-transparent { background: transparent; filter: brightness(0) invert(1); }

        :root {
            --primary-violet: #7c5cff;
            --primary-fuchsia: #b347e8;
            --primary-pink: #e030d6;
            --accent-purple: #6d28d9;
            --accent-indigo: #5b3df5;
            --dark-bg: #1a0f33;
            --darker-bg: #110a24;
            --card-bg: rgba(15,15,20,0.9);
            --card-border: rgba(139,92,246,0.2);
            --glass-bg: rgba(20,15,30,0.8);
        }

            

        /* ── Theme Card ── */
        .theme-card {
            background: var(--card-bg);
            backdrop-filter: blur(12px);
            border: 1px solid var(--card-border);
            border-radius: 24px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            will-change: transform;
        }
        .theme-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(139,92,246,0.1) 0%, rgba(217,70,239,0.05) 50%, rgba(236,72,153,0.1) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        .theme-card:hover::before { opacity: 1; }
        .theme-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 80px rgba(139,92,246,0.4), 0 0 60px rgba(217,70,239,0.3), 0 0 100px rgba(236,72,153,0.2);
            border-color: rgba(139,92,246,0.5);
        }

        .watermark-bg { position: relative; }
        .watermark-bg::after { display: none !important; }

        /* ── Phone Animation ── */
        @keyframes phone-float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
        }
        .animate-phone-float { 
            animation: phone-float 3.5s ease-in-out infinite;
            will-change: transform;
        }
        .animate-phone-float:hover { animation-play-state: paused; }

        /* ── Image Placeholders ── */
        .image-placeholder {
            background: linear-gradient(135deg, rgba(139,92,246,0.1) 0%, rgba(217,70,239,0.05) 50%, rgba(236,72,153,0.1) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255,255,255,0.5);
            font-size: 14px;
            text-align: center;
            border: 2px dashed rgba(139,92,246,0.3);
        }

        /* ── Pricing ── */
        .pricing-card { 
            position: relative; 
            transition: all 0.25s ease;
            will-change: transform, box-shadow, border-color;
        }
        .pricing-card:hover { 
            border-color: rgba(139,92,246,0.8) !important; 
            box-shadow: 0 0 30px rgba(139,92,246,0.4);
            will-change: auto;
        }
        .pricing-popular { border: 2px solid rgba(139,92,246,0.6) !important; }
        .pricing-badge { position: absolute; top: -12px; left: 50%; transform: translateX(-50%); z-index: 10; }

        .service-card-enhanced::before {
            content: '';
            position: absolute;
            top: -50%; left: -50%;
            width: 200%; height: 200%;
            background: conic-gradient(from 0deg at 50% 50%, transparent 0deg, rgba(139,92,246,0.3) 90deg, rgba(217,70,239,0.4) 180deg, rgba(236,72,153,0.3) 270deg, transparent 360deg);
            opacity: 0;
            transition: all 0.6s ease;
            animation: rotate 8s linear infinite;
        }
        .service-card-enhanced:hover::before { opacity: 1; }
        @keyframes rotate { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
        .service-card-enhanced:hover {
            transform: translateY(-12px) scale(1.05);
            box-shadow: 0 30px 100px rgba(139,92,246,0.5), 0 0 80px rgba(217,70,239,0.4), inset 0 0 40px rgba(236,72,153,0.1);
            border-color: rgba(217,70,239,0.6);
        }

        /* ── Section themes ── */
        .hero-theme {
            background: radial-gradient(ellipse at top, rgba(109,40,217,0.3) 0%, rgba(139,92,246,0.2) 25%, rgba(217,70,239,0.1) 50%, transparent 100%);
        }
      .section-primary,
.section-secondary {
    background: transparent !important;
}
       .section-secondary {
    position: relative;
    background:
        linear-gradient(
            135deg,
            rgba(20,10,35,0.9) 0%,
            rgba(35,15,60,0.85) 50%,
            rgba(25,10,45,0.9) 100%
        );
}

        /* ── Contact section dark bg ── */
      .contact-section-bg {
    background:
        radial-gradient(circle at top left,
            rgba(139,92,246,0.25),
            transparent 40%),

        radial-gradient(circle at bottom right,
            rgba(217,70,239,0.18),
            transparent 45%),

        linear-gradient(
            135deg,
            #120020 0%,
            #1e103f 30%,
            #31135e 70%,
            #180028 100%
        );

    border-top: 1px solid rgba(139,92,246,0.15);
    border-bottom: 1px solid rgba(139,92,246,0.15);
}

        /* ── Glass Enhanced ── */
        .glass-enhanced {
            background: linear-gradient(135deg, rgba(30,20,50,0.9) 0%, rgba(40,25,60,0.8) 100%);
            backdrop-filter: blur(15px);
            border: 2px solid;
            border-image: linear-gradient(135deg, rgba(139,92,246,0.5), rgba(217,70,239,0.3), rgba(236,72,153,0.5)) 1;
            box-shadow: inset 0 1px 0 rgba(255,255,255,0.1), 0 10px 40px rgba(139,92,246,0.2);
        }

        /* ── Text Gradients ── */
        .text-theme-gradient {
            background: linear-gradient(135deg, var(--primary-violet) 0%, var(--primary-fuchsia) 50%, var(--primary-pink) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ── Nav Theme ── */
        .nav-pill {
            background: linear-gradient(135deg, rgba(20,15,35,0.95) 0%, rgba(30,20,50,0.9) 100%);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(139,92,246,0.3);
            box-shadow: 0 0 40px rgba(139,92,246,0.3), 0 8px 32px rgba(0,0,0,0.6), inset 0 1px 0 rgba(255,255,255,0.1);
        }
        .nav-link-pill:hover, .nav-link-pill.active {
            background: linear-gradient(135deg, rgba(139,92,246,0.15) 0%, rgba(217,70,239,0.08) 100%);
            color: white;
            box-shadow: 0 0 20px rgba(139,92,246,0.4);
            transition: all 0.2s ease;
        }

        /* ── Button Theme ── */
        .btn-theme {
            background: linear-gradient(135deg, var(--accent-purple) 0%, var(--primary-violet) 50%, var(--primary-fuchsia) 100%);
            box-shadow: 0 0 25px rgba(139,92,246,0.5), 0 0 50px rgba(217,70,239,0.3), inset 0 1px 0 rgba(255,255,255,0.2);
            position: relative;
            overflow: hidden;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            will-change: transform;
        }
        .btn-theme::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, transparent 100%);
            opacity: 0;
            transition: opacity 0.25s ease;
        }
        .btn-theme:hover::before { opacity: 1; }
        .btn-theme:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 0 35px rgba(139,92,246,0.8), 0 0 70px rgba(217,70,239,0.5), 0 15px 40px rgba(109,40,217,0.4);
        }



        /* ── Global Placeholder Styling ── */
input::placeholder,
textarea::placeholder {
    color: rgba(255, 255, 255, 0.35);
    font-size: 13px;
    font-family: 'Inter', sans-serif;
}   


        /* ── Reveal on scroll ── */
        .reveal {
    opacity: 0;
    transform: translateY(16px);
    transition: opacity 0.4s ease-out 0s, transform 0.4s ease-out 0s;
    will-change: opacity, transform;
}

        .reveal.visible { 
            opacity: 1; 
            transform: none;
            will-change: auto;
        }

/* ── Global Dropdown Styling ── */
select,
select option {
    background-color: #1a1a1a;
    color: #e2e2e2;
}

select:focus {
    background-color: #1a1a1a;
    color: #e2e2e2;
    outline: none;
}

select option:hover,
select option:checked {
    background-color: #6d28d9;
    color: #ffffff;
}

        ::-webkit-scrollbar       { width: 6px; }
        ::-webkit-scrollbar-track { background: #131313; }
        ::-webkit-scrollbar-thumb { background: #353535; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #6b21e8; }

        .nav-mobile-link {
            padding: 12px;
            border-radius: 12px;
            background: rgba(255,255,255,.05);
            color: #d4d4d8;
            font-weight: 600;
            display: block;
            text-align: center;
        }
        
    </style>

    @stack('styles')
</head>
<body>

    
    @stack('bg_shader')

    @if(session('success'))
        <div id="flash-msg" class="fixed top-6 left-1/2 -translate-x-1/2 z-[100] px-8 py-4 rounded-2xl bg-primary-container/90 text-white font-bold shadow-2xl backdrop-blur-xl border border-primary/30">
            {{ session('success') }}
        </div>
        <script>setTimeout(()=>document.getElementById('flash-msg')?.remove(), 4000)</script>
    @endif

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    <!-- Floating Business Enquiry Button -->
    <div class="floating-btn" onclick="openBusinessEnquiry()" title="Business Enquiry">
        <span class="material-symbols-outlined text-lg">contact_support</span>
        <span>Business Enquiry</span>
    </div>

    <!-- ── AUTO-POPUP MODAL ── -->
    {{-- NOTE: No "show" class here, no conflicting inline transform. JS controls it. --}}
    <div id="auto-popup-modal" class="modal" style="z-index: 10001;">
        <div class="modal-content">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="font-bold text-2xl gradient-heading">Welcome to PicQ!</h2>
                    <button onclick="closeAutoPopup()" class="text-gray-400 hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-2xl">close</span>
                    </button>
                </div>
                <p class="text-gray-300 mb-6">Get started with professional photography services. Fill out your requirements below:</p>

                <form id="auto-popup-form" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-300 mb-2">Name *</label>
                            <input type="text" name="name" required
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-300 mb-2">Email *</label>
                            <input type="email" name="email" required
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-300 mb-2">Mobile *</label>
                        <input type="tel" name="mobile" required
                               class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-300 mb-2">Services Required *</label>
                        <select name="services_required" required
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                            <option value="">Select a service</option>
                            <option value="Wedding Photography">Wedding Photography</option>
                            <option value="Corporate Events">Corporate Events</option>
                            <option value="Fashion Shoot">Fashion Shoot</option>
                            <option value="Product Photography">Product Photography</option>
                            <option value="Real Estate">Real Estate</option>
                            <option value="Social Media Content">Social Media Content</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="flex gap-4">
                        <button type="button" onclick="closeAutoPopup()"
                                class="flex-1 py-3 rounded-xl border border-white/20 text-white hover:bg-white/10 transition-colors">
                            Cancel
                        </button>
                        <button type="submit"
                                class="flex-1 py-3 rounded-xl bg-gradient-to-r from-purple-600 to-pink-600 font-bold text-white hover:scale-105 transition-transform">
                            Submit Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ── BUSINESS ENQUIRY MODAL ── -->
    <div id="business-enquiry-modal" class="modal">
        <div class="modal-content">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="font-bold text-2xl gradient-heading">Business Enquiry</h2>
                    <button onclick="closeBusinessEnquiry()" class="text-gray-400 hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-2xl">close</span>
                    </button>
                </div>
                <form id="business-enquiry-form" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-300 mb-2">Name *</label>
                            <input type="text" name="name" required
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-300 mb-2">Email *</label>
                            <input type="email" name="email" required
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-300 mb-2">Mobile *</label>
                        <input type="tel" name="mobile" required
                               class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-300 mb-2">Services Required *</label>
                        <select name="services_required" required
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                            <option value="">Select a service</option>
                            <option value="Wedding Photography">Wedding Photography</option>
                            <option value="Corporate Events">Corporate Events</option>
                            <option value="Fashion Shoot">Fashion Shoot</option>
                            <option value="Product Photography">Product Photography</option>
                            <option value="Real Estate">Real Estate</option>
                            <option value="Social Media Content">Social Media Content</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-300 mb-2">Budget *</label>
                        <select name="budget" required
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors">
                            <option value="">Select budget range</option>
                            <option value="₹10,000 - ₹25,000">₹10,000 - ₹25,000</option>
                            <option value="₹25,000 - ₹50,000">₹25,000 - ₹50,000</option>
                            <option value="₹50,000 - ₹1,00,000">₹50,000 - ₹1,00,000</option>
                            <option value="₹1,00,000 - ₹2,50,000">₹1,00,000 - ₹2,50,000</option>
                            <option value="₹2,50,000+">₹2,50,000+</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-300 mb-2">Notes</label>
                        <textarea name="notes" rows="3"
                                  placeholder="Any additional details about your requirements..."
                                  class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-purple-500 transition-colors resize-none"></textarea>
                    </div>
                    <button type="submit"
                            class="w-full py-3 rounded-xl bg-gradient-to-r from-purple-600 to-pink-600 font-bold text-white hover:scale-105 transition-transform">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- ── CONTACT MODAL ── -->
    <div id="contact-modal" class="modal" style="z-index: 10002;">
        <div class="modal-content">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="font-bold text-2xl gradient-heading">Get in Touch</h2>
                    <button onclick="closeContactModal()" class="text-gray-400 hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-2xl">close</span>
                    </button>
                </div>

                @if(session('success'))
                <div class="mb-4 px-4 py-3 rounded-xl bg-purple-900/30 border border-purple-500/30 text-gray-200 text-sm">
                    {{ session('success') }}
                </div>
                @endif

                <form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-gray-400 mb-1.5">Name *</label>
                            <input type="text" name="name" value="{{ old('name') }}" required
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                            @error('name')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-gray-400 mb-1.5">Email *</label>
                            <input type="email" name="email" value="{{ old('email') }}" required
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                            @error('email')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-400 mb-1.5">Subject *</label>
                        <input type="text" name="subject" value="{{ old('subject') }}" required
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-400 mb-1.5">Message *</label>
                        <textarea name="message" rows="4" required
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-gray-200 text-sm focus:outline-none focus:border-purple-500 transition-colors resize-none">{{ old('message') }}</textarea>
                    </div>
                    <button type="submit"
                        class="w-full py-3 rounded-xl bg-gradient-to-r from-purple-600 to-pink-600 font-bold text-white text-sm hover:scale-[1.02] transition-transform">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
    // ── AUTO-POPUP ──
    // Uses sessionStorage so it shows once per browser session, reappears on new tab/visit
    function closeAutoPopup() {
        const modal = document.getElementById('auto-popup-modal');
        if (modal) {
            modal.classList.remove('show');
            document.body.style.overflow = '';
            sessionStorage.setItem('picq_popup_shown', 'true');
        }
    }

    window.addEventListener('load', function () {
        const modal = document.getElementById('auto-popup-modal');
        if (!modal) return;

        if (!sessionStorage.getItem('picq_popup_shown')) {
            setTimeout(function () {
                modal.classList.add('show');
                document.body.style.overflow = 'hidden';
            }, 2000);
        } else {
            modal.remove();
        }
    });

    // Close auto-popup on outside click
    document.getElementById('auto-popup-modal').addEventListener('click', function (e) {
        if (e.target === this) closeAutoPopup();
    });

    // Handle auto-popup form submission
    document.getElementById('auto-popup-form').addEventListener('submit', async function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Submitting...';
        submitBtn.disabled = true;

        try {
            const response = await fetch('{{ route("business-enquiry.store") }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                }
            });
            const result = await response.json();
            if (result.success) {
                alert(result.message);
                closeAutoPopup();
                this.reset();
            } else {
                alert('There was an error submitting your enquiry. Please try again.');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Thank you! Your enquiry has been submitted successfully.');
            closeAutoPopup();
            this.reset();
        } finally {
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        }
    });

    // ── BUSINESS ENQUIRY MODAL ──
    function openBusinessEnquiry() {
        document.getElementById('business-enquiry-modal').classList.add('show');
        document.body.style.overflow = 'hidden';
    }
    function closeBusinessEnquiry() {
        document.getElementById('business-enquiry-modal').classList.remove('show');
        document.body.style.overflow = '';
    }
    document.getElementById('business-enquiry-modal').addEventListener('click', function (e) {
        if (e.target === this) closeBusinessEnquiry();
    });

    document.getElementById('business-enquiry-form').addEventListener('submit', async function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Submitting...';
        submitBtn.disabled = true;

        try {
            const response = await fetch('{{ route("business-enquiry.store") }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                }
            });
            const result = await response.json();
            if (result.success) {
                alert(result.message);
                closeBusinessEnquiry();
                this.reset();
            } else {
                alert('There was an error submitting your enquiry. Please try again.');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('There was an error submitting your enquiry. Please try again.');
        } finally {
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        }
    });

    // ── CONTACT MODAL ──
    function openContactModal() {
        document.getElementById('contact-modal').classList.add('show');
        document.body.style.overflow = 'hidden';
    }
    function closeContactModal() {
        document.getElementById('contact-modal').classList.remove('show');
        document.body.style.overflow = '';
    }
    document.getElementById('contact-modal').addEventListener('click', function (e) {
        if (e.target === this) closeContactModal();
    });

    // Re-open contact modal if form had validation errors
    @if($errors->any() && old('subject') !== null)
        window.addEventListener('load', function () { openContactModal(); });
    @endif
    </script>

    {{-- Scroll-reveal observer --}}
    <script>
    (function () {
        const els = document.querySelectorAll('.reveal');
        if (!els.length) return;
        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); }
            });
        }, { threshold: 0.12 });
        els.forEach(el => io.observe(el));
    })();
    </script>

    {{-- Active nav highlight on scroll --}}
    <script>
    (function () {
        const links = document.querySelectorAll('.nav-link-pill[data-section]');
        if (!links.length) return;
        const sections = Array.from(links).map(l => document.getElementById(l.dataset.section)).filter(Boolean);
        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    links.forEach(l => l.classList.remove('active'));
                    const active = document.querySelector(`.nav-link-pill[data-section="${e.target.id}"]`);
                    if (active) active.classList.add('active');
                }
            });
        }, { rootMargin: '-40% 0px -50% 0px' });
        sections.forEach(s => io.observe(s));
    })();
    </script>

<script>
// Auto-add placeholders to all form fields that don't have one
document.addEventListener('DOMContentLoaded', function () {
    const placeholders = {
        'name':               'Enter your full name',
        'email':              'Enter your email address',
        'mobile':             'Enter your mobile number',
        'phone':              'Enter your phone number',
        'subject':            'Enter subject',
        'message':            'Type your message here...',
        'notes':              'Any additional details...',
        'budget':             'Select your budget',
        'services_required':  'Select a service',
        'company':            'Enter your company name',
        'address':            'Enter your address',
        'city':               'Enter your city',
        'pincode':            'Enter your pincode',
    };

    document.querySelectorAll('input, textarea').forEach(function (el) {
        if (!el.getAttribute('placeholder') && placeholders[el.getAttribute('name')]) {
            el.setAttribute('placeholder', placeholders[el.getAttribute('name')]);
        }
    });
});
</script>
@include('partials.business-request-modal')
    @stack('scripts')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Success!',
    text: "{{ session('success') }}"
});
</script>
@endif
</body>
</html>