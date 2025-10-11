  const colorsLight = ['#1D4ED8', '#2563EB', '#3B82F6', '#60A5FA', '#93C5FD'];
  const colorsDark  = ['#1F2937', '#374151', '#4B5563', '#6B7280', '#9CA3AF'];

  function rand(seed) {
    const x = Math.sin(seed) * 10000;
    return x - Math.floor(x);
  }

  export function initGaudiWires() {
    const dark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const palette = dark ? colorsDark : colorsLight;

    // --- setup canvas ---
  const canvas = document.createElement('canvas');
  const ctx = canvas.getContext('2d');
  document.body.prepend(canvas);

  const dpr = window.devicePixelRatio || 1;

  // get physical viewport height (including mobile address bar handling)
  function getViewportHeight() {
    return Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);
  }

  function resizeCanvas() {
    const vw = window.innerWidth;
    const vh = getViewportHeight();

    // draw buffer (oversize a bit for parallax)
    canvas.width = vw * 1.5 * dpr;
    canvas.height = vh * 1.3 * dpr;
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

    canvas.style.cssText = `
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      z-index: -10;
      background: ${dark ? '#1F2937' : '#1D4ED8'};
      pointer-events: none !important;
      touch-action: none !important;
    `;
  }

  resizeCanvas();
  window.addEventListener('resize', resizeCanvas);


    // --- build grid nodes ---
    const cols = window.innerWidth < 640 ? 12 : 22; // fewer tiles on mobile
    const rows = Math.round(cols * 0.6);
    const cellW = canvas.width / cols;
    const cellH = canvas.height / rows;
    const nodes = [];
    let seed = Date.now() % 9999;

    for (let y = 0; y <= rows; y++) {
      for (let x = 0; x <= cols; x++) {
        const cx = x * cellW + (rand(seed + x * 7 + y * 3) - 0.5) * cellW * 0.4;
        const cy = y * cellH + (rand(seed + x * 11 + y * 5) - 0.5) * cellH * 0.4;
        const phase = rand(seed + x * 17 + y * 19) * Math.PI * 2;
        nodes.push({ x: cx, y: cy, phase });
      }
    }

    // --- define tile quads ---
    const tiles = [];
    for (let y = 0; y < rows; y++) {
      for (let x = 0; x < cols; x++) {
        const idx = y * (cols + 1) + x;
        const a = nodes[idx];
        const b = nodes[idx + 1];
        const c = nodes[idx + cols + 2];
        const d = nodes[idx + cols + 1];
        const color = palette[Math.floor(rand(seed + x * 31 + y * 37) * palette.length)];
        tiles.push({ a, b, c, d, color });
      }
    }

    // --- scroll + mouse input ---
    let scrollY = 0;
    
    let mouseX = 0, mouseY = 0;
    window.addEventListener('mousemove', e => {
      mouseX = e.clientX;
      mouseY = e.clientY;
    });

    // --- animate wires ---
let time = 0;
function draw() {
  time += 0.02;
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  // normalized mouse position (-1 .. 1)
  const mx = (mouseX / window.innerWidth - 0.5) * 2;
  const my = (mouseY / window.innerHeight - 0.5) * 2;
  const scrollAmp = Math.min(scrollY * 0.002, 1); // stronger range

  nodes.forEach((n, i) => {
    // base sine flow
    const waveX = Math.sin(time + n.phase + n.y * 0.008) * 8;
    const waveY = Math.cos(time * 1.1 + n.phase + n.x * 0.008) * 8;

    // local mouse attraction: nearby tiles move more
    const dx = (n.x / canvas.width - 0.5);
    const dy = (n.y / canvas.height - 0.5);
    const dist = Math.sqrt((mx - dx) ** 2 + (my - dy) ** 2);
    const mouseWarp = Math.max(0, 1 - dist * 3); // influence radius

    const mousePullX = (mx - dx) * mouseWarp * 95; // strength
    const mousePullY = (my - dy) * mouseWarp * 95;

    // scroll adds a vertical ripple
    const scrollWave = Math.sin(n.y * 0.05 + time * 0.3) * scrollAmp * 40;

    n._x = n.x + waveX + mousePullX;
    n._y = n.y + waveY + scrollWave + mousePullY * 0.7;
  });

  // fill tiles
  ctx.globalAlpha = 0.7;
  tiles.forEach(t => {
    ctx.beginPath();
    ctx.moveTo(t.a._x, t.a._y);
    ctx.lineTo(t.b._x, t.b._y);
    ctx.lineTo(t.c._x, t.c._y);
    ctx.lineTo(t.d._x, t.d._y);
    ctx.closePath();
    ctx.fillStyle = t.color;
    ctx.fill();
  });

  // grout outlines
  ctx.globalAlpha = 0.35;
  ctx.lineWidth = 3;
  ctx.strokeStyle = dark ? 'rgba(255,255,255,0.35)' : 'rgba(0,0,0,0.35)';
  ctx.beginPath();
  tiles.forEach(t => {
    ctx.moveTo(t.a._x, t.a._y);
    ctx.lineTo(t.b._x, t.b._y);
    ctx.lineTo(t.c._x, t.c._y);
    ctx.lineTo(t.d._x, t.d._y);
    ctx.closePath();
  });
  ctx.stroke();

  requestAnimationFrame(draw);
}
draw();



    window.addEventListener('resize', () => {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    });
  }
