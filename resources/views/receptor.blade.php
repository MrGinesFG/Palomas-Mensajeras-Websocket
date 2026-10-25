<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptor 🕊️ Palomas Mensajeras - Isla Marítima</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Press+Start+2P&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --sky-top: #3b8cd9;
            --sky-bottom: #94d3f7;
            --sand-color: #f7d692;
            --wire-color: #1a222d;
            --pole-wood: #5a3825;
            --pixel-border: #1e2633;
        }

        body {
            font-family: 'Nunito', system-ui, sans-serif;
            background: #111a24;
            color: #fff;
            min-height: 100vh;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            user-select: none;
        }

        /* ESCENA PRINCIPAL ISLA MARÍTIMA */
        .stage {
            position: relative;
            width: 100vw;
            height: 100vh;
            min-height: 600px;
            overflow: hidden;
            background-color: var(--sky-top);
            background-image: url('/images/isla-maritima-bg.png');
            background-size: cover;
            background-position: center bottom;
            background-repeat: no-repeat;
        }

        /* Capa de luz solar y atmósfera */
        .sun-rays {
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 62% 16%, rgba(255, 252, 230, 0.45) 0%, rgba(255, 230, 160, 0.15) 30%, transparent 65%);
            pointer-events: none;
            z-index: 1;
        }

        /* Nubes flotantes animadas */
        .cloud-layer {
            position: absolute;
            top: 20px;
            left: 0;
            width: 200%;
            height: 160px;
            pointer-events: none;
            z-index: 2;
            opacity: 0.75;
            animation: driftClouds 90s linear infinite;
        }

        @keyframes driftClouds {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }

        /* CABECERA RETRO PIXEL */
        .retro-header {
            position: absolute;
            top: 18px;
            left: 24px;
            right: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 30;
            pointer-events: none;
        }

        .retro-header > * {
            pointer-events: auto;
        }

        .title-badge {
            background: #fdf5df;
            border: 2px solid #3b2816;
            border-radius: 8px;
            padding: 8px 16px;
            box-shadow: 0 4px 0 #3b2816;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .title-badge h1 {
            font-family: 'Press Start 2P', monospace;
            font-size: 12px;
            color: #3b2816;
            letter-spacing: 0.5px;
            text-shadow: none;
        }

        .title-badge .status-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #22c55e;
            box-shadow: 0 0 10px #22c55e;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.4; transform: scale(0.85); }
        }

        .controls-group {
            display: flex;
            gap: 10px;
        }

        .retro-btn {
            background: #fdf5df;
            color: #3b2816;
            font-family: 'Silkscreen', monospace;
            font-size: 12px;
            font-weight: 700;
            padding: 8px 14px;
            border: 2px solid #3b2816;
            border-radius: 8px;
            box-shadow: 0 4px 0 #3b2816;
            cursor: pointer;
            transition: all 0.1s ease;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .retro-btn:hover {
            background: #fffdf5;
            transform: translateY(-2px);
            box-shadow: 0 6px 0 #3b2816;
        }

        .retro-btn:active {
            transform: translateY(3px);
            box-shadow: 0 1px 0 #3b2816;
        }

        /* POSTES DE LUZ */
        .utility-grid {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 10;
        }

        .pole {
            position: absolute;
            bottom: 0;
            width: 48px;
            height: 72vh;
            min-height: 440px;
            background: linear-gradient(90deg, #321c11 0%, #5a3825 45%, #3a2215 100%);
            border-left: 3px solid #1a0f08;
            border-right: 3px solid #1a0f08;
            box-shadow: 6px 0 20px rgba(0, 0, 0, 0.45);
        }

        .pole.left {
            left: 70px;
        }

        .pole.right {
            right: 70px;
        }

        /* Travesaños de madera del poste */
        .crossarm {
            position: absolute;
            background: #462c1d;
            border: 2px solid #1a0f08;
            border-radius: 4px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        }

        .crossarm-top {
            top: 48px;
            left: -50px;
            width: 148px;
            height: 18px;
        }

        .crossarm-bottom {
            top: 160px;
            left: -40px;
            width: 128px;
            height: 18px;
        }

        /* Aisladores de cerámica blanca */
        .insulator {
            position: absolute;
            width: 12px;
            height: 16px;
            background: #f8fafc;
            border: 2px solid #334155;
            border-radius: 4px 4px 2px 2px;
            top: -14px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.3);
        }

        /* SVG CONECTADO EXACTO DE CABLES */
        .wires-svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: visible;
            z-index: 12;
        }

        .power-wire {
            fill: none;
            stroke: #161e29;
            stroke-width: 3.5;
            stroke-linecap: round;
            filter: drop-shadow(0 3px 2px rgba(0,0,0,0.35));
            transition: stroke-width 0.2s ease;
        }

        .power-wire.wobble {
            animation: wireBounce 1.2s cubic-bezier(0.36, 0.07, 0.19, 0.97);
        }

        .power-wire.rebound {
            animation: wireRebound 0.8s cubic-bezier(0.36, 0.07, 0.19, 0.97);
        }

        @keyframes wireRebound {
            0% { transform: translateY(0); }
            25% { transform: translateY(-8px); }
            50% { transform: translateY(4px); }
            75% { transform: translateY(-2px); }
            100% { transform: translateY(0); }
        }

        @keyframes wireBounce {
            0% { transform: translateY(0); }
            20% { transform: translateY(12px); }
            45% { transform: translateY(-7px); }
            65% { transform: translateY(4px); }
            85% { transform: translateY(-2px); }
            100% { transform: translateY(0); }
        }

        /* CONTENEDOR DE PALOMAS */
        .pigeons-perch-container {
            position: absolute;
            inset: 0;
            pointer-events: none;
            z-index: 15;
        }

        /* PALOMA ACTOR */
        .pigeon-actor {
            position: absolute;
            width: 64px;
            height: 64px;
            pointer-events: auto;
            cursor: pointer;
            transition: transform 0.25s ease;
            filter: drop-shadow(0 4px 5px rgba(0, 0, 0, 0.4));
        }

        .pigeon-actor:hover {
            transform: scale(1.18) translateY(-4px);
        }

        .pigeon-actor:hover .pigeon-tooltip {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }

        .pigeon-tooltip {
            position: absolute;
            bottom: 66px;
            left: 50%;
            transform: translateX(-50%) translateY(4px);
            background: rgba(15, 23, 42, 0.94);
            border: 2px solid #fedb72;
            color: #fff;
            padding: 4px 10px;
            border-radius: 6px;
            font-family: 'Silkscreen', monospace;
            font-size: 10px;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: all 0.2s ease;
            box-shadow: 0 4px 8px rgba(0,0,0,0.4);
            z-index: 25;
        }

        .click-bubble {
            position: absolute;
            bottom: 66px;
            left: 50%;
            transform: translateX(-50%);
            background: #fef08a;
            border: 2px solid #713f12;
            color: #713f12;
            padding: 3px 8px;
            border-radius: 6px;
            font-family: 'Silkscreen', monospace;
            font-size: 10px;
            font-weight: 700;
            white-space: nowrap;
            box-shadow: 0 3px 0 #713f12;
            animation: bouncePrompt 1s ease-in-out infinite alternate;
            z-index: 24;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        @keyframes bouncePrompt {
            0% { transform: translateX(-50%) translateY(0); }
            100% { transform: translateX(-50%) translateY(-5px); }
        }

        /* Vuelo dinámico hacia el cable */
        .flying-in {
            animation: flyToWire 2.5s cubic-bezier(0.2, 0.8, 0.3, 1) forwards;
        }

        @keyframes flyToWire {
            0% {
                left: -90px !important;
                top: 70px !important;
                transform: scale(0.6) rotate(15deg);
                opacity: 0;
            }
            30% {
                opacity: 1;
                transform: scale(0.9) rotate(-6deg);
            }
            75% {
                transform: scale(1.05) rotate(3deg);
            }
            100% {
                left: var(--target-x) !important;
                top: var(--target-y) !important;
                transform: scale(1) rotate(0deg);
                opacity: 1;
            }
        }

        /* Aleteo durante el vuelo */
        .wing-flap .wing {
            animation: flapCycle 0.2s ease-in-out infinite alternate;
            transform-origin: 30% 45%;
        }

        @keyframes flapCycle {
            0% { transform: rotate(-30deg) translateY(-4px); }
            100% { transform: rotate(32deg) translateY(4px); }
        }

        /* Reposo en el cable con respiración suave anclada en sus patas */
        .pigeon-perched {
            transform-origin: 32px 58px;
            animation: pigeonBreathe 3s ease-in-out infinite alternate;
        }

        @keyframes pigeonBreathe {
            0% { transform: translateY(0); }
            50% { transform: translateY(-2px); }
            100% { transform: translateY(0); }
        }

        /* ANIMACIÓN DE SALIDA VOLANDO AL DESPEJAR */
        .flying-away {
            pointer-events: none !important;
            animation: pigeonEscape 1.2s cubic-bezier(0.25, 1, 0.5, 1) forwards !important;
        }

        .flying-away .wing {
            animation: flapCycle 0.12s ease-in-out infinite alternate !important;
            transform-origin: 30% 45%;
        }

        .flying-away .pigeon-tooltip,
        .flying-away .letter-tag,
        .flying-away .click-bubble {
            opacity: 0 !important;
            transition: opacity 0.15s ease;
        }

        @keyframes pigeonEscape {
            0% {
                transform: translate(0, 0) scale(1) rotate(0deg);
                opacity: 1;
            }
            15% {
                transform: translate(calc(var(--fly-dx, 150px) * 0.08), -24px) scale(1.08) rotate(calc(var(--fly-rot, 15deg) * 0.5));
                opacity: 1;
            }
            50% {
                transform: translate(calc(var(--fly-dx, 150px) * 0.45), calc(var(--fly-dy, -300px) * 0.5)) scale(0.95) rotate(var(--fly-rot, 15deg));
                opacity: 0.95;
            }
            100% {
                transform: translate(var(--fly-dx, 200px), var(--fly-dy, -400px)) scale(0.35) rotate(var(--fly-rot, 15deg));
                opacity: 0;
            }
        }

        .letter-tag {
            position: absolute;
            bottom: -4px;
            left: 50%;
            transform: translateX(-50%);
            background: #fffaf0;
            border: 1.5px solid #854d0e;
            border-radius: 4px;
            padding: 1px 5px;
            font-size: 9px;
            font-weight: 700;
            color: #54371e;
            white-space: nowrap;
            max-width: 95px;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 1.2;
            box-shadow: 0 2px 4px rgba(0,0,0,0.3);
            display: flex;
            align-items: center;
            gap: 3px;
            pointer-events: none;
        }

        .letter-seal {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: #dc2626;
            display: inline-block;
        }

        /* MODAL DE LECTURA DE MENSAJE */
        .letter-modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(8, 15, 26, 0.65);
            backdrop-filter: blur(4px);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 100;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .letter-modal-overlay.active {
            opacity: 1;
            pointer-events: auto;
        }

        .letter-dialog {
            width: 90%;
            max-width: 620px;
            background: #fffcf4;
            border: 4px solid #3b2416;
            border-radius: 14px;
            box-shadow: 0 14px 0 #20130b, 0 20px 40px rgba(0, 0, 0, 0.5);
            padding: 24px 28px;
            position: relative;
            transform: scale(0.85) translateY(20px);
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            color: #2b1d12;
        }

        .letter-modal-overlay.active .letter-dialog {
            transform: scale(1) translateY(0);
        }

        .dialog-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px dashed #d6ba8d;
            padding-bottom: 12px;
            margin-bottom: 16px;
        }

        .dialog-header .badge {
            font-family: 'Press Start 2P', monospace;
            font-size: 10px;
            color: #854d0e;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .dialog-header .close-btn {
            background: #e2d1b3;
            border: 2px solid #54371e;
            color: #54371e;
            font-family: 'Silkscreen', monospace;
            font-size: 14px;
            width: 32px;
            height: 32px;
            border-radius: 6px;
            cursor: pointer;
            box-shadow: 0 3px 0 #54371e;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.1s ease;
        }

        .dialog-header .close-btn:hover {
            background: #eedec3;
            transform: translateY(-1px);
        }

        .dialog-header .close-btn:active {
            transform: translateY(2px);
            box-shadow: 0 1px 0 #54371e;
        }

        /* Contenedor del mensaje estilizado (cumple con newStyle y preserva espacios) */
        .message-content-box {
            min-height: 90px;
            margin-bottom: 16px;
            white-space: pre-wrap;
            word-break: break-word;
            transition: all 0.3s ease;
        }

        .dialog-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            color: #785a3c;
            border-top: 1px solid #ebd9ba;
            padding-top: 12px;
            font-family: 'Silkscreen', monospace;
        }

        /* TARGET-DIV ORIGINAL REQUERIDO POR LA GUIA DE LA FACULTAD */
        .bottom-shelf {
            position: absolute;
            bottom: 16px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 780px;
            background: #fdf5df;
            border: 2px solid #3b2816;
            border-radius: 8px;
            padding: 12px 18px;
            z-index: 30;
            box-shadow: 0 4px 0 #3b2816, 0 10px 25px rgba(0, 0, 0, 0.35);
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .shelf-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: 'Silkscreen', monospace;
            font-size: 11px;
            font-weight: 700;
            color: #3b2816;
            letter-spacing: 0.5px;
        }

        #target-div {
            background: #fffdf8;
            border: 1.5px dashed #8c6036;
            border-radius: 6px;
            padding: 10px 14px;
            color: #3b2816;
            font-size: 14px;
            font-weight: 600;
            min-height: 42px;
            display: flex;
            align-items: center;
            white-space: pre-wrap;
            word-break: break-word;
            transition: all 0.3s ease;
        }

        .flight-alert {
            position: absolute;
            top: 80px;
            left: 50%;
            transform: translateX(-50%) translateY(-20px);
            background: #fef08a;
            border: 3px solid #713f12;
            color: #713f12;
            font-family: 'Press Start 2P', monospace;
            font-size: 11px;
            padding: 10px 18px;
            border-radius: 10px;
            box-shadow: 0 6px 0 #713f12, 0 10px 20px rgba(0,0,0,0.3);
            z-index: 50;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .flight-alert.show {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }

        @media (max-width: 768px) {
            .pole.left { left: 10px; }
            .pole.right { right: 10px; }
            .title-badge h1 { font-size: 10px; }
            .bottom-shelf { width: 95%; padding: 8px 12px; }
        }
    </style>
</head>

<body>
    <div class="stage" id="stage">
        <!-- Atmósfera y sol -->
        <div class="sun-rays"></div>

        <!-- Nubes flotantes -->
        <svg class="cloud-layer" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path fill="rgba(255,255,255,0.7)" d="M50 70 Q70 40 100 50 Q130 30 160 50 Q180 60 200 70 Z M320 80 Q350 45 390 60 Q430 40 470 65 Q500 80 520 80 Z M650 65 Q680 35 720 50 Q760 30 800 55 Q830 70 850 65 Z M960 75 Q990 45 1030 60 Q1070 35 1110 65 Z"/>
        </svg>

        <!-- Cabecera retro -->
        <header class="retro-header">
            <div class="title-badge">
                <span class="status-dot" id="reverb-status" title="Conexión WebSocket activa"></span>
                <h1>RECEPTOR // ISLA MARÍTIMA</h1>
            </div>

            <div class="controls-group">
                <button class="retro-btn" id="sound-btn" onclick="toggleAudio()" title="Activar/Desactivar efectos de sonido">
                    <span id="sound-icon">🔊</span> Sonido: ON
                </button>
                <button class="retro-btn" onclick="clearPigeons()" title="Limpiar palomas del cable">
                    🧹 Despejar
                </button>
                <a href="/emisor" target="_blank" class="retro-btn" style="text-decoration: none;">
                    ✉️ Abrir Emisor
                </a>
            </div>
        </header>

        <!-- Alerta de paloma en camino -->
        <div class="flight-alert" id="flight-alert">
            <span>🕊️</span> ¡UNA PALOMA HA LLEGADO! Haz clic en ella para leer su carta
        </div>

        <!-- Postes de luz y cables -->
        <div class="utility-grid">
            <!-- Poste Izquierdo -->
            <div class="pole left" id="pole-left">
                <div class="crossarm crossarm-top">
                    <div class="insulator" style="left: 14px;"></div>
                    <div class="insulator" id="insulator-top-left" style="left: 68px;"></div>
                    <div class="insulator" style="right: 14px;"></div>
                </div>
                <div class="crossarm crossarm-bottom">
                    <div class="insulator" style="left: 18px;"></div>
                    <div class="insulator" id="insulator-bottom-left" style="left: 58px;"></div>
                    <div class="insulator" style="right: 18px;"></div>
                </div>
            </div>

            <!-- Poste Derecho -->
            <div class="pole right" id="pole-right">
                <div class="crossarm crossarm-top">
                    <div class="insulator" style="left: 14px;"></div>
                    <div class="insulator" id="insulator-top-right" style="left: 68px;"></div>
                    <div class="insulator" style="right: 14px;"></div>
                </div>
                <div class="crossarm crossarm-bottom">
                    <div class="insulator" style="left: 18px;"></div>
                    <div class="insulator" id="insulator-bottom-right" style="left: 58px;"></div>
                    <div class="insulator" style="right: 18px;"></div>
                </div>
            </div>

            <!-- SVG con los 2 cables calculados exactamente a los aisladores -->
            <svg class="wires-svg" id="wires-svg">
                <!-- Cable Superior -->
                <path id="wire-top" class="power-wire" />
                <!-- Cable Inferior -->
                <path id="wire-bottom" class="power-wire" />
            </svg>
        </div>

        <!-- Contenedor donde se posan las palomas -->
        <div class="pigeons-perch-container" id="pigeons-perch-container"></div>

        <!-- Shelf inferior con el #target-div para cumplir con la guía de la facultad -->
        <div class="bottom-shelf">
            <div class="shelf-title">
                <span>📜 HISTORIAL DE BROADCAST (#target-div)</span>
                <span id="pigeon-count-label" style="color: #854d0e; font-weight: 700;">Palomas en el cable: 0</span>
            </div>
            <div id="target-div">
                Esperando primera paloma mensajera por WebSocket...
            </div>
        </div>

        <!-- MODAL DE LECTURA DE MENSAJE -->
        <div class="letter-modal-overlay" id="letter-modal">
            <div class="letter-dialog">
                <div class="dialog-header">
                    <div class="badge">
                        <span>🕊️ CARTA RECIBIDA</span>
                        <span id="modal-pigeon-name" style="color: #ca8a04;">#1</span>
                    </div>
                    <button class="close-btn" onclick="closeModal()">✕</button>
                </div>

                <div class="message-content-box" id="modal-message-box">
                    <!-- Aquí se inyecta el texto y estilo inline -->
                </div>

                <div class="dialog-footer">
                    <span id="modal-time-stamp">Recibida hace unos instantes</span>
                    <span style="opacity: 0.65; font-size: 11px;">Presiona ✕ o [ESC]</span>
                </div>
            </div>
        </div>
    </div>

    <!-- PLANTILLA SVG DE PALOMA (64x64, patas en y=58) -->
    <template id="pigeon-svg-template">
        <svg viewBox="0 0 64 64" width="64" height="64" class="pigeon-sprite">
            <!-- Sombra de patas en el cable -->
            <ellipse cx="32" cy="58" rx="8" ry="2.5" fill="rgba(0,0,0,0.35)"/>
            <!-- Patas aferradas firmemente al cable -->
            <path d="M 28 50 L 28 58 M 36 50 L 36 58" stroke="#d97706" stroke-width="2.5" stroke-linecap="round"/>
            <path d="M 25 58 L 31 58 M 33 58 L 39 58" stroke="#d97706" stroke-width="2" stroke-linecap="round"/>
            <!-- Cola -->
            <path d="M 12 40 L 4 48 L 16 46 Z" class="feather-tail" fill="#cbd5e1" stroke="#1e293b" stroke-width="1.5"/>
            <!-- Cuerpo redondo -->
            <ellipse cx="30" cy="40" rx="16" ry="13" class="feather-body" fill="#f8fafc" stroke="#1e293b" stroke-width="2"/>
            <!-- Pecho/Cuello irisado costero -->
            <path d="M 32 30 Q 42 34 38 45 Q 30 45 28 34 Z" class="feather-neck" fill="#a7f3d0" opacity="0.6"/>
            <!-- Cabeza -->
            <circle cx="42" cy="28" r="9" class="feather-head" fill="#f8fafc" stroke="#1e293b" stroke-width="2"/>
            <!-- Ojo pixel -->
            <circle cx="45" cy="26" r="2.2" fill="#0f172a"/>
            <circle cx="45.5" cy="25.5" r="0.8" fill="#ffffff"/>
            <!-- Pico anaranjado -->
            <polygon points="51,27 58,30 51,32" fill="#f97316" stroke="#9a3412" stroke-width="1.2"/>
            <!-- Carta / Sobre colgando del pico con sello rojo -->
            <g class="held-letter">
                <rect x="52" y="32" width="12" height="9" rx="1.5" fill="#fef08a" stroke="#854d0e" stroke-width="1.2"/>
                <polygon points="52,32 58,37 64,32" fill="#fef9c3" stroke="#854d0e" stroke-width="0.8"/>
                <circle cx="58" cy="37" r="1.5" fill="#dc2626"/>
            </g>
            <!-- Ala animable -->
            <g class="wing">
                <path d="M 22 36 Q 30 22 40 33 Q 34 47 22 42 Z" class="feather-wing" fill="#e2e8f0" stroke="#1e293b" stroke-width="2"/>
                <path d="M 26 38 Q 33 28 37 36" stroke="#94a3b8" stroke-width="1.5" fill="none"/>
            </g>
        </svg>
    </template>

    <script>
        // ESTADO GLOBAL
        const state = {
            audioEnabled: true,
            pigeons: [],
            typewriterTimer: null,
            // Slots distribuidos ordenadamente a lo largo de los cables
            slots: [
                { wire: 'top', progress: 0.22 },
                { wire: 'top', progress: 0.36 },
                { wire: 'top', progress: 0.50 },
                { wire: 'top', progress: 0.64 },
                { wire: 'top', progress: 0.78 },
                { wire: 'bottom', progress: 0.28 },
                { wire: 'bottom', progress: 0.42 },
                { wire: 'bottom', progress: 0.58 },
                { wire: 'bottom', progress: 0.72 }
            ],
            audioCtx: null
        };

        // ACTUALIZACIÓN DE CABLES (Conexión precisa a los aisladores de los postes)
        function updateWires() {
            const stage = document.getElementById('stage').getBoundingClientRect();
            const itl = document.getElementById('insulator-top-left').getBoundingClientRect();
            const itr = document.getElementById('insulator-top-right').getBoundingClientRect();
            const ibl = document.getElementById('insulator-bottom-left').getBoundingClientRect();
            const ibr = document.getElementById('insulator-bottom-right').getBoundingClientRect();

            // Puntos exactos en la punta de cada aislador
            const x1_top = itl.left + itl.width / 2 - stage.left;
            const y1_top = itl.top + 2 - stage.top;
            const x2_top = itr.left + itr.width / 2 - stage.left;
            const y2_top = itr.top + 2 - stage.top;

            const x1_bot = ibl.left + ibl.width / 2 - stage.left;
            const y1_bot = ibl.top + 2 - stage.top;
            const x2_bot = ibr.left + ibr.width / 2 - stage.left;
            const y2_bot = ibr.top + 2 - stage.top;

            // Curvatura catenaria suave y natural
            const sagTop = Math.min(stage.width * 0.045, 48);
            const sagBot = Math.min(stage.width * 0.05, 54);

            const cx_top = (x1_top + x2_top) / 2;
            const cy_top = (y1_top + y2_top) / 2 + sagTop;

            const cx_bot = (x1_bot + x2_bot) / 2;
            const cy_bot = (y1_bot + y2_bot) / 2 + sagBot;

            const topPath = document.getElementById('wire-top');
            const botPath = document.getElementById('wire-bottom');

            topPath.setAttribute('d', `M ${x1_top} ${y1_top} Q ${cx_top} ${cy_top} ${x2_top} ${y2_top}`);
            botPath.setAttribute('d', `M ${x1_bot} ${y1_bot} Q ${cx_bot} ${cy_bot} ${x2_bot} ${y2_bot}`);

            // Re-posicionar palomas posadas para que sigan siempre al cable
            state.pigeons.forEach(p => {
                if (p.element) {
                    positionPigeonOnWire(p.element, p.wire, p.progress);
                }
            });
        }

        // POSICIONAR PALOMA CON SUS PATAS EXACTAMENTE EN EL CABLE
        function positionPigeonOnWire(pigeonEl, wireName, progress) {
            const wirePath = document.getElementById(wireName === 'top' ? 'wire-top' : 'wire-bottom');
            if (!wirePath) return;

            const totalLen = wirePath.getTotalLength();
            const pt = wirePath.getPointAtLength(totalLen * progress);

            // En el SVG de 64x64, las patas están en x=32, y=58
            pigeonEl.style.left = `${pt.x - 32}px`;
            pigeonEl.style.top = `${pt.y - 58}px`;
        }

        // SINTETIZADOR WEB AUDIO API
        function playChime(type = 'arrive') {
            if (!state.audioEnabled) return;
            try {
                if (!state.audioCtx) {
                    state.audioCtx = new (window.AudioContext || window.webkitAudioContext)();
                }
                const ctx = state.audioCtx;
                if (ctx.state === 'suspended') {
                    ctx.resume();
                }

                if (type === 'arrive') {
                    const now = ctx.currentTime;
                    const osc = ctx.createOscillator();
                    const gain = ctx.createGain();
                    osc.type = 'sine';
                    osc.frequency.setValueAtTime(880, now);
                    osc.frequency.exponentialRampToValueAtTime(1320, now + 0.08);
                    osc.frequency.exponentialRampToValueAtTime(1100, now + 0.16);
                    osc.frequency.exponentialRampToValueAtTime(1480, now + 0.26);

                    gain.gain.setValueAtTime(0.12, now);
                    gain.gain.exponentialRampToValueAtTime(0.001, now + 0.45);

                    osc.connect(gain);
                    gain.connect(ctx.destination);
                    osc.start(now);
                    osc.stop(now + 0.45);
                } else if (type === 'open') {
                    const now = ctx.currentTime;
                    const osc = ctx.createOscillator();
                    const gain = ctx.createGain();
                    osc.type = 'triangle';
                    osc.frequency.setValueAtTime(523.25, now);
                    osc.frequency.setValueAtTime(659.25, now + 0.08);
                    osc.frequency.setValueAtTime(783.99, now + 0.16);
                    osc.frequency.setValueAtTime(1046.50, now + 0.24);

                    gain.gain.setValueAtTime(0.15, now);
                    gain.gain.exponentialRampToValueAtTime(0.001, now + 0.6);

                    osc.connect(gain);
                    gain.connect(ctx.destination);
                    osc.start(now);
                    osc.stop(now + 0.6);
                } else if (type === 'depart') {
                    const now = ctx.currentTime;
                    const osc = ctx.createOscillator();
                    const gain = ctx.createGain();
                    osc.type = 'sine';
                    osc.frequency.setValueAtTime(1100, now);
                    osc.frequency.exponentialRampToValueAtTime(1550, now + 0.08);
                    osc.frequency.exponentialRampToValueAtTime(950, now + 0.16);
                    osc.frequency.exponentialRampToValueAtTime(1750, now + 0.26);

                    gain.gain.setValueAtTime(0.10, now);
                    gain.gain.exponentialRampToValueAtTime(0.001, now + 0.4);

                    osc.connect(gain);
                    gain.connect(ctx.destination);
                    osc.start(now);
                    osc.stop(now + 0.4);
                }
            } catch (err) {
                console.warn('Audio no disponible:', err);
            }
        }

        function toggleAudio() {
            state.audioEnabled = !state.audioEnabled;
            const btn = document.getElementById('sound-btn');
            if (state.audioEnabled) {
                btn.innerHTML = '<span>🔊</span> Sonido: ON';
                playChime('arrive');
            } else {
                btn.innerHTML = '<span>🔇</span> Sonido: OFF';
            }
        }

        function escapeHtml(str) {
            return String(str ?? '')
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#039;');
        }

        // LÓGICA DE WEBSOCKET (REVERB / ECHO)
        document.addEventListener('DOMContentLoaded', function () {
            // Inicializar cables y redimensionamiento
            updateWires();
            window.addEventListener('resize', updateWires);
            window.addEventListener('load', updateWires);
            setTimeout(updateWires, 100);
            setTimeout(updateWires, 500);

            const targetDiv = document.getElementById('target-div');
            const statusDot = document.getElementById('reverb-status');

            if (window.Echo) {
                statusDot.style.background = '#22c55e';
                statusDot.title = 'Conectado a Laravel Reverb';

                window.Echo.channel('style-channel')
                    .listen('.RemoteStyleUpdate', (e) => {
                        console.log('🕊️ Mensaje recibido vía Reverb:', e);

                        const sender = (e.senderName && e.senderName.trim()) ? e.senderName.trim() : 'Anónimo';

                        // 1. Actualización requerida por la guía de la facultad (con remitente visible)
                        targetDiv.textContent = `[Paloma de ${sender}]: ${e.newText ?? ''}`;
                        targetDiv.style.cssText = e.newStyle ?? '';
                        targetDiv.style.whiteSpace = 'pre-wrap';
                        targetDiv.style.wordBreak = 'break-word';

                        // 2. Animación de la paloma mensajera
                        spawnPigeon({
                            text: e.newText ?? '',
                            style: e.newStyle ?? '',
                            type: e.pigeonType ?? 'white',
                            sender: sender,
                            time: new Date().toLocaleTimeString()
                        });
                    });
            } else {
                statusDot.style.background = '#ef4444';
                statusDot.title = 'Echo no está inicializado';
                console.error('Echo no está disponible');
            }
        });

        // CREAR Y ATERRIZAR UNA PALOMA
        function spawnPigeon(data) {
            playChime('arrive');

            const sender = data.sender || 'Anónimo';

            // Alerta flotante con nombre de quien envió la paloma
            const alert = document.getElementById('flight-alert');
            alert.innerHTML = `<span>🕊️</span> ¡LLEGÓ UNA PALOMA DE <strong>${escapeHtml(sender.toUpperCase())}</strong>!`;
            alert.classList.add('show');
            setTimeout(() => alert.classList.remove('show'), 3800);

            // Obtener slot en el cable
            const slotIndex = state.pigeons.length % state.slots.length;
            const slot = state.slots[slotIndex];

            // Calcular coordenadas exactas en la curva del cable
            const wirePath = document.getElementById(slot.wire === 'top' ? 'wire-top' : 'wire-bottom');
            const totalLen = wirePath.getTotalLength();
            const targetPt = wirePath.getPointAtLength(totalLen * slot.progress);

            const targetX = targetPt.x - 32;
            const targetY = targetPt.y - 58;

            // Sacudir el cable al aterrizar
            setTimeout(() => {
                wirePath.classList.add('wobble');
                setTimeout(() => wirePath.classList.remove('wobble'), 1200);
            }, 2100);

            // Elemento paloma
            const perchContainer = document.getElementById('pigeons-perch-container');
            const pigeonEl = document.createElement('div');
            pigeonEl.className = 'pigeon-actor flying-in wing-flap';

            // Variables CSS para la animación de vuelo directo al punto del cable
            pigeonEl.style.setProperty('--target-x', `${targetX}px`);
            pigeonEl.style.setProperty('--target-y', `${targetY}px`);

            // Clonar SVG template
            const template = document.getElementById('pigeon-svg-template');
            const clone = template.content.cloneNode(true);

            // Personalizar plumaje
            if (data.type === 'blue') {
                clone.querySelectorAll('.feather-body, .feather-head').forEach(el => el.setAttribute('fill', '#94a3b8'));
                clone.querySelectorAll('.feather-wing').forEach(el => el.setAttribute('fill', '#64748b'));
                clone.querySelector('.feather-neck').setAttribute('fill', '#38bdf8');
            } else if (data.type === 'golden') {
                clone.querySelectorAll('.feather-body, .feather-head').forEach(el => el.setAttribute('fill', '#fde047'));
                clone.querySelectorAll('.feather-wing').forEach(el => el.setAttribute('fill', '#eab308'));
                clone.querySelector('.feather-neck').setAttribute('fill', '#f97316');
            }

            pigeonEl.appendChild(clone);

            // Tooltip con remitente y aviso de click
            const tooltip = document.createElement('div');
            tooltip.className = 'pigeon-tooltip';
            tooltip.innerText = `Paloma de ${sender}: Click para leer`;
            pigeonEl.appendChild(tooltip);

            // Etiqueta de carta bajo la paloma con nombre del remitente
            const letterTag = document.createElement('div');
            letterTag.className = 'letter-tag';
            letterTag.innerHTML = `<span class="letter-seal"></span> ${escapeHtml(sender)}`;
            pigeonEl.appendChild(letterTag);

            // Click para abrir carta manualmente al hacer click
            pigeonEl.addEventListener('click', () => {
                const bubble = pigeonEl.querySelector('.click-bubble');
                if (bubble) bubble.remove();
                openModal(data, state.pigeons.indexOf(data) + 1);
            });

            perchContainer.appendChild(pigeonEl);

            // Guardar referencia en el estado
            data.element = pigeonEl;
            data.wire = slot.wire;
            data.progress = slot.progress;
            state.pigeons.push(data);
            document.getElementById('pigeon-count-label').innerText = `Palomas en el cable: ${state.pigeons.length}`;

            // Cuando termina el vuelo (2.5s): posarse en el cable sin abrir la carta automáticamente
            setTimeout(() => {
                pigeonEl.classList.remove('flying-in', 'wing-flap');
                pigeonEl.classList.add('pigeon-perched');
                positionPigeonOnWire(pigeonEl, slot.wire, slot.progress);

                // Indicador flotante que invita al usuario a hacer click para leer
                const clickBubble = document.createElement('div');
                clickBubble.className = 'click-bubble';
                clickBubble.innerText = `📬 De: ${sender} (¡Click!)`;
                pigeonEl.appendChild(clickBubble);

                // Desvanecer el indicador suavemente tras unos segundos
                setTimeout(() => {
                    if (clickBubble && clickBubble.parentNode) {
                        clickBubble.style.opacity = '0';
                        setTimeout(() => clickBubble.remove(), 400);
                    }
                }, 6000);
            }, 2500);
        }

        // ABRIR MODAL CON LA CARTA Y ESTILO (Preservando espacios)
        function openModal(data, index) {
            playChime('open');
            const modal = document.getElementById('letter-modal');
            const nameEl = document.getElementById('modal-pigeon-name');
            const boxEl = document.getElementById('modal-message-box');
            const timeEl = document.getElementById('modal-time-stamp');

            const sender = data.sender || 'Anónimo';
            nameEl.innerText = `PALOMA DE: ${sender.toUpperCase()}`;
            timeEl.innerText = `Remitente: ${sender} • Llegada: ${data.time || 'Recién'}`;

            // Resetear
            boxEl.textContent = '';
            boxEl.style.cssText = '';

            // Aplicar estilo inline del usuario
            if (data.style && data.style.trim() !== '') {
                boxEl.style.cssText = data.style;
            } else {
                boxEl.style.cssText = 'background: #fef3c7; color: #78350f; padding: 18px; border-radius: 8px; font-size: 18px; font-weight: 600; border: 2px solid #b45309;';
            }

            // Preservar espacios y saltos de línea estrictamente
            boxEl.style.whiteSpace = 'pre-wrap';
            boxEl.style.wordBreak = 'break-word';

            // Efecto máquina de escribir seguro (slice del string original para no perder espacios)
            const fullText = String(data.text ?? '(Mensaje vacío)');
            let currentLen = 0;

            if (state.typewriterTimer) {
                clearInterval(state.typewriterTimer);
                state.typewriterTimer = null;
            }

            state.typewriterTimer = setInterval(() => {
                currentLen++;
                boxEl.textContent = fullText.slice(0, currentLen);

                if (currentLen >= fullText.length) {
                    clearInterval(state.typewriterTimer);
                    state.typewriterTimer = null;
                }
            }, 25);

            modal.classList.add('active');
        }

        function closeModal() {
            document.getElementById('letter-modal').classList.remove('active');
            if (state.typewriterTimer) {
                clearInterval(state.typewriterTimer);
                state.typewriterTimer = null;
            }
        }

        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeModal();
        });

        let isClearing = false;

        // LIMPIAR PALOMAS (Animación fluida de salida volando desde su posición)
        function clearPigeons() {
            if (isClearing) return;

            if (!state.pigeons || state.pigeons.length === 0) {
                const targetDiv = document.getElementById('target-div');
                targetDiv.textContent = 'No hay palomas en los cables para despejar.';
                targetDiv.style.cssText = '';
                targetDiv.style.whiteSpace = 'pre-wrap';
                return;
            }

            isClearing = true;
            playChime('depart');

            // Sacudir cables hacia arriba (efecto rebote cuando las palomas sueltan el peso)
            const wireTop = document.getElementById('wire-top');
            const wireBottom = document.getElementById('wire-bottom');
            if (wireTop) wireTop.classList.add('rebound');
            if (wireBottom) wireBottom.classList.add('rebound');
            setTimeout(() => {
                if (wireTop) wireTop.classList.remove('rebound');
                if (wireBottom) wireBottom.classList.remove('rebound');
            }, 900);

            // Animar cada paloma volando hacia el cielo desde su posición actual
            state.pigeons.forEach((pigeonData, idx) => {
                const el = pigeonData.element;
                if (!el) return;

                // Quitar estado de reposo y añadir clases de despegue y aleteo
                el.classList.remove('pigeon-perched', 'flying-in');
                el.classList.add('flying-away', 'wing-flap');

                // Vuelo natural: alternar hacia la izquierda y derecha
                const isLeft = idx % 2 === 0;
                const dx = isLeft ? -(220 + Math.random() * 160) : (220 + Math.random() * 160);
                const dy = -(300 + Math.random() * 150);
                const rot = isLeft ? -22 : 22;

                // Voltear el sprite si vuela hacia la izquierda
                if (isLeft) {
                    const svg = el.querySelector('svg');
                    if (svg) svg.style.transform = 'scaleX(-1)';
                }

                el.style.setProperty('--fly-dx', `${dx}px`);
                el.style.setProperty('--fly-dy', `${dy}px`);
                el.style.setProperty('--fly-rot', `${rot}deg`);
                el.style.animationDelay = `${idx * 0.08}s`;
            });

            // Actualizar etiquetas
            document.getElementById('pigeon-count-label').innerText = 'Palomas en el cable: 0';
            const targetDiv = document.getElementById('target-div');
            targetDiv.textContent = '¡Las palomas han levantado vuelo rumbo al horizonte!';
            targetDiv.style.cssText = '';
            targetDiv.style.whiteSpace = 'pre-wrap';

            // Limpiar DOM después de que completen la trayectoria
            setTimeout(() => {
                document.getElementById('pigeons-perch-container').innerHTML = '';
                state.pigeons = [];
                isClearing = false;
            }, 1400);
        }
    </script>
</body>

</html>