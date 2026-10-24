document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.getElementById('menuToggle');
  const sidebar = document.getElementById('sidebar');
  if (toggle && sidebar) {
    toggle.addEventListener('click', () => {
      const open = sidebar.classList.toggle('sidebar-open');
      toggle.setAttribute('aria-expanded', String(open));
    });
    document.addEventListener('click', (event) => {
      if (window.innerWidth <= 900 && sidebar.classList.contains('sidebar-open')
          && !sidebar.contains(event.target) && !toggle.contains(event.target)) {
        sidebar.classList.remove('sidebar-open');
        toggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  document.querySelectorAll('[data-copy-target]').forEach(button => {
    button.addEventListener('click', async () => {
      const code = document.getElementById(button.dataset.copyTarget);
      if (!code) return;
      const text = code.textContent;
      try {
        await navigator.clipboard.writeText(text);
        button.textContent = '✓ Tersalin';
      } catch (error) {
        const area = document.createElement('textarea');
        area.value = text;
        document.body.appendChild(area);
        area.select();
        const copied = document.execCommand('copy');
        area.remove();
        button.textContent = copied ? '✓ Tersalin' : 'Salin manual';
      }
      window.setTimeout(() => { button.textContent = '▣ Salin kode'; }, 1800);
    });
  });
});
