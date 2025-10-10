const lightColors = ['#1D4ED8', '#2563EB', '#3B82F6', '#60A5FA', '#93C5FD'];
const darkColors  = ['#1F2937', '#374151', '#4B5563', '#6B7280', '#9CA3AF'];

function rand(seed) {
  const x = Math.sin(seed) * 10000;
  return x - Math.floor(x);
}

export function initGaudiWires() {
  const dark = window.matchMedia('(prefers-color-scheme: dark)').matches;
  const palette = dark ? darkColors : lightColors;

  const canvas = document.createElement('canvas');
  const ctx = canvas.getContext('2d');
  canvas.width = window.innerWidth * 1.2;
  canvas.height = window.innerHeight * 1.2;
  canvas.style.cssText = `
    position:fixed;
    inset:-10%;
    z-index:-10;
    width:120vw;
    height:120vh;
    overflow:hidden;
    background:${dark ? '#1F2937' : '#1D4ED8'};
  `;
  document.body.prepend(canvas);

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
      const speed = 0.5 + rand(seed + x * 23 + y * 29);
      nodes.push({ x: cx, y: cy, phase, speed });
    }
  }

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

  let scrollY = 0;
  window.addEventListener('scroll', () => (scrollY = window.scrollY || 0), { passive: true });
  let mouseX = 0, mouseY = 0;
  window.addEventListener('mousemove', e => { mouseX = e.clientX; mouseY = e.clientY; });

  let time = 0;
  function draw() {
    time += 0.02;
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    const mx = (mouseX / window.innerWidth - 0.5);
    const my = (mouseY / window.innerHeight - 0.5);
    const scrollAmp = scrollY * 0.002;

    // animate node positions (wire motion)
    nodes.forEach((n, i) => {
      const waveX = Math.sin(time * n.speed + n.phase + n.y * 0.01) * 10;
      const waveY = Math.cos(time * n.speed + n.phase + n.x * 0.01) * 10;
      n._x = n.x + waveX + mx * 50 * (i % 2 ? 1 : -1);
      n._y = n.y + waveY + my * 50 * (i % 2 ? -1 : 1) - scrollAmp * 60;
    });

    // draw tiles (filled)
    tiles.forEach(t => {
      ctx.beginPath();
      ctx.moveTo(t.a._x, t.a._y);
      ctx.lineTo(t.b._x, t.b._y);
      ctx.lineTo(t.c._x, t.c._y);
      ctx.lineTo(t.d._x, t.d._y);
      ctx.closePath();

      const grad = ctx.createLinearGradient(t.a._x, t.a._y, t.c._x, t.c._y);
      grad.addColorStop(0, t.color);
      grad.addColorStop(1, dark ? '#0F172A' : '#FFFFFF20');
      ctx.fillStyle = grad;
      ctx.globalAlpha = 0.7;
      ctx.fill();
    });

    // draw wires
    ctx.globalAlpha = 1;
    ctx.lineWidth = 2;
    ctx.strokeStyle = dark ? 'rgba(255,255,255,0.08)' : 'rgba(0,0,0,0.1)';
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
    canvas.width = window.innerWidth * 1.2;
    canvas.height = window.innerHeight * 1.2;
  });
}
