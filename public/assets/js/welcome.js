const themeBtn = document.getElementById('themeBtn');
function toggleTheme() {
  const html = document.documentElement;
  if (html.dataset.theme === 'dark') { html.dataset.theme = 'light'; themeBtn.textContent = '🌙'; }
  else { html.dataset.theme = 'dark'; themeBtn.textContent = '☀️'; }
}
 
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
  navbar.classList.toggle('scrolled', window.scrollY > 20);
  document.getElementById('scrollTopBtn').classList.toggle('visible', window.scrollY > 400);
  updateActiveNavLink();
});
 
const sections = ['home','services','portfolio','about','testimonials','contact'];
function updateActiveNavLink() {
  const scrollY = window.scrollY + 120;
  sections.forEach(id => {
    const el = document.getElementById(id);
    if (!el) return;
    if (el.offsetTop <= scrollY && el.offsetTop + el.offsetHeight > scrollY) {
      document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
      document.querySelectorAll('.nav-link').forEach(l => {
        if (l.getAttribute('onclick') && l.getAttribute('onclick').includes(id)) l.classList.add('active');
      });
    }
  });
}
 
function scrollToSection(id) {
  const el = document.getElementById(id);
  if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
}
 
function toggleMobileMenu() { document.getElementById('mobileMenu').classList.toggle('open'); }
document.addEventListener('click', function(e) {
  if (!e.target.closest('.navbar') && !e.target.closest('.mobile-menu'))
    document.getElementById('mobileMenu').classList.remove('open');
});
 
function filterPortfolio(btn, cat) {
  document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('.portfolio-item').forEach(item => {
    item.style.transition = 'all 0.3s ease';
    if (cat === 'all' || item.dataset.cat === cat) { item.style.opacity = '1'; item.style.transform = ''; }
    else { item.style.opacity = '0.2'; item.style.transform = 'scale(0.97)'; }
  });
}
 
const projects = {
  nexus:    { title:'Nexus Brand Identity System', thumb:'🎨', thumbClass:'thumb-brand',  tags:['Branding','Identity','Figma','Illustrator','Featured'],  desc:'A comprehensive brand identity system for Nexus Corp — a leading technology consultancy. Delivered full logo suite, color system, typography, brand guidelines (50+ pages), stationery, and digital templates. The project took 3 weeks and included unlimited revisions.' },
  techflow: { title:'TechFlow Dashboard UI',       thumb:'💻', thumbClass:'thumb-ui',     tags:['UI/UX','Figma','Adobe XD','Dashboard'],                  desc:'A full SaaS dashboard redesign for TechFlow Ltd. Included user research, wireframing, high-fidelity prototyping, and design system creation. The redesign led to a 40% improvement in user conversion.' },
  pureedge: { title:'PureEdge Logo Suite',          thumb:'🔵', thumbClass:'thumb-logo',   tags:['Logo Design','Illustrator','Vector'],                    desc:'A minimal, geometric logo suite for PureEdge Inc — delivered in 15+ file formats. The wordmark, icon, and lockup variants were crafted to work at any size from favicon to billboard.' },
  spark:    { title:'Spark Campaign Kit',           thumb:'📱', thumbClass:'thumb-social', tags:['Social Media','Photoshop','Canva Pro','Campaign'],        desc:"A complete social media campaign kit for Spark Agency's Q1 2025 product launch. Included 40+ templates across Instagram, Facebook, LinkedIn, and TikTok formats." },
  bloom:    { title:'Organic Bloom Box Packaging',  thumb:'📦', thumbClass:'thumb-pack',   tags:['Packaging','Photoshop','Illustrator','Print-ready'],      desc:"Sustainable packaging design for Bloom Organics' premium skincare line. Included dieline creation, print-ready artwork, and mockup renders." }
};
 
function openProjectModal(id) {
  const p = projects[id]; if (!p) return;
  document.getElementById('modalTitle').textContent = p.title;
  const thumb = document.getElementById('modalThumb');
  thumb.textContent = p.thumb; thumb.className = 'modal-thumb ' + p.thumbClass;
  document.getElementById('modalMeta').innerHTML = p.tags.map((t,i) => `<span class="meta-pill ${i===0?'meta-pill-teal':'meta-pill-blue'}">${t}</span>`).join('');
  document.getElementById('modalDesc').textContent = p.desc;
  document.getElementById('projectModal').classList.add('open');
  document.body.style.overflow = 'hidden';
}
function closeModal() { document.getElementById('projectModal').classList.remove('open'); document.body.style.overflow = ''; }
document.getElementById('projectModal').addEventListener('click', function(e) { if (e.target === this) closeModal(); });
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
 
function submitForm() { showToast("✅ Message sent! We'll reply within 2 hours."); }
 
function showToast(msg) {
  const wrap = document.getElementById('toastWrap');
  const toast = document.createElement('div');
  toast.className = 'toast success';
  toast.innerHTML = `<span class="toast-icon">✅</span> ${msg}`;
  wrap.appendChild(toast);
  setTimeout(() => { toast.style.opacity='0'; toast.style.transform='translateY(20px)'; toast.style.transition='all 0.3s ease'; setTimeout(() => toast.remove(), 300); }, 3500);
}
 
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('visible'); revealObserver.unobserve(entry.target); } });
}, { threshold: 0.1 });
document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
 
document.querySelectorAll('.testi-dot').forEach((dot) => {
  dot.addEventListener('click', () => { document.querySelectorAll('.testi-dot').forEach(d => d.classList.remove('active')); dot.classList.add('active'); });
});
