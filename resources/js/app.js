import 'flowbite';

// On page load or when changing themes, best to add inline in `head` to avoid FOUC
document.documentElement.classList.toggle(
  "dark",
  localStorage.theme === "dark" ||
    (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches),
);
// Whenever the user explicitly chooses light mode
localStorage.theme = "light";
// Whenever the user explicitly chooses dark mode
localStorage.theme = "dark";
// Whenever the user explicitly chooses to respect the OS preference
localStorage.removeItem("theme");

document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('theme-toggle');
  const label = document.getElementById('theme-label');
  const html = document.documentElement;

  if (!btn) return;

  function applyTheme(theme) {
    // Clear any previous class
    html.classList.remove('dark');

    if (theme === 'dark') {
      html.classList.add('dark');
      localStorage.theme = 'dark';
      label.textContent = 'Dark';
    } else if (theme === 'light') {
      localStorage.theme = 'light';
      label.textContent = 'Light';
    } else {
      // System preference
      localStorage.removeItem('theme');
      if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
        html.classList.add('dark');
      }
      label.textContent = 'System';
    }
  }

  // --- Initialize based on current state ---
  let theme = localStorage.theme || 'system';
  applyTheme(theme);

  // --- Handle click: cycle through dark → light → system ---
  btn.addEventListener('click', () => {
    const current = localStorage.theme || 'system';
    const next = current === 'dark' ? 'light' : current === 'light' ? 'system' : 'dark';
    applyTheme(next);
  });

  // --- Optional: Listen for system changes when in 'system' mode ---
  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
    if (!('theme' in localStorage)) {
      if (e.matches) html.classList.add('dark');
      else html.classList.remove('dark');
    }
  });
});

// Gaudi Background
import { initGaudiWires } from './gaudi-wires';
document.addEventListener('DOMContentLoaded', initGaudiWires);

