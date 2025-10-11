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
      pointer-events: none;
      background: ${dark ? '#1F2937' : '#1D4ED8'};
    `;
  }

  resizeCanvas();
  window.addEventListener('resize', resizeCanvas);


    // --- build grid nodes ---
    const cols = 22, rows = 14;
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
    window.addEventListener('scroll', () => {
      scrollY = window.scrollY || 0;
    }, { passive: true });

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

      // parallax influence
      const mx = (mouseX / window.innerWidth - 0.5) * 20;  // subtle movement
      const my = (mouseY / window.innerHeight - 0.5) * 20;
      const scrollShift = Math.min(scrollY * 0.05, 200);   // slow, clamped shift

      nodes.forEach(n => {
        n._x = n.x + Math.sin(time + n.phase) * 8 + mx;
        n._y = n.y + Math.cos(time * 1.1 + n.phase) * 8 - scrollShift + my;
      });

      // fill tiles
      tiles.forEach(t => {
        ctx.beginPath();
        ctx.moveTo(t.a._x, t.a._y);
        ctx.lineTo(t.b._x, t.b._y);
        ctx.lineTo(t.c._x, t.c._y);
        ctx.lineTo(t.d._x, t.d._y);
        ctx.closePath();
        ctx.fillStyle = t.color;
        ctx.globalAlpha = 0.7;
        ctx.fill();
      });

      // grout outlines
      ctx.globalAlpha = 0.3;
      ctx.lineWidth = 3; // adjust grout thickness here
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
