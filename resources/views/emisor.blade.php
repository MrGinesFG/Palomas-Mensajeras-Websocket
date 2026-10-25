<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emisor 🕊️ Despacho de Palomas Mensajeras - Isla Marítima</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Press+Start+2P&family=Silkscreen:wght@400;700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --sky-blue: #3b8cd9;
            --parchment-light: #fefcf7;
            --parchment-mid: #fbf3e2;
            --parchment-border: #6c4323;
            --wood-dark: #3a2211;
            --gold-accent: #fedb72;
            --ocean-dark: #0f1c2d;
        }

        body {
            font-family: 'Nunito', system-ui, sans-serif;
            background-color: var(--ocean-dark);
            background-image: url('/images/isla-maritima-bg.png');
            background-size: cover;
            background-position: center bottom;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            color: #2e1a0b;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 24px 16px;
            position: relative;
        }

        /* Velo atmosférico para confort visual */
        .backdrop-overlay {
            position: fixed;
            inset: 0;
            background: radial-gradient(circle at 50% 30%, rgba(15, 28, 45, 0.42) 0%, rgba(8, 16, 26, 0.72) 100%);
            backdrop-filter: blur(2px);
            z-index: 1;
            pointer-events: none;
        }

        /* BURBUJA GENERAL / CARTA ANTIGUA DE PAPEL VIEJO */
        .dispatch-desk {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 740px;
            background: radial-gradient(ellipse at 50% 25%, #fefcf8 0%, #fbf3e2 50%, #f4e5ca 85%, #ebd1ac 100%);
            color: #2e1a0b;
            border: 3.5px solid var(--parchment-border);
            border-radius: 14px;
            box-shadow: 0 10px 0 var(--wood-dark), 0 20px 45px rgba(0, 0, 0, 0.5);
            padding: 34px 38px;
            overflow: hidden;
            animation: fadeIn 0.4s ease-out;
        }

        /* Marco cosido / perforado de carta postal antigua */
        .dispatch-desk::before {
            content: '';
            position: absolute;
            inset: 8px;
            border: 1.5px dashed #bfa076;
            border-radius: 9px;
            pointer-events: none;
            opacity: 0.85;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* CABECERA ESTILO CORREO AÉREO VINTAGE */
        .desk-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px dashed #b89167;
            padding-bottom: 16px;
            margin-bottom: 22px;
            gap: 12px;
        }

        .header-title {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .badge-tag {
            font-family: 'Press Start 2P', monospace;
            font-size: 10px;
            color: #854d0e;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .header-title h1 {
            font-family: 'Silkscreen', monospace;
            font-size: 24px;
            font-weight: 700;
            color: #3b2211;
            letter-spacing: -0.5px;
        }

        .header-right-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Sello postal de correo aéreo */
        .vintage-stamp {
            background: #fdf6e2;
            border: 2px dashed #9c6e40;
            padding: 4px 8px;
            border-radius: 4px;
            box-shadow: 2px 2px 0 rgba(70, 40, 15, 0.2);
            display: flex;
            align-items: center;
            gap: 6px;
            font-family: 'Silkscreen', monospace;
            font-size: 10px;
            color: #633f1c;
            transform: rotate(2deg);
            user-select: none;
        }

        .vintage-stamp .stamp-val {
            font-weight: 700;
            color: #b91c1c;
            border-left: 1px solid #c49d72;
            padding-left: 5px;
        }

        .header-nav-btn {
            background: #fdf5df;
            color: #3b2816;
            border: 2px solid #3b2816;
            border-radius: 8px;
            padding: 8px 14px;
            font-family: 'Silkscreen', monospace;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 4px 0 #3b2816;
            transition: all 0.1s ease;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .header-nav-btn:hover {
            background: #fffdf5;
            transform: translateY(-2px);
            box-shadow: 0 6px 0 #3b2816;
        }

        .header-nav-btn:active {
            transform: translateY(2px);
            box-shadow: 0 1px 0 #3b2816;
        }

        /* ALERTAS DE SESIÓN / ERRORES */
        .pixel-alert {
            border-radius: 8px;
            padding: 12px 18px;
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 12px;
            animation: bounceIn 0.3s ease-out;
        }

        .alert-success {
            background: #ecfdf5;
            border: 2px solid #15803d;
            color: #14532d;
            box-shadow: 0 3px 0 #15803d;
        }

        .alert-error {
            background: #fef2f2;
            border: 2px solid #b91c1c;
            color: #7f1d1d;
            box-shadow: 0 3px 0 #b91c1c;
        }

        @keyframes bounceIn {
            0% {
                transform: scale(0.9);
                opacity: 0;
            }

            70% {
                transform: scale(1.02);
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* FORMULARIO Y CAMPOS */
        .form-grid {
            display: grid;
            gap: 20px;
        }

        .field-label {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: 'Silkscreen', monospace;
            font-size: 12px;
            font-weight: 700;
            color: #523318;
            margin-bottom: 6px;
        }

        .retro-input,
        .retro-textarea {
            width: 100%;
            background: #fffefb;
            border: 2px solid #9c734b;
            border-radius: 8px;
            padding: 12px 16px;
            font-family: 'Nunito', sans-serif;
            font-size: 16px;
            font-weight: 600;
            color: #2b180a;
            outline: none;
            box-shadow: inset 0 2px 4px rgba(100, 60, 20, 0.06);
            transition: all 0.2s ease;
        }

        .retro-input:focus,
        .retro-textarea:focus {
            border-color: #5c3819;
            box-shadow: 0 0 0 3px rgba(140, 90, 45, 0.18);
        }

        /* Botones de sugerencias rápidas de texto */
        .chips-row {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 8px;
        }

        .chip-btn {
            background: #f4e7cd;
            border: 1.5px solid #9c7349;
            color: #4a2e15;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.1s ease;
        }

        .chip-btn:hover {
            background: #fdf5e2;
            transform: translateY(-1px);
        }

        /* SELECTOR DE ESTILOS PREDEFINIDOS */
        .presets-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
            gap: 10px;
            margin-bottom: 10px;
        }

        .preset-card {
            background: #fdf8ed;
            border: 2px solid #9c7349;
            border-radius: 8px;
            padding: 10px 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.15s ease;
            box-shadow: 0 3px 0 #7a4f27;
        }

        .preset-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 0 #7a4f27;
            background: #fffef9;
        }

        .preset-card.active {
            border-color: #4a2c12;
            background: #ebd8b5;
            color: #3a1e09;
            box-shadow: 0 3px 0 #4a2c12;
            font-weight: 800;
        }

        .preset-icon {
            font-size: 18px;
            display: block;
            margin-bottom: 4px;
        }

        .preset-name {
            font-family: 'Silkscreen', monospace;
            font-size: 10px;
            line-height: 1.2;
        }

        /* SELECTOR DE ESPECIE DE PALOMA */
        .pigeon-choice-row {
            display: flex;
            gap: 12px;
        }

        .pigeon-choice {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 10px;
            background: #fdf8ed;
            border: 2px solid #9c7349;
            border-radius: 8px;
            padding: 10px;
            cursor: pointer;
            transition: all 0.15s ease;
            box-shadow: 0 3px 0 #7a4f27;
        }

        .pigeon-choice:hover {
            background: #fffef9;
            transform: translateY(-2px);
        }

        .pigeon-choice.active {
            border-color: #15803d;
            background: #f0fdf4;
            color: #14532d;
            box-shadow: 0 3px 0 #15803d;
        }

        .pigeon-avatar {
            font-size: 24px;
        }

        .pigeon-meta {
            display: flex;
            flex-direction: column;
        }

        .pigeon-meta strong {
            font-family: 'Silkscreen', monospace;
            font-size: 11px;
        }

        .pigeon-meta span {
            font-size: 11px;
            opacity: 0.8;
        }

        /* PREVISUALIZACIÓN EN VIVO (LIVE PREVIEW) */
        .live-preview-section {
            background: #ebdcc2;
            border: 2px dashed #9c7349;
            border-radius: 10px;
            padding: 16px;
            margin-top: 6px;
        }

        .preview-header {
            font-family: 'Silkscreen', monospace;
            font-size: 11px;
            color: #573a20;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .preview-letter-box {
            min-height: 50px;
            background: #fffdf8;
            border: 1.5px solid #b89167;
            padding: 16px;
            border-radius: 8px;
            transition: all 0.25s ease;
            word-break: break-word;
            white-space: pre-wrap;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.06);
        }

        /* BOTÓN DE DESPACHO */
        .submit-btn {
            background: linear-gradient(180deg, #d97706 0%, #b45309 100%);
            color: #fff;
            border: 3px solid #6b2f05;
            border-radius: 10px;
            padding: 16px 24px;
            font-family: 'Press Start 2P', monospace;
            font-size: 13px;
            text-shadow: 2px 2px 0px #6b2f05;
            box-shadow: 0 6px 0 #4e1f02, 0 10px 20px rgba(0, 0, 0, 0.25);
            cursor: pointer;
            transition: all 0.1s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background: linear-gradient(180deg, #f59e0b 0%, #d97706 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 0 #4e1f02, 0 14px 25px rgba(0, 0, 0, 0.3);
        }

        .submit-btn:active {
            transform: translateY(4px);
            box-shadow: 0 2px 0 #4e1f02;
        }

        .submit-btn.launching {
            pointer-events: none;
            opacity: 0.85;
            animation: pulseBtn 0.4s infinite alternate;
        }

        @keyframes pulseBtn {
            from {
                transform: scale(0.98);
            }

            to {
                transform: scale(1.02);
            }
        }

        /* ANIMACIÓN DE DESPEGUE DE PALOMA AL ENVIAR */
        .flying-mascot {
            position: fixed;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 48px;
            opacity: 0;
            pointer-events: none;
            z-index: 100;
        }

        .flying-mascot.takeoff {
            animation: takeFlight 1.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @keyframes takeFlight {
            0% {
                opacity: 1;
                transform: translate(-50%, 0) scale(1) rotate(0deg);
            }

            40% {
                transform: translate(-30%, -180px) scale(1.3) rotate(-15deg);
            }

            100% {
                opacity: 0;
                transform: translate(120vw, -70vh) scale(0.6) rotate(-25deg);
            }
        }

        /* PIE DE PÁGINA */
        .desk-footer {
            margin-top: 24px;
            padding-top: 14px;
            border-top: 1px dashed #b89167;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            color: #785a3c;
            font-family: 'Silkscreen', monospace;
        }

        @media (max-width: 600px) {
            .dispatch-desk {
                padding: 22px 18px;
            }

            .header-title h1 {
                font-size: 18px;
            }

            .header-right-group {
                flex-direction: column;
                align-items: flex-end;
            }

            .pigeon-choice-row {
                flex-direction: column;
            }

            .submit-btn {
                font-size: 11px;
                padding: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="backdrop-overlay"></div>

    <!-- Paloma voladora para animación de despegue -->
    <div class="flying-mascot" id="flying-mascot">🕊️✉️</div>

    <div class="dispatch-desk">
        <!-- Cabecera -->
        <header class="desk-header">
            <div class="header-title">
                <span class="badge-tag">✉️ CORREO AÉREO // ISLA MARÍTIMA</span>
                <h1>ESTACIÓN DE PALOMAS</h1>
            </div>
            <div class="header-right-group">
                <div class="vintage-stamp" title="Servicio Postal de Palomas Mensajeras">
                    <span>🕊️</span>
                    <span>POST</span>
                    <span class="stamp-val">10¢</span>
                </div>
                <a href="/receptor" target="_blank" class="header-nav-btn">
                    <span>👁️</span> Ver Receptor
                </a>
            </div>
        </header>

        <!-- Mensajes Flash de Sesión -->
        @if (session('ok'))
            <div class="pixel-alert alert-success">
                <span style="font-size: 22px;">🕊️</span>
                <div>
                    <div><strong>¡Vuelo exitoso!</strong></div>
                    <div>{{ session('ok') }}</div>
                </div>
            </div>
        @endif

        @if ($errors->any())
            <div class="pixel-alert alert-error">
                <span style="font-size: 22px;">⚠️</span>
                <div>
                    <div><strong>Error al enviar:</strong></div>
                    <div>{{ $errors->first() }}</div>
                </div>
            </div>
        @endif

        <!-- Formulario que cumple con los nombres de la guía (newText, newStyle) -->
        <form class="form-grid" id="emisor-form" method="POST" action="{{ route('emitir') }}">
            @csrf

            <!-- Campo 0: Remitente / Nombre del alumno -->
            <div>
                <label class="field-label" for="senderName">
                    <span>👤 TU NOMBRE O APODO (REMITENTE)</span>

                </label>
                <input type="text" id="senderName" name="senderName" class="retro-input"
                    placeholder="Ej: Lucas, Sofía, Martín..." maxlength="35" autocomplete="name"
                    value="{{ old('senderName') }}">

            </div>

            <!-- Campo 1: Texto de la carta -->
            <div>
                <label class="field-label" for="newText">
                    <span>1. MENSAJE DE LA CARTA</span>
                    <span style="font-size: 10px; color: #854d0e;">(Obligatorio)</span>
                </label>
                <input type="text" id="newText" name="newText" class="retro-input"
                    placeholder="Ej: ¡El mar está calmo hoy! Encontré una pista en las ruinas..." required
                    autocomplete="off" value="{{ old('newText') }}">
            </div>

            <!-- Campo 2: Selector de Estilos Predefinidos + CSS Inline -->
            <div>
                <label class="field-label">
                    <span>2. SELECCIONA UN ESTILO VISUAL</span>
                    <span style="font-size: 10px; color: #854d0e;">(Modifica el CSS inline)</span>
                </label>

                <div class="presets-grid">
                    <div class="preset-card active" onclick="applyPreset('parchment', this)">
                        <span class="preset-icon">📜</span>
                        <span class="preset-name">Pergamino</span>
                    </div>
                    <div class="preset-card" onclick="applyPreset('ocean', this)">
                        <span class="preset-icon">🌊</span>
                        <span class="preset-name">Brisa Marina</span>
                    </div>
                    <div class="preset-card" onclick="applyPreset('sunset', this)">
                        <span class="preset-icon">🌅</span>
                        <span class="preset-name">Atardecer</span>
                    </div>
                    <div class="preset-card" onclick="applyPreset('arcade', this)">
                        <span class="preset-icon">🕹️</span>
                        <span class="preset-name">Arcade 8-Bit</span>
                    </div>
                    <div class="preset-card" onclick="applyPreset('crimson', this)">
                        <span class="preset-icon">🚨</span>
                        <span class="preset-name">Rojo Alerta</span>
                    </div>
                </div>

                <!-- Textarea para CSS inline (Requerido por la guía de la facultad) -->
                <label class="field-label" for="newStyle" style="margin-top: 10px;">
                    <span>CSS INLINE (name="newStyle")</span>
                    <span style="font-size: 10px; color: #854d0e;">Editable libremente</span>
                </label>
                <textarea id="newStyle" name="newStyle" rows="3" class="retro-textarea"
                    placeholder="background:#fef3c7; color:#78350f; padding:18px; border-radius:8px; font-size:18px;">{{ old('newStyle') }}</textarea>
            </div>

            <!-- Campo 3: Tipo de Paloma Mensajera -->
            <div>
                <label class="field-label">
                    <span>3. ESPECIE DE PALOMA</span>
                </label>
                <input type="hidden" name="pigeonType" id="pigeonType" value="white">

                <div class="pigeon-choice-row">
                    <div class="pigeon-choice active" onclick="selectPigeon('white', this)">
                        <span class="pigeon-avatar">🕊️</span>
                        <div class="pigeon-meta">
                            <strong>Paloma Blanca</strong>
                            <span>Vuelo sereno</span>
                        </div>
                    </div>
                    <div class="pigeon-choice" onclick="selectPigeon('blue', this)">
                        <span class="pigeon-avatar">🐦</span>
                        <div class="pigeon-meta">
                            <strong>Torcaza Marina</strong>
                            <span>Resistente al viento</span>
                        </div>
                    </div>
                    <div class="pigeon-choice" onclick="selectPigeon('golden', this)">
                        <span class="pigeon-avatar">🦅</span>
                        <div class="pigeon-meta">
                            <strong>Pluma Dorada</strong>
                            <span>Rápida y noble</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Previsualización en Vivo de la Carta -->
            <div class="live-preview-section">
                <div class="preview-header">
                    <span>🔍</span> PREVISUALIZACIÓN DE LA CARTA
                </div>
                <div id="preview-letter-box" class="preview-letter-box">
                    Escribe un mensaje arriba para previsualizarlo...
                </div>
            </div>

            <!-- Botón de Envío -->
            <button type="submit" class="submit-btn" id="submit-btn">
                <span>🕊️</span> ¡SOLTAR PALOMA MENSAJERA!
            </button>
        </form>

        <footer class="desk-footer">
            <span>Canal público: <code>style-channel</code></span>
            <span>WebSocket: Reverb (Puerto 8080)</span>
        </footer>
    </div>

    <script>
        // PRESETS DE CSS INLINE
        const presets = {
            parchment: "background: #fdf6e2; color: #432818; padding: 20px; border: 3px solid #8c6239; border-radius: 8px; font-family: 'Nunito', sans-serif; font-size: 20px; font-weight: 700; box-shadow: 4px 4px 0 #432818;",
            ocean: "background: linear-gradient(135deg, #0e3b5e, #1a759f); color: #e0f2fe; padding: 22px; border: 3px solid #76c7c0; border-radius: 14px; font-family: 'Nunito', sans-serif; font-size: 20px; font-weight: 800; text-shadow: 0 2px 4px rgba(0,0,0,0.5); box-shadow: 0 8px 20px rgba(14, 59, 94, 0.4);",
            sunset: "background: linear-gradient(135deg, #c2410c, #f59e0b); color: #ffffff; padding: 22px; border-radius: 16px; font-size: 22px; font-weight: 900; box-shadow: 0 8px 25px rgba(245, 158, 11, 0.45); border: 2px solid #ffedd5; text-align: center;",
            arcade: "background: #0f172a; color: #4ade80; border: 3px solid #22c55e; padding: 20px; font-family: 'Press Start 2P', monospace; font-size: 13px; line-height: 1.8; box-shadow: 5px 5px 0 #15803d;",
            // Preset Rojo de la guía de la facultad:
            crimson: "width: 80%; max-width: 600px; margin: 10px auto; padding: 20px; background-color: #e02424; border: 2px solid #b91c1c; border-radius: 12px; box-shadow: 0 4px 15px rgba(220, 38, 38, 0.5); color: #fff; font-family: 'Segoe UI', sans-serif; text-align: center;"
        };

        const senderInput = document.getElementById('senderName');
        const textInput = document.getElementById('newText');
        const styleInput = document.getElementById('newStyle');
        const previewBox = document.getElementById('preview-letter-box');
        const pigeonTypeInput = document.getElementById('pigeonType');
        const emisorForm = document.getElementById('emisor-form');
        const submitBtn = document.getElementById('submit-btn');
        const flyingMascot = document.getElementById('flying-mascot');

        // Inicializar con preset Pergamino y restaurar remitente previo
        window.addEventListener('DOMContentLoaded', () => {
            const savedSender = localStorage.getItem('pigeon_sender_name');
            if (savedSender && (!senderInput.value || senderInput.value.trim() === '')) {
                senderInput.value = savedSender;
            }

            if (!styleInput.value || styleInput.value.trim() === '') {
                styleInput.value = presets.parchment;
            }
            updatePreview();
        });

        // Actualizar preview en tiempo real preservando remitente y espacios
        function updatePreview() {
            const sender = senderInput.value.trim() || 'Viajero Anónimo';
            const text = textInput.value;
            const fullContent = text !== '' ? `[De: ${sender}]\n${text}` : `[De: ${sender}]\nEscribe un mensaje arriba para previsualizarlo...`;
            previewBox.textContent = fullContent;
            previewBox.style.cssText = styleInput.value;
            previewBox.style.whiteSpace = 'pre-wrap';
            previewBox.style.wordBreak = 'break-word';
        }

        senderInput.addEventListener('input', () => {
            if (senderInput.value.trim()) {
                localStorage.setItem('pigeon_sender_name', senderInput.value.trim());
            }
            updatePreview();
        });

        textInput.addEventListener('input', updatePreview);
        styleInput.addEventListener('input', updatePreview);

        function setSender(val) {
            senderInput.value = val;
            localStorage.setItem('pigeon_sender_name', val);
            updatePreview();
            senderInput.focus();
        }

        function setText(val) {
            textInput.value = val;
            updatePreview();
            textInput.focus();
        }

        function applyPreset(name, element) {
            document.querySelectorAll('.preset-card').forEach(c => c.classList.remove('active'));
            if (element) element.classList.add('active');

            if (presets[name]) {
                styleInput.value = presets[name];
                updatePreview();
            }
        }

        function selectPigeon(type, element) {
            document.querySelectorAll('.pigeon-choice').forEach(c => c.classList.remove('active'));
            if (element) element.classList.add('active');
            pigeonTypeInput.value = type;

            if (type === 'white') flyingMascot.innerText = '🕊️✉️';
            else if (type === 'blue') flyingMascot.innerText = '🐦✉️';
            else if (type === 'golden') flyingMascot.innerText = '🦅✉️';
        }

        // Animación de despegue al enviar
        emisorForm.addEventListener('submit', function (e) {
            if (!textInput.value.trim()) return;

            const sender = senderInput.value.trim() || 'Viajero Anónimo';
            localStorage.setItem('pigeon_sender_name', sender);

            submitBtn.classList.add('launching');
            submitBtn.innerHTML = `<span>🛫</span> ¡VOLANDO PALOMA DE ${sender.toUpperCase()}...`;
            flyingMascot.classList.add('takeoff');
        });
    </script>
</body>

</html>